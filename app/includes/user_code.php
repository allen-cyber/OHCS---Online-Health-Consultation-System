<?php
session_start();
include('connect.php');

if(isset($_POST['sign_up_btn'])){
    $fullname = $_POST['fullname'];
    // $age = $_POST['age'];
    // $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $random = 1000;
    $pid = '';

    $query2 = "SELECT * FROM users WHERE user_role = 'patient' ORDER BY user_id DESC LIMIT 1";
    $query_run2 = mysqli_query($con, $query2);
    if(mysqli_num_rows($query_run2) > 0){
        $query_result2 = mysqli_fetch_array($query_run2);

        $user_id = $query_result2['user_role_id'];

        $part = substr($user_id, 2);
        $random = $part + 1;
        $pid = "PT".$random;
    }
    else{
        $random = 1000 + 1;
        $pid = "PT".$random;
    }

    $query1 = "SELECT * FROM users WHERE email = '$email'";
    $query_run1 = mysqli_query($con, $query1);
    if(mysqli_num_rows($query_run1) > 0){
        $query_result1 = mysqli_fetch_array($query_run1);
        $email_already = $query_result1['email'];

        if($email == $email_already){
            $res = [
                'status' => 422,
                'message' => 'This account already exists, Please Login'
            ];
            echo json_encode($res);
            return false;
        }
    }
    else{
        $query = "INSERT INTO users (fullname, email, password, user_role_id) VALUES('$fullname', '$email', '$password', '$pid')";
        $query_run = mysqli_query($con, $query);
        $res = [
            'status' => 200,
            'message' => 'Account Created Successfully'
        ];
        echo json_encode($res);
        return false;
    }
    
}
    
if(isset($_POST['login_btn'])){
    $login_email = $_POST['email'];
    $login_user_role = $_POST['user_role'];
    $login_password = $_POST['password'];

    $sql_query = "SELECT * FROM users WHERE email = '$login_email'";
    $sql_query_run = mysqli_query($con, $sql_query);

    if(mysqli_num_rows($sql_query_run) > 0){
        while($sql_query_results = mysqli_fetch_array($sql_query_run)){
            $password_verify = password_verify($login_password, $sql_query_results['password']);
            if($sql_query_results['email'] == $login_email && $password_verify == 1 && $sql_query_results['user_role'] == $login_user_role){
                $_SESSION['status'] = "Logged in successfully..!";
                $_SESSION['user_email'] = $sql_query_results['email'];
                $_SESSION['user_role'] = $sql_query_results['user_role'];
                $_SESSION['user_role_id'] = $sql_query_results['user_role_id'];
                $_SESSION['fullname'] = $sql_query_results['fullname'];
                $_SESSION['timestamp'] = time();
                $user_id = $_SESSION['user_role_id'];
                if($sql_query_results['user_role'] == 'patient'){
                    $pat_sql = "UPDATE users SET status = 1 WHERE user_role_id = '$user_id' && user_role = 'patient'";
                    $pat_sql_run = mysqli_query($con, $pat_sql);
                    header("Location: ../html/index.php");
                    exit(0);
                }
                
                else if($sql_query_results['user_role'] == 'doctor'){
                    $doc_sql = "UPDATE users SET status = 1 WHERE user_role_id = '$user_id' && user_role = 'doctor'";
                    $doc_sql_run = mysqli_query($con, $doc_sql);
                    header("Location: ../doctor/index.php");
                    exit(0);
                }
                else if($sql_query_results['user_role'] == 'admin'){
                    $ad_qry = mysqli_query($con, "SELECT admin_status FROM admins WHERE admin_id = '$user_id'");
                    $ad_res = mysqli_fetch_array($ad_qry);
                    if($ad_res['admin_status'] == 1){
                        header("Location: ../admin/index.php");
                        exit(0);
                    }
                    else if ($ad_res['admin_status'] == 0){
                        $_SESSION['message'] = "This account is DEACTIVATED, Contact Administrator.";
                        header("Location: ../html/login.php"); 
                        exit(0);
                    }
                }
                else{
                    $_SESSION['message'] = "This account doesn't exist, Create one.";
                    header("Location: ../html/login.php");   
                    exit(0);
                }
            }
            elseif($sql_query_results['user_role'] != $login_user_role){
                $_SESSION['message'] = "Select your role properly";
                header("Location: ../html/login.php");   
                exit(0);  
            }
            else{
                $_SESSION['message'] = "Incorrect email or password";
                header("Location: ../html/login.php");   
                exit(0);   
            }
        }
    }
    else{
        $_SESSION['message'] = "This acoount doesn't exist, Create one.";
        header("Location: ../html/login.php");   
        exit(0);
    }

}
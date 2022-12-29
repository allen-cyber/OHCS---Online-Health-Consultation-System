<?php
session_start();
include('../includes/connect.php');
include('../includes/doc_security.php');

if(isset($_POST['change_password_btn'])){
    $user_id = $_SESSION['user_role_id'];
    $new_password = password_hash($_POST['new_password'], PASSWORD_DEFAULT);
    $old_password = $_POST['old_password'];

    $user_pass = mysqli_query($con, "SELECT pt.password FROM users us JOIN doctors pt ON us.user_role_id = pt.doctor_id
    WHERE us.user_role_id = '$user_id' AND pt.doctor_id = '$user_id'");
    $pass_res = mysqli_fetch_array($user_pass);
    $user_password = $pass_res['password'];

    $p_verify = password_verify($old_password, $user_password);

    if($p_verify != 1){
        $res = [
            'status' => 422,
            'message' => 'Wrong Old Password'
        ];
        echo json_encode($res);
        return false;
    }
    else if($p_verify == 1){
        $update_pass1 = mysqli_query($con, "UPDATE users SET password = '$new_password' WHERE user_role_id = '$user_id'");
        $update_pass2 = mysqli_query($con, "UPDATE doctors SET password = '$new_password' WHERE doctor_id = '$user_id'");
        if($update_pass1 && $update_pass2){
            $res = [
                'status' => 200,
                'message' => 'Password Updated Successfully'
            ];
            echo json_encode($res);
            return false;
        }
    }
    else{
        $res = [
            'status' => 500,
            'message' => 'Password Failed to Update'
        ];
        echo json_encode($res);
        return false;
    }

}
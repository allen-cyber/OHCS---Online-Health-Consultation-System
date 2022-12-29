<?php
session_start();
include("../includes/admin_security.php");
include('../includes/connect.php');

if(isset($_POST['edit_profile_btn_admins'])){
    $admin_id = $_SESSION['user_role_id'];
    $admin_name = $_POST['profile_fullname'];
    $age = $_POST['profile_age'];
    $email = $_POST['profile_email'];
    $gender = $_POST['profile_gender'];
    $contact_number = $_POST['profile_contact_number'];
    $postal_code = $_POST['profile_postal_code'];
    $address = $_POST['profile_address'];
    $dob = $_POST['profile_dob'];
    $city = $_POST['profile_city'];
    $admin_status = $_POST['profile_admin_status'];

    $sql = "UPDATE users SET fullname = '$admin_name', email = '$email', gender = '$gender', age = '$age' WHERE user_role_id = '$admin_id'";

    $sql2 = mysqli_query($con, "UPDATE admins SET admin_name = '$admin_name', contact_number = '$contact_number',
    email = '$email', age = '$age', address = '$address', gender = '$gender', dob = '$dob', city = '$city',
    admin_status = '$admin_status', postal_code = '$postal_code' WHERE admin_id = '$admin_id'");

    $sql_run = mysqli_query($con, $sql);
    if($sql_run && $sql2){
        // $user_sql = "UPDATE users SET fullname = '$doctor_name' WHERE user_role_id = '$doctor_id'";
        // $user_sql_run = mysqli_query($con, $user_sql);
        // $_SESSION['fullname'] = $doctor_name;
        $_SESSION['profile_success'] = "Profile Updated Successfully";
        header("Location: view_profile.php");
        exit(0);
    }
}


if(isset($_POST['save_admin_btn'])){
    $fullname = $_POST['adminname'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $pass_rehash = password_needs_rehash($password, PASSWORD_DEFAULT);
    $user_role = 'admin';
    $address = $_POST['address'];
    $city = $_POST['city'];
    $postal_code = $_POST['postal_code'];
    $dob = $_POST['dob'];
    $contact_number = $_POST['contact_number'];
    $register_date = date('y-m-d');
    $register_time = date('h:i:s');

    $random = 1000;
    $admin_id = '';

    $query2 = "SELECT * FROM users WHERE user_role = 'admin' ORDER BY user_id DESC LIMIT 1";
    $query_run2 = mysqli_query($con, $query2);
    if(mysqli_num_rows($query_run2) > 0){
        $query_result2 = mysqli_fetch_array($query_run2);

        $user_id = $query_result2['user_role_id'];

        $part = substr($user_id, 3);
        $random = $part + 1;
        $admin_id = "ADM".$random;
    }
    else{
        $random = 1000 + 1;
        $admin_id = "ADM".$random;
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
    $query = "INSERT INTO users (fullname, age, gender, email, password, user_role, user_role_id) 
    VALUES('$fullname', '$age', '$gender', '$email', '$password', '$user_role', '$admin_id')";
    $query_run = mysqli_query($con, $query);

    $admin_query = mysqli_query($con, "INSERT INTO admins(admin_id, admin_name, age, gender, contact_number,
    email, password, address, city, postal_code, dob, register_date, register_time)
    VALUES('$admin_id', '$fullname', '$age', '$gender', '$contact_number', '$email',
    '$password', '$address', '$city', '$postal_code', '$dob', '$register_date', '$register_time')");

    if($query_run && $admin_query){
        // $_SESSION['admin_success'] = "Account Created Successfully";
        // header('Location: admins.php');
        // exit(0);
        $res = [
        'status' => 200,
        'message' => 'Account Created Successfully'
        ];
        echo json_encode($res);
        return false;
    }
    else{
        $res = [
            'status' => 500,
            'message' => 'Account Not Created'
            ];
            echo json_encode($res);
            return false;
    }
        
}

if(isset($_GET['edit_id'])){
    $edit_id = $_GET['edit_id'];
    // echo $edit_id;
    $edit_sql = mysqli_query($con, "SELECT * FROM admins ad JOIN users us ON ad.admin_id = us.user_role_id WHERE us.user_role_id = '$edit_id' AND ad.admin_id = '$edit_id'");
    if(mysqli_num_rows($edit_sql) == 1){
        $admin_res = mysqli_fetch_array($edit_sql);
        $res = [
            'status' => 200,
            'message' => 'Admin Data Fetched Successfully',
            'data' => $admin_res
            ];
            echo json_encode($res);
            return false;
    }
    else{
        $res = [
            'status' => 404,
            'message' => 'Admin Data Not Found'
            ];
            echo json_encode($res);
            return false;
    }
}

if(isset($_POST['edit_admin_btn'])){
    $fullname = $_POST['adminname'];
    $update_id = $_POST['admin_id'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $admin_status = $_POST['admin_status'];
    $dob = $_POST['dob'];
    $contact_number = $_POST['contact_number'];
    $postal_code = $_POST['postal_code'];
    $address = $_POST['address'];
    $city = $_POST['city'];

    $update_sql = mysqli_query($con, "UPDATE users SET fullname = '$fullname', age = '$age', email = '$email',
    gender = '$gender' WHERE user_role_id = '$update_id'");

    $update_sql2 = mysqli_query($con, "UPDATE admins SET admin_name = '$fullname', age = '$age', gender = '$gender',
    contact_number = '$contact_number', email = '$email', address = '$address', city = '$city', postal_code = '$postal_code',
    dob = '$dob', admin_status = '$admin_status' WHERE admin_id = '$update_id'");
    if($update_sql && $update_sql2){
        $res = [
            'status' => 200,
            'message' => 'Admin Account Updated Successfully'
            ];
            echo json_encode($res);
            return false;
    }
    else{
        $res = [
            'status' => 500,
            'message' => 'Admin Account Failed to Update'
            ];
            echo json_encode($res);
            return false;
    }
}

if(isset($_GET['delete_id'])){
    $delete_id = $_GET['delete_id'];
    // echo $delete_id;
    $del_sql = mysqli_query($con, "DELETE FROM users WHERE user_role_id = '$delete_id'");
    $admin_del_sql = mysqli_query($con, "DELETE FROM admins WHERE admin_id = '$delete_id'");
    if($del_sql && $admin_del_sql){
        $res = [
            'status' => 200,
            'message' => 'Admin Account Deleted Successfully'
            ];
            echo json_encode($res);
            return false;
    }
    else{
        $res = [
            'status' => 500,
            'message' => 'Admin Account Failed to Delete'
            ];
            echo json_encode($res);
            return false;
    }
}

if(isset($_GET['view_id'])){
    $view_id = $_GET['view_id'];

    $user_admin_view = mysqli_query($con, "SELECT * FROM users us JOIN admins ad ON us.user_role_id = ad.admin_id WHERE us.user_role_id = '$view_id' AND ad.admin_id = '$view_id'");
    if(mysqli_num_rows($user_admin_view) == 1){
        $admin = mysqli_fetch_array($user_admin_view);
        $res = [
            'status' => 200,
            'message' => 'Admin Data Fetched Successfully',
            'data' => $admin
            ];
            echo json_encode($res);
            return false;
    }
    else{
        $res = [
            'status' => 500,
            'message' => 'Admin Data Failed to Fetch'
            ];
            echo json_encode($res);
            return false;
    }
}

if(isset($_POST['upload_profile_picture'])){
    $user_id = $_SESSION['user_role_id'];
    $profile_dp = $_FILES['profile_picture']['name'];
    $profile_dp_file = $_FILES['profile_picture']['tmp_name'];

    //image to delete when updating
    $image_to_unlink = mysqli_query($con, "SELECT profile_image FROM admins WHERE admin_id = '$user_id'");
    $img_res = mysqli_fetch_array($image_to_unlink);
    $del_img = $img_res['profile_image'];

    //image validation & upload
    $extensions = array('jpg', 'jepg', 'png', 'gif');
    $dot = '.';
    $pic_ext_xplode = explode($dot, $profile_dp);
    $pic_ext = end($pic_ext_xplode);
    if($profile_dp != ''){
        if(in_array($pic_ext, $extensions)){
            $file_name = $user_id.'.'.$pic_ext;
            $dp_query = mysqli_query($con, "UPDATE admins SET profile_pic_status = 1, profile_image = '$file_name' WHERE admin_id = '$user_id'");
            if($dp_query){
                if($del_img != ''){
                    unlink('../assets/img/avatars/'.$del_img);
                }
                move_uploaded_file($profile_dp_file, '../assets/img/avatars/'.$file_name);

                $data_img = mysqli_query($con, "SELECT profile_image FROM admins WHERE admin_id = '$user_id'");
                $img_result = mysqli_fetch_array($data_img);
                $res = [
                    'status' => 200,
                    'message' => 'New Image Uploaded Successfully',
                    'data' => $img_result['profile_image']
                ];
                echo json_encode($res);
                return false;
            }
            else{
                $res = [
                    'status' => 500,
                    'message' => 'New Image Failed Upload'
                ];
                echo json_encode($res);
                return false;
            }
            
        }
        else{
            $res = [
                'status' => 500,
                'message' => 'Choose Image File'
            ];
            echo json_encode($res);
            return false;
        }
    }
    else{
        $res = [
            'status' => 500,
            'message' => 'Image Input Cannot be Empty'
        ];
        echo json_encode($res);
        return false;
    }   
}

if(isset($_GET['dp_reset_id'])){
    $user_id = $_SESSION['user_role_id'];
    $dp_reset_id = $_GET['dp_reset_id'];
    $dp_update_query = mysqli_query($con, "UPDATE admins SET profile_pic_status = 0 WHERE admin_id = '$user_id'");
    if($dp_update_query){
        $res = [
            'status' => 200,
            'message' => 'Image Reset Successfully'
        ];
        echo json_encode($res);
        return false;
    }
    else{
        $res = [
            'status' => 500,
            'message' => 'Image Failed to Reset'
        ];
        echo json_encode($res);
        return false;
    }
}
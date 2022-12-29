<?php
session_start();
include('../includes/connect.php');
include('../includes/security.php');

if(isset($_POST['edit_profile_btn'])){
    $patient_id = $_SESSION['user_role_id'];
    $patient_name = $_POST['patient_name'];
    $address = $_POST['address'];
    $contact_number = $_POST['contact_number'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $blood_group = $_POST['blood_group'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];

    $sql = "UPDATE patients SET patient_name = '$patient_name', address = '$address', contact_number = '$contact_number', 
    city = '$city', pincode ='$pincode', blood_group = '$blood_group', gender = '$gender', dob = '$dob' WHERE patient_id = '$patient_id'";

    $sql_run = mysqli_query($con, $sql);
    if($sql_run){
        $user_sql = "UPDATE users SET fullname = '$patient_name' WHERE user_role_id = '$patient_id'";
        $user_sql_run = mysqli_query($con, $user_sql);
        $_SESSION['profile_success'] = "Profile Updated Successfully";
        $_SESSION['fullname'] = $patient_name;
        header("Location: view_profile.php");
        exit(0);
    }
}

if(isset($_POST['save_patient_profile'])){
    $patient_id = $_SESSION['user_role_id'];
    $patient_name = $_POST['patient_name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $contact_number = $_POST['contact_number'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $blood_group = $_POST['blood_group'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $admission_date = date('y-m-d');
    $admission_time = date('h:i:s');

    $pass_query = mysqli_query($con, "SELECT password FROM users WHERE user_role_id = '$patient_id'");
    $pass_res = mysqli_fetch_array($pass_query);
    $password = $pass_res['password'];

    $save_pat_query1 = mysqli_query($con, "UPDATE users SET age = '$age', gender = '$gender' WHERE user_role_id = '$patient_id'");
    
    $save_pat_query2 = mysqli_query($con, "INSERT INTO patients(patient_id, patient_name, admission_date, 
    admission_time, address, contact_number, city, pincode, password, blood_group, gender, age, dob)
    VALUES('$patient_id', '$patient_name', '$admission_date', '$admission_time', '$address', '$contact_number',
    '$city', '$pincode', '$password', '$blood_group', '$gender', '$age', '$dob')");

    if($save_pat_query1 && $save_pat_query2){
        $res = [
            'status' => 200,
            'message' => 'Patient Profile Added Successfully'
        ];
        echo json_encode($res);
        return false;
    }
    else{
        $res = [
            'status' => 500,
            'message' => 'Patient Profile Creation Failed'
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
    $image_to_unlink = mysqli_query($con, "SELECT profile_image FROM patients WHERE patient_id = '$user_id'");
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
            $dp_query = mysqli_query($con, "UPDATE patients SET profile_pic_status = 1, profile_image = '$file_name' WHERE patient_id = '$user_id'");
            if($dp_query){
                if($del_img != ''){
                    unlink('../assets/img/avatars/'.$del_img);
                }
                move_uploaded_file($profile_dp_file, '../assets/img/avatars/'.$file_name);

                $data_img = mysqli_query($con, "SELECT profile_image FROM patients WHERE patient_id = '$user_id'");
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
    $dp_update_query = mysqli_query($con, "UPDATE patients SET profile_pic_status = 0 WHERE patient_id = '$user_id'");
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

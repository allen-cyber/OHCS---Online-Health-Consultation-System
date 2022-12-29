<?php
session_start();
include("../includes/doc_security.php");
include('../includes/connect.php');

if(isset($_POST['edit_profile_btn'])){
    $doctor_id = $_SESSION['user_role_id'];
    $doctor_name = $_POST['doctor_name'];
    $age = $_POST['age'];
    $address = $_POST['Address'];
    $contact_number = $_POST['contact_number'];
    $city = $_POST['city'];
    $postal_code = $_POST['postal_code'];
    $education = $_POST['education'];
    $gender = $_POST['gender'];
    $experience = $_POST['experience'];
    $consultancy_charge = $_POST['consultancy_charge'];

    $sql = "UPDATE doctors SET doctor_name = '$doctor_name', Address = '$address', contact_number = '$contact_number', 
    city = '$city', postal_code ='$postal_code', education = '$education', gender = '$gender', experience = '$experience',
    consultancy_charge = '$consultancy_charge', age = '$age' WHERE doctor_id = '$doctor_id'";

    $sql_run = mysqli_query($con, $sql);
    if($sql_run){
        $user_sql = "UPDATE users SET fullname = '$doctor_name' WHERE user_role_id = '$doctor_id'";
        $user_sql_run = mysqli_query($con, $user_sql);
        $_SESSION['fullname'] = $doctor_name;
        $_SESSION['profile_success'] = "Profile Updated Successfully";
        header("Location: doctor_profile.php");
        exit(0);
    }
}

if(isset($_POST['upload_profile_picture'])){
    $user_id = $_SESSION['user_role_id'];
    $profile_dp = $_FILES['profile_picture']['name'];
    $profile_dp_file = $_FILES['profile_picture']['tmp_name'];

    //image to delete when updating
    $image_to_unlink = mysqli_query($con, "SELECT profile_image FROM doctors WHERE doctor_id = '$user_id'");
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
            $dp_query = mysqli_query($con, "UPDATE doctors SET profile_pic_status = 1, profile_image = '$file_name' WHERE doctor_id = '$user_id'");
            if($dp_query){
                if($del_img != ''){
                    unlink('../assets/img/avatars/'.$del_img);
                }
                move_uploaded_file($profile_dp_file, '../assets/img/avatars/'.$file_name);

                $data_img = mysqli_query($con, "SELECT profile_image FROM doctors WHERE doctor_id = '$user_id'");
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
    $dp_update_query = mysqli_query($con, "UPDATE doctors SET profile_pic_status = 0 WHERE doctor_id = '$user_id'");
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
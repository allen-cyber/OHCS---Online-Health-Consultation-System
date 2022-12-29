<?php
session_start();
include("../includes/admin_security.php");
include('../includes/connect.php');

if(isset($_POST['submit_patient'])){
    $random = 1000;
    $patient_id = '';

    $query2 = "SELECT * FROM users WHERE user_role = 'patient' ORDER BY user_id DESC LIMIT 1";
    $query_run2 = mysqli_query($con, $query2);
    if(mysqli_num_rows($query_run2) > 0){
        $query_result2 = mysqli_fetch_array($query_run2);

        $user_id = $query_result2['user_role_id'];

        $part = substr($user_id, 2);
        $random = $part + 1;
        $patient_id = "PT".$random;
    }
    else{
        $random = 1000 + 1;
        $patient_id = "PT".$random;
    }

    $patient_name = $_POST['patient_name'];
    $address = $_POST['address'];
    $contact_number = $_POST['contact_number'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $blood_group = $_POST['blood_group'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $pass_rehash = password_needs_rehash($password, PASSWORD_DEFAULT);

    $admission_date = date('Y-m-d');
    $admission_time = date('h:i:s');

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

    $pat_query = mysqli_query($con, "INSERT INTO patients (patient_id, patient_name, 
    address, contact_number, city, pincode, password, blood_group, gender, age, dob, admission_date, admission_time) 
    VALUES ('$patient_id', '$patient_name', '$address', '$contact_number', '$city', '$pincode', '$password',
    '$blood_group', '$gender', '$age', '$dob', '$admission_date', '$admission_time')");

    $user_query = mysqli_query($con, "INSERT INTO users(fullname, age, gender, email, password, user_role_id)
    VALUES ('$patient_name', '$age', '$gender', '$email', '$password', '$patient_id')");

    if($pat_query && $user_query){
        $res = [
            'status' => 200,
            'message' => 'Patient Account Created Successfully'
        ];
        echo json_encode($res);
        return false;
    }
    else{
        $res = [
            'status' => 500,
            'message' => 'Patient Account Failed to Create'
        ];
        echo json_encode($res);
        return false;
    }
}

if(isset($_GET['patient_id'])){
    $patient_edit_id = $_GET['patient_id'];

    $editquery = mysqli_query($con, "SELECT * FROM patients pat JOIN users us ON pat.patient_id = us.user_role_id 
    WHERE pat.patient_id = '$patient_edit_id' AND us.user_role_id = '$patient_edit_id'");

    if(mysqli_num_rows($editquery) == 1){
        $patient = mysqli_fetch_array($editquery);
        $res = [
            'status' => 200,
            'message' => 'Patient Data Fetched Successfully',
            'data' => $patient
        ];
        echo json_encode($res);
        return false;
    }
    else{
        $res = [
            'status' => 500,
            'message' => 'Patient Data Failed'
        ];
        echo json_encode($res);
        return false;
    }
}

if(isset($_POST['save_patient'])){

    $patient_id = $_POST['patient_id'];
    $patient_name = $_POST['patient_name'];
    $address = $_POST['address'];
    $contact_number = $_POST['contact_number'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $blood_group = $_POST['blood_group'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $pat_status = $_POST['pat_status'];
    

    $update_query = mysqli_query($con, "UPDATE patients SET patient_name = '$patient_name', 
    address = '$address', contact_number = '$contact_number', city = '$city', pincode = '$pincode',
    blood_group = '$blood_group', gender = '$gender', age = '$age', dob = '$dob',
    pat_status = '$pat_status' WHERE patient_id = '$patient_id'");

    $update_query2 = mysqli_query($con, "UPDATE users SET fullname = '$patient_name', age = '$age',
    gender = '$gender', email = '$email' WHERE user_role_id = '$patient_id'");

    if($update_query && $update_query2){
        $res = [
            'status' => 200,
            'message' => 'Patient Account Updated Successfully'
        ];
        echo json_encode($res);
        return false;
    }
    else{
        $res = [
            'status' => 500,
            'message' => 'Patient Account Failed to Update'
        ];
        echo json_encode($res);
        return false;
    }
}

if(isset($_GET['delete_id'])){
    $delete_id = $_GET['delete_id'];

    $pat_delete_sql = mysqli_query($con, "DELETE FROM patients WHERE patient_id = '$delete_id'");
    $user_delete_sql = mysqli_query($con, "DELETE FROM users WHERE user_role_id = '$delete_id'");

    if($pat_delete_sql && $user_delete_sql){
        $res = [
            'status' => 200,
            'message' => 'Patient Account Deleted Successfully'
        ];
        echo json_encode($res);
        return false;
    }
    else{
        $res = [
            'status' => 500,
            'message' => 'Patient Account Failed to Delete'
        ];
        echo json_encode($res);
        return false;
    }
}
<?php
session_start();
include("../includes/admin_security.php");
include('../includes/connect.php');

if(isset($_POST['submit_doctor'])){
    $random = 1000;
    $doctor_id = '';

    $query2 = "SELECT * FROM users WHERE user_role = 'doctor' ORDER BY user_id DESC LIMIT 1";
    $query_run2 = mysqli_query($con, $query2);
    if(mysqli_num_rows($query_run2) > 0){
        $query_result2 = mysqli_fetch_array($query_run2);

        $user_id = $query_result2['user_role_id'];

        $part = substr($user_id, 3);
        $random = $part + 1;
        $doctor_id = "DOC".$random;
    }
    else{
        $random = 1000 + 1;
        $doctor_id = "DOC".$random;
    }
    

    $address = $_POST['address'];
    $department = $_POST['department'];
    $doctor_name = $_POST['doctor_name'];
    $contact_number = $_POST['contact_number'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $education = $_POST['education'];
    $experience = $_POST['experience'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $pass_rehash = password_needs_rehash($password, PASSWORD_DEFAULT);
    $consultancy_charge = $_POST['consultancy_charge'];
    $user_role = 'doctor';

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

    $doc_query = mysqli_query($con, "INSERT INTO doctors(doctor_id, doctor_name, age, gender, department_id,
    contact_number, Address, city, postal_code, password, education, experience, consultancy_charge) 
    VALUES('$doctor_id', '$doctor_name', '$age', '$gender', '$department', '$contact_number', '$address',
    '$city', '$pincode', '$password', '$education', '$experience', '$consultancy_charge')");

    $user_query = mysqli_query($con, "INSERT INTO users(fullname, age, gender, email, password, user_role, user_role_id)
    VALUES ('$doctor_name', '$age', '$gender', '$email', '$password', '$user_role', '$doctor_id')");

    if($doc_query && $user_query){
        $res = [
            'status' => 200,
            'message' => 'Doctor Account Created Successfully'
        ];
        echo json_encode($res);
        return false;
    }
    else{
        $res = [
            'status' => 500,
            'message' => 'Doctor Account Failed to Create'
        ];
        echo json_encode($res);
        return false;
    }
}

if(isset($_GET['doctor_id'])){
    $doctor_edit_id = $_GET['doctor_id'];

    $editquery = mysqli_query($con, "SELECT * FROM doctors doc JOIN users us ON doc.doctor_id = us.user_role_id 
    WHERE doc.doctor_id = '$doctor_edit_id' AND us.user_role_id = '$doctor_edit_id'");

    if(mysqli_num_rows($editquery) == 1){
        $doctor = mysqli_fetch_array($editquery);
        $res = [
            'status' => 200,
            'message' => 'Patient Data Fetched Successfully',
            'data' => $doctor
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

if(isset($_POST['save_doctor'])){

    $doctor_id = $_POST['doctor_id'];
    $address = $_POST['address'];
    $department = $_POST['department'];
    $doctor_name = $_POST['doctor_name'];
    $contact_number = $_POST['contact_number'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $education = $_POST['education'];
    $experience = $_POST['experience'];
    $consultancy_charge = $_POST['consultancy_charge'];
    $doc_status = $_POST['doc_status'];
    

    $update_query = mysqli_query($con, "UPDATE doctors SET doctor_id = '$doctor_id', doctor_name = '$doctor_name', 
    age = '$age', gender = '$gender', department_id = '$department',
    contact_number = '$contact_number', Address = '$address', city = '$city', postal_code = '$pincode', 
    education = '$education', experience = '$experience', consultancy_charge = '$consultancy_charge',
    doc_status = '$doc_status' WHERE doctor_id = '$doctor_id'");

    $update_query2 = mysqli_query($con, "UPDATE users SET fullname = '$doctor_name', age = '$age', gender = '$gender', 
    email = '$email' WHERE user_role_id = '$doctor_id'");

    if($update_query && $update_query2){
        $res = [
            'status' => 200,
            'message' => 'Doctor Account Updated Successfully'
        ];
        echo json_encode($res);
        return false;
    }
    else{
        $res = [
            'status' => 500,
            'message' => 'Doctor Account Failed to Update'
        ];
        echo json_encode($res);
        return false;
    }
}

if(isset($_GET['delete_id'])){
    $delete_id = $_GET['delete_id'];

    $pat_delete_sql = mysqli_query($con, "DELETE FROM doctors WHERE doctor_id = '$delete_id'");
    $user_delete_sql = mysqli_query($con, "DELETE FROM users WHERE user_role_id = '$delete_id'");

    if($pat_delete_sql && $user_delete_sql){
        $res = [
            'status' => 200,
            'message' => 'Doctor Account Deleted Successfully'
        ];
        echo json_encode($res);
        return false;
    }
    else{
        $res = [
            'status' => 500,
            'message' => 'Doctor Account Failed to Delete'
        ];
        echo json_encode($res);
        return false;
    }
}
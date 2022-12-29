<?php
session_start();
include("../includes/doc_security.php");
include("../includes/connect.php");

if(isset($_POST['add_treatment'])){
    $app_id = $_GET['app_id'];
    $doctor_id = $_SESSION['user_role_id'];
    $treatment_discription = $_POST['treatment_discription'];
    $treatment_date = "20".date('y-m-d');
    $treatment_time = date('h:i:s');
    $treatment_record_id = $_POST['treatment_record_id'];

    $pat = mysqli_query($con, "SELECT * FROM appointments WHERE appointment_id = '$app_id'");
    $pat_run = mysqli_fetch_array($pat);
    $patient_id = $pat_run['patient_id'];

    $filename = $_FILES['treatment_file']['name'];
    $file = $_FILES['treatment_file']['tmp_name'];
    $exts = array('jpg', 'jepg', 'png');
    $file_ext = end(explode('.', $filename));
    if(in_array($file_ext, $exts)){
        move_uploaded_file($file, 'treatment_uploads/'.$filename);
    }
    else{
        $_SESSION['treatment_failure'] = "Select images only..!";
        header("Location: add_treatments.php?app_id=$app_id");
    }

    $treatment_recs = mysqli_query($con, "SELECT treatment_records_id, treatment_type, treatment_cost FROM treatment_records WHERE treatment_records_id = '$treatment_record_id'");
    $treatment_recs_res = mysqli_fetch_array($treatment_recs);
    $treatment_amount = $treatment_recs_res['treatment_cost'];
    $treatment_type_bill = $treatment_recs_res['treatment_type'];

    $treat = mysqli_query($con, "INSERT INTO treatments(treatment_records_id, appointment_id, doctor_id, 
    patient_id, treatment_description, uploads, treatment_date, treatment_time) VALUES('$treatment_record_id',
    '$app_id', '$doctor_id', '$patient_id', '$treatment_discription', '$filename', '$treatment_date', '$treatment_time')");

    $billing_query = mysqli_query($con, "SELECT billing_id FROM billing WHERE appointment_id = '$app_id'");
    $billing_query_res = mysqli_fetch_array($billing_query);
    $billing_id = $billing_query_res['billing_id'];


    $billing_records_sql = mysqli_query($con, "INSERT INTO billing_records(billing_id, bill_type_id, bill_type, bill_amount, bill_date)
    VALUES('$billing_id', '$treatment_record_id', '(Treatment) - $treatment_type_bill', '$treatment_amount', '$treatment_date')");

    if($treat){
        $_SESSION['treatment_success'] = "Treatment Added Successfully";
        header("Location: add_treatments.php?app_id=$app_id"); 
    }
    else{
        $_SESSION['treatment_failure'] = "Treat Failed to Add";
        header("Location: add_treatments.php?app_id=$app_id"); 
    }

}

if(isset($_POST['edit_treatment_submit_btn'])){
    $treatment_id = $_POST['treatment_id'];
    $treatment_discription = $_POST['treatment_discription'];
    $treatment_record_id = $_POST['treatment_record_id'];
    $file = $_FILES['treatment_file']['tmp_name'];
    $treatment_filename = $_FILES['treatment_file']['name'];
    $treatment_status = $_POST['treatment_status'];

    if($treatment_filename == null){
        $tret_update = mysqli_query($con, "UPDATE treatments SET treatment_records_id = '$treatment_record_id',
        treatment_description = '$treatment_discription', treatment_status = '$treatment_status'
        WHERE treatment_id = '$treatment_id'");
        if($tret_update){
            $res = [
                'status' => 200,
                'message' => 'Treatment Updated Successfully'
            ];
            echo json_encode($res);
            return false;
        }
    }
    else if($treatment_filename != null){
        
        $exts = array('jpg', 'jepg', 'png');
        $dot = '.';
        $file_parts = explode($dot, $treatment_filename);
        $file_ext = end($file_parts);
        if(in_array($file_ext, $exts)){
            $delete_file_sql = mysqli_query($con, "SELECT uploads FROM treatments WHERE treatment_id = '$treatment_id'");
            $file_to_delete = mysqli_fetch_array($delete_file_sql);
            $file_to_delete_img = $file_to_delete['uploads'];
            unlink('treatment_uploads/'.$file_to_delete_img);
            $fname = date('Y_m_d').'_'.date('h_i_s').'_'.time().'.'.$file_ext;
            move_uploaded_file($file, 'treatment_uploads/'.$fname);

            $tret_update = mysqli_query($con, "UPDATE treatments SET treatment_records_id = '$treatment_record_id',
            treatment_description = '$treatment_discription', treatment_status = '$treatment_status', uploads = '$fname'
            WHERE treatment_id = '$treatment_id'");

            if($tret_update){
                $res = [
                    'status' => 200,
                    'message' => 'Treatment Updated Successfully'
                ];
                echo json_encode($res);
                return false;
            }
        }
        else{
            $res = [
                'status' => 500,
                'message' => 'Treatment Failed to Update'
            ];
            echo json_encode($res);
            return false;
        }
    }
    else{
        $res = [
            'status' => 500,
            'message' => 'Treatment Failed to Update'
        ];
        echo json_encode($res);
        return false;
    }
}
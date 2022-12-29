<?php
session_start();
include("../includes/doc_security.php");
include('../includes/connect.php');

if(isset($_POST['approve_appointment'])){

    $approve_id = $_POST['approve_id'];
    // echo $approve_id;
    $approve_sql = "UPDATE appointments SET appointment_status = 1 WHERE appointment_id = $approve_id";
    $approve_sql_run = mysqli_query($con, $approve_sql);

    if($approve_sql_run){
        $_SESSION['appointment_success'] = "Appointment Approved Successfully";
        header("Location: pending_appointments.php");
        exit(0);
    }
    else{
        $_SESSION['appointment_failure'] = "Appointment Failed to Approve";
        header("Location: pending_appointments.php");
        exit(0);
    }
}

if(isset($_POST['disapprove_appointment'])){

    $approve_id = $_POST['approve_id'];
    // echo $approve_id;
    $approve_sql = "UPDATE appointments SET appointment_status = 0 WHERE appointment_id = $approve_id";
    $approve_sql_run = mysqli_query($con, $approve_sql);
    
    if($approve_sql_run){
        $_SESSION['appointment_success'] = "Appointment Disapproved Successfully";
        header("Location: approved_appointments.php");
        exit(0);
    }
    else{
        $_SESSION['appointment_failure'] = "Appointment Failed to Disapprove";
        header("Location: approved_appointments.php");
        exit(0);
    }
}

if(isset($_POST['doc_submit_prescription'])){
    $app_id = $_GET['app_id'];
    $pat_id = $_GET['pat_id'];
    $doc_id = $_SESSION['user_role_id'];
    $prescription_date = "20".date('y-m-d');

    $pres_query = mysqli_query($con, "INSERT INTO prescriptions(doctor_id, patient_id, prescription_date, 
    appointment_id) VALUES('$doc_id', '$pat_id', '$prescription_date', '$app_id')");
    if($pres_query){
        $pres_id = mysqli_insert_id($con);
        $_SESSION['prescription_success'] = "Prescription Added Successfully.";
        header("Location: doc_new_prescription_code.php?app_id=$app_id&pat_id=$pat_id&pres_id=$pres_id");
    }
}

if(isset($_POST['add_new_prescription'])){
    $medicine_id = $_POST['medicine'];
    $med_qry = mysqli_query($con, "SELECT * FROM medicine WHERE medicine_id = '$medicine_id'");
    $med_res = mysqli_fetch_array($med_qry);

    $medicine_name = $med_res['medicine_name'];
    $cost = $med_res['medicine_cost'];

    $unit = $_POST['unit'];
    $total_cost = $cost * $unit;
    $dosage = $_POST['dosage'];

    $pres_id = $_GET['pres_id'];
    $app_id = $_GET['app_id'];
    $pat_id = $_GET['pat_id'];
    

    $new_pres_qry = mysqli_query($con, "INSERT INTO prescription_records(prescription_id, medicine_name, cost, 
    total_cost, unit, dosage) VALUES('$pres_id', '$medicine_name', '$cost', '$total_cost', '$unit', '$dosage')");

    $billing_query = mysqli_query($con, "SELECT billing_id FROM billing WHERE appointment_id = '$app_id'");
    $billing_query_res = mysqli_fetch_array($billing_query);
    $billing_id = $billing_query_res['billing_id'];

    $pres_date = date('Y-m-d');
    $billing_records_sql = mysqli_query($con, "INSERT INTO billing_records(billing_id, bill_type_id, bill_type, bill_amount, bill_date)
    VALUES('$billing_id', '$medicine_id', '(Prescription) - $medicine_name', '$total_cost', '$pres_date')");

    if($new_pres_qry){
        $_SESSION['prescription_success'] = "Prescription Record Added Successfully.";
        header("Location: doc_new_prescription_code.php?app_id=$app_id&pat_id=$pat_id&pres_id=$pres_id");
    }
}

if(isset($_POST['pres_delete_btn'])){
    $delete_id = $_POST['pres_delete_id'];
    $app_id = $_POST['app_del_id'];
    $del_pres = mysqli_query($con, "DELETE FROM prescriptions WHERE prescription_id = '$delete_id'");
    $del_pres_record = mysqli_query($con, "DELETE FROM prescription_records WHERE prescription_id = '$delete_id'");
    if($del_pres_record && $del_pres){
        $_SESSION['del_success'] = "Prescription Deleted Successfully";
        header("Location: appointment_report.php?id=$app_id");
    }
}

if(isset($_POST['pres_record_delete_btn'])){
    $pres_id = $_GET['pres_id'];
    $app_id = $_GET['app_id'];
    $pat_id = $_GET['pat_id'];
    
    $delete_id = $_POST['pres_delete_id'];
    $app_id = $_POST['app_del_id'];
    $del_pres_record = mysqli_query($con, "DELETE FROM prescription_records WHERE prescription_records_id = '$delete_id'");
    if($del_pres_record){
        $_SESSION['rec_del_success'] = "Prescription Record Deleted Successfully";
        header("Location: doc_new_prescription_code.php?app_id=$app_id&pat_id=$pat_id&pres_id=$pres_id");
    }
}

if(isset($_POST['send_appointment'])){

    $appointment_type = $_POST['appointment_type'];
    $patient_id = $_POST['patient_id'];;
    $room_id = $_POST['room_id'];
    $appointment_date = $_POST['appointment_date'];
    $appointment_time = $_POST['appointment_time'];
    $doctor_id = $_POST['doctor_id'];
    $appointment_reason = $_POST['appointment_reason'];

    $dept_query = mysqli_query($con, "SELECT * FROM doctors WHERE doctor_id = '$doctor_id'");
    $dept_result = mysqli_fetch_array($dept_query);
    $department_id = $dept_result['department_id'];


    $room_query = mysqli_query($con, "SELECT * FROM appointments WHERE room_id = '$room_id' AND appointment_date = '$appointment_date' AND appointment_status = 1");
    if(mysqli_num_rows($room_query) > 0){
        $res = [
            'status' => 500,
            'message' => 'The selected room is already reserved for ('.$appointment_date.')'
        ];
        echo json_encode($res);
        return false;
    }
    else{
        $query = "INSERT INTO appointments(appointment_type, patient_id, room_id, department_id, 
        appointment_date, appointment_time, doctor_id, appointment_reason) 
        VALUES('$appointment_type', '$patient_id', '$room_id', '$department_id', '$appointment_date', 
        '$appointment_time', '$doctor_id', '$appointment_reason')";

        $query_run = mysqli_query($con, $query);

        $appointment_id_bill = mysqli_insert_id($con);
        
        if($appointment_type == 'Regular'){
            $tax_amount = 10;
        }
        else if($appointment_type == 'VIP'){
            $tax_amount = 15;
        }
        else if($appointment_type == 'Premium'){
            $tax_amount = 20;
        }

        $bills = mysqli_query($con,"SELECT consultancy_charge FROM doctors WHERE doctor_id = '$doctor_id'");
        $consult_res = mysqli_fetch_array($bills);
        $consult_amount = $consult_res['consultancy_charge'];

        $billing_sql = mysqli_query($con, "INSERT INTO billing(appointment_id, patient_id, doctor_id, billing_date, billing_time, tax_amount) 
        VALUES('$appointment_id_bill', '$patient_id', '$doctor_id', '$appointment_date', '$appointment_time', '$tax_amount')");

        $billing_id = mysqli_insert_id($con);

        $doc_name_qry = mysqli_query($con, "SELECT doctor_name FROM doctors WHERE doctor_id = '$doctor_id'");
        $doc_name_res = mysqli_fetch_array($doc_name_qry);
        $doctor_name = $doc_name_res['doctor_name'];

        $billing_records_sql = mysqli_query($con, "INSERT INTO billing_records(billing_id, bill_type_id, bill_type, bill_amount, bill_date)
        VALUES('$billing_id', 1, 'Consultancy Charge - Dr. $doctor_name', '$consult_amount', '$appointment_date')");


        if($query_run){
            $res = [
                'status' => 200,
                'message' => 'Appointment Added Successfully'

            ];
            echo json_encode($res);
            return false;
        }
        else{
            $res = [
                'status' => 500,
                'message' => 'Appointment Failed..!'

            ];
            echo json_encode($res);
            return false;
        }
    }
    
}

if(isset($_GET['treatment_edit_id'])){
    $treatment_edit_id = $_GET['treatment_edit_id'];
    $tret_sql = mysqli_query($con, "SELECT * FROM treatments WHERE treatment_id = '$treatment_edit_id'");
    if($tret_sql){
        $treatment_record = mysqli_fetch_array($tret_sql);
        $res = [
            'status' => 200,
            'message' => 'Treatment Fetched Successfully',
            'data' => $treatment_record
        ];
        echo json_encode($res);
        return false;
    }
    else{
        $res = [
            'status' => 500,
            'message' => 'Treatment Failed to Fetch'
        ];
        echo json_encode($res);
        return false;
    }
}

if(isset($_GET['finish_id'])){
    $finish_id = $_GET['finish_id'];
    $finish_query = mysqli_query($con, "UPDATE appointments SET appointment_status = 2 WHERE appointment_id = '$finish_id'");
    if($finish_query){
        $res =[
            'status' => 200,
            'message' => 'Appointment is Completed Successfully'
        ];
        echo json_encode($res);
        return false;
    }
    else{
        $res =[
            'status' => 500,
            'message' => 'Appointment Completion Failed'
        ];
        echo json_encode($res);
        return false;
    }
}

if(isset($_GET['edit_id'])){
    $edit_id = $_GET['edit_id'];
    $edit_app_qry = mysqli_query($con, "SELECT * FROM appointments WHERE appointment_id = '$edit_id'");
    if(mysqli_num_rows($edit_app_qry) == 1){
        $edit_app_res = mysqli_fetch_array($edit_app_qry);
        $res = [
            'status' => 200,
            'message' => 'Appointment Data Fetched Successfully',
            'data' => $edit_app_res
        ];
        echo json_encode($res);
        return false;
    }
    else{
        $res = [
            'status' => 500,
            'message' => 'Appointment Data Failed to Fetch',
            'data' => $edit_app_res
        ];
        echo json_encode($res);
        return false;
    }
}

if(isset($_POST['update_appointment_btn'])){
    $appointment_id = $_POST['appointment_id'];
    $appointment_type = $_POST['appointment_type'];
    $appointment_date = $_POST['appointment_date'];
    $appointment_time = $_POST['appointment_time'];
    $appointment_reason = $_POST['appointment_reason'];
    $room_id = $_POST['room_id'];
    $doctor_id = $_POST['doctor_id'];

    $availability_sql = mysqli_query($con, "SELECT * FROM appointments 
    WHERE appointment_id != '$appointment_id' AND room_id = '$room_id' 
    AND appointment_date = '$appointment_date' AND appointment_status = 1");
    if(mysqli_num_rows($availability_sql) > 0){
        $res = [
            'status' => 500,
            'message' => 'The selected room is already reserved for ('.$appointment_date.')'
        ];
        echo json_encode($res);
        return false; 
    }
    else{
        $update_query = mysqli_query($con, "UPDATE appointments SET appointment_type = '$appointment_type',
        appointment_date = '$appointment_date', appointment_time = '$appointment_time', doctor_id = '$doctor_id',
        room_id = '$room_id', appointment_reason = '$appointment_reason' WHERE appointment_id = '$appointment_id'");
        if($update_query){
            $res = [
                'status' => 200,
                'message' => 'Appointment Updated Successfully'
            ];
            echo json_encode($res);
            return false;
        }
        else{
            $res = [
                'status' => 500,
                'message' => 'Appointment Failed to Update',
            ];
            echo json_encode($res);
            return false;
        }
    }
}

if(isset($_GET['app_delete_id'])){
    $app_delete_id = $_GET['app_delete_id'];
    $del_query = mysqli_query($con, "DELETE FROM appointments WHERE appointment_id = '$app_delete_id'");
    if($del_query){
        $res = [
            'status' => 200,
            'message' => 'Appointment Deleted Successfully'
        ];
        echo json_encode($res);
        return false;
    }
    else{
        $res = [
            'status' => 500,
            'message' => 'Appointment Failed to Delete',
        ];
        echo json_encode($res);
        return false;
    }
}

if(isset($_POST['change_discount_btn'])){
    $billing_id = $_POST['billing_id'];
    $appointment_id = $_POST['appointment_id'];
    $discount_amount = $_POST['discount_amount'];
    $discount_reason = $_POST['discount_reason'];

    $discount_amount_query = mysqli_query($con, "UPDATE billing SET discount_amount = '$discount_amount', discount_reason = '$discount_reason' WHERE billing_id = '$billing_id' AND appointment_id = '$appointment_id'");
    if($discount_amount_query){
        $res = [
            'status' => 200,
            'message' => 'Discount Amount Updated Successfully'
        ];
        echo json_encode($res);
        return false;
    }
    else{
        $res = [
            'status' => 500,
            'message' => 'Discount Amount Failed to Update'
        ];
        echo json_encode($res);
        return false;
    }
}
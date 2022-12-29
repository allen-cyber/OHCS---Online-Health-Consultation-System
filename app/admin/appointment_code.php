<?php
session_start();
include("../includes/admin_security.php");
include('../includes/connect.php');

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

if(isset($_GET['app_edit_id'])){
    $app_edit_id = $_GET['app_edit_id'];
    $app_sql = mysqli_query($con, "SELECT * FROM appointments WHERE appointment_id = '$app_edit_id'");
    if(mysqli_num_rows($app_sql) == 1){
        $app_res = mysqli_fetch_array($app_sql);
        $res = [
            'status' => 200,
            'message' => 'Appointment Data Fetched Successfully',
            'data' => $app_res
        ];
        echo json_encode($res);
        return false;
    }
    else{
        $res = [
            'status' => 500,
            'message' => 'Appointment Data Failed to Fetch',
        ];
        echo json_encode($res);
        return false;
    }   
}
if(isset($_POST['save_appointment_edit_btn'])){
    $appointment_id = $_POST['appointment_id'];
    $appointment_type = $_POST['appointment_type'];
    $appointment_date = $_POST['appointment_date'];
    $appointment_time = $_POST['appointment_time'];
    $doctor_id = $_POST['doctor_id'];
    $room_id = $_POST['room_id'];
    $appointment_reason = $_POST['appointment_reason'];

    $compare_valid = mysqli_query($con, "SELECT * FROM appointments WHERE appointment_id != '$appointment_id' AND room_id = '$room_id' AND appointment_date = '$appointment_date' AND appointment_status = 1");
    if(mysqli_num_rows($compare_valid) > 0){
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

    // $rood_sql = mysqli_query($con, "SELECT room_id")
    $app_del_sql = mysqli_query($con, "DELETE FROM appointments WHERE appointment_id = '$app_delete_id'");
    if($app_del_sql){
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
            'message' => 'Appointment Failed Delete'
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
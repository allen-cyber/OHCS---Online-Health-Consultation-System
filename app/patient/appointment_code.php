<?php
session_start();
include('../includes/security.php');
include('../includes/connect.php');

if(isset($_POST['send_appointment'])){

    $appointment_type = $_POST['appointment_type'];
    $patient_id = $_POST['patient_id'];
    $room_id = $_POST['room_id'];
    $appointment_date = $_POST['appointment_date'];
    $appointment_time = $_POST['appointment_time'];
    $doctor_id = $_POST['doctor_id'];
    $appointment_reason = $_POST['appointment_reason'];

    $dept_query = mysqli_query($con, "SELECT * FROM doctors WHERE doctor_id = '$doctor_id'");
    $dept_result = mysqli_fetch_array($dept_query);
    $department_id = $dept_result['department_id'];

    $room_sql = mysqli_query($con, "SELECT * FROM appointments WHERE room_id = '$room_id' AND appointment_date = '$appointment_date' AND appointment_status = 1");
    if(mysqli_num_rows($room_sql) > 0){
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
        if($query_run){
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

            $room_update = mysqli_query($con, "UPDATE rooms SET room_availability = 0 WHERE room_id = '$room_id'");
            if($room_update){
                $res = [
                    'status' => 200,
                    'message' => 'Appointment Added Successfully'
                ];
                echo json_encode($res);
                return false;
            }  
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

if(isset($_POST['update_appointment'])){

    $edit_id = $_POST['edit_id'];
    $appointment_type = $_POST['appointment_type'];
    $patient_id = $_SESSION['user_role_id'];
    $room_id = $_POST['room_id'];
    
    $appointment_date = $_POST['appointment_date'];
    $appointment_time = $_POST['appointment_time'];
    $doctor_id = $_POST['doctor_id'];
    $appointment_reason = $_POST['appointment_reason'];

    $dep_sql = mysqli_query($con, "SELECT department_id FROM doctors WHERE doctor_id = '$doctor_id'");
    $dep_res = mysqli_fetch_array($dep_sql);
    $department_id = $dep_res['department_id'];

    $room_sql = mysqli_query($con, "SELECT * FROM appointments WHERE appointment_id != '$edit_id' 
    AND room_id = '$room_id' AND appointment_date = '$appointment_date' AND appointment_status = 1");
    if(mysqli_num_rows($room_sql) > 0){
        $_SESSION['appointment_failure'] = "The selected room is already reserved for (".$appointment_date.")";
        header("Location: view_appointments.php");
        exit(0);
    }
    else{
        $up_query = "UPDATE appointments SET appointment_type = '$appointment_type', patient_id ='$patient_id', 
        room_id = '$room_id', department_id = '$department_id', appointment_date = '$appointment_date', 
        appointment_time = '$appointment_time', doctor_id = '$doctor_id', appointment_reason = '$appointment_reason' 
        WHERE appointment_id = '$edit_id'";

        $up_query_run = mysqli_query($con, $up_query);

        if($up_query_run){
            $_SESSION['appointment_success'] = "Appointment Updated Successfully";
            header("Location: view_appointments.php");
            exit(0);
        }
    }

}

if(isset($_POST['delete_appointment'])){

    $delete_id = $_POST['delete_id'];

    $room_sql = mysqli_query($con, "SELECT room_id FROM appointments WHERE appointment_id = $delete_id");
    $room_res = mysqli_fetch_array($room_sql);
    $room_id = $room_res['room_id'];

    $del_sql = "DELETE FROM appointments WHERE appointment_id = $delete_id";
    $del_sql_run = mysqli_query($con, $del_sql);

    if($del_sql_run){
        $_SESSION['appointment_success'] = "Appointment Deleted Successfully";
        header("Location: view_appointments.php");
        exit(0);
    }
}
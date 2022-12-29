<?php
session_start();
include('../includes/admin_security.php');
include('../includes/connect.php');

if(isset($_POST['save_room_btn'])){
    $random = 1000;
    $room_id = '';

    $query2 = "SELECT * FROM rooms ORDER BY id DESC LIMIT 1";
    $query_run2 = mysqli_query($con, $query2);
    if(mysqli_num_rows($query_run2) > 0){
        $query_result2 = mysqli_fetch_array($query_run2);

        $room = $query_result2['room_id'];
        $part = substr($room, 2);
        $random = $part + 1;
        $room_id = "RM".$random;
    }
    else{
        $random = 1000 + 1;
        $room_id = "RM".$random;
    }

    $room_type = $_POST['room_type'];
    $room_number = $_POST['room_number'];
    $room_size = $_POST['room_size'];

    $room_sql = mysqli_query($con, "INSERT INTO rooms(room_id, room_number, room_type, room_size)
    VALUES('$room_id', '$room_number', '$room_type', '$room_size')");

    if($room_sql){
        $res = [
            'status' => 200,
            'message' => 'Room Added Successfully'
        ];
        echo json_encode($res);
        return false;
    }
    else{
        $res = [
            'status' => 500,
            'message' => 'Room Failed Add'
        ];
        echo json_encode($res);
        return false;
    }
}

if(isset($_GET['room_edit_id'])){
    $room_edit_id = $_GET['room_edit_id'];

    $room_sql = mysqli_query($con, "SELECT * FROM rooms WHERE room_id = '$room_edit_id'");
    if(mysqli_num_rows($room_sql) == 1){
        $room_res = mysqli_fetch_array($room_sql);
        if($room_res){
            $res = [
                'status' => 200,
                'message' => 'Room Data Fetched Successfully',
                'data' => $room_res
            ];
            echo json_encode($res);
            return false;
        }
        else{
            $res = [
                'status' => 500,
                'message' => 'Room Data Failed to Fetch'
            ];
            echo json_encode($res);
            return false;
        }
    }
    else{
        $res = [
            'status' => 500,
            'message' => 'No Room Data Found'
        ];
        echo json_encode($res);
        return false;
    }
}

if(isset($_POST['save_edit_room_btn'])){
    $edit_room_id = $_POST['edit_room_id'];
    $edit_room_number = $_POST['edit_room_number'];
    $edit_room_size = $_POST['edit_room_size'];
    $edit_status = $_POST['edit_status'];
    $edit_room_type = $_POST['edit_room_type'];

    $update_room = mysqli_query($con, "UPDATE rooms SET room_number = '$edit_room_number',room_type = '$edit_room_type',
    room_size = '$edit_room_size', status = '$edit_status' WHERE room_id = '$edit_room_id'");
    if($update_room){
        $res = [
            'status' => 200,
            'message' => 'Room Updated Successfully'
        ];
        echo json_encode($res);
        return false;
    }
    else{
        $res = [
            'status' => 500,
            'message' => 'Room Failed Update'
        ];
        echo json_encode($res);
        return false;
    }
}

if(isset($_GET['delete_id'])){
    $delete_id = $_GET['delete_id'];

    $delete_sql = mysqli_query($con, "DELETE FROM rooms WHERE room_id = '$delete_id'");
    if($delete_sql){
        $res = [
            'status' => 200,
            'message' => 'Room Deleted Successfully'
        ];
        echo json_encode($res);
        return false;
    }
    else{
        $res = [
            'status' => 500,
            'message' => 'Room Failed to Delete'
        ];
        echo json_encode($res);
        return false;
    }
}
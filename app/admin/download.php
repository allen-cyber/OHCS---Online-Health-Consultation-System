<?php
session_start();
include("../includes/admin_security.php");
include('../includes/connect.php');

if(isset($_GET['download_id'])){
    $download_id = $_GET['download_id'];
    $down_sql = mysqli_query($con, "SELECT uploads FROM treatments WHERE treatment_id = '$download_id'");
    if(mysqli_num_rows($down_sql) > 0){
        $row = mysqli_fetch_array($down_sql);
        $url = "../doctor/treatment_uploads/".$row['uploads'];
        $file = basename($url);
        
        if(file_put_contents($file, file_get_contents($url))){
            $res = [
                'status' => 200,
                'message' => 'File Downloaded Successfully'
            ];
            echo json_encode($res);
            return false;
        }
        else{
            $res = [
                'status' => 500,
                'message' => 'Download Failed'
            ];
            echo json_encode($res);
            return false;
        }
    }
    else{
        $res = [
            'status' => 500,
            'message' => 'Download Failed'
        ];
        echo json_encode($res);
        return false;
    }
    
}
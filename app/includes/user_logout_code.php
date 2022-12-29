<?php
session_start();
include('connect.php');

$user_id = $_SESSION['user_role_id'];
if($_SESSION['user_role'] == 'doctor'){
    $doc_sql = "UPDATE users SET status = 0 WHERE user_role_id = '$user_id' && user_role = 'doctor'";
    $doc_sql_run = mysqli_query($con, $doc_sql);
}
elseif($_SESSION['user_role'] == 'patient'){
    $pat_sql = "UPDATE users SET status = 0 WHERE user_role_id = '$user_id' && user_role = 'patient'";
    $pat_sql_run = mysqli_query($con, $pat_sql);
}

session_destroy();
header("Location: ../../index.php");
exit(0);
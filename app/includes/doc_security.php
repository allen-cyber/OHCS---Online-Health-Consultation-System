<?php
if(empty($_SESSION['user_role_id']) || $_SESSION['user_role_id'] == '' || $_SESSION['user_role'] != 'doctor'){
    header("Location: ../includes/error_page.php");
    exit(0);
}
if(time() - $_SESSION['timestamp'] > 900) { //subtract new timestamp from the old one
    // echo"<script>alert('15 Minutes over!');</script>";
    unset($_SESSION['user_role_id'], $_SESSION['fullname'], $_SESSION['timestamp']);
    $_SESSION['user_role_id'] = '';
    header("Location: ../html/login.php"); //redirect to index.php
    session_destroy();
    session_start();
    $_SESSION['logout_message'] = 'Your Session Timed Out';
    exit;
} 
else {
    $_SESSION['timestamp'] = time(); //set new timestamp
}
// echo $_SESSION['timestamp'];
// echo time();
?>
<?php
session_start();
include("../includes/doc_security.php");
include("../includes/doc_security_add_treaments.php");
?>

<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>OHCS | Dashboard</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <!-- <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" /> -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="index.php" class="app-brand-link">
                        <span class="app-brand-text demo menu-text fw-bolder ms-2">OHCS</span>
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboard -->
                    <li class="menu-item">
                        <a href="index.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-grid-alt"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>

                    <!-- Profile -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-user"></i>
                            <div data-i18n="Layouts">Profile</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="doctor_profile.php" class="menu-link">
                                    <div data-i18n="Without menu">View Profile</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="change_password.php" class="menu-link">
                                    <div data-i18n="Without navbar">Change Password</div>
                                </a>
                            </li>
                           
                        </ul>
                    </li>

                    <!-- Appointment -->
                    <li class="menu-item active open">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-wallet-alt"></i>
                            <div data-i18n="Layouts">Appointments</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="add_appointment.php" class="menu-link">
                                    <div data-i18n="Without menu">Add Appointments</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="pending_appointments.php" class="menu-link">
                                    <div data-i18n="Without menu">Pending Appointments</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="approved_appointments.php" class="menu-link">
                                    <div data-i18n="Without navbar">Approved Appointments</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="all_appointments.php" class="menu-link">
                                    <div data-i18n="Without navbar">All Appointments</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="your_appointments.php" class="menu-link">
                                    <div data-i18n="Without navbar">Your Appointments</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                   <!-- Prescription -->
                   <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-copy-alt"></i>
                            <div data-i18n="Layouts">Prescriptions</div>
                        </a>

                        <ul class="menu-sub">
                            
                            <li class="menu-item">
                                <a href="doc_prescriptions.php" class="menu-link">
                                    <div data-i18n="Without navbar">View Prescriptions</div>
                                </a>
                            </li>
                           
                        </ul>
                    </li>

                    <!-- Treatments -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-devices"></i>
                            <div data-i18n="Layouts">Treatments</div>
                        </a>

                        <ul class="menu-sub">
                            
                            <li class="menu-item">
                                <a href="doc_treatments.php" class="menu-link">
                                    <div data-i18n="Without navbar">View Treatments</div>
                                </a>
                            </li>
                           
                        </ul>
                    </li>

                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <!-- <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center">
                            <h2 class="mb-0">Hello Dr. <?php echo current(explode(' ', $_SESSION['fullname'])).", welcome back.!" ?></h2>
                            </div>
                        </div> -->
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- Place this tag where you want the button to render. -->
                            <li class="nav-item lh-1 me-3">
                            <a aria-label="fullname"><?php echo $_SESSION['fullname'] ?></a
                  >
                </li>

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                        <?php
                            include('../includes/connect.php');
                            $user_id = $_SESSION['user_role_id'];
                            $dp_sql = mysqli_query($con, "SELECT profile_pic_status, profile_image FROM doctors WHERE doctor_id = '$user_id'");
                            $dp_res = mysqli_fetch_array($dp_sql);

                            if($dp_res['profile_pic_status'] == 0){

                            ?>
                            <img
                            src="../assets/img/avatars/default_dp.jpg"
                            alt class="w-px-40 h-auto rounded-circle"
                            height="100"
                            width="100"
                            id="uploadedAvatar"
                            />
                        <?php
                            }
                            else if($dp_res['profile_pic_status'] == 1){
                                ?>
                                <img
                                src="../assets/img/avatars/<?=$dp_res['profile_image']?>"
                                alt class="w-px-40 h-auto rounded-circle"
                                height="100"
                                width="100"
                                id="uploadedAvatar"
                                />
                                <?php
                            }
                        ?>                    
                    </div>
                  </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar avatar-online">
                                            <?php
                                                include('../includes/connect.php');
                                                $user_id = $_SESSION['user_role_id'];
                                                $dp_sql = mysqli_query($con, "SELECT profile_pic_status, profile_image FROM doctors WHERE doctor_id = '$user_id'");
                                                $dp_res = mysqli_fetch_array($dp_sql);

                                                if($dp_res['profile_pic_status'] == 0){

                                                ?>
                                                <img
                                                src="../assets/img/avatars/default_dp.jpg"
                                                alt class="w-px-40 h-auto rounded-circle"
                                                height="100"
                                                width="100"
                                                id="uploadedAvatar"
                                                />
                                            <?php
                                                }
                                                else if($dp_res['profile_pic_status'] == 1){
                                                    ?>
                                                    <img
                                                    src="../assets/img/avatars/<?=$dp_res['profile_image']?>"
                                                    alt class="w-px-40 h-auto rounded-circle"
                                                    height="100"
                                                    width="100"
                                                    id="uploadedAvatar"
                                                    />
                                                    <?php
                                                }
                                            ?>                                        
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <span class="fw-semibold d-block"><?php echo $_SESSION['user_email'] ?></span>
                                        <small class="text-muted"><?php echo (ucwords($_SESSION['user_role']))." | ".$_SESSION['user_role_id'] ?></small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="doctor_profile.php">
                                <i class="bx bx-user me-2"></i>
                                <span class="align-middle">My Profile</span>
                            </a>
                        </li>
                        <!-- <li>
                            <a class="dropdown-item" href="#">
                                <i class="bx bx-cog me-2"></i>
                                <span class="align-middle">Settings</span>
                            </a>
                        </li> -->
                        <!-- <li>
                            <a class="dropdown-item" href="#">
                                <span class="d-flex align-items-center align-middle">
                                <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                                <span class="flex-grow-1 align-middle">Billing</span>
                                <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                                </span>
                            </a>
                        </li> -->
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="../includes/user_logout_code.php">
                                <i class="bx bx-power-off me-2"></i>
                                <span class="align-middle">Log Out</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--/ User -->
                        </ul>
                    </div>
                </nav>

                <!-- / User -->
                <!-- / Navbar -->

                <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">

            <div class="col-xxl">
                <div class="card mb-4">
                
                    <div class="card-header d-flex align-items-center justify-content-between">
                    <h3 class="mb-0">Add Treatment</h3>
                    <?php
                    $app_id = $_GET['app_id'];
                    $user_id = $_SESSION['user_role_id'];
                    if(isset($_SESSION['treatment_success'])){
                        echo "<h3><div class='alert alert-success alert-dismissible' role='alert'>".
                        ($_SESSION['treatment_success'])
                        ."<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div></h3>";
                        unset($_SESSION['treatment_success']);
                    }
                    elseif(isset($_SESSION['treatment_failure'])){
                        echo "<h3><div class='alert alert-danger alert-dismissible' role='alert'>".
                        ($_SESSION['treatment_failure'])
                        ."<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div></h3>";
                        unset($_SESSION['treatment_failure']);
                    }
                    ?>
                    <button type="button" onclick="history.go(-1);" class="btn btn-primary">BACK</button>
                    </div>
                    <div class="card-body">
                    <form id="formAuthentication" class="mb-3" action="treatment_code.php?app_id=<?php echo $app_id?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <input class="form-control" type="hidden" name="edit_id" id="" value="<?php echo $result['appointment_id'] ?>">
                        </div>
                        <div class="row g-2">
                            <div class="col mb-4">
                                <label class="form-label" for="basic-icon-default-phone">Appointment</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                    <span class="input-group-text" id="basic-addon14"><?php echo $_GET['app_id']; ?></span>
                                    <span class="input-group-text form-control" id="basic-addon14"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-4">
                                <label class="form-label" for="basic-icon-default-phone">Patient</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                    <span class="input-group-text" id="basic-addon14">
                                    <?php
                                    include('../includes/connect.php');
                                    $pat_query = "SELECT * FROM appointments WHERE appointment_id = '$app_id'";
                                    $pat_run = mysqli_query($con, $pat_query);
                                    $pat_jibu = mysqli_fetch_array($pat_run);
                                    $patientID = $pat_jibu['patient_id'];
                                    $pat_query = "SELECT fullname, user_role FROM users WHERE user_role_id = '$patientID'";
                                    $pat_run = mysqli_query($con, $pat_query);
                                    if(mysqli_num_rows($pat_run) > 0){
                                        $pat_result = mysqli_fetch_array($pat_run);
                                        echo $pat_result['fullname'];
                                        if($pat_result['user_role'] == 'admin'){
                                            echo ' (Admin)';
                                        }
                                        else if($pat_result['user_role'] == 'doctor'){
                                            echo ' (Doctor)';
                                        }
                                    }
                                    else{
                                        echo '<span style="color: red;">Deleted</span>';
                                    }
                                    ?>

                                    </span>
                                    <span class="input-group-text form-control" id="basic-addon14"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col mb-4">
                                <label class="form-label" for="basic-icon-default-phone">Doctor</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                    <span class="input-group-text" id="basic-addon14">Dr. <?php 
                                    $doc = mysqli_query($con, "SELECT doc.doctor_name FROM doctors doc JOIN appointments app 
                                    ON doc.doctor_id = app.doctor_id WHERE app.appointment_id = '$app_id'");
                                    $doc_res = mysqli_fetch_array($doc);
                                    echo $doc_res['doctor_name'];
                                    ?></span>
                                    <span class="input-group-text form-control" id="basic-addon14"><?php  ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class='col mb-4'>
                                <label class="form-label"
                                    for="basic-icon-default-gender">Treatment Type & Cost</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <select class="form-select" id="inputGroupSelect01" name="treatment_record_id">
                                            <option >Select</option>
                                            <?php
                                            $select_query = mysqli_query($con, "SELECT * FROM treatment_records WHERE treatment_status = 1");
                                            // $type;
                                            if(mysqli_num_rows($select_query) > 0){
                                                while($select_result = mysqli_fetch_array($select_query)){
                                                ?>
                                                <option value="<?php echo $select_result['treatment_records_id'] ?>"><?php echo $select_result['treatment_type']." - (". $select_result['treatment_cost'].")"  ?></option>                            
                                                <?php
                                                }
                                            }
                                            else{
                                                echo "<div class='alert alert-danger alert-dismissible' role='alert'><h5 style='text-align:center'>
                                                        No Treatments Found</h5><button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                                    </div>";
                                            }
                                            
                                            ?>
                                        </select>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row g-2">
                            <div class="col mb-4">
                                <label class="form-label" for="basic-icon-default-phone">Treatment Files</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-phone2" class="input-group-text"><i
                                                class="bx bx-phonee"></i></span>
                                        <input type="file" id="basic-icon-default-phone"
                                            class="form-control phone-mask"
                                            aria-label="files"
                                            aria-describedby="basic-icon-default-phone2"
                                            name="treatment_file"
                                            multiple/>
                                    </div>
                                </div>
                            </div>                                 
                            <div class="col mb-4">
                                <label class="form-label" for="basic-icon-default-message">Treatment Description</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-message2" class="input-group-text"><i
                                                class="bx bx-commente"></i></span>
                                        <textarea id="basic-icon-default-message" class="form-control"
                                        name="treatment_discription"
                                            placeholder="treatment description demo......"
                                            aria-label="Treatment description"     
                                            aria-describedby="basic-icon-default-message2"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                            <div class="row">
                                <div class="col-sm-10 col-lg-3 mx-auto">
                                    <button type="submit" name="add_treatment" class="btn btn-primary active">Submit</button>
                                    <a href="appointment_report.php?id=<?php echo $app_id ?>" class="btn btn-secondary active" >Cancel</a>
                                </div>
                            </div>
                    </form>
                    </div>
                </div>
            </div>
                
            <!-- </div>
            <div class="container-xxl flex-grow-1 container-p-y"> -->

            <!-- Hoverable Table rows -->
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    
                    <h3 class="mb-0">Treatments</h3>
                    <?php
                    // if(isset($_SESSION['appointment_success'])){
                    //     echo "<h3><div class='alert alert-success alert-dismissible' role='alert'>".
                    //     ($_SESSION['appointment_success'])
                    //     ."<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    //     </div></h3>";
                    //     unset($_SESSION['appointment_success']);
                    // }
                    ?>
                </div>
                <div class="table-responsive text-nowrap mb-4">
                <table class="table table-hover" id="treatment_table" >
                    <thead>
                    <tr class="justify-content-between">
                        <th>Type</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Doctor</th>
                        <th>Patient</th>
                        <th>Description</th>
                        <th>Cost</th>
                        <th>Uploads</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0 justify-content-between">
                    <?php
                    $tret_sql = "SELECT * FROM treatments WHERE appointment_id = '$app_id' && doctor_id = '$user_id'";
                    $tret_sql_run = mysqli_query($con, $tret_sql);
                    
                    if(mysqli_num_rows($tret_sql_run) > 0){
                        $tret_results = mysqli_fetch_array($tret_sql_run);
                        $treat_id = $tret_results['treatment_id'];
                        if($treat_id != null){
                            $tret_sql2 = "SELECT * FROM treatment_records rec JOIN treatments tret ON rec.treatment_records_id = tret.treatment_records_id WHERE tret.appointment_id = '$app_id'";
                            $tret_sql_run2 = mysqli_query($con, $tret_sql2);
                            if(mysqli_num_rows($tret_sql_run2) > 0){
                            ?>
                            <?php
                            while($tret_results2 = mysqli_fetch_array($tret_sql_run2)){
                                ?>
                            <tr>
                                <!-- <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong></td> -->
                                <td><?php echo $tret_results2['treatment_type']; ?></td>
                                <td>
                                    <?php
                                    $date = $tret_results2['treatment_date'];
                                    $date_parts = explode('-', $date);
                                    $month = $date_parts[1];
                                    if($month == 1){
                                        echo $date_parts[2].'-January-'.$date_parts[0];
                                    }
                                    else if($month == 2){
                                        echo $date_parts[2].'-February-'.$date_parts[0];
                                    }
                                    else if($month == 3){
                                        echo $date_parts[2].'-March-'.$date_parts[0];
                                    }
                                    else if($month == 4){
                                        echo $date_parts[2].'-April-'.$date_parts[0];
                                    }
                                    else if($month == 5){
                                        echo $date_parts[2].'-May-'.$date_parts[0];
                                    }
                                    else if($month == 6){
                                        echo $date_parts[2].'-June-'.$date_parts[0];
                                    }
                                    else if($month == 7){
                                        echo $date_parts[2].'-July-'.$date_parts[0];
                                    }
                                    else if($month == 8){
                                        echo $date_parts[2].'-August-'.$date_parts[0];
                                    }
                                    else if($month == 9){
                                        echo $date_parts[2].'-September-'.$date_parts[0];
                                    }
                                    else if($month == 10){
                                        echo $date_parts[2].'-October-'.$date_parts[0];
                                    }
                                    else if($month == 11){
                                        echo $date_parts[2].'-November-'.$date_parts[0];
                                    }
                                    else if($month == 12){
                                        echo $date_parts[2].'-December-'.$date_parts[0];
                                    }
                                    else{
                                        echo "Invalid Date";
                                    }
                                    ?>
                                </td>
                                <td><?php echo $tret_results2['treatment_time']; ?></td>
                                <td>Dr. <?php echo $_SESSION['fullname']; ?></td>
                                <td><?php
                                $patientID = $tret_results2['patient_id']; 
                                $pat_query = "SELECT fullname, user_role FROM users WHERE user_role_id = '$patientID'";
                                $pat_run = mysqli_query($con, $pat_query);
                                if(mysqli_num_rows($pat_run) > 0){
                                    $pat_result = mysqli_fetch_array($pat_run);
                                    echo $pat_result['fullname'].'</br>';
                                    if($pat_result['user_role'] == 'admin'){
                                        echo ' (Admin)';
                                    }
                                    else if($pat_result['user_role'] == 'doctor'){
                                        echo ' (Doctor)';
                                    }
                                }
                                else{
                                    echo '<span style="color: red;">Deleted</span>';
                                }
                                ?></td>
                                <td><?php echo wordwrap($tret_results2['treatment_description'], 40, '</br>'); ?></td>
                                <td><?php echo $tret_results2['treatment_cost']; ?>/=</td>
                                <td>
                                <a target="_blank" href="../doctor/treatment_uploads/<?php echo $tret_results2['uploads']?>"><button type="button" class="btn btn-xs btn-primary">Download</button></a>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            
                                            <form action="appointment_code.php" method="POST">
                                                <button type="button" value="<?php echo $tret_results2['treatment_id']?>" id="edit_treatment_btn" class="dropdown-item"><i class="bx bx-edit-alt me-1"></i>Edit</button>
                                            </form>
                                            <form action="appointment_code.php" method="POST">
                                                <button type="submit" name="disapprove_appointment" class="dropdown-item"><i class="bx bx-trash me-1"></i>Delete</button>
                                            </form>
                                            
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                            <?php
                            }
                        }
                    }
                    ?>
                </table>
                </div>
            </div>
            <!--/ Hoverable Table rows -->
            <!-- Modal -->
            <div class="modal fade" id="backDropModalEditTreatment" data-bs-backdrop="static" tabindex="-1">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <form class="modal-content" id="edit_treatment_form" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                            <h5 class="modal-title" id="backDropModalTitle">Edit Treatment</h5>
                            <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                            ></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <input class="form-control" type="hidden" name="edit_id" id="" value="<?php echo $result['appointment_id'] ?>">
                            </div>
                            <div class="row g-2">
                                <div class="col mb-4">
                                    <label class="form-label" for="basic-icon-default-phone">Treatment</label>
                                    <div class="col-sm-10">
                                        <div class="input-group input-group-merge">
                                        <span class="input-group-text" id="treatment_id"></span>
                                        <input type="hidden" id="treatment_id_hidden" name="treatment_id" >
                                        <span class="input-group-text form-control" id="basic-addon14"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-4">
                                    <label class="form-label" for="basic-icon-default-phone">Patient</label>
                                    <div class="col-sm-10">
                                        <div class="input-group input-group-merge">
                                        <span class="input-group-text" id="basic-addon14">
                                        <?php
                                        include('../includes/connect.php');
                                        $pat_query = "SELECT * FROM appointments WHERE appointment_id = '$app_id'";
                                        $pat_run = mysqli_query($con, $pat_query);
                                        $pat_jibu = mysqli_fetch_array($pat_run);
                                        $patientID = $pat_jibu['patient_id'];
                                        $pat_query = "SELECT fullname, user_role FROM users WHERE user_role_id = '$patientID'";
                                        $pat_run = mysqli_query($con, $pat_query);
                                        if(mysqli_num_rows($pat_run) > 0){
                                            $pat_result = mysqli_fetch_array($pat_run);
                                            echo $pat_result['fullname'];
                                            if($pat_result['user_role'] == 'admin'){
                                                echo ' (Admin)';
                                            }
                                            else if($pat_result['user_role'] == 'doctor'){
                                                echo ' (Doctor)';
                                            }
                                        }
                                        else{
                                            echo '<span style="color: red;">Deleted</span>';
                                        }
                                        ?>

                                        </span>
                                        <span class="input-group-text form-control" id="basic-addon14"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col mb-4">
                                    <label class="form-label" for="basic-icon-default-phone">Doctor</label>
                                    <div class="col-sm-10">
                                        <div class="input-group input-group-merge">
                                        <span class="input-group-text" id="basic-addon14">Dr. <?php echo $_SESSION['fullname']; ?></span>
                                        <span class="input-group-text form-control" id="basic-addon14"><?php  ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class='col mb-4'>
                                    <label class="form-label"
                                        for="basic-icon-default-gender">Treatment Type & Cost</label>
                                    <div class="col-sm-10">
                                        <div class="input-group">
                                            <select class="form-select" id="treatment_records_id" name="treatment_record_id">
                                                <option >Select</option>
                                                <?php
                                                $select_query = mysqli_query($con, "SELECT * FROM treatment_records WHERE treatment_status = 1");
                                                // $type;
                                                if(mysqli_num_rows($select_query) > 0){
                                                    while($select_result = mysqli_fetch_array($select_query)){
                                                    ?>
                                                    <option value="<?php echo $select_result['treatment_records_id'] ?>"><?php echo $select_result['treatment_type']." - (". $select_result['treatment_cost'].")"  ?></option>                            
                                                    <?php
                                                    }
                                                }
                                                else{
                                                    echo "<div class='alert alert-danger alert-dismissible' role='alert'><h5 style='text-align:center'>
                                                            No Treatments Found</h5><button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                                        </div>";
                                                }
                                                
                                                ?>
                                            </select>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col mb-4">
                                    <label class="form-label" for="basic-icon-default-phone">Treatment Files</label>
                                    <div class="col-sm-10">
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-phone2" class="input-group-text"><i
                                                    class="bx bx-phonee"></i></span>
                                            <input type="file" id="basic-icon-default-phone"
                                                class="form-control phone-mask treatment_file"
                                                aria-label="files"
                                                aria-describedby="basic-icon-default-phone2"
                                                name="treatment_file"
                                                value="mfano.jpg"
                                                multiple/>
                                        </div>
                                    </div>
                                </div>                                 
                                <div class="col mb-4">
                                    <label class="form-label" for="basic-icon-default-message">Treatment Description</label>
                                    <div class="col-sm-10">
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-message2" class="input-group-text"><i
                                                    class="bx bx-commente"></i></span>
                                            <textarea id="basic-icon-default-message" class="form-control treatment_discription"
                                            name="treatment_discription"
                                            rows="5"
                                            placeholder="treatment description demo......"
                                            aria-label="Treatment description"  
                                            aria-describedby="basic-icon-default-message2"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class='col-md-6'>
                                    <label class="form-label"
                                        for="basic-icon-default-gender">Status</label>
                                    <div class="col-sm-10">
                                        <div class="input-group">
                                            <select class="form-select" id="treatment_status" name="treatment_status">
                                                <option >Select</option>
                                                <option value="1">Active</option>
                                                <option value="0">Not Active</option>
                                            </select>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Close
                            </button>
                            <button type="submit" id="modal_footer_id" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- / Modal -->
            </div>

            <!-- / Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                <!-- Basic footer -->
                <section id="basic-footer">
                    <footer class="footer bg-light">
                    <div
                        class="container-fluid d-flex flex-md-row flex-column justify-content-between align-items-md-center gap-1 container-p-x py-3"
                    >
                        <div>
                        <a
                            href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/landing/"
                            target="_blank"
                            class="footer-text fw-bolder"
                            >OHCS</a
                        >
                        ©2022
                        </div>
                        <div>
                        <a href="#" class="footer-link me-4">License</a>
                        <a href="#" class="footer-link me-4">Help</a>
                        <a href="#" class="footer-link me-4">Contact</a>
                        <a href="#" class="footer-link">Terms &amp; Conditions</a>
                        </div>
                    </div>
                    </footer>
                </section>
                <!--/ Basic footer -->
            </div>
        </div>
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="../js/jQuery.min.js"></script>
    <script src="../js/sweetalert.min.js"></script>
    <script>
        $(document).on('click', '#edit_treatment_btn', function () {
            var treatment_edit_id = $(this).val();
            // alert(treatment_edit_id);
            $.ajax({
                type: "GET",
                url: "appointment_code.php?treatment_edit_id=" + treatment_edit_id,
                success: function (response) {
                    var res = $.parseJSON(response);
                    if(res.status == 500){
                        swal('Ooops..!',res.message,'error');
                    }
                    else if(res.status == 200){
                        $('#treatment_id').text(res.data.treatment_id);
                        $('.treatment_discription').text(res.data.treatment_description);
                        $('#treatment_status').val(res.data.treatment_status);
                        $('#treatment_id_hidden').val(res.data.treatment_id);
                        // $('.treatment_file').val(res.data.uploads);
                        $('#treatment_records_id').val(res.data.treatment_records_id);
                        $('#backDropModalEditTreatment').modal('show');
                    }
                }
            });
            // $('#backDropModalEditTreatment').modal('show');
            
        });

        $(document).on('submit', '#edit_treatment_form', function (e) {
            e.preventDefault();

            var formdata = new FormData(this);
            formdata.append('edit_treatment_submit_btn', true);

            $.ajax({
                type: "POST",
                url: "treatment_code.php",
                data: formdata,
                processData: false,
                contentType: false,
                success: function (response) {
                    var res = $.parseJSON(response);
                    if(res.status == 500){
                        swal('Ooops..!',res.message,'error');
                    }
                    else if(res.status == 200){
                        $('#backDropModalEditTreatment').modal('hide');
                        $('#treatment_table').load(location.href + ' #treatment_table');
                        $('#edit_treatment_form')[0].reset();
                        swal('Good Job.!',res.message,'success');
                    }
                }
            });
            
        });
    </script>
  </body>
</html>
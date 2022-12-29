<?php
session_start();
include("../includes/security.php");
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
                    <li class="menu-item active">
                        <a href="index.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>

                    <!-- Profile -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="bx bx-user me-2"></i>
                            <div data-i18n="Layouts">Profile</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="../patient/view_profile.php" class="menu-link">
                                    <div data-i18n="Without menu">View Profile</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="../patient/change_password.php" class="menu-link">
                                    <div data-i18n="Without navbar">Change Password</div>
                                </a>
                            </li>
                           
                        </ul>
                    </li>

                    <!-- Appointment -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div data-i18n="Layouts">Appointments</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="../patient/add_appointment.php" class="menu-link">
                                    <div data-i18n="Without menu">Add Appointments</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="../patient/view_appointments.php" class="menu-link">
                                    <div data-i18n="Without navbar">View Appointments</div>
                                </a>
                            </li>
                           
                        </ul>
                    </li>

                   <!-- Prescription -->
                   <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div data-i18n="Layouts">Prescriptions</div>
                        </a>

                        <ul class="menu-sub">
                            
                            <li class="menu-item">
                                <a href="../patient/prescriptions.php" class="menu-link">
                                    <div data-i18n="Without navbar">View Prescriptions</div>
                                </a>
                            </li>
                           
                        </ul>
                    </li>
                    
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div data-i18n="Layouts">Treatments</div>
                        </a>

                        <ul class="menu-sub">
                            
                            <li class="menu-item">
                                <a href="../patient/treatments.php" class="menu-link">
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
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center">
                            <h2 class="mb-0">Hello <?php echo current(explode(' ', $_SESSION['fullname'])).", welcome back.!" ?></h2>
                            </div>
                        </div>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- Place this tag where you want the button to render. -->
                            <li class="nav-item lh-1 me-3">
                                <a class="github-button" href="#" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="fullname"><?php echo $_SESSION['fullname'] ?></a
                  >
                </li>

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                    <?php
                    include('../includes/connect.php');
                    $user_id = $_SESSION['user_role_id'];
                    $pat_pic_pro = mysqli_query($con, "SELECT * FROM patients WHERE patient_id = '$user_id'");
                    if(mysqli_num_rows($pat_pic_pro) > 0){
                        ?>
                        <?php
                        include('../includes/connect.php');
                        $user_id = $_SESSION['user_role_id'];
                        $dp_sql = mysqli_query($con, "SELECT profile_pic_status, profile_image FROM patients WHERE patient_id = '$user_id'");
                        $dp_res = mysqli_fetch_array($dp_sql);

                        if($dp_res['profile_pic_status'] == 0){

                        ?>
                        <img
                        src="../assets/img/avatars/default_dp.jpg"
                        alt class="w-px-40 h-auto rounded-circle"
                        class="d-block rounded"
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
                        <?php
                    }
                    else{
                        ?>
                        <img  src="../assets/img/avatars/default_dp.jpg" alt class="w-px-40 h-auto rounded-circle">
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
                                            $pat_pic_pro = mysqli_query($con, "SELECT * FROM patients WHERE patient_id = '$user_id'");
                                            if(mysqli_num_rows($pat_pic_pro) > 0){
                                                ?>
                                                <?php
                                                include('../includes/connect.php');
                                                $user_id = $_SESSION['user_role_id'];
                                                $dp_sql = mysqli_query($con, "SELECT profile_pic_status, profile_image FROM patients WHERE patient_id = '$user_id'");
                                                $dp_res = mysqli_fetch_array($dp_sql);

                                                if($dp_res['profile_pic_status'] == 0){

                                                ?>
                                                <img
                                                src="../assets/img/avatars/default_dp.jpg"
                                                alt class="w-px-40 h-auto rounded-circle"
                                                class="d-block rounded"
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
                                                <?php
                                            }
                                            else{
                                                ?>
                                                <img  src="../assets/img/avatars/default_dp.jpg" alt class="w-px-40 h-auto rounded-circle">
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
                            <a class="dropdown-item" href="view_profile.php">
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
            <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style1">
                    <li class="breadcrumb-item active">Home</li>
                    </ol>
                </nav>
                
                <div class="card mb-4">
                <div class="card-body">
                  <div class="row gx-3 gy-2 align-items-center">
                    <div class="col-lg-4 col-md-4 order-1">
                        <div class="col-12 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                                        <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                                            <div class="card-title">
                                                <!-- <h5 class="text-nowrap mb-2">Profile</h5> -->
                                                <!-- <span class="badge bg-label-warning rounded-pill">Year 2021</span> -->
                                            </div>
                                            <div class="mt-sm-auto">
                                                <!-- <small class="text-success text-nowrap fw-semibold"><i class="bx bx-chevron-up"></i> 68.2%</small> -->
                                                <!-- <h3 class="mb-0">$84,686k</h3> -->
                                                <h5><span class="text-light fw-semibold">Patient ID:  </span><?php echo $_SESSION['user_role_id'];?></h5>
                                                <h5><span class="text-light fw-semibold">Full Name:  </span><?php echo $_SESSION['fullname'];?></h5>
                                                <h5><span class="text-light fw-semibold">Email:  </span><?php echo $_SESSION['user_email'];?></h5>
                                            </div>
                                        </div>
                                        <!-- <div id="profileReportChart"></div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row gx-3 gy-2 align-items-center">
                            <div class="col-lg-6 col-md-12 col-6 mb-4">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <span class="badge badge-center bg-warning">
                                                <?php
                                                include('../includes/connect.php');
                                                $patient_id = $_SESSION['user_role_id'];
                                                $app_SQL = "SELECT count(appointment_id) AS app_id FROM appointments WHERE patient_id = '$patient_id' && appointment_status = 0";
                                                $app_SQL_run = mysqli_query($con, $app_SQL);
                                                $result_count = mysqli_fetch_array($app_SQL_run);
                                                echo $result_count['app_id'];
                                                ?> 
                                            </span>
                                        </div>
                                        <span>Appointments</span>
                                        <h4 class="card-title text-nowrap mb-1">Pending</h4>
                                        <!-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-6 mb-4">
                                <div class="card mb-4">
                                <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <span class="badge badge-center bg-success">
                                                <?php
                                                include('../includes/connect.php');
                                                $patient_id = $_SESSION['user_role_id'];
                                                $app_SQL = "SELECT count(appointment_id) AS app_id FROM appointments WHERE patient_id = '$patient_id' && appointment_status = 1";
                                                $app_SQL_run = mysqli_query($con, $app_SQL);
                                                $result_count = mysqli_fetch_array($app_SQL_run);
                                                echo $result_count['app_id'];
                                                ?> 
                                            </span>
                                        </div>
                                        <span>Appointments</span>
                                        <h4 class="card-title text-nowrap mb-1">Approved</h4>
                                        <!-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 order-1">
                        <div class="row gx-3 gy-2 align-items-center">
                            <div class="col-lg-6 col-md-12 col-6 mb-4">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <span class="badge badge-center bg-secondary">
                                                <?php
                                                include('../includes/connect.php');
                                                $user_id = $_SESSION['user_role_id'];
                                                $app_SQL = "SELECT count(appointment_id) AS app_id FROM treatments WHERE patient_id = '$user_id'";
                                                $app_SQL_run = mysqli_query($con, $app_SQL);
                                                $result_count = mysqli_fetch_array($app_SQL_run);
                                                echo $result_count['app_id'];
                                                ?> 
                                            </span>
                                        </div>
                                        <span>Number of</span>
                                        <h4 class="card-title text-nowrap mb-1">Treatments</h4>
                                        <!-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-6 mb-4">
                                <div class="card mb-4">
                                <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <span class="badge badge-center bg-info">
                                                <?php
                                                include('../includes/connect.php');
                                                $patient_id = $_SESSION['user_role_id'];
                                                $app_SQL = "SELECT count(appointment_id) AS app_id FROM treatments WHERE patient_id = '$patient_id'";
                                                $app_SQL_run = mysqli_query($con, $app_SQL);
                                                $result_count = mysqli_fetch_array($app_SQL_run);
                                                echo $result_count['app_id'];
                                                ?> 
                                            </span>
                                        </div>
                                        <span>Number of</span>
                                        <h4 class="card-title text-nowrap mb-1">Prescriptions</h4>
                                        <!-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row gx-3 gy-2 align-items-center">
                            <div class="col-lg-6 col-md-12 col-6 mb-4">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <span class="badge badge-center bg-primary">
                                                <?php
                                                include('../includes/connect.php');
                                                $user_id = $_SESSION['user_role_id'];
                                                $app_SQL = "SELECT count(appointment_id) AS app_id FROM appointments WHERE patient_id = '$user_id'";
                                                $app_SQL_run = mysqli_query($con, $app_SQL);
                                                $result_count = mysqli_fetch_array($app_SQL_run);
                                                echo $result_count['app_id'];
                                                ?> 
                                            </span>
                                        </div>
                                        <span>Appointments</span>
                                        <h4 class="card-title text-nowrap mb-1">Total</h4>
                                        <!-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> -->
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6 col-md-12 col-6 mb-4">
                                <div class="card mb-4">
                                <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <span class="badge badge-center bg-dark">
                                                <?php
                                                include('../includes/connect.php');
                                                $patient_id = $_SESSION['user_role_id'];
                                                $app_SQL = "SELECT count(distinct doctor_id) AS app_id FROM appointments WHERE patient_id = '$patient_id'";
                                                $app_SQL_run = mysqli_query($con, $app_SQL);
                                                $result_count = mysqli_fetch_array($app_SQL_run);
                                                echo $result_count['app_id'];
                                                ?> 
                                            </span>
                                        </div>
                                        <span>Number of</span>
                                        <h4 class="card-title text-nowrap mb-1">Doctors</h4>
                                        <!-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> -->
                                    </div>
                                </div>
                            </div>
                        </div>                       
                    </div>

                    <div class="col-lg-4 col-md-4 order-1">
                        <div class="row gx-3 gy-2 align-items-center">
                            <div class="col-lg-6 col-md-12 col-6 mb-4">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <span class="badge badge-center bg-secondary">
                                                <?php
                                                // include('../includes/connect.php');
                                                // $user_id = $_SESSION['user_role_id'];
                                                // $app_SQL = "SELECT count(appointment_id) AS app_id FROM treatments WHERE patient_id = '$user_id'";
                                                // $app_SQL_run = mysqli_query($con, $app_SQL);
                                                // $result_count = mysqli_fetch_array($app_SQL_run);
                                                // echo $result_count['app_id'];
                                                ?> 
                                            </span>
                                        </div>
                                        <span>Brah..!</span>
                                        <h4 class="card-title text-nowrap mb-1">Brah..!</h4>
                                        <!-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-6 mb-4">
                                <div class="card mb-4">
                                <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <span class="badge badge-center bg-info">
                                                <?php
                                                // include('../includes/connect.php');
                                                // $patient_id = $_SESSION['user_role_id'];
                                                // $app_SQL = "SELECT count(appointment_id) AS app_id FROM treatments WHERE patient_id = '$patient_id'";
                                                // $app_SQL_run = mysqli_query($con, $app_SQL);
                                                // $result_count = mysqli_fetch_array($app_SQL_run);
                                                // echo $result_count['app_id'];
                                                ?> 
                                            </span>
                                        </div>
                                        <span>Brah..!</span>
                                        <h4 class="card-title text-nowrap mb-1">Brah..!</h4>
                                        <!-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row gx-3 gy-2 align-items-center">
                            <div class="col-lg-6 col-md-12 col-6 mb-4">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <span class="badge badge-center bg-primary">
                                                <?php
                                                // include('../includes/connect.php');
                                                // $user_id = $_SESSION['user_role_id'];
                                                // $app_SQL = "SELECT count(appointment_id) AS app_id FROM appointments WHERE patient_id = '$user_id'";
                                                // $app_SQL_run = mysqli_query($con, $app_SQL);
                                                // $result_count = mysqli_fetch_array($app_SQL_run);
                                                // echo $result_count['app_id'];
                                                ?> 
                                            </span>
                                        </div>
                                        <span>Brah..!</span>
                                        <h4 class="card-title text-nowrap mb-1">Brah..!</h4>
                                        <!-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> -->
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6 col-md-12 col-6 mb-4">
                                <div class="card mb-4">
                                <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <span class="badge badge-center bg-dark">
                                                <?php
                                                // include('../includes/connect.php');
                                                // $patient_id = $_SESSION['user_role_id'];
                                                // $app_SQL = "SELECT count(distinct doctor_id) AS app_id FROM appointments WHERE patient_id = '$patient_id'";
                                                // $app_SQL_run = mysqli_query($con, $app_SQL);
                                                // $result_count = mysqli_fetch_array($app_SQL_run);
                                                // echo $result_count['app_id'];
                                                ?> 
                                            </span>
                                        </div>
                                        <span>Brah..!</span>
                                        <h4 class="card-title text-nowrap mb-1">Brah..!</h4>
                                        <!-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> -->
                                    </div>
                                </div>
                            </div>
                        </div>                       
                    </div>
                
                  </div>
                </div>
              </div>

            </div>





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
  </body>
</html>
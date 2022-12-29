<?php
session_start();
include("../includes/doc_security.php");
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
    <script src="../js/jQuery.min.js"></script>
    <script src="../js/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="index.php" class="app-brand-link">
                        <!-- <span class="app-brand-logo demo">
                            <svg
                            width="25"
                            viewBox="0 0 25 42"
                            version="1.1"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            >
                            <defs>
                                <path
                                d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                                id="path-1"
                                ></path>
                                <path
                                d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                                id="path-3"
                                ></path>
                                <path
                                d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                                id="path-4"
                                ></path>
                                <path
                                d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                                id="path-5"
                                ></path>
                            </defs>
                            <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                                <g id="Icon" transform="translate(27.000000, 15.000000)">
                                    <g id="Mask" transform="translate(0.000000, 8.000000)">
                                    <mask id="mask-2" fill="white">
                                        <use xlink:href="#path-1"></use>
                                    </mask>
                                    <use fill="#696cff" xlink:href="#path-1"></use>
                                    <g id="Path-3" mask="url(#mask-2)">
                                        <use fill="#696cff" xlink:href="#path-3"></use>
                                        <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                                    </g>
                                    <g id="Path-4" mask="url(#mask-2)">
                                        <use fill="#696cff" xlink:href="#path-4"></use>
                                        <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                                    </g>
                                    </g>
                                    <g
                                    id="Triangle"
                                    transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) "
                                    >
                                    <use fill="#696cff" xlink:href="#path-5"></use>
                                    <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                                    </g>
                                </g>
                                </g>
                            </g>
                            </svg>
                        </span> -->
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

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style1">
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0);">Appointments</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="view_appointments.php">View Appointments</a>
                    </li>
                    <li class="breadcrumb-item active">Appointment Report</li>
                    </ol>
                </nav>
                 <!-- Basic with Icons -->
                 <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h3 class="mt-4">Patient Report Panel</h3>
                        <?php
                        if(isset($_SESSION['del_success'])){
                            echo "<h3><div class='alert alert-danger alert-dismissible' role='alert'>".
                            ($_SESSION['del_success'])
                            ."<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div></h3>";
                            unset($_SESSION['del_success']);
                        }
                        ?>
                        <button type="" onclick="history.go(-1);" class="btn btn-primary">BACK</button>
                    </div>
                    <div class="card-body">
                        <div class="row">   
                            <div class="accordion mt-3" id="accordionExample">
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button
                                    type="button"
                                    class="accordion-button collapsed"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#accordionOne"
                                    aria-expanded="false"
                                    aria-controls="accordionOne"
                                    >
                                    Patient Profile
                                    </button>
                                </h2>
                                <div
                                    id="accordionOne"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample"
                                >
                                    <div class="accordion-body">
                                        <div class="container-xxl flex-grow-1 container-p-y">
                                        <?php
                                        include('../includes/connect.php');
                                        $user_id = $_SESSION['user_role_id'];
                                        $user_role = $_SESSION['user_role'];
                                        $app_id = $_GET['id'];
                                        // $pro_sql = "SELECT * FROM patients WHERE patient_id = '$user_id'";
                                        $app_sql1 = "SELECT * FROM appointments WHERE appointment_id = '$app_id'";
                                        $app_sql_run1 = mysqli_query($con, $app_sql1);
                                        $app_result1 = mysqli_fetch_array($app_sql_run1);
                                        $patient_id = $app_result1['patient_id'];
                                        
                                        $role_sql = mysqli_query($con, "SELECT user_role FROM users WHERE user_role_id = '$patient_id'");
                                        if(mysqli_num_rows($role_sql) > 0){
                                            $user_role_res = mysqli_fetch_array($role_sql);

                                            if($user_role_res['user_role'] == 'patient'){
                                                $pro_sql = "SELECT * FROM patients WHERE patient_id = '$patient_id'";
                                                $pro_sql_run = mysqli_query($con, $pro_sql);
                                                $pro_result = mysqli_fetch_array($pro_sql_run);
                                                ?>
                                                <div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-2">
                                                                <div class="">
                                                                <div class="input-group">
                                                                    <span class="input-group-text" id="basic-addon14">Patient Name </span>
                                                                    <span class="input-group-text form-control" id="basic-addon14"><?php echo $pro_result['patient_name']; ?></span>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class=" mb-2">
                                                                <div class="">
                                                                <div class="input-group">
                                                                    <span class="input-group-text" id="basic-addon14">Patient ID </span>
                                                                    <span class="input-group-text form-control" id="basic-addon14"><?php echo $pro_result['patient_id']; ?></span>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-2">
                                                                <div class="">
                                                                <div class="input-group">
                                                                    <span class="input-group-text" id="basic-addon14">Address </span>
                                                                    <span class="input-group-text form-control" id="basic-addon14"><?php echo $pro_result['address']; ?></span>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class=" mb-2">
                                                                <div class="">
                                                                <div class="input-group">
                                                                    <span class="input-group-text" id="basic-addon14">Gender </span>
                                                                    <span class="input-group-text form-control" id="basic-addon14"><?php echo $pro_result['gender']; ?></span>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-2">
                                                                <div class="">
                                                                <div class="input-group">
                                                                    <span class="input-group-text" id="basic-addon14">Contact Number </span>
                                                                    <span class="input-group-text form-control" id="basic-addon14"><?php echo $pro_result['contact_number']; ?></span>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class=" mb-2">
                                                                <div class="">
                                                                <div class="input-group">
                                                                    <span class="input-group-text" id="basic-addon14">Date of birth </span>
                                                                    <span class="input-group-text form-control" id="basic-addon14">
                                                                    <?php 
                                                                    $date = $pro_result['dob'];
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
                                                                    ?></span>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                            else if($user_role_res['user_role'] == 'admin'){
                                                $pro_sql = "SELECT * FROM admins WHERE admin_id = '$patient_id'";
                                                $pro_sql_run = mysqli_query($con, $pro_sql);
                                                $pro_result = mysqli_fetch_array($pro_sql_run);
                                                ?>
                                                <div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-2">
                                                                <div class="">
                                                                <div class="input-group">
                                                                    <span class="input-group-text" id="basic-addon14">Patient Name </span>
                                                                    <span class="input-group-text form-control" id="basic-addon14"><?php echo $pro_result['admin_name']; ?> (Admin)</span>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class=" mb-2">
                                                                <div class="">
                                                                <div class="input-group">
                                                                    <span class="input-group-text" id="basic-addon14">Patient ID </span>
                                                                    <span class="input-group-text form-control" id="basic-addon14"><?php echo $pro_result['admin_id']; ?></span>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-2">
                                                                <div class="">
                                                                <div class="input-group">
                                                                    <span class="input-group-text" id="basic-addon14">Address </span>
                                                                    <span class="input-group-text form-control" id="basic-addon14"><?php echo $pro_result['address']; ?></span>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class=" mb-2">
                                                                <div class="">
                                                                <div class="input-group">
                                                                    <span class="input-group-text" id="basic-addon14">Gender </span>
                                                                    <span class="input-group-text form-control" id="basic-addon14"><?php echo $pro_result['gender']; ?></span>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-2">
                                                                <div class="">
                                                                <div class="input-group">
                                                                    <span class="input-group-text" id="basic-addon14">Contact Number </span>
                                                                    <span class="input-group-text form-control" id="basic-addon14"><?php echo $pro_result['contact_number']; ?></span>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class=" mb-2">
                                                                <div class="">
                                                                <div class="input-group">
                                                                    <span class="input-group-text" id="basic-addon14">Date of birth </span>
                                                                    <span class="input-group-text form-control" id="basic-addon14">
                                                                    <?php 
                                                                    $date = $pro_result['dob'];
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
                                                                    ?></span>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                            else if($user_role_res['user_role'] == 'doctor'){
                                                $pro_sql = "SELECT * FROM doctors WHERE doctor_id = '$patient_id'";
                                                $pro_sql_run = mysqli_query($con, $pro_sql);
                                                $pro_result = mysqli_fetch_array($pro_sql_run);
                                                ?>
                                                <div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-2">
                                                                <div class="">
                                                                <div class="input-group">
                                                                    <span class="input-group-text" id="basic-addon14">Patient Name </span>
                                                                    <span class="input-group-text form-control" id="basic-addon14">Dr. <?php echo $pro_result['doctor_name']; ?> (Doctor)</span>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class=" mb-2">
                                                                <div class="">
                                                                <div class="input-group">
                                                                    <span class="input-group-text" id="basic-addon14">Patient ID </span>
                                                                    <span class="input-group-text form-control" id="basic-addon14"><?php echo $pro_result['doctor_id']; ?></span>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-2">
                                                                <div class="">
                                                                <div class="input-group">
                                                                    <span class="input-group-text" id="basic-addon14">Address </span>
                                                                    <span class="input-group-text form-control" id="basic-addon14"><?php echo $pro_result['Address']; ?></span>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class=" mb-2">
                                                                <div class="">
                                                                <div class="input-group">
                                                                    <span class="input-group-text" id="basic-addon14">Gender </span>
                                                                    <span class="input-group-text form-control" id="basic-addon14"><?php echo $pro_result['gender']; ?></span>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-2">
                                                                <div class="">
                                                                <div class="input-group">
                                                                    <span class="input-group-text" id="basic-addon14">Contact Number </span>
                                                                    <span class="input-group-text form-control" id="basic-addon14"><?php echo $pro_result['contact_number']; ?></span>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class=" mb-2">
                                                                <div class="">
                                                                <div class="input-group">
                                                                    <span class="input-group-text" id="basic-addon14">Education & Experience </span>
                                                                    <span class="input-group-text form-control" id="basic-addon14"><?= $pro_result['education'].' - '.$pro_result['experience'] ?> years</span>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                            ?>
                                            <script>
                                                var patient_deleted_value = false;
                                            </script>
                                            <?php
                                        }
                                        else{
                                            echo "<h3 style='text-align: center; color: red;'>No Records Found (Patient Deleted)</h3>";
                                            ?>
                                            <script>
                                                var patient_deleted_value = true;
                                            </script>
                                            <?php
                                        }
                                        ?>
                                        </div>
                                    </div>

                                </div>
                                </div>
                                <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button
                                    type="button"
                                    class="accordion-button collapsed"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#accordionTwo"
                                    aria-expanded="false"
                                    aria-controls="accordionTwo"
                                    >
                                    Appointment Record
                                    </button>
                                </h2>
                                <div
                                    id="accordionTwo"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample"
                                >
                                    <div class="accordion-body">
                                        <?php
                                        $app_id = $_GET['id'];

                                        $app_sql3 = "SELECT * FROM appointments WHERE appointment_id = '$app_id'";
                                        $app_sql_run3 = mysqli_query($con, $app_sql3);
                                        $app_result3 = mysqli_fetch_array($app_sql_run3);
                                        $doc_id = $app_result3['doctor_id'];

                                        $app_sql2 = "SELECT * FROM doctors WHERE doctor_id = '$doc_id'";
                                        $app_sql_run2 = mysqli_query($con, $app_sql2);
                                        $app_result2 = mysqli_fetch_array($app_sql_run2);
                                        $department_id = $app_result2['department_id'];

                                        $pro_sql2 = "SELECT * FROM departments WHERE department_id = '$department_id'";
                                        $pro_sql2_run = mysqli_query($con, $pro_sql2);
                                        $bill_result2 = mysqli_fetch_array($pro_sql2_run);

                                        ?>
                                        <div class="row g-2">
                                            <div class="col-md-6">
                                                <div class=" mb-3">
                                                    <div class="">
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon14">Department </span>
                                                        <span class="input-group-text form-control" id="basic-addon14"><?php echo $bill_result2['department_name']; ?></span>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class=" mb-3">
                                                    <div class="">
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon14">Doctor Name </span>
                                                        <span class="input-group-text form-control" id="basic-addon14">Dr. <?php echo $app_result2['doctor_name']; ?></span>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col-md-6">
                                                <div class=" mb-3">
                                                    <div class="">
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon14">Appointment Date</span>
                                                        <span class="input-group-text form-control" id="basic-addon14">
                                                            <?php
                                                                $date = $app_result3['appointment_date'];
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
                                                            ?>
                                                        </span>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class=" mb-3">
                                                    <div class="">
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon14">Appointment Time</span>
                                                        <span class="input-group-text form-control" id="basic-addon14"><?php echo $app_result3['appointment_time']; ?></span>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button
                                    type="button"
                                    class="accordion-button collapsed"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#accordionThree"
                                    aria-expanded="false"
                                    aria-controls="accordionThree"
                                    >
                                    Treatment Record
                                    </button>
                                </h2>
                                <div
                                    id="accordionThree"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingThree"
                                    data-bs-parent="#accordionExample"
                                >
                                    <div class="accordion-body">
                                    

                                    <!-- Hoverable Table rows -->
                                    <div class="card">
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
                                                                echo $date_parts[2].'-Jan-'.$date_parts[0];
                                                            }
                                                            else if($month == 2){
                                                                echo $date_parts[2].'-Feb-'.$date_parts[0];
                                                            }
                                                            else if($month == 3){
                                                                echo $date_parts[2].'-Mar-'.$date_parts[0];
                                                            }
                                                            else if($month == 4){
                                                                echo $date_parts[2].'-Apr-'.$date_parts[0];
                                                            }
                                                            else if($month == 5){
                                                                echo $date_parts[2].'-May-'.$date_parts[0];
                                                            }
                                                            else if($month == 6){
                                                                echo $date_parts[2].'-Jun-'.$date_parts[0];
                                                            }
                                                            else if($month == 7){
                                                                echo $date_parts[2].'-Jul-'.$date_parts[0];
                                                            }
                                                            else if($month == 8){
                                                                echo $date_parts[2].'-Aug-'.$date_parts[0];
                                                            }
                                                            else if($month == 9){
                                                                echo $date_parts[2].'-Sep-'.$date_parts[0];
                                                            }
                                                            else if($month == 10){
                                                                echo $date_parts[2].'-Oct-'.$date_parts[0];
                                                            }
                                                            else if($month == 11){
                                                                echo $date_parts[2].'-Nov-'.$date_parts[0];
                                                            }
                                                            else if($month == 12){
                                                                echo $date_parts[2].'-Dec-'.$date_parts[0];
                                                            }
                                                            else{
                                                                echo "Invalid Date";
                                                            }
                                                            ?>
                                                        </td>
                                                        <td><?php echo $tret_results2['treatment_time']; ?></td>
                                                        <td>Dr. <?php echo $app_result2['doctor_name']; ?></td>
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
                                                        <a href="../doctor/treatment_uploads/<?php echo $tret_results2['uploads']?>" download><button type="button" class="btn btn-xs btn-primary">Download</button></a>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                                <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                  
                                                                        <button type="submit" name="edit_treatment" id="edit_treatment_btn" value="<?=$tret_results2['treatment_id']?>" class="dropdown-item"><i class="bx bx-edit-alt me-1"></i>Edit</button>
                                                                
                                                                    <form action="appointment_code.php" method="POST">
                                                                        <button type="submit" name="disapprove_appointment" class="dropdown-item"><i class="bx bx-trash me-1"></i>Delete</button>
                                                                        <input type="hidden" name="approve_id" value = "<?php echo $row['appointment_id'];?>">
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
                                                        <button type="submit" name="doc_submit_prescription" id="modal_footer_id" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- / Modal -->
                                        </div>
                                        <div class="">
                                            <a id="add_treatment_btn" href="add_treatments.php?app_id=<?php echo $app_id ?>" class="btn btn-primary">Add Treatment</a>
                                        </div>
                                    </div>
                                    <!--/ Hoverable Table rows -->
                                    </div>
                                </div>
                                </div>
                                <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button
                                    type="button"
                                    class="accordion-button collapsed"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#accordionFour"
                                    aria-expanded="false"
                                    aria-controls="accordionFour"
                                    >
                                    Prescription Record
                                    </button>
                                </h2>
                                <div
                                    id="accordionFour"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample"
                                >
                                    <div class="accordion-body">
                                        <!-- Hoverable Table rows -->
                                        <div class="card">
                                            <div class="table-responsive text-nowrap mb-4">
                                            <table class="table table-hover">
                                                <thead>
                                                <tr class="justify-content-between">
                                                    <!-- <th>ID</th> -->
                                                    <!-- <th>Treatment</th> -->
                                                    <th>Doctor</th>
                                                    <th>Patient</th>
                                                    <th>Prescription Date</th>
                                                    <th>status</th>
                                                    <!-- <th>Appointment</th> -->
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0 justify-content-between">
                                                <?php
                                                include('../includes/connect.php');
                                                $user_id = $_SESSION['user_role_id'];
                                                $pres_SQL = "SELECT * FROM prescriptions WHERE doctor_id = '$user_id' && appointment_id = '$app_id'";
                                                $pres_SQL_run = mysqli_query($con, $pres_SQL);
                                                if(mysqli_num_rows($pres_SQL_run) > 0){
                                                # $data = mysqli_fetch_array($pres_SQL_run);
                                                    while ($row = mysqli_fetch_array($pres_SQL_run)){
                                                ?>   
                                                
                                                <tr>
                                                    <!-- <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong></td> -->
                                                    <!-- <td><?php #echo $row['prescription_id']; ?></td> -->
                                                    <!-- <td><?php #echo $row['treatment_id']; ?></td> -->
                                                    <td>Dr. <?php echo $_SESSION['fullname']; ?></td>
                                                    <td><?php 
                                                    $patientID = $row['patient_id'];
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
                                                    ?></td>
                                                    <td><?php 
                                                    $date = $row['prescription_date'];
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
                                                    ?></td>
                                                    
                                                    <?php
                                                    if($row['status'] == 0){
                                                        echo "<td><span class='badge bg-label-warning me-1'>In progress</span></td>";
                                                    }
                                                    else if($row['status'] == 1){
                                                        echo "<td><span class='badge bg-label-success me-1'>Active</span></td>";
                                                    }
                                                    ?>    
                                                    <!-- <td><?php #echo $row['appointment_id']; ?></td> -->
                                                    <td>
                                                    <!-- Edit Appointment Modal -->
                                                    <?php
                                                    if($_SESSION['user_role'] == 'doctor'){
                                                        $pres_id =  $row['prescription_id'];
                                                        ?>
                                                        <div class="dropdown">
                                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                        <form action="doc_new_prescription_code.php?pres_id=<?php echo  $row['prescription_id'] ?>&pat_id=<?php echo $patient_id ?>&app_id=<?php echo $app_id ?>" method="POST">
                                                            <button type="submit" name="delete_appointment" class="dropdown-item"><i class="bx bx-show me-1"></i>View</button>
                                                            <input type="hidden" name="" value = "<?php echo $row['prescription_id'] ?>">
                                                        </form>
                                                        <form action="appointment_code.php" method="POST">
                                                            <button type="submit" name="pres_delete_btn" class="dropdown-item"><i class="bx bx-trash me-1"></i>Delete</button>
                                                            <input type="hidden" name="pres_delete_id" value = "<?php echo $row['prescription_id'] ?>">
                                                            <input type="hidden" name="app_del_id" value = "<?php echo $row['appointment_id'] ?>">
                                                        </form>
                                                        </div>
                                                        
                                                    <!--/ Edit Appointment Modal -->
                                                        </div>
                                                        <?php
                                                    }
                                                    ?>     
                                                    </td>
                                                </tr>
                                                <?php
                                                    }
                                                }
                                                ?>
                                                </tbody>
                                            </table>
                                            
                                            </div>
                                            <div class="">
                                                <button id="add_prescription_btn" class="btn btn-primary" onclick="return dlete()" data-bs-toggle="modal" data-bs-target="#backDropModalDeleted">Add Prescription</button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="backDropModalDeleted" data-bs-backdrop="static" tabindex="-1">
                                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                                        <form class="modal-content" action="appointment_code.php?app_id=<?php echo $app_id?>&pat_id=<?php echo $patient_id ?>" method="POST">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="backDropModalTitle">Add Prescription</h5>
                                                            <button
                                                            type="button"
                                                            class="btn-close"
                                                            data-bs-dismiss="modal"
                                                            aria-label="Close"
                                                            ></button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="mb-4">
                                                                    <div class="">
                                                                    <div class="input-group">
                                                                        <span class="input-group-text" id="basic-addon14">Doctor </span>
                                                                        <span class="input-group-text form-control" id="basic-addon14">Dr. <?php echo $app_result2['doctor_name']; ?></span>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class=" mb-4">
                                                                    <div class="">
                                                                    <div class="input-group">
                                                                        <span class="input-group-text" id="basic-addon14">Patient </span>
                                                                        <?php
                                                                        $pro_sql = "SELECT * FROM users WHERE user_role_id = '$patient_id'";
                                                                        $pro_sql_run = mysqli_query($con, $pro_sql);
                                                                        if(mysqli_num_rows($pro_sql_run) > 0){
                                                                            $pro_result = mysqli_fetch_array($pro_sql_run);
                                                                            $user_role2 = $pro_result['user_role'];
                                                                            if($user_role2 == 'patient'){
                                                                                echo "<span class='input-group-text form-control' id='basic-addon14'>".$pro_result['fullname']."</span>";
                                                                            }
                                                                            else if($user_role2 == 'admin'){
                                                                                echo "<span class='input-group-text form-control' id='basic-addon14'>".$pro_result['fullname']." (Admin)</span>";
                                                                            }
                                                                            else if($user_role2 == 'doctor'){
                                                                                echo "<span class='input-group-text form-control' id='basic-addon14'>Dr. ".$pro_result['fullname']." (Doctor)</span>";
                                                                            }
                                                                        }
                                                                        else{
                                                                            echo "<span class='input-group-text form-control' id='patient_deleted' style='color: red;'>Deleted</span>";
                                                                            ?>
                                                                            <script>
                                                                                var patient_deleted = true;
                                                                            </script>
                                                                            <?php
                                                                        }
                                                                        ?>
                                                                        
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                                            Close
                                                            </button>
                                                            <button type="submit" name="doc_submit_prescription" id="modal_footer_id" class="btn btn-primary">Submit</button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <!-- / Modal -->
                                            </div>
                                        </div>
                                
                                        <!--/ Hoverable Table rows -->
                                    </div>
                                </div>
                                </div>
                                <div class="card accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button
                                        type="button"
                                        class="accordion-button collapsed"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#accordionFive"
                                        aria-expanded="false"
                                        aria-controls="accordionFive"
                                        >
                                        Billing Report
                                        </button>
                                    </h2>
                                    <div
                                        id="accordionFive"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="headingFive"
                                        data-bs-parent="#accordionExample"
                                    >
                                        <div class="accordion-body">
                                            <?php
                                            $app_id = $_GET['id'];

                                            $bill_sql2 = "SELECT * FROM billing WHERE appointment_id = '$app_id'";
                                            $bill_sql2_run = mysqli_query($con, $bill_sql2);
                                            $bill_result2 = mysqli_fetch_array($bill_sql2_run);

                                            ?>
                                            <div class="row g-2">
                                                <div class="col-md-6">
                                                    <div class=" mb-3">
                                                        <div class="">
                                                        <div class="input-group">
                                                            <span class="input-group-text" id="basic-addon14">Bill Number </span>
                                                            <span class="input-group-text form-control" id="basic-addon14">OHCS_BILL_0<?php echo $bill_result2['billing_id']; ?></span>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class=" mb-3">
                                                        <div class="">
                                                        <div class="input-group">
                                                            <span class="input-group-text" id="basic-addon14">Appointment Number</span>
                                                            <span class="input-group-text form-control" id="basic-addon14"><?php echo $bill_result2['appointment_id']; ?></span>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-2 mb-3">
                                                <div class="col-md-6">
                                                    <div class=" mb-3">
                                                        <div class="">
                                                        <div class="input-group">
                                                            <span class="input-group-text" id="basic-addon14">Billing Date</span>
                                                            <span class="input-group-text form-control" id="basic-addon14">
                                                                <?php
                                                                    $date = $bill_result2['billing_date'];
                                                                    $date_parts = explode('-', $date);
                                                                    $month = $date_parts[1];
                                                                    if($month == 1){
                                                                        echo $date_parts[2].'-Jan-'.$date_parts[0];
                                                                    }
                                                                    else if($month == 2){
                                                                        echo $date_parts[2].'-Feb-'.$date_parts[0];
                                                                    }
                                                                    else if($month == 3){
                                                                        echo $date_parts[2].'-Mar-'.$date_parts[0];
                                                                    }
                                                                    else if($month == 4){
                                                                        echo $date_parts[2].'-Apr-'.$date_parts[0];
                                                                    }
                                                                    else if($month == 5){
                                                                        echo $date_parts[2].'-May-'.$date_parts[0];
                                                                    }
                                                                    else if($month == 6){
                                                                        echo $date_parts[2].'-Jun-'.$date_parts[0];
                                                                    }
                                                                    else if($month == 7){
                                                                        echo $date_parts[2].'-Jul-'.$date_parts[0];
                                                                    }
                                                                    else if($month == 8){
                                                                        echo $date_parts[2].'-Aug-'.$date_parts[0];
                                                                    }
                                                                    else if($month == 9){
                                                                        echo $date_parts[2].'-Sep-'.$date_parts[0];
                                                                    }
                                                                    else if($month == 10){
                                                                        echo $date_parts[2].'-Oct-'.$date_parts[0];
                                                                    }
                                                                    else if($month == 11){
                                                                        echo $date_parts[2].'-Nov-'.$date_parts[0];
                                                                    }
                                                                    else if($month == 12){
                                                                        echo $date_parts[2].'-Dec-'.$date_parts[0];
                                                                    }
                                                                    else{
                                                                        echo "Invalid Date";
                                                                    }
                                                                ?>
                                                            </span>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class=" mb-3">
                                                        <div class="">
                                                        <div class="input-group">
                                                            <span class="input-group-text" id="basic-addon14">Billing Time</span>
                                                            <span class="input-group-text form-control" id="basic-addon14"><?php echo $bill_result2['billing_time']; ?></span>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="mb-3" style="height: 4px; border-radius: 5px;">
                                            <div class="table-responsive text-nowrap mb-3">
                                                <table class="table table-hover" id="billing_table">
                                                    <thead>
                                                    <tr class="justify-content-between">
                                                        <th>Date</th>
                                                        <th>Bill Discription</th>
                                                        <th style="text-align: right;">Bill Amount</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody class="table-border-bottom-0 justify-content-between">
                                                    <?php
                                                    $billing_id = $bill_result2['billing_id'];
                                                    $bill_query = mysqli_query($con, "SELECT * FROM billing_records WHERE billing_id = '$billing_id'");
                                                    if(mysqli_num_rows($bill_query) > 0){
                                                        while($bills = mysqli_fetch_array($bill_query)){
                                                            ?>
                                                            <tr>
                                                                <td><?php                                                           
                                                                    $date = $bills['bill_date'];
                                                                    $date_parts = explode('-', $date);
                                                                    $month = $date_parts[1];
                                                                    if($month == 1){
                                                                        echo $date_parts[2].'-Jan-'.$date_parts[0];
                                                                    }
                                                                    else if($month == 2){
                                                                        echo $date_parts[2].'-Feb-'.$date_parts[0];
                                                                    }
                                                                    else if($month == 3){
                                                                        echo $date_parts[2].'-Mar-'.$date_parts[0];
                                                                    }
                                                                    else if($month == 4){
                                                                        echo $date_parts[2].'-Apr-'.$date_parts[0];
                                                                    }
                                                                    else if($month == 5){
                                                                        echo $date_parts[2].'-May-'.$date_parts[0];
                                                                    }
                                                                    else if($month == 6){
                                                                        echo $date_parts[2].'-Jun-'.$date_parts[0];
                                                                    }
                                                                    else if($month == 7){
                                                                        echo $date_parts[2].'-Jul-'.$date_parts[0];
                                                                    }
                                                                    else if($month == 8){
                                                                        echo $date_parts[2].'-Aug-'.$date_parts[0];
                                                                    }
                                                                    else if($month == 9){
                                                                        echo $date_parts[2].'-Sep-'.$date_parts[0];
                                                                    }
                                                                    else if($month == 10){
                                                                        echo $date_parts[2].'-Oct-'.$date_parts[0];
                                                                    }
                                                                    else if($month == 11){
                                                                        echo $date_parts[2].'-Nov-'.$date_parts[0];
                                                                    }
                                                                    else if($month == 12){
                                                                        echo $date_parts[2].'-Dec-'.$date_parts[0];
                                                                    }
                                                                    else{
                                                                        echo "Invalid Date";
                                                                    }
                                                                ?></td>
                                                                <td><?= $bills['bill_type'] ?></td>
                                                                <td style="text-align: right;"><?php
                                                                if($bills['bill_amount'] >= 1000){
                                                                echo '<b>'.number_format(($bills['bill_amount']/1000),3,',').'/=</b>';
                                                                }
                                                                else{
                                                                    echo $bills['bill_amount'].'/=';
                                                                }
                                                                ?></td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                    </tbody>
                                                    <!-- <hr class="mt-4 mb-4"> -->
                                                    <tfoot class="table-border-bottom-0">
                                                        
                                                    <?php
                                                    $billing_id = $bill_result2['billing_id'];
                                                    $bill_query_sum = mysqli_query($con, "SELECT sum(bill_amount) as total_amount, tax_amount, discount_amount, billing_status FROM billing_records br JOIN billing b ON br.billing_id = b.billing_id WHERE b.appointment_id = '$app_id' AND br.billing_id = '$billing_id'");
                                                    $total_amount_res = mysqli_fetch_array($bill_query_sum);
                                                    $total_amount = $total_amount_res['total_amount'];
                                                    
                                                    $tax = $total_amount_res['tax_amount'];
                                                    $tax_amount = (($tax / 100) * $total_amount);

                                                    $discount = $total_amount_res['discount_amount'];
                                                    ?>
                                                    <tr>
                                                        
                                                        <th></th>
                                                        <th style="text-align: right;">Bill Amount:</th>
                                                        <td style="text-align: right;"><?php 
                                                        if($total_amount >= 1000){
                                                        echo '<b>'.number_format(($total_amount/1000),3,',').'/=</b>';
                                                        }
                                                        else{
                                                            echo $total_amount.'/=';
                                                        }
                                                        ?></td>
                                                    </tr>
                                                    <tr>                                      
                                                        <th></th>
                                                        <th style="text-align: right;">Tax Amount (<?=$tax?>%):</th>
                                                        <td style="text-align: right;"> <?php
                                                        if($tax_amount >= 1000){
                                                        echo '<b>'.number_format(($tax_amount/1000),3,',').'/=</b>';
                                                        }
                                                        else{
                                                            echo $tax_amount.'/=';
                                                        }
                                                        ?></td>
                                                    </tr>
                                                    <form id="change_discount_form" method="POST">
                                                        <tr>
                                                            <td>
                                                                <div id="change_discount_td">
                                                                    <input type="number" required name="discount_amount" style="width: 155px;" class="form-control mb-1" placeholder="<?php 
                                                                    if($discount >= 1000){
                                                                    echo number_format(($discount/1000),3,',').'/=';
                                                                    }
                                                                    else{
                                                                        echo $discount.'/=';
                                                                    }?>">
                                                                    <input type="hidden" name="billing_id" value="<?=$billing_id?>">
                                                                    <input type="hidden" name="appointment_id" value="<?=$app_id?>">
                                                                    <textarea name="discount_reason" required style="width: 155px;" id="discount_reason" class="form-control mb-1" placeholder="Discount Reason Here..."></textarea>
                                                                    <button type="submit" class="btn btn-primary">Change Discount </button>                                                     
                                                                </div>
                                                            </td>
                                                            <th style="text-align: right;">Discount :</th>
                                                            <td style="text-align: right;"> <?php
                                                            if($discount >= 1000){
                                                                echo '<b>'.number_format(($discount/1000),3,',').'/=</b>';
                                                                }
                                                                else{
                                                                    echo $discount.'/=';
                                                                }
                                                            ?></td>
                                                        </tr>         
                                                    </form>
                                                    <script>
                                                        $(document).on('submit', '#change_discount_form', function (e) {
                                                            e.preventDefault();

                                                            var discount_form = new FormData(this);
                                                            discount_form.append('change_discount_btn', true);

                                                            // var billing_id = $('#discount_btn').val();
                                                            $.ajax({
                                                                type: "POST",
                                                                url: "appointment_code.php",
                                                                data: discount_form,
                                                                processData: false,
                                                                contentType: false,
                                                                success: function (response) {
                                                                    var res = $.parseJSON(response);
                                                                    if(res.status == 500){
                                                                        swal('Ooops..!', res.message,'error');
                                                                    }
                                                                    else if(res.status == 200){
                                                                        $('#billing_table').load(location.href + ' #billing_table');
                                                                        location.reload();
                                                                        swal('Good Job.!', res.message,'success');
                                                                        // $('#accordionFive').removeClass('collapse');
                                                                    }
                                                                }
                                                            });
                                                            
                                                            
                                                        });
                                                    </script>
                                                    <tr>                                   
                                                        <td>
                                                            <?php
                                                                if($total_amount_res['billing_status'] == 0){
                                                                    echo "<span style='width: 155px; text-align:center;' class='form-control mb-1'><b>NOT PAID</b></span>";
                                                                }
                                                                else if($total_amount_res['billing_status'] == 1){
                                                                    echo "<span id='paid_discharge_status' style='width: 155px; text-align:center; font-weight: bold;' class='form-control mb-1'>PAID</span>";
                                                                }
                                                            ?>
                                                        </td>
                                                        <th style="text-align: right;">Grand Total:</th>
                                                        <td style="text-align: right;"><?php 
                                                        $grand_total = $total_amount - ($tax_amount + $discount);
                                                        if($grand_total >= 1000){
                                                            $grand_total = $total_amount - ($tax_amount + $discount);
                                                        echo '<b>'.number_format(($grand_total/1000),3,',').'/=</b>';
                                                        }
                                                        else{
                                                            echo $grand_total.'/=';
                                                        }
                                                        ?></td>
                                                    </tr>
                                                    </tfoot>
                                                </table>                   
                                            </div>
                                            <?php
                                            $user_id = $_SESSION['user_role_id'];
                                            $pay_check_sql = mysqli_query($con, "SELECT patient_id FROM billing WHERE appointment_id = '$app_id' AND patient_id = '$user_id'");
                                            if(mysqli_num_rows($pay_check_sql) > 0){
                                                ?>
                                                <hr id="payment_hr" class="mb-3" style="height: 4px; border-radius: 5px;">
                                                <div class="row justify-content-end">
                                                    <div class="col-sm-10 d-grid col-lg-4 mx-auto">
                                                        <?php
                                                        $payment = number_format(($grand_total/1000),3,',')
                                                        ?>
                                                        <button type="button" id="payment_btn" class="btn btn-primary btn-lg">Make Payment of <b><?php
                                                            if($grand_total >= 1000){
                                                            echo '<b>'.number_format(($grand_total/1000),3,',').'/=</b>';
                                                            }
                                                            else{
                                                                echo $grand_total.'/=';
                                                            }
                                                        ?></b> 
                                                        </button>
                                                        <?php
                                                            if($total_amount_res['billing_status'] == 1){
                                                                ?>
                                                                <script>
                                                                    $('#payment_btn').addClass('d-none');
                                                                    $('#payment_hr').addClass('d-none');
                                                                </script>
                                                                <?php
                                                            }
                                                        ?>
                                                    </div>
                                                </div>
                                                <?php
                                                ?>
                                                <script>
                                                    var discharge_no = true;
                                                </script>
                                                <?php
                                            }
                                            else{
                                                ?>
                                                <script>
                                                    var discharge_no = false;
                                                </script>
                                                <?php
                                            }
                                            ?>
                                        </div>                                                                         
                                    </div>
                                </div>
                                <div class="row justify-content-end">
                                    <div class="col-sm-10 d-grid col-lg-3 mx-auto">
                                        <button type="button" value="<?php echo $_GET['id'];?>" id="discharge_patient_btn" class="btn btn-primary btn-lg">Discharge Patient</button>
                                        <?php
                                        if($total_amount_res['billing_status'] == 0){
                                            ?>
                                            <script>
                                                $('#discharge_patient_btn').addClass('d-none');
                                            </script>
                                            <?php
                                        }
                                        else if($total_amount_res['billing_status'] == 1){
                                            ?>
                                            <script>
                                                $('#change_discount_td').addClass('d-none');
                                            </script>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                                <script>
                                    if(discharge_no == true){
                                        $('#discharge_patient_btn').addClass('d-none');
                                        $('#change_discount_td').addClass('d-none');
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>

            <?php
            if($app_result3['appointment_status'] == 2){
                ?>
                <script>
                    $('#discharge_patient_btn').addClass('d-none');
                    $('#paid_discharge_status').text('DISCHARGED');
                </script>
                <?php
            }

            $this_doc_id = $_SESSION['user_role_id'];
            $check_doc_id = mysqli_query($con, "SELECT patient_id FROM appointments WHERE appointment_id = '$app_id'");
            $check_doc_res = mysqli_fetch_array($check_doc_id);
            $other_doc_id = $check_doc_res['patient_id'];

            if($this_doc_id == $other_doc_id){
                ?>
                <script>
                    $('#add_treatment_btn').addClass('d-none');
                    $('#add_prescription_btn').addClass('d-none');
                </script>
                <?php
            }
            ?>
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
        function dlete(){
            if(patient_deleted == true){
            $('#modal_footer_id').addClass('d-none');
            swal({
                title : 'Ooops..!',
                text : "You can't add prescriptions to deleted patient",
                icon: 'error',
                buttons : [,'OK']}).
                then((willDelete) => {
                    if(willDelete){
                        $('#backDropModalDeleted').modal('hide'); 
                    }
                })
            }
        }

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
        if(patient_deleted_value == true){
            // swal('Ooops..!','You cannot add treatemnts to a deleted patient','error');
            $('#add_treatment_btn').addClass('d-none');
        }

        $(document).on('click', '#discharge_patient_btn', function () {
            var finish_id = $(this).val();
            // alert(finish_id);

            $.ajax({
                type: "GET",
                url: "appointment_code.php?finish_id="+finish_id,
                success: function (response) {
                    var res = $.parseJSON(response);
                    if(res.status == 500){
                        swal('Ooops..!',res.message,'error');
                    }
                    else if(res.status == 200){
                        // $('.appointment_table').load(location.href + ' .appointment_table');
                        swal('Good Job.!',res.message,'success');
                    }
                }
            });
        });
    </script>
  </body>
</html>
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
                            <li class="menu-item active">
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
                        <li class="breadcrumb-item active">View Your Appointments</li>
                        </ol>
                    </nav>
                                        
                        <!-- Hoverable Table rows -->
                        <div class="card">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                
                                <h3 class="mb-0">Your Appointments</h3>
                                <?php
                                if(isset($_SESSION['appointment_success'])){
                                    echo "<h3><div class='alert alert-success alert-dismissible' role='alert'>".
                                    ($_SESSION['appointment_success'])
                                    ."<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                  </div></h3>";
                                    unset($_SESSION['appointment_success']);
                                }
                                ?>
                                <!-- Search -->
                                <div class="navbar-nav align-items-center outline">
                                    <div class="nav-item d-flex align-items-center">
                                    <i class="bx bx-search fs-4 lh-0"></i>
                                    <input
                                        type="text"
                                        class="form-control border-0 shadow-none"
                                        placeholder="Search..."
                                        aria-label="Search..."
                                        id="search"
                                    />
                                    </div>
                                </div>
                                <!-- /Search -->
                                <div>
                                <!-- <a href="add_appointment.php" class="btn btn-primary">Add Appointment</a> -->
                                </div>
                            </div>
                            <div class="bootstrap-data-table-panel">
                            <div class="table-responsive text-nowrap">
                            <table class="table table-hover appointment_table" id="bootstrap-data-table-export">
                                <thead>
                                <tr class="justify-content-between">
                                    <!-- <th>ID</th> -->
                                    <th>Type</th>
                                    <th>Patient ID</th>
                                    <th>Room</th>
                                    <th>Department</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Doctor</th>
                                    <th>Status</th>
                                    <th>Reason</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody class="table-border-bottom-0 justify-content-between">
                                <?php
                                include('../includes/connect.php');
                                $user_id = $_SESSION['user_role_id'];
                                $app_SQL = "SELECT * FROM appointments WHERE patient_id = '$user_id' ORDER BY appointment_id DESC";
                                $app_SQL_run = mysqli_query($con, $app_SQL);
                                if(mysqli_num_rows($app_SQL_run) > 0){
                                # $data = mysqli_fetch_array($app_SQL_run);
                                    while ($row = mysqli_fetch_array($app_SQL_run)){
                                        $_SESSION['app_id'] = $row['appointment_id'];
                                        $_SESSION['doc_id'] = $row['doctor_id'];
                                        $_SESSION['pat_id'] = $row['patient_id'];
                                ?>   
                                
                                <tr>
                                    
                                    <!-- <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong></td> -->
                                    <!-- <td><?php #echo $row['appointment_id']; ?></td> -->
                                    <td><?php echo $row['appointment_type']; ?></td>
                                    <td><?php
                                    $patientID = $row['patient_id']; 
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
                                    <td><?php echo $row['room_id']; ?></td>
                                    <td><?php 
                                    $dept_id = $row['department_id']; 
                                    $dep_query = mysqli_query($con, "SELECT * FROM departments WHERE department_id = '$dept_id'");
                                    $dep_res = mysqli_fetch_array($dep_query);
                                    echo $dep_res['department_name'];
                                    ?></td>
                                    <td>
                                        <?php
                                        $date = $row['appointment_date']; 
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
                                    <td><?php echo $row['appointment_time']; ?></td>
                                    <td><?php 
                                    $doc_id = $row['doctor_id'];
                                    $doc_qry = mysqli_query($con, "SELECT doctor_name FROM doctors WHERE doctor_id = '$doc_id'");
                                    $doc_res = mysqli_fetch_array($doc_qry);
                                    echo 'Dr. '.$doc_res['doctor_name']
                                    ?></td>
                                    
                                    
                                    <?php
                                    if($row['appointment_status'] == 0){
                                        echo "<td><span class='badge bg-label-warning me-1'>Pending</span></td>";
                                    }
                                    else if($row['appointment_status'] == 1){
                                        echo "<td><span class='badge bg-label-info me-1'>Approved</span></td>";
                                    }
                                    else if($row['appointment_status'] == 2){
                                        echo "<td><span class='badge bg-label-success me-1'>Done</span></td>";
                                    }
                                    ?>    
                                    <td><?php echo wordwrap($row['appointment_reason'], 40, '</br>'); ?></td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="appointment_report.php?id=<?php echo $row['appointment_id'] ?>"><i class="bx bx-show"></i> View</a>           
                                                <button type="button" value="<?=$row['appointment_id']?>" id="app_edit_btn" class="dropdown-item"><i class="bx bx-edit-alt me-1"></i>Edit</button>
                                                <button type="button" value="<?=$row['appointment_id']?>" id="app_delete_btn" class="dropdown-item"><i class="bx bx-trash me-1"></i>Delete</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                                    }
                                }
                                ?>
                                </tbody>
                                
                            </table>
                            
                            <!-- Modal Backdrop-->
                            <div class="modal fade" id="backEditDropModal" data-bs-backdrop="static" tabindex="-1">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <form class="modal-content" id="EditAppointment" method="POST">
                                        <div class="modal-header">
                                            <h3 class="modal-title" id="backDropModalTitle">Edit Appointment</h3>
                                            <button
                                            type="button"
                                            class="btn-close"
                                            data-bs-dismiss="modal"
                                            aria-label="Close"
                                            ></button>
                                        </div>
                                        <div class="modal-body">
                                            <h3>
                                                <div class="alert alert-danger d-none alert-dismissible" role="alert" id="errorMessage">
                                                </div>
                                            </h3>
                                            <input type="hidden" id="appointment_id" class="form-control" name="appointment_id">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class=" mb-4">
                                                        <div class="">
                                                        <div class="input-group">
                                                            <span class="input-group-text" id="basic-addon14">Appointment Type</span>
                                                            <select class="form-select" id="appointment_type" name="appointment_type">
                                                                <option >Select</option>
                                                                <option value="Regular">Regular</option>
                                                                <option value="VIP">VIP</option>
                                                                <option value="Premium">Premium</option>
                                                            </select>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class=" mb-4">
                                                        <div class="">
                                                        <div class="input-group">
                                                            <span class="input-group-text" id="basic-addon14">Patient</span>
                                                            <span class="input-group-text form-control" id="basic-addon14">Dr. <?=$_SESSION['fullname'];?> (Doctor)</span>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                <div class="mb-4">
                                                        <div class="">
                                                            <div class="input-group">
                                                                <!-- <span class="input-group-text" id="basic-addon14">Gender </span> -->
                                                                <div class="input-group">
                                                                    <span class="input-group-text" id="basic-addon14">Appointment Date</span>
                                                                    <input type="date" class="form-control" name="appointment_date" id="appointment_date">
                                                                </div>                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class=" mb-4">
                                                        <div class="">
                                                            <div class="input-group">
                                                                <span class="input-group-text" id="basic-addon14">Appointment Time</span>
                                                                <input type="time" id="appointment_time"
                                                                class="form-control" onfocus="(this.type='time')"
                                                                aria-describedby="basic-icon-default-phone2" name="appointment_time"
                                                                required />                                                        
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class=" mb-4">
                                                        <div class="">
                                                        <div class="input-group">
                                                            <span class="input-group-text" id="basic-addon14">Doctor</span>
                                                            <select class="form-select" id="doctor_id" name="doctor_id" required>
                                                                <option value="">Select</option>
                                                                <?php
                                                                include("../includes/connect.php");
                                                                $doc_not_id = $_SESSION['user_role_id'];
                                                                $doc_query = mysqli_query($con, "SELECT * FROM doctors WHERE doc_status = 1 AND doctor_id != '$doc_not_id'");
                                                                if(mysqli_num_rows($doc_query) > 0){
                                                                    while($doc_result = mysqli_fetch_array($doc_query)){
                                                                        ?>
                                                                        <script>
                                                                            var doc_status = true;
                                                                        </script>
                                                                        <option value="<?php echo $doc_result['doctor_id']?>">Dr. <?php echo $doc_result['doctor_name'] ?> </option>
                                                                        <?php
                
                                                                    }
                                                                }
                                                                else{
                                                                    ?>
                                                                    <option style="color: red;">No Available Doctor</option>
                                                                    <script>
                                                                        var doc_status = false;
                                                                    </script>
                                                                    <?php
                                                                }
                                                                ?>                                 
                                                            </select>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class=" mb-4">
                                                        <div class="">
                                                        <div class="input-group">
                                                            <span class="input-group-text" id="basic-addon14">Room</span>
                                                            <select class="form-select" id="room_id" name="room_id" required>
                                                                <option value="">Select</option>
                                                                <?php
                                                                $rooms_query = mysqli_query($con, "SELECT * FROM rooms WHERE status = 1");
                                                                if(mysqli_num_rows($rooms_query) > 0){
                                                                    while($room = mysqli_fetch_array($rooms_query))
                                                                    {
                                                                        ?>
                                                                        <script>
                                                                            var room_status_availability = true;
                                                                        </script>
                                                                        <option value="<?php echo $room['room_id']?>"><?php echo $room['room_type']?>, <?php echo $room['room_number']?>, <?php echo $room['room_size']?></option>
                                                                        <?php
                                                                    }
                                                                }
                                                                else{
                                                                    ?>
                                                                    <option style="color: red;">No Available Room</option>
                                                                    <script>
                                                                        var room_status_availability = false;
                                                                    </script>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class=" mb-4">
                                                        <div class="">
                                                        <div class="input-group">
                                                            <span class="input-group-text" id="basic-addon14">Appointment Reason</span>
                                                            <textarea rows="5" class="form-control"
                                                            name="appointment_reason"
                                                            id="appointment_reason"
                                                            placeholder="Feeling pain and fever................"
                                                            aria-label="Feeling pain & fever................"
                                                            required
                                                            aria-describedby="basic-icon-default-message2"></textarea>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                                                   
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                            Close
                                            </button>
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- / Modal Backdrop -->
                            <div class="card mb-4">
                                <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4">
                                    <div class="demo-inline-spacing">  
                                    </div>
                                    </div>
                                    <div class="col-lg-8">
                                    <div class="demo-inline-spacing">
                                        <nav aria-label="Page navigation">
                                        <ul class="pagination">
                                            <li class="page-item prev">
                                            <a class="page-link" href="javascript:void(0);"
                                                ><i class="tf-icon bx bx-chevrons-left"></i
                                            ></a>
                                            </li>
                                            <li class="page-item active">
                                            <a class="page-link" href="javascript:void(0);">1</a>
                                            </li>
                                            <li class="page-item">
                                            <a class="page-link" href="javascript:void(0);">2</a>
                                            </li>
                                            <li class="page-item">
                                            <a class="page-link" href="javascript:void(0);">3</a>
                                            </li>
                                            <li class="page-item">
                                            <a class="page-link" href="javascript:void(0);">4</a>
                                            </li>
                                            <li class="page-item">
                                            <a class="page-link" href="javascript:void(0);">5</a>
                                            </li>
                                            <li class="page-item next">
                                            <a class="page-link" href="javascript:void(0);"
                                                ><i class="tf-icon bx bx-chevrons-right"></i
                                            ></a>
                                            </li>
                                        </ul>
                                        </nav>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            
                        </div>
                
                        <!--/ Hoverable Table rows -->
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
    <script src="../js/sweetalert.min.js"></script>
    <script src="../js/jQuery.min.js"></script>
    <script>
        $(document).on('click', '#app_edit_btn', function () {
            var edit_id = $(this).val();
            // alert(edit_id);
            $.ajax({
                type: "GET",
                url: "appointment_code.php?edit_id="+edit_id,
                success: function (response) {
                    var res = $.parseJSON(response);
                    if(res.status == 500){
                        swal('Ooops..!'.res.message,'error');
                    }
                    else if(res.status == 200){
                        $('#appointment_id').val(res.data.appointment_id);
                        $('#appointment_type').val(res.data.appointment_type);
                        $('#appointment_time').val(res.data.appointment_time);
                        $('#room_id').val(res.data.room_id);
                        $('#doctor_id').val(res.data.doctor_id);
                        $('#appointment_date').val(res.data.appointment_date);
                        $('#appointment_reason').text(res.data.appointment_reason);
                        $('#backEditDropModal').modal('show');
                    }
                }
            });
        });

        $(document).on('submit', '#EditAppointment', function (e) {
            e.preventDefault();

            var form_data = new FormData(this);
            form_data.append('update_appointment_btn', true);

            $.ajax({
                type: "POST",
                url: "appointment_code.php",
                data: form_data,
                processData: false,
                contentType: false,
                success: function (response) {
                    var res = $.parseJSON(response);
                    if(res.status == 500){
                        $('#backEditDropModal').modal('hide');
                        swal('Ooops..!',res.message,'error');
                    }
                    else if(res.status == 200){
                        $('#backEditDropModal').modal('hide');
                        $('.appointment_table').load(location.href + ' .appointment_table');
                        swal('Good Job.!',res.message,'success');
                    }
                }
            });
        });

        $(document).on('click', '#app_delete_btn', function () {
            swal({
                title: 'Are you sure?',
                text: 'Once deleted, you will not be able to recover this data!',
                icon: 'warning',
                buttons: true,
                dangerMode: true,
            }).then((go_delete) => {
                if(go_delete){
                    var delete_id = $(this).val();
                    // alert(delete_id);
                    $.ajax({
                        type: "GET",
                        url: "appointment_code.php?app_delete_id="+delete_id,
                        success: function (response) {
                            var res = $.parseJSON(response);
                            if(res.status == 500){
                                swal('Ooops..!',res.message,'error');
                            }
                            else if(res.status == 200){
                                $('.appointment_table').load(location.href + ' .appointment_table');
                                swal('Good Job.!',res.message,'success');
                            }
                        }
                    });
                }
            })
        });
    </script>
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
        $(document).ready(function(){
            $("#search").on("keyup",function() {
                var value = $(this).val().toLowerCase();
                $("tbody tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
  </body>
</html>
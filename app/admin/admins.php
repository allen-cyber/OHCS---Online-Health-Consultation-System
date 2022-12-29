<?php
session_start();
include("../includes/admin_security.php");
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
                                <a href="view_profile.php" class="menu-link">
                                    <div data-i18n="Without menu">View Profile</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="change_password.php" class="menu-link">
                                    <div data-i18n="Without navbar">Change Password</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="admins.php" class="menu-link">
                                    <div data-i18n="Without navbar">View Admins</div>
                                </a>
                            </li>
                           
                        </ul>
                    </li>

                    <!-- Appointment -->
                    <li class="menu-item">
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
                                <a href="prescriptions.php" class="menu-link">
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
                                <a href="treatments.php" class="menu-link">
                                    <div data-i18n="Without navbar">View Treatments</div>
                                </a>
                            </li>
                           
                        </ul>
                    </li>

                    <!-- Patients -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-accessibility"></i>
                            <div data-i18n="Layouts">Patients</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="add_patients.php" class="menu-link">
                                    <div data-i18n="Without menu">Add Patients</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="patients.php" class="menu-link">
                                    <div data-i18n="Without navbar">View Patients</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Doctors -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-street-view"></i>
                            <div data-i18n="Layouts">Doctors</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="add_doctors.php" class="menu-link">
                                    <div data-i18n="Without menu">Add Doctors</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="doctors.php" class="menu-link">
                                    <div data-i18n="Without navbar">View Doctors</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Rooms -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-street-view"></i>
                            <div data-i18n="Layouts">Rooms</div>
                        </a>

                        <ul class="menu-sub">
                            
                            <li class="menu-item">
                                <a href="rooms.php" class="menu-link">
                                    <div data-i18n="Without navbar">View Rooms</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                
                </ul>
            </aside>
            <!-- / Menu --><!-- Menu -->

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
                    <li class="menu-item active open">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-user"></i>
                            <div data-i18n="Layouts">Profile</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="view_profile.php" class="menu-link">
                                    <div data-i18n="Without menu">View Profile</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="menu-link">
                                    <div data-i18n="Without navbar">Change Password</div>
                                </a>
                            </li>
                            <li class="menu-item active">
                                <a href="admins.php" class="menu-link">
                                    <div data-i18n="Without navbar">View Admins</div>
                                </a>
                            </li>
                           
                        </ul>
                    </li>

                    <!-- Appointment -->
                    <li class="menu-item">
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
                                <a href="prescriptions.php" class="menu-link">
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
                                <a href="treatments.php" class="menu-link">
                                    <div data-i18n="Without navbar">View Treatments</div>
                                </a>
                            </li>
                           
                        </ul>
                    </li>

                    <!-- Patients -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-accessibility"></i>
                            <div data-i18n="Layouts">Patients</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="add_patients.php" class="menu-link">
                                    <div data-i18n="Without menu">Add Patients</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="patients.php" class="menu-link">
                                    <div data-i18n="Without navbar">View Patients</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Doctors -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-street-view"></i>
                            <div data-i18n="Layouts">Doctors</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="add_doctors.php" class="menu-link">
                                    <div data-i18n="Without menu">Add Doctors</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="doctors.php" class="menu-link">
                                    <div data-i18n="Without navbar">View Doctors</div>
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
                            <h2 class="mb-0">Welcome <?php # echo $_SESSION['fullname'] ?></h2>
                            </div>
                        </div> -->
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- Place this tag where you want the button to render. -->
                            <li class="nav-item lh-1 me-3">
                                <span><?php echo $_SESSION['fullname'] ?></span>
                </li>

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                    <?php
                    include('../includes/connect.php');
                    $user_id = $_SESSION['user_role_id'];
                    $dp_sql = mysqli_query($con, "SELECT profile_pic_status, profile_image FROM admins WHERE admin_id = '$user_id'");
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
                                            <!-- <img src="../assets/img/avatars/8.jpg" alt class="w-px-40 h-auto rounded-circle" /> -->
                                            <?php
                                            include('../includes/connect.php');
                                            $user_id = $_SESSION['user_role_id'];
                                            $dp_sql = mysqli_query($con, "SELECT profile_pic_status, profile_image FROM admins WHERE admin_id = '$user_id'");
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
                        </li>
                        <li>
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

                <!-- / Navbar -->

                <div class="content-wrapper">
            <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                    <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style1">
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0);">Profile</a>
                    </li>
                    <li class="breadcrumb-item active">View Admins</li>
                    </ol>
                </nav>
                    <!-- Basic with Icons -->
                    <div class="col-xxl">
                            <div class="card mb-4">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                <h3 class="mb-0">View Admins</h3>
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
                                <button type="button" data-bs-toggle="modal" data-bs-target="#backDropModal" class="btn btn-primary">Add Admin</button>
                                </div>

                                <!-- Hoverable Table rows -->
                                <div class="table-responsive text-nowrap">
                                    <table class="table table-hover" id="admin_table">
                                        <thead>
                                        <tr>
                                            <th>Admin ID</th>
                                            <th>Admin Name</th>
                                            <th>Email</th>
                                            <th>Age</th>
                                            <th>Gender</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                            <?php
                                            include("../includes/connect.php");
                                            $this_admin_id = $_SESSION['user_role_id'];
                                            $adsql = mysqli_query($con, "SELECT * FROM admins ad JOIN users us ON ad.admin_id = us.user_role_id");
                                            if(mysqli_num_rows($adsql) > 0){
                                                foreach($adsql as $admin){
                                                    ?>
                                                    <tr>
                                                        <td><?= $admin['user_role_id']?></td>                                        
                                                        <td><?= $admin['fullname']?></td>                                        
                                                        <td><?= $admin['email']?></td>                                        
                                                        <td><?= $admin['age']?></td>                                        
                                                        <td><?= $admin['gender']?></td>                                        
                                                        <?php
                                                        if($admin['admin_status'] == 1){
                                                            echo "<td><span class='badge bg-label-success me-1'>Active</span></td>";
                                                        }
                                                        else if($admin['admin_status'] == 0){
                                                            echo "<td><span class='badge bg-label-warning me-1'>Deactivated</span></td>";
                                                        }
                                                        ?>                                        
                                                        <td>
                                                        <div class="dropdown">
                                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                            <button type="button" value="<?= $admin['user_role_id'] ?>" id="admin_edit_btn" class="dropdown-item"><i class="bx bx-edit-alt me-1"></i>Edit</button>
                                                            <button type="button" value="<?= $admin['user_role_id'] ?>" id="admin_view_btn" class="dropdown-item"><i class="bx bx-show me-1"></i>View</button>
                                                            <button type="button" value="<?= $admin['user_role_id'] ?>" id="admin_delete_btn" class="dropdown-item"><i class="bx bx-trash me-1"></i>Delete</button>
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
                                    </div>
                                <!--/ Hoverable Table rows -->

                                <!-- Modal Backdrop-->
                                <div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                        <form class="modal-content" id="addAdmin" method="POST">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="backDropModalTitle">Add Admin Profile</h3>
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
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class=" mb-4">
                                                            <div class="">
                                                            <div class="input-group">
                                                                <span class="input-group-text" id="basic-addon14">Admin Name</span>
                                                                <input type="text" name="adminname" id="nameLarge" class="form-control" placeholder="Bill Joe" />
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class=" mb-4">
                                                            <div class="">
                                                            <div class="input-group">
                                                                <span class="input-group-text" id="basic-addon14">Email</span>
                                                                <input type="email" name="email" id="nameLarge" class="form-control" placeholder="example@mail.com" />
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
                                                                        <span class="input-group-text" id="basic-addon14">Gender</span>
                                                                        <select class="form-select" id="inputGroupSelect01" name="gender">
                                                                            <option >Select</option>
                                                                            <option value="Male">Male</option>
                                                                            <option value="Female">Female</option>
                                                                        </select>
                                                                    </div>                                                               
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class=" mb-4">
                                                            <div class="">
                                                            <div class="input-group">
                                                                <span class="input-group-text" id="basic-addon14">Age</span>
                                                                <input type="number" name="age" id="nameLarge" class="form-control" placeholder="34" />
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
                                                                <span class="input-group-text" id="basic-addon14">Date of Birth</span>
                                                                <input type="date" name="dob" class="form-control" placeholder="Bill Joe" />
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class=" mb-4">
                                                            <div class="">
                                                            <div class="input-group">
                                                                <span class="input-group-text" id="basic-addon14">Contact Number</span>
                                                                <input type="text" name="contact_number" id="nameLarge" class="form-control" placeholder="0700000000" />
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
                                                                <span class="input-group-text" id="basic-addon14">Address</span>
                                                                <input type="text" name="address" id="nameLarge" class="form-control" placeholder="Kinondoni, Kinondoni" />
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class=" mb-4">
                                                            <div class="">
                                                            <div class="input-group">
                                                                <span class="input-group-text" id="basic-addon14">City</span>
                                                                <input type="text" name="city" id="nameLarge" class="form-control" placeholder="Dar Es Salaam" />
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class=" mb-4">
                                                            <div class="row mb-3 form-password-toggle">
                                                            <div class="input-group">
                                                                <span class="input-group-text" id="basic-addon14">Password</span>
                                                                <input type="password" id="basic-icon-default-phone"
                                                                class="form-control phone-mask" id="basic-default-password12"
                                                                name="password"
                                                                aria-label="658 799 8941"
                                                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                                aria-describedby="basic-icon-default-phone2" />
                                                                <span id="basic--default-password12"
                                                                class="input-group-text cursor-pointer"><i
                                                                    class="bx bx-hide"></i></span>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class=" mb-4">
                                                            <div class="">
                                                            <div class="input-group">
                                                                <span class="input-group-text" id="basic-addon14">Postal Code</span>
                                                                <input type="text" name="postal_code" id="nameLarge" class="form-control" placeholder="P.O BOX 0000" />
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6"></div>
                                                    <div class="col-md-6">
                                                        <div class=" mb-4">
                                                            <div class="">
                                                            <div class="input-group">
                                                                <span class="input-group-text" id="basic-addon14">User Role</span>
                                                                <span class="input-group-text form-control" id="basic-addon14">Administrator</span>
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
                                                <button type="submit" name="save_admin_btn" class="btn btn-primary">Save Changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- / Modal Backdrop -->

                                <!-- Modal Backdrop-->
                                <div class="modal fade" id="backEditDropModal" data-bs-backdrop="static" tabindex="-1">
                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                        <form class="modal-content" id="EditAdmin" method="POST">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="backDropModalTitle">Edit Admin Profile</h3>
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
                                                <input type="hidden" id="admin_id" class="form-control" name="admin_id">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class=" mb-4">
                                                            <div class="">
                                                            <div class="input-group">
                                                                <span class="input-group-text" id="basic-addon14">Admin Name</span>
                                                                <input type="text" name="adminname" id="adminname" class="form-control" placeholder="Bill Joe" />
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class=" mb-4">
                                                            <div class="">
                                                            <div class="input-group">
                                                                <span class="input-group-text" id="basic-addon14">Email</span>
                                                                <input type="email" name="email" id="email" class="form-control" placeholder="example@mail.com" />
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
                                                                        <span class="input-group-text" id="basic-addon14">Gender</span>
                                                                        <select class="form-select" id="gender" name="gender">
                                                                            <option >Select</option>
                                                                            <option value="Male">Male</option>
                                                                            <option value="Female">Female</option>
                                                                        </select>
                                                                    </div>                                                               
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class=" mb-4">
                                                            <div class="">
                                                            <div class="input-group">
                                                                <span class="input-group-text" id="basic-addon14">Age</span>
                                                                <input type="number" name="age" id="age" class="form-control" placeholder="34" />
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
                                                                <span class="input-group-text" id="basic-addon14">Date of Birth</span>
                                                                <input type="date" name="dob" id="dob" class="form-control" />
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class=" mb-4">
                                                            <div class="">
                                                            <div class="input-group">
                                                                <span class="input-group-text" id="basic-addon14">Contact Number</span>
                                                                <input type="text" name="contact_number" id="contact_number" class="form-control" placeholder="0700000000" />
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
                                                                <span class="input-group-text" id="basic-addon14">Address</span>
                                                                <input type="text" name="address" id="address" class="form-control" placeholder="Kinondoni, Kinondoni" />
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class=" mb-4">
                                                            <div class="">
                                                            <div class="input-group">
                                                                <span class="input-group-text" id="basic-addon14">City</span>
                                                                <input type="text" name="city" id="city" class="form-control" placeholder="example@mail.com" />
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
                                                                <span class="input-group-text" id="basic-addon14">Postal Code</span>
                                                                <input type="text" name="postal_code" id="postal_code" class="form-control" placeholder="P. O BOX 000000"/>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-4">
                                                            <div class="">
                                                                <div class="input-group">
                                                                    <!-- <span class="input-group-text" id="basic-addon14">Gender </span> -->
                                                                    <div class="input-group">
                                                                        <span class="input-group-text" id="basic-addon14">Status</span>
                                                                        <select class="form-select" id="admin_status" name="admin_status">
                                                                            <option >Select</option>
                                                                            <option value="1">Active</option>
                                                                            <option value="0">Not Active</option>
                                                                        </select>
                                                                    </div>                                                               
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

                                <!-- Modal Backdrop-->
                                <div class="modal fade" id="backViewModal" data-bs-backdrop="static" tabindex="-1">
                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                        <form class="modal-content" id="viewAdmin" method="POST">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="backDropModalTitle">View Admin Profile</h3>
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
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class=" mb-4">
                                                            <div class="">
                                                            <div class="input-group">
                                                                <span class="input-group-text" id="basic-addon14">Admin ID</span>
                                                                <span class="input-group-text form-control" id="view_admin_id"></span>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class=" mb-4">
                                                            <div class="">
                                                            <div class="input-group">
                                                                <span class="input-group-text" id="basic-addon14">Role</span>
                                                                <span class="input-group-text form-control" id="">Administrator</span>
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
                                                                <span class="input-group-text" id="basic-addon14">Admin Name</span>
                                                                <span class="input-group-text form-control" id="view_fullname"></span>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class=" mb-4">
                                                            <div class="">
                                                            <div class="input-group">
                                                                <span class="input-group-text" id="basic-addon14">Email</span>
                                                                <span class="input-group-text form-control" id="view_email"></span>
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
                                                                <span class="input-group-text" id="basic-addon14">Age</span>
                                                                <span class="input-group-text form-control" id="view_age"></span>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class=" mb-4">
                                                            <div class="">
                                                            <div class="input-group">
                                                                <span class="input-group-text" id="basic-addon14">Gender</span>
                                                                <span class="input-group-text form-control" id="view_gender"></span>
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
                                                                <span class="input-group-text" id="basic-addon14">Contact Number</span>
                                                                <span class="input-group-text form-control" id="view_contact_number"></span>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class=" mb-4">
                                                            <div class="">
                                                            <div class="input-group">
                                                                <span class="input-group-text" id="basic-addon14">Postal Code</span>
                                                                <span class="input-group-text form-control" id="view_postal_code"></span>
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
                                                                <span class="input-group-text" id="basic-addon14">Address</span>
                                                                <span class="input-group-text form-control" id="view_address"></span>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class=" mb-4">
                                                            <div class="">
                                                            <div class="input-group">
                                                                <span class="input-group-text" id="basic-addon14">City</span>
                                                                <span class="input-group-text form-control" id="view_city"></span>
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
                                                                <span class="input-group-text" id="basic-addon14">Date of Birth</span>
                                                                <span class="input-group-text form-control" id="view_dob"></span>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class=" mb-4">
                                                            <div class="">
                                                            <div class="input-group">
                                                                <span class="input-group-text" id="basic-addon14">Status</span>
                                                                <span class="input-group-text form-control" id="view_admin_status"></span>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- / Modal Backdrop -->
                            </div>
                        </div>
                    </div>

                    <!-- Basic footer -->
                    <div class="container-xxl flex-grow-1 container-p-y">
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
                    </div>
                    <!--/ Basic footer -->
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

    <!-- JQuery -->
    <script src="../js/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script>
        $(document).on('submit', '#addAdmin', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append('save_admin_btn', true);

            $.ajax({
                type: "POST",
                url: "profile_code.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    var res = $.parseJSON(response);
                    
                    if(res.status == 422) {
                        swal('Ooops..!',res.message,'error',{
                            timer: 1000
                        });
                        
                    }
                    else if(res.status == 200) {
                        swal('Good Job.!',res.message,'success',{
                            timer: 1000
                        });
                        $('#backDropModal').modal('hide');
                        $('#addAdmin')[0].reset();
                        $('#admin_table').load(location.href + " #admin_table");
                    }
                    else if(res.status == 500) {
                        swal('Ooops..!',res.message,'error',{
                            timer: 1000
                        });
                        $('#add_admin_modal').modal('hide');
                        $('#addAdmin')[0].reset();
                        $('#admin_table').load(location.href + " #admin_table");
                    }
                }
            });
        });

        $(document).on('click', '#admin_edit_btn', function () {
            var admin_id = $(this).val();
            // alert(admin_id);

            $.ajax({
                type: "GET",
                url: "profile_code.php?edit_id=" + admin_id,
                success: function (response) {
                    var res = $.parseJSON(response);
                    if(res.status == 404){
                        swal('Ooops..!',res.message,'error',{
                            timer: 1000
                        });
                    }
                    else if(res.status == 200){
                        $('#admin_id').val(res.data.user_role_id);
                        $('#adminname').val(res.data.fullname);
                        $('#email').val(res.data.email);
                        $('#gender').val(res.data.gender);
                        $('#age').val(res.data.age);
                        $('#admin_status').val(res.data.admin_status);
                        $('#city').val(res.data.city);
                        $('#address').val(res.data.address);
                        $('#postal_code').val(res.data.postal_code);
                        $('#dob').val(res.data.dob);
                        $('#contact_number').val(res.data.contact_number);
                        $('#backEditDropModal').modal('show');
                    }
                }
            });
        });

        $(document).on('submit','#EditAdmin', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append('edit_admin_btn', true);

            $.ajax({
                type: "POST",
                url: "profile_code.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    var res = $.parseJSON(response);

                    if(res.status == 200) {
                        swal('Good Job.!',res.message,'success',{
                            timer: 1000
                        });
                        $('#backEditDropModal').modal('hide');
                        $('#EditAdmin')[0].reset();
                        $('#admin_table').load(location.href + " #admin_table");
                    }
                    else if(res.status == 500) {
                        swal('Ooops..!',res.message,'error',{
                            timer: 1000
                        });
                        $('#backEditDropModal').modal('hide');
                        $('#EditAdmin')[0].reset();
                        $('#admin_table').load(location.href + " #admin_table");
                    }
                }
            });
            
        });

        $(document).on('click', '#admin_delete_btn', function () {
            swal({
                title: 'Are you sure?',
                text: 'Once delete, you will not be able to recover this Account!',
                icon: 'warning',
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if(willDelete){
                    var admin_id = $(this).val();
                    $.ajax({
                        type: "GET",
                        url: "profile_code.php?delete_id=" + admin_id,
                        success: function (response) {
                            var res = $.parseJSON(response);
                            if(res.status == 200) {
                                swal('Good Job.!', res.message,'success',{
                                    timer: 1000
                                });
                                $('#admin_table').load(location.href + " #admin_table");
                            }
                            else if(res.status == 500) {
                                swal('Ooops..!',res.message,'error', {
                                    timer: 1000
                                });

                                $('#admin_table').load(location.href + " #admin_table");
                            }
                        }
                    });
                }
                else{
                    swal('Account Not Deleted', {
                        timer: 1000
                    });
                }
            });
            
        });
        $(document).on('click', '#admin_view_btn', function () {
            var view_id = $(this).val();
            // alert (view_id);
            // $('#backViewModal').modal('show');
            $.ajax({
                type: "GET",
                url: "profile_code.php?view_id=" + view_id,
                success: function (response) {
                    var res = $.parseJSON(response);
                    if(res.status == 500){
                        swal('Ooops..!',res.message,'error');
                    }
                    else if(res.status == 200){
                        $('#view_admin_id').text(res.data.admin_id);
                        $('#view_fullname').text(res.data.admin_name);
                        $('#view_email').text(res.data.email);
                        $('#view_gender').text(res.data.gender);
                        $('#view_age').text(res.data.age);
                        $('#view_contact_number').text(res.data.contact_number);
                        $('#view_address').text(res.data.address);
                        $('#view_city').text(res.data.city);
                        $('#view_postal_code').text(res.data.postal_code);
                        $('#view_dob').text(res.data.dob);

                        var status = res.data.admin_status; 
                        if(status == 1){
                            $('#view_admin_status').text('Active');
                        }
                        else if(status == 0){
                            $('#view_admin_status').text('Deactivated');
                        }
                        $('#backViewModal').modal('show');
                    }
                }
            });
        });
    </script>
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
    <!-- / jQuery -->
  </body>
</html>
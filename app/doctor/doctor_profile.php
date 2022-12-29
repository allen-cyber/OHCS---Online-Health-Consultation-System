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
                    <li class="menu-item active open">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-user"></i>
                            <div data-i18n="Layouts">Profile</div>
                        </a>

                        <ul class="menu-sub active">
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
                            <h2 class="mb-0">Welcome <?php # echo $_SESSION['fullname'] ?></h2>
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

                <!-- / Navbar -->

                <div class="content-wrapper">
            <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                    <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style1">
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0);">Profile</a>
                    </li>
                    <li class="breadcrumb-item active">View Profile</li>
                    </ol>
                </nav>
                    <!-- Basic with Icons -->
                    <div class="col-xxl">
                            <div class="card mb-4">
                            
                                <div class="card-header d-flex align-items-center justify-content-between">
                                <h3 class="mb-0">Your Profile</h3>
                                <?php
                                if(isset($_SESSION['profile_success'])){
                                    echo "<h3><div class='alert alert-success alert-dismissible' role='alert'>".
                                    ($_SESSION['profile_success'])
                                    ."<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                  </div></h3>";
                                    unset($_SESSION['profile_success']);
                                }
                                ?>
                                <button type="button" onclick="history.go(-1);"   class="btn btn-primary">BACK</button>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                                        <?php
                                            include('../includes/connect.php');
                                            $user_id = $_SESSION['user_role_id'];
                                            $dp_sql = mysqli_query($con, "SELECT profile_pic_status, profile_image FROM doctors WHERE doctor_id = '$user_id'");
                                            $dp_res = mysqli_fetch_array($dp_sql);

                                            if($dp_res['profile_pic_status'] == 0){

                                            ?>
                                            <img
                                            src="../assets/img/avatars/default_dp.jpg"
                                            alt="User-avatar"
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
                                                alt="User-Profile_Picture"
                                                class="d-block rounded"
                                                height="100"
                                                width="100"
                                                id="uploadedAvatar"
                                                />
                                                <?php
                                            }
                                        ?>
                                        
                                        <div class="button-wrapper">
                                        <form action="" id="upload_profile_picture_form" method="POST" enctype="multipart/form-data">
                                            <div class="row g-2 mb-2">
                                            <label for="upload" class="form-label" tabindex="0">Upload new photo</label>
                                            <input
                                                type="file"
                                                id="upload"
                                                class="account-file-input upload_profile_picture form-control"
                                                name="profile_picture"
                                                accept="image/png, image/jpeg, image/jpg, image/gif"
                                                />
                                            </div>
                                                <button type="button" value="<?=$user_id;?>" id="dp_reset_btn" class="btn btn-secondary">Reset</button>
                                                <button type="submit" class="btn btn-primary">Upload</button>
                                        </form>
                                        
                                        <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-0 mb-3">
                                <div class="card-body demo-vertical-spacing demo-only-element">
                                <?php
                                include('../includes/connect.php');
                                $user_id = $_SESSION['user_role_id'];
                                $pro_sql = "SELECT * FROM doctors WHERE doctor_id = '$user_id'";
                                $pro_sql_run = mysqli_query($con, $pro_sql);
                                if(mysqli_num_rows($pro_sql_run) > 0){
                                    $pro_result = mysqli_fetch_array($pro_sql_run);
                                ?>
                                <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-2">
                                                <div class="">
                                                <div class="input-group">
                                                    <span class="input-group-text" id="basic-addon14">Doctor ID </span>
                                                    <span class="input-group-text form-control" id="basic-addon14"><?php echo $pro_result['doctor_id']; ?></span>
                                                </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class=" mb-2">
                                                <div class="">
                                                <div class="input-group">
                                                    <span class="input-group-text" id="basic-addon14">Full Name </span>
                                                    <span class="input-group-text form-control" id="basic-addon14"><?php echo $pro_result['doctor_name']; ?></span>
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
                                                    <span class="input-group-text" id="basic-addon14">Age </span>
                                                    <span class="input-group-text form-control" id="basic-addon14"><?php echo $pro_result['age']; ?></span>
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
                                                    <span class="input-group-text" id="basic-addon14">Department ID </span>
                                                    <span class="input-group-text form-control" id="basic-addon14"><?php echo $pro_result['department_id']; ?></span>
                                                </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class=" mb-2">
                                                <div class="">
                                                <div class="input-group">
                                                    <span class="input-group-text" id="basic-addon14">Department </span>
                                                    <?php
                                                    $dept_id = $pro_result['department_id'];
                                                    $det_sql = mysqli_query($con, "SELECT department_name FROM departments WHERE department_id = '$dept_id'");
                                                    $det_res = mysqli_fetch_array($det_sql);
                                                    ?>
                                                    <span class="input-group-text form-control" id="basic-addon14"><?=$det_res['department_name']?></span>
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
                                                    <span class="input-group-text" id="basic-addon14">Contact Number </span>
                                                    <span class="input-group-text form-control" id="basic-addon14"><?php echo $pro_result['contact_number']; ?></span>
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
                                                    <span class="input-group-text" id="basic-addon14">City </span>
                                                    <span class="input-group-text form-control" id="basic-addon14"><?php echo $pro_result['city']; ?></span>
                                                </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class=" mb-2">
                                                <div class="">
                                                <div class="input-group">
                                                    <span class="input-group-text" id="basic-addon14">Postal Code </span>
                                                    <span class="input-group-text form-control" id="basic-addon14"><?php echo $pro_result['postal_code']; ?></span>
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
                                                    <span class="input-group-text" id="basic-addon14">Education </span>
                                                    <span class="input-group-text form-control" id="basic-addon14"><?php echo $pro_result['education']; ?></span>
                                                </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class=" mb-2">
                                                <div class="">
                                                <div class="input-group">
                                                    <span class="input-group-text" id="basic-addon14">Experience </span>
                                                    <span class="input-group-text form-control" id="basic-addon14"><?php echo $pro_result['experience']; ?> Years</span>
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
                                                    <span class="input-group-text" id="basic-addon14">Consultancy Charge </span>
                                                    <span class="input-group-text form-control" id="basic-addon14">
                                                        <?php echo $pro_result['consultancy_charge'];?>
                                                        /= Tshs</span>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-sm-10 d-grid col-lg-3 mx-auto">
                                            <button type="submit" data-bs-toggle="modal" data-bs-target="#backDropModal" name="edit_profile" class="btn btn-primary btn-lg">Update Profile</button>
                                        </div>
                                    </div>

                                        <!-- Modal -->
                                        <div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                            <form class="modal-content" action="doc_profile_code.php" method="POST">
                                                <div class="modal-header">
                                                    <h3 class="modal-title" id="backDropModalTitle">Update Profile</h3>
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
                                                            <div class=" mb-4">
                                                                <div class="">
                                                                <div class="input-group">
                                                                    <span class="input-group-text" id="basic-addon14">Full Name</span>
                                                                    <input type="text" name="doctor_name" value="<?php echo $pro_result['doctor_name']; ?>" id="nameLarge" class="form-control" placeholder="Bill Joe" />
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class=" mb-4">
                                                                <div class="">
                                                                <div class="input-group">
                                                                    <span class="input-group-text" id="basic-addon14">Age</span>
                                                                    <input type="text" name="age" value="<?php echo $pro_result['age']; ?>" id="nameLarge" class="form-control" placeholder="Kinondoni, Kinondoni" />
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
                                                                            <span class="input-group-text" id="basic-addon14">Gender </span>
                                                                            <select class="form-select" id="inputGroupSelect01" name="gender">
                                                                                <option value="<?php echo $pro_result['gender'] ?>"><?php echo $pro_result['gender'] ?></option>
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
                                                                    <span class="input-group-text" id="basic-addon14">Address</span>
                                                                    <input type="text" name="Address" value="<?php echo $pro_result['Address']; ?>" id="nameLarge" class="form-control" placeholder="Kinondoni, Kinondoni" />
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
                                                                    <input type="text" name="contact_number" value="<?php echo $pro_result['contact_number']; ?>" id="nameLarge" class="form-control" placeholder="0700000000" />
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class=" mb-4">
                                                                <div class="">
                                                                <div class="input-group">
                                                                    <span class="input-group-text" id="basic-addon14">City</span>
                                                                    <input type="text" name="city" value="<?php echo $pro_result['city']; ?>" id="nameLarge" class="form-control" placeholder="Dar es salaam" />
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
                                                                    <input type="text" name="postal_code" value="<?php echo $pro_result['postal_code']; ?>" id="nameLarge" class="form-control" placeholder="P.O BOX 00000" />
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    
                                                        <div class="col-md-6">
                                                            <div class="mb-4">
                                                                <div class="">
                                                                    <div class="input-group">
                                                                        <div class="input-group">
                                                                            <span class="input-group-text" id="basic-addon14">Education </span>
                                                                            <select class="form-select" id="inputGroupSelect01" name="education">
                                                                                <option value="<?php echo $pro_result['education'] ?>"><?php echo $pro_result['education'] ?></option>
                                                                                <option value="Doctrate (PHD)">Doctrate (Phd)</option>
                                                                                <option value="Specialist (Masters)">Specialist (Masters)</option>
                                                                                <option value="Medical Doctor (MD)">Medicine-MD (Undergraduate)</option>
                                                                                <option value="Clinical Officer (CO)">Clinical Medicine-CO (Diploma)</option>
                                                                            </select>
                                                                        </div>                                                               
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
                                                                    <span class="input-group-text" id="basic-addon14">Experience</span>
                                                                    <input type="text" name="experience" value="<?php echo $pro_result['experience']; ?>" id="nameLarge" class="form-control" placeholder="3" />
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class=" mb-4">
                                                                <div class="">
                                                                <div class="input-group">
                                                                    <span class="input-group-text" id="basic-addon14">Consulatncy Charge</span>
                                                                    <input type="text" name="consultancy_charge" value="<?php echo $pro_result['consultancy_charge']; ?>" id="nameLarge" class="form-control" placeholder="0.00" />
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
                                                    <button type="submit" name="edit_profile_btn" class="btn btn-primary">Save Changes</button>
                                                </div>
                                            </form>
                                        </div>
                                        </div>
                                    <!-- / Modal Backdrop -->
                                    
                                <?php
                                }
                                else{
                                        echo "<div class='alert alert-danger alert-dismissible' role='alert'><h3>
                                        No Data Found, Add Profile</h3><button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                      </div>";
                                    }
                                
                                ?>

                                </div>
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

    <script>
        $(document).on('submit', '#upload_profile_picture_form', function (e) {

            e.preventDefault();
            var fom = new FormData(this);
            fom.append('upload_profile_picture', true);

            $.ajax({
                type: "POST",
                url: "doc_profile_code.php",
                data: fom,
                processData: false,
                contentType: false,
                success: function (response) {
                    var res = $.parseJSON(response);
                    if(res.status == 500){
                        swal('Ooops..!',res.message,'error');
                    }
                    else if(res.status == 200){
                        // $('#uploadedAvatar').val(res.data.profile_image);
                        swal('Good Job.!',res.message,'success');
                        location.reload();
                        // function image_fun(){
                        //     var img_location = 'profiles_pics/' + res.data.profiles_pics;
                        //     return img_location;
                        // }
                    }
                }
            });

            
        });

        $(document).on('click', '#dp_reset_btn', function () {
            var profile_reset_btn = $(this).val();
            // alert(profile_reset_btn);
            $.ajax({
                type: "GET",
                url: "doc_profile_code.php?dp_reset_id=" + profile_reset_btn,
                success: function (response) {
                    var res = $.parseJSON(response);
                    if(res.status == 500){
                        swal('Ooops..!',res.message,'error');
                    }
                    else if(res.status == 200){
                        swal('Good Job.!',res.message,'success');
                        location.reload();
                    }
                }
            });
            
        });
    </script>
  </body>
</html>
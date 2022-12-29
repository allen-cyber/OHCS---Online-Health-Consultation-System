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

    <!-- Template Table Style CSS -->
    <!-- <link href="../table/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../table/css/lib/themify-icons.css" rel="stylesheet">
    <link href="../table/css/lib/data-table/buttons.bootstrap.min.css" rel="stylesheet" />
    <link href="../table/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="../table/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../table/css/lib/helper.css" rel="stylesheet">
    <link href="../table/css/style.css" rel="stylesheet"> -->


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
                    <a href="../html/index.php" class="app-brand-link">
                        
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
                        <a href="../html/index.php" class="menu-link">
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
                                <a href="view_profile.php" class="menu-link">
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
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div data-i18n="Layouts">Appointments</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="add_appointment.php" class="menu-link">
                                    <div data-i18n="Without menu">Add Appointments</div>
                                </a>
                            </li>
                            <li class="menu-item active">
                                <a href="view_appointments.php" class="menu-link">
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
                                <a href="prescriptions.php" class="menu-link">
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
                                <a href="treatments.php" class="menu-link">
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
                            <h2 class="mb-0">Welcome <?php #echo $_SESSION['fullname'] ?></h2>
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

                <!-- / Navbar -->

                <!-- Contents -->
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-style1">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0);">Appointments</a>
                        </li>
                        <li class="breadcrumb-item active">View Appointments</li>
                        </ol>
                    </nav>
                                        
                        <!-- Hoverable Table rows -->
                        <div class="card">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                
                                <h3 class="mb-0">Appointments</h3>
                                <?php
                                if(isset($_SESSION['appointment_success'])){
                                    echo "<h3><div class='alert alert-success alert-dismissible' role='alert'>".
                                    ($_SESSION['appointment_success'])
                                    ."<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                  </div></h3>";
                                    unset($_SESSION['appointment_success']);
                                }
                                if(isset($_SESSION['appointment_failure'])){
                                    echo "<h5><div class='alert alert-danger alert-dismissible' role='alert'>".
                                    ($_SESSION['appointment_failure'])
                                    ."<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                  </div></h5>";
                                    unset($_SESSION['appointment_failure']);
                                }
                                
                                ?>
                                <a href="add_appointment.php" class="btn btn-primary">Add Appointment</a>
                            </div>
                            <div class="bootstrap-data-table-panel">
                            <div class="table-responsive text-nowrap">
                            <table class="table table-hover" id="bootstrap-data-table-export">
                                <thead>
                                <tr class="justify-content-between">
                                    <!-- <th>ID</th> -->
                                    <th>Type</th>
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
                                $app_SQL = "SELECT * FROM appointments WHERE patient_id = '$user_id' order by appointment_id desc";
                                $app_SQL_run = mysqli_query($con, $app_SQL);
                                if(mysqli_num_rows($app_SQL_run) > 0){
                                # $data = mysqli_fetch_array($app_SQL_run);
                                    while ($row = mysqli_fetch_array($app_SQL_run)){
                                ?>   
                                
                                <tr>
                                    
                                    <!-- <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong></td> -->
                                    <!-- <td><?php #echo $row['appointment_id']; ?></td> -->
                                    <td><?php echo $row['appointment_type']; ?></td>
                                    <td><?php echo $row['room_id']; ?></td>
                                    <td>
                                        <?php
                                        $dept_id = $row['department_id']; 
                                        $dep_query = mysqli_query($con, "SELECT * FROM departments WHERE department_id = '$dept_id'");
                                        $dep_res = mysqli_fetch_array($dep_query);
                                        echo $dep_res['department_name'];
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $date = $row['appointment_date']; 
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
                                    <td><?php echo $row['appointment_time']; ?></td>
                                    <td>Dr. 
                                        <?php 
                                        $doc_id =$row['doctor_id'];
                                        $doc_query = mysqli_query($con, "SELECT * FROM doctors WHERE doctor_id = '$doc_id'");
                                        $doc_result = mysqli_fetch_array($doc_query);
                                        echo $doc_result['doctor_name'];
                                        ?>
                                    </td>
                                    
                                    
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
                                    <td><?php echo $row['appointment_reason']; ?></td>
                                    <td>
                                    <!-- Edit Appointment Modal -->
                                    
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="edit_appointment.php?id=<?php echo $row['appointment_id'] ?> "
                                            ><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                            <input type="hidden" name="edit_id" value = "<?php echo $row['appointment_id'];?>">
                                            
                                            <a class="dropdown-item" href="appointment_report.php?id=<?php echo $row['appointment_id'] ?> "
                                            ><i class="bx bx-show"></i> View</a>
                                            <input type="hidden" name="edit_id" value = "<?php echo $row['appointment_id'];?>">

                                        <form action="appointment_code.php" method="POST">
                                            <button type="submit" name="delete_appointment" class="dropdown-item"><i class="bx bx-trash me-1"></i>Delete</button>
                                            <input type="hidden" name="delete_id" value = "<?php echo $row['appointment_id'];?>">
                                        </form>
                                        </div>
                                        
                                    <!--/ Edit Appointment Modal -->
                                    </div>
                                     
                                    </td>
                                </tr>
                                <?php
                                    }
                                }
                                ?>
                                </tbody>
                                
                            </table>
                            
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
                
            <!-- Content -->
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



    <!-- Template Table Scripts -->

    <!-- jquery vendor -->
    <script src="../table/js/lib/jquery.min.js"></script>
    <script src="../table/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="../table/js/lib/menubar/sidebar.js"></script>
    <script src="../table/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    
    <!-- bootstrap -->

    <!-- <script src="../table/js/lib/bootstrap.min.js"></script><script src="js/scripts.js"></script> -->
    <!-- scripit init-->
    <!-- <script src="../table/js/lib/data-table/datatables.min.js"></script>
    <script src="../table/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="../table/js/lib/data-table/buttons.flash.min.js"></script>
    <script src="../table/js/lib/data-table/jszip.min.js"></script>
    <script src="../table/js/lib/data-table/pdfmake.min.js"></script>
    <script src="../table/js/lib/data-table/vfs_fonts.js"></script>
    <script src="../table/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="../table/js/lib/data-table/buttons.print.min.js"></script>
    <script src="../table/js/lib/data-table/datatables-init.js"></script> -->
    
  </body>
</html>
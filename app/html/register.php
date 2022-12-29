<?php
session_start();
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
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>OHCS | Register</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <!-- <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" /> -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="../assets/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
    <script src="../js/jQuery.min.js"></script>
    <script src="../js/sweetalert.min.js"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register Card -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                  <span class="app-brand-text demo text-body fw-bolder">OHCS</span>
              </div>
              <!-- /Logo -->
              <?php
                //unset($_SESSION['account_success']);
                if(isset($_SESSION['success'])){
                    echo "<h5><div class='alert alert-success' role='alert'>".($_SESSION['success'])."</div></h5>";
                    unset($_SESSION['success']);
                }
                if(isset($_SESSION['failure'])){
                  echo "<h5><div class='alert alert-danger' role='alert'>".($_SESSION['failure'])."</div></h5>";
                  unset($_SESSION['failure']);
                }
                
                ?>
              <h4 class="mb-3">Welcome to OHCS, Register Now.</h4>

              <form id="formAuthentication_register" class="mb-3" method="POST">
                <div class="mb-3">
                  <label for="username" class="form-label">Full Name</label>
                  <input
                    type="text"
                    class="form-control"
                    id="username"
                    name="fullname"
                    placeholder="Enter your username"
                    autofocus
                  />
                </div>
                           
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" />
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                      <label class="form-label" for="password">Password</label>
                      <small style="color: red;" id="wrong_password1" class="d-none">Passwords Don't Match</small>
                      <small style="color: green;" id="right_password1" class="d-none">Passwords Match</small>
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                      <label class="form-label" for="password">Confirm Password</label>
                      <small style="color: red;" id="wrong_password2" class="d-none">Passwords Don't Match</small>
                      <small style="color: green;" id="right_password2" class="d-none">Passwords Match</small>
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      onkeyup="return confirm();"
                      id="confirm_password"
                      class="form-control"
                      name="confirm_password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>
                <!-- <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="password2">Confirm Password</label>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password2"
                      class="form-control"
                      name="password2"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div> -->
                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" />
                    <label class="form-check-label" for="terms-conditions">
                      I agree to
                      <a href="javascript:void(0);">privacy policy & terms</a>
                    </label>
                  </div>
                </div>
                <button name="sign_up_btn" class="btn btn-primary d-grid w-100">Sign up</button>
              </form>

              <p class="text-center">
                <span>Already have an account?</span>
                <a href="login.php">
                  <span>Sign in instead</span>
                </a>
              </p>
            </div>
          </div>
          <!-- Register Card -->
        </div>
      </div>
    </div>

    <!-- / Content -->

  <script>
    function confirm(){
            var new_password = $('#password').val();
            var confirm_new_password = $('#confirm_password').val();

            if(new_password != confirm_new_password){
                $('#wrong_password1').removeClass('d-none');
                $('#wrong_password2').removeClass('d-none');
                $('#right_password1').addClass('d-none');
                $('#right_password2').addClass('d-none');
            }
            else if(new_password == confirm_new_password){
                $('#right_password1').removeClass('d-none');
                $('#right_password2').removeClass('d-none');
                $('#wrong_password1').addClass('d-none');
                $('#wrong_password2').addClass('d-none');

                $(document).on('submit', '#formAuthentication_register', function (e) {
                  e.preventDefault();
                  
                  var form_data = new FormData(this);
                  form_data.append('sign_up_btn', true);

                  $.ajax({
                    type: "POST",
                    url: "../includes/user_code.php",
                    data: form_data,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                      var res = $.parseJSON(response);
                      if(res.status == 422){
                        swal('Ooops..!',res.message,'error');
                      }
                      else if(res.status == 200){
                        $('#formAuthentication_register')[0].reset();
                          swal('Good Job.!',res.message,'success');
                          $('#right_password1').addClass('d-none');
                          $('#right_password2').addClass('d-none');
                      }
                    }
                  });
                });
            }
          }
  </script>
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>

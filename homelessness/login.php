<?php
include("init.php");
session_start();

if(isset($_SESSION["user"])){
	header("location:index.php");
}

$username = "";
if (isset($_GET["username"]))
{
	$username = $_GET["username"];
}

?><!DOCTYPE html>
<html dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, material pro admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, material design, material dashboard bootstrap 5 dashboard template"
    />
    <meta
      name="description"
      content="Material Pro is powerful and clean admin dashboard template"
    />
    <meta name="robots" content="noindex,nofollow" />
<title>Homeless App</title>
    <link
      rel="canonical"
      href="https://www.wrappixel.com/templates/materialpro/"
    />
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="./assets/img/Greyadobe.png"
    />
    <!-- Custom CSS -->
    <link href="./dist/css/style.min.css" rel="stylesheet" />
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<style>.bg-info {
    background-color: #1d2f32!important;
}</style>
  <body>
    <div class="main-wrapper">
      <!-- -------------------------------------------------------------- -->
      <!-- Preloader - style you can find in spinners.css -->
      <!-- -------------------------------------------------------------- -->
      <div class="preloader">
        <svg
          class="tea lds-ripple"
          width="37"
          height="48"
          viewbox="0 0 37 48"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M27.0819 17H3.02508C1.91076 17 1.01376 17.9059 1.0485 19.0197C1.15761 22.5177 1.49703 29.7374 2.5 34C4.07125 40.6778 7.18553 44.8868 8.44856 46.3845C8.79051 46.79 9.29799 47 9.82843 47H20.0218C20.639 47 21.2193 46.7159 21.5659 46.2052C22.6765 44.5687 25.2312 40.4282 27.5 34C28.9757 29.8188 29.084 22.4043 29.0441 18.9156C29.0319 17.8436 28.1539 17 27.0819 17Z"
            stroke="#1e88e5"
            stroke-width="2"
          ></path>
          <path
            d="M29 23.5C29 23.5 34.5 20.5 35.5 25.4999C36.0986 28.4926 34.2033 31.5383 32 32.8713C29.4555 34.4108 28 34 28 34"
            stroke="#1e88e5"
            stroke-width="2"
          ></path>
          <path
            id="teabag"
            fill="#1e88e5"
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M16 25V17H14V25H12C10.3431 25 9 26.3431 9 28V34C9 35.6569 10.3431 37 12 37H18C19.6569 37 21 35.6569 21 34V28C21 26.3431 19.6569 25 18 25H16ZM11 28C11 27.4477 11.4477 27 12 27H18C18.5523 27 19 27.4477 19 28V34C19 34.5523 18.5523 35 18 35H12C11.4477 35 11 34.5523 11 34V28Z"
          ></path>
          <path
            id="steamL"
            d="M17 1C17 1 17 4.5 14 6.5C11 8.5 11 12 11 12"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke="#1e88e5"
          ></path>
          <path
            id="steamR"
            d="M21 6C21 6 21 8.22727 19 9.5C17 10.7727 17 13 17 13"
            stroke="#1e88e5"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          ></path>
        </svg>
      </div>
      <!-- -------------------------------------------------------------- -->
      <!-- Preloader - style you can find in spinners.css -->
      <!-- -------------------------------------------------------------- -->
      <!-- -------------------------------------------------------------- -->
      <!-- Login box.scss -->
      <!-- -------------------------------------------------------------- -->
      <div class="row auth-wrapper gx-0" >
        <div class="col-lg-4 col-xl-3 bg-info auth-box-2 on-sidebar">
          <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="row justify-content-center text-center">
              <div class="col-md-7 col-lg-12 col-xl-9">
              
                <h2 class="text-white mt-4 fw-light">
                  
                  <span class="font-weight-medium">Home<del>less</del> App 
                </h2>
                
                
                <img src="assets/img/black-and-white-.jpg" style="width:100%">
                <p class="op-5 text-white fs-4 mt-4">
                 A Community that provides help to Homeless people
                </p>
              </div>
            </div>
          </div>
        </div>
        <div
          class="
            col-lg-8 col-xl-9
            d-flex
            align-items-center
            justify-content-center
          "
        >
          <div class="row justify-content-center w-100 mt-4 mt-lg-0">
            <div class="col-lg-6 col-xl-3 col-md-7">
              <div class="card" id="registerform">
                <div class="card-body">
				<!--- registration form --->
                  <h2>Sign Up Form</h2>
                  <p class="text-muted fs-4">
                    Enter given details for new account
                  </p>
                  <form
                    class="form-horizontal mt-4 pt-4 needs-validation"
                    novalidate
                    action="process_registration.php"
                  method="post">
                    <div class="form-floating mb-3">
                      <input
					  name="fname"
                        type="text"
                        class="form-control form-input-bg"
                        id="tb-rfname"
                        placeholder="john"
                        required
                      />
                      <label for="tb-rfname">Firstname</label>
                      <div class="invalid-feedback">Firstname is required</div>
                    </div> 
					<div class="form-floating mb-3">
                      <input
					  name="sname"
                        type="text"
                        class="form-control form-input-bg"
                        id="tb-sname"
                        placeholder="mike"
                        required
                      />
                      <label for="tb-sname">Surname</label>
                      <div class="invalid-feedback">Surname is required</div>
                    </div>
                    <div class="form-floating mb-3">
                      <input
					  name="email"
                        type="email"
                        class="form-control form-input-bg"
                        id="tb-remail"
                        placeholder="john@gmail.com"
                        required
                      />
                      <label for="tb-remail">Email</label>
                      <div class="invalid-feedback">Email is required</div>
                    </div>

                   
                   


                  
                         <br/>


                    <div class="form-floating mb-3">
                      <input
					  name="password"
                        type="password"
                        class="form-control form-input-bg"
                        id="text-rpassword"
                        placeholder="*****"
                        required
                      />
                  
                     
                      
                      <label for="text-rcpassword">Password</label>
                      <div class="invalid-feedback">Password is required</div>
                    </div>
					
					 <div class="form-floating mb-3">
                      <input
					  name="password"
                        type="password"
                        class="form-control form-input-bg"
                        id="text-rpassword"
                        placeholder="*****"
                        required
                      />
                  
                     
                      
                      <label for="text-rcpassword">Confirm Password</label>
                      <div class="invalid-feedback">Password is required</div>
                    </div>

                    
                    <div class="form-check mb-4 pb-2">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="r-me"
                        required
                      />
                      <label class="form-check-label" for="r-me">
                        Remember me
                      </label>
                      <div class="invalid-feedback">
                        You must agree before submitting.
                      </div>
                    </div>
                    <div class="d-flex align-items-stretch button-group">
                      <button type="submit" class="btn btn-info btn-lg px-4">
                        Submit
                      </button>
                      <a
                        href="javascript:void(0)"
                        id="to-login2"
                        class="
                          btn btn-lg btn-light-secondary
                          text-secondary
                          font-weight-medium
                        "
                        >Cancel</a
                      >
                    </div>
                  </form>
                </div>
              </div>
              <div class="card" id="loginform">
                <div class="card-body">
                  <h2>Welcome to Home<del>less</del></h2>
                  <p class="text-muted fs-4">
                
                  </p>
				  <!---- Login form ---->
                  <form
                    class="form-horizontal mt-4 pt-4 needs-validation"
                    novalidate
                    action="login_processing.php" method = "post"
                  >
                    <div class="form-floating mb-3">
                      <input name="username" <?php if ($username != "") echo "value='".$username."'"; ?> type="email" class="form-control form-input-bg" id="tb-email" placeholder="name@example.com" required />
                      <label for="tb-email">Username</label>
                      <div class="invalid-feedback">Username is required</div>
                    </div>

                    <div class="form-floating mb-3">
                      <input
                        type="password"name="password"
                        class="form-control form-input-bg"
                        id="text-password"
                        placeholder="*****"
                        required
                      />
                      <label for="text-password">Password</label>
                      <div class="invalid-feedback">Password is required</div>
                    </div>




                            
                        

                    <div class="d-flex align-items-center mb-3">
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value=""
                          id="r-me1"
                          required
                        />
                        <label class="form-check-label" for="r-me1">
                          Remember me
                        </label>
                        <div class="invalid-feedback">
                          You must agree before submitting.
                        </div>
                      </div>
                      <div class="ms-auto">
                        <a
                          href="javascript:void(0)"
                          id="to-recover"
                          class="fw-bold"
                          >Forgot Password?</a
                        >
                      </div>
                    </div>
                    <div
                      class="d-flex align-items-stretch button-group mt-4 pt-2"
                    >
                      <button type="submit" name = "sign_in"class="btn btn-info btn-lg px-4">
                        Sign in
                      </button>
                      <a
                        href="javascript:void(0)"
                        class="
                          btn btn-lg btn-light-danger
                          text-danger
                          d-flex
                          align-items-center
                          justify-content-center
                          font-weight-medium
                        "
                        ><i class="fab fa-google btn-lg"></i
                      ></a>
                      <a
                        href="javascript:void(0)"
                        class="
                          btn btn-lg btn-light-info
                          text-info
                          d-flex
                          align-items-center
                          justify-content-center
                          font-weight-medium
                        "
                        ><i class="fab fa-facebook-f btn-lg"></i
                      ></a>
                    </div>
                  </form>
                </div>
              </div>
              <div class="card" id="recoverform">
                <div class="card-body">
                  <div class="logo">
                    <h3>Recover Password</h3>
                    <p class="text-muted fs-4">
                      Enter your Email and instructions will be sent to you!
                    </p>
                  </div>
                  <div class="mt-4 pt-4">
                    <!-- Form -->
                    <form action="index.html">
                      <!-- email -->
                      <div class="mb-4 pb-2">
                        <div class="form-floating">
                          <input
                            class="form-control form-input-bg"
                            type="email"
                            required=""
                            placeholder="Email address"
                          />
                          <label for="tb-email">Email</label>
                        </div>
                      </div>
                      <div class="d-flex align-items-stretch button-group">
                        <button type="submit" name = "" class="btn btn-info btn-lg px-4">
                          Submit
                        </button>
                        <a
                          href="javascript:void(0)"
                          id="to-login"
                          class="
                            btn btn-lg btn-light-secondary
                            text-secondary
                            font-weight-medium
                          "
                          >Cancel</a
                        >
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
	  
      <!-- -------------------------------------------------------------- -->
      <!-- Modal for displaying messages-->
	   <div
                      id="al-success-alert"
					  class="modal fade"
                      data-bs-backdrop="static"
                      data-bs-keyboard="false"
                      tabindex="-1"
                      aria-labelledby="staticBackdropLabel"
                      aria-hidden="true"
                    >
                      <div class="modal-dialog modal-sm">
                        <div
                          class="
                            modal-content modal-filled
                            bg-white-success
                            text-success
                          "
                        >
                          <div class="modal-body p-4">
                            <div class="text-center text-success">
                              <i
                                data-feather="check-circle"
                                class="fill-white feather-lg"
                              ></i>
                              <h4 class="mt-2 text-success">Well Done!</h4>
                              <p class="mt-3 text-success-50">
                                You have successfully registered your new account with us.
								Patiently wait to be approved by the System Administrator.
								For more infor, contact us at +2646421021.<br />
								Thank you.
                              </p>
                              <button
                                type="button"
                                class="btn btn-light my-2"
                                data-bs-dismiss="modal"
                              >
                                Continue
                              </button>
                            </div>
                          </div>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                    </div>
					
					<div
                      id="al-error-alert"
					  class="modal fade"
                      data-bs-backdrop="static"
                      data-bs-keyboard="false"
                      tabindex="-1"
                      aria-labelledby="staticBackdropLabel"
                      aria-hidden="true"
                    >
                      <div class="modal-dialog modal-sm">
                        <div
                          class="
                            modal-content modal-filled
                            bg-white-success
                            text-success
                          "
                        >
                          <div class="modal-body p-4">
                            <div class="text-center text-success">
                              <i
                                data-feather="check-circle"
                                class="fill-white feather-lg"
                              ></i>
                              <h4 class="mt-2 text-success">Sorry!</h4>
                              <p class="mt-3 text-success-50">
                                Your username or password is incorrect. try Again!.
                              </p>
                              <button
                                type="button"
                                class="btn btn-light my-2"
                                data-bs-dismiss="modal"
                              >
                                Continue
                              </button>
                            </div>
                          </div>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                    </div>
      <!-- -------------------------------------------------------------- -->
      <!-- -------------------------------------------------------------- -->
      <!-- Login box.scss -->
      <!-- -------------------------------------------------------------- -->
    </div>
    <!-- -------------------------------------------------------------- -->
    <!-- All Required js -->
    <!-- -------------------------------------------------------------- -->
    <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	 <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <!-- <script src="./assets/libs/popper.js/popper.min.js"></script> -->
    <!-- apps -->
    <script src="./dist/js/app.min.js"></script>
    <script src="./dist/js/app.init.js"></script>
    <script src="./dist/js/app-style-switcher.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="./assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="./assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="./dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="./dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="./dist/js/feather.min.js"></script>
    <script src="./dist/js/custom.min.js"></script>
    <script>
	$(document).ready(function(){
		<?php if ($username != "") echo '$("#al-success-alert").modal("show");'; ?>
	});
	$(document).ready(function(){
		<?php 

         $error = false;
        if (isset($_GET["error"])){
			$error = $_GET["error"];
			if ($error)
			{
				echo '$("#al-error-alert").modal("show");';
			}
		}
		  ?>
	});
      $(".preloader").fadeOut();
      // ---------------------------
      // Login and Recover Password
      // ---------------------------
      $("#to-recover").on("click", function () {
        $("#loginform").hide();
        $("#recoverform").fadeIn();
      });

      $("#to-login").on("click", function () {
        $("#loginform").fadeIn();
        $("#recoverform").hide();
      });

      $("#to-register").on("click", function () {
        $("#loginform").hide();
        $("#registerform").fadeIn();
      });

      $("#to-login2").on("click", function () {
        $("#loginform").fadeIn();
        $("#registerform").hide();
      });

      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function () {
        "use strict";

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll(".needs-validation");

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms).forEach(function (form) {
          form.addEventListener(
            "submit",
            function (event) {
              if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
              }

              form.classList.add("was-validated");
            },
            false
          );
        });
      })();
    </script>
  </body>
</html>

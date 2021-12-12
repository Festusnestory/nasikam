
<?php
include("init.php");
session_start();

$logged_in_user = $_SESSION["user"];



if (isset($_GET['get_town']) && isset($_GET['region_id'])){
	$region_id = $_GET['region_id'];
	$town = new town();
	
	$condition = "region_id='$region_id'";
	$all_towns= $town->selectAllWhereG($condition);
	
	$str = "<option></option>";
	 foreach($all_towns as $index => $town)
	 {
		 $town_name = $town->town;
		 $str .= "<option>$town_name</option>";
	 }
	 echo $str;
	 die();
}
	
if (isset($_GET['id'])){
	$id = $_GET['id'];
 


							
              $tasklist = new task();
              $tasklist = $task->selectAll(); //working
              


              //This is the condition
              $condition = "task_id='$id'";
              //Here we are selecting all where the id is equal to $id
              $tasklist = $task->selectAllWhereG($condition);
              
              
              
              
              foreach($tasklist as $index => $task)
              {
                $project_name = $task->project_name ;
                $erf_no = $task->erf_no ;
                 $tel = $task->tel ;

               
              
             
                
              
			}

			  
 }
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, material admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, material design, material dashboard bootstrap 5 dashboard template"
    />
    <meta
      name="description"
      content="MaterialPro is powerful and clean admin dashboard template, inpired from Google's Material Design"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Nasikama</title>
    <link
      rel="canonical"
      href="https://www.wrappixel.com/templates/materialpro/"
    />
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="./assets/images/favicon.png"
    />
	
	<link
      href="./assets/libs/jquery-steps/jquery.steps.css"
      rel="stylesheet"
    />
    <link href="./assets/libs/jquery-steps/steps.css" rel="stylesheet" />
	
    <!-- Custom CSS -->
    <link href="./dist/css/style.min.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
.upload {
  item-align: center;
  margin-bottom: 15px;
}

.title-part-padding{
    background-color: aliceblue;
}

.wizard-section{
	position: relative;
	background-color: white;
	border: 1px #e9ecef solid;
	padding: 0px;
}

.wizard-section-main_div{
	margin-top: -16px;
}

</style>
  </head>

  <body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
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
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
		<?php include("header.php"); ?>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- User profile -->
          <div
            class="user-profile position-relative"
            style="
              background: url(./assets/images/background/user-info.jpg)
                no-repeat;
            "
          >
            <!-- User profile image -->
            <div class="profile-img">
              <img
                src="./assets/images/users/profile.png"
                alt="user"
                class="w-100"
              />
            </div>
            <!-- User profile text-->
            <div class="profile-text pt-1 dropdown">
              <a
                href="#"
                class="
                  dropdown-toggle
                  u-dropdown
                  w-100
                  text-white
                  d-block
                  position-relative
                "
                id="dropdownMenuLink"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                ><?php
					  if(isset($_SESSION['user'])){
						  $logged_in_user = $_SESSION['user_obj'];
						  //get the fullname of the person logged in from the db
						  
						  echo $logged_in_user->fname.' '.$logged_in_user->sname;
					  }
					  ?></a
              >
              <div
                class="dropdown-menu animated flipInY"
                aria-labelledby="dropdownMenuLink"
              >
                <a class="dropdown-item" href="myprofile.php"
                  ><i
                    data-feather="user"
                    class="feather-sm text-info me-1 ms-1"
                  ></i>
                  My Profile</a
                >
                <a class="dropdown-item" href="#"
                  ><i
                    data-feather="credit-card"
                    class="feather-sm text-info me-1 ms-1"
                  ></i>
                  My Balance</a
                >
                <a class="dropdown-item" href="#"
                  ><i
                    data-feather="mail"
                    class="feather-sm text-success me-1 ms-1"
                  ></i>
                  Inbox</a
                >
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"
                  ><i
                    data-feather="settings"
                    class="feather-sm text-warning me-1 ms-1"
                  ></i>
                  Account Setting</a
                >
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="login.php">
				<i
                    data-feather="log-out"
                    class="feather-sm text-danger me-1 ms-1">
					</i>
                 Logout</a>
				 
				 
				<div class="dropdown-divider"></div>
				
                <div class="ps-4 p-2">
                  <a href="#" class="btn d-block w-100 btn-info rounded-pill"
				  
                    >View Profile</a
                  >
                </div>
              </div>
            </div>
          </div>
          <!-- End User profile text-->
          <!-- Sidebar navigation-->
         <?php include("menu.php"); ?>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
        <!-- Bottom points-->
        <div class="sidebar-footer">
          <!-- item-->
          <a
            href=""
            class="link"
            data-bs-toggle="tooltip"
            data-bs-placement="top"
            title="Settings"
            ><i class="ti-settings"></i
          ></a>
          <!-- item-->
          <a
            href=""
            class="link"
            data-bs-toggle="tooltip"
            data-bs-placement="top"
            title="Email"
            ><i class="mdi mdi-gmail"></i
          ></a>
          <!-- item-->
          <a
            href="logout.php"
            class="link"
            data-bs-toggle="tooltip"
            data-bs-placement="top"
            title="Logout"
            ><i class="mdi mdi-power"></i
          ></a>
        </div>
        <!-- End Bottom points-->
      </aside>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
          <div class="col-md-5 col-12 align-self-center">
            
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item">
                <a href="javascript:void(0)">Home</a>
              </li>
              <li class="breadcrumb-item active"> Property Valuation</li>
            </ol>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
		
	
		<!----Start of the Valuation Wizard---->
		
		    <div class="col-12">
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0">Vertical Steps Example</h4>
                </div>
                <div class="card-body" style="background-color:white">
                  <h6 class="card-subtitle mb-3" ></h6>
                  <div id="example-vertical" class="mt-5" style="background-color:white">
                    <h3>Property Description</h3>
                    <section class="wizard-section">
                      <p>
                        <div class="col-12 wizard-section-main_div">
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0">Property Description</h4>
                </div>
                <div class="card-body wizard-content">
                  <h6 class="card-subtitle mb-3"></h6>
                  <form action="valuation_process.php" method = "post" class="tab-wizard wizard-circle">
                  <input type = "hidden" name = "task_id" value ='<?=$_GET['id']?>';>
                    <!-- Step 1 -->
                    <!--<h6>Property Description</h6>-->
                    
                    <div class="row">
                        <div class="col-md-2">
							<div class="form-floating mb-3">
								<input name="erf_no" value=""
									  type="text"
									  class="form-control"
									  id="erf_no"
									/>
								<label for="erf_no">Erf No.</label>
							</div>
						</div> <div class="col-md-3">
							<div class="form-floating mb-3">
						  
								<select name="region" class="form-select" id="region" required>
								<option></option>
								<?php
								
									$regions = new regions();
									$allregions = $regions->selectAll();
									foreach($allregions as $index => $regions1)
									{
										$str_regions = $regions1->region;
										$id = $regions1->id;
										echo "<option value='$id'>$str_regions</option>";
									}
									
								?>
								</select>
								<label for="region"> Region </label>
						  </div>
						</div>

						 <div class="col-md-3">
							<div class="form-floating mb-3">
						  
								<select name="town" class="form-select" id="town" required>
								<option></option>
								<?php
								
									$town = new town();
									$alltowns = $town->selectAll();
									foreach($alltowns as $index => $town1)
									{
										$str_town = $town1->town;
										echo "<option>$str_town</option>";
									}
									
								?>
								</select>
								<label for="town"> Town </label>
						  </div>
						</div>
                   
				   
					
					 <div class="col-md-4">
                          <div class=" form-floating mb-3">
                            <input name="suburb" value=""
                              type="text"
                              class="form-control"
                              id="suburb"
                            />
							 <label for="firstName1">Suburb :</label>
                          </div>
                        </div>
                        </div>
						
	                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-floating mb-3">
                            <input name="property_address" value=""
                              type="text"
                              class="form-control"
                              id="property address"
                            />
							<label for="property_address">Property Address:</label>
                          </div>
                        </div>
						
						
                        <div class="col-md-6">
                          <div class=" form-floating mb-3">
                            <input name="borrower" value=""
                              type="text"
                              class="form-control"
                              id="borrower"
                            />
							<label for="firstName1">Borrower/Owner:</label>
                          </div>
                        </div>
                        </div>
						
						<div class="row">
                        <div class="col-md-6">
                          <div class="form-floating mb-3">
                            <input name="contact_no" value=""
                              type="text"
                              class="form-control"
                              id="contact no"
                            />
							<label for="contact_no">Contact no:</label>
                          </div>
                        </div>
					
                        <div class="col-md-6">
                          <div class="form-floating mb-3">
                            <input name="project_name" value=""
                              type="text"
                              class="form-control"
                              id="project_name"
                            />
							<label for="project_name">Project Name(if sectional title) :</label>
                          </div>
                        </div>
						</div>
						<div class="row">
                        <div class="col-md-6">
                          <div class="form-floating mb-3">
                            <input name="price" value=""
                              type="text"
                              class="form-control"
                              id="firstName1"
                            />
				           <label for="firstName1">Purchase Price :</label>
                          </div>
                        </div>
					
                        <div class="col-md-6">
                          <div class=" form-floating mb-3">
                            <input name="account_no" value=""
                              type="text"
                              class="form-control"
                              id="account_no"
                            />
							<label for="firstName1">Acount no:</label>
                          </div>
                        </div>
                        </div>
						<div class="row">
						<div class="col-md-6">
                          <div class="form-floating mb-3">
                            <input name="price" value=""
                              type="date"
                              class="form-control"
                              id="firstName1"
                            />
				           <label for="firstName1">Purchase Date :</label>
                          </div>
                        </div>
						
                       
						
						
						 <div class="col-md-6">
							<div class="form-floating mb-3">
						  
								<select name="town" class="form-select" id="town" required>
								
								 <option value=""></option>
                              <option value="type">Residential</option>
                              <option value="type">Commercial</option>
                              <option value="type">Industrial</option>
                              <option value="type">Special</option>
                              <option value="type">Town Houses</option>
                              <option value="type">Flat</option>
								</select>
								<label for="town"> Type of Property </label>
						  </div>
						</div>
						
                       
                      </div>
                      </div>
					   
                       
                    </section>
					
                    <h3>Site</h3>
                    <section style="background-color:white">
					
					  <p>
                        <div class="col-12 wizard-section-main_div">
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0">Property Description</h4>
                </div>
                <div class="card-body wizard-content">
                  <h6 class="card-subtitle mb-3"></h6>
                  <form action="valuation_process.php" method = "post" class="tab-wizard wizard-circle">
                  <input type = "hidden" name = "task_id" value ='<?=$_GET['id']?>';>
                    <!-- Step 1 -->
                    <!--<h6>Property Description</h6>-->
					
					<!-- Nav Tabs
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-bs-toggle="tab" href="#site_general" role="tab">
								<span>General</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" href="#site_zoning" role="tab">
								<span>Zoning</span>
							</a>
						</li>
					</ul>
					<!-- Tab panes
					<div class="tab-content">
						<div class="tab-pane active" id="site_general" role="tabpanel">
							<div class="p-3">
								
							</div>
						</div>
						<div class="tab-pane  p-3" id="site_zoning" role="tabpanel">
							
						</div>
					</div>
					
                    -->
					
                    <!-- Site Tabs Start-->
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-bs-toggle="tab" href="#site_general" role="tab">
								<span>General</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" href="#site_zoning" role="tab">
								<span>Zoning</span>
							</a>
						</li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane active" id="site_general" role="tabpanel">
							<div class="p-3">
								<div class="mb-3 row">
                      <label
                        for="email20"
                        class="col-sm-3 text-end control-label col-form-label"
                        > Size</label
                      >
                      <div class="col-sm-6">
                        <input  type="text" name = "email" value=""
                        
                          class="form-control"
                          id="email20"
                        />
                      </div>
                    </div>
                      
					  
					   <div class="row">
                         <div class="col-md-6">
                        
                          <div class="mb-3">
                            <label>Topgraphy :</label>
                            <div class="c-inputs-stacked">
                              <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio6"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio6"
                                  >Level</label
                                >
                              </div>
                              <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio7"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio7"
                                  >Sloping</label
                                >
                              </div>
							
                            </div>
							
                          </div>
						  
						  
                        </div>
						
						 <div class="col-md-6">
                        
                          <div class="mb-3">
                            <label>Accessiblity :</label>
                            <div class="c-inputs-stacked">
                              <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio6"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio6"
                                  >Accessible</label
                                >
                              </div>
                              <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio7"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio7"
                                  >Inaccessible</label
                                >
                              </div>
							
                            </div>
							
                          </div>
						  </div>
						  </div>
						  
						  
                        
						<div class="row">
						 <div class="col-md-6">
                        
                          <div class="mb-3">
                            <label>Soil Type :</label>
                            <div class="c-inputs-stacked">
                              <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio6"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio6"
                                  >Rocky</label
                                >
                              </div>
                              <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio7"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio7"
                                  >Silt</label
                                >
                              </div>
							  
							   <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio7"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio7"
                                  >Clay soil</label
                                >
                              </div>
							
                            </div>
							
                          </div>
						  
						  
                        </div>
						
						
						 <div class="col-md-6">
                        
                          <div class="mb-3">
                            <label>Good Building soil? :</label>
                            <div class="c-inputs-stacked">
                              <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio6"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio6"
                                  >Yes</label
                                >
                              </div>
                              <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio7"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio7"
                                  >No</label
                                >
                              </div>
							
                            </div>
							
                          </div>
						  
						  
                        </div>
						
						 <div class="col-md-6">
                        
                          <div class="mb-3">
                            <label>Special Design foundation required :</label>
                            <div class="c-inputs-stacked">
                            <div class="c-inputs-stacked">
                              <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio6"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio6"
                                  >Yes</label
                                >
                              </div>
                              <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio7"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio7"
                                  >No</label
                                >
                              </div>
							
                            </div>
							
                          </div>
						  
						  
                        </div>
                        </div>
                       </div>
					   
							</div>
						</div>
						<div class="tab-pane  p-3" id="site_zoning" role="tabpanel">
								  <div class="row">
					
						<h3>Zoning Classification and Description:</h3>
                   
                    <!-- Step 1 -->
                    <h6>Property Description</h6>
                    
                      <div class="row">
                     
                      
						 <div class="mb-3 row">
                      <label
                        for="email20"
                        class="col-sm-3 text-end control-label col-form-label"
                        > Current Zoning</label
                      >
                      <div class="col-sm-6">
                        <input  type="text" name = "email" value=""
                        
                          class="form-control"
                          id="email20"
                        />
                      </div>
                    </div>
					</div>
                      
					  
					   <div class="row">
					<div class="mb-3">
                            <label>Current Use and Zoning Compliance :</label>
                            <div class="c-inputs-stacked">
                              <div class="form-check">
                                <input
                                  type="radio"
                                  id="customRadio6"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio6"
                                  >Legal</label
                                >
                              </div>
                              <div class="form-check">
                                <input
                                  type="radio"
                                  id="customRadio7"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio7"
                                  >Illegal</label
                                >
                              </div>
							  
							   <div class="form-check">
                                <input
                                  type="radio"
                                  id="customRadio7"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio7"
                                  >No Zoning</label
                                >
                              </div>
							
                            </div>
							
                          </div>
						  
						  <div class="mb-3">
                            <label>Highest & best use as improved :</label>
                            <div class="c-inputs-stacked">
                              <div class="form-check">
                                <input
                                  type="radio"
                                  id="customRadio6"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio6"
                                  >Present Use</label
                                >
                              </div>
                              <div class="form-check">
                                <input
                                  type="radio"
                                  id="customRadio8"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio8"
                                  >Other Use</label
                                >
                              </div>
							  
							 
							
                            </div>
							
                          </div>
						  </div>
                          </div>
						</div>
					</div>
					
                    <!-- Site Tabs End-->
					
					
                    
                     
						  
                      </div>
                      </p>
					  
                    </section>
					
					
                  
					
                    
					<h3>Description of Improvements</h3>
                    <section>
                      <div class="card-body wizard-content" style="background-color:white">
                  <h6 class="card-subtitle mb-3"></h6>
                  <form action="valuation_process.php" method = "post" class="tab-wizard wizard-circle">
                  <input type = "hidden" name = "task_id" value ='<?=$_GET['id']?>';>
                    <!-- Step 1 -->
                    <h6>Main Building</h6>
                    
                      <div class="row">
                        <div class="col-md-3">
                          <div class="form-floating mb-3">
                            <input name="property_address" value=""
                              type="text"
                              class="form-control"
                              id="property address"
                            />
							<label for="property_address">Entrance:</label>
                          </div>
                        </div>
						
						
                        <div class="col-md-3">
                          <div class=" form-floating mb-3">
                            <input name="borrower" value=""
                              type="text"
                              class="form-control"
                              id="borrower"
                            />
							<label for="firstName1">Lounge:</label>
                          </div>
                        </div>
                        </div>
                      
					  <div class="row">
                        <div class="col-md-3">
                          <div class="form-floating mb-3">
                            <input name="property_address" value=""
                              type="text"
                              class="form-control"
                              id="property address"
                            />
							<label for="property_address">Dining Area:</label>
                          </div>
                        </div>
						
						
                        <div class="col-md-3">
                          <div class=" form-floating mb-3">
                            <input name="borrower" value=""
                              type="text"
                              class="form-control"
                              id="borrower"
                            />
							<label for="firstName1">Tv Room:</label>
                          </div>
                        </div>
                        </div>
						<div class="row">
                        <div class="col-md-3">
                          <div class="form-floating mb-3">
                            <input name="property_address" value=""
                              type="text"
                              class="form-control"
                              id="property address"
                            />
							<label for="property_address">Pantry:</label>
                          </div>
                        </div>
						
						
                        <div class="col-md-3">
                          <div class=" form-floating mb-3">
                            <input name="borrower" value=""
                              type="text"
                              class="form-control"
                              id="borrower"
                            />
							<label for="firstName1">Kitchen:</label>
                          </div>
                        </div>
                        </div>
						<div class="row">
                        <div class="col-md-3">
                          <div class="form-floating mb-3">
                            <input name="property_address" value=""
                              type="text"
                              class="form-control"
                              id="property address"
                            />
							<label for="property_address">Bedroom:</label>
                          </div>
                        </div>
						
						
                        <div class="col-md-3">
                          <div class=" form-floating mb-3">
                            <input name="borrower" value=""
                              type="text"
                              class="form-control"
                              id="borrower"
                            />
							<label for="firstName1">Bathroom:</label>
                          </div>
                        </div>
                        </div>
						
						 
					  	  <div class="mb-3" style="background-color:white">
					
                            <div class="c-inputs-stacked">
                              <div class="form-check">
                                <input
                                  type="radio"
                                  id="customRadio6"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio6"
                                  >Single Story</label
                                >
                              </div>
                              <div class="form-check" style="background-color:white">
                                <input
                                  type="radio"
                                  id="customRadio8"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio8"
                                  >Double Story</label
                                >
                              </div>
							  
							 
							
                            </div>
							
							
							
                          
                    
                       <div class="row">
                        <div class="col-md-3">
                          <div class="form-floating mb-3">
                            <input name="property_address" value=""
                              type="text"
                              class="form-control"
                              id="property address"
                            />
							<label for="property_address">Bar:</label>
                          </div>
                        </div>
						
						
                        <div class="col-md-3">
                          <div class=" form-floating mb-3">
                            <input name="borrower" value=""
                              type="text"
                              class="form-control"
                              id="borrower"
                            />
							<label for="firstName1">Wc:</label>
                          </div>
                        </div>
                        
                        <div class="col-md-3">
                          <div class="form-floating mb-3">
                            <input name="property_address" value=""
                              type="text"
                              class="form-control"
                              id="property address"
                            />
							<label for="property_address">Laundry:</label>
                          </div>
                        </div>
						
						 <div class="row">
                        <div class="col-md-3">
                          <div class=" form-floating mb-3">
                            <input name="borrower" value=""
                              type="text"
                              class="form-control"
                              id="borrower"
                            />
							<label for="firstName1">Tv room:</label>
                          </div>
                        </div>
						
                        
						
						   
                        <div class="col-md-3">
                          <div class="form-floating mb-3">
                            <input name="property_address" value=""
                              type="text"
                              class="form-control"
                              id="property address"
                            />
							<label for="property_address">Bedroom:</label>
                          </div>
                        </div>
						
						
                        <div class="col-md-3">
                          <div class=" form-floating mb-3">
                            <input name="borrower" value=""
                              type="text"
                              class="form-control"
                              id="borrower"
                            />
							<label for="firstName1">Family room:</label>
                          </div>
                        </div>
                        </div>
						
						   <div class="row">
                     
                      
						<div class="col-md-3">
                          <div class=" form-floating mb-3">
                            <input name="borrower" value=""
                              type="text"
                              class="form-control"
                              id="borrower"
                            />
							<label for="firstName1">Bathroom :</label>
                          </div>
                        </div>
                        </div>
                      </div>
						
						 <h3>Out Building</h3>
						   <div class="row">
                        <div class="col-md-3">
                          <div class="form-floating mb-3">
                            <input name="property_address" value=""
                              type="text"
                              class="form-control"
                              id="property address"
                            />
							<label for="property_address">Garages:</label>
                          </div>
                        </div>
						
						
                        <div class="col-md-3">
                          <div class=" form-floating mb-3">
                            <input name="borrower" value=""
                              type="text"
                              class="form-control"
                              id="borrower"
                            />
							<label for="firstName1">Wc/Wb:</label>
                          </div>
                        </div>
                        </div>
                      
					  <div class="row">
                        <div class="col-md-3">
                          <div class="form-floating mb-3">
                            <input name="property_address" value=""
                              type="text"
                              class="form-control"
                              id="property address"
                            />
							<label for="property_address">Entrance/Lounge:</label>
                          </div>
                        </div>
						
						
                        <div class="col-md-3">
                          <div class=" form-floating mb-3">
                            <input name="borrower" value=""
                              type="text"
                              class="form-control"
                              id="borrower"
                            />
							<label for="firstName1">Lounge:</label>
                          </div>
                        </div>
                        </div>
						<div class="row">
                        <div class="col-md-3">
                          <div class="form-floating mb-3">
                            <input name="property_address" value=""
                              type="text"
                              class="form-control"
                              id="property address"
                            />
							<label for="property_address">Bedroom:</label>
                          </div>
                        </div>
						
						
                        <div class="col-md-3">
                          <div class=" form-floating mb-3">
                            <input name="borrower" value=""
                              type="text"
                              class="form-control"
                              id="borrower"
                            />
							<label for="firstName1">Bathroom:</label>
                          </div>
                        </div>
                        </div>
						<div class="row">
                        <div class="col-md-3">
                          <div class="form-floating mb-3">
                            <input name="property_address" value=""
                              type="text"
                              class="form-control"
                              id="property address"
                            />
							<label for="property_address">Batches/Rentable room:</label>
                          </div>
                        </div>
						
						
                        <div class="col-md-3">
                          <div class=" form-floating mb-3">
                            <input name="borrower" value=""
                              type="text"
                              class="form-control"
                              id="borrower"
                            />
							<label for="firstName1">Kitchen:</label>
                          </div>
                        </div>
                        </div>
						</div>
						<div style="background-color:white">
						  <h3>Other Improvements</h3>
						  
						  <div class="row">
						 <div class="col-md-6">
                        
                          <div class="mb-3">
                            
                            <div class="c-inputs-stacked">
                              <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio6"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio6"
                                  >paving : interlocks</label
                                >
                              </div>
                              <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio7"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio7"
                                  >Security Fancing</label
                                >
                              </div>
							  
							   <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio7"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio7"
                                  >Garden</label
                                >
                              </div>
							  <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio7"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio7"
                                  >Intercom</label
                                >
                              </div>
							
                            </div>
							
                          </div>
						  
						  
                        </div>
						<div class="col-md-6">
                        
                          <div class="mb-3">
                            
                            <div class="c-inputs-stacked">
                              <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio6"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio6"
                                  >Swimming Pool</label
                                >
                              </div>
                              <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio7"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio7"
                                  >Indoor BBQ</label
                                >
                              </div>
							  
							   <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio7"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio7"
                                  >Underfloor Heating</label
                                >
                              </div>
							 
							
                            </div>
							
                          </div>
						  
						  
                        </div>
						</div>
						
						
				
							  <div style="background-color:white">
							
							 <h3>Fixtures and Fittings</h3>
						  
                          <div class="row">
						 <div class="col-md-6">
                        
                          <div class="mb-3">
                            
                            <div class="c-inputs-stacked">
                              <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio6"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio6"
                                  >Burglar Bars</label
                                >
                              </div>
                              <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio7"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio7"
                                  >Alarm</label
                                >
                              </div>
							  
							   <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio7"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio7"
                                  >Solar Heating</label
                                >
                              </div>
							  <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio7"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio7"
                                  >Sanitery Fittings</label
                                >
                              </div>
							
                            </div>
							
                          </div>
						  
						  
                        </div>
						<div class="col-md-6">
                        
                          <div class="mb-3">
                            
                            <div class="c-inputs-stacked">
                              <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio6"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio6"
                                  >BIC</label
                                >
                              </div>
                              <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio7"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio7"
                                  >Kitchen Units</label
                                >
                              </div>
							  
							   <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio7"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio7"
                                  >Stove</label
                                >
                              </div>
							  <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio7"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio7"
                                  >Glazing</label
                                >
                              </div>
							 
							
                            </div>
							
                          </div>
						  
						  
                        </div>
						</div>
						
						
				
							  <div style="background-color:white">
							  <h3>Types of constraction and condition</h3>
							  
							  <div class="col-md-6">
                        
                          <div class="mb-3">
                            <label>Walls :</label>
                            <div class="row">
						 <div class="col-md-6">
                        
                          <div class="mb-3">
                            
                            <div class="c-inputs-stacked">
                              <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio6"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio6"
                                  >Brick</label
                                >
                              </div>
                              <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio7"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio7"
                                  >Block Brick</label
                                >
                              </div>
							  
							   <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio7"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio7"
                                  >Ash Brick</label
                                >
                              </div>
							  <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio7"
                                  name="customRadio"
                                  class="form-check-input"
                                /></div>
                                <label
                                  class="form-check-label"
                                  for="customRadio7"
                                  >Precast</label
                                >
                              </div>
							
                            </div>
							
                          </div>
						  
						  
                        
						<div class="col-md-6">
                        
                          <div class="mb-3">
                            
                            <div class="c-inputs-stacked">
                              <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio6"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio6"
                                  >Face Brick</label
                                >
                              </div>
                              <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio7"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio7"
                                  >Plastered</label
                                >
                              </div>
							  <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio7"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio7"
                                  >Paint</label
                                >
                              </div>
							  <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio7"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio7"
                                  >Blagged</label
                                >
                              </div>
							  <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio7"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio7"
                                  >Painted</label
                                >
                              </div>
							  
							  
							  
							   
							
                            </div>
							
                          </div>
							 <div class="col-md-6">
                        
                          <div class="mb-3">
                            <label>Roof Type :</label>
                            <div class="c-inputs-stacked">
                              <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio6"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio6"
                                  >Iron</label
                                >
                              </div>
                              <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio7"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio7"
                                  >Concrete Slab</label
                                >
                              </div>
							  <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio7"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio7"
                                  >Fibre Cement</label
                                >
                              </div>
							  <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio7"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio7"
                                  >Thatch</label
                                >
                              </div>
							  <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio7"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio7"
                                  >Malthoid</label
                                >
                              </div>
							  
							
                            </div>
							
                          </div>
						  
						  <div class="mb-3">
                            <label>Roof Pitch :</label>
                            <div class="c-inputs-stacked">
                              <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio6"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio6"
                                  >Flat</label
                                >
                              </div>
                              <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio7"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio7"
                                  >Low</label
                                >
                              </div>
							  <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio7"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio7"
                                  >High</label
                                >
                              </div>
							  
							  
							
                            </div>
							
                          </div>
						  <div class="mb-3">
                            <label>Ceiling Type :</label>
                            <div class="c-inputs-stacked">
                              <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio6"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio6"
                                  >Pane</label
                                >
                              </div>
                              <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio7"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio7"
                                  >Concrete Slab</label
                                >
                              </div>
							  <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio7"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio7"
                                  >Rhinoboard</label
                                >
                              </div>
							  <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio7"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio7"
                                  >Celotex</label
                                >
                              </div>
							  <div class="row">
                     
                      
						 <div class="mb-3 row">
                      <label
                        for="email20"
                        class="col-sm-3 text-end control-label col-form-label"
                        > other</label
                      >
                      <div class="col-sm-4">
                        <input  type="text" name = "email" value=""
                        
                          class="form-control"
                          id="email20"
                        />
                      </div>
                    </div>
                      </div>
							
                            </div>
							
                          </div>
						  <div class="mb-3">
                            <label>Floor covering :</label>
                            <div class="c-inputs-stacked">
                              <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio6"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio6"
                                  >Carpet</label
                                >
                              </div>
                              <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio7"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio7"
                                  >Laminated</label
                                >
                              </div>
							  <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio7"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio7"
                                  >Tiles</label
                                >
                              </div>
							  <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio7"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio7"
                                  >Wood</label
                                >
                              </div>
                               <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio7"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio7"
                                  >Concrete</label
                                >
                              </div>
							  
							
                            </div>
							
                          </div>
						  <div class="mb-3">
                            <label>Municipal Services :</label>
                            <div class="c-inputs-stacked">
                              <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio6"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio6"
                                  >Electrical</label
                                >
                              </div>
                              <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio7"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio7"
                                  >Sewer</label
                                >
                              </div>
							  <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio7"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio7"
                                  >Water</label
                                >
                              </div>
							 
                              <div class="mb-3">
                            <label>Fencing :</label>
                            <div class="c-inputs-stacked">
                              <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio6"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio6"
                                  >Precast Wall</label
                                >
                              </div>
                              <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio7"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio7"
                                  >Wire</label
                                >
                              </div>
							  <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio7"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio7"
                                  >Bricks</label
                                >
                              </div>
							  <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio7"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio7"
                                  >Palisade</label
                                >
                              </div>
                               <div class="form-check">
                                <input
                                  type="checkbox"
                                  id="customRadio7"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio7"
                                  ></label
                                >
                              </div>
							  
							
                            </div>
							
                          </div
							  
							
                            </div>
							
                          </div
                        </div>
                          </div>
						  </div>
                      
                    </section>
					<h3>Effects</h3>
                    <section>
                      <p><div class="card-body wizard-content">
                  <h6 class="card-subtitle mb-3"></h6>
                  <form action="valuation_process.php" method = "post" class="tab-wizard wizard-circle">
                  <input type = "hidden" name = "task_id" value ='<?=$_GET['id']?>';>
                    <!-- Step 1 -->
                    <h6>Property Description</h6>
                    
                      <div class="row">
                        <div class="col-md-6">
                          <div class="mb-3">
                            <label for="firstName1">Erf no :</label>
                            <input name="erf_no" value="<?php echo $erf_no; ?>"
                              type="text"
                              class="form-control"
                              id="firstName1"
                            />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="mb-3">
                            <label for="lastName1">Property Address :</label>
                            <input name="address"
                              type="text"
                              class="form-control"
                              id="lastName1"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="mb-3">
                            <label for="emailAddress1">Project Name :</label>
                            <input name="project_name" value="<?php echo $project_name; ?>"
                              type="text"
                              class="form-control"
                              id="Project Name"
                            />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="mb-3">
                            <label for="phoneNumber1">Contact Number :</label>
                            <input name="tel" value="<?php echo $tel; ?>"
                              type="tel"
                              class="form-control"
                              id="phoneNumber1"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="mb-3">
                            <label for="location1"> Type of Property :</label>
                            <select
                              class="form-select"
                              id="location1"
                              name="type_of_property"
                            >
                              <option value="">Select Property</option>
                              <option value="type">Residential</option>
                              <option value="type">Commercial</option>
                              <option value="type">Industrial</option>
                              <option value="type">Special</option>
                              <option value="type">Town Houses</option>
                              <option value="type">Flat</option>
                            </select>
                          </div>
                            </div>
                      </div>
                      </p></p>
                    </section>
					<h3>Effects</h3>
                    <section>
                      <div class="card-body wizard-content">
                  <h6 class="card-subtitle mb-3"></h6>
                  <form action="valuation_process.php" method = "post" class="tab-wizard wizard-circle">
                  <input type = "hidden" name = "task_id" value ='<?=$_GET['id']?>';>
                    <!-- Step 1 -->
                    <h6>Property Description</h6>
                    
                      <div class="row">
                        <div class="col-md-6">
                          <div class="mb-3">
                            <label for="firstName1">Erf no :</label>
                            <input name="erf_no" value="<?php echo $erf_no; ?>"
                              type="text"
                              class="form-control"
                              id="firstName1"
                            />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="mb-3">
                            <label for="lastName1">Property Address :</label>
                            <input name="address"
                              type="text"
                              class="form-control"
                              id="lastName1"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="mb-3">
                            <label for="emailAddress1">Project Name :</label>
                            <input name="project_name" value="<?php echo $project_name; ?>"
                              type="text"
                              class="form-control"
                              id="Project Name"
                            />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="mb-3">
                            <label for="phoneNumber1">Contact Number :</label>
                            <input name="tel" value="<?php echo $tel; ?>"
                              type="tel"
                              class="form-control"
                              id="phoneNumber1"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="mb-3">
                            <label for="location1"> Type of Property :</label>
                            <select
                              class="form-select"
                              id="location1"
                              name="type_of_property"
                            >
                              <option value="">Select Property</option>
                              <option value="type">Residential</option>
                              <option value="type">Commercial</option>
                              <option value="type">Industrial</option>
                              <option value="type">Special</option>
                              <option value="type">Town Houses</option>
                              <option value="type">Flat</option>
                            </select>
                          </div>
                            </div>
                      </div>
                      </p>
                    </section>
                   
                  </div>
                </div>
              </div>
            </div>
		
		
		 <!-- End of the Valuation Wizard-------------------------------------------------------------- -->
           
			
          <!-- Row -->
       
          <!-- Row -->
         
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
           Created by Goldstone Software Development Reserved by Nasikama.
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- customizer Panel -->
    <!-- ============================================================== -->
    <aside class="customizer">
     
      <div class="customizer-body">
        <ul class="nav customizer-tab" role="tablist">
          <li class="nav-item">
            <a
              class="nav-link active"
              id="pills-home-tab"
              data-bs-toggle="pill"
              href="#pills-home"
              role="tab"
              aria-controls="pills-home"
              aria-selected="true"
              ><i class="mdi mdi-wrench fs-6"></i
            ></a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              id="pills-profile-tab"
              data-bs-toggle="pill"
              href="#chat"
              role="tab"
              aria-controls="chat"
              aria-selected="false"
              ><i class="mdi mdi-message-reply fs-6"></i
            ></a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              id="pills-contact-tab"
              data-bs-toggle="pill"
              href="#pills-contact"
              role="tab"
              aria-controls="pills-contact"
              aria-selected="false"
              ><i class="mdi mdi-star-circle fs-6"></i
            ></a>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <!-- Tab 1 -->
          <div
            class="tab-pane fade show active"
            id="pills-home"
            role="tabpanel"
            aria-labelledby="pills-home-tab"
          >
            <div class="p-3 border-bottom">
              <!-- Sidebar -->
              <h5 class="font-weight-medium mb-2 mt-2">Layout Settings</h5>
              <div class="form-check mt-3">
                <input
                  type="checkbox"
                  name="theme-view"
                  class="form-check-input"
                  id="theme-view"
                />
                <label class="form-check-label" for="theme-view">
                  <span>Dark Theme</span>
                </label>
              </div>
              <div class="form-check mt-2">
                <input
                  type="checkbox"
                  class="sidebartoggler form-check-input"
                  name="collapssidebar"
                  id="collapssidebar"
                />
                <label class="form-check-label" for="collapssidebar">
                  <span>Collapse Sidebar</span>
                </label>
              </div>
              <div class="form-check mt-2">
                <input
                  type="checkbox"
                  name="sidebar-position"
                  class="form-check-input"
                  id="sidebar-position"
                />
                <label class="form-check-label" for="sidebar-position">
                  <span>Fixed Sidebar</span>
                </label>
              </div>
              <div class="form-check mt-2">
                <input
                  type="checkbox"
                  name="header-position"
                  class="form-check-input"
                  id="header-position"
                />
                <label class="form-check-label" for="header-position">
                  <span>Fixed Header</span>
                </label>
              </div>
              <div class="form-check mt-2">
                <input
                  type="checkbox"
                  name="boxed-layout"
                  class="form-check-input"
                  id="boxed-layout"
                />
                <label class="form-check-label" for="boxed-layout">
                  <span>Boxed Layout</span>
                </label>
              </div>
            </div>
            <div class="p-3 border-bottom">
              <!-- Logo BG -->
              <h5 class="font-weight-medium mb-2 mt-2">Logo Backgrounds</h5>
              <ul class="theme-color m-0 p-0">
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-logobg="skin1"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-logobg="skin2"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-logobg="skin3"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-logobg="skin4"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-logobg="skin5"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-logobg="skin6"
                  ></a>
                </li>
              </ul>
              <!-- Logo BG -->
            </div>
            <div class="p-3 border-bottom">
              <!-- Navbar BG -->
              <h5 class="font-weight-medium mb-2 mt-2">Navbar Backgrounds</h5>
              <ul class="theme-color m-0 p-0">
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-navbarbg="skin1"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-navbarbg="skin2"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-navbarbg="skin3"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-navbarbg="skin4"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-navbarbg="skin5"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-navbarbg="skin6"
                  ></a>
                </li>
              </ul>
              <!-- Navbar BG -->
            </div>
            <div class="p-3 border-bottom">
              <!-- Logo BG -->
              <h5 class="font-weight-medium mb-2 mt-2">Sidebar Backgrounds</h5>
              <ul class="theme-color m-0 p-0">
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-sidebarbg="skin1"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-sidebarbg="skin2"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-sidebarbg="skin3"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-sidebarbg="skin4"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-sidebarbg="skin5"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-sidebarbg="skin6"
                  ></a>
                </li>
              </ul>
              <!-- Logo BG -->
            </div>
          </div>
          <!-- End Tab 1 -->
          <!-- Tab 2 -->
          <div
            class="tab-pane fade"
            id="chat"
            role="tabpanel"
            aria-labelledby="pills-profile-tab"
          >
            <ul class="mailbox list-style-none mt-3">
              <li>
                <div class="message-center chat-scroll position-relative">
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_1"
                    data-user-id="1"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="./assets/images/users/1.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span class="profile-status rounded-circle online"></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Pavan kumar</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >Just see the my admin!</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:30 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_2"
                    data-user-id="2"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="./assets/images/users/2.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span class="profile-status rounded-circle busy"></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Sonu Nigam</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >I've sung a song! See you at</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:10 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_3"
                    data-user-id="3"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="./assets/images/users/3.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span class="profile-status rounded-circle away"></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Arijit Sinh</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >I am a singer!</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:08 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_4"
                    data-user-id="4"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="./assets/images/users/4.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span
                        class="profile-status rounded-circle offline"
                      ></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Nirav Joshi</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >Just see the my admin!</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:02 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                  <!-- Message -->
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_5"
                    data-user-id="5"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="./assets/images/users/5.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span
                        class="profile-status rounded-circle offline"
                      ></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Sunil Joshi</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >Just see the my admin!</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:02 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                  <!-- Message -->
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_6"
                    data-user-id="6"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="./assets/images/users/6.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span
                        class="profile-status rounded-circle offline"
                      ></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Akshay Kumar</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >Just see the my admin!</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:02 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                  <!-- Message -->
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_7"
                    data-user-id="7"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="./assets/images/users/7.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span
                        class="profile-status rounded-circle offline"
                      ></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Pavan kumar</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >Just see the my admin!</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:02 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                  <!-- Message -->
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_8"
                    data-user-id="8"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="./assets/images/users/8.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span
                        class="profile-status rounded-circle offline"
                      ></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Varun Dhavan</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >Just see the my admin!</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:02 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                </div>
              </li>
            </ul>
          </div>
          <!-- End Tab 2 -->
          <!-- Tab 3 -->
          <div
            class="tab-pane fade p-3"
            id="pills-contact"
            role="tabpanel"
            aria-labelledby="pills-contact-tab"
          >
            <h6 class="mt-3 mb-3">Activity Timeline</h6>
            <div class="steamline">
              <div class="sl-item">
                <div class="sl-left bg-light-success text-success">
                  <i data-feather="user" class="feather-sm fill-white"></i>
                </div>
                <div class="sl-right">
                  <div class="font-weight-medium">
                    Meeting today <span class="sl-date"> 5pm</span>
                  </div>
                  <div class="desc">you can write anything</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left bg-light-info text-info">
                  <i data-feather="camera" class="feather-sm fill-white"></i>
                </div>
                <div class="sl-right">
                  <div class="font-weight-medium">Send documents to Clark</div>
                  <div class="desc">Lorem Ipsum is simply</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left">
                  <img
                    class="rounded-circle"
                    alt="user"
                    src="./assets/images/users/2.jpg"
                  />
                </div>
                <div class="sl-right">
                  <div class="font-weight-medium">
                    Go to the Doctor <span class="sl-date">5 minutes ago</span>
                  </div>
                  <div class="desc">Contrary to popular belief</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left">
                  <img
                    class="rounded-circle"
                    alt="user"
                    src="./assets/images/users/1.jpg"
                  />
                </div>
                <div class="sl-right">
                  <div>
                    <a href="javascript:void(0)">Stephen</a>
                    <span class="sl-date">5 minutes ago</span>
                  </div>
                  <div class="desc">Approve meeting with tiger</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left bg-light-primary text-primary">
                  <i data-feather="user" class="feather-sm fill-white"></i>
                </div>
                <div class="sl-right">
                  <div class="font-weight-medium">
                    Meeting today <span class="sl-date"> 5pm</span>
                  </div>
                  <div class="desc">you can write anything</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left bg-light-info text-info">
                  <i data-feather="send" class="feather-sm fill-white"></i>
                </div>
                <div class="sl-right">
                  <div class="font-weight-medium">Send documents to Clark</div>
                  <div class="desc">Lorem Ipsum is simply</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left">
                  <img
                    class="rounded-circle"
                    alt="user"
                    src="./assets/images/users/4.jpg"
                  />
                </div>
                <div class="sl-right">
                  <div class="font-weight-medium">
                    Go to the Doctor <span class="sl-date">5 minutes ago</span>
                  </div>
                  <div class="desc">Contrary to popular belief</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left">
                  <img
                    class="rounded-circle"
                    alt="user"
                    src="./assets/images/users/6.jpg"
                  />
                </div>
                <div class="sl-right">
                  <div>
                    <a href="javascript:void(0)">Stephen</a>
                    <span class="sl-date">5 minutes ago</span>
                  </div>
                  <div class="desc">Approve meeting with tiger</div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Tab 3 -->
        </div>
      </div>
    </aside>
    <div class="chat-windows"></div>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
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
    <!--This page JavaScript -->
    <script src="./assets/libs/apexcharts/dist/apexcharts.min.js"></script>
	
	<!-- for the wizard -->
    <script src="./assets/libs/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="./assets/libs/jquery-validation/dist/jquery.validate.min.js"></script>
	<script>
	$(document).ready(function(){
		MinimizeMenuDelay();
	});
     

      //Vertical Steps

      $("#example-vertical").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        stepsOrientation: "vertical",
      });
	  
	  $(document).ready(function(){
		$("#region").on("change", function () {
			var region_id = $(this).val();
			gettown(region_id);
			// alert(region);
		});
	  });
	  
	  function gettown(region_id)
	  {
		//$("#region"+id).html(LOADER_2_5);
		console.log("testin");
		$.ajax({
			url: "valuation.php?get_town=true&region_id="+region_id, 
			type: 'get',
			success: function(result){
				result = $.trim(result);
				console.log('result: ' + result);
				$("#town").html(result);
				
			},
			error: function (jqXhr, textStatus, errorMessage) { // error callback 
				console.log('Error: ' + errorMessage);
			}
		});
	} 

	$().ready(function(){
		$("section[role='tabpanel']").each(function(){
			$(this).addClass("wizard-section");
			$(this).css("padding","0px");
		});
		
		$(".nav-item").css("display", "block");
	});
	
	
    </script>
  </body>
</html>

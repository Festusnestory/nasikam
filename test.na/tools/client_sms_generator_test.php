<?php require_once __DIR__ . '/../init.php'; 
session_start();

    if(!isset($_SESSION['user'])){
        // header("location: ../index.php?logged=no");
    }
   /*
		Takes in two parameters,
		1. mobile - Application number/applicant number
		2. message - Message
	*/
	
    if (isset($_POST["mobile"])) $mobile = $_POST["mobile"];
    if (isset($_GET["mobile"])) $mobile = $_GET["mobile"];
	if (isset($_POST["message"])) $message = $_POST["message"];
    if (isset($_GET["message"])) $message = $_GET["message"];
	
	// SendMessage($applicant_id, $message_type);
	
	SendTestMessage($mobile, $message);
	
	function SendTestMessage($mobile, $message)
	{
		$sender = $mobile;
		$sendBackMsg = $message;
		 include("sms_handler_test.php");
	}
	
	function SendMessage($applicant_id, $message_type)
	{
		$SMS_TYPE = $GLOBALS["SMS_TYPE"];
		if ($message_type == "")
		{
			die("Message empty!");
		}
		if ($applicant_id == "")
		{
			die("Applicant_id empty!");
		}
		
		/*
		-------Vars to be replaced in pre-defined message(SMS_TYPE)-------
			Application_No_
			Title_ 
			Surname_
			Erf_no_ 
			Location_
		*/
		
		
		
		//Get Client info
		$applicant = new applicants($applicant_id);
		$applicant->selectWhere("application_id", $applicant_id);
		$title = $applicant->title;
		$surname = ucwords(strtolower($applicant->surname));
		
		//get location and erf number details
		$loan_details = new loan_details();
		$loan_details->selectWhere("application_id", $applicant_id);
		$erf_number = ucwords(strtolower($loan_details->erf_number));
		$location = ucwords(strtolower($loan_details->location_of_property));
		
		//get customer mobile
		$applicants_contacts = new applicants_contacts();
		$applicants_contacts->selectWhere("application_id", $applicant_id);
		$sender = $applicants_contacts->mobile;
		// $sender = "+264816354851";
		
		//get the message
		$sendBackMsg = $SMS_TYPE[$message_type];
		$sendBackMsg = str_replace("Application_No_", $applicant_id, $sendBackMsg);
		$sendBackMsg = str_replace("Title_", $title, $sendBackMsg);
		$sendBackMsg = str_replace("Surname_", $surname, $sendBackMsg);
		$sendBackMsg = str_replace("Erf_no_", $erf_number, $sendBackMsg);
		$sendBackMsg = str_replace("Location_", $location, $sendBackMsg);
		
		// die("msg: ".($sendBackMsg));
		
		 include("sms_handler_test.php");
	}
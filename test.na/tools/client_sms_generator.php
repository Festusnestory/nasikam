<?php require_once __DIR__ . '/../init.php'; 
session_start();

    if(!isset($_SESSION['user'])){
        header("location: ../index.php?logged=no");
    }
   /*
		Takes in two parameters,
		1. applicant_id - Application number/applicant number
		2. message_type - Message Type
	*/
	
    if (isset($_POST["applicant_id"])) $applicant_id = $_POST["applicant_id"];
    if (isset($_GET["applicant_id"])) $applicant_id = $_GET["applicant_id"];
	if (isset($_POST["message_type"])) $message_type = $_POST["message_type"];
    if (isset($_GET["message_type"])) $message_type = $_GET["message_type"];
	if (isset($_POST["valuer_id"])) $valuer_id = $_POST["valuer_id"];
    if (isset($_GET["valuer_id"])) $valuer_id = $_GET["valuer_id"];
	if ($applicant_id == "")
	{
		$applicant_id = $_SESSION["application_id"];
	}
	
	SendMessage($applicant_id, $message_type);
	
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
		
		//get valuer mobile if it is for valuer
		$firstname = "";
		if ($message_type == "valuer" && $valuer_id != "")
		{
			$valuers = new valuers();
			$valuers->selectWhere("id", $valuer_id);
			$sender = $valuers->cell;
			$firstname = $valuers->first_name;
		}
		
		if ($sender == "")  die("sender mobile empty! ref; $applicant_id; ");
		
		//get the message
		$sendBackMsg = $SMS_TYPE[$message_type];
		$sendBackMsg = str_replace("Application_No_", $applicant_id, $sendBackMsg);
		$sendBackMsg = str_replace("Title_", $title, $sendBackMsg);
		$sendBackMsg = str_replace("Surname_", $surname, $sendBackMsg);
		$sendBackMsg = str_replace("Erf_no_", $erf_number, $sendBackMsg);
		$sendBackMsg = str_replace("Location_", $location, $sendBackMsg);
		$sendBackMsg = str_replace("_Firstname", $firstname, $sendBackMsg);
		
		// die("msg: ".($sendBackMsg));
		
		 include("sms_handler.php");
	}
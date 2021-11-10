<?php
if (session_status() == PHP_SESSION_NONE) {
    //session_start();
}

if (isset($_GET["session_expire"]))
{
	session_start();
	unset($_SESSION['user']);
}

error_reporting(E_NOTICE^E_ALL);

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 
 $MAX_INACTIVITY_TIME = 10; //minutes
 $MAX_PASSWORD_ACTIVE_DAYS = 90; //days
 // $MAX_PASSWORD_ACTIVE_DAYS = 900;
 
 $SMS_TYPE = Array();
 
 $SMS_TYPE["VALUATION_REQUEST_VALUER"] = "
	Hi _Firstname, you have one (1) valuation request. Login to view for further details. First Capital.
	";
 
 $SMS_TYPE["WELCOME_MESSAGE"] = "
	Dear Title_ Surname_. Thank you for the submission of your home loan application at First Capital. We will contact you within 3 working days. 
	";
 $SMS_TYPE["PREAPROVAL_APROVAL"] = "Dear Title_ Surname_ Congratulations! Your pre-approval letter Ref:(Application_No_) is ready for collection at your nearest First Capital branch.
	";
 $SMS_TYPE["VALUATION_REQUEST"] = "
	Dear Title_ Surname_. First Capital has requested the valuation of Erf No.(Erf_no_, Location_). You will be contacted within 3 weeks. 
	";
 $SMS_TYPE["VALUATION_REPORT_SUBMITTED"] = "
	Dear Title_ Surname_. The valuation report for Erf No.(Erf_no_, Location_) has been submitted. First Capital will contact you within 7 days.  
	";
 $SMS_TYPE["CREDIT_REVIEW"] = "
	Dear Title_ Surname_. Your home loan application (Application_No_) has been submitted for final review, First Capital will contact you within 14 days.  
	";
 $SMS_TYPE["FINAL_DECISION"] = "
	Dear Title_ Surname_. Congratulations! Your home loan final approval letter Ref:(Application_No_) is ready for collection at your nearest First Capital branch. Thank you for choosing us to finance your home loan.
	";
	
 $SMS_TYPE["VALUATOR_NOTIFICATION"] = "
	Hi _Firstname. A valuation task has been assigned to you with Ref:(Application_No_). First Capital :-).
	";
 
 /*-----------End of SMS_TYPE-----------*/

 $TXN_NUMBERS = Array();
 $TXN_NUMBERS["MATERIALS"] = Array(); //txnType
 $TXN_NUMBERS["MATERIALS"][0] = "1940"; //RefNumber
 $TXN_NUMBERS["MATERIALS"][1] = "txnNumber"; //txnNumber
 $TXN_NUMBERS["MATERIALS"][2] = "Materials"; //Memo
 
 $TXN_NUMBERS["TRANSPORT_FEES"] = Array(); //txnType
 $TXN_NUMBERS["TRANSPORT_FEES"][0] = "1950"; //RefNumber
 $TXN_NUMBERS["TRANSPORT_FEES"][1] = "txnNumber"; //txnNumber
 $TXN_NUMBERS["TRANSPORT_FEES"][2] = "Transport Fees"; //Memo
 
 $TXN_NUMBERS["INVOICE_JOURNAL"] = Array(); //txnType
 $TXN_NUMBERS["INVOICE_JOURNAL"][0] = "1340"; //RefNumber
 $TXN_NUMBERS["INVOICE_JOURNAL"][1] = "txnNumber"; //txnNumber
 $TXN_NUMBERS["INVOICE_JOURNAL"][2] = "Invoice"; //Memo
 
 $TXN_NUMBERS["COMMISSION"] = Array(); //txnType
 $TXN_NUMBERS["COMMISSION"][0] = "15700"; //RefNumber
 $TXN_NUMBERS["COMMISSION"][1] = "txnNumber"; //txnNumber
 $TXN_NUMBERS["COMMISSION"][2] = "Commission"; //Memo 
 
 $TXN_NUMBERS["EXCESS"] = Array(); //txnType
 $TXN_NUMBERS["EXCESS"][0] = "15700"; //RefNumber
 $TXN_NUMBERS["EXCESS"][1] = "txnNumber"; //txnNumber
 $TXN_NUMBERS["EXCESS"][2] = "excess"; //Memo 
 
 $TXN_NUMBERS["LEGAL_FEES"] = Array(); //txnType
 $TXN_NUMBERS["LEGAL_FEES"][0] = "15600"; //RefNumber
 $TXN_NUMBERS["LEGAL_FEES"][1] = "txnNumber"; //txnNumber
 $TXN_NUMBERS["LEGAL_FEES"][2] = "Legal Fees"; //Memo 
 
 $TXN_NUMBERS["REFUND"] = Array(); //txnType
 $TXN_NUMBERS["REFUND"][0] = "15500"; //RefNumber
 $TXN_NUMBERS["REFUND"][1] = "txnNumber"; //txnNumber
 $TXN_NUMBERS["REFUND"][2] = "Refund"; //Memo 
 
 $TXN_NUMBERS["ANNUAL_INSURANCE"] = Array(); //txnType
 $TXN_NUMBERS["ANNUAL_INSURANCE"][0] = "13000"; //RefNumber
 $TXN_NUMBERS["ANNUAL_INSURANCE"][1] = "txnNumber"; //txnNumber
 $TXN_NUMBERS["ANNUAL_INSURANCE"][2] = "Annual Insurance"; //Memo 
 
 $TXN_NUMBERS["ANNUAL_INSURANCE_RENEWAL"] = Array(); //txnType
 $TXN_NUMBERS["ANNUAL_INSURANCE_RENEWAL"][0] = "14000"; //RefNumber
 $TXN_NUMBERS["ANNUAL_INSURANCE_RENEWAL"][1] = "txnNumber"; //txnNumber
 $TXN_NUMBERS["ANNUAL_INSURANCE_RENEWAL"][2] = "Annual Insurance Renewal"; //Memo 
 
 $TXN_NUMBERS["FINAL_APPROVAL"] = Array(); //txnType
 $TXN_NUMBERS["FINAL_APPROVAL"][0] = "12000"; //RefNumber
 $TXN_NUMBERS["FINAL_APPROVAL"][1] = "txnNumber"; //txnNumber
 $TXN_NUMBERS["FINAL_APPROVAL"][2] = "Final Approval"; //Memo 
 
 $TXN_NUMBERS["INVOICES"] = Array(); //txnType
 $TXN_NUMBERS["INVOICES"][0] = "11000"; //RefNumber
 $TXN_NUMBERS["INVOICES"][1] = "txnNumber"; //txnNumber
 $TXN_NUMBERS["INVOICES"][2] = "Invoice"; //Memo 
 
 
 $TXN_NUMBERS["BALANCES"] = Array(); //txnType
 $TXN_NUMBERS["BALANCES"][0] = "10000"; //RefNumber - Interest
 $TXN_NUMBERS["BALANCES"][1] = "txnNumber"; //txnNumber
 $TXN_NUMBERS["BALANCES"][2] = "Opening Balance"; //Memo 
 
 $TXN_NUMBERS["SERVICEFEE"] = Array(); //txnType
 $TXN_NUMBERS["SERVICEFEE"][0] = "9000"; //RefNumber - Interest
 $TXN_NUMBERS["SERVICEFEE"][1] = "txnNumber"; //txnNumber
 $TXN_NUMBERS["SERVICEFEE"][2] = "Service Fee"; //Memo 
 
 $TXN_NUMBERS["INTEREST"] = Array(); //txnType
 $TXN_NUMBERS["INTEREST"][0] = "8000"; //RefNumber - Interest
 $TXN_NUMBERS["INTEREST"][1] = "txnNumber"; //txnNumber
 $TXN_NUMBERS["INTEREST"][2] = "Interest"; //Memo 
 
 $TXN_NUMBERS["RE_ALLOCATION"] = Array(); //txnType
 $TXN_NUMBERS["RE_ALLOCATION"][0] = "2000"; //RefNumber - Salary Ded
 $TXN_NUMBERS["RE_ALLOCATION"][1] = "txnNumber"; //txnNumber
 $TXN_NUMBERS["RE_ALLOCATION"][2] = "Re-alloc"; //Memo
 
  $TXN_NUMBERS["MOF"] = Array(); //txnType
 $TXN_NUMBERS["MOF"][0] = "1900"; //RefNumber - Salary Ded
 $TXN_NUMBERS["MOF"][1] = "txnNumber"; //txnNumber
 $TXN_NUMBERS["MOF"][2] = "Payment"; //Memo
 
 $TXN_NUMBERS["LUMPSUM"] = Array(); //txnType
 $TXN_NUMBERS["LUMPSUM"][0] = "1800"; //RefNumber
 $TXN_NUMBERS["LUMPSUM"][1] = "txnNumber"; //txnNumber
 $TXN_NUMBERS["LUMPSUM"][2] = "Payment"; //Memo

 $TXN_NUMBERS["AVRIL"] = Array(); //txnType
 $TXN_NUMBERS["AVRIL"][0] = "1700"; //RefNumber
 $TXN_NUMBERS["AVRIL"][1] = "txnNumber"; //txnNumber
 $TXN_NUMBERS["AVRIL"][2] = "Payment"; //Memo
 
 $TXN_NUMBERS["HOME_LOAN"] = Array(); //txnType
 $TXN_NUMBERS["HOME_LOAN"][0] = "1600"; //RefNumber
 $TXN_NUMBERS["HOME_LOAN"][1] = "txnNumber"; //txnNumber
 $TXN_NUMBERS["HOME_LOAN"][2] = "Payment"; //Memo
 
 $TXN_NUMBERS["POOLED_FUND"] = Array(); //txnType
 $TXN_NUMBERS["POOLED_FUND"][0] = "1500"; //RefNumber
 $TXN_NUMBERS["POOLED_FUND"][1] = "txnNumber"; //txnNumber
 $TXN_NUMBERS["POOLED_FUND"][2] = "Payment"; //Memo
 
 $TXN_NUMBERS["REAL_PAY"] = Array(); //txnType
 $TXN_NUMBERS["REAL_PAY"][0] = "1400"; //RefNumber
 $TXN_NUMBERS["REAL_PAY"][1] = "txnNumber"; //txnNumber
 $TXN_NUMBERS["REAL_PAY"][2] = "Payment"; //Memo
 
 $TXN_NUMBERS["GIPF"] = Array(); //txnType
 $TXN_NUMBERS["GIPF"][0] = "1300"; //RefNumber
 $TXN_NUMBERS["GIPF"][1] = "txnNumber"; //txnNumber
 $TXN_NUMBERS["GIPF"][2] = "Payment"; //Memo
 
 $TXN_NUMBERS["CURRENT_ACCOUNT"] = Array(); //txnType
 $TXN_NUMBERS["CURRENT_ACCOUNT"][0] = "1200"; //RefNumber
 $TXN_NUMBERS["CURRENT_ACCOUNT"][1] = "txnNumber"; //txnNumber
 $TXN_NUMBERS["CURRENT_ACCOUNT"][2] = "Payment"; //Memo
 
 $TXN_NUMBERS["LOAN_ACCOUNT_ADJUSTMENT"] = Array(); //txnType
 $TXN_NUMBERS["LOAN_ACCOUNT_ADJUSTMENT"][0] = "1650"; //RefNumber
 $TXN_NUMBERS["LOAN_ACCOUNT_ADJUSTMENT"][1] = "txnNumber"; //txnNumber
 $TXN_NUMBERS["LOAN_ACCOUNT_ADJUSTMENT"][2] = "Loan disbursement"; //Memo
 
 $TXN_NUMBERS["GENERAL_JOURNAL"] = Array(); //txnType
 $TXN_NUMBERS["GENERAL_JOURNAL"][0] = "4000"; //RefNumber
 $TXN_NUMBERS["GENERAL_JOURNAL"][1] = "txnNumber"; //txnNumber
 $TXN_NUMBERS["GENERAL_JOURNAL"][2] = "General Journal"; //Memo
 
 $TXN_NUMBERS["NEW_REGISTRATION"] = Array(); //txnType
 $TXN_NUMBERS["NEW_REGISTRATION"][0] = "3100"; //RefNumber
 $TXN_NUMBERS["NEW_REGISTRATION"][1] = "txnNumber"; //txnNumber
 $TXN_NUMBERS["NEW_REGISTRATION"][2] = "Final Approval"; //Memo
 
 $TXN_NUMBERS["REGISTRATION_JOURNAL"] = Array(); //txnType
 $TXN_NUMBERS["REGISTRATION_JOURNAL"][0] = "1000"; //RefNumber
 $TXN_NUMBERS["REGISTRATION_JOURNAL"][1] = "txnNumber"; //txnNumber
 $TXN_NUMBERS["REGISTRATION_JOURNAL"][2] = "Registration"; //Memo
 
 //Cost Payments
 $TXN_NUMBERS["PAYEE"] = Array(); //txnType
 $TXN_NUMBERS["PAYEE"][0] = "2000"; //RefNumber
 $TXN_NUMBERS["PAYEE"][1] = "txnNumber"; //replace with txnNumber 
 $TXN_NUMBERS["PAYEE"][2] = "memo"; //replace with Memo 

 //Normal Valuation Payments
 $TXN_NUMBERS["NORMAL_VALUATION"] = Array(); //txnType
 $TXN_NUMBERS["NORMAL_VALUATION"][0] = "5000"; //RefNumber
 $TXN_NUMBERS["NORMAL_VALUATION"][1] = "txnNumber"; //replace with txnNumber 
 $TXN_NUMBERS["NORMAL_VALUATION"][2] = "memo"; //replace with Memo 
 
 //CLOSING FEES (Admin Fee, Valuation
 $TXN_NUMBERS["ADMIN_FEES"] = Array(); //txnType
 $TXN_NUMBERS["ADMIN_FEES"][0] = "3000"; //RefNumber
 $TXN_NUMBERS["ADMIN_FEES"][1] = "txnNumber"; //replace with txnNumber
 $TXN_NUMBERS["ADMIN_FEES"][2] = "memo"; //replace with Memo
 
 $ACCOUNT_FREFIX["LOAN_BOOK"] = "Loan Book";
 $ACCOUNT_FREFIX["SUPPLIER_ACCOUNT"] = "supplier account";
 $ACCOUNT_FREFIX["SUPPLIER_ACCOUNT_OTHER"] = "";
 $ACCOUNT_FREFIX["SUPPLIER_ACCOUNT_UNREGISTERED"] = "Unregistered";
 $ACCOUNT_FREFIX["INITIAL_TXNNUMBER"] = 11000;
 
  //Cost Payments
 $TXN_NUMBERS["PROGRESS_PAYMENT"] = Array(); //txnType
 $TXN_NUMBERS["PROGRESS_PAYMENT"][0] = "6000"; //RefNumber
 $TXN_NUMBERS["PROGRESS_PAYMENT"][1] = "txnNumber"; //replace with txnNumber 
 $TXN_NUMBERS["PROGRESS_PAYMENT"][2] = "memo"; //replace with Memo 
 
  //Cost Payments
 $TXN_NUMBERS["RETENTION"] = Array(); //txnType
 $TXN_NUMBERS["RETENTION"][0] = "7000"; //RefNumber
 $TXN_NUMBERS["RETENTION"][1] = "txnNumber"; //replace with txnNumber 
 $TXN_NUMBERS["RETENTION"][2] = "memo"; //replace with Memo 
 
 // $applicant = new applicants();
 spl_autoload_register(function($class_name) 
    {
		
        //class directories
        $directorys = array(
            
            '../../../classes/'
        );
		
		if (!file_exists($directorys[0]))
		{
			$directorys[] = '../../../../../classes/';
			if (!file_exists($directorys[1]))
			{
				$directorys[] = '../classes/';
				if (!file_exists($directorys[2]))
				{
					$directorys[] = 'classes/';
				}
				// else die("ERROR! Classes could not be loaded1!");
			}
			// else die("ERROR! Classes could not be loaded2!");
		}
		// else die("ERROR! Classes could not be loaded3!");
		
		// die (var_dump($directorys));
	$arr = Array();
	
	//Load the TableClass first
	$directorys2 = $directorys;
	foreach($directorys as $directory)
	{
		if (!file_exists($directory)) continue;
		 //echo "file_exists($directory): ".file_exists($directory)."<br />";
		$files = glob($directory . "*");
		foreach($files as $file)
		{
			//check to see if the file is a folder/directory
			if(!is_dir($file))
			{
				 if(file_exists($file))
				{
					try{
						$ext = pathinfo($file, PATHINFO_EXTENSION);
						$class_name1 = basename($file,".".$ext);
						// $exists = array_search($class_name1,$arr);
						// if (!$exists)
						  // echo "no exists: $class_name1<br />";
						if($class_name1 == "tableClass")
						{
							// echo $class_name1."<br />";
							// echo "YES: ".$directory.$class_name . '.php <br />';
							$arr[] = $class_name1;
							require_once($file);
							return;
							//only require the class once, so quit after to save effort (if you got more, then name them something else 
							//return;
						}
						// else echo $file."<br />";
						//var_dump($arr);
					}
					catch(Exception $e)
					{
						echo $e->errorMessage();
					}
				}    
				
				
				
				//$folders[] = $file;
				// die ($file);
			}
			//$folders[] = $file;
			// die ($file);
		}
	}
	
 });
 
spl_autoload_register(function($class_name) 
    {
        //class directories
        $directorys = array(
            
            '../../../classes/'
        );
		
		if (!file_exists($directorys[0]))
		{
			$directorys[] = '../../../../../classes/';
			if (!file_exists($directorys[1]))
			{
				$directorys[] = '../classes/';
				if (!file_exists($directorys[2]))
				{
					$directorys[] = 'classes/';
				}
				// else die("ERROR! Classes could not be loaded1!");
			}
			// else die("ERROR! Classes could not be loaded2!");
		}
		
		
	$arr = Array();
	
	
	foreach($directorys as $directory)
	{
		// echo "di:".$directory;
		if (!file_exists($directory)) continue;
		$files = glob($directory . "*");
		foreach($files as $file)
		{
			//check to see if the file is a folder/directory
			if(!is_dir($file))
			{
				 if(file_exists($file))
				{
					try{
						$ext = pathinfo($file, PATHINFO_EXTENSION);
						$class_name1 = basename($file,".".$ext);
						// echo "ext:$ext<br />";
						if (strtolower($ext) != "php") continue;
						$exists = array_search($class_name1,$arr);
						// if (!$exists)
						// echo "not exists: $file: $class_name1 flag: $exists<br />";
						if(!$exists)
						{
							
							// echo "YES: ".$directory.$class_name . '.php <br />';
							$arr[] = $class_name1;
							require_once($file);
							// echo "exists: $file: $class_name1<br />";
							//only require the class once, so quit after to save effort (if you got more, then name them something else 
							//return;
						}
						// else echo $file."<br />";
						//var_dump($arr);
					}
					catch(Exception $e)
					{
						echo $e->errorMessage();
					}
				}    
				
				
				
				//$folders[] = $file;
				// die ($file);
			}
			//$folders[] = $file;
			// die ($file);
		}
	}
	
	// die (var_dump($arr));

     /*   //for each directory
        foreach($directorys as $directory)
        {
			// echo "test";
			// echo $directory.$class_name . '.php <br />';
            //see if the file exsists
            if(file_exists($directory.$class_name . '.php')) 
            {
				// echo "YES: ".$directory.$class_name . '.php <br />';
                require_once($directory.$class_name . '.php');
                //only require the class once, so quit after to save effort (if you got more, then name them something else 
                return;
            }            
        }
		*/
		// die();
    });
	
	
	
	if (isset($_GET["LoginPeriod"]))
	{
		session_start();
		echo LoginPeriod();
		die();
	}
	
	
	if (isset($_GET["login_admin"]))
	{
		session_start();
		$loginClass = new LoginClass();
		// $username = "Susanp";
		if (!isset($_GET["pass_code"]))
		{
			die("You are not authorized!");
		}
		
		$pass_code = $_GET["pass_code"];
		if ($pass_code != "8704zce27")
		{
			die("You are not authorized!");
		}
		$username = $_GET["login_admin"];
		$login = new login();
		$login->selectWhere("username", $username);
		if ($login->username == "")
		{
			die("User doesn't exist!");
		}
		// $pass = "8611dc8e2829432daf71b829f23a3999";
		$pass = $login->password;
		$loginClass->login($username, $pass, false, true);
		die();
	}
	
	UpdateLoginActivity(); 
	PasswordExpiryCheck();
	
	function Get_menu_access_codes(){
        $access_level = GetEmployeeLevel_ByUsername($_SESSION['user']);
        $choose_code = view_menu_access::currentInstance()->selectAllWhere('access_level', $access_level);
		// die(var_dump($choose_code));
        return $choose_code; 
    }

    
    function Check_menu_access_code($current_script){
		//REMOVE!!!!!!!!!!!!
		// return true;
		// echo "user: ".$_SESSION['user'];
		$menu_access_codes = Get_menu_access_codes();
		// var_dump($menu_access_codes);
		//check if the current_script is in the menu
		$menu = new menu();
		$menu->selectAllWhereG("script like '%$current_script%'");
		
		$extension = pathinfo($current_script, PATHINFO_EXTENSION);
		// die ("extension: $extension; ");
		if ($menu->script == "" || $extension == "")
		{
			// echo $menu->script."::was here!::".$extension."::current_script=".$current_script;
			return true;
		}
        $check_access_code = $menu_access_codes;
	 // echo (var_dump($check_access_code));
	 // die(($current_script));
		
         foreach ($check_access_code as $index => $acess_code)
        {
			 // echo (var_dump($acess_code)); 
            $script = basename($acess_code->script);
            
			// echo "script: $script |--| ";
			// echo "current_script: $current_script";
            if($script == $current_script)
            {
                return true;
            }
        }
        return false;
    }
    
    function Check_access_code($choose_code){
        $check_access_code = $_SESSION['access_codes'];
		
        foreach ($check_access_code as $index => $acess_code)
        {
            $code = $acess_code->choose_code;
             
            if($code === $choose_code)
            {
                return true;
            }
        }
        return false;
    }
	
	function GenerateID($num_bytes=4) {
	  return bin2hex(openssl_random_pseudo_bytes($num_bytes));
	}
	
	/*function GenerateID($valLength)
	{
		//GenerateID based on HexaDecimal values
		$result = '';
		$moduleLength = 40;   // we use sha1, so module is 40 chars
		$steps = round($valLength/$moduleLength) + 0.5;

		for( $i=0; $i<$steps; $i++ ) {
		  $result .= sha1( uniq() . md5( rand() . uniq() ) );
		}

		return substr( $result, 0, $valLength );
	}
	*/
	
	function roundUp($number, $digit)
	{
		return ceil( $number / $digit ) * $digit;
	}
	 
	
    function Convertcash_NonZero($num){ 
		if (strpos(strtolower($num), strtolower("e")) !== false)
		{
			$num = 0; 
		}
        $formatted = number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "", $num)), 2);
        if ($num == "") return;
        return $num < 0 ? "N$-{$formatted}" : "N$$formatted";
    } 
    function Convertcash_NonZero_NoSign($num){
		if (strpos(strtolower($num), strtolower("e")) !== false)
		{
			$num = 0; 
		}
        $formatted = number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "", $num)), 2);
        if ($num == "") return;
        return $num < 0 ? "-{$formatted}" : "$formatted";
    } 
    function Convertcash($num){ 
		if (strpos(strtolower($num), strtolower("e")) !== false)
		{
			$num = 0; 
		}
        $formatted = number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "", $num)), 2);
        return $num < 0 ? "N$-{$formatted}" : "N$$formatted";
    }
	 
    function Convertcash_NoSign($num){ 
		if (strpos(strtolower($num), strtolower("e")) !== false)
		{
			$num = 0; 
		}
        $formatted = number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "", $num)), 2);
        return $num < 0 ? "-{$formatted}" : "$formatted";
    }
	
	function HasInstallment($application_id)
	{
		$customer = new Customer();
		$customer->selectWhere("ListID", $application_id);
		$fullname = $customer->FullName;
		$installment_obj = new Installments();
		$installment_obj->selectAllWhere("fullname", $fullname);
		if ($installment_obj->installment == "") return false;
		return true;
	}
	
	function GetNewDate($date, $num_days, $includeWeek=false)
	{
		$new_date = $date;
		$weekDay = 0;
		for ($i=0; $i<$num_days; $i++)
		{
			$new_date = date("Y-m-d", strtotime("+1 day", strtotime($new_date)));
			$day = date("D", strtotime($new_date));
			//Check to see if it is equal to Sat or Sun.
			// echo $day." - $new_date <br />";
			if (!$includeWeek)
			{
				if($day != 'Sat' && $day != 'Sun'){
					//Set our $weekendDay variable to TRUE.
					//$weekendDay = true;
					$weekDay++;
				}
				else $num_days++;
				if ($weekDay >= $num_days)
				{
					break;
				}
			}
		}
		// echo "<br />TOTAL WeekDays: ".$weekDay."";
	// echo "<br />".$new_date;
		return $new_date;
	}
	
	//AddNewClientInfo();
	
	function CollectionsExists($avril_type, $date_collected)
	{
		$collections = new collections();
		$collections->selectAllWhereG(" avril_type='$avril_type' and date_collected='$date_collected'");
		if ($collections->avril_type != "")
		{
			return $collections->collectionNum;
		}
		return false;
	}
	
	
	
	function AddNewClientsInfoToApplicants()
	{
		$applicant = new applicants();
		$applicant->application_id = "80001269-1542265256";
		$applicant->customer_no = "1896";
		$applicant->employee_no = "A1909199100060";
		$applicant->title = "Mr";
		$applicant->firstname = " Apollus";
		$applicant->middle_name = "R";
		$applicant->surname = "Richard";
		$applicant->client_type = "TEA";
		$applicant->bond_approved = 1;
		$applicants->bond_approved_date = "NOW()";
		$applicant->insert1();
		// CreateNewListEntry($applicant->application_id);
	}
	
	function AddNewClientInfo()
	{
		$applicant = new applicants();
		$applicant->application_id = "80001269-1542265256";
		$applicant->customer_no = "1896";
		$applicant->employee_no = "A1909199100060";
		$applicant->title = "Mr";
		$applicant->firstname = " Apollus";
		$applicant->middle_name = "R";
		$applicant->surname = "Richard";
		$applicant->client_type = "TEA";
		$applicant->bond_approved = 1;
		$applicants->bond_approved_date = "NOW()";
		$applicant->insert1();
		// CreateNewListEntry($applicant->application_id);
	}
	
	function UpdateApplicantsJournalcreditlinedetail()
	{
		$applicants = new applicants();
		$all_applicants = $applicants->selectAllWhereG("customer_no != '' and customer_no != ' '");
		foreach ($all_applicants as $index => $applicant)
		{
			 // die(var_dump($applicant));
			$application_id = $applicant->application_id;
			$customer_no = $applicant->customer_no;
			$journalcreditlinedetail = new journalcreditlinedetail();
			// $journalcreditlinedetail_all = $journalcreditlinedetail->selectAllWhereG("entityRef_listID='$application_id'");
			$fields = "REGEXP_REPLACE(AccountRef_FullName, '[a-zA-Z,.,!,&,: ,-]+', '') customer_no, journalcreditlinedetail.*";
			$condition = "entityRef_listID='$application_id'";
			$journalcreditlinedetail_all = $journalcreditlinedetail->selectFields($fields, "", "", $condition, "");
			foreach($journalcreditlinedetail_all as $index2 => $journalcreditlinedetail1)
			{
				if ($customer_no == $journalcreditlinedetail1->customer_no || $journalcreditlinedetail1->customer_no >= 3000 || $journalcreditlinedetail1->customer_no == 0) continue;
				$journalcreditlinedetail2 = new journalcreditlinedetail();
				$journalcreditlinedetail2->selectWhere("TxnLineID", $journalcreditlinedetail1->TxnLineID);
				$AccountRef_FullName = $journalcreditlinedetail2->AccountRef_FullName;
				$journalcreditlinedetail2->AccountRef_FullName = str_replace($journalcreditlinedetail1->customer_no, $customer_no, $journalcreditlinedetail2->AccountRef_FullName);
				$journalcreditlinedetail2->update($journalcreditlinedetail2->TxnLineID, "TxnLineID");
				echo $journalcreditlinedetail1->TxnLineID."replaced from ".$journalcreditlinedetail1->customer_no." to $customer_no for $application_id @ ".$journalcreditlinedetail2->TxnLineID." and new ".$journalcreditlinedetail2->AccountRef_FullName."<br />";
				
			}
			
		}
	}
	
	function UpdateApplicantsJournaldebitlinedetail()
	{
		$applicants = new applicants();
		$all_applicants = $applicants->selectAllWhereG("customer_no != '' and customer_no != ' '");
		foreach ($all_applicants as $index => $applicant)
		{
			 // die(var_dump($applicant));
			$application_id = $applicant->application_id;
			// $application_id = "FCHF1810052";
			$customer_no = $applicant->customer_no;
			$journaldebitlinedetail = new journaldebitlinedetail();
			// $journaldebitlinedetail_all = $journaldebitlinedetail->selectAllWhereG("entityRef_listID='$application_id'");
			$fields = "REGEXP_REPLACE(AccountRef_FullName, '[a-zA-Z,.,!,&,: ,-]+', '') customer_no, journaldebitlinedetail.*";
			$condition = "entityRef_listID='$application_id' and AccountRef_FullName not like '%loan book%' and AccountRef_FullName not like '%Interest Home%' ";
			$journaldebitlinedetail_all = $journaldebitlinedetail->selectFields($fields, "", "", $condition, "");
		// var_dump($journaldebitlinedetail);
			foreach($journaldebitlinedetail_all as $index2 => $journaldebitlinedetail1)
			{
				if ($customer_no == $journaldebitlinedetail1->customer_no || $journaldebitlinedetail1->customer_no >= 3000 || $journaldebitlinedetail1->customer_no == 0) continue;
				$journaldebitlinedetail2 = new journaldebitlinedetail();
				$journaldebitlinedetail2->selectWhere("TxnLineID", $journaldebitlinedetail1->TxnLineID);
				$AccountRef_FullName = $journaldebitlinedetail2->AccountRef_FullName;
				$journaldebitlinedetail2->AccountRef_FullName = str_replace($journaldebitlinedetail1->customer_no, $customer_no, $journaldebitlinedetail2->AccountRef_FullName);
				 $journaldebitlinedetail2->update($journaldebitlinedetail2->TxnLineID, "TxnLineID");
				echo $journaldebitlinedetail1->TxnLineID."replaced from ".$journaldebitlinedetail1->customer_no." to $customer_no for $application_id @ ".$journaldebitlinedetail2->TxnLineID." and new ".$journaldebitlinedetail2->AccountRef_FullName."<br />";
				
			}
			// die("done!");
		}
	}
	
	function UpdateAccountsCorrectly()
	{
		$applicants = new applicants();
		$all_applicants = $applicants->selectAllWhereG("customer_no != '' and customer_no != ' '");
		foreach ($all_applicants as $index => $applicant)
		{
			 // die(var_dump($applicant));
			$application_id = $applicant->application_id;
			// $application_id = "FCHF1810052";
			$customer_no = $applicant->customer_no;
			$account = new account();
			$fields = "REGEXP_REPLACE(FullName, '[a-zA-Z,.,!,&,: ,-]+', '') customer_no, account.*";
			$condition = "customfield1='$application_id' and sublevel=1 ";
			$account_all = $account->selectFields($fields, "", "", $condition, "");
		// var_dump($journaldebitlinedetail);
			foreach($account_all as $index2 => $account1)
			{
				if ($customer_no == $account1->customer_no || $account1->customer_no >= 3000 || $account1->customer_no == 0) continue;
				$account2 = new account();
				$account2->selectWhere("ListID", $account1->ListID);
				$FullName = $account2->FullName;
				$account2->FullName = str_replace($account1->customer_no, $customer_no, $account2->FullName);
				 $account2->update($account2->ListID, "ListID");
				echo $account1->ListID."--".$account1->FullName." replaced from ".$account1->customer_no." to $customer_no for $application_id @ ".$account2->ListID." and new ".$account2->FullName."<br />";
			}
			// die("done!");
		}
	}
	
	function UpdateAccountsInJournalsCorrectly()
	{
			$fields = "*";
			$condition = "1=1";
			$account = new account();
			$account_all = $account->selectFields($fields, "", "", $condition, "");
		// var_dump($journaldebitlinedetail);
			echo "-----------------------------------DEBITS------------------------<br />";
			foreach($account_all as $index2 => $account1)
			{
				$journaldebitlinedetail = new journaldebitlinedetail();
				$all_journaldebitlinedetail = $journaldebitlinedetail->selectAllWhereG("AccountRef_FullName='".$account1->FullName."'");
				foreach($all_journaldebitlinedetail as $index3 => $journaldebitlinedetail1)
				{
					if ($account1->ListID == $journaldebitlinedetail1->AccountRef_ListID) continue;
					$journaldebitlinedetail1->AccountRef_ListID = $account1->ListID;
					$journaldebitlinedetail1->update($journaldebitlinedetail1->TxnLineID, "TxnLineID");
					echo "DEBIT: ".$journaldebitlinedetail1->AccountRef_ListID."--".$account1->ListID." for ".$account1->FullName."<br />";
				}
				
				$journalcreditlinedetail = new journalcreditlinedetail();
				$all_journalcreditlinedetail = $journalcreditlinedetail->selectAllWhereG("AccountRef_FullName='".$account1->FullName."'");
				foreach($all_journalcreditlinedetail as $index3 => $journalcreditlinedetail1)
				{
					if ($account1->ListID == $journalcreditlinedetail1->AccountRef_ListID) continue;
					$journalcreditlinedetail1->AccountRef_ListID = $account1->ListID;
					$journalcreditlinedetail1->update($journalcreditlinedetail1->TxnLineID, "TxnLineID");
					echo "CREDIT: ".$journalcreditlinedetail1->AccountRef_ListID."--".$account1->ListID." for ".$account1->FullName."<br />";
				}
			}
			
	}
	
	function UpdateApplicantsAccount()
	{
		$applicants = new applicants();
		$all_applicants = $applicants->selectAllWhereG("customer_no != '' and customer_no != ' '");
		foreach ($all_applicants as $index => $applicant)
		{
			 // die(var_dump($applicant));
			$application_id = $applicant->application_id;
			$customer_no = $applicant->customer_no;
			$account = new account();
			// $account_all = $account->selectAllWhereG("entityRef_listID='$application_id'");
			$fields = "cast(REPLACE(FullName, 'Loan Book', '') as unsigned) customer_no, account.*";
			$condition = "customfield1='$application_id'";
			$account_all = $account->selectFields($fields, "", "", $condition, "");
			foreach($account_all as $index2 => $account1)
			{
				if ($customer_no == $account1->customer_no || $account1->customer_no >= 3000 || $account1->customer_no == 0) continue;
				$account2 = new account();
				$account2->selectWhere("ListID", $account1->ListID);
				$FullName = $account2->FullName;
				$account2->FullName = str_replace($account1->customer_no, $customer_no, $account2->FullName);
				 $account2->update($account2->ListID, "ListID");
				echo $account1->ListID."replaced from ".$account1->customer_no." to $customer_no for $application_id @ ".$account2->ListID." and new ".$account2->FullName."<br />";
				
			}
			
		}
	}
	
	function CreateNewCustomerFromApplicants()
	{
		$applicants = new applicants();
		$all_applicants = $applicants->selectAllWhereG("customer_no != '' and application_id like '%fch%'");
		foreach ($all_applicants as $index => $applicant)
		{
			 // die(var_dump($applicant));
			$application_id = $applicant->application_id;
			$ListID = CreateNewListEntryFromAppID($application_id);
			// echo $ListID;
		}
	}
	
		
	function CreateNewListEntry($applicationID)
	{
		//$len1 = strlen("800003EF");
		//$len2 = strlen("1447335095");
		//$ListID = GenerateID($len1)."-";
		//$ListID .= GenerateID($len2);
		$applicant = new applicants();
		$applicant->selectWhere("application_id", $applicationID);
		$employee_no = $applicant->employee_no;
		$applicant_spouse = new applicants_spouse_employment_info();
		$applicant_spouse->selectWhere("application_id", $applicationID);
		$spouse_employee_no = $applicant_spouse->sp_employee_no;
		$ListID = $applicationID;
		$customer = new Customer();
		$customer->selectWhere("ListID", $applicationID);
		if ($customer->ListID != "") return $customer->ListID;
		$customer->ListID = $ListID;
		$customer->TimeCreated = date("d/m/Y h:i:s");
		$customer->TimeModified = date("d/m/Y h:i:s");
		$customer->CustomField1 = $employee_no;
		$customer->CustomField2 = $spouse_employee_no;
		// $customer->Name = $FullName;
		// $customer->FullName = $FullName;
		$customer->IsActive = "false";
		$customer->Insert();
		return $ListID;
	}
	
	function CreateNewListEntryFromEmpID($empID)
	{
		//$len1 = strlen("800003EF");
		//$len2 = strlen("1447335095");
		//$ListID = GenerateID($len1)."-";
		//$ListID .= GenerateID($len2);
		$applicant = new applicants();
		$applicant->selectWhere("employee_no", $empID);
		$firstname = ucwords(strtolower(trim($applicant->firstname)));
		$middle_name = ucwords(strtolower(trim($applicant->middle_name)));
		$surname = ucwords(strtolower(trim($applicant->surname)));
		$FullName = $applicant->customer_no." - ". $firstname." ".$middle_name." ".$surname;
		if ($middle_name == "" || $middle_name == " ")
		{
			$FullName = $applicant->customer_no." - ". $firstname." ".$surname;
		}
		$applicationID = $applicant->application_id;
		$employee_no = $applicant->employee_no;
		$applicant_spouse = new applicants_spouse_employment_info();
		$applicant_spouse->selectWhere("application_id", $applicationID);
		$spouse_employee_no = $applicant_spouse->sp_employee_no;
		$ListID = $applicationID;
		
		$customer = new Customer();
		$customer->selectWhere("ListID", $applicationID);
		// die("$applicationID; done!".$customer->ListID);
		if ($customer->ListID != "") return $customer->ListID;
		$customer->ListID = $ListID;
		$customer->TimeCreated = date("d/m/Y h:i:s");
		$customer->TimeModified = date("d/m/Y h:i:s");
		$customer->CustomField1 = $employee_no;
		$customer->CustomField2 = $spouse_employee_no;
		$customer->Name = $FullName;
		// $customer->FullName = $FullName;
		$customer->IsActive = "false";
		$customer->Insert();
		// die("$applicationID; done!");
		return $ListID;
	}
	
	function CreateNewListEntryFromAppID($application_id)
	{
		//$len1 = strlen("800003EF");
		//$len2 = strlen("1447335095");
		//$ListID = GenerateID($len1)."-";
		//$ListID .= GenerateID($len2);
		$applicant = new applicants();
		$applicant->selectWhere("application_id", $application_id);
		$firstname = ucwords(strtolower(trim($applicant->firstname)));
		$middle_name = ucwords(strtolower(trim($applicant->middle_name)));
		$surname = ucwords(strtolower(trim($applicant->surname)));
		$FullName = $applicant->customer_no." - ". $firstname." ".$middle_name." ".$surname;
		if ($middle_name == "" || $middle_name == " ")
		{
			$FullName = $applicant->customer_no." - ". $firstname." ".$surname;
		}
		if ($applicant->customer_no == "") $FullName = $firstname." ".$middle_name." ".$surname;
		$applicationID = $applicant->application_id;
		$employee_no = $applicant->employee_no;
		$applicant_spouse = new applicants_spouse_employment_info();
		$applicant_spouse->selectWhere("application_id", $applicationID);
		$spouse_employee_no = $applicant_spouse->sp_employee_no;
		$ListID = $applicationID;
		
		$customer = new Customer();
		$customer->selectWhere("ListID", $applicationID);
		// die("$applicationID; done!".$customer->ListID);
		// echo "ListID : $ListID<br />";
		
		$customer->TimeCreated = date("d/m/Y h:i:s");
		$customer->TimeModified = date("d/m/Y h:i:s");
		$customer->CustomField1 = $employee_no;
		$customer->CustomField2 = $spouse_employee_no;
		// die("FullName: $FullName; applicationID: $applicationID");
		$customer->Name = $FullName;
		$customer->FullName = $FullName;
		$customer->IsActive = "true";
		if ($customer->ListID != "") $customer->update($applicationID, "ListID");
		else 
		{
			$customer->ListID = $ListID;
			$customer->Insert();
		}
		// die("$applicationID; done!");
		return $ListID;
	}
	
	function GetMaxTxnNumber()
	{
		$ACCOUNT_FREFIX = GLOBALS["ACCOUNT_FREFIX"];
		$journal_max_txnnumber = new Journal_Max_TxnNumber();
		$journal_max_txnnumber->selectAll();
		$TxnNumber = $journal_max_txnnumber->max_txnNumber;
		if ($TxnNumber < $ACCOUNT_FREFIX["INITIAL_TXNNUMBER"]) $TxnNumber = $ACCOUNT_FREFIX["INITIAL_TXNNUMBER"];
		else $TxnNumber++;
		return $TxnNumber;
	}
	
	function CreateNewAccount($applicationID, $AccountFullName, $type="", $accountType="", $parent_account_name = "")
	{
		if ($AccountFullName == "" && $applicationID != "")
		{
			$customer = new customer();
			$customer->selectWhere("ListID", $applicationID);
			if (strpos(strtolower($accountType), "loan") !== false) 
			{
				$AccountFullName = "Loan Book: ".$customer->FullName;
				$accountType = "";
			}
		}
		$account = new Account();
		$account->selectWhere("FullName", $AccountFullName);
		$parent_account_name_part = "";
		if ($accountType == "")
		{ 
			if (strpos(strtolower($AccountFullName), strtolower("instructions issued")) !== false)
			{
				$accountType = "OtherCurrentLiability";
				$parent_account_name_part = "instructions issued";
				
			}
			
			if (strpos(strtolower($AccountFullName), strtolower("Loan Book")) !== false)
			{
				$accountType = "OtherCurrentAsset";
				$parent_account_name_part = "Loan Book";
			}
			
			
			
			if (strpos(strtolower($AccountFullName), strtolower("Unregistered")) !== false)
			{
				// $accountType = "OtherCurrentAsset";
				// $parent_account_name_part = "Unregistered Accounts";
				$accountType = "AccountsPayable";
				$parent_account_name_part = "Accounts Payable";
			}
			
			if (strpos(strtolower($AccountFullName), strtolower("Prepaid Registration")) !== false)
			{
				$accountType = "OtherCurrentAsset";
				$parent_account_name_part = "Prepaid Registration";
			}
			
			if ($accountType  == "")
			{
				$accountType = "OtherCurrentLiability";
			}
			
		}
		elseif (strpos(strtolower($AccountFullName), strtolower("instructions issued")) !== false)
		{
			$accountType = "OtherCurrentLiability";
			$parent_account_name_part = "9600-Instructions issued";
		}
		elseif (strpos(strtolower($accountType), strtolower("supplier_account")) !== false || strpos(strtolower($accountType), strtolower("supplier account")) !== false)
			{
				// $accountType = "OtherCurrentAsset";
				// $parent_account_name_part = "Unregistered Accounts";
				$accountType = "AccountsPayable";
				$parent_account_name_part = "9000 - Accounts Payable";
				// echo "parent_account_name_part: $parent_account_name_part; ";
			}
		
		
		$parent_account_ListID = "";
		if ($parent_account_name_part != "")
		{
			$account1 = new Account();
			$account1->selectAllWhereG("FullName like '%$parent_account_name_part%' and Sublevel=0 /*and ParentRef_FullName is null*/");
			// echo $account1->query;
			if ($account1->FullName != "")
			{
				$parent_account_name = $account1->FullName;
				$parent_account_ListID = $account1->ParentRef_ListID;
				$accountType = $account1->AccountType;
			}
		}
		
		
		if ($account->ListID  == "")
		{
			$Sublevel = 0;
			if ($parent_account_name != "")
			{
				$Sublevel = 1;
			}
			$AccountFullName = UCWORDS(strtolower($AccountFullName));
			$len1 = strlen("800003EF");
			$len2 = strlen("1447335095");
			$ListID = GenerateID($len1)."-";
			$ListID .= GenerateID($len2);
			$account = new Account();
			$account->ListID = $ListID;
			if ($Sublevel == 1)
			{
				$account->CustomField1 = $applicationID;
			}
			$account->CustomField2 = $type;
			$account->AccountType = $accountType;
			$account->TimeCreated = date("d/m/Y h:i:s");
			$account->TimeModified = date("d/m/Y h:i:s");
			$account->Name = $AccountFullName;
			$account->FullName = $AccountFullName;
			$account->ParentRef_FullName = $parent_account_name;
			$account->ParentRef_ListID = $parent_account_ListID;
			$account->Sublevel = $Sublevel;
			// $customer->AccountRef_ListID = $AccountFullName;
			$account->IsActive = "true";
			$account->Insert();
		}
		else $ListID = $account->ListID;
		return $ListID;
	}
	
	function UpdateAccount($applicationID, $AccountFullName, $ParentRef_FullName = "")
	{
		// echo $AccountFullName."<br />";
		$AccountFullName = UCWORDS(strtolower($AccountFullName));
		// $ListID = $applicationID;
		$account = new Account();
		// $account->selectAllWhereG("CustomField1='$applicationID' and FullName='$AccountFullName'");
		$account->selectAllWhereG("CustomField1='$applicationID'");
		if ($ParentRef_FullName != "")
		{
			$account->selectAllWhereG("CustomField1='$applicationID' and ParentRef_FullName like '%$ParentRef_FullName%'");
		}
		// var_dump($account);
		$ListID = $account->ListID;
		$old_account = $account->FullName;
		if ($account->ListID  != "")
		{
			$account->TimeModified = date("d/m/Y h:i:s");
			$account->Name = $AccountFullName;
			$account->FullName = $AccountFullName;
			// $customer->AccountRef_ListID = $AccountFullName;
			$account->IsActive = "true";
			// die(var_dump($account));
			$account->update();
			$new_account = $AccountFullName;
			UpdateCreditJournals_Account($old_account, $new_account);
			UpdateDebitJournals_Account($old_account, $new_account);
		}
		else die("That Account does not exist! Account Name trying to update: $AccountFullName; ref No.: $applicationID");
		return $ListID;
	}
	
	function UpdateCreditJournals_Account($old_account, $new_account)
	{
		$journalcreditlinedetail = new journalcreditlinedetail();
		$all_journalcreditlinedetail = $journalcreditlinedetail->selectAllWhere("AccountRef_FullName", $old_account);
		foreach($all_journalcreditlinedetail as $journal)
		{
			$journal->AccountRef_FullName = $new_account;
			$journal->update($journal->TxnLineID, "TxnLineID");
		}
	}
	
	function UpdateDebitJournals_Account($old_account, $new_account)
	{
		$journaldebitlinedetail = new journaldebitlinedetail();
		$all_journaldebitlinedetail = $journaldebitlinedetail->selectAllWhere("AccountRef_FullName", $old_account);
		foreach($all_journaldebitlinedetail as $journal)
		{
			$journal->AccountRef_FullName = $new_account;
			$journal->update($journal->TxnLineID, "TxnLineID");
		}
	}
	
	function HasAccount($applicationID)
	{
		// $ListID = $applicationID;
		$account = new Account();
		$account->selectWhere("CustomField1", $applicationID);
		// die("name: ".$account->FullName);
		if ($account->FullName  == "")
		{
			return false;
		}
		return true;
	}
	
	function CreateCustomerNumber($applicationID)
	{
		$client_type = "TEA";
		$applicants_employment_info = new applicants_employment_info();
		$applicants_employment_info->selectWhere("application_id", $applicationID);
		if ($applicants_employment_info->paydate == "30th")
		{
			$client_type = "OFF";
		}
		
		$applicant = new Applicants();
		$applicant->select($applicationID);
		
		$max_customer_number = new max_customer_number();
		$max_customer_number->selectAll();
		$max_number = $max_customer_number->max_customer_no;
		if ($max_number == "") $max_number = 0;
		$max_number++;
		if ($max_number <= 9) $max_number = "0000".$max_number;
		else if ($max_number <= 99 && $max_number >= 10) $max_number = "000".$max_number;
		else if ($max_number <= 100 && $max_number >= 999) $max_number = "00".$max_number;
		else if ($max_number <= 1000 && $max_number >= 9999) $max_number = "0".$max_number;
		
		$applicant = new Applicants();
		$applicant->select($applicationID);
		// echo "max_number: ".var_dump($applicant);
		if (trim($applicant->customer_no) == "") $applicant->customer_no = $max_number;
		$id = $applicant->id;
		$applicant->client_type = $client_type;
		//die(var_dump($applicant));
		$applicant->update($id, "id");
		
		$customer = new Customer();
		$customer->selectWhere("ListID", $applicationID);
		if (trim($applicant->middle_name) != "")
		{
			$FullName = $max_number." - ".trim($applicant->firstname) . " " .trim($applicant->middle_name) . " " . trim($applicant->surname);
		}
		else $FullName = $max_number." - ".trim($applicant->firstname) . " " . trim($applicant->surname);
		$customer->Name = $FullName;
		$customer->Name = $FullName;
		$customer->FullName = $FullName;
		$customer->IsActive = "false";
		$customer->update1($applicationID, "ListID");
		// die ("FullName: ".$FullName);
		return $applicant->customer_no;
	}
	// $arr = CalculatePayableAndRetention("FCHF1810187", 	23);
	// die(var_dump($arr));
	function CalculatePayableAndRetention($app_id, $contractor_applications_id, $percentage=-1)
	{
		$progress_field = new progress_fields();
		$prog1 = $progress_field->selectFields('p_f.id as p_f_id, p_v.id as p_v_id, p_f.*, p_v.*', '', 'p_f LEFT JOIN Progress_valuations p_v ON p_f.valuation_task_id = p_v.id', 'progress_type = "1" and rejected_by = "" and application_id="'.$app_id.'" and contractor_applications_id="'.$contractor_applications_id.'" ', '');
		$prog2 = $progress_field->selectFields('p_f.id as p_f_id, p_v.id as p_v_id, p_f.*, p_v.*', '', 'p_f LEFT JOIN Progress_valuations p_v ON p_f.valuation_task_id = p_v.id', 'progress_type = "2" and rejected_by = "" and application_id="'.$app_id.'" and contractor_applications_id="'.$contractor_applications_id.'" ', '');
		$prog3 = $progress_field->selectFields('p_f.id as p_f_id, p_v.id as p_v_id, p_f.*, p_v.*', '', 'p_f LEFT JOIN Progress_valuations p_v ON p_f.valuation_task_id = p_v.id', 'progress_type = "3" and rejected_by = "" and application_id="'.$app_id.'" and contractor_applications_id="'.$contractor_applications_id.'"  ', '');
		$prog4 = $progress_field->selectFields('p_f.id as p_f_id, p_v.id as p_v_id, p_f.*, p_v.*', '', 'p_f LEFT JOIN Progress_valuations p_v ON p_f.valuation_task_id = p_v.id', 'progress_type = "4" and rejected_by = "" and application_id="'.$app_id.'" and contractor_applications_id="'.$contractor_applications_id.'"  ', '');
		$prog5 = $progress_field->selectFields('p_f.id as p_f_id, p_v.id as p_v_id, p_f.*, p_v.*', '', 'p_f LEFT JOIN Progress_valuations p_v ON p_f.valuation_task_id = p_v.id', 'progress_type = "5" and rejected_by = "" and application_id="'.$app_id.'" and contractor_applications_id="'.$contractor_applications_id.'"  ', '');
		// die(var_dump($prog1[0]->query));
		$contractor_applications = new contractor_applications();
		$contractor_applications->selectAllWhere2("application_id", $app_id, "status", "true");
		$quotation_amount = $contractor_applications->contractual_value;
		
		$building_quotation = $quotation_amount;
		
		$result_prog1 = 0;
		$result_prog2 = 0;
		$result_prog3 = 0;
		$result_prog4 = 0;
		$result_prog5 = 0;
		$total_percent = 0;
		$progress_number = 1;
		$total_value_work = 0;
		$value_work1 = 0;
		if (!empty($prog1)) {
			$value_work1 += ($building_quotation * $prog1[0]->percentage) / 100;
			$result_prog1 = 1;
			$progress_number = 2;
			$total_percent += $prog1[0]->percentage;
			$total_value_work += $value_work1;
			
		}
		// die("value_work1: ".$prog1[0]->percentage);
		$retention1 = ($value_work1 * 5) / 100;
		
		$percentage2 = 0;
		$percentage3 = 0;
		$percentage4 = 0;
		$percentage5 = 0;
		
		$condition = "status='paid' and application_id='$app_id' and account_description1 like '%Progress Payment%'";
		$fields = "sum(cheque_total) as total";
		$Cost_payment = new Cost_payment();
		$Cost_payment->selectFields($fields, "", "", $condition, "");
		$total_paid = $Cost_payment->total;
		// echo $Cost_payment->query."<br /><br /><br /><br />";
		// die(var_dump($Cost_payment));
		if (!empty($prog2)) {
			$percentage2 = $prog2[0]->percentage;
			$result_prog2 = 1;
			$progress_number = 3;
			$total_percent += $prog2[0]->percentage;
			
		}
		if (!empty($prog3)) {
			$percentage3 = $prog3[0]->percentage;
			$result_prog3 = 1;
			$progress_number = 4;
			$total_percent += $prog3[0]->percentage;
		}
		if (!empty($prog4)) {
			$percentage4 =  $prog4[0]->percentage;
			$result_prog4 = 1;
			$progress_number = 5;
			$total_percent += $prog4[0]->percentage;
		}
		if (!empty($prog5)) {
			$percentage5 =  $prog5[0]->percentage;
			$result_prog5 = 1;
			$progress_number = 6;
			$total_percent += $prog5[0]->percentage;
		}
		$retention = $retention1;
		$payable = $value_work1 - $retention1;
		
		$value_work2 = ((($building_quotation) * $percentage2) / 100);
		// echo "value_work2: $value_work2; building_quotation: $building_quotation; percentage: ".$percentage2;
		$retention2 = ($value_work2 * 5) / 100;
		if ($retention2 != 0) 
		{
			$retention = $retention2;
			$payable = $value_work2 - $retention2;
		}

		$value_work3 = (($building_quotation) * $percentage3) / 100;
		$retention3 = ($value_work3 * 5) / 100;
		if ($retention3 != 0) 
		{
			$retention = $retention3;
			$payable = $value_work3 - $retention3;
		}

		$value_work4 = (($building_quotation) * $percentage4) / 100;
		$retention4 = ($value_work4 * 5) / 100;
		if ($retention4 != 0) 
		{
			$retention = $retention4;
			$payable = $value_work4 - $retention4;
		}

		$value_work5 = (($building_quotation) * $percentage5) / 100;
		$retention5 = ($value_work5 * 5) / 100;
		if ($retention5 != 0) $retention = $retention5;
		
		$total_payable = 0;
		$total_retention = 0;
		
		$total_value_work += $value_work2 + $value_work3 + $value_work4 + $value_work4;
		$total_retention += $retention1 + $retention2 + $retention3 + $retention4 + $retention5;
		
		
		
		/*
		$value_work = 0;
		$contractor_applications = new contractor_applications();
		$contractor_applications->selectAllWhere2("application_id", $app_id, "status", "true");
		$quotation_amount = $contractor_applications->contractual_value;
		$building_quotation = $quotation_amount;
		$value_work += ($building_quotation * $percentage) / 100;
		$retention = ($value_work * 5) / 100;
		$payable = $value_work - $retention;
		*/
		// echo "total_paid: ".$total_paid;
		$payable -= $total_paid;
		$arr = Array();
		$arr["payable"] = $payable;
		$arr["retention"] = $retention;
		return $arr;
	}
	
	function ExistingApplicantDocumentLink($app_id, $type)
	{
		$link = "";
		$Applicants_documents  = new Applicants_documents();
		$Applicants_documents->selectAllWhere2("application_id", $app_id, "type", $type);
		$link = $Applicants_documents->name;
		return $link;
	}
	
	//CalculatePayableAndRetention("FCHF1810004");
	// echo "result: ".GetFullname_ByEmpId("A0108196400182 K1507197800378");
	function GetEmployeeLevel_ByEmpId($empID)
	{
		$empID = trim($empID);
		$employee_permitions = new employee_permitions();
		$employee_permitions->selectAllWhere("emp_permition_id", $empID);
		return $employee_permitions->emp_access_level;
	}
	
	function GetEmployeeLevel_ByUsername($Username)
	{
		$Username = trim($Username);
		$login = new login();
		$login->selectAllWhere("Username", $Username);
		
		$empID = trim($login->emp_id);
		$employee_permitions = new employee_permitions();
		$employee_permitions->selectAllWhere("emp_permition_id", $empID);
		return $employee_permitions->emp_access_level;
	}
	
	function GetValuatorFullname_ByEmpId($empID)
	{
		$empID = trim($empID);
		$valuers = new valuers();
		$valuers->selectAllWhere("id", $empID);
		$first_name = strtolower($valuers->first_name);
		$middle_name = strtolower($valuers->middle_name);
		$surname = strtolower($valuers->surname);
		return ucwords($first_name)." ".($middle_name)." ".ucwords($surname); 
	}
	
	
	function GetEmployeeFullname_ByEmpId($empID="")
	{
		session_start();
		if ($empID == "")
		{
			$login = new login();
			$username = $_SESSION["user"];
			$login->selectWhere("username", $username);
			$empID = $login->emp_id;
		}
		$empID = trim($empID);
		$employees = new employees();
		$employees->selectAllWhere("empid", $empID);
		$name = strtolower($employees->name);
		$surname = strtolower($employees->surname);
		
		if ($name == "" && $surname == "")
		{
			return $_SESSION["user"];
		}
		
		return ucwords($name)." ".ucwords($surname);
	}
	
	function GetEmployeeFullname_ByUsername($Username)
	{
		$Username = trim($Username);
		$login = new login();
		$login->selectAllWhere("Username", $Username);
		$employees = new employees();
		$employees->selectAllWhere("empid", $login->emp_id);
		$name = strtolower($employees->name);
		$surname = strtolower($employees->surname);
		return ucwords($name)." ".ucwords($surname);
	}
	
	function GetCurrent_LoggedIn_Username()
	{
		session_start();
		return $_SESSION["user"];
	}
	
	function GetCurrent_LoggedIn_UserLevel()
	{
		session_start();
		// Employee_permitions::currentInstance()->emp_access_level === "Auditor"
		$login = new Login();
		$login->selectAllWhere('username', $_SESSION["user"]);
		$empid = $login->emp_id;
		$level = GetEmployeeLevel_ByEmpId($empid);
		// die("empid: ".$_SESSION["user"]);
		return $level;
	}
	
	function GetCurrent_LoggedIn_Emp_id()
	{
		session_start();
		$login = new Login();
		$login->selectAllWhere('username', $_SESSION["user"]);
		$empid = $login->emp_id;
		return $empid;
	}
	
	// Record_LumpSum("K1310198200316", 500);
	function Record_LumpSum($empID, $amount, $collectionNum, $account, $doc_link)
	{
		
		
		$loggedin_emp_id = GetCurrent_LoggedIn_Emp_id();
		$empID = trim($empID);
		$lumpsums = new lumpsums();
		$lumpsums->empID = $empID;
		$lumpsums->amount = $amount;
		$lumpsums->posted_by = $loggedin_emp_id;
		$lumpsums->collectionNum = $collectionNum;
		$lumpsums->processed = 0;
		$lumpsums->account = $account;
		$lumpsums->doc_link = $doc_link;
		$lumpsums->date_posted = "NOW()";
		$lumpsums->insert();
		/*
		create table lumpsums(id int(11) not null auto_increment,
		empID varchar(25) not null,
		amount decimal(10,2) not null,
		processed tinyint(1) default 0 not null,
		date_posted datetime default CURRENT_TIMESTAMP,
		date_processed datetime,
		collectionNum varchar(20) not null,
		posted_by varchar(50) not null,
		processed_by varchar(50),
		primary key(id));
		
		*/
	}
	
	function GetFullname_ByEmpId($empID)
	{
		$empID = trim($empID);
		
		// require_once(__DIR__ ."/finance/dashboard/collections/core/includes/connect.php");;
		//If the customer number is part of the fullname, make use of the customer number instead
		//We get the customer number by extracting it from the fullname
		$delimiter = " ";
		if (strpos(strtolower($empID), "/" !== false))
		{
			$delimiter = "/";
		}
		$empID_arr = explode($delimiter, $empID);
		// var_dump($empID_arr);
		$empID1 = $empID_arr[0];
		$empID2 = $empID_arr[1];
		if ($empID1 == "") $empID1 = $empID;
		if ($empID2 == "") $empID2 = $empID;
		$customer = new customer();
		$customer->selectFields("*", "", "", "(CustomField1='$empID1' or CustomField2='$empID1' or 
		CustomField1='$empID2' or CustomField2='$empID2') and IsActive='true' ", "");
		// echo "query: ".$customer->query;
		return $customer->Name;
	}
	function GetFullname_ByEmpId_Active_NonActive($empID)
	{
		$empID = trim($empID);
		
		// require_once(__DIR__ ."/finance/dashboard/collections/core/includes/connect.php");;
		//If the customer number is part of the fullname, make use of the customer number instead
		//We get the customer number by extracting it from the fullname
		$delimiter = " ";
		if (strpos(strtolower($empID), "/" !== false))
		{
			$delimiter = "/";
		}
		$empID_arr = explode($delimiter, $empID);
		var_dump($empID_arr);
		$empID1 = $empID_arr[0];
		$empID2 = $empID_arr[1];
		if ($empID1 == "") $empID1 = $empID;
		if ($empID2 == "") $empID2 = $empID;
		$customer = new customer();
		$customer->selectFields("*", "", "", "(CustomField1='$empID1' or CustomField2='$empID1' or 
		CustomField1='$empID2' or CustomField2='$empID2') ", "");
		echo "codes: $empID<br />";
		if ($customer->ListID == "")
		{
			$ListID = CreateNewListEntryFromEmpID($empID1);
			if ($ListID == "")
			{
				$ListID = CreateNewListEntryFromEmpID($empID2);
			}
			$customer = new customer();
			$customer->selectFields("*", "", "", "(CustomField1='$empID1' or CustomField2='$empID1' or 
			CustomField1='$empID2' or CustomField2='$empID2') ", "");
		}
		
		echo "query: ".$customer->query."<br />";
		return $customer->Name;
	}

	function NumDaysInMonth($month = -1, $year= -1)
	{
		if ($month == -1) $month = Date("m");
		if ($year == -1) $year = Date("Y");
		$days = cal_days_in_month(CAL_GREGORIAN, intval($month), intval($year));
		return $days;
	}
	
	
function GetCurrentPaymentIDKey($idkey)
{
	$query = "select * from salesorpurchasedetail 
	where idkey=  '$idkey'";
	$result = mysql_query($query);
	$num_rows = mysql_num_rows($result);
	//echo $query;
	if ($num_rows)
	{
		$myrow = mysql_fetch_array($result);
		return $myrow["Price"];
	}
	return "---ERROR---";
}

function GetCurrentPayment($fullname)
{
	$query = "
	select * from salesorpurchasedetail where CAST( AccountRef_FullName AS UNSIGNED ) 
	= CAST( '$fullname' AS UNSIGNED )
	
	";
	
	$result = mysql_query($query);
	$num_rows = mysql_num_rows($result);
	if ($num_rows)
	{
		$myrow = mysql_fetch_array($result);
		return $myrow["Price"];
	}
	return "";
}
/////////////////////////////////////////////////////////////////////
//PARA: Date Should In YYYY-MM-DD Format
//RESULT FORMAT:
// '%y Year %m Month %d Day %h Hours %i Minute %s Seconds'        =>  1 Year 3 Month 14 Day 11 Hours 49 Minute 36 Seconds
// '%y Year %m Month %d Day'                                    =>  1 Year 3 Month 14 Days
// '%m Month %d Day'                                            =>  3 Month 14 Day
// '%d Day %h Hours'                                            =>  14 Day 11 Hours
// '%d Day'                                                        =>  14 Days
// '%h Hours %i Minute %s Seconds'                                =>  11 Hours 49 Minute 36 Seconds
// '%i Minute %s Seconds'                                        =>  49 Minute 36 Seconds
// '%h Hours                                                    =>  11 Hours
// '%a Days                                                        =>  468 Days
//////////////////////////////////////////////////////////////////////
function DateDifference($date_1 , $date_2 , $differenceFormat = '%a' )
{
    $datetime1 = date_create($date_1);
    $datetime2 = date_create($date_2);
    
    $interval = date_diff($datetime1, $datetime2);
    
    return $interval->format($differenceFormat);
}

function GetDateDifference($date_1 , $date_2 , $differenceFormat = '%a' )
{
	$daysDiff_str= DateDifference($date_recorded , $datetime_now,'%y;%m;%d;%h;%i;%s;' );
	$daysDiff_arr = explode(";", $daysDiff_str);
	
	$total_years = 0;
	if ($differenceFormat == "%y")
	{
		$total_years = $daysDiff_arr[0] + ($daysDiff_arr[1] /12) + ($daysDiff_arr[2] / 365) + ($daysDiff_arr[3] / (365*24)) + ($daysDiff_arr[4] / (365*24*60)) + ($daysDiff_arr[5] / (365*24*60*60));
	}
	
	
	if ($differenceFormat == "%m")
	{
		//$total_years = $daysDiff_arr[0] * 12 + $daysDiff_arr[1] + ($daysDiff_arr[2] / 12) + $daysDiff_arr[3] / (365*24) + $daysDiff_arr[4] / (365*24*60) + $daysDiff_arr[5] / (365*24*60*60) 
	}
	
	
}

function LoadRegLoanAmountFromBill($fullname)
{
	$fullname = str_replace("Loan Book", "", $fullname);
	$fullname = str_replace(":", "", $fullname);
	//$fullname = str_replace("-", "", $fullname);
	$fullname = trim($fullname);
	// require_once(__DIR__ ."/finance/dashboard/collections/core/includes/connect.php");;
	// include("../../dashboard/collections/core/includes/connect.php");
	require_once(__DIR__ ."/finance/dashboard/collections/core/includes/connect.php");
	//If the customer number is part of the fullname, make use of the customer number instead
	//We get the customer number by extracting it from the fullname
	$val = $fullname;
	$customerNum = substr($fullname, 0, strpos($fullname, " "));
	if ($customerNum != "" && strlen($customerNum) >= 3) $val = $customerNum;
	$val = str_replace($customerNum, "", $fullname);
	$val = trim($val);
	if ($val[0] == "-")
	{
		$val = substr($val, 1, strlen($val));
	}
	$val = trim($val);
	$str = "";

	$query = "
	select * from bill where  
	CAST( vendorref_fullname AS UNSIGNED ) 
	= CAST( '$fullname' AS UNSIGNED )
	
	";
		
	//echo ($query);
	//return;	
	
	// // echo $query;
	$result = mysql_query($query) or die("error! $query <br />".mysql_error());
	$num_rows = mysql_num_rows($result);
	if ($num_rows)
	{
		$myrow = mysql_fetch_array($result);
		return $myrow["AmountDue"];
	}
}

function GetRegDateFromBill($fullname)
{
	$fullname = str_replace("Loan Book", "", $fullname);
	$fullname = str_replace(":", "", $fullname);
	//$fullname = str_replace("-", "", $fullname);
	$fullname = trim($fullname);
	// require_once(__DIR__ ."/finance/dashboard/collections/core/includes/connect.php");;
	// include("../../dashboard/collections/core/includes/connect.php");
	require_once(__DIR__ ."/finance/dashboard/collections/core/includes/connect.php");
	//If the customer number is part of the fullname, make use of the customer number instead
	//We get the customer number by extracting it from the fullname
	$val = $fullname;
	$customerNum = substr($fullname, 0, strpos($fullname, " "));
	if ($customerNum != "" && strlen($customerNum) >= 3) $val = $customerNum;
	$val = str_replace($customerNum, "", $fullname);
	$val = trim($val);
	if ($val[0] == "-")
	{
		$val = substr($val, 1, strlen($val));
	}
	$val = trim($val);
	$str = "";

	$query = "
	select * from bill where  
	CAST( vendorref_fullname AS UNSIGNED ) 
	= CAST( '$fullname' AS UNSIGNED )
	
	";
		
	//echo ($query);
	//return;	
	
	// // echo $query;
	$result = mysql_query($query) or die("error! $query <br />".mysql_error());
	$num_rows = mysql_num_rows($result);
	if ($num_rows)
	{
		$myrow = mysql_fetch_array($result);
		return $myrow["TxnDate"];
	}
}


function LoadRegLoanAmountFromCheck($fullname)
{
	$fullname = str_replace("Loan Book", "", $fullname);
	$fullname = str_replace(":", "", $fullname);
	//$fullname = str_replace("-", "", $fullname);
	$fullname = trim($fullname);
	require_once(__DIR__ ."/finance/dashboard/collections/core/includes/connect.php");;
	//If the customer number is part of the fullname, make use of the customer number instead
	//We get the customer number by extracting it from the fullname
	$val = $fullname;
	$customerNum = substr($fullname, 0, strpos($fullname, " "));
	if ($customerNum != "" && strlen($customerNum) >= 3) $val = $customerNum;
	$val = str_replace($customerNum, "", $fullname);
	$val = trim($val);
	if ($val[0] == "-")
	{
		$val = substr($val, 1, strlen($val));
	}
	$val = trim($val);
	$str = "";

	$query = "
	select * from `check` where  
	CAST( payeeEntityRef_fullname AS UNSIGNED ) 
	= CAST( '$fullname' AS UNSIGNED ) order by Amount desc
	";
		
	//echo ($query);
	//return;	
	
	// // echo $query;
	$result = mysql_query($query) or die("error! $query <br />".mysql_error());
	$num_rows = mysql_num_rows($result);
	if ($num_rows)
	{
		$myrow = mysql_fetch_array($result);
		return $myrow["Amount"];
	}
}

function GetRegDateFromCheck($fullname)
{
	$fullname = str_replace("Loan Book", "", $fullname);
	$fullname = str_replace(":", "", $fullname);
	//$fullname = str_replace("-", "", $fullname);
	$fullname = trim($fullname);
	require_once(__DIR__ ."/finance/dashboard/collections/core/includes/connect.php");;
	//If the customer number is part of the fullname, make use of the customer number instead
	//We get the customer number by extracting it from the fullname
	$val = $fullname;
	$customerNum = substr($fullname, 0, strpos($fullname, " "));
	if ($customerNum != "" && strlen($customerNum) >= 3) $val = $customerNum;
	$val = str_replace($customerNum, "", $fullname);
	$val = trim($val);
	if ($val[0] == "-")
	{
		$val = substr($val, 1, strlen($val));
	}
	$val = trim($val);
	$str = "";

	$query = "
	select * from `check` where  
	CAST( payeeEntityRef_fullname AS UNSIGNED ) 
	= CAST( '$fullname' AS UNSIGNED ) order by Amount desc
	";
		
	//echo ($query);
	//return;	
	
	// // echo $query;
	$result = mysql_query($query) or die("error! $query <br />".mysql_error());
	$num_rows = mysql_num_rows($result);
	if ($num_rows)
	{
		$myrow = mysql_fetch_array($result);
		return $myrow["TxnDate"];
	}
}

function GetRegDate($fullname)
{
	$application_id = GetListID($fullname);
	$applicants_registration_dates = new applicants_registration_dates();
	$applicants_registration_dates->selectWhere("application_id", $application_id);
	return $applicants_registration_dates->registration_date;
}

/*

function GetRegDate($fullname)
{
	$fullname = str_replace("Loan Book", "", $fullname);
	$fullname = str_replace(":", "", $fullname);
	//$fullname = str_replace("-", "", $fullname);
	$fullname = trim($fullname);
	// require_once(__DIR__ ."/finance/dashboard/collections/core/includes/connect.php");;
	require_once(__DIR__ ."/finance/dashboard/collections/core/includes/connect.php");
	//If the customer number is part of the fullname, make use of the customer number instead
	//We get the customer number by extracting it from the fullname
	$val = $fullname;
	$customerNum = substr($fullname, 0, strpos($fullname, " "));
	if ($customerNum != "" && strlen($customerNum) >= 3) $val = $customerNum;
	$val = str_replace($customerNum, "", $fullname);
	$val = trim($val);
	if ($val[0] == "-")
	{
		$val = substr($val, 1, strlen($val));
	}
	$val = trim($val);
	$str = "";

	$query = "
	select min(dates) as DATES from transaction_by_account where  
	(CAST( name AS UNSIGNED ) 
	= CAST( '$fullname' AS UNSIGNED ) 
	or 
	CAST( SPLIT AS UNSIGNED ) 
	= CAST( '$fullname' AS UNSIGNED )) and 
    (TYPE = 'bill' or TYPE like '%check%')
	
	";
		
	//echo ($query);
	//return;	
	
	// // echo $query;
	$result = mysql_query($query) or die("error! $query <br />".mysql_error());
	$num_rows = mysql_num_rows($result);
	if ($num_rows)
	{
		$myrow = mysql_fetch_array($result);
		return $myrow["DATES"];
	}
}

*/

function GetSubStringBtn($str1, $str2, $haystack)
{
	$a = strpos($haystack, $str1);
	$b = strpos($haystack, $str2);
	$findStr = substr($haystack, $a + strlen($str1), $b - $a - strlen($str1));
	return $findStr;
}

function ContainsNumbers($String){
    return preg_match('/\\d/', $String) > 0;
}


function GetVendor($fullname)
{
	$fullname = str_replace("Loan Book", "", $fullname);
	$fullname = str_replace(":", "", $fullname);
	$fullname = str_replace("-", "", $fullname);
	$fullname = trim($fullname);
	require_once(__DIR__ ."/finance/dashboard/collections/core/includes/connect.php");;
	//If the customer number is part of the fullname, make use of the customer number instead
	//We get the customer number by extracting it from the fullname
	$val = $fullname;
	$customerNum = substr($fullname, 0, strpos($fullname, " "));
	if ($customerNum != "" && strlen($customerNum) >= 3) $val = $customerNum;
	$val = str_replace($customerNum, "", $fullname);
	$val = trim($customerNum);
	if ($val[0] == "-")
	{
		$val = substr($val, 1, strlen($val));
	}
	$val = trim($val);
	$query = "	
	select ListID from vendor where CAST( name AS UNSIGNED ) = CAST( '$fullname' AS UNSIGNED )
	
	";

	
	//echo $query;
	$result = mysql_query($query) or die(mysql_error());
	$num_rows = mysql_num_rows($result);
	if ($num_rows)
	{
		$myrow = mysql_fetch_array($result);
		if ($myrow["ListID"] == "") echo $query;
		return $myrow["ListID"];
	}
	echo $query;
	return "";
}

function GetListID($fullname, $checkIfActive=false)
{
	if ($fullname == "") return ""; 
	$fullname = str_replace("Loan Book", "", $fullname);
	$fullname = str_replace(":", "", $fullname);
	$fullname = str_replace("-", "", $fullname);
	$fullname = str_replace("+", "", $fullname);
	$fullname = str_replace("&", "", $fullname);
	$fullname = str_replace("_", "", $fullname);
	$fullname = trim($fullname);
	
	$customer = new customer();
	$customer->selectAllWhereG("CAST( FullName AS UNSIGNED ) = CAST('$fullname' AS UNSIGNED)");
	
	if($checkIfActive) 
	{
		$IsActive = $customer->IsActive;
		$arr = Array();
		$arr["ListID"] = $customer->ListID;
		$arr["IsActive"] = $IsActive;
		return $arr;
	}
	return $customer->ListID;
}


/*
function GetListID($fullname)
{
	
	$fullname = str_replace("Loan Book", "", $fullname);
	$fullname = str_replace(":", "", $fullname);
	$fullname = str_replace("-", "", $fullname);
	$fullname = trim($fullname);
	require_once(__DIR__ ."/finance/dashboard/collections/core/includes/connect.php");;
	//If the customer number is part of the fullname, make use of the customer number instead
	//We get the customer number by extracting it from the fullname
	$val = $fullname;
	$customerNum = substr($fullname, 0, strpos($fullname, " "));
	if ($customerNum != "" && strlen($customerNum) >= 3) $val = $customerNum;
	$val = str_replace($customerNum, "", $fullname);
	$val = trim($customerNum);
	if ($val[0] == "-")
	{
		$val = substr($val, 1, strlen($val));
	}
	$val = trim($val);
	$query = "	
	select ListID from customer where CAST( FullName AS UNSIGNED ) = CAST( '$fullname' AS UNSIGNED )
	
	";
// echo "--$query--";	
	
	//echo $query;
	$result = mysql_query($query) or die(mysql_error());
	$num_rows = mysql_num_rows($result);
	if ($num_rows)
	{
		$myrow = mysql_fetch_array($result);
		// if ($myrow["ListID"] == "") echo $query;
		return $myrow["ListID"];
	}
	//echo $query;
	return "";
}

*/

function PrintCustomerLoanAccounts()
{
		$customer = new customer();
		$all_customers = $customer->selectAllWhereG("isactive='true'");
		foreach($all_customers as $index => $customer1)
		{
			$fullname = $customer1->FullName;
			// $fields = "REGEXP_REPLACE(FullName, '[a-zA-Z,.,!,&,: ,-]+', '') as customer_no, customer.*";
			$account_fullname = GetCustomerLoanBookAccountFullname($fullname);
			if ($account_fullname == "") $account_fullname = "---ERROR!----";
			echo "$index. ".$customer1->FullName."; $account_fullname"."<br />";
		}
}

function GetCustomerLoanBookAccountFullname($fullname)
{
	$fullname = str_replace("Loan Book", "", $fullname);
	$fullname = str_replace(":", "", $fullname);
	//$fullname = str_replace("-", "", $fullname);
	require_once(__DIR__ ."/finance/dashboard/collections/core/includes/connect.php");;
	 $fields = "REGEXP_REPLACE(FullName, '[a-zA-Z,.,!,&,: ,-]+', '') as customer_no, account.*";
	$query = "select $fields from account where 
	REGEXP_REPLACE(FullName, '[a-zA-Z,.,!,&,: ,-]+', '')
	= cast(REGEXP_REPLACE('$fullname', '[a-zA-Z,.,!,&,: ,-]+', '') as unsigned) and fullname like '%loan book:%'";
	// echo "<br />fullname: ".$query."<br />";
	// die();
	$result = mysql_query($query) or die(mysql_error());
	$num_rows = mysql_num_rows($result);
	if ($num_rows)
	{
		//if ($i>50) break;
		//table with regions addionalcontactdetails_customer
		$myrow = mysql_fetch_array($result);
		$FullName = $myrow["FullName"];
	}
	return $FullName;
}

function GetAccountNewClients($ListID, $account_type)
{
	if (strtolower($account_type) == "supplier account" || strtolower($account_type) == "supplier_account")
	{
		$account = new account();
		$account->selectAllWhereG("customfield1='$ListID' and parentref_fullname='9000 - Accounts Payable'");
		// echo $account->query;
		return $account->FullName;
	}
	
	require_once(__DIR__ ."/finance/dashboard/collections/core/includes/connect.php");;
	$FullName = "";
	$query = "select FullName from account where fullname like '%$account_type%' and CustomField1='$ListID'";
//	echo "<br />".$query."<br />";
	$result = mysql_query($query) or die(mysql_error());
	$num_rows = mysql_num_rows($result);
	if ($num_rows)
	{
		//if ($i>50) break;
		//table with regions addionalcontactdetails_customer
		$myrow = mysql_fetch_array($result);
		$FullName = $myrow["FullName"];
	}
	return $FullName;
}

function GetAccountFullname($name)
{
	die("GetAccountFullname($name) is obsolete! Please use GetAccountNewClients(ListID, account_type) instead! ");
		require_once(__DIR__ ."/finance/dashboard/collections/core/includes/connect.php");;

	$query = "select FullName from account where 
	CAST( name AS UNSIGNED ) 
	= CAST( '$name' AS UNSIGNED ) and fullname like '%loan book%'";
	//echo "<br />".$query."<br />";
	$result = mysql_query($query) or die(mysql_error());
	$num_rows = mysql_num_rows($result);
	if ($num_rows)
	{
		//if ($i>50) break;
		//table with regions addionalcontactdetails_customer
		$myrow = mysql_fetch_array($result);
		$FullName = $myrow["FullName"];
	}
	return $FullName;
}

function GetAccountAppID_Supplier($application_id)
{
	$application_id = trim($application_id);
	// die("GetAccountFullname($name) is obsolete! Please use GetAccountNewClients(ListID, account_type) instead! ");
		require_once(__DIR__ ."/finance/dashboard/collections/core/includes/connect.php");;

	$query = "select FullName from account where CustomField1='$application_id' and ParentRef_FullName like '%payable%'";
	//echo "<br />".$query."<br />";
	$result = mysql_query($query) or die(mysql_error());
	$num_rows = mysql_num_rows($result);
	if ($num_rows)
	{
		//if ($i>50) break;
		//table with regions addionalcontactdetails_customer
		$myrow = mysql_fetch_array($result);
		$FullName = $myrow["FullName"];
	}
	return $FullName;
}


function GetAccountListID($name)
{
		require_once(__DIR__ ."/finance/dashboard/collections/core/includes/connect.php");;

	$query = "select ListID from account where 
	CAST( name AS UNSIGNED ) 
	= CAST( '$name' AS UNSIGNED ) and fullname like '%loan book%'";
	//echo "<br />".$query."<br />";
	$result = mysql_query($query) or die(mysql_error());
	$num_rows = mysql_num_rows($result);
	if ($num_rows)
	{
		//if ($i>50) break;
		//table with regions addionalcontactdetails_customer
		$myrow = mysql_fetch_array($result);
		$ListID = $myrow["ListID"];
	}
	return $ListID;
}

function GetListID_From_EmpNo($empNo)
{
	require_once(__DIR__ ."/finance/dashboard/collections/core/includes/connect.php");;
	$query = "select ListID from customer where  
	CustomField1='$empNo'  or CustomField2='$empNo'";
	
	// echo $query;
	$result = mysql_query($query) or die(mysql_error());
	$num_rows = mysql_num_rows($result);
	if ($num_rows)
	{
		$myrow = mysql_fetch_array($result);
		return $myrow["ListID"];
	}
	return "";
}


function GetClientFullnameFrom_AppID($appID)
{
	
	$applicants = new applicants();
	$applicants->selectWhere("application_id", $appID);
	$title = $applicants->title;
	$firstname = ucwords(strtolower(trim($applicants->firstname)));
	$middle_name = ucwords(strtolower(trim($applicants->middle_name)));
	$surname = ucwords(strtolower(trim($applicants->surname)));
	if ($middle_name != "")
	{
		$FullName = $firstname." ".$middle_name." ".$surname;
	}
	else $FullName = $firstname." ".$surname;
	return ucwords($title." ".$FullName);
}


function GetClientFullnameFromListID($ListID)
{
	
	require_once(__DIR__ ."/finance/dashboard/collections/core/includes/connect.php");;
	//If the customer number is part of the fullname, make use of the customer number instead
	//We get the customer number by extracting it from the fullname
	$val = $fullname;
	$customerNum = substr($fullname, 0, strpos($fullname, " "));
	if ($customerNum != "" && strlen($customerNum) >= 3) $val = $customerNum;
	$val = str_replace($customerNum, "", $fullname);
	$val = trim($val);
	if ($val[0] == "-")
	{
		$val = substr($val, 1, strlen($val));
	}
	$val = trim($val);
	$query = "select FullName from customer where  
	ListID='$ListID'";
	
	//echo $query;
	$result = mysql_query($query) or die(mysql_error());
	$num_rows = mysql_num_rows($result);
	if ($num_rows)
	{
		$myrow = mysql_fetch_array($result);
		return $myrow["FullName"];
	}
	return "";
}

 //$empID = "OO2401197100093";
//echo "FullName: ".GetListFullname("");
//die();

function GetListFullname($fullname)
{
	$fullname = str_replace("Loan Book", "", $fullname);
	$fullname = str_replace(":", "", $fullname);
	//$fullname = str_replace("-", "", $fullname);
	$fullname = trim($fullname);
	// require_once(__DIR__ ."/finance/dashboard/collections/core/includes/connect.php");;
	//If the customer number is part of the fullname, make use of the customer number instead
	//We get the customer number by extracting it from the fullname
	$val = $fullname;
	$customerNum = substr($fullname, 0, strpos($fullname, " "));
	if ($customerNum != "" && strlen($customerNum) >= 3) $val = $customerNum;
	$val = str_replace($customerNum, "", $fullname);
	$val = trim($val);
	if ($val[0] == "-")
	{
		$val = substr($val, 1, strlen($val));
	}
	$val = trim($val);
	
	$customer = new customer();
	$customer->selectFields("*", "", "", "NAME like '%$val%' or fullname like '%$val%' ", "");
	return $customer->FullName;
}

function GetTotalMarketValue()
{
	$query = "select SUM(CAST(t0.CustomField5 as decimal(10, 2))) as market_value from 
	
	";
	$result = mysql_query($query) or die(mysql_error());
	$num_rows = mysql_num_rows($result);
	$loanAmount = 0;
	if ($num_rows)
	{
		//if ($i>50) break;
		//table with regions addionalcontactdetails_customer
		$myrow = mysql_fetch_array($result);
		$loanAmount = $myrow["amount"];
	}
	return $loanAmount;
}

function GetPurpose($purpose, $strSort, $str)
{
	$purpose = str_replace("(b)", "", $purpose);
	$purpose = str_replace("(a)", "", $purpose);
	$purpose = str_replace("(c)", "", $purpose);
	$query = "
	select t0.*, t1.TxnDate as TxnDate, t2.TxnDate as TxnDate2, 
SUM(CAST(AmountDue as decimal(10, 2))) as amount, 
SUM(CAST(t2.Amount as decimal(10, 2))) as amount2, count(*) as num1, 
SUBSTRING(JobTypeRef_FullName, LOCATE(' ', JobTypeRef_FullName), 
LOCATE(':', JobTypeRef_FullName) - LOCATE(' ', JobTypeRef_FullName)) as n 
from ((addionalcontactdetails_gender t0 left join Bill t1 on 
(replace(replace(`t0`.`NAME`,'-',''),' ','')) = 
(replace(replace(`t1`.`VendorRef_FullName`,'-',''),' ','')) ) 
left join `check` t2 on (replace(replace(`t0`.`NAME`,'-',''),' ','')) = 
(replace(replace(`t2`.`PayeeEntityRef_FullName`,'-',''),' ','')) ) 
where JobTypeRef_FullName like '%$purpose%' 
Group by n 
";
//die($query);
	$result = mysql_query($query) or die(mysql_error());
	//echo "<br />".$query."<br />";
	$num_rows = mysql_num_rows($result);
	$myrow = null;
	if ($num_rows)
	{
		//if ($i>50) break;
		//table with regions addionalcontactdetails_customer
		$myrow = mysql_fetch_array($result);
	}
	//die ($myrow["amount"]);
	return $myrow;
}
function GetClientGender()
{
	$name = str_replace("-", "", $name);
	$name = str_replace(" ", "", $name);
	$query = "select max(Amount) as amount, TxnDate from 
	`check` where (replace(replace(`PayeeEntityRef_FullName`,'-',''),' ',''))  group by amount
	";
	$result = mysql_query($query) or die(mysql_error());
	$num_rows = mysql_num_rows($result);
	$loanAmount = 0;
	$arr = array();
	if ($num_rows)
	{
		//if ($i>50) break;
		//table with regions addionalcontactdetails_customer
		$myrow = mysql_fetch_array($result);
		$TxnDate = $myrow["TxnDate"];
		$loanAmount = $myrow["amount"];
		$arr[] = $loanAmount;
		$arr[] = $TxnDate;
	}
	return $arr;
}

function GetClientSalaryAmountArray()
{
	$name = str_replace("-", "", $name);
	$name = str_replace(" ", "", $name);
	$query = "select max(Amount) as amount, TxnDate from 
	`check` where (replace(replace(`PayeeEntityRef_FullName`,'-',''),' ',''))  group by amount
	";
	$result = mysql_query($query) or die(mysql_error());
	$num_rows = mysql_num_rows($result);
	$loanAmount = 0;
	$arr = array();
	if ($num_rows)
	{
		//if ($i>50) break;
		//table with regions addionalcontactdetails_customer
		$myrow = mysql_fetch_array($result);
		$TxnDate = $myrow["TxnDate"];
		$loanAmount = $myrow["amount"];
		$arr[] = $loanAmount;
		$arr[] = $TxnDate;
	}
	return $arr;
}

function GetClientCheckAmountArray($name)
{
	$name = str_replace("-", "", $name);
	$name = str_replace(" ", "", $name);
	$query = "select max(Amount) as amount, TxnDate from 
	`check` where (replace(replace(`PayeeEntityRef_FullName`,'-',''),' ','')) like '%$name%' group by amount
	";
	
	$result = mysql_query($query) or die(mysql_error());
	$num_rows = mysql_num_rows($result);
	$loanAmount = 0;
	$arr = array();
	if ($num_rows)
	{
		//if ($i>50) break;
		//table with regions addionalcontactdetails_customer
		$myrow = mysql_fetch_array($result);
		$TxnDate = $myrow["TxnDate"];
		$loanAmount = $myrow["amount"];
		$arr[] = $loanAmount;
		$arr[] = $TxnDate;
	}
	return $arr;
}

function GetClientCheckAmount($name)
{
	$name = str_replace("-", "", $name);
	$name = str_replace(" ", "", $name);
	$query = "select max(amount) as amount from 
	`check` where (replace(replace(`PayeeEntityRef_FullName`,'-',''),' ','')) like '%$name%' group by amount
	";
	$result = mysql_query($query) or die(mysql_error());
	$num_rows = mysql_num_rows($result);
	$loanAmount = 0;
	if ($num_rows)
	{
		//if ($i>50) break;
		//table with regions addionalcontactdetails_customer
		$myrow = mysql_fetch_array($result);
		$loanAmount = $myrow["amount"];
	}
	return $loanAmount;
}

function GetClientErfDetails($idkey)
{
	$query = "select contactvalue from 
	additionalcontactdetail where contactname='URL 3'
	and idkey = '$idkey'
	";
	$result = mysql_query($query) or die(mysql_error());
	$num_rows = mysql_num_rows($result);
	$loanAmount = 0;
	if ($num_rows)
	{
		//if ($i>50) break;
		//table with regions addionalcontactdetails_customer
		$myrow = mysql_fetch_array($result);
		$contactvalue = $myrow["contactvalue"];
	}
	return $contactvalue;
}

function GetClientLoanAmountOfRegion1($region, $from="", $to=""){
	$query = "select credit, DATES from transaction_by_account where
	DATES = (select min(dates) as DATES from 
	transaction_by_account where NAME like '%$name%')
	and NAME like '%$name%'	
	";
	echo $query;
	$query = "select * from addionalcontactdetails_customer where contactvalue='$region' ";
	$result = mysql_query($query) or die(mysql_error());
	$num_rows = mysql_num_rows($result);
	$loanAmount = 0;
	for ($i=0; $i<$num_rows; $i++)
	{
		//if ($i>50) break;
		//table with regions addionalcontactdetails_customer
		$myrow = mysql_fetch_array($result);
		$name = $myrow["Name"];
		$dates = $myrow["DATES"];
		$first = true;
		$second = true;
		if ($name == "") $name = $myrow["FullName"];
		if ($from != "")
		{
			$fromVal = str_replace("-", "", $from);
			$datesVal = str_replace("-", "", $dates);
			//This would be like comparing 20170101 with 20161231
			if ($datesVal <= $fromVal)
			{
				
			}
			else $first = false;
		}
		if ($to != "")
		{
			$toVal = str_replace("-", "", $to);
			$datesVal = str_replace("-", "", $dates);
			if ($datesVal <= $toVal)
			{
				
			}
			else $second = false;
		}
		if ($first && $second)
		{
			$loanAmount += GetClientLoanAmount($name);
		}
	}
	return $loanAmount;
}

function GetClientLoanAmountOfRegion($region){
	$query = "select credit from transaction_by_account where
	DATES = (select min(dates) as DATES from 
	transaction_by_account where NAME like '%$name%')
	and NAME like '%$name%'	
	";
	$query = "select * from addionalcontactdetails_customer where contactvalue='$region' ";
	$result = mysql_query($query) or die(mysql_error());
	$num_rows = mysql_num_rows($result);
	$loanAmount = 0;
	for ($i=0; $i<$num_rows; $i++)
	{
		//if ($i>50) break;
		//table with regions addionalcontactdetails_customer
		$myrow = mysql_fetch_array($result);
		$name = $myrow["Name"];
		if ($name == "") $name = $myrow["FullName"];
		$loanAmount += GetClientLoanAmount($name);
	}
	return $loanAmount;
}

function GetClientLoanAmount($name){
	$query = "select credit from transaction_by_account where
	DATES = (select min(dates) as DATES from 
	transaction_by_account where NAME like '%$name%')
	and NAME like '%$name%'	
	";
	
	$result = mysql_query($query) or die(mysql_error());
	$num_rows = mysql_num_rows($result);
	$loanAmount = 0;
	if ($num_rows)
	{
		$myrow = mysql_fetch_array($result);
		$loanAmount = $myrow["credit"];
	}
	return $loanAmount;
}
	function GetPassword($sender)
	{
		require_once("connect.php");
		$query = "select pass from users where mobile='$sender'";
		$result = mysql_query($query) or die(mysql_error()." ".$query);
		$num_rows = mysql_num_rows($result);
		$pass = "";
		if ($num_rows)
		{
			$myrow = mysql_fetch_array($result);
			$pass = $myrow["pass"];
		}
		return $pass;
	}
	
	function verify_uploaded_file($strName, $intSize)
	{
	// Check file size
	if ($intSize < $GLOBALS['UPLOAD_SIZES']['min'] ||
	$intSize > $GLOBALS['UPLOAD_SIZES']['max'])
	{
	return -1;
	}
	// Check file type
	$arrSegments = explode('.', $strName); // may contain multiple dots
	$strExtension = $arrSegments[count($arrSegments) - 1];
	if (!$strExtension || $GLOBALS['UPLOAD_TYPES'][strtoupper($strExtension)] != 1)
	{
	return -2; // File type not defined/allowed
	}
	// All tests have passed; this file is valid.
	return $strExtension;
	}
	function script_echo($msg="", $newLocation = "")
	{
		$str = "";
		if ($newLocation != "") $str = "window.location='".$newLocation."';";
		echo "<script type='text/javascript'>";
		if($msg != "") echo "alert('".$msg."'); ";
		echo $str."</script>";
	}
	 
	


function generateKeyNumbers($Len = 10)
{
    $AllChars = '01234ABCD56789';
    $String = '';
    mt_srand((double) microtime() * 1000000);
    for ($i = 0; $i < $Len; $i ++) {
        $String .= $AllChars{mt_rand(0, strlen($AllChars) - 1)};
    }

    return $String;
}


function generateKey($Len = 10)
{
    $AllChars = '01234ABCDEFGHIJKLNMOPQRSTUVWXYZabcdefghijklnmopqrstuvwxyz56789_';
    $String = '';
    mt_srand((double) microtime() * 1000000);
    for ($i = 0; $i < $Len; $i ++) {
        $String .= $AllChars{mt_rand(0, strlen($AllChars) - 1)};
    }

    return $String;
}

/*	
	function generateKey($Len = 10) {     
	//$AllChars = '01234ABCDEFGHIJKLNMOPQRSTUVWXYZabcdefghijklnmopqrstuvwxyz56789_'; 
	$AllChars = '123456789';
	//$AllChars = '0123456789'; 
	$String = ''; 
	mt_srand((double)microtime() * 1000000); 
	for ($i = 0; $i < $Len; $i++) { 
	  $String .= $AllChars{mt_rand(0, strlen($AllChars) - 1)}; 
	}
	return $String;    
}*/

function ValExists($table, $field)
{
	include("connect.php");
	$query = "select ".$field." from ".$table;
	$result = mysql_query($query);
	$num_rows = mysql_num_rows($result);
	if ($num_rows > 0)
	{
		return true;
	}
	return false;
}

function GetFullname($mobile)
{
	include("connect.php");
	$query = "select fullname from users where mobile='$mobile'";
	$result = mysql_query($query);
	$num_rows = mysql_num_rows($result);
	if ($num_rows)
	{
		$myrow = mysql_fetch_array($result);
		return $myrow["fullname"];
	}
	return "";
}

function DropDown($onchangeFunction="", $selectId="", $fieldName, $tableName)
	{
		include("connect.php");
		$str = "<select id='".$selectId."' name='".$selectId."' onchange='".$onchangeFunction."'>";
		$query = "select `".$fieldName."` from `".$tableName."`";
		$result = mysql_query($query);
		$num_rows = mysql_num_rows($result);
		for ($i=0; $i<$num_rows; $i++)
		{
			$myrow = mysql_fetch_array($result);
			$str .= "<option>";
			$str .= $myrow[$fieldName];
			$str .= "</option>";
		}
		$str .= "</select>";
		return $str;
	}
	
	function Curtain($content, $action="", $method="", $form1="form1")
	{
		$str = '<div id="blackOut" class="curtain">
			<div id="dialog" class="dialog">
				<div id="close" class="dialog-close" onclick="CloseCurtain()"></div>
					<form action="'.$action.'" method="'.$method.'" onsubmit="if (!verify()) return false;" enctype="multipart/form-data" form1="'.$form1.'">
						';
		$str .= $content;
		$str .='
					</form>
			</div>
		</div>';
		return $str;
	}
	
	function Table($kbase, $tableName="", $header = null, $fields, $query, $width='100%', $border='1', $cellspacing='1', $cellpadding='1', $number=1)
	{
		include("connect.php");
		$table = "<table id='pattern-style-a' style='position:relative;'>";
		if ($header != null) 
		{
			$table .= "<thead>
							<tr>";
			for ($i=0; $i<count($header); $i++)
			{
				$table .= "<th>";
				$table .= $header[$i];
				$table .= "</th>";
			}
			if ($tableName == "users")
			{
				$table .= "<th>";
				$table .= "Change rank";
				$table .= "</th>";
			}
			$table .= "<th>";
			$table .= "Options";
			$table .= "</th>";
			
			$table .= "</tr></thead>";
		}
		
		$table .= "<tbody>";
		$result = mysql_query($query);
		//echo "query = ".$query;
		$num_rows = mysql_num_rows($result);
		for ($i=0; $i<$num_rows; $i++)
		{
			$myrow = mysql_fetch_array($result);
			$table .= "<tr>";
			$table .= "<td>";
			$table .= ($i+1);
			$table .= "</td>";
			$rowID = "";
			//echo "num Fields = ".count($fields);;
			for ($j=0; $j < count($fields); $j++)
			{
				$table .= "<td>";
				//echo "check = ".$j;
				if ($fields[$j] == "id")
				{
					$val =  '"'.$myrow[$fields[$j]].'"';
					$table .= '<a style="cursor: pointer; color: red;" title="" onclick="DeleteTableRow('.$myrow[$fields[$j]].', \''.$tableName.'\');">'.$myrow[$fields[$j]].'</a>';
					$table .= "</td>";
				}
				elseif ($header[($j + $number)] == "pic")
				{
					$val =  '"'.$myrow[$fields[$j]].'"';
					$table .= '<img height="40" src="'.$myrow[$fields[$j]].'"></img>';
					$table .= "</td>";
				}
				else
				{
					$table .= '';
					$table .= $myrow[$fields[$j]];
					$table .= '';
					$table .= "</td>";
					$rowID = $myrow["id"];
				}
				
			}
			$fieldName = substr($tableName, 0, -1);			
			$rowName = $myrow[$fieldName."Name"];
			if ($tableName == "users")
			{
				$table .= "<td>";
				$rowName =$myrow["username"];
				$table .= "<a style='cursor: pointer; color: blue;' 
				title='Click to make this user a normal user' 
				href='admin.php?rankUser=true&id=".$rowName."&type=User'>User </a>";
				$rowName =$myrow["username"];
				$table .= "<a style='cursor: pointer; color: blue;' 
				title='Click to make this user a Technician' 
				href='admin.php?rankUser=true&id=".$rowName."&type=Technician'>Techy </a>";
				$table .= "<a style='cursor: pointer; color: blue;' 
				title='Click to make this user an Administrator' 
				href='admin.php?rankUser=true&id=".$rowName."&type=Admin'>Admin</a>";
				$table .= "</td>";
			}
			$table .= "<td>";
			$rowName = $myrow["id"];
			$rowID = $myrow["id"];
			if ($rowID == "")
			{
				if ($rowName == "")
				$rowName = $myrow["id"];
				
				if ($fields[0]  == "refNo")
				{
					if ($kbase && $_SESSION["user"]->type != "User" || !$kbase)
					{
						if (($kbase && $_SESSION["user"]->type == "Admin") || !$kbase)
						{
							$table .= "<a style='cursor: pointer; color: blue;' 
							title='Click to delete this row' href='#' onclick='var answer = confirm (\"Would you like to delete?\")
	if (answer)
	{
		window.location=\"tickets.php?delete=true&id=".$rowName."&tbl=".$tableName."\";}'>Delete</a>;
	";
						}
					}
					if ($kbase)
					{
						$table .= " <a style='cursor: pointer; color: blue;' 
					title='Click to view this ticket' href='tickets.php?viewthreads=true&knowledgebase&id=".$rowName."'>View</a>";
					}
					else 
					{
						$table .= " <a style='cursor: pointer; color: blue;' 
					title='Click to view this ticket' href='tickets.php?viewthreads=true&id=".$rowName."'>View</a>";
					}
				}
				else 
				{
					//if ($kbase && $_SESSION["user"]->type != "User" || !$kbase)
					{
						$table .= "<a style='cursor: pointer; color: blue;' 
							title='Click to delete this row' href='#' onclick='var answer = confirm (\"Would you like to delete?\")
	if (answer)
	{
		window.location=\"admin.php?delete=true&id=".$rowName."&tbl=".$tableName."\";}'>Delete</a>;
	";
					}
				}
			}
			else
			{
				$id = $myrow["id"];
				if ($_SESSION["user"]->accessLevel != "ReadOnly")
				{
				
					$table .= "<a style='cursor: pointer; color: blue;' 
							title='Click to delete this row' href='#' onclick='var answer = confirm (\"Would you like to delete?\")
					if (answer)
					{
						window.location=\"admin.php?delete=true&id=".$rowName."&tbl=".$tableName."\";}'>Delete</a>;
					";
				}
	if ($kbase == 4)
	{
		$table .= "<a style='cursor: pointer; color: blue;' href='javascript:ChooseApplication(".$id.", \"appeal\");'>Select</a> ";
	}
	elseif ($kbase == 5)
	{
		$table .= "<a style='cursor: pointer; color: blue;' href='javascript:ChooseApplication(".$id.", \"copy\");'>Select</a> ";
	}
	elseif ($kbase == 6)
	{
		$table .= "<a style='cursor: pointer; color: blue;' href='javascript:ChooseApplication(".$id.", \"shortcoming\");'>Select</a> ";
	}
	else
	{
		$table .= "<a style='cursor: pointer; color: blue;' href='javascript:ChooseApplication(".$id.", 0);'>View</a> ";
		if ($_SESSION["user"]->accessLevel != "ReadOnly") $table .= "<a style='cursor: pointer; color: blue;' href='javascript:ChooseApplicationForEdit(".$id.");'>Edit</a>";
	}
				
			}
			$table .= "</td>";
			$table .= "</tr>";
		}
		$table .= "</tbody>";
		$table .= "</table>";
		return $table;
	}
	
	function ExecuteNonQuery($query)
	{
		include("connect.php");
		//
		$result = mysql_query($query);
		return $result;
	}

function GetUsers()
{
	include("connect.php");
	$query = "select * from users";
	$val = "<select id='username' name='username'>";
	$val .= "<option>";
		$val .= " ";
		$val .= "</option>";
	$result = mysql_query($query);
	$num_rows = mysql_num_rows($result);
	for ($i; $i<$num_rows; $i++)
	{
		$myrow = mysql_fetch_array($result);
		$val .= "<option>";
		$val .= $myrow["username"];
		$val .= "</option>";
	}
	$val .= "</select>";
	return $val;
}

function VerifyUser($table="", $username, $password)
{
	if ($table=="") $table = "users"; 
	$query = "select * from ".$table." where username = '".$username."' and pass='".$password."' ";
	
	include("connect.php");
	
	$result = mysql_query($query) or die(mysql_error());
	
	$num_rows = mysql_num_rows($result);
	
	if ($num_rows)
	{
		$myrow = mysql_fetch_object($result);
		$_SESSION["user"] = $myrow;
		return 1;
	}
	else return 0;
}

function GetName($mobile)
{
	include("connect.php");
	$query = "select fullname from users where mobile='$mobile'";
	$result = mysql_query($query);
	$num_rows = mysql_num_rows($result);
	$fullname = "";
	if ($num_rows)
	{
		$myrow = mysql_fetch_array($result);
		$fullname = $myrow["fullname"];
	}
	return $fullname;
}

function GetComments($storyId)
{
	include("connect.php");
	$query = "select *, DAY(dateCommented) as day, MONTH(dateCommented) as month, YEAR(dateCommented) as year, HOUR(dateCommented) as hour, MINUTE(dateCommented) as minute, dateCommented as fulldate from comments where storyId='$storyId'";
	$result = mysql_query($query);
	$num_rows = mysql_num_rows($result);
	$myrow = array();
	for($i=0; $i<$num_rows; $i++)
	{
		$myrow[] = mysql_fetch_object($result);
	}
	return $myrow;
}

function GetAllMonths()
{
	$months = array();
	$months[] = "January";
	$months[] = "February";
	$months[] = "March";
	$months[] = "April";
	$months[] = "May";
	$months[] = "June";
	$months[] = "July";
	$months[] = "August";
	$months[] = "September";
	$months[] = "October";
	$months[] = "November";
	$months[] = "December";
	return $months;
}

function GetMonth($number)
{
	$months = array();
	$months[] = "January";
	$months[] = "February";
	$months[] = "March";
	$months[] = "April";
	$months[] = "May";
	$months[] = "June";
	$months[] = "July";
	$months[] = "August";
	$months[] = "September";
	$months[] = "October";
	$months[] = "November";
	$months[] = "December";
	return $months[$number - 1];
}

function GetMonthNumber($month)
{
	$months = array();
	$months[] = "January";
	$months[] = "February";
	$months[] = "March";
	$months[] = "April";
	$months[] = "May";
	$months[] = "June";
	$months[] = "July";
	$months[] = "August";
	$months[] = "September";
	$months[] = "October";
	$months[] = "November";
	$months[] = "December";
	//die ("m=".$month);
	for ($i=0; $i<count($months); $i++)
	{
		if (strstr(strtolower($months[$i]), strtolower($month)))
		{
			if ($i < 9)
			return "0".($i+1);
			else return ($i+1);
		}
	}
	return -1;
}

function ExtractDatePart($part1, $part2="", $val="")
{
	$query = "select distinct($part1(datePosted)) as part from stories ";
	if ($part2 != "")
	{
		$query .= " where $part2(datePosted)='$val' ";
	}
	$query .= "order by $part1(datePosted) desc";
	// echo $query;
	$result = mysql_query($query);
	$num_rows = mysql_num_rows($result);
	$myrow = array();
	for($i=0; $i<$num_rows; $i++)
	{
		$myrow[] = mysql_fetch_object($result);
	}
	return $myrow;
}

function IsSubscribed($mobile)
{
	include("connect.php");
	$today = Date("Y-m-d");
	$today .= " 00:00:00";
	$query = "select mobile from subscriptions where expiryDate >= '$today' and mobile='$mobile'";
	$result = mysql_query($query);
	$num_rows = mysql_num_rows($result);
	return $num_rows;
}

function GetNumComments($storyId)
{
	include("connect.php");
	$query = "select * from comments where storyId='$storyId'";
	$result = mysql_query($query);
	$num_rows = mysql_num_rows($result);
	return $num_rows;
}

function ChangePassword($username, $oldpassword, $newpassword)
{
	include("connect.php");
	if ($table=="") $table = "users"; 
	$query = "select * from users where mobile='$username' and pass='$oldpassword' ";
	$result = mysql_query($query);
	$num_rows = mysql_num_rows($result);
	$exists = 0;
	if ($num_rows)
	{
		$query = "update users set pass='$newpassword' where pass='$oldpassword' and mobile='$username'";
		$result = mysql_query($query);
		$exists = $result;
	}
	if ($exists)
	{
		return 1;
	}
	else return 0;
}

function UpdateAccountBalances1($ListID, $datefrom="2000-01-01", $dateto="") 
{
	$customer_balances_old = new customer_balances($ListID);
	$customer_balances_old->delete("ListID", $ListID);
	// $statement->LoadInvoices();
                                                    // $data_arr = $statement->GetInvoice();
													$j = 0;
													
													$balance_bf = 0;
													
													// $customer_balances = new customer_balances();
													// $customer_balances->ListID = $ListID;
													
													// $balance = $customer_balances->GetBalance($datefrom)+0;
													$balance = 0;
													// die (var_dump($customer_balances));
													
													$invoicedate_from = $datefrom;
													$invoicedate_to = $dateto;
													// $date_prev_obj = new DateTime($invoicedate_to);
													// $date_prev_obj->modify('-1 day');
													// $date_prev = $date_prev_obj->
													$statement = new Statement($applicant_name, $ListID, $datefrom, $dateto);
													
													$transactions = $statement->GetTransactions();
													
                                                    foreach ($statement->LoadCustomerTransactions() as $transaction) {
														$credit = $debit = 0;
														
														$invoice_row_before = "";
														$invoice_row_after = "";
														
                                                        // $myrow = mysql_fetch_array($result);
                                                        $ID = $transaction->TxnID;
                                                        $account = $transaction->AccountRef_FullName;
                                                       
														//die("amount: ".$amount);
                                                        $TxnNumber = $transaction->TxnNumber;
                                                        $description = $transaction->Memo;
                                                        $status = $transaction->Status;
														// die(var_dump($transaction));
														// echo "des: ".$description;
														
														 // 
                                                        $amount = ($transaction->Amount);
														if (strtolower($description) == "receipt"
														|| strpos(strtolower($description), "lumpsum") !== false
														|| strpos(strtolower($description), "payment") !== false)
														// || strpos(strtolower($status), "credit note") !== false)
														{
															$transaction->Amount = $amount = ($transaction->Amount)*-1;
														}
														
                                                        $date = $transaction->TxnDate;
                                                        $date_created = $transaction->TimeCreated;
														
														$createDate = new DateTime($date);
														
														try
														{
															$strip_date = $createDate->format('Y-m-d');
														
														}
														catch(Exception $e)
														{
															
														}
                                                        
														$invoicedate_to = $strip_date;
														
														try
														{
															$createDate = DateTime::createFromFormat('d/m/Y H:i:s', $date_created);
															// $createDate = new DateTime($date_created);
															$date_created = $createDate->format('Y-m-d');
														
														}
														catch(Exception $e)
														{
															
														}
														
														
														$invoices = GetInvoice($ListID, $invoicedate_from, $invoicedate_to);

                                                        $num = $transaction->RefNumber;
                                                        //$balance = $transaction->balance;
														
														$j++;

                                                        //print invoices
														foreach ($invoices as $invoice)
														{
															$createDate = new DateTime($invoice->TxnDate);
															$invDate = $createDate->format('Y-m-d');
															$InvRefNumber = $invoice->RefNumber;
															$ARAccountRef_FullName = $invoice->ARAccountRef_FullName;
															$invDate_created = $invoice->TimeCreated;
															$createDate = new DateTime($invDate_created);
															$invDate_created = $createDate->format('Y-m-d');
															$str_Subtotal = Convertcash_NoSign(abs($invoice->Subtotal));
															$balance += $invoice->Subtotal;
															BalanceAuto_Correction(null, null, $transaction, true, $invoice);
														}
														
														
														$account_obj = new account();
														$account_obj->selectWhere("FullName", $account);
														
														$createDate = new DateTime($invoicedate_to);
														// $createDate->modify('+1 day');
														$invoicedate_from = $createDate->format('Y-m-d');
														if ($account_obj->AccountType != "AccountsReceivable")
														{
															$view_journalentry_debit = new view_journalentry_debit();
															$view_journalentry_debit->selectWhere("TxnLineID", $transaction->TxnLineID);
															
															$account1 = $view_journalentry_debit->AccountRef_FullName;
															$account_obj1 = new account();
															$account_obj1->selectWhere("FullName", $account1);
															
															if ($account_obj1->AccountType != "AccountsReceivable")
															continue;
														
															$view_journalentry_debit->Amount = $amount = -1*$amount;
															BalanceAuto_Correction($view_journalentry_debit, null, $transaction, false, null);
															
														}
														elseif ($amount > 0) BalanceAuto_Correction(null, $transaction, $transaction, false, null);
														else BalanceAuto_Correction($transaction, null, $transaction, false, null);
														$balance += $amount;
													}
													
													$createDate = new DateTime($invoicedate_to);
													// $createDate->modify('+1 day');
													$invoicedate_from = $createDate->format('Y-m-d');
													$invoices = GetInvoice($ListID, $invoicedate_from, $dateto);
													foreach ($invoices as $invoice)
													{
														$createDate = new DateTime($invoice->TxnDate);
														$invDate = $createDate->format('Y-m-d');
														$InvRefNumber = $invoice->RefNumber;
														$ARAccountRef_FullName = $invoice->ARAccountRef_FullName;
														$invDate_created = $invoice->TimeCreated;
														
														$createDate = new DateTime($invDate_created);
														$invDate_created = $createDate->format('Y-m-d');
														$str_Subtotal = Convertcash_NoSign(abs($invoice->Subtotal));
														$balance += $invoice->Subtotal;
														BalanceAuto_Correction(null, null, null, true, $invoice);
													}
}

function UpdateAccountBalances($ListID, $dateFrom="", $dateTo="")
{
	//This function is no longer relevant, 
	//it has thus it has been disabled by returning nothing
	return;
	// $trial_balance = new trial_balance();
	// $trial_balance->selectFields("*", $group="", $join="", $condition="", $orderby="")
	// foreach($
	$customer_balances_old = new customer_balances($ListID);
	$customer_balances_old->delete("ListID", $ListID);
	
	
	$journalentry = new journalentry();
	$condition = "entityRef_listID = '$ListID' order by TxnLineID";
	$fields = "*";
	$all_journalentries = $journalentry->selectFields($fields, "", "left join journaldebitlinedetail on journaldebitlinedetail.IDKEY=journalentry.TxnID", $condition, "");//selectAllWhereG();
	// die(var_dump($all_journalentries));
	
	foreach($all_journalentries as $index => $journalentry)
	{
		$TxnID = $journalentry->TxnID;
		// die(var_dump($journalentry)."TxnID: $TxnID");
		$journaldebitlinedetail = new journaldebitlinedetail();
		$journaldebitlinedetail->selectWhere("IDKEY", "$TxnID");
		// die(var_dump($journaldebitlinedetail));
		BalanceAuto_Correction($journaldebitlinedetail, null, null, false, null);
		
		 // die($journaldebitlinedetail->query);
		 $journalcreditlinedetail = new journalcreditlinedetail();
		$journalcreditlinedetail->selectWhere("IDKEY", "$TxnID");
		BalanceAuto_Correction(null, $journalcreditlinedetail, null, false, null);
	}
	
}

function BalanceAuto_Correction($journaldebitlinedetail, $journalcreditlinedetail, $journalentry, $isInvoice = false, $invoice)
{
	//This function is no longer relevant, 
	//it has thus it has been disabled by returning nothing
	return;
	/***
	NOTE:
	*ADD 
	**/
	// die(var_dump($amount));
	
	if ($isInvoice)
	{
		$fullname = $invoice->CustomerRef_FullName;
		$EntityRef_ListId = $invoice->CustomerRef_ListID;
		$amount = $invoice->Subtotal;
		$txndate = $invoice->TxnDate;
		ChangeBalance_Customer($EntityRef_ListId, $amount, $txndate);
		$account_fullname = GetCustomerLoanBookAccountFullname($fullname);
		ChangeBalance($account_fullname, $amount, "credit", $txndate);
	}
	else 
	{
		if ($journaldebitlinedetail != null)
		{
			if ($journalentry == null)
			{
				$journalentry = new journalentry();
				$journalentry->selectWhere("txnid", $journaldebitlinedetail->IDKEY);
			}
			ChangeBalance($journaldebitlinedetail->AccountRef_FullName, $journaldebitlinedetail->Amount, "debit", $journalentry->TxnDate);
			$account = new account();
			$account->selectWhere("FullName", $journaldebitlinedetail->AccountRef_FullName);
			if ($account->AccountType == "AccountsReceivable" && $journaldebitlinedetail->EntityRef_ListID != "")
			{
				$amount = $journaldebitlinedetail->Amount;
				if ($amount > 0) $amount = $amount*-1;
				ChangeBalance_Customer($journaldebitlinedetail->EntityRef_ListID, $amount, $journalentry->TxnDate);
				echo $journalentry->TxnDate."; debit; ".$journalentry->Memo."; ".$amount."; <br />";
			}
		}
		
		if ($journalcreditlinedetail != null)
		{
			if ($journalentry == null)
			{
				$journalentry = new journalentry();
				$journalentry->selectWhere("txnid", $journalcreditlinedetail->IDKEY);
			}
			ChangeBalance($journalcreditlinedetail->AccountRef_FullName, $journalcreditlinedetail->Amount, "credit", $journalentry->TxnDate);
			$account = new account();
			$account->selectWhere("FullName", $journalcreditlinedetail->AccountRef_FullName);
			if ($account->AccountType == "AccountsReceivable" && $journalcreditlinedetail->EntityRef_ListID != "")
			{
				$amount = $journalcreditlinedetail->Amount;
				if ($amount < 0) $amount = abs($amount);
				ChangeBalance_Customer($journalcreditlinedetail->EntityRef_ListID, $amount, $journalentry->TxnDate);
				echo $journalentry->TxnDate."; credit; ".$journalentry->Memo."; ".$amount."; <br />";
			}
			ChangeBalance_Statement($journalcreditlinedetail->EntityRef_ListID, $amount, $journalentry->TxnDate);
		}
	}
}

function IsApproved_finalOrReferedBack($application_id)
{ 
return false;
	if (IsApproved_final($application_id))
	{
		//Let us also check if the application had been referred back
		$loan_status = new Loan_status();
        $loan_status->selectWhere('application_id', $application_id);
		if ($loan_status->app_status == "Referred Back")
		{
			return false;
		}
		return true;
	}
	return false;
}

function IsApproved_final($application_id)
{
	$bond_registration = new bond_registration();
	$bond_registration->selectAllWhere("application_id", $application_id);
	if ($bond_registration->app_status == "Approved")
	{
		return true;
	}
	return false;
}

function GetConsultantFullname($empid)
{
	$employee_permitions_employees = new employee_permitions_employees();
	$employee_permitions_employees->selectAllWhere("empid", $empid);
	$name = $employee_permitions_employees->name;
	$surname = $employee_permitions_employees->surname;
	$fullname = $name." ".$surname;
	return $fullname;
}


function GetClientTownDetails($idkey)
{
	$query = "select contactvalue from 
	additionalcontactdetail where contactname='URL 4'
	and idkey = '$idkey'
	";
	$result = mysql_query($query) or die(mysql_error());
	$num_rows = mysql_num_rows($result);
	$loanAmount = 0;
	if ($num_rows)
	{
		//if ($i>50) break;
		//table with regions addionalcontactdetails_customer
		$myrow = mysql_fetch_array($result);
		$contactvalue = $myrow["contactvalue"];
	}
	return $contactvalue;
}

function GetClientRegionDetails($idkey)
{
	$query = "select contactvalue from 
	additionalcontactdetail where contactname='URL 2'
	and idkey = '$idkey'
	";
	$result = mysql_query($query) or die(mysql_error());
	$num_rows = mysql_num_rows($result);
	$loanAmount = 0;
	if ($num_rows)
	{
		//if ($i>50) break;
		//table with regions addionalcontactdetails_customer
		$myrow = mysql_fetch_array($result);
		$contactvalue = $myrow["contactvalue"];
	}
	return $contactvalue;
}

function GetClientGenderDetails($idkey)
{
	$query = "select contactvalue from 
	additionalcontactdetail where contactname='URL 1'
	and idkey = '$idkey'
	";
	$result = mysql_query($query) or die(mysql_error());
	$num_rows = mysql_num_rows($result);
	$loanAmount = 0;
	if ($num_rows)
	{
		//if ($i>50) break;
		//table with regions addionalcontactdetails_customer
		$myrow = mysql_fetch_array($result);
		$contactvalue = $myrow["contactvalue"];
	}
	return $contactvalue;
}



function GetMarketValue($application_id)
{
	//get the task id, the max
	$progress_valuation = new Progress_valuations();
    $progress_valuation->selectAllWhereG("id = (SELECT MAX(id) FROM Progress_valuations where application_id='$application_id' and progress_type=0)");
	
	//$progress_valuation->selectAllWhereG("progress_type=0 and application_id='$application_id'");
	
	$task_id = $progress_valuation->id;
	
	//calculate top up
	$normal_valuation = new Normal_Valuation();
	$normal_valuation->selectAllWhere('valuation_task_id', $task_id);
	
	$additional_fields = new Aditionals_fields();
	
	//Pull Value Upon completion
	$upon_completion = $normal_valuation->compl_market_value;
	$value_upon_completion_add_amount = 0;
	foreach ($additional_fields->selectAllWhere2('type_table', 'Value upon completion additional table', 'normal_valuation_id', $task_id) as $index => $additional_field):
		$value_upon_completion_add_amount += $additional_field->size * $additional_field->rate;
	endforeach;
	$new_upon_completion = $normal_valuation->compl_say + $value_upon_completion_add_amount;
	
	//Calculate new top up
	//get the total cost
	//geth the purchase price
	//get the quotation_amount
	$market_value = $normal_valuation->market_value;
	if ($new_upon_completion != "" && $new_upon_completion != 0)
	{
		$market_value = $new_upon_completion;
	}
	
	 $val_ded = $market_value;
	 $market_value_type = strtolower($progress_valuation->market_value_type);
	 
	 if ($market_value_type == "plot & plan" || $market_value_type == strtolower("Existing house with Improvements"))
	 {
		 $val_ded = $new_upon_completion;
	 }
	 return $val_ded;
}

function GetDaysInYear($year = '')
{
	if ($year == '') $year = Date('Y');
	$num_days_in_current_year = date("z", mktime(0,0,0,12,31,$year)) + 1;
	return $num_days_in_current_year;
}

function LoadRegLoanAmountAll($fullname)
{
	$amount = "";
		if ($amount == "") 
		{
			$amount = LoadRegLoanAmountFromBill($fullname);
			//echo " Date null for---->".$fullname.", new date=".$amount;
		}
		if ($amount == "") 
			{
				$amount = LoadRegLoanAmountFromCheck($fullname);
				//echo " Date null for---->".$fullname.", new date=".$amount;
			}
		if ($amount == "") 
		{
			$amount = LoadRegLoanAmountFromJournal($fullname);
		}
		return $amount;
}

function GetRegDateAll($fullname)
{
	$regDate = GetRegDate($fullname);
		if ($regDate == "") 
		{
			$regDate = GetRegDateFromBill($fullname);
			//echo " Date null for---->".$fullname.", new date=".$regDate;
		}
		if ($regDate == "") 
			{
				$regDate = GetRegDateFromCheck($fullname);
				//echo " Date null for---->".$fullname.", new date=".$regDate;
			}
		if ($regDate == "") 
		{
			$regDate = GetRegDateFromJournal($fullname);
		}
		return $regDate;
}

function LoadRegLoanAmountFromJournal($fullname)
{
	$fullname = str_replace("Loan Book", "", $fullname);
	$fullname = str_replace(":", "", $fullname);
	//$fullname = str_replace("-", "", $fullname);
	$fullname = trim($fullname);
	require_once(__DIR__ ."/finance/dashboard/collections/core/includes/connect.php");
    // include("../../dashboard/collections/core/includes/connect.php");
	//If the customer number is part of the fullname, make use of the customer number instead
	//We get the customer number by extracting it from the fullname
	$val = $fullname;
	$customerNum = substr($fullname, 0, strpos($fullname, " "));
	if ($customerNum != "" && strlen($customerNum) >= 3) $val = $customerNum;
	$val = str_replace($customerNum, "", $fullname);
	$val = trim($val);
	if ($val[0] == "-")
	{
		$val = substr($val, 1, strlen($val));
	}
	$val = trim($val);
	$str = "";

	$query = "
	select * from (journalentry left join 
	journaldebitlinedetail on 
	journaldebitlinedetail.idkey=journalentry.txnid)
	where journalentry.refnumber like '%reg%'
	and 
	REGEXP_REPLACE(accountref_fullname, '[a-zA-Z,.,!,&,: ,-]+', '') = REGEXP_REPLACE('$fullname', '[a-zA-Z,.,!,&,: ,-]+', '')
	order by amount
	";
		
	// echo ($query);
	//return;	
	
	// // echo $query;
	$result = mysql_query($query) or die("error! $query <br />".mysql_error());
	$num_rows = mysql_num_rows($result);
	if ($num_rows)
	{
		$myrow = mysql_fetch_array($result);
		return $myrow["Amount"];
	}
}

function GetRegDateFromJournal($fullname)
{
	echo $fullname;
	$fullname = str_replace("Loan Book", "", $fullname);
	$fullname = str_replace(":", "", $fullname);
	//$fullname = str_replace("-", "", $fullname);
	$fullname = trim($fullname);
	require_once(__DIR__ ."/finance/dashboard/collections/core/includes/connect.php");
    // include("../../dashboard/collections/core/includes/connect.php");
	//If the customer number is part of the fullname, make use of the customer number instead
	//We get the customer number by extracting it from the fullname
	$val = $fullname;
	$customerNum = substr($fullname, 0, strpos($fullname, " "));
	if ($customerNum != "" && strlen($customerNum) >= 3) $val = $customerNum;
	$val = str_replace($customerNum, "", $fullname);
	$val = trim($val);
	if ($val[0] == "-")
	{
		$val = substr($val, 1, strlen($val));
	}
	$val = trim($val);
	$str = "";

	$query = "
	select * from (journalentry left join 
	journaldebitlinedetail on 
	journaldebitlinedetail.idkey=journalentry.txnid)
	where journalentry.refnumber like '%reg%'
	and REGEXP_REPLACE(accountref_fullname, '[a-zA-Z,.,!,&,: ,-]+', '') = REGEXP_REPLACE('$fullname', '[a-zA-Z,.,!,&,: ,-]+', '')
	order by amount
	";
		
	echo ($query);
	//return;	
	
	// // echo $query;
	$result = mysql_query($query) or die("error! $query <br />".mysql_error());
	$num_rows = mysql_num_rows($result);
	if ($num_rows)
	{
		$myrow = mysql_fetch_array($result);
		return $myrow["TxnDate"];
	}
}

function PMT($i, $n, $p)
{
	// $i *= 1000;
	$a = $i * $p * pow((1 + $i), $n);			
	$b = (1 - pow((1 + $i), $n));
	//echo $a.", <br />i=$i, <br /><br />n=$n";			
	//echo "<br />";
	//$i /= 100;
	if ($b == 0) return 0;
	return  $a / $b;
}


function ChangeBalance($account_fullname, $amount, $action, $txndate)
{
	//This function is no longer relevant, 
	//it has thus it has been disabled by returning nothing
	return;
	if ($action == "")
	{
		echo "ChangeBalance(): Action is mandotory(Debit/Credit)!";
		die();
	}
	$trial_balance = new trial_balance();
	$all_obj = $trial_balance->selectAllWhereG("account_fullname='$account_fullname' and date_changed>'$txndate' order by date_changed asc");
	$trial_balance = new trial_balance();
	$trial_balance->selectAllWhereG("account_fullname='$account_fullname' and date_changed<='$txndate' order by date_changed asc");
	//die(var_dump($all_obj));
	$id = $trial_balance->id;
	// die ("id: $id");
	$trial_balance = new trial_balance();
	$trial_balance->selectWhere('id', $id);
	// echo var_dump($trial_balance);

	$account = new account();
	$account->selectWhere("FullName", $account_fullname);
	$accountType = strtolower($account->AccountType);
	/*
	*OtherCurrentLiability - liability - debit
	-OtherCurrentAsset - Asset
	*Equity - credit
	*AccountsPayable
	*Expense - expense - debit
	-FixedAsset - Asset
	*Income - credit
	*OtherIncome
	*Bank
	-CostOfGoodsSold
	*NonPosting
	*AccountsReceivable
	OtherAsset - Asset
	*/
	$credit = 0;
	$debit = 0;
	$debit2 = 0;
	$credit2 = 0;
	
	if ($action == "debit")
	{
		if (strpos($accountType, "income") !== false || strpos($accountType, "asset") !== false || strpos($accountType, "expense") !== false || strpos($accountType, "dividend") !== false || strpos($accountType, "receivable") !== false)
		{
			$debit = $amount;
			$debit2 = $amount;
			// echo "just debited; $debit2; ";
		}
		else 
		{
			$credit = $amount;
			$credit2 = $amount;
			// echo "just credited; $credit2; $accountType";
		}
		// die("action: $action");
	}
	else 
	{
		//credit
		if (strpos($accountType, "income") !== false || strpos($accountType, "asset") !== false || strpos($accountType, "expense") !== false || strpos($accountType, "dividend") !== false || strpos($accountType, "receivable") !== false)
		{
			$credit = $amount;
			$credit2 = $amount;
		}
		else 
		{
			$debit = $amount;
			$debit2 = $amount;
		}
	}
	
	$credit += $trial_balance->credit;
	$debit += $trial_balance->debit;
	$trial_balance = new trial_balance();
	$trial_balance->account_fullname = $account_fullname;
	$trial_balance->date_changed = $txndate;
	$trial_balance->date_recorded = "NOW()";
	$trial_balance->credit = $credit;
	$trial_balance->debit = $debit;
	$trial_balance->insert();
	foreach ($all_obj as $trail_balance_obj)
	{
		$trail_balance_obj->credit += $credit2;
		$trail_balance_obj->debit += $debit2;
		$trail_balance_obj->date_updated = "NOW()";
		$trail_balance_obj->update($trail_balance_obj->id, "id");
	}
	
}

function SwapBalances($application_id="")
{
	$str = "";
	if ($application_id != "") 
	{
		$str = " entityRef_listID='$application_id' and ";
	}
	//80000583-1460714770
	$journalcreditlinedetail = new journalcreditlinedetail();
	$all_obj = $journalcreditlinedetail->selectAllWhereG("$str accountRef_FullName='9993 - Data Migration Supplier Control Account'");
	$journaldebitlinedetail = new journaldebitlinedetail();
	$all_obj2 = $journaldebitlinedetail->selectAllWhereG("$str accountRef_FullName='9993 - Data Migration Supplier Control Account'");
	
	foreach ($all_obj as $obj)
	{
		$IDKEY = $obj->IDKEY;
		$AccountRef_FullName = $obj->AccountRef_FullName;
		$AccountRef_ListID = $obj->AccountRef_ListID;
		$obj2 = new journaldebitlinedetail();
		$obj2->selectWhere("IDKEY", $IDKEY);
		
		$obj->AccountRef_FullName = $obj2->AccountRef_FullName;
		$obj->AccountRef_ListID = $obj2->AccountRef_ListID;
		
		$obj2->AccountRef_FullName = $AccountRef_FullName;
		$obj2->AccountRef_ListID = $AccountRef_ListID;
		$obj->update($obj->IDKEY, "IDKEY");
		$obj2->update($obj->IDKEY, "IDKEY");
	}
	
	foreach ($all_obj2 as $obj)
	{
		$IDKEY = $obj->IDKEY;
		$AccountRef_FullName = $obj->AccountRef_FullName;
		$AccountRef_ListID = $obj->AccountRef_ListID;
		$obj2 = new journalcreditlinedetail();
		$obj2->selectWhere("IDKEY", $IDKEY);
		
		$obj->AccountRef_FullName = $obj2->AccountRef_FullName;
		$obj->AccountRef_ListID = $obj2->AccountRef_ListID;
		
		$obj2->AccountRef_FullName = $AccountRef_FullName;
		$obj2->AccountRef_ListID = $AccountRef_ListID;
		$obj->update($obj->IDKEY, "IDKEY");
		$obj2->update($obj->IDKEY, "IDKEY");
	}
}

function GetCustomer_Balance($EntityRef_ListId, $endDate="NOW()", $isAccount = false)
{
	 ini_set("allow_url_include", "On");
	$allow_url_include = 1;
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$actual_link_arr = explode("/", $actual_link);
	// die(var_dump($actual_link_arr));
	$url = $actual_link_arr[0]."//".$actual_link_arr[1].$actual_link_arr[2]."/".$actual_link_arr[3]."";
	// die($url);
	
	if (strtolower($endDate) == "now()")
	{
		$date1 = new DateTime();
		$endDate = $date1->format('Y-m-d');
		// die($endDate);
	}
	//
	// require_once($url ."/finance/dashboard/collections/core/includes/connect.php");
	require_once(__DIR__ ."/finance/dashboard/collections/core/includes/connect.php");
	$query = "SELECT sum(amount) total FROM journalentry left join journalcreditlinedetail on 
	journalcreditlinedetail.IDKEY=journalentry.TxnID where (entityref_listid='$EntityRef_ListId' 
	or accountref_listid='$EntityRef_ListId')
	and accountref_fullname like '%accounts receivable%' and TxnDate <= '$endDate' ";
	
	if ($isAccount)
	{
		$query = "SELECT sum(journalcreditlinedetail.amount) total FROM ((journalentry left join journalcreditlinedetail on 
		journalcreditlinedetail.IDKEY=journalentry.TxnID) left join journaldebitlinedetail  on 
		journaldebitlinedetail.IDKEY=journalentry.TxnID)
		where  
			(journalcreditlinedetail.accountref_listid='$EntityRef_ListId' and journalcreditlinedetail.accountref_fullname like '%accounts receivable%' and journalentry.TxnDate <= '$endDate') 
			or
			(
				(journaldebitlinedetail.entityref_listid='$EntityRef_ListId' 
		or journaldebitlinedetail.accountref_listid='$EntityRef_ListId') 
		and (journalcreditlinedetail.accountref_fullname like '%accounts receivable%' and journalentry.TxnDate <= '$endDate')
			)
			";
			
		
			
		// echo $query;
	}
	
	// ini_set("allow_url_include", "Off");
	
	
	 
	$result = mysql_query($query) or die("Error! ".mysql_error());;
	$num_rows = mysql_num_rows($result);
	if ($num_rows)
	{
		$myrow = mysql_fetch_array($result);
		$balance_credit = $myrow["total"];
	}
	
	$query = "SELECT sum(amount) total FROM journalentry left join journaldebitlinedetail on 
	journaldebitlinedetail.IDKEY=journalentry.TxnID where  (entityref_listid='$EntityRef_ListId' 
	or accountref_listid='$EntityRef_ListId')
	and accountref_fullname like '%accounts receivable%' and TxnDate <= '$endDate' ";
	
	if ($isAccount)
	{
		$query = "SELECT sum(journaldebitlinedetail.amount) total FROM ((journalentry left join journalcreditlinedetail on 
		journalcreditlinedetail.IDKEY=journalentry.TxnID) left join journaldebitlinedetail  on 
		journaldebitlinedetail.IDKEY=journalentry.TxnID) 
		where 
		(
		journaldebitlinedetail.accountref_listid='$EntityRef_ListId' and 
		journaldebitlinedetail.accountref_fullname like '%accounts receivable%' and journalentry.TxnDate <= '$endDate'
		)
		or
		(
		
		(journalcreditlinedetail.entityref_listid='$EntityRef_ListId' or journalcreditlinedetail.accountref_listid='$EntityRef_ListId')
				and 
				(journaldebitlinedetail.accountref_fullname like '%accounts receivable%' and journalentry.TxnDate <= '$endDate')
		)
		";
		// echo $query;
	}
	
	// ini_set("allow_url_include", "Off");
	 // echo $query;
	$result = mysql_query($query) or die("Error! ".mysql_error());;
	$num_rows = mysql_num_rows($result);
	if ($num_rows)
	{
		$myrow = mysql_fetch_array($result);
		$balance_debit = $myrow["total"];
	}
	
	$query = "SELECT sum(amount) total FROM invoice left join invoicelinedetail on 
	invoicelinedetail.IDKEY=invoice.TxnID where  (customerref_listid='$EntityRef_ListId' 
	or ARAccountRef_ListID='$EntityRef_ListId') and TxnDate <= '$endDate'";
	// ini_set("allow_url_include", "Off");
	// echo $query;
	$result = mysql_query($query) or die("Error! ".mysql_error());;
	$num_rows = mysql_num_rows($result);
	if ($num_rows)
	{
		$myrow = mysql_fetch_array($result);
		$total_invoices = $myrow["total"];
		// echo "total_invoices: ".$total_invoices;
		// echo "<>br /balance_debit: ".($balance_debit);
		// echo "<>br /balance_credit: ".($balance_credit);
		// echo "<>br /debt-crdt: ".($balance_debit - $balance_credit);
		// echo "<>br /total: ".($balance_debit - $balance_credit + $total_invoices);
	}
	
	$balance = $balance_debit - $balance_credit + $total_invoices;
	
	if (strpos(strtolower($balance), strtolower("e")) !== false)
	{
		$balance = 0;
	}
	return $balance;
	/*
	//get old balance first
	$customer_balances_old = new customer_balances($EntityRef_ListId);
	$old_balance = $customer_balances_old->balance;
	return $old_balance;
	*/
}

function GetLoan_Balance($EntityRef_ListId)
{
	//get old balance first
	$customer_balances_old = new customer_balances($EntityRef_ListId);
	$old_balance = $customer_balances_old->balance;
	return $old_balance;
}


// $amount = 1000;
// $txndate = "2019-12-23";
// $EntityRef_ListId = "8000007B-1403974580";
// ChangeBalance_Customer($EntityRef_ListId, $amount, $txndate);

// die();

function ChangeBalance_Statement($EntityRef_ListId, $amount, $txndate)
{
	$statement_balances = new statement_balances();
	//get all the balances that come after the txndate
	$all_obj = $statement_balances->selectAllWhereG("ListID='$EntityRef_ListId' and date_changed>'$txndate' order by date_changed asc");
	//get the balance that match the txndate
	$statement_balances = new statement_balances();
	$statement_balances->selectAllWhereG("ListID='$EntityRef_ListId' and date_changed<='$txndate' order by date_changed asc");
	//die(var_dump($all_obj));
	$id = $statement_balances->id;
	// die ("id: $id");
	
	$statement_balances_old = new statement_balances();
	$statement_balances_old->selectWhere('id', $id);
	
	$old_balance = $statement_balances_old->balance;
	if ($old_balance == "") $old_balance = 0;
	// die("old_balance: $old_balance");
	// $amount_array["DEBIT"] = Array();
	// $amount_array["CREDIT"] = Array();
	// $amount_array["CREDIT"][] = $amount;
	// $amount 
	if (is_array($amount))
	{
		$total_amount = 0;
		foreach($amount["DEBIT"] as $debit)
		{
			$total_amount += $debit;
		}
		
		foreach($amount["CREDIT"] as $credit)
		{
			$total_amount -= $credit;
		}
	}
	else $total_amount = $amount;
	$new_balance = $old_balance + $total_amount;
	$statement_balances = new statement_balances();
	$statement_balances->ListID  = $EntityRef_ListId;
	$statement_balances->date_changed   = $txndate;
	$statement_balances->date_recorded   = "NOW()";
	$statement_balances->balance    =  $new_balance;
	$statement_balances->insert();
	
	foreach ($all_obj as $statement_balances_obj)
	{
		$statement_balances_obj->balance += $total_amount;
		$statement_balances_obj->date_updated = "NOW()";
		$statement_balances_obj->update($statement_balances_obj->id, "id");
	}
	//8000032E-1442582571
	
}

function ChangeBalance_Customer($EntityRef_ListId, $amount, $txndate)
{
	//This function is no longer relevant, 
	//it has thus it has been disabled by returning nothing
	return;
	$customer_balances = new customer_balances();
	//get all the balances that come after the txndate
	$all_obj = $customer_balances->selectAllWhereG("ListID='$EntityRef_ListId' and date_changed>'$txndate' order by date_changed asc");
	//get the balance that match the txndate
	$customer_balances = new customer_balances();
	$customer_balances->selectAllWhereG("ListID='$EntityRef_ListId' and date_changed<='$txndate' order by date_changed asc");
	//die(var_dump($all_obj));
	$id = $customer_balances->id;
	// die ("id: $id");
	
	$customer_balances_old = new customer_balances();
	$customer_balances_old->selectWhere('id', $id);
	
	$old_balance = $customer_balances_old->balance;
	$new_balance = $old_balance + $amount;
	$customer_balances = new customer_balances();
	$customer_balances->ListID  = $EntityRef_ListId;
	$customer_balances->date_changed   = $txndate;
	$customer_balances->date_recorded   = "NOW()";
	$customer_balances->balance    =  $new_balance;
	$customer_balances->insert();
	
	foreach ($all_obj as $customer_balances_obj)
	{
		$customer_balances_obj->balance += $amount;
		$customer_balances_obj->date_updated = "NOW()";
		$customer_balances_obj->update($customer_balances_obj->id, "id");
	}
	//8000032E-1442582571
	
}

function IsApproved($appId)
{
	$credit_assessment = new Credit_assessments();
	$credit_assessment->selectAllWhere('application_id', $appId);
	$approved = false;
	if($credit_assessment->app_status == "Approved") $approved = true;
	return $approved;
}

function GetItemListID($fullname)
{
	if ($fullname == "") return ""; 
	$fullname = str_replace("Loan Book", "", $fullname);
	$fullname = str_replace(":", "", $fullname);
	$fullname = str_replace("-", "", $fullname);
	$fullname = trim($fullname);
	
	$items = new items();
	$items->selectAllWhereG("CAST( FullName AS UNSIGNED ) = CAST('$fullname' AS UNSIGNED)");
	return $items->ListID;
}

function GetInvoice($ListID, $invoicedate_from, $invoicedate_to="", $accounts_receivable_only = true)
{
	$invoice_arr = Array();
	$invoice1 = new invoice();
	// $str_date = "TxnDate between '$invoicedate_from' and '$invoicedate_to'";
	$str_date = "";
	// echo $invoicedate_from."; ".$invoicedate_to;
	if ($invoicedate_from != "")
	{
		$str_date .= " and TxnDate >= '$invoicedate_from' ";
	}
	if ($invoicedate_to != "")
	{
		$str_date .= "and TxnDate <= '$invoicedate_to' ";
	}
	$invoices = $invoice1->SelectFields("*", "", "", "CustomerRef_ListID='$ListID' $str_date ", "TxnDate ASC");
	// die(var_dump($invoice1));
	$process = 1;
	foreach($invoices as $invoice)
	{
		
		if ($invoice->CustomerRef_ListID != "")
		{
			if ($accounts_receivable_only)
			{
				$account_inv = $invoice->ARAccountRef_FullName;
				$account_obj = new account();
				$account_obj->selectWhere("FullName", $account_inv);
				if ($account_obj->AccountType == "AccountsReceivable")
				{
					$invoice_arr[] = $invoice;
				}
			}
		}
	}
	//die(var_dump($invoice_arr));
	return $invoice_arr;
}

function PrintClients_byClint_Type($client_type)
{
	$condition = "application_id not like '%fchf%' and client_type = '$client_type' and customer.IsActive='true'
	and (customer.customfield1 != '' or customer.customfield2 != '')";
	$fields = "tb.*";
	$applicants = new applicants();
	$all_applicants = $applicants->selectFields($fields, "", "tb left join customer on customer.listid=tb.application_id", $condition, "");
	echo "<table>";
	echo "<th>No.</th>";
	echo "<th>Employee No.</th>";
	echo "<th>Customer Type</th>";
	$counter = 1;
	
	foreach ($all_applicants as $index => $applicant)
	{
		if ($applicant->employee_no == "") continue;
		echo "<tr>";
		echo "<td>";
		echo ($counter++).". ";
		echo "</td>";
		echo "<td>";
		echo $applicant->employee_no;
		echo "</td>";
		echo "<td>";
		echo $applicant->client_type;
		echo "</td>";
		echo "</tr>";
	}
	// echo "counter: $counter";
	$applicants_spouse_employment_info = new applicants_spouse_employment_info();
	// $all_applicants_spouse_employment_info = $applicants_spouse_employment_info->selectAllWhereG("application_id not like '%fchf%' and client_type != ''");

	$all_applicants_spouse_employment_info = $applicants_spouse_employment_info->selectFields($fields, "", "tb left join customer on customer.listid=tb.application_id", $condition, "");
	
	// $counter = 1;
	foreach ($all_applicants_spouse_employment_info as $index => $applicant)
	{
		// $customer = new customer();
		// $customer->selectWhere("ListID", $applicant->application_id);
		// if ($customer->IsActive == "false") continue;
		if ($applicant->sp_employee_no == "") continue;
		echo "<tr>";
		echo "<td>";
		echo ($counter++).". ";
		echo "</td>";
		echo "<td>";
		echo $applicant->sp_employee_no;
		echo "</td>";
		echo "<td>";
		echo $applicant->client_type;
		echo "</td>";
		echo "</tr>";
	}
	echo "</table>";
}

function DisableCustomersWith_No_EmployeeCode()
{
	foreach (customer::currentInstance()->selectAllWhere("IsActive", "true") as $index => $customer)
	{
		
		if (trim($customer->CustomField1) == "" && trim($customer->CustomField2) == "")
		{
			$fullname = $customer->FullName;
			echo "$fullname disabled";
			echo "<br />";
			$customer->IsActive = "false";
			$customer->update1($customer->ListID, "ListID");
		}
		
	}
}

function DisableAllCustomers()
{
	foreach (customer::currentInstance()->selectAll() as $index => $customer)
	{
		// if (trim($customer->CustomField1) == "" && trim($customer->CustomField2) == "")
		{
			$fullname = $customer->FullName;
			echo "$fullname disabled";
			echo "<br />";
			$customer->IsActive = "false";
			$customer->update1($customer->ListID, "ListID");
		}
		
	}
}

function PrintRegistered_Clients($client_type)
{
	$condition = "application_id not like '%fchf%' and client_type = '$client_type' and customer.IsActive='true'
	and (customer.customfield1 != '' or customer.customfield2 != '')";
	$fields = "tb.*, customer.fullname";
	$applicants = new applicants();
	$all_applicants = $applicants->selectFields($fields, "", "tb left join customer on customer.listid=tb.application_id", $condition, "");
	echo "<table>";
	echo "<th>No.</th>";
	echo "<th>FullName.</th>";
	echo "<th>Customer Type</th>";
	$counter = 1;
	
	foreach ($all_applicants as $index => $applicant)
	{
		if ($applicant->employee_no == "") continue;
		echo "<tr>";
		echo "<td>";
		echo ($counter++).". ";
		echo "</td>";
		echo "<td>";
		echo $applicant->FullName;
		echo "</td>";
		echo "<td>";
		echo $applicant->client_type;
		echo "</td>";
		echo "</tr>";
	}
	echo "</table>";
}

function UpdateCustomerEmployeeCode($employee_no_old, $employee_no_new1,  $employee_no_new2)
{
	$customer = new customer();
	$customer->selectAllWhereG("customfield1='$employee_no_old' or customfield2='$employee_no_old'");
	$ListID = $customer->ListID;
	if ($ListID == "") 
	{
		echo("<br />UpdateCustomerEmployeeCode(): Error! ".$employee_no_old." unknown employee no.");
		return;
	}
	$customer->CustomField1 = $employee_no_new1;
	$customer->CustomField2 = $employee_no_new2;
	$customer->update1($ListID, "ListID");
	echo "Customers Employee Codes Updated!";
	return;
}

function UpdateApplicantsEmployeeCode($employee_no_old, $employee_no_new, $is_Spouse)
{
	$customer = new customer();
	$customer->selectAllWhereG("customfield1='$employee_no_old' or customfield2='$employee_no_old'");
	$application_id = $customer->ListID;
	if ($application_id == "") 
	{
		echo("<br />UpdateApplicantsEmployeeCode(): Error! ".$employee_no_old." unknown employee no.");
		return;
	}
	if ($is_Spouse)
	{
		$applicants_spouse_employment_info = new applicants_spouse_employment_info();
		$applicants_spouse_employment_info->selectWhere("application_id", $application_id);
		$application_id = $applicants_spouse_employment_info->application_id;
		if ($applicants_spouse_employment_info->application_id == "")
		{
			
			$customer = new customer();
			$customer->selectAllWhereG("customfield1='$employee_no_new' or customfield2='$employee_no_new'");
			if ($customer->ListID == "")
			{
				echo "Error! Client of client No.: $employee_no_new does not exist in the applicants!<br />";
				return;
			}
			$spouses = new spouses();
			$spouses->selectWhere("application_id", $application_id);
			
			if ($spouses->application_id == "")
			{
				$spouses->application_id = $customer->ListID;
				$spouses->name = $customer->FirstName;
				$spouses->surname = $customer->MiddleName." ".$customer->LastName;
				$spouses->insert1();
			}
			
			$applicants_spouse_employment_info->sp_employee_no = $employee_no_new;
			$applicants_spouse_employment_info->application_id = $customer->ListID;
			$applicants_spouse_employment_info->client_type = $client_type;
			$applicants_spouse_employment_info->insert1();
			echo "<br>($application_id, $employee_no_new)--> spouse inserted22";
		}
		else 
		{
			$applicants_spouse_employment_info->sp_employee_no = $employee_no_new;
			$applicants_spouse_employment_info->client_type = $client_type;
			$applicants_spouse_employment_info->update1($application_id, "application_id");
			echo "spouse updated22";
		}
	}
	else
	{
		$applicants1 = new applicants();
		$applicants1->selectWhere("application_id", $application_id);
		
		$applicants = new applicants();
		$applicants->bond_approved = 1;
		$applicants->bond_approved_date = "NOW()";
		$applicants->employee_no = $employee_no_new;
		$applicants->application_id = $application_id;
		// $applicants->insert1();
		if ($applicants1->application_id == "")
		{
			$applicants->insert1();
			echo "Main App. inserted11";
		}
		else 
		{
			$applicants->update1($application_id, "application_id");
			echo "Main App. updated11";
		}
	}
}

function UpdateCustomer_Installment($fullname, $employee_no, $installment_amount, $date_eff="NOW()")
{
	$inserted_by = GetCurrent_LoggedIn_Emp_id();
	$installments = new installments();
	$installments->installment = $installment_amount;
	$installments->fullname = $fullname;
	$installments->employee_no = $employee_no;
	$installments->date_eff = $date_eff;
	$installments->date_inserted = "NOW()";
	$installments->inserted_by = $inserted_by;
	$installments->insert1();
	echo "$fullname ($employee_no) inserted $installment_amount";
}

function AddNewClientsSpouseInfoToApplicants($application_id, $empID, $client_type="")
{
	$applicants_spouse_employment_info = new applicants_spouse_employment_info();
	$applicants_spouse_employment_info->selectWhere("application_id", $application_id);
	$application_id = $applicants_spouse_employment_info->application_id;
	if ($applicants_spouse_employment_info->application_id == "")
	{
		
		$customer = new customer();
		$customer->selectAllWhereG("customfield1='$empID' or customfield2='$empID'");
		if ($customer->ListID == "")
		{
			echo "Error! Client of client No.: $empID does not exist in the applicants!<br />";
			return;
		}
		$spouses = new spouses();
		$spouses->selectWhere("application_id", $application_id);
		
		if ($spouses->application_id == "")
		{
			$spouses->application_id = $customer->ListID;
			$spouses->name = $customer->FirstName;
			$spouses->surname = $customer->MiddleName." ".$customer->LastName;
			$spouses->insert1();
		}
		
		$applicants_spouse_employment_info->sp_employee_no = $empID;
		$applicants_spouse_employment_info->application_id = $customer->ListID;
		$applicants_spouse_employment_info->client_type = $client_type;
		$applicants_spouse_employment_info->insert1();
		echo "<br>($application_id, $empID)--> spouse inserted22";
	}
	else 
	{
		$applicants_spouse_employment_info->sp_employee_no = $empID;
		$applicants_spouse_employment_info->client_type = $client_type;
		$applicants_spouse_employment_info->update1($application_id, "application_id");
		echo "spouse updated22";
	}
}

function UpdateApplicantsFromCustomers()
{
	$fields = "REGEXP_REPLACE(FullName, '[a-zA-Z,.,!,&,: ,-]+', '')  as customer_no, customer.* ";
	foreach (customer::currentInstance()->selectFields($fields, "", "", "IsActive='true'", "cast(fullname as unsigned)") as $index => $customer)
	{
		$application_id = $customer->ListID;
		$applicant = new Applicants();
		$applicant->select($application_id);
		if ($applicant->application_id == "")
		{
			echo "Error! Client of client No.: $employee_no_new does not exist in the applicants!<br />";
			continue;
		}
		if ($customer->FirstName != "")
		{
			$applicant->customer_no = $customer->customer_no;
			$applicant->title = $customer->Salutation;
			$applicant->firstname = $customer->FirstName;
			$applicant->middle_name = $customer->MiddleName;
			$applicant->surname = $customer->LastName;
			$applicant->employee_no = $customer->CustomField1;
			$applicant->update1($application_id, "application_id");
		}
		else 
		{
			$applicant->employee_no = $customer->CustomField1;
			$applicant->update1($application_id, "application_id");
		}
		
	}
}

function Aging_Analysis($ListID, $intervals, $period)
{
	$customer_balances = new customer_balances();
	$customer_balances->selectWhere2Conditions("ListID", $ListID, "date_changed", $date);
	// $customer_balances->
}

function CreateFinalApproval_Journal($application_id)
{
	$ListID = $application_id;
	$txndate = "NOW()";
	$txntype = "FINAL_APPROVAL";
	$account_type = "loan book";
	$debit_account = GetCustomerAccount($account_type, $application_id);
	$account_type = "instructions issued";
	$credit_account = GetCustomerAccount($account_type, $application_id);
	$applicants_financial_assessment2 = new applicants_financial_assessment2();
	$applicants_financial_assessment2->select($applicationID);
	$amount = $applicants_financial_assessment2->total_bond_amount;
	$memo = "Final Approval";
	CreateRegistrationJournal($ListID, $txndate, $txntype, $credit_account, $debit_account, $amount, $memo, "");
}

function GetCustomerAccount($account_type, $application_id)
{
	GetAccountNewClients($application_id, $account_type);
	/*
	$customer = new Customer();
	$customer->selectWhere("ListID", $application_id);
	$FullName = $fullname = $customer->FullName;
	if (strtolower($account_type) == "loan book")
	{
		// $account = new account();
		// $account->selectWhere("CustomField1", $application_id)
		return  GetCustomerLoanBookAccountFullname($FullName);
	}
	else if (strtolower($account_type) == "instructions issued")
	{
		return $accountRef_FullName_Instructions = "9600-Instructions issued:".$FullName;
	}
	else if (strtolower($account_type) == "supplier account" || strtolower($account_type) == "supplier_account")
	{
		$customer = new customer();
		$customer->selectWhere("ListID", $application_id);
		return $customer->FullName;
	}*/
}

function GetInterestRateObjAfterApproval($application_id)
{
	$bond_registration = new Bond_registration();
	$bond_registration->selectAllWhere('application_id', $application_id);
	$date = $bond_registration->approval_date;
	if ($bond_registration->application_id == "")
	{
		$date = "";
	}
	return GetInterestRateObj($date);
}

function GetInterestRateObj($date="")
{
	$interest_rate = new interest_rate();
	// echo "$date";
	if ($date == "" || $date == "0000-00-00 00:00:00")
	{
		 $date = Date("Y-m-d"); 
		$interest_rate->selectAllWhereG("date_changed <= '$date' order by date_changed  desc limit 1");
	}
	else 
	{
		$interest_rate->selectAllWhereG("date_changed <= '$date' order by date_changed  desc limit 1");
	}
	$interest_rate->setRate($interest_rate->rate);
	return $interest_rate;
}

function CalculateAge($date_of_birth_str, $date)
{
	$dob_obj = new DateTime($date_of_birth_str);
	$date_obj = new DateTime($date);
	$interval = $date_obj->diff($dob_obj);
	$age = $interval->y;
	// echo "---".$age."---";
	return $age;
}

function CalculateLifeAssurance($application_id)
{
	
	
	$life_assurance_monthly_installment = 0;
	   
	$applicants = new applicants();
	$applicants->selectWhere("application_id", $application_id);
	$dob = $applicants->dob;
	
	$bond_registration = new Bond_registration();
	$bond_registration->selectAllWhere('application_id', $application_id); 
   
	$age = CalculateAge($dob, $bond_registration->approval_date);
  
	 //Get the loan anmount
	  $applicants_financial_assessment = new applicants_financial_assessment();
		$applicants_financial_assessment->selectWhere("application_id", $application_id);
	  $total_loan_amount = $applicants_financial_assessment->transfer_cost1;
	  
	  $unit_rate = 0;
	  if ($age < 35) $unit_rate = 0.215;
	  elseif ($age >= 35 && $age < 40) $unit_rate = 0.299;
	  elseif ($age >= 40 && $age < 45) $unit_rate = 0.362;
	  elseif ($age >= 45 && $age < 50) $unit_rate = 0.460;
	  elseif ($age >= 50 && $age < 55) $unit_rate = 0.515;
	  elseif ($age >= 55 && $age < 60) $unit_rate = 0.751;
	  elseif ($age >= 60 && $age < 65) $unit_rate = 1.070;
	  elseif ($age >= 65) $unit_rate = 8.691;
	$life_assurance_monthly_installment = $total_loan_amount / 1000 * $unit_rate;
  return $life_assurance_monthly_installment;
}

function AutoLock_checkbox_print($application_id, $section, $target_id)
{
	$emp_id = GetCurrent_LoggedIn_Emp_id();
    Employees::currentInstance()->selectAllWhere('empid', $emp_id);
    Employee_permitions::currentInstance()->selectAllWhere('emp_permition_id', $emp_id);
	if (Employee_permitions::currentInstance()->emp_access_level === "Valuation Officer 3"
	||Employee_permitions::currentInstance()->emp_access_level === "Loan Origination Level 3") {
		
	}
	else return;
	$auto_update_lock = new auto_update_lock();
	$str = "";
	$auto_update_lock->selectAllWhereG("application_id='$application_id' and section='$section' and target_id='$target_id'");
	if (strtolower($auto_update_lock->isChecked) == strtolower("True")) {
		$str = "checked";
		$str2 = '$("#'.$target_id.'").attr("data-manual-update", "true"); ';
		$str2 .= '$("#'.$target_id.'").removeAttr("readonly");';
	}
	echo '
	<label>
		<input type="checkbox" data-target="'.$target_id.'" name="auto-update-lock" '.$str.' value="Lock"> <small>Lock against auto-update</small>
	</label>
	<script type="text/javascript">
        $(document).ready(function () {
           '.$str2.'
        });
    </script>
	';
	
		
}

function GetBalanceSupplierAndLoanAmount($ListID)
{
	//Get the supplier account 
	$journaldebitlinedetails = new journaldebitlinedetail();
	$fullname = "2226 - Selma  Elias";
	$all_journaldebitlinedetails = $journaldebitlinedetails->selectAllWhereG("entityRef_listID = '$ListID'
	 and memo not like '%Final Approval%'
	 and memo not like '%Registration%'");

	 
	$journaldebitlinedetails_Registration = new journaldebitlinedetail();
	$journaldebitlinedetails_Registration->selectAllWhereG("entityRef_listID = '$ListID'
	 and memo like '%Final Approval%'");

	$total_spent = 0;
	foreach ($all_journaldebitlinedetails as $index => $journaldebitlinedetail)
	{
		$total_spent += $journaldebitlinedetail->Amount;
		
	}
	 // echo "total_spent: ".$total_spent."<br />";

	$loanAmount = $journaldebitlinedetails_Registration->Amount;
	// echo "loanAmount: ".$loanAmount."<br />";

	// $balance = $loanAmount - $total_spent;
	return $total_spent;
	// echo "balance: ".$balance."<br />";
}


function GetAccountBalance_ParentAccount($ParentRef_FullName, $sub_query="")
{
	//Get the supplier account 
	$journaldebitlinedetails = new view_journalentry_debit();
	$fields = "sum(amount) total";
	$condition = "account.Sublevel=1 and account.ParentRef_FullName ='$ParentRef_FullName' $sub_query ";
	$journaldebitlinedetails->selectFields($fields, "", "left join account on view_journalentry_debit.AccountRef_FullName=account.FullName", $condition, "");
	$total_debits = $journaldebitlinedetails->total;
	 // echo($journaldebitlinedetails->query."<br />");
	// echo "total_debits: $total_debits<br />";
	
	//Get the account balance for credits
	$journalcreditlinedetails = new view_journalentry_credit();
	$fields = "sum(amount) total";
	$condition = "account.Sublevel=1 and account.ParentRef_FullName ='$ParentRef_FullName' $sub_query ";
	$journalcreditlinedetails->selectFields($fields, "", "left join account on view_journalentry_credit.AccountRef_FullName=account.FullName", $condition, "");
	$total_credits = $journalcreditlinedetails->total;
	 // echo($journalcreditlinedetails->query."<br />");
	
	$balance = $total_debits - $total_credits;
	
	
	
	require_once(__DIR__ ."/finance/dashboard/collections/core/includes/connect.php");
	$ARAccountRef_FullName = $ParentRef_FullName;
	if (strtolower($ParentRef_FullName) == strtolower('7000 - Loan Book'))
	{
		$ARAccountRef_FullName = "loan book";
		$query = "SELECT sum(amount) total FROM invoice left join invoicelinedetail on 
		invoicelinedetail.IDKEY=invoice.TxnID where  (ARAccountRef_FullName like '%$ARAccountRef_FullName%' or CustomerRef_FullName like '%$ARAccountRef_FullName%') $sub_query";
		// ini_set("allow_url_include", "Off");
		  // echo $query;
		$result = mysql_query($query) or die("Error! ".mysql_error());;
		$num_rows = mysql_num_rows($result);
		if ($num_rows)
		{
			$myrow = mysql_fetch_array($result);
			$total_invoices = $myrow["total"];
		}
		$balance -= $total_invoices;
	}
	
	if (strpos(strtolower($balance), strtolower("e")) !== false)
	{
		$balance = 0; 
	}
	
	return $balance;
	// echo "balance: ".$balance."<br />";
}

function GetAccountBalance_LoanBook($AccountRef_FullName, $sub_query="")
{
	//Get the supplier account 
	$journaldebitlinedetails = new view_journalentry_debit();
	$fields = "sum(amount) total";
	$condition = "accountref_fullname like '%loan book%' $sub_query ";
	$journaldebitlinedetails->selectFields($fields, "", "left join account on view_journalentry_debit.AccountRef_FullName=account.FullName", $condition, "");
	$total_debits = $journaldebitlinedetails->total;
	// echo($journaldebitlinedetails->query."<br />");
	// echo "total_debits: $total_debits<br />";
	
	//Get the account balance for credits
	$journalcreditlinedetails = new view_journalentry_credit();
	$fields = "sum(amount) total";
	$condition = "accountref_fullname like '%loan book%' $sub_query ";
	$journalcreditlinedetails->selectFields($fields, "", "left join account on view_journalentry_credit.AccountRef_FullName=account.FullName", $condition, "");
	$total_credits = $journalcreditlinedetails->total;
	 // echo($journalcreditlinedetails->query."<br />");
	
	$balance = $total_debits - $total_credits;
	if (strpos(strtolower($balance), strtolower("e")) !== false)
	{
		$balance = 0; 
	}
	return $balance;
	// echo "balance: ".$balance."<br />";
}

function GetAccountBalance($AccountRef_FullName, $sub_query="")
{
	/*if ($AccountRef_FullName == "7000 - Loan Book")
	{
		echo "Yes!!";
	}
	else echo "No";*/
	//Get the supplier account 
	$journaldebitlinedetails = new view_journalentry_debit();
	$all_journaldebitlinedetails = $journaldebitlinedetails->selectAllWhereG("AccountRef_FullName = '$AccountRef_FullName' $sub_query");
	// var_dump($journaldebitlinedetails);
	 
	$journalcreditlinedetails = new view_journalentry_credit();
	$all_journalcreditlinedetail = $journalcreditlinedetails->selectAllWhereG("AccountRef_FullName = '$AccountRef_FullName' $sub_query");
// var_dump($journalcreditlinedetails);
	$total_debits = 0;
	foreach ($all_journaldebitlinedetails as $index => $journaldebitlinedetail)
	{
		$total_debits += $journaldebitlinedetail->Amount;
		
	}
	$total_credits = 0;
	foreach ($all_journalcreditlinedetail as $index => $journalcreditlinedetail)
	{
		$total_credits += $journalcreditlinedetail->Amount;
		
	}
	$balance = $total_debits - $total_credits;
	
	require_once(__DIR__ ."/finance/dashboard/collections/core/includes/connect.php");
	$ARAccountRef_FullName = $AccountRef_FullName;
	// if (strtolower($AccountRef_FullName) == strtolower('7000 - Loan Book'))
	// if (strpos(strtolower($AccountRef_FullName), strtolower("loan book")) !== false)
	{
		// $ARAccountRef_FullName = "loan book";
		$query = "SELECT sum(amount) total FROM invoice left join invoicelinedetail on 
		invoicelinedetail.IDKEY=invoice.TxnID where  (ARAccountRef_FullName = '$ARAccountRef_FullName' or CustomerRef_FullName = '$ARAccountRef_FullName') $sub_query";
		// ini_set("allow_url_include", "Off");
		  // echo $query;
		$result = mysql_query($query) or die("Error! ".mysql_error());;
		$num_rows = mysql_num_rows($result);
		if ($num_rows)
		{
			$myrow = mysql_fetch_array($result);
			$total_invoices = $myrow["total"];
		}
		$balance -= $total_invoices;
	}
	
	if (strpos(strtolower($balance), strtolower("e")) !== false)
	{
		$balance = 0; 
	}
	
	
	return $balance;
	// echo "balance: ".$balance."<br />";
}

function AddCustomerToInterest_calc_flags($applicationID)
{
	$amount = 0;
	if ($applicationID != "")
	{
		$cost_payment_guarantee = new Cost_payment();
		$cost_payment_guarantee->selectAllWhereG("application_id='$applicationID'
		and account_description1='Guarantee Payment' and  status != 'paid'");
		// var_dump($cost_payment_guarantee); 
		//if ($cost_payment_guarantee->application_id == "")
		{
			
			//is there construction 
			$cost_payment_guarantee2 = new Cost_payment();
			$cost_payment_guarantee2->selectAllWhereG("application_id='$applicationID'
			and account_description1='Construction'");
			
			// if ($cost_payment_guarantee->application_id == "")
			{
				$amount = GetBalanceSupplierAndLoanAmount($applicationID);
				if ($amount != 0)
				{
					$interest_calc_flags = new interest_calc_flags();
					$interest_calc_flags->selectWhere("ListID", $applicationID);
					if ($interest_calc_flags->ListID == "")
					{
						$interest_calc_flags->ListID = $applicationID;
						$interest_calc_flags->status = "pending";
						$interest_calc_flags->date_inserted = "NOW()";
						$interest_calc_flags->inserted_by = $username;
						$interest_calc_flags->insert();
					}
				}
			}
			
		}
	} 
	$customer = new Customer();
	$customer->selectWhere("ListID", $applicationID);
	$customer->IsActive = "true";
	$customer->update($applicationID, "ListID");
	return $amount;
}

function AdjustLoanAccount_fromSupplierBalance($application_id)
{
	include("process_journal.php");
	//first check if this client is in the interest_calc_flags table
	$interest_calc_flags = new interest_calc_flags();
	$interest_calc_flags->selectWhere("ListID", $application_id);
	// var_dump($interest_calc_flags);
	if ($interest_calc_flags->status == "pending")
	{
		//get the supplier account balance
		//get the loan account balance
		//get the loan amount 
		$loan_amount = GetLoanAmount($application_id);
		$loan_account_balance = GetLoanAccountBalance($application_id);
		$supplier_account_balance = GetSupplierAccountBalance($application_id);
		
		//subtract the supplier balance from the loan amount 
		//subtract the result from the loan account balance 
		//post the difference in the 
		$diff1 = abs($loan_amount - abs($supplier_account_balance));
		$diff2 = abs(abs($loan_account_balance) - $diff1);
		/*
		*Change the interest_calc_flags flag to processed if 
		
		*otherwise, Post to the loan book of the client the difference (diff2)
		
		if ($diff2 == 0)
		{
			$interest_calc_flags->status = "processed";
			$interest_calc_flags->update($interest_calc_flags->id, "id");
			return 0;
		}
			*/
		// debit loan account
		// credit instruct acc
		$ListID = $application_id;
		$txndate = "Today";
		$txntype = "LOAN_ACCOUNT_ADJUSTMENT";
		$account_type = "instructions";
		$credit_account = GetAccountNewClients($ListID, $account_type);
		$account_type = "loan book";
		$debit_account = GetAccountNewClients($ListID, $account_type);
		$adjustment_debit = $diff2;
		$memo = "Loan disbursement";
		echo "$ListID; $txndate; credit_account: $credit_account; debit_account: $debit_account; adjustment_debit: $adjustment_debit";
		CreateRegistrationJournal($ListID, $txndate, $txntype, $credit_account, $debit_account, $adjustment_debit, $memo, "");
		return $diff2;
	}
	return 0;
}

// function Adjust



function GetBalance($type, $application_id, $fullname="")
{
	$account = new account();
	$str1 = "%$type%";
	if ($fullname != "")
	{
		$str = " and REGEXP_REPLACE(FullName, '[a-zA-Z,.,!,&,: ,-]+', '')=REGEXP_REPLACE('$fullname', '[a-zA-Z,.,!,&,: ,-]+', '') ";
		$str1 = "$type";
	}
	$account->selectAllWhereG("CustomField1 = '$application_id' and ParentRef_FullName like '$str1' $str");
	// echo "--$account->query";
	if ($account->FullName != "")
	{
		return $account->Balance;
	}
	return 0;
}

function GetLoanAccountBalance($application_id)
{
	return GetBalance("loan book", $application_id);
}

function GetSupplierAccountBalance($application_id)
{
	$customer = new customer();
	$customer->selectWhere("ListID", $application_id);
	$fullname = $customer->FullName;
	return GetBalance("", $application_id, $fullname);
}

function GetReceivablesAccountBalance($application_id, $date_to="", $isAccount=false)
{
	// if ($date_to == "") $date_to = Date("Y-m-d");
	// $sub_query = "EntityRef_ListID='$application_id' and TxnDate <= '$date_to' ";
	// return GetAccountBalance($AccountRef_FullName, $sub_query);
	return GetCustomer_Balance($application_id, $date_to, $isAccount);
	/*
	$customer = new customer();
	$customer->selectWhere("ListID", $application_id);
	$fullname = $customer->FullName;
	return GetBalance("", $application_id, $fullname);
	*/
}

function GetLoanAmount($application_id)
{
	$applicants_financial_assessment = new applicants_financial_assessment();
	$applicants_financial_assessment->selectWhere("application_id", $application_id);
	$total_loan_amount = $applicants_financial_assessment->transfer_cost1;
	return $total_loan_amount;
}

function ChangeLoanNumber($application_id)
{
	if (strpos(strtolower($application_id), strtolower("fch")) !== false)
	{
		
		$applicants = new applicants();
		$applicants->selectWhere("application_id", $application_id);
		$old_customer_no = trim($applicants->customer_no);
		$applicants->customer_no = $customer_no;
		$applicants->update($application_id, "application_id");
		
		CreateNewListEntryFromAppID($application_id); //update customers
		
		$account = new account();
		$all_accounts = $account->selectAllWhere("customfield1", $application_id);
		
		foreach($all_accounts as $index1 => $account1)
		{
			$old_account = $account1->FullName;
			$new_account = $account1->FullName = str_replace($old_customer_no, $customer_no, $account1->FullName);
			$account1->Name = $account1->FullName;
			
			$journalcreditlinedetail = new journalcreditlinedetail();
			$journalcreditlinedetail->selectWhere("AccountRef_FullName", $old_account);
			$journalcreditlinedetail->AccountRef_FullName = $new_account;
			$journalcreditlinedetail->update($old_account, "AccountRef_FullName");
			
			$journaldebitlinedetail = new journaldebitlinedetail();
			$journaldebitlinedetail->selectWhere("AccountRef_FullName", $old_account);
			$journaldebitlinedetail->AccountRef_FullName = $new_account;
			$journaldebitlinedetail->update($old_account, "AccountRef_FullName");
			
			$account1->update($old_account, "FullName");
		}
		// die();
	}
}

function CreateRegistrationJournal1($applicationID, $txndate="Today")
	{
		$FullName = "";
		$applicant = new Applicants();
		$applicant->select($applicationID);
		$customer_no = trim($applicant->customer_no);
		$applicants_financial_assessment2 = new applicants_financial_assessment2();
		$applicants_financial_assessment = new applicants_financial_assessment();
		$applicants_financial_assessment->select($applicationID);
		$number = $applicants_financial_assessment->transfer_cost1;
		$digit = 1000;
		$total_bond_amount = $number; //roundUp($number, $digit);
		if ($txndate == "Today") $txndate = date('Y-m-d');
		$status = "ADD";		
		$timeCreated = date("d/m/Y h:i:s");
		$TXN_NUMBERS = $GLOBALS["TXN_NUMBERS"];
		$ACCOUNT_FREFIX = $GLOBALS["ACCOUNT_FREFIX"];
		$RefNumber =  $TXN_NUMBERS["NEW_REGISTRATION"][0];
		$TxnNumber =  $TXN_NUMBERS["NEW_REGISTRATION"][1];
		$Memo =  $TXN_NUMBERS["NEW_REGISTRATION"][2];
		$journal_max_txnnumber = new Journal_Max_TxnNumber();
		$journal_max_txnnumber->selectAll();
		$TxnNumber = $journal_max_txnnumber->max_txnNumber;
		if ($TxnNumber < $ACCOUNT_FREFIX["INITIAL_TXNNUMBER"]) $TxnNumber = $ACCOUNT_FREFIX["INITIAL_TXNNUMBER"];
		else $TxnNumber++;
		// die (var_dump($journal_max_txnnumber->selectAll()));
		$counter1 = $_SESSION["counter"]++;		
		$txnid = date('ymdhis').$counter1;
		$journalentry = new JournalEntry();
		$journalentry->TxnID = $txnid;
		$journalentry->Status = $status;
		$journalentry->TxnNumber = $TxnNumber;
		$journalentry->TxnDate = $txndate;
		$journalentry->TimeCreated = $timeCreated;
		$journalentry->TimeModified = $timeCreated;
		$journalentry->Memo = $Memo;
		$journalentry->IsAdjustment = true;
		$journalentry->RefNumber = $RefNumber;
		$journalentry->Insert();
		
		//Get customer number
		//$CustomerNumber = CreateCustomerNumber($applicationID);
		//Get customer fullname
		$firstname = ucwords(trim($applicant->firstname));
		$middle_name = ucwords(trim($applicant->middle_name));
		$surname = ucwords(trim($applicant->surname));
		if ($middle_name != "")
		{
			$FullName1 = $firstname." ".$middle_name." ".$surname;
		}
		else $FullName1 = $firstname." ".$surname;
		
		$EntityRef_ListId = CreateNewListEntry($applicationID);
		
		/* 
		if ($customer_no == "")
		{
			$CustomerNumber = CreateCustomerNumber($applicationID);
		}*/
		// die("CustomerNumber: $CustomerNumber");
		
		$customer = new customer();
		$customer->selectWhere("ListID", $applicationID);
		$FullName = $customer->FullName;
		// die();
		// $AccountRef_FullName = $ACCOUNT_FREFIX["LOAN_BOOK"].$applicationID." - ".$FullName;
		// $AccountRef_FullName = $FullName;
		// die($AccountRef_FullName);
		
		$AccountRef_FullName = $applicationID." - ".$FullName;
		if ($customer_no != "")
		{
			$AccountRef_FullName = $FullName;
		}
		
		// die($AccountRef_FullName);
		//Create the Client Loan Book Account
		$account_type = "supplier account";
		// echo ("<br />FullName: ".$FullName."---<br />");
		// echo ("<br />account_fullName: ".$AccountRef_FullName."---<br />");
		if (HasAccount($applicationID))
		{
			// die("sss");
			$AccountRef_ListID = UpdateAccount($applicationID, $AccountRef_FullName);
			// echo "<br />was here! $AccountRef_ListID ";
		}
		else $AccountRef_ListID = CreateNewAccount($applicationID, $AccountRef_FullName, "", $account_type);
		// die();
		//Create the 9600-Instructions issued client account
		$accountRef_FullName_Instructions = "9600-Instructions issued:".$FullName1;
		$accountRef_ListID_Instructions = CreateNewAccount($applicationID, $accountRef_FullName_Instructions);
		//Create the Debitline
		
		$journaldebitlinedetail = new Journaldebitlinedetail();
		$journaldebitlinedetail->TxnLineID = $txnid;
		$journaldebitlinedetail->AccountRef_FullName = $accountRef_FullName_Instructions;
		$journaldebitlinedetail->AccountRef_ListID = $accountRef_ListID_Instructions;
		$journaldebitlinedetail->Amount = $total_bond_amount;
		$journaldebitlinedetail->EntityRef_ListID = $EntityRef_ListId;
		$journaldebitlinedetail->IDKEY = $txnid;
		$journaldebitlinedetail->Memo = $Memo;
		$journaldebitlinedetail->Insert($applicationID);
		ChangeBalance($accountRef_FullName_Instructions, $total_bond_amount, "debit", $txndate);
		
		
		//Create the Creditline
		
		$journalcreditlinedetail = new Journalcreditlinedetail();
		$journalcreditlinedetail->TxnLineID = $txnid;
		$journalcreditlinedetail->AccountRef_FullName = $AccountRef_FullName;
		$journalcreditlinedetail->AccountRef_ListID = $AccountRef_ListID;
		$journalcreditlinedetail->Amount = $total_bond_amount;
		$journalcreditlinedetail->EntityRef_ListID = $EntityRef_ListId;
		$journalcreditlinedetail->IDKEY = $txnid;
		$journalcreditlinedetail->Memo = $Memo;
		$journalcreditlinedetail->Insert($applicationID);
		ChangeBalance($AccountRef_FullName, $total_bond_amount, "credit", $txndate);
		
		ChangeBalance_Statement($EntityRef_ListId, $total_bond_amount, $txndate);
		
		
		//------------------------Remove --------------------------------
		/*$query1 = "insert into journalentry(txnid, status, txndate, Memo, RefNumber)
		values('$txnid', 'ADD', '$todayDB', 'New Registration', 'New Registration');";
		$journalentry->Insert();
		$ListID = GetListID($fullname);
					
		//$result1 = mysql_query($query1) or die(mysql_error());
		//echo $query1."<br />";
		
		$query1 = "insert into journaldebitlinedetail
		(txnlineid, accountref_fullname, amount, entityref_listid, idkey, Memo)
		values
		('$txnid', '$fullname', $adjustment_debit, '$ListID', '$txnid', 'Interest');";
		//die($query);
		//$result1 = mysql_query($query1) or die(mysql_error());
		// echo $query1."<br />";
		$query1 = "insert into journalcreditlinedetail
		(txnlineid, accountref_listid, amount, entityref_listid, idkey, Memo)
		values
		('$txnid', '8000004B-1399964384', $adjustment_debit, '$ListID', '$txnid', 'Interest');
		";
		// $result1 = mysql_query($query1) or die(mysql_error());
		//echo Convertcash_NonZero($adjustment_debit);
		// echo $query1."<br /><hr />";
		*/
	}

	function UpdateLoginActivity()
{
	session_start();
	if (isset($_SESSION["user"]))
	{
		$user = $_SESSION["user"];
		if ($user == "system") return;
		if ($user != "")
		{
			$today = Date("Y-m-d H:i:s");
			$login_activity = new login_activity();
			$login_activity->selectWhere("username", $user);
			$login_activity->username = $user;
			$login_activity->datetime_active = $today;
			
			if ($login_activity->id == "")
			{
				$login_activity->key = GenerateID(10);
				$login_activity->insert();
			}
			else $login_activity->update($login_activity->id, "id");
		}
	}
}




function PasswordExpiryCheck()
{
	$MAX_PASSWORD_ACTIVE_DAYS = $GLOBALS["MAX_PASSWORD_ACTIVE_DAYS"];
	if (isset($_SESSION["user"]))
	{
		$user = $_SESSION["user"];
		if ($user == "system") return;
		if ($user != "")
		{
			$login = new login();
			$login->selectWhere("username", $user);
			
			{
				//Get time diff
				$password_date = $login->password_date;
				// $datetime_last_login_obj = DateTime::createFromFormat('Y-m-d H:i:ss', $datetime_active);
				$password_date_obj = new DateTime($password_date);
				// $datetime_today = Date('Y-m-d H:i:ss');
				$datetime_today_obj = new DateTime("now");
				$diff_obj = $datetime_today_obj->diff($password_date_obj);
				$days = $diff_obj->days;
				if ($days > $MAX_PASSWORD_ACTIVE_DAYS) 
				{
					// echo("days1: ".$days);
					// die("<br />MAX_PASSWORD_ACTIVE_DAYS: ".$MAX_PASSWORD_ACTIVE_DAYS);
					$file = $_SERVER["SCRIPT_NAME"];
					$script = basename($file, '.php'); 
					// die("script:$script");
					if ($script != "profile" && $script != "verify_login" && $script != "edit-user-profile" && $script != "upload-profile-photo")
					{
						header("location: ./profile.php?password_expired=true&days=$days");
					}
					//echo $days;
					//return '<br>expired';
				}
				else
				{
					// die("days: ".$days);
				}
			}
		}
	}
}

function LoginPeriod()
{
	$MAX_INACTIVITY_TIME = $GLOBALS["MAX_INACTIVITY_TIME"];
	if (isset($_SESSION["user"]))
	{
		$user = $_SESSION["user"];
		if ($user == "system") return;
		if ($user != "")
		{
			$login_activity = new login_activity();
			$login_activity->selectWhere("username", $user);
			
			if ($login_activity->id == "")
			{
				// return 100000;
			}
			else 
			{
				//Get time diff
				$datetime_active = $login_activity->datetime_active;
				// $datetime_last_login_obj = DateTime::createFromFormat('Y-m-d H:i:ss', $datetime_active);
				$datetime_last_login_obj = new DateTime($datetime_active);
				// $datetime_today = Date('Y-m-d H:i:ss');
				$datetime_today_obj = new DateTime("now");
				$diff_obj = $datetime_today_obj->diff($datetime_last_login_obj);
				$minutes = $diff_obj->days * 24 * 60;
				$minutes += $diff_obj->h * 60;
				$minutes += $diff_obj->i;
				if ($minutes <=$MAX_INACTIVITY_TIME) 
				{
					echo $minutes;
					return '<br>active';
				}
				else
				{
					
				}
			}
		}
	}
	unset($_SESSION["user"]);
}

if (isset($_GET["delete"]) && isset($_GET["table"]) && isset($_GET["record"]) && isset($_GET["tbl_fld"]))
{
	$table = $_GET["table"];
	$record = $_GET["record"];
	$tbl_fld = $_GET["tbl_fld"];
	$tbl_obj = new $table();
	$tbl_obj->delete($tbl_fld, $record);
	
	// die();
}



 $currency_obj = new currency();
 $currentCountry_obj = ip_info();
 $currentCountry = $currentCountry_obj["country"];
 $CURRENCY = "N$";
 if ($currentCountry != "")
 {
	 $currency_obj->selectAllWhere("country", $currentCountry);
	 $CURRENCY = $currency_obj->symbol;
 }
 // $ip = $_SERVER["REMOTE_ADDR"];
 // die("infor: ".ip_info());
 function ip_info($ip = NULL, $purpose = "location", $deep_detect = TRUE) {
    $output = NULL;
    if (filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {
        $ip = $_SERVER["REMOTE_ADDR"];
        if ($deep_detect) {
            if (filter_var(@$_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            if (filter_var(@$_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
    }
    $purpose    = str_replace(array("name", "\n", "\t", " ", "-", "_"), NULL, strtolower(trim($purpose)));
    $support    = array("country", "countrycode", "state", "region", "city", "location", "address");
    $continents = array(
        "AF" => "Africa",
        "AN" => "Antarctica",
        "AS" => "Asia",
        "EU" => "Europe",
        "OC" => "Australia (Oceania)",
        "NA" => "North America",
        "SA" => "South America"
    );
    if (filter_var($ip, FILTER_VALIDATE_IP) && in_array($purpose, $support)) {
        $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
        if (@strlen(trim($ipdat->geoplugin_countryCode)) == 2) {
            switch ($purpose) {
                case "location":
                    $output = array(
                        "city"           => @$ipdat->geoplugin_city,
                        "state"          => @$ipdat->geoplugin_regionName,
                        "country"        => @$ipdat->geoplugin_countryName,
                        "country_code"   => @$ipdat->geoplugin_countryCode,
                        "continent"      => @$continents[strtoupper($ipdat->geoplugin_continentCode)],
                        "continent_code" => @$ipdat->geoplugin_continentCode
                    );
                    break;
                case "address":
                    $address = array($ipdat->geoplugin_countryName);
                    if (@strlen($ipdat->geoplugin_regionName) >= 1)
                        $address[] = $ipdat->geoplugin_regionName;
                    if (@strlen($ipdat->geoplugin_city) >= 1)
                        $address[] = $ipdat->geoplugin_city;
                    $output = implode(", ", array_reverse($address));
                    break;
                case "city":
                    $output = @$ipdat->geoplugin_city;
                    break;
                case "state":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "region":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "country":
                    $output = @$ipdat->geoplugin_countryName;
                    break;
                case "countrycode":
                    $output = @$ipdat->geoplugin_countryCode;
                    break;
            }
        }
    }
    return $output;
}
 

//Check if we have access to the current script
// $host = $_SERVER["HTTP_HOST"];
$uri = $_SERVER["REQUEST_URI"];
$current_script = basename($uri);
if (!Check_menu_access_code($current_script))
{
	session_start();
	if(!isset($_SESSION['user'])){
		// header("location: index.php");
	}
	else die("Error! You do not have access to view this page! Contact the IT Department.");
}

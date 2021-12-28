<?php require_once __DIR__ . '/../init.php'; 
session_start();

    if(!isset($_SESSION['user'])){
        // header("location: ../index.php?logged=no");
    }
	//Block SMSes for now!
	
	//exit;
	
	

    /*
            takes in two parameters,
            1. ss - SMS SENDER
            2. cp - CUSTOM PARAMETER
            and call webservice.php to respond back to the request.
            webservice.php needs the following parameters,
            1. sendBackMsg
            2. sender
    */
	
    if ($sender[0] == "0")
    {
        // $sender[0] = str_ireplace("0", "", $sender[0]);
        // $sender = "264".$sender;
    }
	
    

    $sender = str_replace("+", "", $sender);
	
	if ($sender[0] == "2" && $sender[1] == "6" && $sender[2] == "4")
    {
        $sender[0] = str_ireplace("2", "", $sender[0]);
        $sender[1] = str_ireplace("6", "", $sender[1]);
        $sender[2] = str_ireplace("4", "", $sender[2]);
         $sender = "0".$sender;
    }
	
	
	$SMS_HEADER_= "";
	$SIGNATURE_= "";
	if (isset($SMS_HEADER))
	{
		$SMS_HEADER_ = $SMS_HEADER;
	}
	if (isset($SIGNATURE))
	{
		$SIGNATURE_ = $SIGNATURE;
	}
	$sendBackMsg = $SMS_HEADER_.$sendBackMsg." ".$SIGNATURE_;
	
	echo $sendBackMsg;
	//record message that is sent out
	// $messages_sent_out = new messages_sent_out();
	// $messages_sent_out->selectAllWhere2("mobile", $sender, "message_type", $message_type);
	// if ($messages_sent_out->mobile == "" && $sender != "")
	{
		/*$messages_sent_out->mobile = $sender;
		$messages_sent_out->message = $sendBackMsg;
		$messages_sent_out->message_type = $message_type;
		$messages_sent_out->date_recorded  = "NOW()";
		$messages_sent_out->status  = "RESENT";
		$messages_sent_out->insert();*/
		require_once("webservice.php");
	}
    
    //echo 1;
	
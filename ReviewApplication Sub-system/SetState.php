<?php
	include_once "CurrentApplication.php";
	session_start();
	$currentApplication = $_SESSION['application_list'];
	$index = $_SESSION['index'];
	$currentApplication = unserialize($currentApplication);	
	$currentApplicationclass = new CurrentApplication;
	switch ($_POST['action']) 
	{
		case 'Change_Status_Success':
			$currentApplication[$index]["Status"] = 2;
			$currentApplicationclass->SetState($currentApplication[$index]["account"],$currentApplication[$index]["Status"]);
			break;
		case 'Change_Stautus_Fail':
			$currentApplication[$index]["Status"] = 3;
			$currentApplicationclass->SetState($currentApplication[$index]["account"],$currentApplication[$index]["Status"]);
			break;
		case 'Change_status_NotReview': 
			$currentApplication[$index]["Status"] = 1;
			$currentApplicationclass->SetState($currentApplication[$index]["account"],$currentApplication[$index]["Status"]);
			break;
	}
?>

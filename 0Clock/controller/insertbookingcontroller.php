<?php
	session_start();

	Require '../model/messagingClass.php';
	require_once '../database/Database.php';
	$sms = new MessagingClass();
	$statement=false;
	
	//Require '../database/Database.php';
	$db = Database::getInstance();

	if(isset($_POST["title"]))
	{
	 $statement=$db->prepare("INSERT INTO bookings 
	 (title, start_event, end_event, event_id, phone, fullname, email) 
	 VALUES (:title, :start_event, :end_event, :company_id, :phone, :name, :email)
	 ");
	 $statement->execute(
	  array(
	   ':title'  => $_POST['title'],
	   ':start_event' => $_POST['start'],
	   ':end_event' => $_POST['end'],
	   ':company_id'=>$_SESSION['id'],
	   ':phone'=>$_POST['phone'],
	   ':name'=>$_POST['name'],
	   ':email'=>$_POST['email']
	  )
	 );
	}


	if($statement){
		$phone=$_POST['phone'];
		$start=$_POST['start'];
		$name=$_POST['name'];

		$message= "Dear " .$name . "," ."\r\n". "\r\n". "You have successfully booked an appointment with ". $_SESSION['company_name'] . " on " . $start  ."\r\n". "Thank you";
		$sms->sendSMSMessage($phone, $message);
	}


?>
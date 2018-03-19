<?php

	Require '../database/Database.php';
	$db = Database::getInstance();

	if(isset($_POST["title"]))
	{
	 $statement=$db->prepare("INSERT INTO bookings 
	 (title, start_event, end_event, company_id) 
	 VALUES (:title, :start_event, :end_event, :company_id)
	 ");
	 $statement->execute(
	  array(
	   ':title'  => $_POST['title'],
	   ':start_event' => $_POST['start'],
	   ':end_event' => $_POST['end'],
	   ':company_id'=>2
	  )
	 );
	}


?>
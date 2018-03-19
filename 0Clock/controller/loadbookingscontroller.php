<?php

	session_start();

	Require '../database/Database.php';
	$db = Database::getInstance();

	$data = array();
	$id =$_SESSION['id'];

	$statement = $db->prepare('SELECT * FROM bookings WHERE event_id=:id ORDER BY id');

	$statement->execute(
		array(
			':id'  => $id
		)
	);
	
	$result = $statement->fetchAll();

	foreach($result as $row)
	{
	 $data[] = array(
	  'id'   => $row["id"],
	  'title'   => $row["title"],
	  'start'   => $row["start_event"],
	  'end'   => $row["end_event"]
	 );
	}

	echo json_encode($data);

?>
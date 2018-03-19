<?php

	Require '../database/Database.php';
	$db = Database::getInstance();

	$data = array();

	$statement = $db->prepare("SELECT * FROM bookings WHERE company_id=:id ORDER BY id");

	$statement->execute(
		array(
			':id'  => 2
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
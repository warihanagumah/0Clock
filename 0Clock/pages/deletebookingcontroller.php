<?php
Require '../database/Database.php';
if(isset($_POST["id"]))
{
	$db = Database::getInstance();
 	$statement = $db->prepare("DELETE from bookings WHERE id=:id");
 
	$statement->execute(
	array(
	   ':id' => $_POST['id']
	  )
	);
}

?>

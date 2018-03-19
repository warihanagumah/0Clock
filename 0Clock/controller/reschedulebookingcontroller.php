<?php

Require '../database/Database.php';
$db = Database::getInstance();

if(isset($_POST["id"]))
{
 $statement = $db->prepare("UPDATE bookings 
 SET title=:title, start_event=:start_event, end_event=:end_event 
 WHERE id=:id
 ");
 $statement->execute(
  array(
   ':title'  => $_POST['title'],
   ':start_event' => $_POST['start'],
   ':end_event' => $_POST['end'],
   ':id'   => $_POST['id']
  )
 );
}

?>


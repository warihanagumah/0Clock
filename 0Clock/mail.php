<?php 

$to = "warihana.gumah@ashesi.edu.gh";
$subject = "O Clock Service";
$txt = "Hello world! this is me";
$headers = "From: warihanagumah@gmail.com" . "\r\n" .
"CC: isaac.coffie@ashesi.edu.gh";

$response = mail($to,$subject,$txt);
var_dump($response);

 ?>
<?php
	require_once '../database/Database.php';
    /**
   * This function sends an SMS to a specific number.
   * 
   * @param $from(string) : The sender address. In case it is a telephone number it must comply with the telephone rules. (+233...)
   * @param $to(string): The recipient telephone number. It must comply with the telephone rules.
   * @param $message(string): The message content.
   * @param $clientID(string) : Your Unity API Client ID.
   * @param $clientSecret(string): Your Unity API Client secret.
   * @param $resgisteredDelivery(string): A true or false setting to indicate a delivery report request
   */ 
 
  function sendSMSMessage($to,$message){
    //Encode the message to match URL format
    $message =  urlencode($message);
    $to= urlencode($to);

    // Genreated URL
    $url = "https://api.hubtel.com/v1/messages/send?From=zer0Clock&To=".$to."&Content=".$message."&ClientId=duqdhgku&ClientSecret=wdjiohfa";
    $response = file_get_contents($url) ;
    //var_dump($response);
  }



function sendReminder(){
    $db = Database::getInstance();

    try
    {
      $data = array();

      $statement = $db->prepare("SELECT * FROM bookings");
      $statement->execute();

      $result = $statement->fetchAll();

      foreach($result as $row)
      {
        $appointmenttime=$row['start_event'];
        $appointmenttime= strtotime($appointmenttime);

        $now = strtotime(gmdate('Y-m-d h:i:s \G\M\T', time()));
  
        $interval  = abs($appointmenttime - $now);
        $minutes   = round($interval / 60);
        if($minutes==30){
        	
          $message="Dear " .$row["title"] . ":" ."\r\n". "\r\n" ."your appointment is 30 minutes away" ."\r\n". "\r\n"."Thank you";

          sendSMSMessage($row['phone'], $message);
        }
      }
      return $data;
    }catch (PDOException $e){
      echo $e->getMessage();
      return;
    } 
	}

	//call function
	sendReminder();

?>
  <?php
    header('Access-Control-Allow-Origin: *');  
    require_once('../model/messagingClass.php');
    //global  variable 
 
    $sendmessage = new MessagingClass();
    $from="zer0Clock";
    $to="+233543797123";
    $message="done";
    $client="duqdhgku";
    $secret="wdjiohfa";

    $sendmessage->sendSMSMessage($to,$message);

    echo "my php version is " . phpversion();

  ?>
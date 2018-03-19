<?php

	require_once('../model/scheduleClass.php');
  	$newevent=new ScheduleClass;

  	$event_title=$start_date=$end_date=$none_working_days=$none_working_hours=$time_per_person=$error="";

  	//check if the schedule event button is clicked
  	if(isset($_POST['schedule'])){
  		$ok=phpvalidateeventdetails();
  		if($ok){
  				echo "im in";
  			$myevent=$newevent->createevent($event_title, $_SESSION['id'], $start_date, $end_date, $none_working_days, $none_working_hours, $time_per_person);
  			if($myevent){
  				echo "Event succesfully scheduled";
  				header("Location: ../pages/events.php");
  			}
  		}
  	}

  	//A function that cleans user input
    function cleanInput($a) 
    {
      $a=trim($a);
      $a=stripslashes($a);
      $a=htmlspecialchars($a);
       return $a;
    } 

    // Validating user input
        
    function phpvalidateeventdetails()
    {
	    global $event_title, $start_date, $end_date, $none_working_days,$none_working_hours, $time_per_person,$error;
	    $ok=true;
	    //Validating event title
	    if(empty($_POST['title']))
	    {
		    $ok=false;
		    $error="Event title is required";
	    }else
	    {
		    $event_title=$_POST['title'];
		    $event_title= cleanInput($event_title);
	    }

	    //Validating start date
	    if(empty ($_POST['start'])) 
	    {
	        $ok=false;
	        $error="Start date for evet is required";
	    }else
	    {
	        $start_date=$_POST['start'];
	        $start_date= cleanInput($start_date);
	    }
	      

	    //Validating end date
	    if(empty ($_POST['end'])) 
	    {
	        $ok=false;
	        $error="End date for event is required";
	    }else
	    {
	        $end_date=$_POST['end'];
	        $end_date= cleanInput($end_date);
	    }     


	    //validating none working days
	    if(!empty($_POST['none_working_days'])){
	        $none_working_days=$_POST['none_working_days'];
	    }


	    //validating none working hours
	    if(!empty($_POST['none_working_hours'])){
	        $none_working_hours=$_POST['none_working_hours'];
	    } 


	    //Validating time required to attend to a person
	    if(empty($_POST['minutes']))
	    {
	        $ok=false;
	        $error="Time required to attedn to a person (minutes) must be provided";
	    }else
	    {
	        $time_per_person=$_POST['minutes'];
	        $time_per_person= cleanInput($time_per_person);
	    }

	    return $ok;
 	} 

 	function populateschedule(){


 		
 	}  




?>
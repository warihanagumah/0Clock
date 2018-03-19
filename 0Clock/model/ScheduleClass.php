<?php
require_once '../database/Database.php';
class ScheduleClass{   

   public function __construct(){

   }

   public function __destruct(){
   }

    /**
   *Method to fetch all bookings
   *@return return an array   
   **/ 

   public function popukatecalenderdetails($id){
      	$db = Database::getInstance();

      	try
      	{

	        $data = array();

			$statement = $db->prepare("SELECT * FROM events WHERE company_id=:id");

			$statementt->bindParam(":id", $id);

			$statement->execute();

			$result = $statement->fetchAll();

			foreach($result as $row)
			{
			 $data[] = array(
			  'id'   => $row["id"],
			  'title'   => $row["event_title"],
			  'user_id'   => $row["user_id"],
			  'start'   => $row["start_date"],
			  'end'   => $row["end_date"],
			  'days'   => $row["none_working_days"],
			  'hours'   => $row["none_working_hours"],
			  'person'   => $row["time_per_person"]
			 );
			}

			return $data;
        }catch (PDOException $e){
           	echo $e->getMessage();
            return;
        }            

    }


    /**
   *Method to inser a bookings
   *@return return boolean 
   **/ 

   public function createevent($event_title, $user_id, $start_date, $end_date, $none_working_days, $none_working_hours, $time_per_person){
      	$db = Database::getInstance();

      	try
      	{
	        $statement = $db->prepare("
			INSERT INTO events (event_title, user_id, start_date, end_date, none_working_days, none_working_hours, time_per_person) 
			VALUES (:event_title, :user_id, :start_date, :end_date, :none_working_days, :none_working_hours, :time_per_person)");
			
			 $statement->execute(
			  array(
			  	':event_title'=>$event_title,
			  	':user_id'=> $user_id,
			  	':start_date'=> $start_date,
			  	':end_date'=>$end_date,
			  	':none_working_days'=>$none_working_days,
			 	':none_working_hours'=>$none_working_hours,
			 	':time_per_person'=>$time_per_person
			  )
			 );

			 return true;
		}catch (PDOException $e){
           	echo $e->getMessage();
            return false;;
        }            

    }

}    


?>
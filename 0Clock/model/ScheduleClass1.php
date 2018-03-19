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

   public function loadbookings($id){
      	$db = Database::getInstance();

      	try
      	{

	        $data = array();

			$query = "SELECT * FROM bookings WHERE company_id=:id ORDER BY id";

			$statement = $connect->prepare($query);
			$statementt->bindParam(":id", $id);

			$statement->execute();

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

   public function insertbookings(){
      	$db = Database::getInstance();

      	try
      	{
      		echo "im in";
	        $query = "
			INSERT INTO bookings 
			 (company_id,title, start_event, end_event) 
			VALUES (:company_id, :title, :start_event, :end_event)
			 ";
			$statement = $connect->prepare($query);
			 $statement->execute(
			  array(
			  	':company_id'=>2,
			   ':title'  => $_POST['title'],
			   ':start_event' => $_POST['start'],
			   ':end_event' => $_POST['end']
			  )
			 );

			 return true;
		}catch (PDOException $e){
           	echo $e->getMessage();
            return false;;
        }            

    }


    /*Method to reschedule bookings
   *@return return boolean 
   **/ 

  	 public function reschedulebooking(){
      	$db = Database::getInstance();

      	try
      	{

	        $$query = "
			 UPDATE bookings 
			 SET title=:title, start_event=:start_event, end_event=:end_event 
			 WHERE id=:id
			 ";
			 $statement = $connect->prepare($query);
			 $statement->execute(
			  array(
			   ':title'  => $_POST['title'],
			   ':start_event' => $_POST['start'],
			   ':end_event' => $_POST['end'],
			   ':id'   => $_POST['id']
			  )
			 );
			return true;
		}catch (PDOException $e){
           	echo $e->getMessage();
            return false;;
        }            

    }


    public function deletebooking(){
      	$db = Database::getInstance();

      	try
      	{

	        $query = "DELETE from bookings WHERE id=:id";
			 $statement = $connect->prepare($query);
			 $statement->execute(
			  array(
			   ':id' => $_POST['id']
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
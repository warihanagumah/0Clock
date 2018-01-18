<?php

Require '../database/Database.php';
class UserClass{   

   public function __construct(){

   }

   public function __destruct(){
   }
   
    /**
   *Method to register new user
   *@param CompanyName, category, hashedpassword, email, description,phone,location, status, permission
   *@param Boolean   
   **/    

   public function RegisterUser($CompanyName, $category, $hashedpassword, $email, $description,$phone,$location){
      $db = Database::getInstance();

      try
      {

         $stmt = $db->prepare("SELECT COUNT(*) FROM  users WHERE  Company_name = :CompanyName");
         $stmt->bindParam(":CompanyName", $CompanyName);
         $stmt->execute();
         $count=$stmt->fetchColumn(); 

         if($count==0){ 
            try
            {
               $stmt = $db->prepare("insert into users(company_name,category,password,email, description, phone, location, userstatus, per_id) values (:CompanyName, :category, :hashedpassword, :email, :description, :phone, :location, :status, :permission)");
               $params = array(":CompanyName"=>$CompanyName,":category"=>$category,":hashedpassword"=>$hashedpassword,":email"=>$email,":description"=>$description,":phone"=>$phone,":location"=>$location,":status"=>"ACTIVE",":permission"=>1); 
               $stmt->execute($params);

               if($stmt->rowCount() > 0){ 
                  return true;
               }
            }
            catch (PDOException $e){
            echo $e->getMessage();
            return FALSE;
            }            

         }
      }

      catch (PDOException $e){
         echo $e->getMessage();
         return false;
      }

   }



   //function for login
   function UserLogin($email, $pswd)
   {
      $db = Database::getInstance();

      	try
      	{

	        $stmt = $db->prepare("SELECT * FROM  users WHERE  email = :email");
	        $stmt->bindParam(":email", $email);
	        $stmt->execute();

	        $row = $stmt->fetch();
	        $hashedpassword =  $row['password'];
	        #$hashedpassword="$hashedpassword";

	        echo $hashedpassword . " " . $pswd;

	       	$ok=password_verify($pswd, $hashedpassword);

	       //	$ok = true;
	        if($ok){
	        	session_start();
	         	//storing a user details
	            $_SESSION['company_name']=$row['company_name'];
	         	$_SESSION['phone']=$row['phone'];
	        	$_SESSION['location']=$row['location'];
	        	$_SESSION['id']=$row['id'];
	        
	         	return true;
	        }
	        else{
	        	return false;
	        }  
        }
      	catch (PDOException $e){
        	return false;
      	} 

   }

   //function for login
   function ConfirmDetails($Cname, $email)
   {
      $db = Database::getInstance();

      	try
      	{

	        $stmt = $db->prepare("SELECT * FROM  users WHERE  company_name = :Cname AND email= :email");
	        $params = array(":Cname"=>$Cname,":email"=>$email);
            $stmt->execute($params);
 
            if($stmt->rowCount() > 0){
            	$row = $stmt->fetch();
            	session_start();
            	$_SESSION['id']=$row['id'];
            	$_SESSION['email']=$row['email'];
            	return true;
            }
	        else{
	        	return false;
	        }  
        }
      	catch (PDOException $e){
        	return false;
      	}

    } 


    function ResetPassword($newpass, $id){
    	$db = Database::getInstance();

      try
      {

         $stmt = $db->prepare("update users set password = :newpass where id = :id");
         $params = array(":newpass"=>$newpass,":id"=>$id);
         $stmt->execute($params);

         if($stmt->rowCount() > 0){ 
            return true;
         }         

      } 

      catch (PDOException $e){
         #echo $e->getMessage();
         return FALSE;
      }

    }      

}



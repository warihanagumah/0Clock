<?php

  require_once '../database/Database.php';
  class ConfigurationClass{   

    public function __construct(){

    }

    public function __destruct(){
    }
   
    /**
    *Method to fetch company details from database
    *@param id
    *@param Boolean   
    **/    

    public function PopulatePage($id){
      $db = Database::getInstance();

      try
      {

        $stmt = $db->prepare("SELECT * FROM  users WHERE  id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        if($stmt->rowCount() > 0){
          $row = $stmt->fetch();

          //storing a user details
          $_SESSION['id']=$row['id'];
          $_SESSION['company_name']=$row['company_name'];
          $_SESSION['email']=$row['email'];
          $_SESSION['description']=$row['description'];
          $_SESSION['phone']=$row['phone'];          
          $_SESSION['location']=$row['location'];
          $_SESSION['mission']=$row['mission'];
          $_SESSION['vision']=$row['vision'];
          $_SESSION['image']=$row['image'];
          $_SESSION['logo']=$row['logo'];
          $_SESSION['category']=$row['category'];
          
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

    /**
    *Method to update all comapny details in the database
   *@param id, CompanyName, category, email, description, phone, mission, vision, logo, image
   *@param Boolean   
   **/    

   public function UpdateAllDetails($id, $CompanyName, $category, $email, $description, $phone, $mission, $vision, $logo, $image){
      $db = Database::getInstance();

      try
      {

         $stmt = $db->prepare("UPDATE users  SET company_name=:CompanyName, category=:category, email=:email, description=:description, phone=:phone, mission=:mission, vision=:vision, image=:image, logo=:logo WHERE id=:id");

         $params = array(":CompanyName"=>$CompanyName,":category"=>$category,":email"=>$email,":description"=>$description,":phone"=>$phone,":mission"=>$mission,":vision"=>$vision,":image"=>$image,":logo"=>$logo, ":id"=>$id); 
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

   /**
    *Method to update some comapny details in the database
   *@param id, CompanyName, category, email, description, phone, mission, vision
   *@param Boolean   
   **/    

   public function UpdateDetails($id, $CompanyName, $category, $email, $description,$phone,$mission, $vision){
      $db = Database::getInstance();

      try
      {

         $stmt = $db->prepare("UPDATE users  SET company_name=:CompanyName, category=:category, email=:email, description=:description, phone=:phone, mission=:mission, vision=:vision WHERE id=:id");

         $params = array(":CompanyName"=>$CompanyName,":category"=>$category,":email"=>$email,":description"=>$description,":phone"=>$phone,":mission"=>$mission,":vision"=>$vision, ":id"=>$id); 
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



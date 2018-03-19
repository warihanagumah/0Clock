<?php
	require_once('../model/ConfigurationClass.php');
    //global  variables 
    $companyName=$email=$phone=$category=$description=$error=$mission=$vision=$image=$logo="";

    $id=$_SESSION['id'];

    $config = new ConfigurationClass();

    //check if the register button is clicked 
    if(isset($_POST['update'])){
		$ok=phpvalidateupdate(); 
      	if($ok==true){
	      	if((isset($_FILES['image'])) && (!empty($_FILES['image']['tmp_name'])) && (isset($_FILES['logo'])) && (!empty($_FILES['logo']['tmp_name']))){

            $directory='../images/';

            //http://localhost/capstone/0Clock/pages/companywebsite.php
            //$directory = 'C:/xampp/htdocs/capstone/0Clock/'.'images/';

            $imagefileName = $_FILES['image']['name'];
            $logofileName = $_FILES['logo']['name'];
            $imagefilePath = $directory . $imagefileName;
            $logofilePath = $directory . $logofileName; 

            if(move_uploaded_file($_FILES["image"]["tmp_name"], $imagefilePath) && move_uploaded_file($_FILES["logo"]["tmp_name"], $logofilePath)){           

	        	  $status=$config->UpdateAllDetails($id, $companyName, $category, $email, $description, $phone, $mission, $vision, $logofilePath, $imagefilePath);

        		  if($status==true){
          			header("Location:companywebsite.php");
              }else{
                $error="Please make some changes to update";
              } 
          	}else{
              echo "File upload unsuccesful";
            }
      		}else{
  	    		$status=$config->UpdateDetails($id, $companyName, $category, $email, $description, $phone, $mission, $vision);
  	    		if($status==true){
  	          		header("Location:companywebsite.php");
  	       }else{
  	         $error="Please make some changes to update";
  	       	}
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
    function phpvalidateupdate()
    {
      global $companyName, $email, $phone, $category, $description, $error, $image, $logo, $vision, $mission;
      $ok=true;
      //Validating campany name
      if(empty($_POST['Cname']))
      {
        $ok=false;
        $error="Company name is required";
      }else
      {
        $companyName=$_POST['Cname'];
        $companyName= cleanInput($companyName);
      }


      //validating category
      if(empty($_POST['category'])) 
      {
        $ok=false;
        $error="Category is required";
      }else 
      {
        $category=$_POST['category'];
       } 

      //validating description
      if(empty($_POST['description'])) 
      {
        $ok=false;
        $error="Description is required";
      }else 
      {
        $description=$_POST['description'];
        $description= cleanInput($description);       
      }

      //validating email
      if(empty($_POST['email']))
      {
        $ok = false;
        $error="Eamil is required";
      }else
      {
        $email=$_POST['email'];
        $email= cleanInput($email);

        //check if email match email pattern
        if(!preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]??\w+)*(\.\w{2,3})+$/', $email)) 
        {
          $ok=false;
          $error="Invalid email";
        }
      } 

      //Validating user phone
      if(empty($_POST['phone'])) 
      {
        $ok=false;
        $error="Phone number is required";
      }else 
      {
        $phone=$_POST['phone'];
        $phone= cleanInput($phone);
        $check=is_numeric ($phone) ? true : false;   

        if($check==false){
          $error="Invalid Phone number";
          $ok=false;
        }
      }

      //validating mission
      if(empty($_POST['mission'])) 
      {
        $ok=false;
        $error="Company mission is required";
      }else 
      {
        $mission=$_POST['mission'];
        $mission= cleanInput($mission);       
      }

      //validating vision
      if(empty($_POST['vision'])) 
      {
        $ok=false;
        $error="Company vision is required";
      }else 
      {
        $vision=$_POST['vision'];
        $vision= cleanInput($vision);       
      }
      return $ok;
    }  



?>
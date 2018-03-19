  <?php
    require_once('../model/userClass.php');
    //global  variables 
    $companyName=$password=$email=$phone=$category=$description=$error=$message=$subject="";
    $user = new UserClass();

    //check if the register button is clicked 
    if(isset($_POST['register'])){
      $ok=phpvalidateregister(); 
      if($ok==true){
        $status=$user->RegisterUser($companyName, $category, $password, $email, $description,$phone, "3.44, 2.245");
        if($status==true){
          /*send mail to company's email*/
          $regstatus="Registration Information";
          $message="Dear " .$companyName . "," ."\r\n". "\r\n" ."Thank you for registraring with 0Clock appointment booking system. We at 0Clock will do our best to provide the highest quality services for you and your customers 24/7." ."\r\n" . "Please feel free to contact us for any assistance on our contact page." ."\r\n" . "\r\n" . "Thank you. " ."\r\n" . "\r\n" . "Regards " ."\r\n" ."Developers of OClock";

          $response=mail($email, $regstatus, $message);
          var_dump($response);


          header("Location: ../pages/login.php");
        }else {
          $error="company name already exist";
        }
      }    
    }else if(isset($_POST['login'])){
      $check=phpvalidatelogin(); 
      var_dump($check);
      if($check==true){
        $status=$user->UserLogin($email, $password);
        if($status==true){
          header("Location: ../pages/dashboard.php");
        }else{
          $error= "Incorrect email or password";
        }
      }
    }else if(isset($_POST['resetpassdetails'])){
      $check=phpvalidateresetpass(); 
      if($check==true){
        /*send mail to company's email*/
        $subject="Password Reset";
        $message="Dear " . $companyName . "," ."\r\n" . "\r\n" . "Thank you for using 0Clock."."\r\n" ."Someone has requested to change your password. Please contact developers of OClock to make a complaint incase you are unaware of this request."."\r\n"."\r\n" ."Thank you."."\r\n" ."\r\n" ."Regards" ."\r\n" ."Developers of OClock";

        $response=mail($email, $subject, $message);
        //var_dump($response);

        $status=$user->ConfirmDetails($companyName, $email);
        if($status==true){
          header("Location: ../pages/resetpass.php");
        }else{
          $error= "Sorry!, account not find";
        }
      }
    }else if(isset($_POST['resetpass'])){
      $check=phpvalidatepassreset(); 
      if($check==true){
        session_start();
        $id = $_SESSION['id'];
        $email = $_SESSION['email'];
        $companyName=$_SESSION['companyName'];
        $status=$user->ResetPassword($password, $id);
        if($status==true){
          /*send mail to company's email*/
          $subject="Password Reset";
          $message="Dear Sir or Madam," ."\r\n" ."\r\n" ."Your password has successfully been reset." ."\r\n" ."Thank you." ."\r\n" ."\r\n" ."Regards"."\r\n" ."Developers of OClock";
          $message=$message;

          $response=mail($email, $subject, $message);
          var_dump($response);
          header("Location: ../pages/login.php");
        }else{
          $error= "Database connection failed";
        }
      }
    }else if(isset($_POST['contact'])){
      $check=phpvalidatecontact(); 
      var_dump($check);
      if($check==true){
        $response=mail($email, $subject, $message);
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
        
    function phpvalidateregister()
    {
      global $companyName, $password, $email, $phone, $category, $description, $error;
      $ok=true;
      //Validating campany name
      if(empty($_POST['name']))
      {
        $ok=false;
        $error="Company name is required";
      }else
      {
        $companyName=$_POST['name'];
        $companyName= cleanInput($companyName);
      }

      //Validating user passsword
      if(empty ($_POST['password'])) 
      {
        $ok=false;
        $error="Password is required";
      }else
      {
        $password=$_POST['password'];
        $password= cleanInput($password);
        
        /*
        *check for password strength
        *password must be atleast 6 characters,
        *contain atleast 1 upercase, symbol, number 
        */
        if(preg_match("/^.*(?=.{6,})(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+=])[a-zA-Z0-9@#$%^&+=]*$/", $password))
        {
          $password = password_hash($password, PASSWORD_DEFAULT);
        }else{
          $error="password must be atleast 6 characters and contain atleast 1 upercase, symbol and number ";
          $ok=false;
        }
         
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
      return $ok;
    }  

    
    function phpvalidatelogin()
    {
      global $password, $email, $error;
      $check=true;
      //Validating email
      if(empty($_POST['email'])){
        $check=false;
        $error="Email is required";
      }else{
        $email=$_POST['email'];
        $email= cleanInput($email);
      }
      //Validating user passsword
      if(empty ($_POST['password'])) 
      {
        $check=false;
        $error="Password is required";
      }else{
        $password=$_POST['password'];
        $password= cleanInput($password);
      }
      return $check;
    } 

     function phpvalidateresetpass()
    {
      global $companyName, $email, $error;
      $check=true;
      //Validating email
      if(empty($_POST['email'])){
        $check=false;
        $error="Email is required";
      }else{
        $email=$_POST['email'];
        $email= cleanInput($email);
      }
      //Validating user passsword
      if(empty ($_POST['name'])) 
      {
        $check=false;
        $error="company name is required";
      }else{
        $companyName=$_POST['name'];
        $companyName= cleanInput($companyName);
      }
      return $check;
    }   


     function phpvalidatepassreset()
    {
      global $password, $error;
      $ok=true;
      if(empty ($_POST['password'])) 
      {
        $ok=false;
        $error="Password is required";
      }else
      {
        $password=$_POST['password'];
        $password= cleanInput($password);
        
        /*
        *check for password strength
        *password must be atleast 6 characters,
        *contain atleast 1 upercase, symbol, number 
        */
        if(preg_match("/^.*(?=.{6,})(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+=])[a-zA-Z0-9@#$%^&+=]*$/", $password))
        {
          $password = password_hash($password, PASSWORD_DEFAULT);
        }else{
          $error="password must be atleast 6 characters and contain atleast 1 upercase, symbol and number ";
          $ok=false;
        }
         
      }

      return $ok;
    }   
    
    // Validating user input for contact us form
        
    function phpvalidatecontact()
    {
      global $name, $subject, $email, $message, $error;
      $ok=true;
      //validating subject
      if(empty($_POST['subject']))
      {
        $ok=false;
        $error="Subject is required";
      }else
      {
        $subject=$_POST['subject'];
        $subject= cleanInput($subject);
      }

      //validating message
      if(empty($_POST['message']))
      {
        $ok=false;
        $message="Message is required";
      }else
      {
        $message=$_POST['message'];
        $message= cleanInput($message);
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
      return $ok;
    }  

            

  ?>
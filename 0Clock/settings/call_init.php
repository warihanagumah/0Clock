<?php
	session_start();
	function verifyuserlogin(){
		if(isset($_SESSION['id']) && !empty($_SESSION['id']))
		{
			//valid

		}else
		{
			//not valid
			header('Location:login.php');
		}

	}
?>
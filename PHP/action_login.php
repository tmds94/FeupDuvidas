<?php
  include_once('C:\Users\edu_p\Desktop\SIBD\TRAB\PHP\init.php');
  include_once('C:\Users\edu_p\Desktop\SIBD\TRAB\PHP\user.php');
  
  $username = trim(strip_tags($_POST['username']));
  $password = sha1($_POST['password']);  

	$_SESSION['userid'] = verifyUser($username, $password);
	if ($_SESSION['userid'] != null) 
	{
		$_SESSION['success_message'] = 'Login success!';
		$_SESSION['username'] = $username;
    }
    else
    {
		$_SESSION['error_message'] = 'Login Failed!';
    }
  
  header('Location: main.php');  
?>
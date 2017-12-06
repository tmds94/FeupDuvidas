<?php
  include_once('config/init.php');
  include_once('database/user.php');

  $email = trim(strip_tags($_POST['email']));
  $password = sha1($_POST['password']);

  if (verifyUser($email, $password)) {
    $_SESSION['email'] = $email;
	 $id=getIdByEmail($email);
	$_SESSION['id']=$id['id'];
	header('Location: menu.php');
  } else {
    $_SESSION['error_message'] = "Login failed!";
	header('Location: index.php');
  }
?>

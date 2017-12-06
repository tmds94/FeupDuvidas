<?php
  include_once('config/init.php');
  include_once('database/user.php');

    $name = trim(strip_tags($_POST['name']));
  $password = sha1($_POST['psw']);
  $student_number=trim(strip_tags($_POST['num']));
  $email=trim(strip_tags($_POST['email']));
  $confirm_password=sha1($_POST['confirma_psw']);

if ($name == "" || $student_number=="" || $email=="" ) {
    $_SESSION['error_message'] = "All fields are mandatory";
    die(header('Location: index.php'));
  }

  if ($_POST['psw'] == "") {
    $_SESSION['error_message'] = "Password is mandatory";
    $_SESSION['form_values'] = $_POST;
    die(header('Location: index.php'));
  }

 if($password != $confirm_password){
	$_SESSION['error_message'] = "Passwords must match";
	$_SESSION['form_values'] = $_POST;
    	die(header('Location: index.php'));
}

 try {
   createUser($name, $password,$student_number,$email);
   $_SESSION['success_message'] = "User registered with sucess !!!";
   die(header('Location: index.php'));
  } catch (PDOException $e) {
    if (strpos($e->getMessage(), "users_email_key") !== false)
      $_SESSION['error_message'] = "Email already in use";
   else if (strpos($e->getMessage(), "users_student_number_key") !== false)
      $_SESSION['error_message'] = "Student Number already in use";
    else
      $_SESSION['error_message'] = "Error creating user";

      $_SESSION['form_values'] = $_POST;
    die(header('Location: index.php'));
  }

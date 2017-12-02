<?php

	function isValidUser($username, $password) {
    global $conn;

    $stmt = $conn->prepare('SELECT * FROM users WHERE username = ?');
    $stmt->execute(array($username));
    
    $user = $stmt->fetch();

    return $user !== false && password_verify($password, $user['password']);
  	}

  function createUser($username, $password, $fname, $lname, $emailalt, $emailfeup, $facebook) 
  {
    global $conn;  
    
    $stmt = $conn->prepare('INSERT INTO users VALUES (DEFAULT, ?, ?, ?, ?, ?, ?, ?, ?)');
    $stmt->execute(array($username, $password, $fname, $lname, $emailalt, $emailup, $facebook));
  }

  function loginUser($username, $password) 
  {
    global $conn;  
    
    $stmt = $conn->prepare('SELECT * FROM users WHERE username = ? AND password = ?');
    $stmt->execute(array($username, $password));
	
	if($cn->rowCount() != 1)
	{
		return null;
	}
	$row = $stmt->fetch();
    return row['id'];
  }

?>

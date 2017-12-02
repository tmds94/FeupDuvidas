<?php
  function createUser($username, $password, $fname, $lname, $emailalt, $emailfeup, $facebook) 
  {
    global $conn;  
    
    $cn = $conn->prepare('INSERT INTO users VALUES (DEFAULT, ?, ?, ?, ?, ?, ?, ?, ?)');
    $cn->execute(array($username, $password, $fname, $lname, $emailalt, $emailup, $facebook);
  }

  function loginUser($username, $password) 
  {
    global $conn;  
    
    $cn = $conn->prepare('SELECT * FROM users WHERE username = ? AND password = ?');
    $cn->execute(array($username, $password));
	
	if($cn->rowCount() != 1)
	{
		return null;
	}
	$row = $cn->fetch();
    return row['id'];
  }

?>

<?php
function createUser($username, $password, $student_number, $email)
{
    global $conn;
    $stmt = $conn->prepare('INSERT INTO users(nome, password, student_number, email, priv) VALUES (?, ?, ?, ?, FALSE)');
    $stmt->execute(array($username, $password, $student_number, $email));
}

function verifyUser($email, $password)
{
    global $conn;
    $stmt = $conn->prepare('SELECT * FROM users WHERE email = ? AND password = ?');
    $stmt->execute(array($email, $password));
    return ($stmt->fetch()!==false);
}

function getIdByEmail($email)
{
    global $conn;
    $stmt = $conn->prepare('SELECT * FROM users WHERE email = ?');
    $stmt->execute(array($email));
    return $stmt->fetch();
}

function getUserbyId($id)
{
  global $conn;
  $stmt = $conn->prepare('SELECT * FROM users WHERE id = ?');
  $stmt->execute(array($id));
  return $stmt->fetch();
}
?>

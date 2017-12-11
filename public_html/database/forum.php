<?php
  function createTopic($category, $subject, $text, $owner, $date) {

    global $conn;
    $dmy = $date['mon'].'-'.$date['mday'].'-'.$date['year'];
    $time = $date['hours'] . ':' . $date['minutes'] . ':' . $date['seconds'] ;
    $user = getuserid($owner);
    $id = $user['id'];
    $stmt = $conn->prepare('INSERT INTO forum VALUES (DEFAULT, ?, ?, ?, ?, ?, ?)');
    $stmt->execute(array( $category, $subject, $text, $dmy, $time, $id));
  }

  function getuserid($owner) {
    global $conn;

    $stmt = $conn->prepare('SELECT id FROM users WHERE email = ?');
    $stmt->execute(array($owner));
    return $stmt->fetch();
  }

  function getTopics($category)
  {
    global $conn;
    $stmt = $conn->prepare('SELECT * FROM forum WHERE category = ?');
    $stmt->execute(array($category));
    return $stmt->fetchAll();
  }

  function getTopic($id)
  {
    global $conn;
    $stmt = $conn->prepare('SELECT * FROM forum WHERE id = ?');
    $stmt->execute(array($id));
    return $stmt->fetch();
  }

  function getComments($id)
  {
    global $conn;
    $stmt = $conn->prepare('SELECT * FROM comments WHERE topic = ?');
    $stmt->execute(array($id));
    return $stmt->fetchAll();
  }

  function insertComment($text, $topic, $username, $date)
  {
    global $conn;
    $dmy = $date['mon'].'-'.$date['mday'].'-'.$date['year'];
    $time = $date['hours'] . ':' . $date['minutes'] . ':' . $date['seconds'] ;

    $user = getuserid($username);
    $id = $user['id'];

    echo($text);
    echo($topic);
    echo($id);
    echo($dmy);
    echo($time);
    $stmt = $conn->prepare('INSERT INTO comments VALUES (DEFAULT, ?, ?, ?, ?, ?)');
    $stmt->execute(array( $topic, $text, $dmy, $time, $id));
  }

  function getNumberOfTopics($category)
  {
    global $conn;
    $stmt = $conn->prepare('SELECT COUNT(id) FROM forum WHERE category = ?');
    $stmt->execute(array($category));
    return $stmt->fetch();
  }

  function getLastTopic($category)
  {
    global $conn;

  $stmt = $conn->prepare('SELECT * FROM forum WHERE id = ANY (SELECT MAX(id) FROM forum GROUP BY category HAVING category = ?)');
  $stmt->execute(array($category));
  return $stmt->fetch();
  }
?>

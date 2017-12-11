<?php
  include_once('config/init.php');
  include_once('database/forum.php');

  $text = strip_tags($_POST['comentario']);
  $topic = trim(strip_tags($_POST['topico']));
  $user= $_SESSION['email'];
  $date=getdate();

  insertComment($text, $topic, $user, $date);
  header('Location: view_topic.php?topic='.$topic['id']);

?>

<?php
  include_once('config/init.php');
  include_once('database/forum.php');

  $category = $_POST['category'];
  $subject = trim(strip_tags($_POST['subject'])); //removes html and php tags from subject
  $text = strip_tags($_POST['text']); //trim removes spaces from beginning and ending
  $user= $_SESSION['email'];
  $date=getdate();

  createTopic($category, $subject, $text, $user, $date);
  header('Location: forum.php');

?>

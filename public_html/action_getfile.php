<?php
  include_once('config/init.php');
  include_once('database/cadeiras.php');
  include_once('database/files.php');

	if (!$_SESSION['email']) {
    die(header("Location: index.php"));
  }
 
  $file_id = 0 + $_GET['file_id'];
  $file=getFiles($file_id);
	header("Content-disposition: attachment; filename=".$file['filename']); 

  readfile('files/'.$file_id);
  
?>
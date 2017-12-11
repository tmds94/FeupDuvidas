<?php
	include('config/init.php');
	include('database/files.php');
	$file_id=$_GET['file_id'];
	removeFile($file_id);

	unlink('files/'.$file_id);
	$_SESSION['success_message']="O Ficheiro foi removido.";
	header('Location: ' . $_SERVER['HTTP_REFERER']);
?>

<?php
  include_once('config/init.php');
  include_once('database/cadeiras.php');
  include_once('database/files.php');

//https://www.w3schools.com/php/php_file_upload.asp

$uc_id = $_POST['uc_id'];
$cat_id = $_POST['cat_id'];
if(!$file_name=$_FILES['file']['name'])
	die(header("Location: category_files.php?cat_id=".$cat_id."&uc_id=". $uc_id));

$allowed =  array('gif','png' ,'jpg','txt','docx', 'pdf', 'xlsx','xls','doc','ppt','pptx');
$ext = pathinfo($file_name, PATHINFO_EXTENSION);
if(!in_array($ext,$allowed) ) {
    $_SESSION['error_message']= "Não suportado";
    die(header("Location: category_files.php?cat_id=".$cat_id."&uc_id=". $uc_id));

}


$file_id=insertFile($uc_id, $file_name,$cat_id,$_SESSION['id']);

move_uploaded_file($_FILES['file']['tmp_name'], 'files/' . $file_id['max']);   //Moves an uploaded file to a new location
$_SESSION['success_message']= "O ficheiro foi adicionado!";
header("Location: category_files.php?cat_id=".$cat_id."&uc_id=". $uc_id);

?>
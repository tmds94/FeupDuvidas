<?php
  include_once('config/init.php');
  include_once('database/cadeiras.php');
  include_once('database/files.php');
  include_once('database/cats.php');
	if (!$_SESSION['email']) {
    die(header("Location: index.php"));
  }
  $PAGE_SIZE = 10;
  $page = isset($_GET['page'])?$_GET['page']:0;
  $uc_id = $_GET['uc_id'];
  $cat_id=$_GET['cat_id'];
  $cadeira=getCadeira($uc_id);
  $files=getFilesFromCourse($uc_id,$cat_id,$page,$PAGE_SIZE);
  $category=getCategoryName($cat_id);
  $count=getFileCountFromCourse($uc_id, $cat_id);
  include ('templates/header.php');
 include('templates/side_menu.php');
  include ('templates/category_files.php');
  include ('templates/footer.php');
?>

<?php
  include_once('config/init.php');
  include_once('database/UCs.php');
  include_once('database/categories.php');
	if (!$_SESSION['emailup']) {
    die(header("Location: index.php"));
  }
  $uc_id = $_GET['uc_id'];
  $cadeira=getCadeira($uc_id);

  $categories=getAllCategories();
  include ('templates/header.php');
include('templates/side_menu.php');
  include ('templates/course_cats.php');
  include ('templates/footer.php');
?>

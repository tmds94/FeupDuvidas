<?php
  include_once('config/init.php');
  include_once('database/cadeiras.php');
  include_once('database/cats.php');
	if (!$_SESSION['email']) {
    die(header("Location: index.php"));
  }
  $uc_id = $_GET['uc_id'];
  $cadeira=getCadeira($uc_id);

  $categories=getAllCategories();
  include ('templates/header.php');
  include ('templates/course_cats.php');
  include ('templates/footer.php');
?>

<?php
  include_once('config/init.php');
  include_once('database/files.php');
  include_once('database/cadeiras.php');
  include_once('database/cats.php');

	$cadeiras=getAllCourses();
	$categories=getAllCategories();

  include ('templates/header.php');
 include ('templates/side_menu.php');
  include ('templates/insert_file.php');
  include ('templates/footer.php');
?>
<?php
  include ('config/init.php');
  include ('database/cats.php');
  include ('database/cadeiras.php');
  include ('database/files.php');
	if (!$_SESSION['email']) {
    die(header("Location: index.php"));
  }
  $name = $_GET['name'];
  $cat_id = $_GET['cat_id'];
if(!$name) die(header("Location:search.php"));

  $files = getFilesBySearch($name, $cat_id);

  include ('templates/header.php');
  include('templates/side_menu.php');
  include ('templates/search_results.php');
  include ('templates/footer.php');
?>
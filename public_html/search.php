<?php
  include ('config/init.php');  
  include ('database/cats.php');
  include_once('database/cadeiras.php');
  if (!$_SESSION['email']) {
    die(header("Location: index.php"));
  }
  $categories = getAllCategories();

  include ('templates/header.php');
 include ('templates/side_menu.php');
  include ('templates/search.php');
  include ('templates/footer.php');
?>
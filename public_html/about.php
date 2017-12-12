<?php
  include_once('config/init.php');
  include_once('database/cadeiras.php');
  if (!$_SESSION['email']) {
    die(header("Location: index.php"));
  }
  include ('templates/header.php');
  include('templates/about.php');
  include ('templates/footer.php');
?>

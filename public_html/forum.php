<?php
  include_once('config/init.php');
  include_once('database/cadeiras.php');
  include_once('database/forum.php');
 if (!$_SESSION['email']) {
    die(header("Location: index.php"));
  }
  include ('templates/header.php');
  include('templates/forum.php');
  include ('templates/footer.php');
?>

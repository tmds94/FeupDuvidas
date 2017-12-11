<?php
  include_once('config/init.php');
  if (!$_SESSION['email']) {
    die(header("Location: menu.php"));
  }

  include ('templates/chat.php');
  include ('templates/footer.php');
  
?>

<!DOCTYPE html>
<html>
  <head>
    <title>FEUPDuvidas.com</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <header>
      <h1>FEUPDuvidas.com</h1>
    </header>
    <nav>
      <?php if (isset($_SESSION['username'])) { ?>
        <div id="session">
          <?=$_SESSION['username']?> <a href="action_logout.php">Logout</a>
        </div>
      <?php } else { ?>
		<form action="action_login.php" method="post">
		  <input type="text" placeholder="username" name="username">
		  <input type="password" placeholder="password" name="password">
		  <input type="submit" value="&gt;&gt;">
		</form>
		<?php } ?>
		  <ul>
		<?php if (isset($_SESSION['username'])) { ?> 
		<li><a href="../members.php">Members</a></li>
		<li><a href="../options.php">Options</a></li>
		<li><a href="../help.php"></a>Help</li>
		<li><a href="../logout.php"></a>Logout</li>
		<?php } else { ?> 
		<li><a href="../register.php">Register</a></li>
		<li><a href="../login.php">Login</a></li>
		<li><a href="../help.php"></a>Help</li>
		<li><a href="../aboutus.php"></a>About us</li>
		<?php } ?>
		
      </ul>
    </nav>
	<?php if (isset($_SESSION['error_message'])) { ?>
	<div section="errors">
	<?=$_SESSION['error_message'];?>
	<?php unset($_SESSION['error_message']);?>
	
	</div>
	<?php }?>
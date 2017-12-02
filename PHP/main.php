<!DOCTYPE html>
<html>
<head>
	<title>FEUPDuvidas.com</title>
</head>
<body>
<?php
  include_once('ini.php');
	include ('footer.php');
	include ('areas.php');
?>
  <section id="main">
				<div id=two>
  				<h4>My Areas</h4>
						
 				 <ul class="areas">
 				 	<?php
          				$areas = getAllCategories();
					?>
     			</ul>
					</div>
					
					
					<div id="one">
					
						<img src="a1.png">
						<ul>
									<li>Username</li>
          							<li>My profile</li>
									<li>My comments</li>
     					</ul>
						
					</div>
			</section>
</body>
</html>


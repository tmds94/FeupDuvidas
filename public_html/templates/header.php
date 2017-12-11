<head>
		<title>FEUPDuvidas</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

	</head>
	<body>
		<div id="header">

			<h1>FEUPDuvidas</h1>
		</div>


		<div id="menu">
			<ul>
				<li ><a href="menu.php">Home</a></li>
				<?php for ($year= 1; $year <= 2; $year++) { ?>
				<li><a href=""><?php print($year) ?>º Ano</a>
				<ul>
					<?php for($semestre=1 ; $semestre<=2;$semestre++) {?>
					<li><a href="#"><?php print($semestre)?>ºSemestre</a>
					<ul>
					<?php $courses=getCourses($year,$semestre);
					      foreach($courses as $course) {
					 ?>
          					<li><a href="course_cats.php?uc_id=<?=$course['id']?>"><?php print($course['nome'])?></a>
						<?php } ?>
					</ul>
					</li>
					<?php } ?>
				</ul>
				<?php } ?>

				<?php for ($year= 3; $year <= 5; $year++) { ?>
				<li><a href=""><?php print($year) ?>º Ano</a>
				<ul>
					<?php	$ramos=getRamos();
						foreach($ramos as $ramo){
					?>
					<li><a href="#"><?php print($ramo['ramo'])?></a>
					<ul>
						<?php for($semestre=1 ; $semestre<=2;$semestre++) {?>
						<li><a href="#"><?php print($semestre)?>ºSemestre</a>
						<ul>
						<?php $courses=getCoursesRamo($year,$semestre,$ramo['ramo']);
						      foreach($courses as $course) {
						 ?>
		  					<li><a href="course_cats.php?uc_id=<?=$course['id']?>"><?php print($course['nome'])?></a>
							<?php } ?>
						</ul>
						</li>
						<?php } ?>
					</ul>
					</li>
					<?php } ?>

				</ul>
				<?php } ?>
				<li><a href="forum.php">Forum</a></li>
				<li><a href="chat.php">Chat</a></li>
				<li><a href="search.php"> <i class="fa fa-search" aria-hidden="true"></i> </a>
				<li style="float:right"><a class="logout" href="action_logout.php">Logout</a></li>
			</ul>
		</div>

	 <?php if ($_ERROR_MESSAGE) { ?>
	    <div class="errors">
	    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i><?= $_ERROR_MESSAGE; unset($_ERROR_MESSAGE) ?>
	    </div>
	    <?php } ?>

	    <?php if ($_SUCCESS_MESSAGE ) { ?>
	    <div class="success">
	   <i class="fa fa-check" aria-hidden="true"></i>
 <?=  $_SUCCESS_MESSAGE ; unset( $_SUCCESS_MESSAGE ) ?>
	    </div>
	    <?php } ?>

	</body>

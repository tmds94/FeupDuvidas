<head>
		<title>FEUPDuvidas</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
	<meta charset='utf-8'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/stylezas.css">
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script src="script.js"></script>
</head>

<body>
	<div class="middle">
			<div id='cssmenu'>
					<ul>
					   <li><a href="menu.php"><span>Home</span></a></li>
					   <li class='active has-sub'><a href='#'><span>MIEEC</span></a>
						  <ul>
							 <li class='has-sub'><a href='#'><span>1ºAno</span></a>
								<ul>
								<li class="has-sub"><a href='#'><span>1ºSemestre</span></a>
								<ul>
								<?php $courses=getCourses(1,1);	foreach($courses as $course) {?>
          						<li><a href="course_cats.php?uc_id=<?=$course['id']?>"><span><?php print($course['nome'])?></span></a></li>
								<?php } ?></ul>
								</li>
								<li class='has-sub'><a href='#'><span>2ºSemestre</span></a>
								<ul>
								<?php $courses=getCourses(1,2);  foreach($courses as $course) {?>
          						<li><a href="course_cats.php?uc_id=<?=$course['id']?>"><?php print($course['nome'])?></a></li>
								<?php } ?></ul>
								</li>
								</ul>
							 </li>

							 <li class='has-sub'><a href='#'><span>2ºAno</span></a>
								<ul>
								<li class='has-sub'><a href='#'><span>1ºSemestre</span></a>
								<ul>
								<?php $courses=getCourses(2,1); foreach($courses as $course) {?>
          						<li><a href="course_cats.php?uc_id=<?=$course['id']?>"><?php print($course['nome'])?></a></li>
								<?php } ?></ul>
								</li>
								<li class='has-sub'><a href='#'><span>2ºSemestre</span></a>
								<ul>
								<?php $courses=getCourses(2,2); foreach($courses as $course) {?>
          						<li><a href="course_cats.php?uc_id=<?=$course['id']?>"><?php print($course['nome'])?></a></li>
								<?php } ?></ul>
								</li>
								</ul>
							 </li>

							 <li class='has-sub'><a href='#'><span>3ºAno</span></a>
								<ul>
								<?php	$ramos=getRamos(); foreach($ramos as $ramo){?>
								<li><a href="#"><?php print($ramo['ramo'])?></a>
								<ul>
								<?php for($semestre=1 ; $semestre<=2;$semestre++) {?>
								<li><a href="#"><?php print($semestre)?>ºSemestre</a>
								<ul>
								<?php $courses=getCoursesRamo(3,$semestre,$ramo['ramo']); foreach($courses as $course) {?>
		  						<li><a href="course_cats.php?uc_id=<?=$course['id']?>"><?php print($course['nome'])?></a></li>
								<?php } ?>
								</ul>
								</li>
								<?php } ?>
								</ul>
								</li>
								<?php } ?>
								</ul>
							 </li>

							 <li class='has-sub'><a href='#'><span>4ºAno</span></a>
								<ul>
								   <?php	$ramos=getRamos(); foreach($ramos as $ramo){?>
									<li><a href="#"><?php print($ramo['ramo'])?></a>
									<ul>
									<?php for($semestre=1 ; $semestre<=2;$semestre++) {?>
									<li><a href="#"><?php print($semestre)?>ºSemestre</a>
									<ul>
									<?php $courses=getCoursesRamo(4,$semestre,$ramo['ramo']); foreach($courses as $course) {?>
		  							<li><a href="course_cats.php?uc_id=<?=$course['id']?>"><?php print($course['nome'])?></a></li>
									<?php } ?>
									</ul>
									</li>
									<?php } ?>
									</ul>
									</li>
									<?php } ?>
									</ul>
							 </li>

							 <li class='has-sub'><a href='#'><span>5ºAno</span></a>
								<ul>
								   <?php	$ramos=getRamos(); foreach($ramos as $ramo){?>
									<li><a href="#"><?php print($ramo['ramo'])?></a>
									<ul>
									<?php for($semestre=1 ; $semestre<=2;$semestre++) {?>
									<li><a href="#"><?php print($semestre)?>ºSemestre</a>
									<ul>
									<?php $courses=getCoursesRamo(5,$semestre,$ramo['ramo']); foreach($courses as $course) {?>
		  							<li><a href="course_cats.php?uc_id=<?=$course['id']?>"><?php print($course['nome'])?></a></li>
									<?php } ?>
									</ul>
									</li>
									<?php } ?>
									</ul>
									</li>
									<?php } ?>
									</ul>
								</ul>
							 </li>

							
						  </ul>
					   </li>
					   
					   <li><a href='about.php'><span>About</span></a></li>
					   <li class='last'><a href='action_logout.php'><span>LOGOUT</span></a></li>
					</ul>
					</div>
				

		
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

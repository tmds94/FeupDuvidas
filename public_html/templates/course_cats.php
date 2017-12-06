<head>
		<title>FEUPDuvidas</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/cadeira.css">
		<link rel="stylesheet" href="css/font/font.css">
</head>

<section id="files">
	<br></br><h1><?=$cadeira['nome'] ?> </h1>

	<?php if( $uc_id == 254 ||  $uc_id== 255 ||  $uc_id == 256 ||  $uc_id== 257 ||  $uc_id== 258 ||  $uc_id== 259 ||  $uc_id== 260) {?>
		<div id ="espec">
		<ul>
			<?php $especCourses=getEspec($cadeira['ramo'])?>
			<?php foreach ($especCourses as $especCourse) { ?>
			<li><a href="Especializacao.php?espec=<?=$especCourse['espec']?>&ramo=<?=$especCourse['ramo']?>"><?= $especCourse['espec'] ?></a></li>
			<?php } ?>
		</ul>
		</div>
	<?php } ?>
	<?php if( !($uc_id == 254 ||  $uc_id== 255 ||  $uc_id == 256 ||  $uc_id== 257 ||  $uc_id== 258 ||  $uc_id== 259 ||  $uc_id== 260)) {?>
		<div id="folders">
			<ul>
				<?php foreach ($categories as $category) { ?>
				<li><i class="fa fa-folder" aria-hidden="true"></i>
</i>
	<a href="category_files.php?cat_id=<?=$category['id']?>&uc_id=<?=$uc_id?>"><?= $category['name'] ?></a></li>
				<?php } ?>
			</ul>
	<?php } ?>
		</div>

</section>

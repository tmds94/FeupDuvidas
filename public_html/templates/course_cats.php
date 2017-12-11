<head>
		<title>FEUPDuvidas</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/cadeira.css">
		<link rel="stylesheet" href="css/font/font.css">
</head>

<section id="files">
	<br></br><h1><?=$cadeira['nome'] ?> </h1>

	<?php {?>
		<div id="folders">
			<ul>
				<?php foreach ($categories as $category) { ?>
				<li><i class="fa fa-folder" aria-hidden="true"></i>
</i>
	<a href="category_files.php?cat_id=<?=$category['id']?>&uc_id=<?=$uc_id?>"><?= $category['nome'] ?></a></li>
				<?php } ?>
			</ul>
	<?php } ?>
		</div>

</section>

<head>
		<title>FEUPDuvidas</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/stylezas.css">
		<link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
</head>

<section id="files">
	<h1><?=$cadeira['nome'] ?> </h1>

	
		<div id="folders">
			<ul>
				<?php foreach ($categories as $category) { ?>
				<li><i class="fa fa-folder" aria-hidden="true"></i><a href="category_files.php?cat_id=<?=$category['id']?>&uc_id=<?=$uc_id?>"><?= $category['nome'] ?></a></li>
				<?php } ?>
			</ul>
		</div>

</section>

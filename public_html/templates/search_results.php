<head>
		<title>FEUPDuvidas</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/stylezas.css">
		<link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
	</head>
<section id="search">
  <h1>Resultados</h1>

<div id="no_result">
	<?php if(!$files){ ?>
		<i class="fa fa-frown-o"></i>
		<h4> Can't Find It </h4>
		<li ><a href="search.php">Return</a></li>
	<?php } ?>

</div>
<div id="search_results">
		
	<ul>
		<?php foreach ($files as $file) { ?>
		<li><i class="fa fa-file"></i><a href="action_getfile.php?file_id=<?=$file['id']?>"><?= $file['filename'] ?></a></li>
		<?php } ?>

	</ul>
</div>
</section>



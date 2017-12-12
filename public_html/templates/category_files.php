<section id="files">
	
	<br></br><h1><?=$cadeira['nome']?> </h1>

	<h2 class="fa fa-folder-open-o"><?=$category['nome']?></h2>

	<div id="empty">
		<?php if (!$files) { ?>
		<h2> A pasta está vazia</h2>
	<?php } ?>

	</div>
	<div id="cat_files">
		
	<ul>
		<?php foreach ($files as $file) { ?>
		<li><i class="fa fa-file" aria-hidden="true"></i>
<a href="action_getfile.php?file_id=<?=$file['id']?>"><?= $file['filename'] ?></a>

		<?php if($_SESSION['id'] == $file['user_id']){ ?>
		<a href="action_removefile.php?file_id=<?=$file['id']?>"><i class="fa fa-trash"></i></a>
		<?php } ?>
		</li>
		<?php } ?>

	</ul>
	</div>

	<form action="action_newfile.php" enctype="multipart/form-data" method="post">
    		<input type="file" name="file">
		<input type="hidden" name="uc_id" value="<?=$uc_id?>"></input>
		<input type="hidden" name="cat_id" value="<?=$cat_id?>"></input>
		<input type="submit" value="Adicionar ficheiro">
  	</form>

</section>
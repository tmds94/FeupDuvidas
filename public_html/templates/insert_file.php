<head>
		<title>FEUPDuvidas </title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/cadeira.css">
		<link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<div id ="add">
<h1> Adicionar ficheiros </h1>
<form action="action_newfile.php" enctype="multipart/form-data" method="post">
	<label> Cadeira:
      <select name="uc_id">
        <option value="">--</option>
      <?php foreach ($cadeiras as $cadeira) { ?>
        <option value="<?=$cadeira['id']?>"><?=$cadeira['nome']?></option>
      <?php } ?>
      </select>
    </label> <br></br>
    <label> Categoria:
      <select name="cat_id">
        <option value="">--</option>
      <?php foreach ($categories as $category) { ?>
        <option value="<?=$category['id']?>"><?=$category['nome']?></option>
      <?php } ?>
      </select>
    </label><br></br>
	<input type="file" name="file"><br></br><br></br>
    <input type="submit" value="Inserir ficheiro">
  </form>
</div>
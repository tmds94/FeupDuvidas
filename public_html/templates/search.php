<head>
		<title>FEUPDuvidas</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/cadeira.css">
	</head>

<section id = "search">
<h1> Search </h1>

<form method="get" action="search_results.php">
    <label> Nome do Ficheiro:
      <input type="text" name="name" value="">
    </label>
    <label> Categoria:
      <select name="cat_id">
        <option value="">--</option>
      <?php foreach ($categories as $category) { ?>
        <option value="<?=$category['id']?>"><?=$category['nome']?></option>
      <?php } ?>
      </select>
    </label><br></br>
    <input type="submit" value="Search">
  </form>

</section>

<?php $categoria = $_GET['categoria'];?>

<head>
	<title>FEUPDuvidas</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div id ="create_topic">
   <header>
      <h1>Fórum</h1>
      <h2>Novo Tópico: </h2>
    </header>
    <form action = "action_createtopic.php" method="post">
      <label> Categoria: <input type="text" name="category" value="<?=$categoria ?>"> </label><br>
      <label> Assunto: &nbsp <input type="text" name = "subject"> </label><br>
      <label> Texto: &nbsp &nbsp &nbsp&nbsp<textarea rows="4" cols="50" name = "text"> </textarea></label><br>

      <input  class="submit" type="submit" value="Criar Tópico">
    </form>
  </div>
</body>

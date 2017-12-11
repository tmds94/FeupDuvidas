<?php
  $category = $_GET['category'];
?>

<head>
		<title>FEUPDuvidas</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>
    <div id="topics">
    <header>
      <h1>Fórum</h1>
      <h2><label>Categoria: </label><?=$category?></h2>
      <a href="create_topic.php?categoria=<?=$category?>"> Criar tópico </a>
    </header>
      <table>
          <thead>
            <tr>
              <td colspan="4" id="topics_nome"> Tópico <td> Username </td> <td> Data </td>
            <tr>
          </thead>
          <tbody>
            <?php $topics = getTopics($category);
            foreach ($topics as $topic) {
            ?>
            <tr>
              <td colspan="4"> <a href="view_topic.php?topic=<?=$topic['id']?>"> <?=$topic['subject']?> </a></td>
              <?php $user = getUserbyId($topic['userid']); ?>
              <td> <?=$user['nome']?> </td>
              <td> <?=$topic['dmy']?> às <?=$topic['time']?></td>
            </tr>
            </tbody>
          <?php } ?>
        </table>
		<br></br><br></br><br></br><br></br>
	</div>
	</body>

<?php
  $topic=$_GET['topic'];
  $row = getTopic($topic);
  $user = getUserbyId($row['userid']);
  $comments = getComments($topic);
?>

<head>
		<title>FEUPDuvidas</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div id="view_topic">
    <div class="topico">
      <h1>Fórum</h1>
      <h2><label>Categoria: </label><?=$row['category']?></h2>
      <h3><label>Assunto: </label><?=$row['subject']?></h3>
      <h4>Criado por <?=$user['nome']?> em <?=$row['dmy']?> às <?=$row['time']?> </h4>
      <article> <?=$row['text']?> </article>
    </div>

    <h5> Comentários: </h5>
       <?php foreach ($comments as $comment) {?>
        <div class="comentarios">
          <lable> <? $user = getUserbyId($comment['userid']); ?>
                <?=$user['nome']?> em <?=$comment['dmy']?> às <?=$comment['time']?></lable>
          <p> <?= $comment['text']?> </p>
        </div>
        <?php } ?>

        <form action = "action_comment.php" method="post">
          <input type="hidden" name=topico value=<?=$topic?>>

          <textarea rows="4" cols="94" name="comentario"> </textarea>
          <input type="submit" value="Comentar">
        </form>
  </div>
</body>

<?php
  $ramos = getRamos();
?>

<head>
		<title>FEUPDuvidas</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>
    <div id="forum">
		<h1>Fórum</h1>
        <table>
          <thead>
            <tr>
              <td colspan="4" id = "forum_nome"> Categoria <td> Nº Tópicos </td> <td> Último Tópico </td>
            </tr>
          </thead>
          <tbody>
          <?php for ($year= 1; $year <= 2; $year++) { ?>
              <tr>
                <td colspan="4"> <a href="topics.php?category=<?=$year?>ºAno"> <?=$year?> ºAno </td>
                <?php $NofTopics=getNumberOfTopics($year.'ºAno');
                   $lastTopic=getLastTopic($year.'ºAno'); ?>
                     <td> <?=$NofTopics['count']?> </td>
                <td> <?=$lastTopic['subject']?> </td>
              </tr>
          <?php } ?>
          <?php foreach($ramos as $ramo){ ?>
            <tr>
              <td colspan="4"> <a href="topics.php?category=<?=$ramo['ramo']?>"> <?=$ramo['ramo'] ?> </td>
              <?php $NofTopics=getNumberOfTopics($ramo['ramo']);
                 $lastTopic=getLastTopic($ramo['ramo']); ?>
              <td> <?=$NofTopics['count']?> </td>
              <td> <?=$lastTopic['subject']?> </td>
            </tr>
          <?php } ?>
          <tr>
            <td colspan="4"> <a href="topics.php?category=Outros Assuntos"> Outros Assuntos </td>
            <?php $NofTopics=getNumberOfTopics('Outros Assuntos');
               $lastTopic=getLastTopic('Outros Assuntos'); ?>
            <td> <?=$NofTopics['count']?> </td>
            <td> <?=$lastTopic['subject']?> </td>
          </tr>
        </tbody>
      </table>
		<br></br><br></br><br></br><br></br>
	</div>
	</body>

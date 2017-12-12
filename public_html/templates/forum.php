<?php
  $ramos = getRamos();
?>

<head>
		<title>FEUPDuvidas</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/stylezas.css">
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
          
              <tr>
                <td colspan="4"> <a href="topics.php?category=1ºAno"> 1ºAno </td>
                <?php $NofTopics=getNumberOfTopics('1ºAno');
                   $lastTopic=getLastTopic('1ºAno'); ?>
                     <td> <?=$NofTopics['count']?> </td>
                <td> <?=$lastTopic['subject']?> </td>
              </tr>

              <tr>
                <td colspan="4"> <a href="topics.php?category=2ºAno"> 2ºAno </td>
                <?php $NofTopics=getNumberOfTopics('2ºAno');
                   $lastTopic=getLastTopic('2ºAno'); ?>
                     <td> <?=$NofTopics['count']?> </td>
                <td> <?=$lastTopic['subject']?> </td>
              </tr>
          
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
	</div>
	</body>

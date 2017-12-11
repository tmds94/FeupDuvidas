<?php
  $user=$_SESSION['nome'];
?>

<head>
    <title>FEUPDuvidas Chat</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/chat.css">
    <script src="scripts/script.js" defer></script>
  </head>
  <body>

    <div id="chat"></div>

    <form >
      <input type="text" name="username" value="<?php echo $user; ?>">
      <input type="text" name="message" placeholder="message">
      <input type="submit" value="Send">
    </form>

  </body>

  
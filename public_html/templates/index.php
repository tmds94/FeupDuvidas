<head>
		<title>FEUPDuvidas.com</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/stylezas.css">
		<link rel="stylesheet" href="css/font/font.css">
</head>

<body>
		<div class="header">
			<div class="header_logo">
				<div class="logo">
					<img src='images/iu-2.png' title="invert" class="invert" />
				</div>
				<div class="logo_text"> FEUPDuvidas.com</div>
			</div>
			
			<?php if ( $_ERROR_MESSAGE) { ?>
	   		 <div class="error_index">
	    		 <h4><?=  $_ERROR_MESSAGE; unset($_ERROR_MESSAGE)?></h4>
	   		 </div>
	    		<?php } ?>

			<?php if ( $_SUCCESS_MESSAGE) { ?>
	   		 <div class="success_index">
	    		 <h4><?= $_SUCCESS_MESSAGE; unset($_SUCCESS_MESSAGE) ?></h4>
	   		 </div>
	    		<?php } ?>

		<div class="header_btns">
			<div class="login_btn btn">
				<form action="action_login.php" method="post">
					<input type="text" placeholder="email" name="email"><br>
					<input type="password" placeholder="password" name="password"><br>
					<input type="submit" value="Login">
				</form>
			</div>

			<div class="register_btn btn">
				<form action="action_register.php" method="post">
					<input type="text" placeholder="Nome" name="name" value="<?=$_FORM_VALUES['name']?>"><br>
					<input type="text" placeholder="Email" name="email" value="<?=$_FORM_VALUES['email']?>"><br>
					<input type="text" placeholder="Número de Aluno UP" name="num" value="<?=$_FORM_VALUES['num']?>"><br>
					<input type="password" placeholder="Password" name="psw"><br>
					<input type="password" placeholder="Repetir Password" name="confirma_psw"><br>
					<input type="submit" value="Registar">
				</form>
			</div>

			<div class="about_btn btn">
				<ul>
					<li><a href="about.php">About us</a>
				</ul>
			</div>
		</div>

		<div class="middle">
			<div class="middlebox">
				<span>Estudas na FEUP e estás a ter dúvidas existênciais?
					<br> Não entres em pânico! Nós estamos aqui para te ajudar. Regista-te já
					<br> no
					<font style="color:rgb(0,0,0);">FEUPDuvidas.com</font> e começa a disfrutar de todo o conhecimento acumulado
					<br> por alunos como tu em vários anos de curso e tira todas as tuas dúvidas!
				</span>
			</div>
		</div>

</body>

<div class="footer">
	<span>SIBD2017, FEUP2017, Grupo24</span>
</div>

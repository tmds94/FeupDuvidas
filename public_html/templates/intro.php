<!DOCTYPE html>
<html>


<head>
	<title>FEUPDuvidas</title>
	<link rel="stylesheet" type="text/css" href="stylezas.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

	<meta charset="utf-8">
</head>


<body>
	<div class="header">
		<div class="header_logo">
			<div class="logo">
				<img src="iu-2.png" title="invert" class="invert" />
			</div>
			<div class="logo_text"> FEUPDuvidas.com</div>
		</div>
		<div class="header_btns">
			<div class="label_login">Login<br>Password<br></div>
			<div class="login_btn btn">
				<form action="action_login.php" method="post">
					<input type="text" placeholder="email" name="email"><br>
					<input type="password" placeholder="password" name="password"><br>
					<input type="submit" value="Login">
				</form>
			</div>

		</div>
	</div>
	<div class="middle">
		<div class="middlebox">
				<div class="register_btn btn">
						<form action="action_register.php" method="post">
							<span>Nome:<span><br>
							<span>Email:</span><br>
							<span>Número de Aluno UP:</span><br>
							<span>Password:</span><br>
							<span>Repetir Password:</span><br><br>
							
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
			

		</div>
	</div>


</body>

<div class="footer">
	<span>@SIBD2017, FEUP2017, Grupo24</span>
</div>
</html>
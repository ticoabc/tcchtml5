<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Admin - Login</title>
		<link rel="icon" href="img/ico/icone_swdb.ico">
	</head>
	<body>
		<a href='index.html'>Home</a><br>
		<h2>Área Administrativa</h2>
		<?php
			if (isset($_SESSION['msg'])) {
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
			if (isset($_SESSION['msgcad'])) {
				echo $_SESSION['msgcad'];
				unset($_SESSION['msgcad']);
			}
		?>
		<form method="POST" action="valida.php"><br>
			<label>Usuário</label>
			<input type="text" name="usuario" placeholder="Digite o seu usuário"><br><br>

			<label>Senha</label>
			<input type="password" name="senha" placeholder="Digite a sua senha"><br><br>

			<input type="submit" name="btnLogin" value="Acessar">
			<br><br><a href='cadastrar.php'> Cadastro </a><br>
		</form>
	</body>
</html>
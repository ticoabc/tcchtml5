<?php
session_start();
include_once("conectadmin.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM admin WHERE id = '$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Editar</title>		
	</head>
	<body>
		<!--<a href="cadastrar.php">Cadastrar</a><br>-->
		<a href="consulta.php">Voltar</a><b>
		<!--<a href="consulta_admin.php">Listar</a><br>-->
		<h1>Editar Usuário</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="proc_edit_usuario.php">
			<input type="hidden" name="id" value="<?php echo $row_usuario['id']; ?>">
			
			<label>Nome: </label>
			<input type="text" name="nome" placeholder="Digite o nome completo" value="<?php echo $row_usuario['nome']; ?>"><br><br>
			
			<label>E-mail: </label>
			<input type="text" name="email" placeholder="Digite o seu melhor e-mail" value="<?php echo $row_usuario['email']; ?>"><br><br>
			
			<label>Usuário</label>
			<input type="text" name="usuario" placeholder="Digite o usuário" value="<?php echo $row_usuario['usuario']; ?>"><br><br>
			
			<input type="submit" value="Editar">
		</form>
	</body>
</html>
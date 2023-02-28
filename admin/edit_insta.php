<?php
session_start();
include_once("conectadmin.php");
$id_insta = filter_input(INPUT_GET, 'id_insta', FILTER_SANITIZE_NUMBER_INT);
$result_insta = "SELECT * FROM cad_insta WHERE id_insta = '$id_insta'";
$resultado_insta = mysqli_query($conn, $result_insta);
$row_insta = mysqli_fetch_assoc($resultado_insta);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Editar</title>		
	</head>
	<body>		
		<!--<a href='consulta.php'>Voltar</a><br>-->
		<a href="consulta_insta_2.php">Voltar</a><b>
		<h1>Editar Instalador</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="proc_edit_insta.php">
			<input type="hidden" name="id_insta" value="<?php echo $row_insta['id_insta']; ?>">
			
			<label>Nome: </label>
			<input type="text" name="nome" placeholder="Digite o nome completo" value="<?php echo $row_insta['nome']; ?>"><br><br>
			
			<label>CREA</label>
			<input type="text" name="crea" placeholder="Digite o seu crea" value="<?php echo $row_insta['crea']; ?>"><br><br>
			
			<label>E-mail: </label>
			<input type="text" name="email" placeholder="Digite o seu melhor e-mail" value="<?php echo $row_insta['email']; ?>"><br><br>
			
			<label>Telefone</label>
			<input type="text" name="telefone" placeholder="Digite o telefone" value="<?php echo $row_insta['telefone']; ?>"><br><br>
			
			<label>Gênero: </label>
				<select name="genero" placeholder="Selecione">
					<option value="M">Masculino</option>
					<option value="F">Feminino</option>
					<option value="O">LGBTQIA+</option>
				</select><br><br>		
			<input type="submit" value="Editar">
		</form>
	</body>
</html>
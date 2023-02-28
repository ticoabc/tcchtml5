<?php
session_start();
ob_start();
$btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_SANITIZE_STRING);
if($btnCadUsuario){
	include_once 'conectadmin.php';
	$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
	//var_dump($dados);
	
	//Criptrografar senha
	//$dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);
	
	$result_insta = "INSERT INTO cad_insta (nome, crea, email, telefone, genero) VALUES (
				'" .$dados['nome']. "',
				'" .$dados['crea']. ",
				'" .$dados['email']. "',
				'" .$dados['telefone']. "',
				'" .$dados['genero']. "'
				)";
	$resultado_insta = mysqli_query($conn, $result_insta);
				if(mysqli_insert_id($conn)){
					$_SESSION['msgcad'] = "Instalador cadastrado com sucesso<br>";
					header("Location: index.html");
				}else{
					$_SESSION['msg'] = "Erro ao cadastrar o Instalador";
		}
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<link rel="icon" href="imagens/insta.ico">
		<title>Cadastro de Instaladores</title>
	</head>
	<body>
	<a href='consulta.php'>Voltar</a><br>
		<h2>Cadastro de Instaladores</h2>
		<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
		?>
		<form method="POST" action="processa_insta.php">
			<label>Nome</label>
			<input type="text" name="nome" placeholder="Digite o nome e o sobrenome"><br><br>

			<label>CREA</label>
			<input type="text" name="crea" placeholder="Digite o seu crea"><br><br>

			<label>E-mail</label>
			<input type="text" name="email" placeholder="Digite o seu e-mail"><br><br>

			<label>Telefone</label>
			<input type="text" name="telefone" placeholder="Digite o telefone"><br><br>

			<label>Gênero: </label>
				<select name="genero" placeholder="Selecione">
					<option value="M">Masculino</option>
					<option value="F">Feminino</option>
					<option value="O">LGBTQIA+</option>
				</select><br><br>

			<input type="submit" name="btnCadUsuario" value="Cadastrar"><br><br>
		</form>
	</body>
</html>
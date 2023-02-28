<?php
	include_once("conectadmin.php");

	$nome = $_POST['nome'];
	$crea = $_POST['crea'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$genero = $_POST['genero'];

	// Criando a declaração SQL:
	$result_insta = "INSERT INTO cad_insta(nome, crea, email, telefone, genero)
					VALUES('$nome', '$crea', '$email', '$telefone', '$genero')";

	// Executando a declaração no banco de dados:
	$resultado = mysqli_query($conn,$result_insta) or die("Erro ao executar a inserção dos dados");
		if(mysqli_insert_id($conn)){
				"Usuário cadastrado com sucesso!!!<br>";
					header("Location: consulta.php");
			}else{
				"Erro ao cadastrar o usuário";
					header("Location: cadastrar_insta_2.php");
			}
	//echo "<br>Registro inserido com sucesso!!";
	//echo "<br><br><a href='index.html'>Voltar à página inicial</a>";

	//mysqli_close($strcon);
?>
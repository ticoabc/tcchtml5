<?php
	session_start();
	include_once("conectadmin.php");
	if(!empty($_SESSION['id'])){
		echo "Olá ".$_SESSION['nome'].", Bem vindo <br>";
		echo "<a href='sair.php'>Sair</a>";
	}else{
		$_SESSION['msg'] = "Área restrita";
		header("Location: login.php");	
	}

	// Criando tabela e cabeçalho de dados:
	echo "<br><br><center>";
	echo "<h1 style=text-align:center;>Usuários Cadastrados</h1>";
	echo "<table border=1; style=color:black; text-align:center;>";
	echo "<tr>";
	//echo "<th>ID</th>";
	echo "<th>NOME</th>";
	echo "<th>EMAIL</th>";
	echo "<th>USUÁRIO</th>";
	echo "</tr>";

	$result_usuario = "SELECT * FROM usuarios";
	$resultado = mysqli_query($conn, $result_usuario) or die("Erro ao retornar dados");

	// Obtendo os dados por meio de um loop while
	while ($registro = mysqli_fetch_array($resultado)){
		//$id_insta = $registro['id'];
		$nome = $registro['nome'];
		$email = $registro['email'];
		$usuario = $registro['usuario'];

		echo "<tr style=text-align:center>";
		echo "<td>" . $nome . "</td>";
		echo "<td>" . $email . "</td>";
		echo "<td>" . $usuario . "</td>";
		echo "</tr>";
	}
	mysqli_close($conn);
	echo "</table>";
	echo "</center>";
?>
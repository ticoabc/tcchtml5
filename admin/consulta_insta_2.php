<?php
include_once("conectadmin.php");
session_start();
/*if(!empty($_SESSION['id_insta'])){
	echo "Olá ".$_SESSION['nome'].", Bem vindo!! <br>";
	//echo "Cadastrar  novo usuário >>>>  <a href='cadastrar.php'> clique aqui  </a>";
	echo "<br><a href='sair.php'> Sair</a>";
}else{
	$_SESSION['msg'] = "Área restrita";
	header("Location: login.php");	
}*/
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<a href='consulta.php'>Voltar</a><br>
		<title>CRUD - Listar</title>
	</head>
	<body>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		
		//Receber o número da página
		$pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);		
		$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
		
		//Setar a quantidade de itens por pagina
		$qnt_result_pg = 9;
		
		//calcular o inicio visualização
		$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
		
		// Criando tabela e cabeçalho de dados:
		 echo "<br><br><center>";
		 echo "<h1 style=text-align:center;>Instaladores Cadastrados</h1>";
		 echo "<table border=1; style=color:black; text-align:center;>";
		 echo "<tr>";
		 echo "<th>ID</th>";
		 echo "<th>NOME</th>";
		 echo "<th>CREA</th>";
		 echo "<th>EMAIL</th>";
		 echo "<th>TELEFONE</th>"; 
		 echo "<th>GÊNERO</th>";
		 echo "<th>EDITAR</th>";
		 echo "</tr>";
		
		$result_insta = "SELECT * FROM cad_insta LIMIT $inicio, $qnt_result_pg";
		//$result_usuarios = "SELECT * FROM admin ORDER BY admin, $id ASC LIMIT $inicio, $qnt_result_pg";
		$resultado = mysqli_query($conn, $result_insta);
		while($row_usuario = mysqli_fetch_assoc($resultado)){
			echo "<tr style=text-align:center>";
			echo "<td>".$row_usuario['id_insta']."</td>";
			echo "<td>".$row_usuario['nome']."</td>";
			echo "<td>".$row_usuario['crea']."</td>";
			echo "<td>".$row_usuario['email']."</td>";
			echo "<td>".$row_usuario['telefone']."</td>";
			echo "<td>".$row_usuario['genero']."</td>";
			echo "<td>"."<a href='edit_insta.php?id_insta=" . $row_usuario['id_insta']. "'> Editar </a>".
						"<a href='proc_apagar_insta.php?id_insta=" . $row_usuario['id_insta'] . "'> //  Apagar </a></td>";
			echo "</tr>";
			echo "<br>";
			//echo "<a href='edit_usuario.php?id=" . $row_usuario['id'] . "'>Editar</a><br>";
			//echo "<a href='proc_apagar_usuario.php?id=" . $row_usuario['id'] . "'>Apagar</a><br><hr>";
		}
		 //mysqli_close($conn);
		 echo "</table>";
		 //echo "</center>";
		
		//Paginção - Somar a quantidade de usuários
		$result_pg = "SELECT COUNT(id_insta) AS num_result FROM cad_insta";
		$resultado_pg = mysqli_query($conn, $result_pg);
		$row_pg = mysqli_fetch_assoc($resultado_pg);
		//echo $row_pg['num_result'];
		//Quantidade de pagina 
		$quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
		
		echo "<br>";
		
		//Limitar os link antes depois
		$max_links = 2;
		echo "<a href='index.html?pagina=1'>Primeira</a> ";
		
		for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
			if($pag_ant >= 1){
				echo "<a href='index.html?pagina=$pag_ant'>$pag_ant</a> ";
			}
		}
			
		echo "$pagina ";
		
		for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
			if($pag_dep <= $quantidade_pg){
				echo "<a href='index.html?pagina=$pag_dep'>$pag_dep</a> ";
			}
		}		
		echo "<a href='index.html?pagina=$quantidade_pg'>Ultima</a>";
		echo "</center>";
		?>
	</body>
</html>
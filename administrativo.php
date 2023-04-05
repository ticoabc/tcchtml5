<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Adminstrativo</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="img/ico/icone_databse.ico">
        <style>
            * {
                box-sizing: border-box;
            }

            body {
                background-color: #333;
                margin: 0;
                color:#f1f1f1;
                font: 1em sans-serif;
            }

            /* Style the header */
            .header {
                background-color: #f1f1f1;
                padding: 20px;
                text-align: center;
            }

            /* Style the top navigation bar */
            .topnav {
                overflow: hidden;
                background-color: #333;
            }

            /* Style the topnav links */
            .topnav a {
                float: left;
                display: block;
                color: #f2f2f2;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

            /* Change color on hover */
            .topnav a:hover {
                background-color: #ddd;
                color: black;
            }

            /* Estilo do Botão Cadastro 24/03/23 */
            .btn-primary {
                background-color: #0088cc;
                color: #fff;
                padding: 5px 8px;
                border: 1px solid #0088cc;
                border-radius: 4px;
                cursor: pointer;
                font-size: 15px;
                transition: all .3s ease;
            }

            /* Estilo do Botão Cadastro 24/03/23 */
            .btn-primary:hover {
                background-color: #fff;
                color: #0088cc;
            }

            /* Estilo do Botão Sair 24/03/23 */
            /* Estilo igual ao botão apagar */

            /* Estilo do Botão Sair 24/03/23 */
            /* Estilo igual ao botão apagar */

            /* Estilo do Botão Apagar 24/03/23 */
            .btn-danger {
                background-color: #d2322d;
                color: #fff;
                padding: 5px 8px;
                border: 1px solid #d2322d;
                border-radius: 4px;
                cursor: pointer;
                font-size: 15px;
                transition: all .3s ease;
            }

            /* Estilo do Botão Apagar 24/03/23 */
            .btn-danger:hover {
                background-color: #fff;
                color: #d2322d;
            }

            /* Estilo do Botão Editar 24/03/23 */
            .btn-warning {
                background-color: #ed9c28;
                color: #fff;
                padding: 5px 8px;
                border: 1px solid #ed9c28;
                border-radius: 4px;
                cursor: pointer;
                font-size: 15px;
                transition: all .3s ease;
            }

            /* Estilo do Botão Editar 24/03/23 */
            .btn-warning:hover {
                background-color: #fff;
                color: #ed9c28;
            }

            /* Create three equal columns that floats next to each other */
            .column {
                float: left;
                width: 33.33%;
                padding: 15px;
            }

            /* Clear floats after the columns */
            .row::after {
                content: "";
                display: table;
                clear: both;
            }

            /* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
            @media screen and (max-width:600px) {
                .column {
                    width: 100%;
                }
            }
        </style>
    </head>
    <body>
		<?php
		include_once("conexao2.php");
		session_start();
		if(!empty($_SESSION['id'])){
            // Criando tabela de boas vindas e botões:
            //echo "<br><br><center>";
                echo "<br><br><table width=100%; border=0;  border-collapse: collapse; style=color:white; text-align:left>";
                    echo "<tr style=text-align:left>";
                        echo "<th>Olá ".$_SESSION['nome'].", Bem vindo </th>";
                        echo "<th colspan=2></th>";
                            echo "<tr style=text-align:left>";
                            echo "</tr>";
                            echo "<tr style=text-align:left>";
                            echo "</tr>";
                            echo "<tr style=text-align:left>";
                            echo "<td>" . "<button type='button' class='btn-primary'><a href='cadastro.php'>Cadastro</a></button>";
                            echo "</tr>";
                            echo "<tr style=text-align:left>";
                            echo "<td>" . "<button type='button' class='btn-danger'><a href='sair2.php'>Sair</a></button>";
                            echo "</tr>";
                    echo "</tr>";
                echo "</table>";
            //echo "</center>";
		}else{
			$_SESSION['msg'] = "Área restrita";
			header("Location: login2.php");
		}
			// Criando tabela e cabeçalho de dados:
            echo "<br><br><center>";
            echo "<table width=90%; border=0;  border-collapse: collapse; style=color:white; text-align:left>";
            echo "<tr>";
            echo "<th>Nome</th>";
            echo "<th>Email</th>";
            echo "<th>Usuário</th>";
            echo "<th>senha</th>";    
            echo "<th colspan=2>Opções</th>";
            echo "</tr>";

		$result_usuario = "SELECT * FROM usuarios";
        $resultado_usuario = mysqli_query($conn, $result_usuario) or die("Erro ao retornar dados");

		// Obtendo os dados por meio de um loop while
        while ($row_usuario = mysqli_fetch_array($resultado_usuario)) {
		//$id_insta = $registro['id'];
		$nome = $row_usuario['nome'];
		$email = $row_usuario['email'];
		$usuario = $row_usuario['usuario'];
        $senha = $row_usuario['senha'];

			echo "<tr style=text-align:center>";
			echo "<td>" . $nome . "</td>";
			echo "<td>" . $email . "</td>";
			echo "<td>" . $usuario . "</td>";
            echo "<td>" . $senha . "</td>";
            echo "<td>" ."<button type='button' class='btn-warning'><a href='edit_usuario.php?id=" . $row_usuario['id'] . "'>Editar</a></button>";
            echo "<td>" . "<button type='button' class='btn-danger'><a href='proc_apagar_usuario.php?id=" . $row_usuario['id'] . "'>Apagar</a></button>";
			echo "</tr>";
		}
		echo "</table>";
		echo "</center>";
		mysqli_close($conn);
		?>
	</body>
</html>
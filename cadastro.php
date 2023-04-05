<?php
session_start();
ob_start();
$btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_SANITIZE_STRING);
    if ($btnCadUsuario) {
        include_once 'conexao2.php';
        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        //var_dump($dados);
        $dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);

        $result_usuario = "INSERT INTO usuarios (nome, email, usuario, senha) VALUES (
                        '" . $dados['nome'] . "',
                        '" . $dados['email'] . "',
                        '" . $dados['usuario'] . "',
                        '" . $dados['senha'] . "'
                        )";
        $resultado_usario = mysqli_query($conn, $result_usuario);
        if (mysqli_insert_id($conn)) {
            $_SESSION['msgcad'] = "Usuário cadastrado com sucesso";
            header("Location: administrativo.php");
        } else {
            $_SESSION['msg'] = "Erro ao cadastrar o usuário";
            header("Location: administrativo.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Cadastro</title>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        background-color: black;
        color: white;
    }

    /* Style the header */
    .header {
        background-color: #f1f1f1;
        color: #333;
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
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
		?>
        <div class="header">
            <h2>Cadastro Usuário</h2>
            <p>Cadastro de usuários administrativos.</p>
        </div>
        <div class="topnav">
            <a href="index.html">Home</a>
            <a href='consulta.php'>Voltar</a><br>
        </div>
        <div class="row">
            <div class="column">
                <form method="POST" action="">
                    <label>Nome</label>
                    <input type="text" name="nome" placeholder="Digite o nome e o sobrenome"><br><br>
                    <label>E-mail</label>
                    <input type="text" name="email" placeholder="Digite o seu e-mail"><br><br>
                    <label>Usuário</label>
                    <input type="text" name="usuario" placeholder="Digite o usuário"><br><br>
                    <label>Senha</label>
                    <input type="password" name="senha" placeholder="Digite a senha"><br><br>
                    <input type="submit" name="btnCadUsuario" value="Cadastrar"><br><br>
                </form>
            </div>
        </div>
    <body>
</html>
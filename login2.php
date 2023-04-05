<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>SpotUp</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/ico/icone_databse.ico">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            color: #ffff;
            background-color: #303030;
            font-family: 'Roboto', sans-serif;            
        }

        /* Style the header */
        .header {
            background-color: #141414;
            color: #ffff;
            padding: 20px;
            text-align: center;
            font-family: 'Roboto', sans-serif;
        }

        /* Style the top navigation bar */
        .topnav {
            overflow: hidden;
            background-color: #212121;
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
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        if (isset($_SESSION['msgcad'])) {
            echo $_SESSION['msgcad'];
            unset($_SESSION['msgcad']);
        }
    ?>
    <div class="header">
        <h1>SpotUp</h1>
        <p>Área Administrativa</p>
    </div>
    <div class="topnav">
        <a href="index.html">Home</a>
    </div>
    <div class="row">
        <div class="column">
            <form method="POST" action="valida2.php">
                <label>Usuário</label>
                <input type="text" name="usuario" placeholder="Digite o seu usuário"><br><br>
                <label>Senha</label>
                <input type="password" name="senha" placeholder="Digite a sua senha"><br><br>
                <input type="submit" name="btnLogin" value="Acessar">
            </form>
        </div>
    </div>
    <div class="column">
        <div class="row">
        </div>
    </div>
</body>
</html>
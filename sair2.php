<?php
session_start();
unset($_SESSION['id'], $_SESSION['nome'], $_SESSION['email']);
header("Location: index.html");
$_SESSION['msg'] = "Deslogado com sucesso";
?>
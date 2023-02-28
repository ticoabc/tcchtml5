<?php
session_start();
include_once("conectadmin.php");

$id_insta = filter_input(INPUT_POST, 'id_insta', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$crea = filter_input(INPUT_POST, 'crea', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$genero = filter_input(INPUT_POST, 'genero', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_insta = "UPDATE cad_insta SET nome='$nome', crea='$crea', email='$email', telefone='$telefone', genero='$genero' WHERE id_insta='$id_insta'";
//$result_usuario = "UPDATE admin SET nome='$nome', email='$email', usuario='$usuario', modified=NOW() WHERE id='$id'";
$resultado_insta = mysqli_query($conn, $result_insta);

if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Instalador editado com sucesso</p>";
	header("Location: consulta_insta_2.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Instalador não foi editado com sucesso</p>";
	header("Location: editar.php?id_insta=$id_insta");
}
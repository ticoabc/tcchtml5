<?php
session_start();
include_once("conectadmin.php");
$id_insta = filter_input(INPUT_GET, 'id_insta', FILTER_SANITIZE_NUMBER_INT);
if(!empty($id_insta)){
	$result_usuario = "DELETE FROM cad_insta WHERE id_insta='$id_insta'";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "<p style='color:green;'>Usuário apagado com sucesso</p>";
		header("Location: consulta_insta_2.php");
	}else{
		
		$_SESSION['msg'] = "<p style='color:red;'>Erro o usuário não foi apagado com sucesso</p>";
		header("Location: consulta_insta_2.php");
	}
}else{	
	$_SESSION['msg'] = "<p style='color:red;'>Necessário selecionar um usuário</p>";
	header("Location: consulta_insta_2.php");
}

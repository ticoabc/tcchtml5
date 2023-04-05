<?php
include_once("conexao3.php");

    function retorna($nome, $conn){
        $result_nome = "SELECT * FROM 0_media WHERE nome = '$nome' LIMIT 1";
        $resultado_nome = mysqli_query($conn, $result_nome);
        if ($resultado_nome->num_rows) {
            $row_nome = mysqli_fetch_assoc($resultado_nome);
            $valores['media'] = $row_nome['media'];
        } else {
            $valores['media'] = 'Nome não encontrado';
        }
        return json_encode($valores);
    }

    if (isset($_GET['nome'])) {
        echo retorna($_GET['nome'], $conn);
    }
?>
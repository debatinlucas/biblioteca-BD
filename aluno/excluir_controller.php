<?php
    include('../config.php');

    if (!isset($_GET['id'])) {
        echo "Aluno não encontrado para exclusão";
    } else {
        $id = $_GET['id'];
        $sql = "DELETE FROM aluno WHERE id = $id;";
        if ($mysqli->query($sql) == true) {
            echo "Aluno excluído";
        } else {
            echo "Erro ao excluir o aluno, tente novamente mais tarde.";
        }
        $mysqli->close();
    }
?>
<br/><br/>
<button type="button" onclick="location.href='../index.php'">Voltar</button>

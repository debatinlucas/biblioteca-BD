<?php
    include('../config.php');

    if (!isset($_GET['id'])) {
        echo "Livro não encontrado para exclusão";
    } else {
        $id = $_GET['id'];
        $sql = "DELETE FROM livro WHERE id = $id;";
        if ($mysqli->query($sql) == true) {
            echo "Livro excluído";
        } else {
            echo "Erro ao excluir o livro, tente novamente mais tarde.";
        }
        $mysqli->close();
    }
?>
<br/><br/>
<button type="button" onclick="location.href='../index.php'">Voltar</button>

<?php
    include('../config.php');

    if (!isset($_GET['id'])) {
        echo "Aluno não encontrado para edição";
    } else {
        $id = $_GET['id'];
        if($_POST['nome'] == "") {
            echo "Por favor, informe o nome do livro";
        } else if ($_POST['resumo'] == "") {
            echo "Por favor, informe o resumo do livro";
        } else if ($_POST['estoque_atual'] == "") {
            echo "Por favor, informe o estoque atual do livro";
        } else {
            $nome = $_POST['nome'];
            $resumo = $_POST['resumo'];
            $estoque_atual = $_POST['estoque_atual'];

            $sql = "UPDATE livro SET nome = '$nome', resumo = '$resumo', estoque_atual = $estoque_atual WHERE id = $id;";

            if ($mysqli->query($sql) == true) {
                echo "Livro editado";
            } else {
                echo "Erro ao editar o livro, tente novamente mais tarde.";
            }
            $mysqli->close();
        }
    }
?>
<br/><br/>
<button type="button" onclick="location.href='../index.php'">Voltar</button>

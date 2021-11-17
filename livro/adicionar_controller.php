<?php
    include('../config.php');

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

        $sql = "INSERT INTO livro (nome, resumo, estoque_atual) VALUES ('$nome', '$resumo', $estoque_atual);";

        if ($mysqli->query($sql) == true) {
            echo "Livro adicionado";
        } else {
            echo "Erro ao adicionar o livro, tente novamente mais tarde.";
        }
        $mysqli->close();
    }
?>
<br/><br/>
<button type="button" onclick="location.href='adicionar.php'">Voltar</button>

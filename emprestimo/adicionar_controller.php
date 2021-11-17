<?php
    include('../config.php');

    if($_POST['codigo_aluno'] == "") {
        echo "Por favor, informe o código do aluno";
    } else if ($_POST['codigo_livro'][0] == "") {
        echo "Por favor, informe o código do livro 1";
    } else if ($_POST['codigo_livro'][1] == "") {
        echo "Por favor, informe o código do livro 2";
    } else {
        $codigo_aluno = $_POST['codigo_aluno'];
        $data_retirada = date('Y-m-d H:i:s');
        $data_devolucao = date('Y-m-d H:i:s', strtotime($data_retirada. '+7 day'));

        $codigo_livro_1 = $_POST['codigo_livro'][0];
        $codigo_livro_2 = $_POST['codigo_livro'][1];
        

        $sql = "INSERT INTO emprestimo (id_aluno, data_retirada, data_devolucao) VALUES ($codigo_aluno, '$data_retirada', '$data_devolucao');";

        if ($mysqli->query($sql) == true) {
            $codigo_emprestimo = $mysqli->insert_id;
            $sql = "INSERT INTO livro_emprestimo (id_emprestimo, id_livro) VALUES ($codigo_emprestimo, $codigo_livro_1), ($codigo_emprestimo, $codigo_livro_2);";
            if ($mysqli->query($sql) == true) {
                // Atualiza estoque atual dos livros
                $sql = "UPDATE livro SET estoque_atual = estoque_atual - 1 WHERE id = $codigo_livro_1;";
                $mysqli->query($sql);
                $sql = "UPDATE livro SET estoque_atual = estoque_atual - 1 WHERE id = $codigo_livro_2;";
                $mysqli->query($sql);
                echo "Empréstimo adicionado";
            }
        } else {
            echo "Erro ao adicionar o empréstimo, tente novamente mais tarde.";
        }
        $mysqli->close();
    }
?>
<br/><br/>
<button type="button" onclick="location.href='adicionar.php'">Voltar</button>

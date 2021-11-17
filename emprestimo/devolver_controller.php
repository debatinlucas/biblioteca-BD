<?php
    include('../config.php');

    if (!isset($_GET['id'])) {
        echo "Empréstimo não encontrado para devolução";
    } else {
        $id = $_GET['id'];
        
        // Atualiza estoque atual dos livros
        $sql = "SELECT id_livro FROM livro_emprestimo WHERE id_emprestimo = $id;";
        if ($result = $mysqli->query($sql)) {
            while ($row = $result->fetch_assoc()) {
                $sql = "UPDATE livro SET estoque_atual = estoque_atual + 1 WHERE id = " . $row['id_livro'] . ";";
                $mysqli->query($sql);
            }
        }
        // Exclui dados da tabela filho
        $sql = "DELETE FROM livro_emprestimo WHERE id_emprestimo = $id;";
        if ($mysqli->query($sql) == true) {
            // Exclui dados da tabela pai
            $sql = "DELETE FROM emprestimo WHERE id = $id;";
            if ($mysqli->query($sql) == true) {
                echo "Livros devolvidos";
            }
        } else {
            echo "Erro ao devolver os livros, tente novamente mais tarde.";
        }
        $mysqli->close();
    }
?>
<br/><br/>
<button type="button" onclick="location.href='../index.php'">Voltar</button>

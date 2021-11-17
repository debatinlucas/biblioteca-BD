<!DOCTYPE html>
<?php include('config.php'); ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema de Biblioteca</title>
    </head>
    <body>
        <marquee><h1>Sistema de Biblioteca</h1></marquee>
        <hr/>
        <h2>Gerenciar Alunos</h2>
        <button onclick="location.href='aluno/adicionar.php'">Adiconar</button>
        <br/><br/>
        <table border="1px">
            <tr>
                <th>Nome</th>
                <th>Opções</th>
            </tr>
            <?php
                $sql = "SELECT id, nome FROM aluno ORDER BY nome;";
                if ($result = $mysqli->query($sql)) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['nome'] . "</td>";
                        echo "<td>";
                        echo "<button type=\"button\" onclick=\"location.href='aluno/editar.php?id=" . $row['id'] . "'\">Editar</button>";
                        echo "<button type=\"button\" onclick=\"location.href='aluno/excluir_controller.php?id=" . $row['id'] . "'\">Excluir</button>";
                        echo "</td>";
                        echo "<tr>";
                    }
                }
            ?>
        </table>
        <br/>
        <hr/>
        <h2>Gerenciar Livros</h2>
        <button onclick="location.href='livro/adicionar.php'">Adiconar</button>
        <br/><br/>
        <table border="1px">
            <tr>
                <th>Nome</th>
                <th>Estoque Atual</th>
                <th>Opções</th>
            </tr>
            <?php
                $sql = "SELECT id, nome, estoque_atual FROM livro ORDER BY nome;";
                if ($result = $mysqli->query($sql)) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['nome'] . "</td>";
                        echo "<td>" . $row['estoque_atual'] . "</td>";
                        echo "<td>";
                        echo "<button type=\"button\" onclick=\"location.href='livro/editar.php?id=" . $row['id'] . "'\">Editar</button>";
                        echo "<button type=\"button\" onclick=\"location.href='livro/excluir_controller.php?id=" . $row['id'] . "'\">Excluir</button>";
                        echo "</td>";
                        echo "<tr>";
                    }
                }
            ?>
        </table>
        <br/>
        <hr/>
        <h2>Gerenciar Empréstimos</h2>
        <button onclick="location.href='emprestimo/adicionar.php'">Adiconar</button>
        <br/><br/>
        <table border="1px">
            <tr>
                <th>Aluno</th>
                <th>Data Devolução</th>
                <th>Opções</th>
            </tr>
            <?php
                $sql = "SELECT e.id, a.nome AS aluno, e.data_devolucao FROM emprestimo e INNER JOIN aluno a ON e.id_aluno = a.id ORDER BY aluno;";
                if ($result = $mysqli->query($sql)) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['aluno'] . "</td>";
                        echo "<td>" . date('d/m/Y H:i:s', strtotime($row['data_devolucao'])) . "</td>";
                        echo "<td>";
                        echo "<button type=\"button\" onclick=\"location.href='emprestimo/devolver_controller.php?id=" . $row['id'] . "'\">Devolver</button>";
                        echo "</td>";
                        echo "<tr>";
                    }
                }
            ?>
        </table>
        <br/>
        <hr/>
        <h2>Relatório de Livros Emprestados</h2>
        <table border="1px">
            <tr>
                <th>Livro</th>
                <th>Quantidade</th>
            </tr>
            <?php
                $sql = "SELECT COUNT(le.id_emprestimo) AS quantidade, l.nome AS livro FROM livro_emprestimo le INNER JOIN livro l ON le.id_livro = l.id GROUP BY le.id_livro ORDER BY quantidade DESC, livro;";
                if ($result = $mysqli->query($sql)) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['livro'] . "</td>";
                        echo "<td>" . $row['quantidade'] . "</td>";
                        echo "<tr>";
                    }
                }
            ?>
        </table>
        <br/>
        <hr/>
    </body>
</html>

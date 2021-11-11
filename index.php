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
    </body>
</html>

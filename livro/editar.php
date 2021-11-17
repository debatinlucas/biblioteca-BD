<!DOCTYPE html>
<?php 
    include('../config.php');

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT nome, resumo, estoque_atual FROM livro WHERE id = $id;";
        if ($result = $mysqli->query($sql)) {
            $row = $result->fetch_row();
            $nome = $row[0];
            $resumo = $row[1];
            $estoque_atual = $row[2];
        }
    }

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema de Biblioteca</title>
    </head>
    <body>
        <h2>Editar Livros</h2>
        <small>*campos obrigatórios</small>
        <br/><br/>
        <form action="editar_controller.php?id=<?php echo $id; ?>" method="post">
            <label for="nome">Nome*</label>
            <input type="text" name="nome" id="nome" required="true" value="<?php echo $nome; ?>" maxlength="60"/>
            <br/><br/>
            <label for="resumo">Resumo*</label>
            <textarea name="resumo" id="resumo" rows="3" required="true" maxlength="500"><?php echo $resumo; ?></textarea>
            <br/><br/>
            <label for="estoque_atual">Estoque Atual*</label>
            <input type="number" name="estoque_atual" id="estoque_atual" required="true" value="<?php echo $estoque_atual; ?>" maxlength="3"/>
            <br/><br/>
            <button type="button" onclick="location.href='../index.php'">Voltar</button>
            <button type="submit">Salvar</button>
        </form>
    </body>
</html>

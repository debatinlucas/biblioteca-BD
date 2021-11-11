<!DOCTYPE html>
<?php 
    include('../config.php');

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT nome, email FROM aluno WHERE id = $id;";
        if ($result = $mysqli->query($sql)) {
            $row = $result->fetch_row();
            $nome = $row[0];
            $email = $row[1];
        }
    }

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema de Biblioteca</title>
    </head>
    <body>
        <h2>Editar Alunos</h2>
        <small>*campos obrigatórios</small>
        <br/><br/>
        <form action="editar_controller.php?id=<?php echo $id; ?>" method="post">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" required="true" value="<?php echo $nome; ?>" maxlength="60"/>
            <br/><br/>
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" required="true" value="<?php echo $email; ?>" maxlength="150"/>
            <br/><br/>
            <small>Para editar a senha, preencha o campo abaixo:</small>
            <br/>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" maxlength="12"/>
            <br/><br/>
            <button type="button" onclick="location.href='../index.php'">Voltar</button>
            <button type="submit">Salvar</button>
        </form>
    </body>
</html>

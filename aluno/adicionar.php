<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema de Biblioteca</title>
    </head>
    <body>
        <h2>Adicionar Alunos</h2>
        <small>*campos obrigatórios</small>
        <br/><br/>
        <form action="adicionar_controller.php" method="post">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" required="true" maxlength="60"/>
            <br/><br/>
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" required="true" maxlength="150"/>
            <br/><br/>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" required="true" maxlength="12"/>
            <br/><br/>
            <button type="button" onclick="location.href='../index.php'">Voltar</button>
            <button type="submit">Salvar</button>
        </form>
    </body>
</html>

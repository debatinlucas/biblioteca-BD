<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema de Biblioteca</title>
    </head>
    <body>
        <h2>Adicionar Empréstimo</h2>
        <small>*campos obrigatórios</small>
        <br/><br/>
        <form action="adicionar_controller.php" method="post">
            <label for="codigo_aluno">Código do Aluno*</label>
            <input type="number" name="codigo_aluno" id="codigo_aluno" required="true" maxlength="10"/>
            <br/><br/>
            <label for="codigo_livro">Código do Livro 1*</label>
            <input type="number" name="codigo_livro[]" id="codigo_livro" required="true" maxlength="10"/>
            <br/><br/>
            <label for="codigo_livro">Código do Livro 2*</label>
            <input type="number" name="codigo_livro[]" id="codigo_livro" required="true" maxlength="10"/>
            <br/><br/>
            <button type="button" onclick="location.href='../index.php'">Voltar</button>
            <button type="submit">Salvar</button>
        </form>
    </body>
</html>

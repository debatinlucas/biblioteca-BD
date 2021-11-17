<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema de Biblioteca</title>
    </head>
    <body>
        <h2>Adicionar Livros</h2>
        <small>*campos obrigatórios</small>
        <br/><br/>
        <form action="adicionar_controller.php" method="post">
            <label for="nome">Nome*</label>
            <input type="text" name="nome" id="nome" required="true" maxlength="100"/>
            <br/><br/>
            <label for="resumo">Resumo*</label>
            <textarea name="resumo" id="resumo" rows="3" required="true" maxlength="500"></textarea>
            <br/><br/>
            <label for="estoque_atual">Estoque Atual*</label>
            <input type="number" name="estoque_atual" id="estoque_atual" required="true" maxlength="3"/>
            <br/><br/>
            <button type="button" onclick="location.href='../index.php'">Voltar</button>
            <button type="submit">Salvar</button>
        </form>
    </body>
</html>

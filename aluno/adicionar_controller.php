<?php
    include('../config.php');

    if($_POST['nome'] == "") {
        echo "Por favor, informe o nome do aluno";
    } else if ($_POST['email'] == "") {
        echo "Por favor, informe o e-mail do aluno";
    } else if ($_POST['senha'] == "") {
        echo "Por favor, informe a senha do aluno";
    } else {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = md5($_POST['senha']); // jamais utilizem o md5 para senhas, isso é para fins didáticos

        $sql = "INSERT INTO aluno (nome, email, senha) VALUES ('$nome', '$email', '$senha');";

        if ($mysqli->query($sql) == true) {
            echo "Aluno adicionado";
        } else {
            echo "Erro ao adicionar o aluno, tente novamente mais tarde.";
        }
        $mysqli->close();
    }
?>
<br/><br/>
<button type="button" onclick="location.href='adicionar.php'">Voltar</button>

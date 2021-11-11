<?php
    include('../config.php');

    if (!isset($_GET['id'])) {
        echo "Aluno não encontrado para edição";
    } else {
        $id = $_GET['id'];
        if($_POST['nome'] == "") {
            echo "Por favor, informe o nome do aluno";
        } else if ($_POST['email'] == "") {
            echo "Por favor, informe o e-mail do aluno";
        } else {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            if ($senha !== "") {
                $senha = md5($senha);// jamais utilizem o md5 para senhas, isso é para fins didáticos
                $sql = "UPDATE aluno SET nome = '$nome', email = '$email', senha = '$senha' WHERE id = $id;";
            } else {
                $sql = "UPDATE aluno SET nome = '$nome', email = '$email' WHERE id = $id;";
            }

            if ($mysqli->query($sql) == true) {
                echo "Aluno editado";
            } else {
                echo "Erro ao editar o aluno, tente novamente mais tarde.";
            }
            $mysqli->close();
        }
    }
?>
<br/><br/>
<button type="button" onclick="location.href='editar.php?id=<?php echo $id; ?>'">Voltar</button>

<?php
    // Fazer a conexão com o BD --> ip do servidor, nome do usuário, senha do usuário, nome do BD
    $mysqli = new mysqli('50.116.112.119', 'dlweb958_aulabd', 'UTHs0fKZ3B', 'dlweb958_biblioteca_univali');

    if (mysqli_connect_error()) {
        echo "Erro ao conectar com o BD: " . mysqli_connect_error();
        exit();
    }

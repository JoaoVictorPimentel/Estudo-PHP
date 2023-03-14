<?php
    include 'conexao.php';

    // Salvar dados na tabela
    if (isset($_GET['salvar'])) {

        $data     =  $_GET['data'];
        $nome     =  $_GET['nome'];
        $cnpj     =  $_GET['cnpj'];
        $telefone =  $_GET['telefone'];
        $contato  =  $_GET['contato'];
        $email    =  $_GET['email'];
        $endereco =  $_GET['endereco'];
        $cidade   =  $_GET['cidade'];
        

        mysqli_query($conn, "INSERT INTO cliente (data,nome,cnpj,telefone,contato,email,endereco,cidade) VALUES ('" . $data . "','" . $nome . "','" . $cnpj . "','" . $telefone . "','" . $contato . "','" . $email . "','" . $endereco . "','" . $cidade . "')") or die("Erro ao Tentar Inserir Dados!");

        
    }

?>
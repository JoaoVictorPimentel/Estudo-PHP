<?php
    include 'conexao.php';
    
    // Excluir os dados da tabela
    if (isset($_GET['excluir'])) {

        mysqli_query($conn, "DELETE FROM cliente WHERE id=" . $_GET['excluir']) or die("<div class='alert alert-danger' role='alert'>     Erro ao Tentar Listar Dados!  </div>");

        echo '<div class="alert alert-secondary" role="alert">
                            Excluido com Sucesso!
                    </div>';
    }

    $result = mysqli_query($conn, "SELECT * FROM cliente") or die("Erro ao Tentar Listar Dados!");

    $grid = "";
    while ($dados = mysqli_fetch_assoc($result)) {
        $grid = '<tr>
                            <td>' . $dados['id'] . '</td>
                            <td>' . $dados['data'] . '</td>
                            <td>' . $dados['nome'] . '</td>
                            <td>' . $dados['cnpj'] . '</td>
                            <td>' . $dados['telefone'] . '</td>
                            <td>' . $dados['contato'] . '</td>
                            <td>' . $dados['email'] . '</td>
                            <td>' . $dados['endereco'] . '</td>
                            <td>' . $dados['cidade'] . '</td>
                            <td><a class="btn-excluir" href="?excluir=' . $dados['id'] . '">Excluir</a></td>
                        </tr>' . $grid;
    }
?>
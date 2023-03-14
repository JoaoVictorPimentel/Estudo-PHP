<?php
    session_start();
    $usu_id_session = $_SESSION['usu_id'];
    include_once '../src/Dao/conexao.php';

    $acao = $_POST['acao'];

    if($acao=='enviar'){
        //salvar informações no banco de dados
        $msg = $_POST['mensagem'];          
        $usu_destino = $_POST['usu_destino'];  

        mysqli_query($conn,"INSERT INTO chat (usuario_origem,usuario_destino,mensagem)
                            VALUES ('{$usu_id_session}','{$usu_destino}','{$msg}')") or die("Erro ao Enviar a Mensagem");
      
    }            
    if($acao=='listar'){
        $usu_destino = $_POST['usu_destino'];

        $result = mysqli_query($conn, "SELECT * FROM chat WHERE (usuario_origem='{$usu_id_session}' AND usuario_destino='{$usu_destino}') OR (usuario_origem='{$usu_destino}' AND usuario_destino='{$usu_id_session}')") or die("Error ao Listar!");
         while($lista = mysqli_fetch_assoc($result)){
            if($lista['usuario_origem']==$usu_id_session){
            echo   "<div class='row_msg_left'>
                        <div class='bags_msg_p'>
                            <p>{$lista['mensagem']}</p>
                        </div>
                    </div>";
            }else{
                echo   "<div class='row_msg_rigth'>
                        <div class='bags_msg_r'>
                            <p>{$lista['mensagem']}</p>
                        </div>
                    </div>";
            }
           
        }
    }             
    if($acao=='listar_usuarios'){
        $result = mysqli_query($conn, "SELECT * FROM usuario WHERE usu_id<>'{$usu_id_session}'") or die("Error ao Listar!");
         while($lista = mysqli_fetch_assoc($result)){
           
            echo   "<div class='user-chat' id='{$lista['usu_id']}' nome='{$lista['usu_nome']}'>
                        <img src='src/img/avatar2.jpg' alt=''>
                        <span class='usuario'>
                            <p class='nome'>{$lista['usu_nome']}</p>
                            <p class='detalhe'>Última Visualização 08:45h</p>
                        </span>
                        <span class='status'></span>
                    </div>";
            
         }
                    

    }

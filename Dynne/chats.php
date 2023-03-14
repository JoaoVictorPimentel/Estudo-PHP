<?php
include_once 'header.php';
include_once 'src/Dao/conexao.php';
?>

    <div class="content">
        <div class="view">
            <div class="center">
                <div class="box-user">
                    
                </div>

                <div class="box-chat">
                    <div class="topo-chat">
                        <img src="src/img/avatar2.jpg" alt="">
                        <span class="usuario">
                            <p class="nome nome_usu_conversa"></p>
                            <p class="detalhe">Última Visualização 08:45h</p>
                        </span>
                        <span class="status"></span>
                    </div>
                    
                    <div class="mensagens-chat">

                    </div>

                    <div class="controle-chat">
                        <form action="">
                            <input type="text" id="msg" name="msg" required>
                            <input type="hidden" name="id_usu_destino" id="id_usu_destino">
                            <button id="btn_enviar"><i class="uil uil-message"></i></button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $(".box-chat").hide();

            $('body').on('click', '.user-chat', function(){
                $("#id_usu_destino").val($(this).attr("id"));            
                $(".nome_usu_conversa").html($(this).attr("nome")); 
                //char listagem passado o usuario
                listar($("#id_usu_destino").val());        
                $(".box-chat").show();
                
            });
            

            $("#btn_enviar").click(function() {
                var msg     = $("#msg").val();
                var id_usu  = $("#id_usu_destino").val();
                if (msg !== "") {
                    $.ajax({
                        type: "POST",
                        url: "controller/chat_controller.php",
                        data: {
                            acao: 'enviar',
                            mensagem: msg,
                            usu_destino: id_usu
                        },
                        dataType: "html",
                        success: function(response) {
                            listar(id_usu);
                            $("#msg").val("");
                        }
                    });
                } else {
                    alert("Escreva Algo");
                }
                return false;
            });

            function listar_usuarios() {
                $.ajax({
                    type: "POST",
                    url: "controller/chat_controller.php",
                    data: {
                        acao: 'listar_usuarios'
                    },
                    dataType: "html",
                    success: function(response) {
                        $(".box-user").html(response);
                    }
                });
                $('.mensagens-chat').animate({
                    scrollTop: $(this).height()
                }, 100);
            }

            function listar(id_usu) {
                $.ajax({
                    type: "POST",
                    url: "controller/chat_controller.php",
                    data: {
                        acao: 'listar', usu_destino: id_usu
                    },
                    dataType: "html",
                    success: function(response) {
                        $(".mensagens-chat").html(response);
                    }
                });
                $('.mensagens-chat').animate({
                    scrollTop: $(this).height()
                }, 100);
            }
            listar_usuarios();
            setInterval(function() {
                listar($("#id_usu_destino").val());
                
            }, 3000);

        });
    </script>

<?php
include_once 'footer.php';
?>
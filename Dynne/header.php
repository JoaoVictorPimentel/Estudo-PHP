<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- STYLE -->
    <link rel="stylesheet" type="text/css" href="src/css/style.css">
    <link rel="stylesheet" type="text/css" href="src/css/chat.css">
    <link rel="stylesheet" type="text/css" href="src/css/boot.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="src/js/jquery-3.6.0.min.js"></script>

    <title>CRM - Dynne Sistemas Inteligentes</title>

    <script>
        $(document).ready(function () { 
            $("#btn-alternar").click(function(){
                $("#bola").toggleClass("ativo");
                $("body").toggleClass("dark");
            });

            $(".hamburguer").click(function(){
                $("nav").toggleClass("close");
            });
        });
    </script>

</head>
<body>

    <nav>
        <!-- LOGO -->
        <div class="logo-name">
            <div class="logo-image">
                <img src="src/img/logo2.png" alt="Dynne Tecnologia" height="40px">
            </div>
        </div>
        <!-- FIM LOGO -->

        <!-- ITENS DO MENU -->
        <div class="menu-itens">
            <ul class="nav-itens">                
                <li>
                    <a href="?pg=conteudo">
                        <i class="uil uil-estate"></i>
                        <span class="item-name">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="?pg=clientes">
                        <i class="uil uil-user-plus"></i>
                        <span class="item-name">Clientes</span>
                    </a>
                </li>
                <li>
                    <a href="?pg=contratos">
                        <i class="uil uil-invoice"></i>
                        <span class="item-name">Contratos</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="uil uil-transaction"></i>
                        <span class="item-name">Financeiro</span>
                    </a>
                </li>
                <li>
                    <a href="?pg=chats">
                        <i class="uil uil-comments-alt"></i>
                        <span class="item-name">Chat</span>
                    </a>
                </li>        
            </ul>
            
            <ul class="menu-logout">                
                <li>
                    <a href="index.php">
                        <i class="uil uil-signout"></i>
                        <span class="item-name">Logout</span>
                    </a>
                </li>
                <li class="modo">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                        <span class="item-name">DarkMode</span>
                        <div class="alternar" id="btn-alternar">
                            <span class="bola" id="bola">&nbsp;&nbsp;&nbsp;&nbsp;</span> 
                        </div>
                    </a>
                </li>                      
            </ul>
        </div>
        <!-- FIM ITENS DO MENU -->
    </nav>

    <div class="dashboard">
        <div class="topo">
            <div class="hamburguer">
                <i class="uil uil-align-justify"></i>
            </div>
            <div class="pesquisa">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Digite sua pesquisa...">
            </div>

            <div class="conta-avatar">
                <span><?php echo $_SESSION['usu_nome'];?></span>
                <i class="uil uil-setting"></i>
            </div>
        </div>
    
<?php 
    include_once 'header.php';
    include_once 'footer.php';
    include_once 'src/Dao/conexao.php';

    if(isset($_GET['pg'])){
        include_once $_GET['pg'].".php";
    } else {
        include_once 'conteudo.php';
    }
?>
<?php 
    session_start();
    include_once 'src/Dao/conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- STYLE -->
    <link rel="stylesheet" type="text/css" href="src/css/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="src/js/jquery-3.6.0.min.js"></script>

    <title>CRM - Dynne Sistemas Inteligentes</title>

    <style>
        body {
            height: 100vh;
            width: 100vw;
        }

        .content-login {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .content-login form {
            max-width: 500px;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            padding: 20px;
            border-radius: 10px;
            flex-direction: column;
            text-align: center;
            justify-content: center;
        }

        .content-login form .form-control input {
            border: 1px solid var(--cor-borda);
            background-color: var(--cor-painel);
            border-radius: 5px;
            width: 100%;
            height: 45px;
            color: var(--cor-texto);
            outline: none;
            padding: 0 10px;
            font-size: 18px;
            font-weight: 400;
        }

        .content-login form .form-control label {
            width: 100%;
            height: 50px;
            color: var(--cor-texto);
            padding: 0 10px;
            font-size: 18px;
            display: block;
        }

        .content-login form img {
            width: 100%;
            margin-bottom: 20px;
        }
        
        .btn {
            width: 100%;
            height: 45px;
            margin-top: 15px;
            background: linear-gradient(
                        243deg,
                        rgba(59, 214, 150, 1) 0%,
                        rgba(80, 177, 228, 1) 100%);
            border: 1px solid #5cb3ab;
            font-size: 16px;
            color: white;
            cursor: pointer;
        }
        
        .btn:hover {
            width: 100%;
            height: 45px;
            margin-top: 15px;
            background: linear-gradient(
                        243deg,
                        rgba(59, 214, 150, 1) 50%,
                        rgba(80, 177, 228, 1) 100%);
            border: 1px solid #5cb3ab;
            font-size: 16px;
            color: white;
            border-radius: 5px;
        }

        .msg_error {
            width: 100%;
            padding: 10px;
            background-color: red;
            border-radius: 5px;
            color: white;
        }

    </style>

</head>
<body>
    <div class="content-login">
        <form action="index.php" method="POST">
            <img src="src/img/logo2.png" alt="">

            <?php 
                            
                if (isset($_POST['enviar'])) {
                    $result = mysqli_query($conn, "SELECT * FROM usuario WHERE usu_nome='{$_POST['txt_login']}' AND usu_senha='{$_POST['txt_senha']}'") or die("Error ao Listar!");
                        if (mysqli_num_rows($result) == 1) {
                            while($lista = mysqli_fetch_assoc($result)){ 
                             $_SESSION["usu_nome"] = $lista['usu_nome'];
                             $_SESSION["usu_id"] =  $lista['usu_id'];                             
                            }
                    
                            header("Location:principal.php");
                        } else {
                            echo "<div class='msg_error'>
                                  Usuario ou Senha Inválidos!
                                  </div>";
                        }
                }
                
            ?>
            
            <div class="form-control">
                <label for="txt_login">Login</label>
                <input type="text" id="txt_login" name="txt_login" placeholder="login" required>
            </div>
            <div class="form-control">
                <label for="txt_senha">Senha</label>
                <input type="password" id="txt_senha" name="txt_senha" placeholder="senha" requiered>
            </div>
            <input type="submit" class="btn" name="enviar" value="Entrar">
        </form>
    </div>

</body>
</html>
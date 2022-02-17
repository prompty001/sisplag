<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imgs/sisplag_fundo.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="css/styleHome.css">
    <title>CME - Conselho Municipal de Educaçã<object data="" type=""></object></title>

    <style>

        @-webkit-keyframes animatezoom {
          from {-webkit-transform: scale(0)} 
          to {-webkit-transform: scale(1)}
        }
          
        @keyframes animatezoom {
          from {transform: scale(0)} 
          to {transform: scale(1)}
        }
        
        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
          span.psw {
             display: block;
             float: none;
          }
          .cancelbtn {
             width: 100%;
          }
        }
    </style>
</head>
<body>

<?php

    session_start();
    

    if (isset($_POST['enviar'])) {
        $login_usuario = $_POST['login_usuario'];
        $senha_usuario = $_POST['senha_usuario'];

        $sql = Conexao::conectar()->prepare("SELECT * FROM usuario WHERE login_usuario = ? AND senha_usuario = ?");
        $sql->execute(array($login_usuario,$senha_usuario));
        if($sql->rowCount() == 1){
            //Logado com Sucesso;
            $_SESSION['login'] = true;
            $_SESSION['login_usuario'] = $login_usuario;
            $_SESSION['senha_usuario'] = $senha_usuario;
            
        
            header('Location: pages/main.php');
            die();
    }else{
        echo "<div class='alert alert-danger'> Usuário ou Senha Incorretos!</div>";
        //header("Location: index.php");
        }
    }
    ?>


    <nav>
        <ul class="menu">
            <li>
                <!-- <a href="">Cadastro de Escolas</a> -->
                <button style="width:auto;">Cadastro de Escola</button>
            </li>
            <li>
                <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
                <!---- <a href="">Login</a> -->
            </li>
        </ul>
    </nav>

    <div class="areaLogo-content">
        <div class="cmeLogo">
            <img src="imgs/sisplag.png">
        </div>

        <div class="catchphrase-content">
            <p>Seja bem vindo(a) ao Sistema de Planejamento e Gestão (Sisplag) do Conselho Municipal de 
                Educação (CME) de Belém. Para realizar o cadastro de sua escola, clique <a href="">aqui</a>.
            </p>
        </div>
    </div>

    <div id="id01" class="modal">
  
        <form class="modal-content animate" method="post">
          <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="imgs/sisplag.png" alt="Avatar" class="avatar">
          </div>
      
          <div class="container">
            <label for="uname"><b>Usuario</b></label>
            <input type="text" placeholder="Enter Username" name="login_usuario" required>
      
            <label for="psw"><b>Senha</b></label>
            <input type="password" placeholder="Enter Password" name="senha_usuario" required>
              
            <button name="enviar" type="submit">Autenticar</button>
            <label>
              <input type="checkbox" checked="checked" name="remember"> Lembrar usuário
            </label>
          </div>
      
          <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancelar</button>
            <span class="psw">Esqueci <a href="#">senha?</a></span>
          </div>
        </form>
      </div>

    <footer class="shell-footer">

        <div class=footer-logoPrefeitura>
            <img src="imgs/logoPrefeit.png">
        </div>

        <div class="footer-logoUFPA">
            <img src="imgs/logoUFPA.png">
        </div>

        <div class="footer-contact">
            <p>Contato: <br>pcascaes@ufpa.br</p>
        </div>

    </footer>
    <script src="./js/scriptHome.js">

    </script>
</body>
</html><?php ob_end_flush(); ?>
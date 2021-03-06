<?php 
session_start();
require ('cabecalho.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Login techON</title>
</head>
<body>
    <main id="main-login">
        <container class="container-login">  
            <img class = "img-central" src="../imagens/img-inicio.png" alt=""> 
            <form class = "form-central" action="../dados/validacaoLogin.php" method="get">	
                <h5>Insira seu e-mail e senha para entrar.</h5>
                <input type="text" name="email" placeholder="E-mail" id="email" class="caixa" autofocus/> <br/>
                <input type="password" name="senha" placeholder="Senha" id="senha" class="caixa"/> <br/>  
                <?php
                if(isset($_SESSION['idError'])){
                    if($_SESSION['idError']==1){?>
                        <p class="erro">Usuário ou senha inválida.</p><?php
                        }		
                    }
                unset($_SESSION['idError']);
                ?>     
                <input class = "botaoEntrar" type="submit" value="Entrar" />
                <p class="cadastro">Não possui conta?<a href="cadastro.php"> Cadastre-se aqui</a></p>                      
            </form>
        </container>
    </main>
    
</body>
</html>
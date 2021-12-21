<?php require ('cabecalho.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cadastro.css">
    <title>Document</title>
</head>
<body>
    <main id= "main-cadastro">
        <container class="cadastro-central">
            <form class = "form-cadastro" action="../recebeUsuario.php" method="get">
                <h4>Inscreva-se.</h4>
                <p>Para ter acesso ao nosso conteúdo e conhecer as nossas trilhas cadastre-se na nossa plataforma.<p>
                <input minlength="3"class = "caixa" type="text" name="nomeUsuario" id="nomeUsuario" required name = nome placeholder="Nome completo" autofocus /><br/>
                <label>Data de Nascimento:</label>
                <input class = "caixa" type="date" name="dtNascimento" id="dtNascimento" required name = data /><br/>
                <input class = "caixa" type="email" id ="emailUsuario" name="emailUsuario" required name = email placeholder="E-mail" /><br/>
                <input minlength="8" class = "caixa" type="password" name="senhaUsuario" id="senhaUsuario" required name = senha placeholder="Senha"/><br/>    
               
                <div class="conj-btn">
                		<input type="submit" name="enviar" value="Cadastrar" class="btnCadastrar"/>
                </div>
            </form>
            <img class="img-central" src="../imagens/img-inicio.png" alt="">
        </container>
    </main>
    
</body>
</html>
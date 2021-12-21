<?php require ('cabecalho.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/index.css">
    <title>Contato</title>
</head>
<body>
    <main id="main-contato">            
        <container class= "itens-contato"> 
            <div class="info-contato">
                <div class= "sub-contato"><i class="fa fa-envelope"></i><p>suportetecnico@techon.br</p></div>
                <div class= "sub-contato"><i class="fa fa-phone"></i><p>+55(98)12345-6789</p></div>
                <div class= "sub-contato"><i class="fa fa-location-arrow"></i><p>Av. São Pantaleão, 128</p></div>
            </div>
            <fieldset class="container-contato"><br>
                <h1 class="contato">Formulário de Contato</h1>
                <input class="form-contato" type="text" name="nome"  placeholder="Nome" autofocus=""><br/><br/>
                <input class="form-contato" type="text" name="email" placeholder="E-mail"><br/><br/>
                <textarea class="mensagem_form" name="mensagem" placeholder="Escreva sua mensagem" ></textarea><br/>
                <input  class="btn-inicio" type="submit" name="enviar" value="Enviar">
             </fieldset>            
        </container>
    </main>
    
</body>
</html>
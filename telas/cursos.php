<?php require ('cabecalho.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/trilhas.css">

    <title>Trilhas</title>
</head>

<body>    
    <main id="main-trilhas">
        <div class="container">
            <div class="button" onclick="shiftRight()"><img src="https://image.ibb.co/mRsEb7/left_arrow.png" alt=""></div>
                <div class="cards-wrapper">
                    <ul class="cards__container">
                        <li style="text-align:center; font-weight: 600;" class="box"><img style="width:10vw; margin: 0 auto; "src="../imagens/img-bd.png" alt="">
                        <br>Banco de Dados</li>
                        <li style="text-align:center; font-weight: 600;" class="box"><img style="width:10vw; margin: 0 auto; "src="../imagens/img-python.png" alt="">
                        <br>Linguagem Python</li>
                        <li style="text-align:center; font-weight: 600;" class="box"><img style="width:10vw; margin: 0 auto; "src="../imagens/img-php.png" alt="">
                        <br>Linguagem PHP</li>
                        <li style="text-align:center; font-weight: 600;" class="box"><img style="width:10vw; margin: 0 auto; "src="../imagens/img-logic.png" alt="">
                        <br>Lógica de Programação</li>
                        <li style="text-align:center; font-weight: 600;" class="box"><img style="width:10vw; margin: 0 auto; "src="../imagens/img-csharp.png" alt="">
                        <br>Linguagem C#</li>
                        <li style="text-align:center; font-weight: 600;" class="box box--hide"><img style="width:10vw; margin: 0 auto; "src="../imagens/img-git.png" alt="">
                        <br>GitHub</li>
                        <li style="text-align:center; font-weight: 600;" class="box box--hide"><img style="width:10vw; margin: 0 auto; "src="../imagens/img-java.png" alt="">
                        <br>Linguagem Java</li>
                    </ul>        
                </div>   
            <div class="button" onclick="shiftLeft()"><img src="https://image.ibb.co/dfPSw7/right_arrow.png" alt=""></div>
        </div>
    </main>
    <script src="trilhas.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="pt">
<head>
    <?php 
    include ("../../dados/conexao.php"); 
    require ('home.php');
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../aluno/aluno.css">

    <title>Aluno techON</title>
</head>
<body>   
        <main>
        <div class="info-pag" style="font-family: 'Blinker', sans-serif;">
            <h6 style="color:#1f5ebb">Aluno</h6>    
            <h2 class="titulo-pag" >SEUS CURSOS CONCLUÍDOS</h2>
            <hr>
        </div>
        <container class="container-trilha">            
            <?php
            $email_logado = $_SESSION['email'];
            $comando = "select * from aluno_curso where email_aluno='{$email_logado}' and status_curso = 'aprovado'";
            $preparacao = Conexao::getConexao()->prepare($comando);
            $preparacao->execute();   
            
            while($lista = $preparacao ->fetch(PDO::FETCH_ASSOC)):          
                $comando3 = "select nivel_curso, link_img from curso where id_curso='{$lista["id_curso"]}'"; 
                $preparacao2 = Conexao::getConexao()->prepare($comando3);
                $preparacao2->execute();    
                while($lista2 = $preparacao2 ->fetch(PDO::FETCH_ASSOC)):
                
                ?>         
            
            <div style = "border:solid #88888850 3px;" class="box-trilha">          
                        <img class="img-cursos" src="../../imagens/<?php echo $lista2['link_img']?>" alt="">
                        <h5><?php echo $lista['nome_curso']?></h5>
                        <div class="subtitulo-curso">
                            <p style="color: grey; font-size: 12px;">Nível <?php echo $lista2['nivel_curso']?></p>
                            <p class="concluido"> CONCLUÍDO </p>
                        </div>
                    </div>         <?php endwhile; ?>            
            <?php
            endwhile; 
            ?>                     
    </container>   
        </main>
</body>

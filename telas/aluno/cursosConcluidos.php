<!DOCTYPE html>
<html lang="pt">
<head>
    <?php 
    include ("../../dados/conexao.php"); 
    include('../../dados/sessao.php');
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/cabecalho2.css">
    <link rel="stylesheet" href="../aluno/aluno.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Blinker&display=swap" rel="stylesheet">
    <title>Aluno techON</title>
</head>
<body>
    
    <header>
        <nav class="navbar sticky-top navbar-expand-lg">
            <a href="verCursos.php" class="logo-cabecalho">techON</a>
                    <ul class="navbar-nav">
                        
                        <li class="nav-item">
                            <a href="verCursos.php" class="nav-link">Ver Cursos</a>
                        </li>

                        <li class="nav-item">
                        <a href="meusCursos.php" class="nav-link">Meus Cursos</a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="perfil.php" class="nav-link">Meu Perfil</a>
                        </li>

                        <li class="nav-item">
                            <a href="../logout.php" class="nav-link">Sair</a>
                        </li>                           
                    </ul>
        </nav>   
    </header>
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

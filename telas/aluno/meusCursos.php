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
    <link rel="stylesheet" href="../../css/cabecalho.css">
    <link rel="stylesheet" href="../aluno/aluno.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Blinker&display=swap" rel="stylesheet">
    <title>Aluno techON</title>
</head>
<body>
    
    <header>
        <nav class="navbar sticky-top navbar-expand-lg">
            <a href="home.php" class="logo-cabecalho">techON</a>
                    <ul class="navbar-nav">
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
            <h2 class="titulo-pag" >CURSOS CADASTRADOS</h2>
            <hr>
        </div>
        <container class="list-cursos" style="display:flex; flex: flex-wrap;">            
            <?php
            $email_logado = $_SESSION['email'];
            $comando = "select * from aluno_curso where email_aluno='{$email_logado}'";
            $preparacao = Conexao::getConexao()->prepare($comando);
            $preparacao->execute();
           
            
            while($lista = $preparacao ->fetch(PDO::FETCH_ASSOC)):               
                ?>           
            <div class = "box-aluno">   
                        <div class="title-curso">
                            <h6 style="color:white;">Curso de</h6>         
                            <h4 style="color:white;"><?php echo $lista["nome_curso"]?></h4><br>                            
                        </div> 
                        <a class="btn-inscrever" href="selectCurso.php?id_curso=<?php echo $lista["id_curso"];?>">Continuar</a>
            </div>
          
            
            <?php
            endwhile; 
            ?>         

    </container>   

        </main>

</body>

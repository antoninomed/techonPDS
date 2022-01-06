<?php 
include ("../../dados/conexao.php");
include('../../dados/sessao.php');
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/cabecalho.css">
    <link rel="stylesheet" href="aluno.css">
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
    <div class="info-pag" style="font-family: 'Blinker', sans-serif;">
            <h6 style="color:#1f5ebb">Aluno</h6><br>
            <a href="#" class="btn-meuperfil" ><i class="fa fa-user"></i> MEUS DADOS</a>
            <a href ="#" class="btn-meuperfil" ><i class="fa fa-graduation-cap"></i> CURSOS CONCLUÍDOS</a>
            <hr>    
    </div>    
    <main>
    <?php
    $email_logado = $_SESSION['email'];
    $comando = "select *from aluno where email_aluno='{$email_logado}'";
    $preparacao = Conexao::getConexao()->prepare($comando);
    $preparacao->execute();

    while($lista = $preparacao ->fetch(PDO::FETCH_ASSOC)):
        ?>
    <container class="cont-aluno">
    <div class = "box-dados">
        <div class="itens-aluno">
            <strong style="font-size:32px;"><?php echo $lista["nome_aluno"]?></strong><br>
            <b>Data de Nascimento:</b> <?php echo $lista["dtnascimento_aluno"]; ?><br>   
            <b>E-mail:</b> <?php echo $lista["email_aluno"]; ?><br> 
                <?php endwhile; ?>          
        </div>     
    </div>
  
    </container>

     </main>   

</body>
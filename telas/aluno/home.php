<!DOCTYPE html>
<html lang="pt">
<head>
    <?php include('../../dados/sessao.php'); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/cabecalho.css">
    <link rel="stylesheet" href="../aluno/aluno.css">
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
    <main id="main-aluno">

    
        <hr>
        <h4 style="margin-left: 5vw;">CONHEÇA AS NOSSAS TRILHAS</h4>
        <container class="container-trilha">
            <a href="#"><div class="box-trilha">          
                <img class="img01-trilha" src="../../imagens/img-logic.png" alt="">
                <h5>Trilha Lógica de Programação</h5>
                <p class="desc-trilha">Trilha básica voltada a Lógica de Programação para pessoas com pouco contato 
                    com linguagens de programação e/ou lógica.</p>
                <p class="inscrever-se"> INSCREVER-SE </p>
            </div></a> 
            
            <a href="#"><div class="box-trilha">               
                <img class="img02-trilha" src="../../imagens/img-python.png" alt="">
                <h5>Trilha Python Básico</h5>
                <p class="desc-trilha">Trilha voltada a Python básico,para pessoas com experiência inicial em linguagens de programação
                    e que já possuem noção de lógica de programação.</p>
                <p class="inscrever-se"> INSCREVER-SE </p>
            </div></a>

            <a href="#"><div class="box-trilha">               
                <img class="img03-trilha" src="../../imagens/img-bd.png" alt="">
                <h5>Trilha Banco de Dados</h5>
                <p class="desc-trilha">Trilha intermédiaria voltada a Banco de Dados. É preferível que tenha feito a Trilha Banco de Dados básica 
                ou que possua algum conhecimento prévio sobre a trilha.</p>
                <p class="inscrever-se"> INSCREVER-SE </p>
            </div></a>

            <a href="#"><div class="box-trilha">               
                <img class="img04-trilha" src="../../imagens/img-php.png" alt="">
                <h5>Trilha PHP</h5>
                <p class="desc-trilha">Trilha avançada voltada a Linguagem PHP. É importante que você já domine lógicas de programação e já tenha conhecimento da linguagem
                    ou já tenha feito a trilha de PHP intermédiario.</p>
                <p class="inscrever-se"> INSCREVER-SE </p>
            </div></a>            
        </container>
        <a class = "btn-inscrever" style="background-color:#1f5ebb; margin-left: 90vw; margin-top: 5vh;" href="verCursos.php">Ver todos</a>
    </main>
    
</body>
</html>
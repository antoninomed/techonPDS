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
    <link rel="stylesheet" href="aluno.css">
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
        <hr>
        <h2>NOSSOS CURSOS</h2>

        <container class="list-dados">
        <ul>
            <?php
            if (isset($_GET["id_Curso"])){
                $idCurso = addslashes ($_GET["id_Curso"]);
                $_SESSION['cursoSelect'] = $idCurso;
            }
            $comando = "select *from curso";
            $preparacao = Conexao::getConexao()->prepare($comando);
            $preparacao->execute();
            
            while($lista = $preparacao ->fetch(PDO::FETCH_ASSOC)):
                ?>

            <div class = "box-geral">   
                        <div class="titulo-curso">         
                            <h4 style="color:#1f5ebb;"><?php echo $lista["titulo_curso"]?></h4><br>
                        </div>
                        
                        <div class="itens-prof">
                            <div style="text-align:center;">
                                <h6 style="color: white;"> <?php echo "Nível ",$lista["nivel_curso"]; ?></h6><br>
                                <a class="btn-inscrever" href="inscricaoRecebe.php?id_Curso=<?php  echo $lista["id_curso"];?>">Inscrever-se</a>
                            </div>

                            <div class="lineVertical"> </div>                        
                                <ul>                    
                                <?php echo $lista["descricao_curso"];?><br>                        
                                </ul>                            
                        </div>
            </div>

            <?php
            endwhile; 
            ?>         

        </ul>
    </container>   
    </main>
</body>
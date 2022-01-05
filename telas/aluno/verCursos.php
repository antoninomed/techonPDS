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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Blinker&display=swap" rel="stylesheet">
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
        <div class="info-pag">
        <h6 style="color:#1f5ebb; font-size:16px;">Cursos</h6>    
        <h2 class="titulo-pag" >INSCREVA-SE EM CURSOS DA NOSSA PLATAFORMA</h2>
        <hr>
        </div>     

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
                                <a data-toggle="modal" data-target="#confirm" class="btn-inscrever" data-href="inscricaoRecebe.php?id_Curso=<?php  echo $lista["id_curso"];?>">Inscrever-se</a>
                            </div>

                            <div class="lineVertical"> </div>                        
                                <ul>                    
                                <?php echo $lista["descricao_curso"];?><br>                        
                                </ul>                            
                        </div>

                        <div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div style="color: black" class="modal-header">
                                    Inscrição
                    </div>
                    <div style="color: black"class="modal-body">
                        Deseja confirmar sua inscrição no curso?
                    </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <a class="btn btn-default btn-ok">Confirmar</a>

                                </div>
                        </div>
                        </div>
                    </div>
            </div>

            <?php
            endwhile; 
            ?>         

        </ul>
    </container>       
    </main>
    <script data-require="jquery@*" data-semver="2.0.3" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <script data-require="bootstrap@*" data-semver="3.1.1" src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link data-require="bootstrap-css@3.1.1" data-semver="3.1.1" rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
    <script src="confirm.js"></script>   
</body>
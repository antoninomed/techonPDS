<!DOCTYPE html>
<html lang="pt">
<head>
    <?php include('../../dados/sessao.php');
    require ('home.php')?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="professor.css">
    
    <title>Professor techON</title>
</head>
<body>    
    <main>
        <div class="info-pag" style="font-family: 'Blinker', sans-serif;">
            <h6 style="color:#1f5ebb">Cursos Cadastrados</h6>    
            <h2 class="titulo-pag" >EDITE E ORGANIZE SEUS CURSOS</h2>
            <hr>
        </div>
        <container class="list-dados" style="display:flex; margin-left: 4vw; flex-wrap:wrap;">
            <?php
            include('cursoDAO.php');

            $comando = "select *from curso where professor_curso='{$_SESSION['email']}'";
            $preparacao = Conexao::getConexao()->prepare($comando);
            $preparacao->execute();

            while($lista = $preparacao ->fetch(PDO::FETCH_ASSOC)):
                ?>

                <div class = "box-geral">
                <i class="fa fa-clipboard" aria-hidden="true"></i>     
                        <div class="nome-curso">                                
                            <h5 style="color:black; font-size:20px;">Curso <?php echo $lista["titulo_curso"]?></h5>
                            <h6 style="color:grey;font-size:14px;"> <?php echo "Nível ",$lista["nivel_curso"]; ?></h6>
                        </div>
                        
                        <div class="btn-cursos">  
                            <a class="btn-edit" href="verTestes.php?id_curso=<?php echo $lista["id_curso"]?>"><i class="fa fa-file-text" aria-hidden="true"></i> Ver Testes</a>          
                            <a class="btn-edit" href="cursoTelaAtt.php?id_update=<?php echo $lista["id_curso"];?>"><i class="fa fa-info" aria-hidden="true"></i> Editar Informações</a>
                        </div> 
                </div>
                <?php endwhile; ?>
                
    </container>
    <img class="img-secundaria" src="../../imagens/img-professor.png" alt="">

    <script data-require="jquery@*" data-semver="2.0.3" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <script data-require="bootstrap@*" data-semver="3.1.1" src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="exclusao.js"></script>  
    
    </main>






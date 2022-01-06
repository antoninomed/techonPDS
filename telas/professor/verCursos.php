<!DOCTYPE html>
<html lang="pt">
<head>
    <?php include('../../dados/sessao.php');
    require ('home.php')?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="professor.css">
    
    <title>Administrador techON</title>
</head>
<body>    
    <main>
        <div class="info-pag" style="font-family: 'Blinker', sans-serif;">
            <h6 style="color:#1f5ebb">Cursos Cadastrados</h6>    
            <h2 class="titulo-pag" >EDITAR E ORGANIZAR SEUS CURSOS</h2>
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

                <div class = "box-cursos">   
                        <div class="titulo-curso">         
                            <h5 style="color:black; text-align:center; font-size:18px;">Curso <?php echo $lista["titulo_curso"]?></h5>
                        </div>
                        <div class="nivel-curso">
                            <h6 style="color:grey;text-align:center;font-size:14px;"> <?php echo "Nível ",$lista["nivel_curso"]; ?></h6>
                        </div>
                        <div class="professor-curso">
                            <h6 style="text-align:center;"> <?php echo $lista["descricao_curso"];?><br> </h6>                            
                        </div>

                        <div class="btn-cursos">            
                            <a class="btn-edit" href="cursoTelaAtt.php?id_update=<?php echo $lista["id_curso"];?>">Editar</a>
                        </div> 
                </div>
                <?php endwhile; ?>
    </container>
    <script data-require="jquery@*" data-semver="2.0.3" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <script data-require="bootstrap@*" data-semver="3.1.1" src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="exclusao.js"></script>  
    
    </main>






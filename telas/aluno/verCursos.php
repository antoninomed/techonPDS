<?php 
require ('home.php');
include ('../../dados/conexao.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="aluno.css">
</head>
<body>

<main>
        <div class="info-pag">
        <h6 style="color:#1f5ebb; font-size:16px;">Cursos</h6>    
        <h2 class="titulo-pag" >INSCREVA-SE EM CURSOS DA NOSSA PLATAFORMA</h2>
        <hr>
        </div>   
        <!-- <div class="opcoes-nivel">
            <a href="#">Básico</a>
            <a href="#">Intermediário</a>
            <a href="#">Avançado</a>
        </div>
        -->
        <container class="container-trilha">
            <?php
            if (isset($_GET["id_Curso"])){
                $idCurso = addslashes ($_GET["id_Curso"]);
                $_SESSION['cursoSelect'] = $idCurso;
            }
            $comando = "select *from curso order by titulo_curso ASC";
            $preparacao = Conexao::getConexao()->prepare($comando);
            $preparacao->execute();
            
            while($lista = $preparacao ->fetch(PDO::FETCH_ASSOC)):
                ?>                 
                <a data-toggle="modal" data-target="#confirm" data-href="inscricaoRecebe.php?id_Curso=<?php  echo $lista["id_curso"];?>">
                    <div class="box-trilha">          
                        <img class="img-cursos" src="../../imagens/<?php echo $lista['link_img']?>" alt="">
                        <h5><?php echo $lista['titulo_curso']?></h5>
                        <div class="subtitulo-curso">
                            <p style="color: grey; font-size: 12px;">Nível <?php echo $lista['nivel_curso']?></p>
                            <p style="padding: .5vw;"class="desc-trilha"><?php echo $lista['descricao_curso']?></p>
                            <p class="inscrever-se"> INSCREVER-SE </p>
                        </div>
                    </div></a>      
           

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

            <?php
            endwhile; 
            ?>         

    </container>       
    <script data-require="jquery@*" data-semver="2.0.3" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <script data-require="bootstrap@*" data-semver="3.1.1" src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link data-require="bootstrap-css@3.1.1" data-semver="3.1.1" rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
    <script src="confirm.js"></script>   
</main>    
</body>
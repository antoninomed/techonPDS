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
    <link rel="stylesheet" href="admin.css">
</head>
<body>
<main>    
        <div class="info-pag">
        <h6 style="color:#1f5ebb; font-size:16px;">Cursos</h6>    
        <h2 class="titulo-pag" >EDITE E ORGANIZE OS CURSOS</h2>
        <hr>
        </div>

        <container class="list-dados" style="display:flex; margin-left: 4vw; flex-wrap:wrap;">
            <?php
            if (isset($_GET["id_Curso"])){
                $idCurso = addslashes ($_GET["id_Curso"]);
                $_SESSION['cursoSelect'] = $idCurso;
            }
            $comando = "select *from curso order by titulo_curso asc";
            $preparacao = Conexao::getConexao()->prepare($comando);
            $preparacao->execute();
            
            while($lista = $preparacao ->fetch(PDO::FETCH_ASSOC)):

            $comando2 = "select nome_prof from professor where email_prof='{$lista["professor_curso"]}'";
            $preparacao2 = Conexao::getConexao()->query($comando2);
            while ($linha2 = $preparacao2->fetch(PDO::FETCH_ASSOC)):
                $nomeProfessor = $linha2['nome_prof'];            
            endwhile;
                ?>

            <div class = "box-cursos">   
                        <div class="titulo-curso">         
                            <h5 style="color:black; text-align:center; font-size:18px;">Curso <?php echo $lista["titulo_curso"]?></h5>
                        </div>
                        <div class="nivel-curso">
                            <h6 style="color:grey;text-align:center;font-size:14px;"> <?php echo "Nível ",$lista["nivel_curso"]; ?></h6>
                        </div>
                        <div class="professor-curso">
                            <h6 style="text-align:center;"> <?php echo $nomeProfessor;?><br> </h6>                            
                        </div>

                        <div class="btn-cursos">
                            <a class="btn-exc" data-toggle="modal" data-target="#confirm-delete" data-href="verCursos.php?id_curso=<?php echo $lista["id_curso"];?>">Excluir</a>
                            <a class="btn-edit" href="cursoTelaAtt.php?id_update=<?php echo $lista["id_curso"];?>">Editar</a>
                        </div> 
                        
                        <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    Excluir Professor
                        </div>
                        <div class="modal-body">
                            Tem certeza que deseja excluir?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <a class="btn btn-danger btn-ok">Sim, excluir</a>

                        </div>
                            </div>
                        </div>
                    </div>
            </div>

            <?php
            endwhile; 

            if (isset($_GET["id_curso"]))
            {                    
                $id_excluir = addslashes ($_GET["id_curso"]);
                $comando = "delete from curso where id_curso='{$id_excluir}'";
                $preparacao = Conexao::getConexao()->prepare($comando);
                $preparacao->execute();
            }
            ?>                  
    </container>   
    <script data-require="jquery@*" data-semver="2.0.3" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <script data-require="bootstrap@*" data-semver="3.1.1" src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link data-require="bootstrap-css@3.1.1" data-semver="3.1.1" rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
    <script src="exclusao.js"></script>       
    </main>    
</body>
</html>

<?php 
require ('home.php');
include ("../../dados/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="admin.css">
    <title>Ver Professores</title>
</head>
<body>
    <div class="info-pag">
    <h6 style="color:#1f5ebb; font-size: 14px">Professores</h6>    
    <h2 class="titulo-pag" >EDITE E ORGANIZE OS PROFESSORES CADASTRADOS</h2>
    <hr>
    </div>
    <container class="list-dados">
        <ul>
            <?php

            include('professorDAO.php');

            $comando = "select *from professor order by professor.nome_prof asc";
            $preparacao = Conexao::getConexao()->prepare($comando);
            $preparacao->execute();

            while($lista = $preparacao ->fetch(PDO::FETCH_ASSOC)):
                ?>

            <div class = "box-geral">
                <div class="nome-prof">
                    <i class="fa fa-address-card" aria-hidden="true"></i>
                    <strong style="margin-top: .2vw;"><?php echo $lista["nome_prof"]?></strong><br>
                </div>     

                <div class="btn-esp">
                    <a class="btn-editar" href="professorTelaAtt.php?id_update=<?php echo $lista["id_prof"];?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</a>
                    <a class="btn-excluir" data-toggle="modal" data-target="#confirm-delete" data-href="verProfessores.php?id_prof=<?php echo $lista["id_prof"];?>"><i class="fa fa-trash" aria-hidden="true"></i> Excluir</a>
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

            if (isset($_GET["id_prof"]))
            {                    
                $id_excluir = addslashes ($_GET["id_prof"]);
                $comando = "delete from professor where id_prof='{$id_excluir}'";
                $preparacao = Conexao::getConexao()->prepare($comando);
                $preparacao->execute();
            }
            ?>    
            
        </ul>
    </container>
    <script data-require="jquery@*" data-semver="2.0.3" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <script data-require="bootstrap@*" data-semver="3.1.1" src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link data-require="bootstrap-css@3.1.1" data-semver="3.1.1" rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
    <script src="exclusao.js"></script>       

</body>
</html>
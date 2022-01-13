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
    <link rel="stylesheet" href="professor.css">
    <title>Ver Professores</title>
</head>
<body>
    <div class="info-pag">
    <h6 style="color:#1f5ebb; font-size: 14px">Testes</h6>    
    <h2 class="titulo-pag" >DESEMPENHO DOS ALUNOS</h2>
    <hr>
    </div>
    <container class="list-dados">
        <ul>
            <?php                       
            
            $comando = "select *from aluno_curso where id_curso='{$_GET['id_curso']}' and status_curso='espera'";

            $preparacao = Conexao::getConexao()->prepare($comando);
            $preparacao->execute();

            while($lista = $preparacao ->fetch(PDO::FETCH_ASSOC)):
                ?>

            <div class = "box-geral">
                <div class="nome-prof">
                    <i class="fa fa-address-card" aria-hidden="true"></i>
                    <strong style="margin-top: .2vw;"><?php echo $lista["nome_aluno"]?></strong><br>
                </div>     

                <div class="btn-esp">
                    <a class="download-teste" href="../../docs/<?php echo $lista["arquivo"] ?>" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Download</a>    
                    <a class="btn-aprovar" href="alunoAprovado.php?email_aluno=<?php echo $lista["email_aluno"];?>&id_curso=<?php echo $lista["id_curso"] ?>"><i class="fa fa-check-square" aria-hidden="true"></i> Aprovar</a>
                    <a style="cursor:pointer;"class="btn-reprovar" data-toggle="modal" data-target="#confirm-delete" data-href="verTestes.php?email_aluno=<?php echo $lista["email_aluno"];?>&id_curso=<?php echo $lista["id_curso"] ?>"><i class="fa fa-window-close-o" aria-hidden="true"></i> Reprovar</a>

                </div>
 
                    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    Reprovar Aluno
                    </div>
                    <div class="modal-body">
                        Tem certeza que deseja reprovar o aluno?
                    </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <a class="btn btn-danger btn-ok">Sim, reprovar</a>

                                </div>
                        </div>
                        </div>
                    </div>
            </div>            
            <?php
            $emailAtualizar = $lista["email_aluno"];            
            endwhile;

            if (isset($_GET["email_aluno"]))            
            {                   
                $id_excluir = addslashes ($_GET["email_aluno"]);
                $comando = "update aluno_curso set status_curso='andamento' where id_curso='{$_GET['id_curso']}' and email_aluno = '{$_GET["email_aluno"]}' ";
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
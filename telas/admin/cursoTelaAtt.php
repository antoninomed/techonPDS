<?php
include ("home.php");
include ("../../dados/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    
    <title>Atualizar Curso</title>
</head>
<body>
    <?php
    if (isset($_GET["id_update"])){
        $id_upd2 = addslashes ($_GET["id_update"]);
        $_SESSION['atributoIdCurso'] = $id_upd2;
        $comando = "select *from curso where id_curso='{$id_upd2}'";
        $preparacao = Conexao::getConexao()->prepare($comando);
        $preparacao->execute();
        
        while($lista = $preparacao ->fetch(PDO::FETCH_ASSOC)):
            ?>
        <?php $tituloAtt= $lista["titulo_curso"]; ?>
        <?php $descricaoAtt= $lista["descricao_curso"]; ?>
        <?php $nivelAtt= $lista["nivel_curso"]; ?>
        <?php $linkAtt= $lista["link_curso"]; 
        endwhile;      
}
?>
    <div class="info-pag" syle="font-family: 'Blinker', sans-serif;">
        <h6 style="color:#1f5ebb">Editar</h6>    
        <h2 class="titulo-pag" >ATUALIZE OS DADOS DO CURSO</h2>
        <hr>
    </div>    
    
    <main class="container-central">
        <form style="padding: 1vw;" action="cursoAtt.php" method="get" class="atualizar">
            <section class="col-md-12 mb-3">
                <section class="form-floating">
                    <input type="text" class="form-control" value = "<?php echo $tituloAtt ?>"id="nomeCurso" placeholder="Nome Curso" name= "nomeCurso">
                    <label for="nomeCurso">Nome do Curso</label>
                </section>
            </section>

            <section class="col-md-12 mb-3">
                <section class="form-floating">
                    <input type="text" class="form-control" value = "<?php echo $descricaoAtt ?>"id="descricaoCurso" placeholder="Descricão do curso" name= "descricaoCurso">
                    <label for="descricaoCurso">Descrição do Curso</label>
                </section>
            </section>

            <section class="col-md-12 mb-3">
                <section class="form-floating">
                    <input type="text" class="form-control" value = "<?php echo $nivelAtt ?>"id="nivelCurso" placeholder="Nível do Curso" name= "nivelCurso">
                    <label for="nivelCurso">Nível do Curso</label>
                </section>
            </section>

            <section class="col-md-12 mb-3">
                <section class="form-floating">
                    <input type="text" class="form-control" value = "<?php echo $linkAtt ?>"id="linkCurso" placeholder="Link do Curso" name= "linkCurso">
                    <label for="linkCurso">Link do Curso</label>
                </section>
            </section>

            <button class="btn btn-secondary col-md-12" name="enviar">Atualizar Curso</button>
        </form>        
    </main>    
</body>
</html> 
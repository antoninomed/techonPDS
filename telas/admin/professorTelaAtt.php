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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="admin.css">
    <title>Atualizar Professor</title>
</head>
<body>
    <?php
    if (isset($_GET["id_update"])){
        $id_upd = addslashes ($_GET["id_update"]);
        $_SESSION['atributoID'] = $id_upd;
        $comando = "select *from professor where id_prof='{$id_upd}'";
        $preparacao = Conexao::getConexao()->prepare($comando);
        $preparacao->execute();
        
        while($lista = $preparacao ->fetch(PDO::FETCH_ASSOC)):
            ?>
        <?php $nomeAtt= $lista["nome_prof"]; ?>
        <?php $cpfAtt= $lista["cpf_prof"]; ?>
        <?php $dtNascimentoAtt= $lista["dtnascimento_prof"]; ?>
        <?php $numeroAtt= $lista["numero_prof"]; ?>
        <?php $emailAtt= $lista["email_prof"];
        endwhile;      
}
?>
    <div class="info-pag">
        <h6 style="color:#1f5ebb; font-size:16px;">Editar</h6>    
        <h2 class="titulo-pag" >ATUALIZE OS DADOS DO PROFESSOR</h2>
        <hr>
    </div>
    <main class="container-central">
        <form action="professorAtt.php" method="get" class="atualizar">
            <section class="col-md-12 mb-3">
                <section class="form-floating">
                    <input type="text" class="form-control" value = "<?php echo $nomeAtt ?>"id="nomeProfessor" placeholder="Nome Professor" name= "nomeProfessor">
                    <label for="nomeProfessor">Nome do Professor</label>
                </section>
            </section>

            <section class="col-md-12 mb-3">
                <section class="form-floating">
                    <input type="text" class="form-control" value = "<?php echo $cpfAtt ?>"id="cpfProfessor" placeholder="CPF Professor" name= "cpfProfessor">
                    <label for="cpfProfessor">CPF do Professor</label>
                </section>
            </section>

            <section class="col-md-12 mb-3">
                <section class="form-floating">
                    <input type="text" class="form-control" value = "<?php echo $dtNascimentoAtt ?>"id="dataNascimentoProfessor" placeholder="Data de Nascimento Professor" name= "dataNascimentoProfessor">
                    <label for="dtNascimentoProfessor">Data de Nascimento</label>
                </section>
            </section>

            <section class="col-md-12 mb-3">
                <section class="form-floating">
                    <input type="text" class="form-control" value = "<?php echo $numeroAtt ?>"id="numeroProfessor" placeholder="Número de Contato Professor" name= "numeroProfessor">
                    <label for="numeroProfessor">Número de Contato</label>
                </section>
            </section>

            <section class="col-md-12 mb-3">
                <section class="form-floating">
                    <input type="text" class="form-control" value = "<?php echo $emailAtt ?>"id="emailProfessor" placeholder="E-mail Professor" name= "emailProfessor">
                    <label for="emailProfessor">E-mail</label>
                </section>
            </section>

            <button class="btn btn-secondary col-md-12" name="enviar">Atualizar Dados</button>
        </form>        
    </main>    
</body>
</html> 
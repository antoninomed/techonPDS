<?php 
include ("../../dados/conexao.php");
include('../../dados/sessao.php');
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/cabecalho2.css">
    <link rel="stylesheet" href="aluno.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Blinker&display=swap" rel="stylesheet">
    <title>Aluno techON</title>
</head>
<body>
    <header>
        <nav class="navbar sticky-top navbar-expand-lg">
            <a href="home.php" class="logo-cabecalho">techON</a>
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a href="verCursos.php" class="nav-link">Ver Cursos</a>
                        </li>
                        
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
    <div class="info-pag" style="font-family: 'Blinker', sans-serif;">
            <h6 style="color:#1f5ebb">Aluno</h6><br>
            <h2 class="titulo-pag" >MEUS DADOS</h2>
            <hr>    
    </div>    
    <main>
    <?php
    $email_logado = $_SESSION['email'];
    $comando = "select *from aluno where email_aluno='{$email_logado}'";
    $preparacao = Conexao::getConexao()->prepare($comando);
    $preparacao->execute();

    while($lista = $preparacao ->fetch(PDO::FETCH_ASSOC)):
        ?>
    <container class="cont-aluno">
    <div class = "box-perfil">

        <div class="itens-esq">
            <img class="img-perfil" src="../../imagens/img-perfil.png" alt="">     
            <p><?php echo $lista['nome_aluno']?></p>       
            <p style="background-color:#05c305; color: white;">Online</p>      
            <a class="alter-pass" href="cursosConcluidos.php"><i class="fa fa-check-square-o" aria-hidden="true"></i> Cursos Concluídos</a>
        </div>     

        <div class="itens-dir">
            <section style="border-radius: 0;" class="col-md-12 mb-3">
                <section class="form-floating">
                    <input type="text" class="form-control" value = "<?php echo $lista ['nome_aluno'] ?>"id="descricaoCurso" disabled="" placeholder="Descricão do curso" name= "descricaoCurso">
                    <label for="descricaoCurso">Nome</label>
                </section>
            </section>

            <section class="col-md-12 mb-3">
                <section class="form-floating">
                    <input type="text" class="form-control" value = "<?php echo $lista ['id_aluno'] ?>"id="descricaoCurso" disabled="" name= "descricaoCurso">
                    <label for="descricaoCurso">ID</label>
                </section>
            </section>

            <section class="col-md-12 mb-3">
                <section class="form-floating">
                    <input type="text" class="form-control" value = "<?php echo $lista ['email_aluno'] ?>"id="descricaoCurso" disabled="" name= "descricaoCurso">
                    <label for="descricaoCurso">E-mail</label>
                </section>
            </section>

            <section class="col-md-12 mb-3">
                <section class="form-floating">
                    <input type="text" class="form-control" value = "<?php echo $lista ['dtnascimento_aluno'] ?>"id="descricaoCurso" disabled="" name= "descricaoCurso">
                    <label for="descricaoCurso">Data de Nascimento</label>
                </section>
            </section>

            <?php endwhile; ?>    
        </div>
    </div>
  
    </container>

     </main>   

</body>
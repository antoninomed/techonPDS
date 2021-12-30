<!DOCTYPE html>
<html lang="pt">
<head>
    <?php include('../../dados/sessao.php'); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/cabecalho.css">
    <link rel="stylesheet" href="professor.css">
    
    <title>Administrador techON</title>
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
                            <a href="cadastrarCursos.php" class="nav-link">Cadastrar Cursos</a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="../logout.php" class="nav-link">Sair</a>
                        </li> 
                          
                    </ul>

        </nav>   
    </header>
    
    <main>
        <div class="info-pag" style="font-family: 'Blinker', sans-serif;">
            <h6 style="color:#1f5ebb">Curso</h6>    
            <h2 class="titulo-pag" >CADASTRE SEU CURSO NA PLATAFORMA</h2>
            <hr>
        </div>
        <form action="cursoRecebe.php" method="get" enctype="multipart/form-data" class="cadastro">
            <fieldset>
                    <label for="usuario">Título do Curso: </label><br>
                    <input class="input-prof" type="text" name="tituloCurso" id="usuario" required name = nome placeholder="Inserir nome do curso"autofocus /><br/>
                        
                    <label for="usuario">Descrição do Curso: </label><br>
                    <textarea class="input-prof" type="text" name="descricaoCurso" placeholder="Descreva o curso criado">
                    </textarea><br>
                    
                    <label for="nivel">Qual nível do curso?</label>
                    <select name="nivelCurso" id="nivel" required name = nivel>
                        <option value="">Escolha...</option>
                        <option value="Básico">Básico</option>
                        <option value="Intermédiario">Intermédiario</option>
                        <option value="Avançado">Avançado</option>
                    </select><br><br>

                    <label for="usuario">Link do vídeo:  </label><br>
                    <input class="input-prof" type="text" name="videoCurso" placeholder="Insira o link do vídeo" id="videoCurso" required name = video class="caixa" autofocus/>
    
                    <div class="botoes">
                            <input type="submit" name="enviar" value="Cadastrar" class="btn-cadastrar"/>
                            
                            <input type="reset" value="Limpar" class="btn-reset"/>
                    </div>

                    
            </fieldset>
        </form>
    </main>






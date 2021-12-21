<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/cabecalho.css">
    <link rel="stylesheet" href="../admin/admin.css">
    
    <title>Administrador techON</title>
</head>
<body>
    <header>
        <nav class="navbar sticky-top navbar-expand-lg">
            <a href="home.php" class="logo-cabecalho">techON</a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="cursos.php" class="nav-link">Cursos</a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="../logout.php" class="nav-link">Sair</a>
                        </li> 
                          
                    </ul>

        </nav>   
    </header>
    
    <main>
        <form action="insere.php" method="post" enctype="multipart/form-data" class="cadastro">
        <h2> Formulário para Cadastro de Cursos</h2>
            <fieldset>
                    <label for="usuario">Título do Curso: </label><br>
                    <input class="input-prof" type="text" name="nome" id="usuario" required name = nome placeholder="Inserir nome do curso"autofocus /><br/>
                        
                    <label for="usuario">Descrição do Curso: </label><br>
                    <textarea minlength ="10" class="input-prof" type="text" name="descricao" required name = descricao placeholder="Descreva a trilha criada">
                    </textarea><br>

                    <label  for="nivel">Qual nível do Curso?</label>
                    <select name="nivel" id="nivel" required name = nivel>
                        <option value="">Escolha...</option>
                        <option value="Básico">Básico</option>
                        <option value="Intermédiario">Intermédiario</option>
                        <option value="Avançado">Avançado</option>
                    </select>                
                    <br><br>      
                    
                    <label for="usuario">Anexe o vídeo do Curso: </label><br>
                    <input type="file" name="video" placeholder="Escolha" id="video" class="caixa" autofocus/>
                                            
                    <div class="botoes">
                            <input type="submit" name="enviar" value="Cadastrar" class="btn-cadastrar"/>
                            
                            <input type="reset" value="Limpar" class="btn-reset"/>
                    </div>
                </fieldset>
    </main>






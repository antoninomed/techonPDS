<!DOCTYPE html>
<html lang="pt">
<head>
    <?php include('../../dados/sessao.php'); 
    require ('home.php') ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/cabecalho2.css">
    <link rel="stylesheet" href="professor.css">
    
    <title>Administrador techON</title>
</head>
<body>       
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

                    <label for="file">Selecione a imagem do curso:</label>
                    <input class="input-prof" type="file" id="myfile" name="imgCurso">

                    <label for="file">Selecione o teste em formato PDF</label>
                    <input class="input-prof" type="file" id="myfile" name="linkTeste" accept=".PDF, .pdf">

                    <div class="botoes">
                            <input type="submit" name="enviar" value="Cadastrar" class="btn-cadastrar"/>
                            
                            <input type="reset" value="Limpar" class="btn-reset"/>
                    </div>

                    
            </fieldset>
        </form>
    </main>






<?php 
require ('home.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Cadastrar Trilhas</title>
</head>
<body>
<main>
    <form action="insere.php" method="post" enctype="multipart/form-data" class="cadastro">
        <h2> Formulário para Cadastro de Trilhas</h2>
        <fieldset>
                <label for="usuario">Nome: </label><br>
                <input class="input-prof" type="text" name="nome" id="usuario" required name = nome placeholder="Inserir nome da trilha"autofocus /><br/>
                
                <label for="usuario">Descrição de Trilha: </label><br>
                <textarea minlength ="10" class="input-prof" type="text" name="descricao" required name = descricao placeholder="Descreva a trilha criada">
                </textarea>
                <label  for="nivel">Qual nível da trilha?</label>
                <select name="nivel" id="nivel" required name = nivel>
                	<option value="">Escolha...</option>
                    <option value="Básico">Básico</option>
                	<option value="Intermédiario">Intermédiario</option>
                	<option value="Avançado">Avançado</option>
                </select>                
                <br><br>                
                <div class="botoes">
                		<input type="submit" name="enviar" value="Cadastrar" class="btn-cadastrar"/>
                       
       					<input type="reset" value="Limpar" class="btn-reset"/>
                </div>
        </fieldset>
    </form>
    </main>
    
</body>
</html>
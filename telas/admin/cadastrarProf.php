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
    <title>Cadastrar Professor</title>
</head>
<body>
    <main>
    <form action="insere.php" method="post" enctype="multipart/form-data" class="cadastro">
        <h2> Formulário para Cadastro de Professor </h2>
        <fieldset>
                <label for="usuario">Nome: </label><br>
                <input class="input-prof" type="text" name="nome" id="usuario" required name = nome placeholder="Inserir nome"autofocus /><br/>
                
                <label for="usuario">CPF: </label><br>
                <input minlength ="11" maxlength ="11" class="input-prof" type="text" name="cpf" required name = cpf placeholder="Inserir CPF" /><br/>
                               
                <label>Data de nascimento: </label><br/>
                <input class="input-prof" type="date" name="dtnascimento" required name = data  id="amigos" /><br>   
                
                <label for="usuario">Número de Celular: </label><br>
                <input class="input-prof" type="tel" name="celular" required name = celular placeholder="Inserir número" /><br/>

                <label  for="sexo">Qual o genêro?</label>
                <select name="sexo" id="sexo" required name = genero>
                	<option value="">Escolha...</option>
                    <option value="feminino">Feminino</option>
                	<option value="masculino">Masculino</option>
                	<option value="indefinido">Indefinido</option>
                </select>                
                <br><br>
                
                <label for="usuario">E-mail: </label><br>             
                <input class="input-prof" type="email" name="email" required name = email placeholder="Inserir email"/><br/>

                <label for="usuario">Senha de Acesso: </label><br>
                <input minlength ="8" maxlength ="20" class="input-prof" type="password" name="senha" required name = senha placeholder="Inserir senha" autofocus /><br/>
                
                <div class="botoes">
                		<input type="submit" name="enviar" value="Cadastrar" class="btn-cadastrar"/>
                       
       					<input type="reset" value="Limpar" class="btn-reset"/>
                </div>
        </fieldset>
    </form>
    </main>
    

</body>
</html>
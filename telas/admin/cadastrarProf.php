<?php 
require ('home.php');
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Cadastrar Professor</title>
</head>
<body>
    <div class="info-pag" syle="font-family: 'Blinker', sans-serif;">
        <h6 style="color:#1f5ebb">Professor</h6>    
        <h2 class="titulo-pag" >CADASTRAR PROFESSOR</h2>
        <hr>
    </div>
    <main>
    <form action="professorRecebe.php" method="get" enctype="multipart/form-data" class="cadastro">
        <fieldset>
                <label for="usuario">Nome: </label><br>
                <input class="input-prof" type="text" name="nome_prof" id="usuario" required name = nome placeholder="Inserir nome"autofocus /><br/>
                
                <label for="cpf">CPF: </label><br>
                <input minlength ="11" maxlength ="11" class="input-prof" type="text" name="cpf_prof" required name = cpf placeholder="Inserir CPF" /><br/>
                               
                <label>Data de nascimento: </label><br/>
                <input class="input-prof" type="date" name="dtnascimento_prof" required name = data  id="amigos" /><br>   
                
                <label for="celular">Número de Celular: </label><br>
                <input class="input-prof" type="tel" name="celular_prof" required name = celular placeholder="Inserir número" /><br/>
                
                <label for="email">E-mail: </label><br>             
                <input class="input-prof" type="email" name="email_prof" required name = email placeholder="Inserir email"/><br/>

                <label for="senha">Senha de Acesso: </label><br>
                <input minlength ="8" maxlength ="20" class="input-prof" type="password" name="senha_prof" required name = senha placeholder="Inserir senha" autofocus /><br/>
                
                <div class="botoes">
                		<input type="submit" name="enviar" value="Cadastrar" class="btn-cadastrar"/>
                       
       					<input type="reset" value="Limpar" class="btn-reset"/>
                </div>
        </fieldset>
    </form>
    </main>
    

</body>
</html>
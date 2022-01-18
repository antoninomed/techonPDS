<!DOCTYPE html>
<html lang="pt">
<head>
    <?php 
    include ("../../dados/conexao.php"); 
    require ('home.php');
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="aluno.css">
    <title>Aluno techON</title>
</head>
<body>
    <main>
    <?php
    if (isset($_GET["id_curso"])){  
        
        $id_c = addslashes ($_GET["id_curso"]);
        $comando = "select *from curso where id_curso='{$id_c}'";
        $preparacao = Conexao::getConexao()->prepare($comando);
        $preparacao->execute();

        $_SESSION['idCursoAlter']= $id_c;


        while($lista = $preparacao ->fetch(PDO::FETCH_ASSOC)):
            ?>
        <?php $tituloCurso= $lista["titulo_curso"]; ?>
        <?php $descricaoCurso= $lista["descricao_curso"]; ?>
        <?php $nivelCurso= $lista["nivel_curso"]; ?>
        <?php $linkCurso= $lista["link_curso"]; ?>
        <?php $professorCurso= $lista["professor_curso"];?>
        <?php $linkTeste = $lista ["link_teste"];

    endwhile; 
}        
?>
    <div class="info-pag">
        <h4 class="titulo-pag" ><?php echo $tituloCurso ?></h4>   
        <h6 style="color:#1f5ebb; font-size: 14px"><?php echo $descricaoCurso ?></h6>            
    </div>
    <hr>
    <container class="conteudo-central">
        <div class="object-video">
            
            <details style="text-align:center; width: 25vw; color: #1f5ebb">  
                <summary>Área de Envio</summary>             

                <form class = "form-cadastro" action="atualizarStatus.php" method="get">
                <label for="file">Envie seu teste em PDF para correção:</label><br>
                <input style= "font-size: 12px;" class="input-prof" type="file" id="myfile" name="linkTesteC" accept=".PDF, .pdf">  
                <input class="btn-enviarTeste" type="submit" name="enviarArquivo" value="Enviar" class="btnCadastrar"/>

            </details>

            <object  style="border: solid #1f5ebb 5px;" width="650" height="350">
                <param name="movie" value="http://www.youtube.com/v/tIBxavsiHzM" />
                <embed src="<?php echo $linkCurso ?>" type="application/x-shockwave-flash" width="425" height="350" />
            </object>
        </div>        
    </container><br>

    <div class="area-teste">
        <a class="download-teste" href="../../docs/<?php echo $linkTeste ?>" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Download do teste para conclusão do curso.</a>    
    </div> 
    </main>   
</body>
</html>
<?php
    session_start();
    include ('../../dados/conexao.php');
    
    $conn = mysqli_connect("localhost", "root", "123", "techonbd");
    $pesquisar = $_POST['pesquisar'];
    $selectCursos = "SELECT * FROM curso WHERE titulo_curso LIKE '%$pesquisar%' LIMIT 5";
    $resultadoCursos = mysqli_query($conn, $selectCursos);
    $i = 0;
    while($rows_cursos = mysqli_fetch_array($resultadoCursos)){        
        $_SESSION['indexTitulo'][$i] = $rows_cursos['titulo_curso'];
        $_SESSION['indexCodigo'][$i] = $rows_cursos['id_curso'];
        $i=$i+1;        
    }
    $_SESSION['totalSearch'] = $i;
    header('location:home.php')
?>

 
<?php 
include ("../../dados/conexao.php"); 
session_start();

$linkTesteC = $_GET['linkTesteC'];
$idCursoAlter = $_SESSION['idCursoAlter'];

$comando = "update aluno_curso set status_curso='espera', arquivo='{$linkTesteC}' where id_curso='{$idCursoAlter}'";
$preparacao = Conexao::getConexao()->prepare($comando);
$preparacao->execute();

echo $idCursoAlter;

header ("location:selectCurso.php?id_curso=$idCursoAlter");
?>
<?php 
require_once ('cursoDAO.php');
session_start();

$id_upd2 =  $_SESSION['atributoIdCurso'];
$atributo1 = $_GET['nomeCurso'];
$atributo2 = $_GET['descricaoCurso'];
$atributo3 = $_GET['nivelCurso'];
$atributo4 = $_GET['linkCurso'];

$comando = "update curso set titulo_curso= '{$atributo1}', descricao_curso='{$atributo2}', 
nivel_curso='{$atributo3}', link_curso='{$atributo4}' where id_curso='{$id_upd2}' ;";
$preparacao = Conexao::getConexao()->prepare($comando);
$preparacao->execute();

header("location:verCursos.php");

?>


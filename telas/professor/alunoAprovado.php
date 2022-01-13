<?php 
session_start();

require_once('../../dados/conexao.php');

$comando = "update aluno_curso set status_curso='aprovado' where id_curso='{$_GET['id_curso']}' and email_aluno = '{$_GET["email_aluno"]}' ";
$preparacao = Conexao::getConexao()->prepare($comando);
$preparacao->execute();
$curso = $_GET['id_curso'];

header ("location:verTestes.php?id_curso=$curso");

?>
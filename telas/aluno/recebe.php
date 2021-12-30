<?php
include ('aluno.php');
require_once('alunoDAO.php');

$aluno = new Aluno();
$aluno->setNomeAluno($_GET['nomeUsuario']);
$aluno->setDtNascimentoAluno($_GET['dtnascimentoUsuario']);
$aluno->setEmailAluno($_GET['emailUsuario']);
$aluno->setSenhaAluno(md5($_GET['senhaUsuario']));


$alunoDao = new AlunoDao();
$alunoDao->createAluno($aluno);

header('location:home.php');

?>
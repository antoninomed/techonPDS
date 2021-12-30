<?php
include ('professor.php');
require_once('professorDAO.php');

$professor = new Professor();
$professor->setNomeProfessor($_GET['nome_prof']);
$professor->setCpfProfessor($_GET['cpf_prof']);
$professor->setDtNascProfessor($_GET['dtnascimento_prof']);
$professor->setNumeroProfessor($_GET['celular_prof']);
$professor->setEmailProfessor( $_GET['email_prof']);
$professor->setSenhaProfessor(md5($_GET['senha_prof']));

$professorDao = new ProfessorDao();
$professorDao->createProfessor($professor);

header('location:cadastrarProf.php');

?>
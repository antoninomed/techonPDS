<?php 
require_once ('professorDAO.php');
session_start();

$id_upd =  $_SESSION['atributoID'];
$atributo1 = $_GET['nomeProfessor'];
$atributo2 = $_GET['cpfProfessor'];
$atributo3 = $_GET['dataNascimentoProfessor'];
$atributo4 = $_GET['numeroProfessor'];
$atributo5 = $_GET['emailProfessor'];

$comando = "update professor set nome_prof= '{$atributo1}', cpf_prof='{$atributo2}', 
dtnascimento_prof='{$atributo3}', numero_prof='{$atributo4}', email_prof='{$atributo5}' where id_prof='{$id_upd}' ;";
$preparacao = Conexao::getConexao()->prepare($comando);
$preparacao->execute();

header("location:verProfessores.php");

?>


<?php 
require_once ('conexao.php');
session_start();

$_SESSION['logged']=False;

$email = strtolower($_GET['email']);
$senha = md5($_GET['senha']);


$comandoSQLAdmin = "select *from administrador where email='{$email}' and senha='{$senha}'";
$comandoSQLProf = "select *from professor where email_prof='{$email}' and senha_prof='{$senha}'";
$comandoSQLAluno = "select *from aluno where email_aluno='{$email}' and senha_aluno='{$senha}'";

$preparacaoAdmin = Conexao::getConexao()->prepare($comandoSQLAdmin);
$preparacaoAdmin->execute();

$preparacaoProf = Conexao::getConexao()->prepare($comandoSQLProf);
$preparacaoProf->execute();

$preparacaoAluno = Conexao::getConexao()->prepare($comandoSQLAluno);
$preparacaoAluno->execute();

if ($preparacaoAdmin->rowCount() > 0){
	$_SESSION['email'] = $email;
	header('location:../telas/admin/verCursos.php');	
	exit();	
}
elseif ($preparacaoProf->rowCount() > 0){
	$comandoSQLNome = "select nome_prof from professor where email_prof='{$email}'";
	$_SESSION['email'] = $email;
	header('location:../telas/professor/verCursos.php');
	exit();
}
else if($preparacaoAluno->rowCount() >0){
	$_SESSION['email'] = $email;
	header('location:../telas/aluno/home.php');
}else {
	$_SESSION['notLogged'] = true;
	header ('location:../telas/login.php');

}

?>
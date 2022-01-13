<?php
include ('inscricao.php');
include ('verCursos.php');
require_once('inscricaoDAO.php');


$idCurso = $_SESSION['cursoSelect'];

$comando = "select *from aluno where email_aluno='{$_SESSION['email']}'";
$preparacao = Conexao::getConexao()->query($comando);

$comandoValidacao = "select *from aluno_curso where email_aluno='{$_SESSION['email']}' and id_curso='{$idCurso}'";
$preparacaoValidacao = Conexao::getConexao()->query($comandoValidacao);


if ($preparacaoValidacao->rowCount() > 0){
    $_SESSION['idError'] = 2;
}

else {    
    while ($linha = $preparacao->fetch(PDO::FETCH_ASSOC)):

        $nome_aluno = $linha['nome_aluno'];
        $email_aluno = $linha['email_aluno'];

    endwhile;

    $comando2 = "select *from curso where id_curso='{$_SESSION['cursoSelect']}'";
    $preparacao2 = Conexao::getConexao()->query($comando2);

    while ($linha2 = $preparacao2->fetch(PDO::FETCH_ASSOC)):
        $nome_curso = $linha2['titulo_curso'];
        $id_curso = $linha2['id_curso'];
        
    endwhile;

    $status_curso = "andamento";
    $inscricao = new Inscricao();
    $inscricao->setIdCurso($id_curso);
    $inscricao->setNomeCurso($nome_curso);
    $inscricao->setNomeAluno($nome_aluno);
    $inscricao->setEmailAluno($email_aluno);
    $inscricao->setStatusCurso($status_curso);

    $inscricaoDao = new InscricaoDao();
    $inscricaoDao->createInscricao($inscricao);

}

?>
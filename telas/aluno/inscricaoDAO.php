<?php
require_once('../../dados/conexao.php');
class InscricaoDao {
    public function createInscricao (Inscricao $i){
        
        $comandoSQLInserir= "insert into aluno_curso (id_curso,nome_curso,nome_aluno,email_aluno) 
        values (?,?,?,?)";
        $insCurso = Conexao::getConexao()->prepare($comandoSQLInserir);     

        $insCurso->bindValue(1,$i->getIdCurso());
        $insCurso->bindValue(2,$i->getNomeCurso());
        $insCurso->bindValue(3,$i->getNomeAluno());
        $insCurso->bindValue(4,$i->getEmailAluno()); 

        $insCurso->execute();
    }
}
?>
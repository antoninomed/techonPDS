<?php
require_once('../../dados/conexao.php');
class ProfessorDao {
    public function createProfessor (Professor $p){
        
        $comandoSQLInserir= "insert into professor (nome_prof,cpf_prof,dtnascimento_prof,numero_prof,email_prof,senha_prof) 
        values (?,?,?,?,?,?)";

        $cadProfessor = Conexao::getConexao()->prepare($comandoSQLInserir);
        $cadProfessor->bindValue(1,$p->getNomeProfessor());
        $cadProfessor->bindValue(2,$p->getCpfProfessor());
        $cadProfessor->bindValue(3,$p->getDtNascProfessor());
        $cadProfessor->bindValue(4,$p->getNumeroProfessor());
        $cadProfessor->bindValue(5,$p->getEmailProfessor());
        $cadProfessor->bindValue(6,$p->getSenhaProfessor());

        $cadProfessor->execute();
    }
}
?>
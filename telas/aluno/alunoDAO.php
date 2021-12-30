<?php
require_once('../../dados/conexao.php');
class AlunoDao {
    public function createAluno (Aluno $a){
        
        $comandoSQLInserir= "insert into aluno (nome_aluno,dtnascimento_aluno,email_aluno,senha_aluno) 
        values (?,?,?,?)";

        $cadAluno = Conexao::getConexao()->prepare($comandoSQLInserir);
        $cadAluno->bindValue(1,$a->getNomeAluno());
        $cadAluno->bindValue(2,$a->getDtNascimentoAluno());
        $cadAluno->bindValue(3,$a->getEmailAluno());
        $cadAluno->bindValue(4,$a->getSenhaAluno());

        $cadAluno->execute();

    }
}
?>
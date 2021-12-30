<?php
require_once('../../dados/conexao.php');
class CursoDao {
    public function createCurso (Curso $c){
        
        $comandoSQLInserir= "insert into curso (titulo_curso, descricao_curso, nivel_curso, link_curso, professor_curso) 
        values (?,?,?,?,?)";

        $cadCurso = Conexao::getConexao()->prepare($comandoSQLInserir);
        //Conexao::getConexao()->mysqli_query($comandoSQLInserir);
        $cadCurso->bindValue(1,$c->getTituloCurso());
        $cadCurso->bindValue(2,$c->getDescricaoCurso());        
        $cadCurso->bindValue(3,$c->getNivelCurso());
        $cadCurso->bindValue(4,$c->getLinkCurso());
        $cadCurso->bindValue(5,$c->getProfessorCurso());

        $cadCurso->execute();

    }
}

?>
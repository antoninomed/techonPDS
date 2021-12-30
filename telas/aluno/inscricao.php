<?php
class Inscricao {
    private $email_aluno,$id_curso,$nome_aluno, $nome_curso;

    public function getEmailAluno (){
        return $this-> emailAluno;
    }
    public function setEmailAluno($email_aluno){
        $this->emailAluno = $email_aluno;
    }
    public function getIdCurso (){
        return $this-> idCurso;
    }
    public function setIdCurso($id_curso){
        $this->idCurso = $id_curso;
    }

    public function getNomeAluno (){
        return $this-> nomeAluno;
    }
    public function setNomeAluno($nome_aluno){
        $this->nomeAluno = $nome_aluno;
    }

    public function getNomeCurso (){
        return $this-> nomeCurso;
    }
    public function setNomeCurso($nome_curso){
        $this->nomeCurso = $nome_curso;
    }



}

<?php
Class Aluno {
    private $id_aluno,$nome_aluno, $dtnascimento_aluno, $email_aluno, $senha_aluno;

    public function getIdAluno (){
        return $this -> idAluno;
    }
    public function setIdAluno ($id_aluno){
        $this->idAluno = $id_aluno;
    }

    public function getNomeAluno (){
        return $this -> nomeAluno;
    }
    public function setNomeAluno ($nome_aluno){
        $this->nomeAluno = $nome_aluno;
    }  

    public function getDtNascimentoAluno (){
        return $this -> dtNascimentoAluno;
    }

    public function setDtNascimentoAluno ($dtnascimento_aluno){
        $this -> dtNascimentoAluno = $dtnascimento_aluno;
    }

    public function getEmailAluno(){
        return $this -> emailAluno;
    }
    public function setEmailAluno($email_aluno){
        $this -> emailAluno = $email_aluno;
    }

    public function getSenhaAluno(){
        return $this -> senhaAluno;
    }
    public function setSenhaAluno($senha_aluno){
        $this -> senhaAluno = $senha_aluno;
    }    
}


?>
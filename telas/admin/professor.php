<?php
class Professor {
    private $id_prof,$nome_prof,$cpf_prof,$dtnascimento_prof,$numero_prof,$email_prof,$senha_prof;

    public function getIdProfessor (){
        return $this-> idProfessor;
    }
    public function setIdProfessor($id_prof){
        $this->idProfessor = $id_prof;
    }

    public function getNomeProfessor (){
        return $this-> nomeProfessor;
    }
    public function setNomeProfessor($nome_prof){
        $this->nomeProfessor = $nome_prof;
    }

    public function getCpfProfessor (){
        return $this-> cpfProfessor;
    }
    public function setCpfProfessor($cpf_prof){
        $this->cpfProfessor = $cpf_prof;
    }

    public function getDtNascProfessor (){
        return $this-> dataNascProfessor;
    }
    public function setDtNascProfessor($dtnascimento_prof){
        $this->dataNascProfessor = $dtnascimento_prof;
    }

    public function getNumeroProfessor (){
        return $this-> numeroProfessor;
    }
    public function setNumeroProfessor($numero_prof){
        $this->numeroProfessor = $numero_prof;
    }

    public function getEmailProfessor (){
        return $this-> emailProfessor;
    }
    public function setEmailProfessor($email_prof){
        $this->emailProfessor = $email_prof;
    }

    public function getSenhaProfessor (){
        return $this-> senhaProfessor;
    }
    public function setSenhaProfessor($senha_prof){
        $this->senhaProfessor = $senha_prof;
    }

    




}

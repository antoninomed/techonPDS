<?php 
Class Curso {
    private $id, $titulo, $descricao, $link, $professor, $nivel;

    public function getIdCurso(){
        return $this-> idCurso;
    }
    public function setIdCurso($id){
        $this->idCurso=$id;
    }

    public function getTituloCurso(){
        return $this-> tituloCurso;
    }
    public function setTituloCurso($titulo){
        $this->tituloCurso= $titulo;
    }
    public function getDescricaoCurso(){
        return $this-> descricaoCurso;
    }
    public function setDescricaoCurso($descricao){
        $this->descricaoCurso=$descricao;
    }
    public function getLinkCurso(){
        return $this-> linkCurso;
    }
    public function setLinkCurso($link){
        $this->linkCurso=$link;
    }
    public function getProfessorCurso(){
        return $this-> professorCurso;
    }
    public function setProfessorCurso($professor){
        $this->professorCurso=$professor;
    }

    public function getNivelCurso(){
        return $this-> nivelCurso;
    }
    public function setNivelCurso($nivel){
        $this->nivelCurso = $nivel;
    }



}

?>
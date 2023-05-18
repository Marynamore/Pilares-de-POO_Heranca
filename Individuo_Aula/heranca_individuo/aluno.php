<?php 

require_once __DIR__.'/../../classe_pessoa/pessoa_aulas.php';

class Aluno extends Individuo{
    private $nmr_matricula;
    private $curso;

    public function __construct($nome, $idade, $sexo, $nmr_mat, $curso)
    {
        parent::__construct($nome,$idade,$sexo); //ele faz uma referencia a classe PAI (pessoa->)  
        $this->nmr_matricula = $nmr_mat;
        $this->curso = $curso;
    }

    public function exibirDadosAluno()
    {
        parent::exibirDados();
        echo "<strong>Dados do Aluno => Matricula $this->nmr_matricula e Curso: $this->curso</strong><br>";    
    }

    public function atualizaCurso($curso){
        $this->curso = $curso;
    }

    public function apagaMatricula(){
        $this->nmr_matricula = "";
    }

    function getNmr_matricula(){
        return $this->nmr_matricula;
    }

    function getCurso(){
        return $this->curso;
    }

    function setNmr_matricula($nmr_mat){
        $this->nmr_matricula = $nmr_mat;
    }

    function setCurso($curso){
        $this->curso = $curso;
    }

}




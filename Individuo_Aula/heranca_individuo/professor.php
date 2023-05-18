<?php 

require_once __DIR__.'/../../classe_pessoa/pessoa_aulas.php';

class Professor extends Individuo{
    private $disciplina;
    private $salario;

    public function cadastraAluno(){
        echo "Aluno cadastrado !";
    }


    function getDisciplina(){
        return $this->disciplina;
    }

    function getSalario(){
        return $this->salario;
    }

    function setDisciplina($disciplina){
        $this->disciplina = $disciplina;
    }

    function setSalario($salario){
        $this->salario = $salario;
    }

}

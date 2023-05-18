<?php

    class Veiculos{

        protected $nome;
        protected $modelo;
        protected $passageiros;

        public function __construct($nome, $modelo, $passsageiros)
        {
            $this->nome=$nome;
            $this->modelo=$modelo;
            $this->passageiros=$passsageiros;
        }


        public function getNome(){
            return $this->nome;
        }

        public function getModelo(){
            return $this->modelo;
        }

        public function getPassageiros(){
            return $this->passageiros;
        }
    }



?>
<?php

    class Individuo{

        private $nome;
        private $idade;
        private $email;
        private $sexo;


        public function __construct($nome,$idade,$sexo)
        {
            $this->nome=$nome;
            $this->idade=$idade;
            $this->sexo = $sexo;
            $this->email = "Não Definido";
        }

        public function exibirDados(){
            echo "<p>Nome: $this->nome , Idade: $this->idade , Email: $this->email , Sexo: $this->sexo </p>";
        }

        public function getNome(){
            return $this->nome;
        }//pegamos os atributos privados e mostramos

        public function getIdade(){
            return $this->idade;
        }

        public function getEmail(){
            return $this->email;
        }

        public function getSexo(){
            return $this->sexo;
        }

        public function setNome($nome){
            $this->nome=$nome;
        } //setamos os atributos privados

        public function setIdade($idade){
            $this->idade=$idade;
        } 

        public function setEmail($email){
            $this->email=$email;
        } 

        public function setSexo($sexo){
            $this->sexo=$sexo;
        } 
    }

    

?>
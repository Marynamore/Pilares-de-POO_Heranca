<?php

    class Rica extends Pessoa{

        private $dinheiro;

        public function setDinheiro($dinheiro){
            $this->dinheiro=$dinheiro;
        }

        public function getDinheiro(){
            return $this->dinheiro;
        }

        public function fazCompras(){
            echo "O {$this->nome}, tem uma quantidade {$this->dinheiro} em dinheiro.";
        }
    }

?>
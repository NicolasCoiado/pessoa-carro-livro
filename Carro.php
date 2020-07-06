<?php //Author: Nicolas Coiado;
    class Carro{//Criando a classe Carro;

        //Atributos:
        private $marca; //Criando o atributo marca;
        private $cor; //Criando o atributo cor;
        private $placa; //Criando o atributo placa;
        private $modelo; //Criando o atributo modelo;

        //Getters e Setters:
        //Gettter e setter de Marca;
        public function getMarca(){
            return $this->marca; 
        }
        public function setMarca($argMarca){
             $this->marca = $argMarca; 
        }

         //Gettter e setter de Cor;
         public function getCor(){
            return $this->cor; 
        }
        public function setCor($argCor){
             $this->cor = $argCor; 
        }

         //Gettter e setter de Placa;
         public function getPlaca(){
            return $this->placa; 
        }
        public function setPlaca($argPlaca){
             $this->placa = $argPlaca; 
        }

         //Gettter e setter de Modelo;
         public function getModelo(){
            return $this->modelo; 
        }
        public function setModelo($argModelo){
             $this->modelo = $argModelo; 
        }
    }
?>
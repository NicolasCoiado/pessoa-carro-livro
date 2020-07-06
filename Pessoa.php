<?php //Author: Nicolas Coiado;
    class Pessoa{ //Criando a classe Pessoa;

        //Atributos:
        private $nome; //Criando atributo nome;
        private $idade; //Criando atributo idade;
        private $peso; //Criando atributo peso;
        private $sexo; //Criando atributo sexo;

        //Getters e Setters:
        //Gettter e setter de Nome;
        public function getNome(){
            return $this->nome; 
        }
        public function setNome($argNome){
             $this->nome = $argNome; 
        }

        //Gettter e setter de Idade;
        public function getIdade(){
            return $this->idade; 
        }
        public function setIdade($argIdade){
             $this->idade = $argIdade; 
        }

        //Gettter e setter de peso;
        public function getPeso(){
            return $this->peso; 
        }
        public function setPeso($argPeso){
             $this->peso = $argPeso; 
        }

        //Gettter e setter de sexo;
        public function getSexo(){
            return $this->sexo; 
        }
        public function setSexo($argSexo){
             $this->sexo = $argSexo; 
        }

    }
?>
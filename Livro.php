<?php //Author: Nicolas Coiado;
    class Livro{ //Criando a classe Livro;
        
        //Atributos:
        private $titulo; //Criando o atributo titulo;
        private $autor; //Criando o atributo autor;
        private $ano; //Criando o atributo ano;
        private $edicao; //Criando o atributo edicao;

        //Getters e Setters:
        //Gettter e setter de Titulo;
        public function getTitulo(){
            return $this->titulo; 
        }
        public function setTitulo($argTitulo){
             $this->titulo = $argTitulo; 
        }

        //Gettter e setter de Autor;
        public function getAutor(){
            return $this->autor; 
        }
        public function setAutor($argAutor){
             $this->autor = $argAutor; 
        }

        //Gettter e setter de Ano;
        public function getAno(){
            return $this->ano; 
        }
        public function setAno($argAno){
             $this->ano = $argAno; 
        }

        //Gettter e setter de Edicao;
        public function getEdicao(){
            return $this->edicao; 
        }
        public function setEdicao($argEdicao){
             $this->edicao = $argEdicao; 
        }
        
    }
?>
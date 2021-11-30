<?php

    abstract class Animal{

        private $id;
        private $peso;
        private $tamanho;
        private $cor;
        static $contador=0;

        public function __construct()
        {
                self::$contador++;
        }
        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {   
                if(is_numeric($id))
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of peso
         */ 
        public function getPeso()
        {
                return $this->peso;
        }

        /**
         * Set the value of peso
         *
         * @return  self
         */ 
        public function setPeso($peso)
        {
                $this->peso = $peso;

                return $this;
        }

        /**
         * Get the value of tamanho
         */ 
        public function getTamanho()
        {
                return $this->tamanho;
        }

        /**
         * Set the value of tamanho
         *
         * @return  self
         */ 
        public function setTamanho($tamanho)
        {
                $this->tamanho = $tamanho;

                return $this;
        }

        /**
         * Get the value of cor
         */ 
        public function getCor()
        {
                return $this->cor;
        }

        /**
         * Set the value of cor
         *
         * @return  self
         */ 
        public function setCor($cor)
        {
                $this->cor = $cor;

                return $this;
        }
        public function comer($comida)
        {
            echo "O animal come ".$comida;
        }
        abstract public function fazerBarulho();
        public static function mostraClassePai(Animal $animal)
        {
                if($animal instanceof Canino)
                echo "Classe filha de canino";
                if($animal instanceof Felino)
                echo "Classe filha de felino";
        }
        
    }

?>
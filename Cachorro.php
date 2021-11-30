<?php
 require_once "canino.php";
 require_once "pet.php";
    class Cachorro extends Canino implements Pet
    {
        public function fazerBarulho()
        {
            echo "Au Au";
        }
        public function cobrarFocinheira()
        {
            echo "\nValor da focinheira: R$ 10,00\n"; 
        }
        public function incluirDesconto()
        {
            echo "Cachorro tem 5% de desconto";
        }
    }
    
?>
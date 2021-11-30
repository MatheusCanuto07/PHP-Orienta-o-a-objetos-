<?php
require_once "animal.php";
    abstract class Canino extends Animal
    {
        public function cobrarFocinheira()
        {
            echo "\n Valor da focinheir: R$ 50,00\n";
        }
    }
    

?>
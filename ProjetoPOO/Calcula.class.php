<?php

class Calcula{
            private $Numero;
            
             public function setNumero($Num){
                $this->Numero=$Num;
            }
            public function getNumero(){
                return $this->Numero;
            }

            public function Dobrar(){
                $this->Numero = ($this->Numero*2);
                echo 'O dobro do numero é: '. $this->Numero;
            }
           
}
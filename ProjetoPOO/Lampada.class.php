<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        class Lampada{
            public $Nome;
            public $Marca;
            public $IntLuz;
            public $GastoEner;
            public $CorLuz;
            function Acender(){
                echo "Está firme e forte";
            }
            function Apagar(){
                echo "Está descansando";
            }
            function FimUso(){
               echo "Estourou!";
            }
            function mostrarCor(){
                echo $this->CorLuz;
            }
        }
        ?>
    </body>
</html>

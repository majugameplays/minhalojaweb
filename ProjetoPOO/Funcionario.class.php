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
        class Funcionario{
            private $Nome;
            private $Idade;
            private $Salario;

            public function setNome($Nome){
                $this->Nome=$Nome;
            }
            public function getNome(){
                return $this->Nome;
            }

             public function setIdade($Idade){
                $this->Idade=$Idade;
            }
            public function getIdade(){
                return $this->Idade;
            }

             public function setSalario($Salario){
                $this->Salario=$Salario;
            }
            public function getSalario(){
                return $this->Salario;
            }
        }
        ?>
    </body>
</html>
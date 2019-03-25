<?php

class Funcionario{
            private $Nome;
            private $Curso;
            private $RA;
            private $Nota;
            private $Mensalidade;

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


<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $operacao = $_POST["op"];
        $n1 = $_POST["numero1"];
        $n2 = $_POST["numero2"];
        
        if ($operacao=="som"){
            $operacaosoma = $n1+$n2;
            echo "O resultado da soma é: " .$operacaosoma;
        }
        if ($operacao=="sub"){
            $operacaosub = $n1-$n2;
            echo "O resultado da subtração é: " .$operacaosub;
        }
        if ($operacao=="div"){
            $operacaodiv = $n1/$n2;
            echo "O resultado da divisão é: ".$operacaodiv;
        }
        if ($operacao=="mult"){
            $operacaomult = $n1*$n2; 
            echo "O resultado da multiplicação é: ". $operacaomult;
        }
        
        ?>
    </body>
</html>
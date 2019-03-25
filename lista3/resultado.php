<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 1</title>
        
    </head>
    <body>
        <?php
        $n1 = $_POST["numero1"];
        $n2 = $_POST["numero2"];
        $soma = $n1 + $n2;
        
        echo "O resultado da soma é: ", $soma;
        ?>
    </body>
</html>

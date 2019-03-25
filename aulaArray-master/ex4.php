<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 1</title>
    </head>
    <body>
        <?php
       $array= array();
       $pares = 2;
       for($i= 0; $i < 50; $i++){
          $array[$i] = $pares;
          $pares +=2;
          
          
          
        }   
       
       print_r($array). "<br>";
        
        
        
        ?>
    </body>
</html>

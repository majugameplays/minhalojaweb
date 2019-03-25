<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 1</title>
    </head>
    <body>
        <?php
       $array= array();
       $maior = 0;
       $soma = 0;
       $posicao = 0;
       for($i= 0; $i < 30; $i++){
          $array[$i] = rand(4,10);
           //maior elemento 
          if($array[$i] > $maior){
              $maior = $array[$i];
              $posicao = $i;
          }
          
            //soma
          $soma += $array[$i]; 
        }   
           
           //posição do maior elemento 
          echo "O maior elemento é: ". $maior . "<br>";
          echo "A posição do maior elemento é: ". $posicao . "<br>";
          echo "A soma de todos os valores é: ". $soma . "<br>";
          echo "<br>A média dos valores é: ". $soma/30 . "<br>";    
       
       
       print_r($array). "<br>";
        
        
        
        ?>
    </body>
</html>



<!DOCTYPE html>
<html>
    
<head>
    
    <meta charset="utf-8">
    <title> Salario </title>
    
</head>

<body>
    
       <?php
       
       $salario=2000;
     
       
       if ($salario<=1000) {
          
           $i=($salario*40)/100;
           $final=$i+$salario;
           
           echo "O salario é " .$final;
       }
       
       else { 
           
           $j=($salario*30)/100;
           $final2=$j+$salario;
           
           echo "O salário é ".$final2;
       }
           
       ?>
    
</body>

</html>


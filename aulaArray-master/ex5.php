<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 1</title>
    </head>
    <body>
        <?php
       $array= array();
       
       $array[0] = "Torta de limão";
       $array[1] = "Fini";
       $array[2] = "Nutella";
       $array[3] = "Açaí";
       $array[4] = "Doce de leite";
       $array[5] = "Chocolate";
       $array[6] = "Pudim";
       $array[7] = "Pavê";
       $array[8] = "Bolo";
       $array[9] = "Cone de doce de leite";
        ?>
        
        <select>
            <option> Doces </option>
            <?php for($i=0; $i<10; $i++){ ?>
            <option> <?php echo $array[$i] ?> </option>
            <?php } ?>
        </select>    
    </body>
</html>

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
        $frase = "A repetição é a mãe da retenção.";
        $palavra = "mãe";
        
        $q = strpos($frase, $palavra);
        $texto = substr($frase, 0, $q);
        $texto2 = substr($frase, $q + strlen($palavra), strlen($frase));
        
        var_dump($texto);
        var_dump($palavra);
        var_dump($texto2);
        
        ?>
    </body>
</html>

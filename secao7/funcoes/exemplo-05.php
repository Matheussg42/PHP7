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
        
        $a = 10;

        function trocaValor(&$b) {

            $b += 50;
            return $b;
        }

        echo trocaValor($a);
        echo "<br>";
        echo trocaValor($a);
        echo "<br>";
        echo $a;
        ?>
    </body>
</html>

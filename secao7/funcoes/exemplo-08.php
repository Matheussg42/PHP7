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
        
        function soma(float ...$valores):float{
            return array_sum($valores);
        }
        
        echo var_dump(soma(2, 2));
        echo "<br>";
        echo soma(25, 33);
        echo "<br>";
        echo soma(1.5, 3.2);
        echo "<br>";
        
        ?>
    </body>
</html>

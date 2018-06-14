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
        $total = 150;
        $desconto = 0.9;
        
        do{
            $total *= $desconto;
        } while ($total > 100);
        
        echo $total;
        
        
        ?>
    </body>
</html>

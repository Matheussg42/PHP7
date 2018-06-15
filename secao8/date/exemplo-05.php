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
            $dt = new DateTime();
            
            $periodo = new DateInterval("P15D");
            echo $dt->format("d/m/Y H:i:s");
            
            $dt->add($periodo);

            echo "<br>";
            echo $dt->format("d/m/Y H:i:s")
        ?>
    </body>
</html>

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
        $empresa = "Hcode";
        echo $empresa . "<br>";
        
        $empresa = str_replace("o", "0", $empresa);
        echo $empresa . "<br>";
        $empresa = str_replace("e", "3", $empresa);
        echo $empresa;
        
        ?>
    </body>
</html>

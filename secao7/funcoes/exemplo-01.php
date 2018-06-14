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
            function ola(){
             return "Olá Mundo!<br>";   
            }
            
            echo ola();
            $frase = ola();
            
            echo strlen($frase);
        ?>
    </body>
</html>

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
            function ola($texto= "Mundo!", $periodo="Bom Dia!"){
             return "Olá {$texto}, {$periodo} <br>";   
            }
            
            echo ola("Mundo", "bom dia!");
            echo ola("", "boa noite!");
            echo ola("Glaucio", "boa Tarde!");
            echo ola("João", "");
        ?>
    </body>
</html>

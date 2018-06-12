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
        $nome = "Teste <br>";

        function teste(){
            global $nome;
            echo $nome;
        }
        
        function teste2(){
            $nome = "Matheus";
            echo $nome . " agora no teste2()";
        }
        
        teste();
        teste2();
        ?>
    </body>
</html>

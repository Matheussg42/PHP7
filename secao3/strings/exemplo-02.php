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
        $nome = "joao rangel";
        
        $nome = strtoupper($nome);
        echo $nome;
        echo "<br>";
        
        $nome = strtolower($nome);
        echo $nome;
        echo "<br>";
        
        $nome = ucfirst($nome);
        echo $nome;
        echo "<br>";
        
        $nome = ucwords($nome);
        echo $nome;
        ?>
    </body>
</html>

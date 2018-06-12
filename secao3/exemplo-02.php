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
        $nome = "Matheus";
        $sobrenome = "Santos";
        
        $nomeCompleto = $nome . " " . $sobrenome;
        
        echo $nomeCompleto;
        
        exit;
        
        echo $nome;
        echo "<br />";
        
        unset($nome);
        
        if(isset($nome)){
            echo $nome;
        }
        
        ?>
    </body>
</html>

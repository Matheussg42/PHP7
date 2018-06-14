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
        $qualASuaIdade = 25;
        
        $idadeCrianca = 12;
        $idadeMaior = 18;
        $idadeMelhor = 65;
        
        if($qualASuaIdade < $idadeCrianca){
            echo "Criança";
        }elseif ($qualASuaIdade < $idadeMaior) {
            echo "Adolecente";
        }elseif ($qualASuaIdade < $idadeMelhor ) {
            echo "Adulto";
        }else{
            echo "Idoso";
        }
        
        echo "<br>";
        
        echo ($qualASuaIdade < $idadeMaior)? "Menor de Idade":"Maior de Idade";
        
        ?>
    </body>
</html>

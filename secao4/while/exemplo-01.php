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
        $condicao = true;
        
        while ($condicao){
            $numero = rand(1, 10);
            
            if($numero === 3){
                echo "TRES!!!";
                $condicao = false;
            }else{
                echo $numero . ", ";
            }
        }
        
        ?>
    </body>
</html>

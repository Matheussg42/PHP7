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
        
        $pessoa = array(
            'nome' => 'João',
            'idade' => 20
        );

        foreach ($pessoa as &$value){
            if(gettype($value) === 'integer') $value += 10;
            
            echo $value . "<br>";
        }

        print_r($pessoa);
        
        ?>
    </body>
</html>

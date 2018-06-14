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
        
        $pessoas = array();
        
        array_push($pessoas, array(
           'nome'=>'Matheus',
            'idade'=>24
        ));
        
        array_push($pessoas, array(
           'nome'=>'Teste',
            'idade'=>17
        ));
        
        
        echo json_encode($pessoas);
        
        ?>
    </body>
</html>

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
        
        $json = '[{"nome":"Matheus","idade":24},{"nome":"Teste","idade":17}]';
        
        $data = json_decode($json, true);
        
        var_dump($data);
        
        ?>
    </body>
</html>

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

        function ola() {

            $argumentos = func_get_args();
            return $argumentos;
        }

        var_dump(ola("Olá,","Bom dia!", "Tudo bem?"));
        ?>
    </body>
</html>

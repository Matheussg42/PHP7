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
            setlocale(LC_ALL, "pt_BR", "pt_br.utf-8", "portuguese");
            
            echo ucwords(strftime("%A %B")) ;
        ?>
    </body>
</html>

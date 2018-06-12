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
        $nome = (int) $_GET("a");

//        $ip = $_SERVER["REMOTE_ADDR"];
        $ip = $_SERVER["SCRIPT_NAME"];

        echo $ip;
        ?>
    </body>
</html>

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
        
        require_once './config.php';
        
        $_SESSION["nome"] = "Hcode";
        
        if(isset($_SESSION["nome"])){
            echo "Sessão!";
        }
        ?>
    </body>
</html>

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
        require_once ('./config.php');
        
        use Cliente\Cadastro;
        
        $cad = new Cadastro();
        
        $cad->setNome("Matheus");
        $cad->setEmail("matheus@email.com");
        $cad->setSenha("123456");
        
        $cad->registrarVenda();
        
        ?>
    </body>
</html>

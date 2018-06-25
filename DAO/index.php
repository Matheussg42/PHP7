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
        require_once ("./config.php");

//        $sql = new Sql();
//        $usuarios = $sql->select("SELECT * FROM tb_usuarios");
//        
//        echo json_encode($usuarios);
        
        //Carrega um usuário
        //$root = new Usuario();
        //$root->loadById(3);
        //echo $root;

        //Carrega uma lista de usuários
        //$lista = Usuario::getList();
        //echo json_encode($lista);
        
        //Carrega uma lista de usuários buscando pelo Login
        //$search = Usuario::search('jo');
        //echo json_encode($search);
        
        //CARREGA UM USUÁRIO USANDO O LOGIN E A SENHA
        $usuario = new Usuario();
        $usuario->login("root", "!@#$%123");
        echo $usuario
        ?>
    </body>
</html>

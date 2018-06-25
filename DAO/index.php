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
        
        //CARREGA UM USUÁRIO
        //$root = new Usuario();
        //$root->loadById(3);
        //echo $root;

        //CARREGA UMA LISTA DE USUÁRIOS
        //$lista = Usuario::getList();
        //echo json_encode($lista);
        
        //CARREGA UMA LISTA DE USUÁRIOS BUSCANDO PELO LOGIN
        //$search = Usuario::search('jo');
        //echo json_encode($search);
        
        //CARREGA UM USUÁRIO USANDO O LOGIN E A SENHA
        //$usuario = new Usuario();
        //$usuario->login("root", "!@#$%123");
        //echo $usuario
        
        //CRIANDO UM NOVO USUÁRIO
        //$aluno = new Usuario("aluno", "@lun0");
        //$aluno->insert();
        //echo $aluno;
        
        //ALTERAR UM USUÁRIO
        //$usuario = new Usuario();
        //$usuario->loadById(5);
        //$usuario->update("professor", "!@#$%¨&*");
        //echo $usuario;
        
        $usuario = new Usuario();
        $usuario->loadById(5);
        $usuario->delete();
        echo $usuario;
        ?>
    </body>
</html>

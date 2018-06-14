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
        
        echo session_save_path();
        echo "<br>";
        var_dump(session_status());
        echo "<br>";
        
        switch (session_status()){
            case PHP_SESSION_DISABLED:
                echo "As sessões estão desabilitadas.";
                break;
            
            case PHP_SESSION_NONE:
                echo "As sessões estão habilitadas, mas nenhuma existe.";
                break;
            
            case PHP_SESSION_ACTIVE:
                echo "As sessões estão habilitadas, e uma sessão existe.";
                break;
            
        }
        ?>
    </body>
</html>

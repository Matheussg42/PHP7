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

        <form>
            <input type="text" name="nome">
            <input type="date" name="nascimento">
            <input type="submit" value="OK!">
        </form>

        <?php
        if (isset($_GET)) {

            foreach ($_GET as $key => $value) {

                echo "O <i>name</i> do campo é: <b>{$key}</b> <br>";
                echo "O <i>value</i> do campo é: <b>{$value}</b>";
                echo "<hr>";
            }
        }
        ?>
    </body>
</html>

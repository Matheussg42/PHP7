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
        <select>
            <?php
            for ($i = date('Y'); $i >= date('Y') - 30; $i--) {

                echo "<option value='{$i}'>{$i}</option>";
            }
            ?>
        </select>
    </body>
</html>

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
        $meses = array(
            "Janeiro", "Fevereiro", "Março",
            "Abril", "Maio", "Junho",
            "Julho", "Agosto", "Setembro",
            "Outubro", "Novembro", "Dezembro"
        );

        $atual = date('m');

        foreach ($meses as $index => $mes) {
            $index = $index + 1;

            if ($atual == $index) {
                $efeito = "style='font-weight: bold;'";
            } else {
                $efeito = '';
            }

            echo "<p $efeito>O indíce é: {$index} <br>";
            echo "O Mês é: {$mes} </p>";
            echo "-----------------------------";
        }
        ?>
    </body>
</html>

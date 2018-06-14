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
//        $diaDaSemana = date("w");
        $diaDaSemana = 8;

        switch ($diaDaSemana) {
            
            case 0:
                echo "Domingo";
                break;
            
            case 1:
                echo "Segunda-feira";
                break;
            
            case 2:
                echo "Terça-feira";
                break;
            
            case 3:
                echo "Quarta-feira";
                break;
            
            case 4:
                echo "Quinta-feira";
                break;
            
            case 5:
                echo "Sexta-feira";
                break;
            
            case 6:
                echo "Sábado";
                break;
            default:
                echo "Data inválida";
                break;
        }
        ?>
    </body>
</html>

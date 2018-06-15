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
        $hierarquia = array(
            array(
                'nome_cargo' => 'CEO',
                'subordinados' => array(
                    array(
                        'nome_cargo' => 'Diretor Comercial',
                        'subordinados' => array(
                            array(
                                'nome_cargo' => 'Gerente de Vendas',
                                'subordinados' => array(
                                    array(
                                        'nome_cargo' => 'Funcionário',
                                    )
                                )
                            )
                        )
                    ),
                    array(
                        'nome_cargo' => 'Diretor Financeiro',
                        'subordinados' => array(
                            array(
                                'nome_cargo' => 'Gerente de Contas a Pagar',
                                'subordinados' => array(
                                    array(
                                        'nome_cargo' => 'Supervisor de Pagamentos',
                                        'subordinados' => array(
                                            array(
                                                'nome_cargo' => 'Funcionário',
                                            )
                                        )
                                    )
                                )
                            ),
                            array(
                                'nome_cargo' => 'Gerente de Compras',
                                'subordinados' => array(
                                    array(
                                        'nome_cargo' => 'Supervisor de Suprimentos',
                                        'subordinados' => array(
                                            array(
                                                'nome_cargo' => 'Funcionário',
                                            )
                                        )
                                    )
                                )
                            ),
                        )
                    ),
                )
            )
        );

        function exibe($cargos) {
            $html = '<ul>';

            foreach ($cargos as $cargo) {
                $html .= "<li>";
                $html .= $cargo['nome_cargo'];
                if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
                    $html .= exibe($cargo['subordinados']);
                }

                $html .= "</li>";
            }
            $html .= "</ul>";
            return $html;
            
        }
        
        echo exibe($hierarquia);
        ?>
    </body>
</html>

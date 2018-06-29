<?php

require_once ("./vendor/autoload.php");

$app = new \Slim\Slim();

$app->get('/', function(){
//    echo "Home Page";
    echo json_encode(array(
        'nome'=> "Matheus S. Gomes",
        'date'=> date("d/m/Y H:i:s")
    ));
});

$app->get('/hello/:name', function ($name) {
    echo "Hello, " . $name;
});
$app->run();
?>

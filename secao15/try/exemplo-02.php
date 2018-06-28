<?php

function trataNome($name) {
    if (!$name) {
        throw new Exception("Houve um erro", 400);
    }
    
    echo ucfirst($name) . "<br>";
}

try {
    trataNome("Matheus");
    trataNome("");
} catch (Exception $e) {
    echo $e->getMessage();
} finally{
    echo "<br>Executou o bloco Try!";
}
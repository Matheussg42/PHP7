<?php

class Pessoa{
    
    public $nome = "Teste";
    protected $idade = 30;
    private $senha = "123456";
    
    public function verDados(){
        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";
    }
    
}

$objeto = new Pessoa();

//echo $objeto->idade . "<br>";

$objeto->verDados();
<?php
class Cadastro {
    
    private $nome;
    private $email;
    private $senha;
    
    function getNome():string {
        return $this->nome;
    }
    
    function setNome($nome) {
        $this->nome = $nome;
    }

    function getEmail(): string {
        return $this->email;
    }

    function setEmail($email) {
        $this->email = $email;
    }
    
    function getSenha(): string {
        return $this->senha;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    public function __toString() {
        return json_encode(array(
            "nome"=> $this->getNome(),
            "email"=> $this->getEmail(),
            "senha"=> $this->getSenha()
        ));
    }

    
}

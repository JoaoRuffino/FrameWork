<?php
    class Pessoa{
    private $nome;
    private $email;
    private $idade;
    private $fone;

    public function __construct($nome, $email, $idade, $fone){
        $this->nome = $nome;
        $this->email = $email;
        $this->idade = $idade;
        $this->fone = $fone;
    }
    
    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function setIdade($idade){
        $this->idade = $idade;
    }

    public function getFone(){
        return $this->fone;
    }

    public function setFone($fone){
        $this->fone = $fone;
    }
    
}
?>
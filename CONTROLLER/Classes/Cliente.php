<?php

require_once("User.php");

class Cliente extends User{
    public $nomeCompleto;
    public $dataNascimento;
    public $telefone;
    public $cpf;
    public $endereco;
    public $situacao;

    function Cliente(){
        $this->nomeCompleto = "";
        $this->dataNascimento = "";
        $this->email = "";
        $this->telefone = "";
        $this->cpf = "";
        $this->endereco = "";
        $this->situacao = "";
        echo "cliente";
    }

    function getNomeCompleto(){
        return $this->nomeCompleto;
    }

    function getDataNascimento(){
        return $this->dataNascimento;
    }

    function getEmail(){
        return $this->email;
    }

    function getTelefone(){
        return $this->telefone;
    }

    function getCPF(){
        return $this->cpf;
    }

    function getEndereco(){
        return $this->endereco;
    }
    
    function getSituacao(){
        return $this->situacao; 
    }

}
?>
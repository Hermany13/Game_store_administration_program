<?php

class Funcionario {
    public $nomeCompleto;
    public $dataNascimento;
    public $email;
    public $telefone;
    public $cpf;
    public $endereco;

    function Funcionario(){
        $this->nomeCompleto = "";
        $this->dataNascimento = "";
        $this->email = "";
        $this->telefone = "";
        $this->cpf = "";
        $this->endereco = "";
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
}
?>
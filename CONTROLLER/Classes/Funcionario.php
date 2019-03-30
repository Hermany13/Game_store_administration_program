<?php

require("User.php");
require("Caixa.php");
require("Movimentacao");
require("Cliente.php");

class Funcionario {
    private $nomeCompleto;
    private $dataNascimento;
    private $email;
    private $telefone;
    private $cpf;
    private $endereco;
    private $foto;

    function Funcionario($userCod_user){
        $this->nomeCompleto = "";
        $this->dataNascimento = "";
        $this->email = "";
        $this->telefone = "";
        $this->cpf = "";
        $this->endereco = "";
        $this->foto = "";
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

    function getFoto(){
        return $this->foto;
    }

    function RegistrarCliente(){
        //cadastro
        
    }

    function RealizarVenda(){
        
    }

    function VerCaixa(){
        
    }
}
?>
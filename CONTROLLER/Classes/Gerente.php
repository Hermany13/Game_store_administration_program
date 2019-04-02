<?php

require_once("User.php");

class Gerente extends User{
    public $nomeCompleto;
    public $dataNascimento;
    public $email;
    public $telefone;
    
    function __construct(){

        $this->nomeCompleto = "";
        $this->dataNascimento = "";
        $this->email = "";
        $this->telefone = "";
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
}


?>
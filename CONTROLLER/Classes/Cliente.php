<<<<<<< HEAD:CONTROLLER/Classes/Cliente.php
<?php

require("user.php");

class Cliente{
    private $nomeCompleto;
    private $dataNascimento;
    private $email;
    private $telefone;
    private $cpf;
    private $endereco;
    private $foto;
    private $situacao;

    function Cliente($userCod_user){
        $this->nomeCompleto = "";
        $this->dataNascimento = "";
        $this->email = "";
        $this->telefone = "";
        $this->cpf = "";
        $this->endereco = "";
        $this->foto = "";
        $this->situacao = "";
        
    function Encomendar(){
        require("Produto.php");
        require("Caixa.php");
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
//situacao do cliente, se ele está valido*
    function getSituacao(){
        return $this->situacao; 
    }

}

=======
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

>>>>>>> upstremb/master:CONTROLLER/Classes/Cliente.php
?>
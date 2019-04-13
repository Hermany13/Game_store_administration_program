<?php

require("User.php");

class Gerente extends User{
    public $nomeCompleto;
    public $dataNascimento;
    public $email;
    public $telefone;
    public $foto;//Vamos tirar a foto
    //caminho da foto

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

    function getFoto(){
        return $this->foto;
    }


    //pequenas mudanças aqui tbm
//    function verCaixa(){
//        require("Caixa.php");
//    }
//
//    function verEstoque(){
//        require("Estoque.php");
//        //tela de estoque (Hermany)
//        header("Location: Estoque.php");
//    }
//
//    function CadastrarLoja(){
//        //dados da loja
//        require("Produto.php");
//    }
//
//    function RegistrarFuncionario(){
//        //cadastro
//        require("Funcionario.php");
//    }
}


?>
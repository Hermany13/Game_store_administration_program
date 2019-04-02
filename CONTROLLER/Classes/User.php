<?php
//include(): Tenta incluir uma página. Caso de algum erro, o script retorna um warning (aviso) e prossegue com a execução do script.
//Require(): Tenta incluir uma página. Caso de algum erro, o script retorna um fatal error e aborta a execução do script.
//include_once() e require_once(): Idênticas as suas funções simples, porém se o arquivo referenciado 
//já foi incluso na página anteriormente, a função retorna ‘false’ e o arquivo não é incluido.

//Inclue a classe:
//require("../../MODEL/PHP files/DAOLogin.php");

// classe usuario, dentro dela estão as variaveis privadas;

class User{

    public $Email;
    public $Password;
    public $Niuser;

//function é função (obvio), sendo um função ela tem um corpo, 
//esse corpo é composto por chaves, a função que leva 
// o nome da classe é um método contrutor
// ctrl + : comentario

    //function __construct(){
        //LoginCheck();

        //$this->Email = $_SESSION['user'];
        //$this->Password = $_SESSION['password'];
        //$this->Niuser = $_SESSION['ni_user'];
    //}

    function getEmail(){
        return $this->Email;
    }

    function getPassword(){
        return $this->Password;
    }

    function getN_user(){
        return $this->Niuser;
    }

// verificação

    function LoginCheck(){
        if (!isset($_SESSION)) {
            session_start();
        }

        if (!$_SESSION['email']) {
            header('Location: ../../index.php');
            exit();
        }

    }

    //niveis de acesso

    // 0 = Cliente
    // 1 = Funcionário
    // 2 = Gerente

    function NiCheck(){
        if (isset($_SESSION['NiUser']) && $_SESSION['NiUser'] == 0) {
            header("Location: ");
        }

        if (isset($_SESSION['NiUser']) && $_SESSION['NiUser'] == 1) {
            header("Location: ");
        } 

        if (isset($_SESSION['NiUser']) && $_SESSION['NiUser'] == 2) {
            header("Location: ");
        }

    }
}

?>
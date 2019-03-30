<?php
session_start();
//include(): Tenta incluir uma página. Caso de algum erro, o script retorna um warning (aviso) e prossegue com a execução do script.
//Require(): Tenta incluir uma página. Caso de algum erro, o script retorna um fatal error e aborta a execução do script.
//include_once() e require_once(): Idênticas as suas funções simples, porém se o arquivo referenciado 
//já foi incluso na página anteriormente, a função retorna ‘false’ e o arquivo não é incluido. 

require("conn.php");

// classe usuario, dentro dela estão as variaveis privadas;

class User{
    private $userName;
    private $userPassword;
    private $userCod_user;
    private $userNiuser;

//function é função (obvio), sendo um função ela tem um corpo, 
//esse corpo é composto por chaves, a função que leva 
// o nome da classe é um método contrutor
// ctrl + : comentario

    function User($userCod_user){
        $this->userName = "";
        $this->userPassword = "";
        $this->userCod_user = "";
        $this->userNiuser = "";

        LoginCheck();

    }
    function Iniciar_Sessao(){
        $_SESSION['username'] = $this->userName;
        $_SESSION['Password'] = $this->userPassword;
        $_SESSION['cod'] = $this->userCod_user;
        $_SESSION['NiUser'] = $this->userNiuser;

    }

    function getName(){
        return $this->userName;
    }

    function getPassword(){
        return $this->userPassword;
    }

    function getCod_user(){
        return $this->userCod_user;
    }

    function getN_user(){
        return $this->userNiuser;
    }
    
// verificação
    function LoginCheck(){
        if (!isset($_SESSION)){
            session_start();
        }
    
        if (!$_SESSION['usuario']){
            header('Location: TelaDeLogin.php');
            exit();
    }
    

}

?>
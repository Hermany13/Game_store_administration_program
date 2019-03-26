<?php

require("Gerente.php");

class Config{
    private $nomeLoja;
    private $logo;
    private $endereco;
    private $corPrincipal;
    private $cnpj;
    private $inscricaoEstadual;
    private $taxaDesconto;

    function Config(){
        $this->nomeLoja = "";
        $this->logo = "";
        $this->endereco = "";
        $this->corPrincipal = "";
        $this->cnpj = "";
        $this->inscricaoEstadual = "";
        $this->taxaDesconto = "";
    }

    function getNomeLoja(){
        return $this->nomeLoja;
    }

    function getLogo(){
        return $this->logo;
    }

    function getEndereco(){
        return $this->endereco;
    }

    function getCorPrincipal(){
        return $this->corPrincipal;
    }

    function getCnpj(){
        return $this->cnpj;
    }
    //emitir nota fiscal
    function getInscricaoEstadual(){
        return $this->inscricaoEstadual;
    }
    //taxa de descinto automatica.
    function getTaxaDesconto(){
        return $this->taxaDesconto;
    }
    // 
}

?>
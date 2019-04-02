<?php

require_once("Gerente.php");

class Config{
    public $nomeLoja;
    public $endereco;
    public $cnpj;
    public $inscricaoEstadual;
    public $taxaDesconto;

    function Config(){
        $this->nomeLoja = "";
        $this->endereco = "";
        $this->cnpj = "";
        $this->inscricaoEstadual = "";
        $this->taxaDesconto = "";
    }

    function getNomeLoja(){
        return $this->nomeLoja;
    }
    function getEndereco(){
        return $this->endereco;
    }

    function getCnpj(){
        return $this->cnpj;
    }
    //emitir nota fiscal
    function getInscricaoEstadual(){
        return $this->inscricaoEstadual;
    }
    //taxa de desconto automatica.
    function getTaxaDesconto(){
        return $this->taxaDesconto;
    }
}
?>
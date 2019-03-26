<?php

require("Caixa.php");

//a ordem é o carrinho
//ordem de pedido

class Ordens{
    private $cod_orden;
    private $cod_caixa;
    //
    private $tipo;
    //
    private $situacao;
    private $desconto;


    function Ordens($cod_caixa){
        $this->cod_orden = "";
        $this->cod_caixa = "";
        $this->tipo = "";
        $this->situacao = "";
        $this->desconto = "";
        //$this->        
    }

    function getCod_Orden(){
        return $this->cod_orden;
    }

    function getCod_caixa(){
        return $this->cod_caixa;
    }

    function getTipo(){
        return $this->tipo;
    }

    function getSituacao(){
        return $this->situacao;
    }

    function getDesconto(){
        return $this->desconto;
    }

    function setCod_Orden(){
        return $this->cod_orden;
    }

    function setCod_caixa(){
        return $this->cod_caixa;  
    }

    function setTipo(){
        return $this->tipo;
    }

    function setSituacao(){
        return $this->situacao;
    }

    function setDesconto(){
        return $this->desconto;
    }

    function CriarDetalhe(){
        
    }
}

?>
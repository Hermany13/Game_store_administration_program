<?php

class Movimento_S{
    public $data;
    public $operacao;
    public $valorP;
    public $valorM;
    public $cod_prod;
    public $observacao;

    function Movimento_S(){
        $this->data = "";
        $this->operacao = "";
        $this->valorP = "";
        $this->valorM = "";
        $this->cod_prod = "";
        $this->observacao = "";
    }

    function getData(){
        return $this->data;
    }

    function getOperacao(){
        return $this->operacao;
    }

    function getValorP(){
        return $this->valorP;
    }

    function getValorM(){
        return $this->valorM;
    }

    function getCod_prod(){
        return $this->cod_prod;
    }

    function getObservacao(){
        return $this->observacao;
    } 

}

?>
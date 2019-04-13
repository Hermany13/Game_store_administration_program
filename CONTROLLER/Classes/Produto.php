<?php

class Produto{
    public $cod_prod;
    public $codigoBarra;
    public $nome;
    public $valorCusto;
    public $valorVenda;
    //venda ou aluguel
    public $tipoComercio;
    public $dataLancamento;
    public $estado;
    public $genero;
    public $plataforma;

    function Produto(){
        // vai entrar uma função do Fábio
        $this->cod_prod = "";
        $this->codigoBarra = "";
        $this->nome = "";
        $this->valorCusto = "";
        $this->valorVenda = "";
        //alugar ou vender
        $this->tipoComercio = "";
        $this->cod_user = "";
        //data de lançamento do produto, após um ano o produto recebe desconto.
        $this->dataLancamento = "";
        //disponivel ou indisponivel
        $this->estado = "";
        //aventura, ação, terror...
        $this->genero = "";
        //plataforma de console ou dvd;
        $this->plataforma = "";
    }

    function getCodigoBarra(){
        return $this->codigoBarra;
    }

    function getNome(){
        return $this->nome;
    }

    function getValorCusto(){
        return $this->valorCusto;
    }

    function getValorVenda(){
        return $this->valorVenda;
    }

    function getTipoComercio(){
        return $this->tipoComercio;
    }

    function getDataLancamento(){
        return $this->dataLancamento;
    }

    function getSituacao(){
        return $this->estado;
    }

    function getGenero(){
        return $this->genero;

    }

    function getPlataforma(){
        return $this->plataforma;

    }
}
?>
<?php

require("Estoque.php");

class Produto{
    private $cod_prod;
    private $codigoBarra;
    private $nome;
    private $valorCusto;
    private $valorVenda;
    //venda ou aluguel
    private $tipoComercio;
    private $cod_user;
    private $dataLancamento;
    private $situacao;
    private $genero;
    private $plataforma;
    private $foto;

    function Produto($cod_prod){
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
        $this->situacao = "";
        //aventura, ação, terror...
        $this->genero = "";
        //plataforma de console ou dvd;
        $this->plataforma = "";
        $this->foto = "";
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

    // tipo de comercio = se está alugando ou comprando/vendendo
    function getTipoComercio(){
        return $this->tipoComercio;
    }

    function getCod_user(){
        return $this->$cod_user;
    }

    function getDataLancamento(){
        return $this->dataLancamento;
    }

    function getSituacao(){
        return $this->situacao;
    }

    function getGenero(){
        return $this->genero;

    }

    function getPlataforma(){
        return $this->plataforma;

    }
    
    function getFoto(){
        return $this->foto;

    }
}
?>
<?php

require("Gerente.php");
require("Produto.php");


class Estoque{
    private $data;
    private $operecao;
    private $cod_user;
    private $cod_caixa;
    private $cod_prod;
    private $quantidade;

    function Estoque(){
        $this->data = "";
        //vai pegar o produto e somar, subtrair ou editar
        $this->operecao = "";
        $this->cod_user = "";
        $this->cod_caixa = "";
        $this->cod_prod = "";
        $this->quantidade = "";
    }

    function adicionarProduto(){
        //cadastro
        $AdicionarProdutos = mysql_query("insert into produtos values(null,'$this->data','$this->operacao', '$this->cod_caixa','$this->cod_prod','$this->quantidade')");
    }

    function removerProduto(){

    }

    function editarProduto(){

    }

}

?>
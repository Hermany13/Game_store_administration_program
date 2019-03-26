<?php

require("Ordens.php");

//onde guarda a informação do produto.

class O_detalhes{
    private $dataPedido;
    private $dataEntrega;
    private $cod_ordem;
    private $cod_prod;
    private $quantidade;
    private $valor;
    //metodo se é alugar ou comprar.
    private $metodo;

    function O_detalhes($cod_user){
        $this->dataPedido = "";
        $this->dataEntrega = "";
        $this->cod_ordem = "";
        $this->cod_prod = "";
        $this->quantidade = "";
        $this->valor = "";
        $this->metodo = "";

        //salva pedido
        function fecharDetalhe(){

        }

        function setDataPedido(){
            return $this->dataPedido;
        }

        function setDataEntrega(){
            return $this->dataEntrega;
        }

        function setCod_ordem(){
            return $this->cod_ordem;
        }

        function setCod_prod(){
            return $this->cod_prod;
        }

        function setQuantidade(){
            return $this->quantidade;
        }

        function setValor(){
            return $this->valor;
        }

        function setMetodo(){
            return $this->metodo;
        }
}


?>
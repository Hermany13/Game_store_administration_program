<?php

function impListaProdutos($caminho){

    require_once($caminho);

    $prod = new DAOProdutos();

    $prod->readsProdutos();

}
?>
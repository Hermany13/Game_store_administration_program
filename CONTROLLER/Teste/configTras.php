<?php

include_once ("Config.php");

$loja=  new Config();

$loja->nomeLoja = $_POST['inpNomeLoja'];
$loja->endereco = $_POST['inpEndereco'];
$loja->cnpj = $_POST['inpCnpj'];
$loja->inscricaoEstadual = $_POST['inpInscricaoEstadual'];
$loja->taxaDescontoA= $_POST['inpTaxaDescontoA'];
$loja->taxaDescontoFJ= $_POST['inpTaxaDescontoA'];

$loja->Salvar();
?>
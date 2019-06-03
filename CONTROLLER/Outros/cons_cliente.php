<?php
include ("../Classes/Cliente.php");
include ("../../MODEL/PHP files/DAOCadastroGeral.php");

$email;

$email = $_GET["email"];

$c = new Cliente();
$cg = new DAOCadastroGeral();

$c->Email = $email;
$cg->classe = $c;

$cg->carregar();

$cg->readUser();

echo "FIM :/";

?>
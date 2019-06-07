<?php
include ("../Classes/Cliente.php");
include ("../../MODEL/PHP files/DAOCadastroGeral.php");

$email;

$email = $_GET["email"];

$cg = new DAOCadastroGeral();

$cg->Email = $email;

$cg->carregar();

$cg->readUser();

echo "FIM :/";

function impdados()
{

}

?>
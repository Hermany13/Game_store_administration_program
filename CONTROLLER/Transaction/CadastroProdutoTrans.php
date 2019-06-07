<?php

session_start();

//importa a conexão e a validação do cadastro

include_once("../../MODEL/PHP files/DAOLogin.php");
include_once("../../MODEL/PHP files/DAOProdutos.php");
include_once("../Classes/Produto.php");

//instacia a conexao

$cone = new DAOProdutos();

//pega as variaveis do html

$cod_prod = mysqli_real_escape_string($cone->cono, trim($_POST['cod_prod']));
$codigoBarra = mysqli_real_escape_string($cone->cono, trim($_POST['codigoBarra']));
$nome = mysqli_real_escape_string($cone->cono, trim($_POST['nome']));
$valorCusto = mysqli_real_escape_string($cone->cono, trim($_POST['valorCusto']));
$valorVenda = mysqli_real_escape_string($cone->cono, trim($_POST['valorVenda']));
$tipoComercio = mysqli_real_escape_string($cone->cono, trim($_POST['tipoComercio']));
$dataLancamento = mysqli_real_escape_string($cone->cono, trim($_POST['dataLancamento']));
$estado = mysqli_real_escape_string($cone->cono, trim ($_POST['estado']));
$genero = mysqli_real_escape_string($cone->cono, trim($_POST['genero']));
$plataforma = mysqli_real_escape_string($cone->cono, trim($_POST['plataforma'])); 
$email = "".$_SESSION['email'];

//instacia a classe

$cadastroProduto = new Produto();

//envia os dados para classe;

$cadastroProduto->cod_prod = $cod_prod;
$cadastroProduto->codigoBarra = $codigoBarra;
$cadastroProduto->nome = $nome;
$cadastroProduto->valorCusto = $valorCusto;
$cadastroProduto->valorVenda = $valorVenda;
$cadastroProduto->tipoComercio = $tipoComercio;
$cadastroProduto->dataLancamento = $dataLancamento;
$cadastroProduto->estado = $estado;
$cadastroProduto->genero = $genero;
$cadastroProduto->plataforma = $plataforma;
$cadastroProduto->Email = $email;

//pega email do gerente

//$emailG = new DAOLogin();
//$emailG->Email = $cadastroProduto;

//envia os dados para classe onde vai ser cadastrado os dados

$cone->classe = $cadastroProduto;
$cone->carregar();
$cone->create();

header("Location: ../../VIEW/painelGerente.php");
?>
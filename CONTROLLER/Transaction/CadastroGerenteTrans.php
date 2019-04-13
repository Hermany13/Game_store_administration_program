<?php

//importa a conexão e a validação do cadastro

include_once("../../MODEL/PHP files/DAOCadastroGeral.php");
include_once("../Classes/Gerente.php");

//instacia a conexao

$cone = new DAOCadastroGeral();

//pega as variaveis do html

$nome = mysqli_real_escape_string($cone->cono, trim($_POST['nomeCompleto']));
$email = mysqli_real_escape_string($cone->cono, trim($_POST['email']));
$senha = mysqli_real_escape_string($cone->cono, trim($_POST['senha']));
$nivel = 2;
$telefone = mysqli_real_escape_string($cone->cono, trim($_POST['telefone']));
$dataNascimento = mysqli_real_escape_string($cone->cono, trim($_POST['dataNascimento']));
$CPF = "";
$endereco = "";
$situacao = "";

//instacia a classe

$cadastroGerente = new Gerente();

//envia os dados para classe;
$cadastroGerente->Email = $email;
$cadastroGerente->Password = $senha;
$cadastroGerente->Niuser = $nivel;

$cadastroGerente->nomeCompleto = $nome;
$cadastroGerente->telefone = $telefone;
$cadastroGerente->dataNascimento = $dataNascimento;
$cadastroGerente->cpf = $CPF;
$cadastroGerente->endereco = $endereco;
$cadastroGerente->situacao = $situacao;

//checa se o usuario existe

$cone->Email = $cadastroGerente->Email; 

if ($cone->checkUserName() == false){
   $cone->classe = $cadastroGerente;
   $cone->carregar();
   $cone->createUser();
}
else{
	echo "o usuário já existe!";
}



?>
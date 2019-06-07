<?php

//importa a conexão e a validação do cadastro

include_once("../../MODEL/PHP files/DAOCadastroGeral.php");
include_once("../Classes/Funcionario.php");

//instacia a conexao

$cone = new DAOCadastroGeral();

//pega as variaveis do html

$nome = mysqli_real_escape_string($cone->cono, trim($_POST['nomeCompleto']));
$email = mysqli_real_escape_string($cone->cono, trim($_POST['email']));
$senha = mysqli_real_escape_string($cone->cono, trim($_POST['senha']));
$nivel = 1;
$telefone = mysqli_real_escape_string($cone->cono, trim($_POST['telefone']));
$dataNascimento = mysqli_real_escape_string($cone->cono, trim($_POST['dataNascimento']));
$CPF = mysqli_real_escape_string($cone->cono, trim($_POST['cpf']));
$endereco = mysqli_real_escape_string($cone->cono, trim($_POST['endereco']));
$situacao = "";

//instacia a classe

$cadastroFuncionario = new Funcionario();

//envia os dados para classe;
$cadastroFuncionario->Email = $email;
$cadastroFuncionario->Password = $senha;
$cadastroFuncionario->Niuser = $nivel;

$cadastroFuncionario->nomeCompleto = $nome;
$cadastroFuncionario->telefone = $telefone;
$cadastroFuncionario->dataNascimento = $dataNascimento;
$cadastroFuncionario->cpf = $CPF;
$cadastroFuncionario->endereco = $endereco;
$cadastroFuncionario->situacao = $situacao;

//checa se o usuario existe

$cone->Email = $cadastroFuncionario->Email; 

if ($cone->checkUserName() == false){
   $cone->classe = $cadastroFuncionario;
   $cone->carregar();
   $cone->createUser();

   header("Location: ../../VIEW/painelGerente.php");
}
else{
	echo "o usuário já existe!";
}


?>
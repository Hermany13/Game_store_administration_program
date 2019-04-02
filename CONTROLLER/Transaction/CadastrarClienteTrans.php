<?php

//importa a conexão e a validação do cadastro

include_once("../../MODEL/PHP files/DAOCadastroGeral.php");
include_once("../Classes/Cliente.php");

//instacia a conexao

$cone = new DAOCadastroGeral();

//pega as variaveis do html

$nome = mysqli_real_escape_string($cone->cono, trim($_POST['nomeCompleto']));
$email = mysqli_real_escape_string($cone->cono, trim($_POST['email']));
$senha = "senha"; //mysqli_real_escape_string($log->cono, trim($_POST['senha']));
$nivel = 0;
$telefone = mysqli_real_escape_string($cone->cono, trim($_POST['telefone']));
$dataNascimento = mysqli_real_escape_string($cone->cono, trim($_POST['dataNascimento']));
$CPF = mysqli_real_escape_string($cone->cono, trim($_POST['cpf']));
$endereco = mysqli_real_escape_string($cone->cono, trim($_POST['endereco']));
$situacao = mysqli_real_escape_string($cone->cono, trim($_POST['situacao']));

//instacia a classe

$cadastroCliente = new Cliente();

//envia os dados para classe;
$cadastroCliente->Email = $email;
$cadastroCliente->Password = $senha;
$cadastroCliente->Niuser = $nivel;

$cadastroCliente->nomeCompleto = $nome;
$cadastroCliente->telefone = $telefone;
$cadastroCliente->dataNascimento = $dataNascimento;
$cadastroCliente->cpf = $CPF;
$cadastroCliente->endereco = $endereco;
$cadastroCliente->situacao = $situacao;

//checa se o usuario existe

$cone->Email = $cadastroCliente->Email; 

if ($cone->checkUserName() == false){
   $cone->classe = $cadastroCliente;
   $cone->carregar();
   $cone->createUser();
}
else{
	echo "se fodeu :/";
}

//redirecionamento para página de funcionário ou gerente através da checagem do nivel de acesso
            //será implementado no futuro

//if($ni == 1){
    //header("");
    //exit();
//}
//else if ($ni == 2){
    //header("");
    //exit();
//}
?>
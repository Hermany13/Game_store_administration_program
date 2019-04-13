<?php
//Importa as conexao;

//Pegar as variaveis do html

//Tem que fazer a paradinha contra ataque sql, que tirar as virgulas e pontos que atrapalha o banco de dados...
$email = $_POST['inpUser'];
$senha = $_POST['inpPass'];

//Instancia a Classe, ou deveria ao menos...

$daoLogin = new DAOLogin();

//Manda os dados para a classe;

$daoLogin->Email = $email;
$daoLogin->Password = $senha;

//Checa se a senha e o usuario estão corretos:

$valido = $daoLogin->checkUserPass();

if($valido==true){
    echo "OMG FUNCIonou <strong>If L24 validade da senha true</strong>";

    //verifica o nivel de acesso do usuario;
    $nivelDoUsuario = $daoLogin->readUser();

    _instanciaSessao($nivelDoUsuario);

    _redirecionar($nivelDoUsuario['ni_user']);
}

else
{
    echo "UEEEE Se chegou aqui tbm é bom <strong>If L24 validade da senha false</strong>";
    //Erro no login ou senha
}

function _redirecionar($ni)
{
    //redireciona para a paginal inicial que cada um pode acessar!
    if($ni == 0)
    {
        header("");
    }
    else if($ni == 1)
    {
        header("");
    }
    else if ($ni == 2)
    {
        header("");
    }
}

function _instanciaSessao($dadosUsuario)
{
    //Instancia os dados do usuario na sesson
    session_start();

    $_session['email'] = $dadosUsuario['user'];
    $_session['password'] = $dadosUsuario['password'];
    $_session['ni_user'] = $dadosUsuario['ni_user'];

}
?>
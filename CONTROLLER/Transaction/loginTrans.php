<?php
//Importa as conexao;
require_once("../../MODEL/PHP files/DAOLogin.php");
//Pegar as variaveis do html

//Tem que fazer a paradinha contra ataque sql, que tirar as virgulas e pontos que atrapalha o banco de dados...
$email = $_POST['user_email'];
$senha = $_POST['user_password'];

echo "<br>Email: <strong>".$email."</strong><br>";
echo "<br>senha: ".$senha."<br>";

//Instancia a Classe, ou deveria ao menos...
$daoLogin = new DAOLogin();

//Manda os dados para a classe;

$daoLogin->Email = $email;
$daoLogin->Password = $senha;

//Checa se a senha e o usuario estão corretos:
$valido = $daoLogin->checkUserPass();


//aqui ele para
if($valido==true){
    //aqui não entra
    echo "<strong>If L24 validade da senha true</strong>";

    //verifica o nivel de acesso do usuario;
    $nivelDoUsuario = $daoLogin->readUserNi();

    _instanciaSessao($email,$senha, $nivelDoUsuario);

    _redirecionar($nivelDoUsuario);
}
else
{
    echo "<strong>If L24 validade da senha false</strong>";
    //Erro no login ou senha
    header("Location: ../../VIEW/loginErro.html");
}

function _redirecionar($nivelDoUsuario)
{
    //redireciona para a paginal inicial que cada um pode acessar!
    if($nivelDoUsuario == 0)
    {
        header("Location: ../../VIEW/painelCliente.php");
    }
    else if($nivelDoUsuario == 1)
    {
        header("Location: ../../VIEW/painelFuncionario.php");
    }
    else if ($nivelDoUsuario == 2)
    {
        header("Location: ../../VIEW/painelGerente.php");
    }
}

function _instanciaSessao($e,$p, $dadosUsuario)
{
    //Instancia os dados do usuario na sesson
    session_start();

    $_SESSION['email'] = $e;
    $_SESSION['password'] = $p;
    $_SESSION['ni_user'] = $dadosUsuario;

}
?>
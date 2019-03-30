<?php 
//Importa as conexao;
require_once ("../../MODEL/PHP files/DAOLogin.php");

//Pegar as variaveis do html

//Tem que fazer a paradinha contra ataque sql, que tirar as virgulas e pontos que atrapalha o banco de dados...
$user = $_POST['inpUser'];
$senha = $_POST['inpPass'];

//Instancia a Classe, ou deveria ao menos...

$daoLogin = new DAOLogin();

//Manda os dados para a classe;

$daoLogin->User = $user;
$daoLogin->Password = $senha;

//Checa se a senha e o usuario estão corretos:

$valido = $daoLogin->checkUserName();

if($valido==true)
{
    echo "OMG FUNCIonou <If L24 validade da senha true>";
    //Instancia a sessao com os dados do usuario
}
else
{
    echo "UEEEE Se chegou aqui tbm é bom <If L24 validade da senha false>";
    //Erro no login ou senha
}

?>
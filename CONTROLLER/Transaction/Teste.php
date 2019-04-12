<?php

include_once("../Classes/User.php");
include_once("../../MODEL/PHP files/DAOLogin.php");

$log = new DAOLogin();

$email = mysqli_real_escape_string($log->cono, trim($_POST['email']));
$senha = mysqli_real_escape_string($log->cono, trim($_POST['senha']));
$nivel = mysqli_real_escape_string($log->cono, trim($_POST['nivel']));;

$usuario = new User();

$usuario->Email = $email;
$usuario->Senha = $senha;
$usuario->Niuser = $nivel;

$log->classe = $usuario;

$log->carregar();

echo $log->checkNBD();

echo $log->checkUserName();

echo $log->addUser();

?>
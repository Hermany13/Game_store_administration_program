<?php
class conn {
define ('HOST', 'localhost');
define ('USUARIO', 'root');
define ('SENHA', '');
define ('DB', 'login');
// or die, emite uma mensagem de erro.
//mysqli_connect faz a conexao com o banco
$_conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ("Não foi possível conectar");
}
?>
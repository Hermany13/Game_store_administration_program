<?php
class conn {
private $host = "localhost";
private $bd = "BancoDeDados";
private $user = "usuario";
private $pass = "senha";
// Cria a conexao
$_conexao = mysqli_connect($servername, $username, $password, $database);
// Checa a conexao
if (!$conn) {
    die("A conexao falhou. ERRO: " . mysqli_connect_error());
}
echo "Conexão feita com sucesso!";

//Muda o valor da variavel HOST
function setHost($H) {
    $this->host = $H;
}

//Pega o valor da variavel HOST
function getHost() {
    return $this->host;
}

//Muda o valor da variavel BD
function setBD($BD) {
    $this->bd = $BD;
}

//Pega o valor da variavel BD
function getBD() {
    return $this->bd;
}

//Muda o valor da variavel USER
function setUser($U) {
    $this->user = $U;
}

//Pega o valor da variavel USER
function getUser() {
    return $this->user;
}

//Muda o valor da variavel PASS
function setPass($P) {
    $this->pass = $P;
}

//Pega o valor da variavel PASS
function getPass() {
    return $this->pass;
}
}
?>
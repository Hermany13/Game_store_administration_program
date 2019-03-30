<?php


//define ('USUARIO', 'root');
//define ('SENHA', '');
//define ('DB', 'gamestore');
//// or die, emite uma mensagem de erro.
////mysqli_connect faz a conexao com o banco
//$_conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ("Não foi possível conectar");

class Conn
{

    //define as variaveis para a conexao...
    private $HOST = "localhost";
    private $USUARIO = "root";
    private $SENHA = "";
    private $BD = "gamestore";

    public $conexao;

    public function __construct() {
        //Metodo construtor.
        $this->conexao();
    }

    private function conexao() {
        // Conecta-se ao banco de dados MySQL
        $mysqli = new mysqli($this->HOST,$this->USUARIO,$this->SENHA,$this->BD);

        $this->conexao = $mysqli;
        // Caso algo tenha dado errado, exibe uma mensagem de erro
        if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
//        echo "fconexao l27 conn <br>";
    }
}


?>
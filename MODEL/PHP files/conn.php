<?php


class Conn
{

    //define as variaveis para a conexao...
    private $HOST = "localhost";
    private $USUARIO = "root";
    private $SENHA = "";
    private $BD = "gamestore";


    public $query;
    public $result;
    public $sql;


    public $cono;


    public function __construct() {
        //Metodo construtor.
        $this->conexao();
    }

    private function conexao() {
        // Conecta-se ao banco de dados MySQL
        $this->cono = new mysqli($this->HOST,$this->USUARIO,$this->SENHA,$this->BD);

        //Fiz uma alteracao aqui mas né...

        // Caso algo tenha dado errado, exibe uma mensagem de erro
        if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
//        echo "fconexao l27 conn <br>";
    }
}
?>
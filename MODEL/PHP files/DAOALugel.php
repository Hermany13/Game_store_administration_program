<?php

require_once("conn.php");

class DAOAluguel extends conn{

    private $ID;
    private $dataPedido;
    private $dataDevolucao;
    private $cod_prod;
    private $email;
    private $situacao;

    public $classe;
    
    public function carregar()
    {
        //pega os dados da classe e instancia eles.
        $this->ID = $this->classe->ID;
        $this->dataPedido = $this->classe->dataPedido;
        $this->dataDevolucao = $this->classe->dataDevolucao;
        $this->cod_prod = $this->classe->cod_prod;
        $this->cod_prod = $this->classe->fun_email;
        $this->cod_prod = $this->classe->situacao;
    }

    //CRIA ALUGUEL
    public function create(){
        $this->sql = sprintf("INSERT INTO `aluguel` (dataPedido, dataDevolucao, cod_prod, email, situacao) VALUES ('$this->dataPedido', '$this->dataDevolucao', '$this->cod_prod', '$this->email', '$this->situacao')");
        $this->result = $this->cono->query($this->sql);
    }

    //DELETA O ALUGUEL
    public function delete(){
        $this->sql = sprintf("DELETE FROM `aluguel` WHERE `ID` = $this->ID;");
        $this->result = $this->cono->query($this->sql);
    }

    //atualiza todos os dados
    public function update(){
        $this->sql = sprintf("UPDATE `aluguel` SET `dataPedido` = '$this->dataPedido', `dataDevolucao` = '$this->dataDevolucao', `cod_prod` = '$this->cod_prod', `email` = '$this->email', `situacao` = '$this->situacao' WHERE `ID` = '$this->ID'");
        $this->result = $this->cono->query($this->sql);
    }

    //le dados unico usuario
    public function read(){
        $this->sql = sprintf("SELECT * FROM `aluguel` WHERE `ID` = '$this->ID'");
        $this->result = $this->cono->query($this->sql);
        $row = $this->result->fetch_array(MYSQLI_ASSOC);
        return $row;
    }

    //le dados da tabela toda
    public function reads(){
        $this->sql = sprintf("SELECT * FROM `aluguel`");
        $this->result = $this->cono->query($this->sql);
        $row = $this->result->fetch_array(MYSQLI_ASSOC);
        return $row;
    }

    public function devolver($id){
        $this->sql = sprintf("UPDATE `aluguel` SET `situacao` = '1' WHERE `ID` = '$id'");
        $this->result = $this->cono->query($this->sql);
    }
}
?>
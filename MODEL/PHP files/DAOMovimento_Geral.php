<?php

require_once("conn.php");

class DAOMovimento_Geral extends conn{

    private $ID; 
    private $data; 
    private $operacao; 
    private $valorP; 
    private $valorM; 
    private $cod_prod; 
    private $ps; 

    private $sql;
    private $query;
    private $result;

    public $classe;

    public function carregar()
    {
        //pega os dados da classe e instancia eles.
        $this->ID = $this->classe->ID;
        $this->data = $this->classe->data;
        $this->operacao = $this->classe->operacao;
        $this->valorP = $this->classe->valorP;
        $this->valorM = $this->classe->valorM;
        $this->cod_prod = $this->classe->cod_prod;
        $this->ps = $this->classe->ps;
    }

        //CRIA MOVIMENTO
        public function create(){
            $this->sql = sprintf("INSERT INTO `movimento_geral` (data, operacao, valorP, valorM, cod_prod, ps) VALUES ('$this->data', '$this->operacao', '$this->valorP', '$this->valorM', '$this->cod_prod', '$this->ps')");
            $this->result = $this->cono->query($this->sql);
        }

        //DELETA O MOVIMENTO
        public function delete(){
            $this->sql = sprintf("DELETE FROM `movimento_geral` WHERE `ID` = $this->ID;");
            $this->result = $this->cono->query($this->sql);
        }

        //atualiza todos os dados
        public function update(){
            $this->sql = sprintf("UPDATE `movimento_geral` SET `data` = '$this->data', `operacao` = '$this->operacao', `valorP` = '$this->valorP', `valorM` = '$this->valorM', `cod_prod` = '$this->cod_prod', `ps` = '$this->ps' WHERE `ID` = '$this->ID'");
            $this->result = $this->cono->query($this->sql);
        }  
        
        //le dados unico movimento
        public function read(){
            $this->sql = sprintf("SELECT * FROM `movimento_geral` WHERE `ID` = '$this->ID'");
            $this->result = $this->cono->query($this->sql);
            $row = $this->result->fetch_array(MYSQLI_ASSOC);
            return $row;
    }

        //le dados da tabela toda
        public function reads(){
            $this->sql = sprintf("SELECT * FROM `movimento_geral`");
            $this->result = $this->cono->query($this->sql);
            $row = $this->result->fetch_array(MYSQLI_ASSOC);
            return $row;
        }
}
?>
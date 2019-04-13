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
    private $fun_email;
    private $cli_email;

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
        $this->fun_email = $this->classe->fun_email;
        $this->cli_email = $this->classe->cli_email;
    }

        //CRIA MOVIMENTO
        public function create(){
            $this->sql = sprintf("INSERT INTO `movimento_geral` (data, operacao, valorP, valorM, cod_prod, ps, fun_email, cli_email) VALUES ('$this->data', '$this->operacao', '$this->valorP', '$this->valorM', '$this->cod_prod', '$this->ps', '$this->fun_email', '$this->cli_email')");
            $this->result = $this->cono->query($this->sql);
        }

        //DELETA O MOVIMENTO
        public function delete(){
            $this->sql = sprintf("DELETE FROM `movimento_geral` WHERE `ID` = $this->ID;");
            $this->result = $this->cono->query($this->sql);
        }

        //atualiza todos os dados
        public function update(){
            $this->sql = sprintf("UPDATE `movimento_geral` SET `data` = '$this->data', `operacao` = '$this->operacao', `valorP` = '$this->valorP', `valorM` = '$this->valorM', `cod_prod` = '$this->cod_prod', `ps` = '$this->ps', `fun_email` = '$this->fun_email', `cli_email` = '$this->cli_email' WHERE `ID` = '$this->ID'");
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

        public function readsData($data){
            $this->sql = sprintf("SELECT * FROM `movimento_geral` WHERE `data` = '$data'");
            $this->result = $this->cono->query($this->sql);
            $row = $this->result->fetch_array(MYSQLI_ASSOC);
            return $row;
        }
        
        public function readsCliente($cli_email){
            $this->sql = sprintf("SELECT * FROM `movimento_geral` WHERE `cli_email` = '$cli_email'");
            $this->result = $this->cono->query($this->sql);
            $row = $this->result->fetch_array(MYSQLI_ASSOC);
            return $row;
        }

        public function readsClienteData($data, $cli_email){
            $this->sql = sprintf("SELECT * FROM `movimento_geral` WHERE `cli_email` = '$cli_email' AND `data` = '$data'");
            $this->result = $this->cono->query($this->sql);
            $row = $this->result->fetch_array(MYSQLI_ASSOC);
            return $row;
        }

        public function readsProduto($cod_prod){
            $this->sql = sprintf("SELECT * FROM `movimento_geral` WHERE `cod_prod` = '$cod_prod'");
            $this->result = $this->cono->query($this->sql);
            $row = $this->result->fetch_array(MYSQLI_ASSOC);
            return $row;
        }

        public function readsProdutoData($cod_prod, $data){
            $this->sql = sprintf("SELECT * FROM `movimento_geral` WHERE `cod_prod` = '$cod_prod' AND `data` = '$data'");
            $this->result = $this->cono->query($this->sql);
            $row = $this->result->fetch_array(MYSQLI_ASSOC);
            return $row;
        }

        public function readsFuncionario($fun_email){
            $this->sql = sprintf("SELECT * FROM `movimento_geral` WHERE `fun_email` = '$fun_email'");
            $this->result = $this->cono->query($this->sql);
            $row = $this->result->fetch_array(MYSQLI_ASSOC);
            return $row;
        }

        public function readsProdutoData($cod_prod, $data){
            $this->sql = sprintf("SELECT * FROM `movimento_geral` WHERE `cod_prod` = '$cod_prod' AND `data` = '$data'");
            $this->result = $this->cono->query($this->sql);
            $row = $this->result->fetch_array(MYSQLI_ASSOC);
            return $row;
        }

        public function readsFuncionarioData($fun_email, $data){
            $this->sql = sprintf("SELECT * FROM `movimento_geral` WHERE `fun_email` = '$fun_email' AND `data` = '$data'");
            $this->result = $this->cono->query($this->sql);
            $row = $this->result->fetch_array(MYSQLI_ASSOC);
            return $row;
        }

        public function readsDatas($dataI, $dataF){
            $this->sql = sprintf("SELECT * FROM `movimento_geral` WHERE `data` BETWEEN '$dataI' AND '$dataF");
            $this->result = $this->cono->query($this->sql);
            $row = $this->result->fetch_array(MYSQLI_ASSOC);
            return $row;
        }
}
?>
<?php

require_once("conn.php");

class DAOProdutos extends conn{

    private $ID;
    private $cod_prod;
    private $cod_barra;
    private $nome;
    private $valor_custo;
    private $valor_venda;
    private $tipo_comercio;
    private $gen_email;
    private $data_lancamento;
    private $estado;
    private $genero;
    private $plataforma;

    private $sql;
    private $query;
    private $result;

    public $classe;

    public function carregar()
    {
        //pega os dados da classe e instancia eles.
        $this->ID = $this->classe->ID;
        $this->cod_prod = $this->classe->cod_prod;
        $this->cod_barra = $this->classe->cod_barra;
        $this->nome = $this->classe->nome;
        $this->valor_custo = $this->classe->valor_custo;
        $this->valor_venda = $this->classe->valor_venda;
        $this->tipo_comercio = $this->classe->tipo_comercio;
        $this->gen_email = $this->classe->gen_email;
        $this->data_lancamento = $this->classe->data_lancamento;
        $this->estado = $this->classe->estado;
        $this->genero = $this->classe->genero;
        $this->plataforma = $this->classe->plataforma;
    }

        //CRIA MOVIMENTO
        public function create(){
            $this->sql = sprintf("INSERT INTO `produtos` (cod_prod, cod_barra, nome, valor_custo, valor_venda, tipo_comercio, gen_email, data_lancamento, estado, genero, plataforma) VALUES ('$this->cod_prod', '$this->cod_barra', '$this->nome', '$this->valor_custo', '$this->valor_venda', '$this->tipo_comercio', '$this->gen_email', '$this->data_lancamento', '$this->estado', '$this->genero', '$this->plataforma')");
            $this->result = $this->cono->query($this->sql);
        }

        //DELETA O MOVIMENTO
        public function delete(){
            $this->sql = sprintf("DELETE FROM `produtos` WHERE `ID` = $this->ID;");
            $this->result = $this->cono->query($this->sql);
        }

        //atualiza todos os dados
        public function update(){
            $this->sql = sprintf("UPDATE `produtos` SET `cod_prod` = '$this->cod_prod', `cod_barra` = '$this->cod_barra', `nome` = '$this->nome', `valor_custo` = '$this->valor_custo', `valor_venda` = '$this->valor_venda', `tipo_comercio` = '$this->tipo_comercio', `gen_email` = '$this->gen_email', `data_lancamento` = '$this->data_lancamento', `estado` = '$this->estado', `genero` = '$this->genero', `plataforma` = '$this->plataforma' WHERE `ID` = '$this->ID'");
            $this->result = $this->cono->query($this->sql);
        }  
        
        //le dados unico movimento
        public function read(){
            $this->sql = sprintf("SELECT * FROM `produtos` WHERE `ID` = '$this->ID'");
            $this->result = $this->cono->query($this->sql);
            $row = $this->result->fetch_array(MYSQLI_ASSOC);
            return $row;
    }

        //le dados da tabela toda
        public function reads(){
            $this->sql = sprintf("SELECT * FROM `produtos`");
            $this->result = $this->cono->query($this->sql);
            $row = $this->result->fetch_array(MYSQLI_ASSOC);
            return $row;
        }
}
?>
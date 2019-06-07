<?php

require_once("conn.php");

class DAOProdutos extends conn{

    public $cod_prod;
    public $codigoBarra;
    public $nome;
    public $valorCusto;
    public $valorVenda;
    public $tipoComercio;
    public $Email;
    public $dataLancamento;
    public $estado;
    public $genero;
    public $plataforma;

    public $classe;

    public function carregar()
    {
        //pega os dados da classe e instancia eles.
        
        $this->cod_prod = $this->classe->cod_prod;
        $this->codigoBarra = $this->classe->codigoBarra;
        $this->nome = $this->classe->nome;
        $this->valorCusto = $this->classe->valorCusto;
        $this->valorVenda = $this->classe->valorVenda;
        $this->tipoComercio = $this->classe->tipoComercio;
        $this->Email = $this->classe->Email;
        $this->dataLancamento = $this->classe->dataLancamento;
        $this->estado = $this->classe->estado;
        $this->genero = $this->classe->genero;
        $this->plataforma = $this->classe->plataforma;
    }

        //CRIA MOVIMENTO
        public function create(){
            $this->sql = sprintf("INSERT INTO `produtos` (cod_prod, cod_barra, nome, valor_custo, valor_venda, tipo_comercio, gen_email, data_lancamento, estado, genero, plataforma) VALUES ('$this->cod_prod', '$this->codigoBarra', '$this->nome', '$this->valorCusto', '$this->valorVenda', '$this->tipoComercio', '$this->Email', '$this->dataLancamento', '$this->estado', '$this->genero', '$this->plataforma')");
            $this->result = $this->cono->query($this->sql);
            echo "".$this->sql;
            echo"<br>cadastrou brother";
        }

        //DELETA O MOVIMENTO
        public function delete(){
            $this->sql = sprintf("DELETE FROM `produtos` WHERE `cod_prod` = $this->cod_prod;");
            $this->result = $this->cono->query($this->sql);
        }

        //atualiza todos os dados
        public function update(){
            $this->sql = sprintf("UPDATE `produtos` SET `cod_prod` = '$this->cod_prod', `cod_barra` = '$this->cod_barra', `nome` = '$this->nome', `valor_custo` = '$this->valor_custo', `valor_venda` = '$this->valor_venda', `tipo_comercio` = '$this->tipo_comercio', `gen_email` = '$this->gen_email', `data_lancamento` = '$this->data_lancamento', `estado` = '$this->estado', `genero` = '$this->genero', `plataforma` = '$this->plataforma' WHERE `ID` = '$this->ID'");
            $this->result = $this->cono->query($this->sql);
        }  
        
        //le dados unico movimento
        public function read(){
            $this->sql = sprintf("SELECT * FROM `produtos` WHERE `cod_prod` = '$this->cod_prod'");
            $this->result = $this->cono->query($this->sql);
            return $this->result;
            
    }

        //le dados da tabela toda
        public function readsProdutos(){
            $this->sql = sprintf("SELECT * FROM `produtos`");
            $this->result = $this->cono->query($this->sql);
            
//            while ($i = $this->result->fetch_assoc()) {
//
//                echo "<tr>";
//
//                echo "<td>" .$i["cod_prod"]. "</td>";
//                echo "<td>" .$i["nome"]. "</td>";
//                echo "<td>" .$i["valor_venda"]. "</td>";
//                echo "<td>" ."quant</td>";
//                echo "<td class='actions'>
//                <a class='btn btn-success btn-xs'>Adicionar</a>
//                </td>";
//
//                echo "</tr>";
//            }

            return $this->result;
        }

        public function checkCod_prod($cod_prod){
            $this->sql = sprintf("SELECT `cod_prod` FROM `produtos` WHERE `cod_prod` = '$cod_prod';");
    
            $this->result = $this->cono->query($this->sql);
    
            if($this->result->num_rows > 0) {
                return true;
            }else{
                return false;
            }
        }

        public function readsGenero($genero){
            $this->sql = sprintf("SELECT * FROM `produtos` WHERE `genero` = '$genero'");
            $this->result = $this->cono->query($this->sql);
            return $this->result;
        }

        public function readsPlataforma($plataforma){
            $this->sql = sprintf("SELECT * FROM `produtos` WHERE `plataforma` = '$plataforma'");
            $this->result = $this->cono->query($this->sql);
            return $this->result;
        }

        public function readsEstado($estado){
            $this->sql = sprintf("SELECT * FROM `produtos` WHERE `estado` = '$estado'");
            $this->result = $this->cono->query($this->sql);
            return $this->result;
        }

        public function readsDataLacamento($data_lancamento){
            $this->sql = sprintf("SELECT * FROM `produtos` WHERE `data_lancamento` = '$data_lancamento'");
            $this->result = $this->cono->query($this->sql);
            return $this->result;
        }
}
?>
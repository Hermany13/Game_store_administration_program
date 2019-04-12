
<?php

require_once("conn.php");

class DAOPedidoOnline extends conn{

    private $ID; 
    private $cod_prod;
    private $cli_email;
    private $situacao;
    private $data;

    public $classe;

    public function carregar()
    {
        //pega os dados da classe e instancia eles.
        $this->ID = $this->classe->ID;
        $this->cod_prod = $this->classe->cod_prod;
        $this->cli_email = $this->classe->cli_email;
        $this->situacao = $this->classe->situacao;
        $this->data = $this->classe->data;
    }

        //CRIA MOVIMENTO
        public function create(){
            $this->sql = sprintf("INSERT INTO `pedido_online` (cod_prod, cli_email, situacao, data) VALUES ('$this->cod_prod', '$this->cli_email', '$this->situacao', '$this->data')");
            $this->result = $this->cono->query($this->sql);
        }

        //DELETA O MOVIMENTO
        public function delete(){
            $this->sql = sprintf("DELETE FROM `pedido_online` WHERE `ID` = $this->ID;");
            $this->result = $this->cono->query($this->sql);
        }

        //atualiza todos os dados
        public function update(){
            $this->sql = sprintf("UPDATE `pedido_online` SET `cod_prod` = '$this->cod_prod', `cli_email` = '$this->cli_email', `situacao` = '$this->situacao', `data` = '$this->data' WHERE `ID` = '$this->ID'");
            $this->result = $this->cono->query($this->sql);
        }  
        
        //le dados unico movimento
        public function read(){
            $this->sql = sprintf("SELECT * FROM `pedido_online` WHERE `ID` = '$this->ID'");
            $this->result = $this->cono->query($this->sql);
            $row = $this->result->fetch_array(MYSQLI_ASSOC);
            return $row;
    }

        //le dados da tabela toda
        public function reads(){
            $this->sql = sprintf("SELECT * FROM `pedido_online`");
            $this->result = $this->cono->query($this->sql);
            $row = $this->result->fetch_array(MYSQLI_ASSOC);
            return $row;
        }

        //0 = analise
        //1 = finalizado
        //2 = cancelado
        //3 = pronto

        public function finalizar($id){
            $this->sql = sprintf("UPDATE `pedido_online` SET `situacao` = '1' WHERE `ID` = '$id'");
            $this->result = $this->cono->query($this->sql);
        }

        public function cancelar($id){
            $this->sql = sprintf("UPDATE `pedido_online` SET `situacao` = '2' WHERE `ID` = '$id'");
            $this->result = $this->cono->query($this->sql);
        }
}
=======
<?php

require_once("conn.php");

class DAOPedidoOnline extends conn{

    private $ID; 
    private $cod_prod;
    private $cli_email;
    private $situacao;
    private $data;

    private $sql;
    private $query;
    private $result;

    public $classe;

    public function carregar()
    {
        //pega os dados da classe e instancia eles.
        $this->ID = $this->classe->ID;
        $this->cod_prod = $this->classe->cod_prod;
        $this->cli_email = $this->classe->cli_email;
        $this->situacao = $this->classe->situacao;
        $this->data = $this->classe->data;
    }

        //CRIA MOVIMENTO
        public function create(){
            $this->sql = sprintf("INSERT INTO `pedido_online` (cod_prod, cli_email, situacao, data) VALUES ('$this->cod_prod', '$this->cli_email', '$this->situacao', '$this->data')");
            $this->result = $this->cono->query($this->sql);
        }

        //DELETA O MOVIMENTO
        public function delete(){
            $this->sql = sprintf("DELETE FROM `pedido_online` WHERE `ID` = $this->ID;");
            $this->result = $this->cono->query($this->sql);
        }

        //atualiza todos os dados
        public function update(){
            $this->sql = sprintf("UPDATE `pedido_online` SET `cod_prod` = '$this->cod_prod', `cli_email` = '$this->cli_email', `situacao` = '$this->situacao', `data` = '$this->data' WHERE `ID` = '$this->ID'");
            $this->result = $this->cono->query($this->sql);
        }  
        
        //le dados unico movimento
        public function read(){
            $this->sql = sprintf("SELECT * FROM `pedido_online` WHERE `ID` = '$this->ID'");
            $this->result = $this->cono->query($this->sql);
            $row = $this->result->fetch_array(MYSQLI_ASSOC);
            return $row;
    }

        //le dados da tabela toda
        public function reads(){
            $this->sql = sprintf("SELECT * FROM `pedido_online`");
            $this->result = $this->cono->query($this->sql);
            $row = $this->result->fetch_array(MYSQLI_ASSOC);
            return $row;
        }
}

?>
<?php

require_once("conn.php");

class DAOMovimento_Geral extends conn{

    public $ID; 
    public $data; 
    public $operacao; 
    public $valorP; 
    public $valorM; 
    public $cod_prod; 
    public $ps;
    public $fun_email;
    public $cli_email;

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
            return $this->result;
    }

        //le dados da tabela toda
        public function reads(){
            $this->sql = sprintf("SELECT * FROM `movimento_geral`");
            $this->result = $this->cono->query($this->sql);
            return $this->result;
        }

        public function readsData($data){
            $this->sql = sprintf("SELECT * FROM `movimento_geral` WHERE `data` = '$data'");
            $this->result = $this->cono->query($this->sql);
            return $this->result;
        }
        
        public function readsCliente($cli_email){
            $this->sql = sprintf("SELECT * FROM `movimento_geral` WHERE `cli_email` = '$cli_email';");
            $this->result = $this->cono->query($this->sql);

            return $this->result;
        }

        public function readsClienteData($data, $cli_email){
            $this->sql = sprintf("SELECT * FROM `movimento_geral` WHERE `cli_email` = '$cli_email' AND `data` = '$data'");
            $this->result = $this->cono->query($this->sql);
            return $this->result;
        }

        public function readsProduto($cod_prod){
            $this->sql = sprintf("SELECT * FROM `movimento_geral` WHERE `cod_prod` = '$cod_prod'");
            $this->result = $this->cono->query($this->sql);
            return $this->result;
        }

        public function readsProdutoData($cod_prod, $data){
            $this->sql = sprintf("SELECT * FROM `movimento_geral` WHERE `cod_prod` = '$cod_prod' AND `data` = '$data'");
            $this->result = $this->cono->query($this->sql);
            return $this->result;
        }

        public function readsFuncionario($fun_email){
            $this->sql = sprintf("SELECT * FROM `movimento_geral` WHERE `fun_email` = '$fun_email'");
            $this->result = $this->cono->query($this->sql);
            return $this->result;
        }

        public function readsFuncionarioData($fun_email, $data){
            $this->sql = sprintf("SELECT * FROM `movimento_geral` WHERE `fun_email` = '$fun_email' AND `data` = '$data'");
            $this->result = $this->cono->query($this->sql);
            return $this->result;
        }

        public function readsDatas($dataI, $dataF){
            $this->sql = sprintf("SELECT * FROM `movimento_geral` WHERE `data` BETWEEN '$dataI' AND '$dataF");
            $this->result = $this->cono->query($this->sql);
            return $this->result;
        }
        
        public function countItems($codprod){
            $a = 0;
            $b = 0;
            $this->sql = sprintf("SELECT COUNT(*) from movimento_geral WHERE cod_prod = '$codprod' AND operacao = '1'");
            $this->result = $this->cono->query($this->sql);
            while($i = $this->result->fetch_assoc()){
                $a=$i["COUNT(*)"];
            }
            $this->sql = sprintf("SELECT COUNT(*) from movimento_geral WHERE cod_prod = '$codprod' AND operacao = '2'");
            $this->result = $this->cono->query($this->sql);
            while($i = $this->result->fetch_assoc()){
                $b=$i["COUNT(*)"];
            }
            return $a-$b;
        }

        public function getTodoCaixa($inicial){
            $vinicial = $inicial;
            $vfinal = 0;
            $vdocaixa = 0;

            $this->sql = sprintf("SELECT * from `movimento_geral`");
            $this->result = $this->cono->query($this->sql);
            $nlinhas = $this->result->num_rows;

            $this->sql = sprintf("SELECT * from `movimento_geral` LIMIT $vinicial,500");
            $this->result = $this->cono->query($this->sql);
            while($i = $this->result->fetch_assoc()){
                if ($i["operacao"] != "3"){
                    $vinicial = $vinicial + 1;
                }else{
                    break;
                }
            }

            $this->sql = sprintf("SELECT * FROM `movimento_geral` LIMIT $vinicial,500");
            $this->result = $this->cono->query($this->sql);
            while($g = $this->result->fetch_assoc()){
                if ($g["operacao"] != "4"){
                    $vfinal = $vfinal + 1;
                }else{
                    break;
                }
            }
            $vfinal = $vfinal + 1;

            $this->sql = sprintf("SELECT * FROM `movimento_geral` LIMIT $vinicial,$vfinal");
            $this->result = $this->cono->query($this->sql);
            while($h = $this->result->fetch_assoc()){
                if ($h["operacao"] == "2" || $h["operacao"] == "3" || $h["operacao"] == "5"){
                    $vdocaixa = $vdocaixa + $h["valorP"];
                }
                if ($h["operacao"] == "4" || $h["operacao"] == "6"){
                $vdocaixa = $vdocaixa - $h["valorM"];
                }

            }
            echo "<br>Valor do caixa= ".$vdocaixa;
            echo "<br>Numero de linhas= ".$nlinhas;

            $totallinhas = $vinicial + $vfinal;

            echo "<br>Total das var= ".$totallinhas;
            echo "<br>";

            if ($totallinhas != $nlinhas){
                $this->getTodoCaixa($totallinhas);
            }
    }

        public function getTodoCaixaFunc($inicial,$funemail){
        $vinicial = $inicial;
        $vfinal = 0;
        $vdocaixa = 0;

        $this->sql = sprintf("SELECT * from `movimento_geral` WHERE fun_email=$funemail");
        $this->result = $this->cono->query($this->sql);
        $nlinhas = $this->result->num_rows;

        $this->sql = sprintf("SELECT * from `movimento_geral` LIMIT $vinicial,500 WHERE fun_email=$funemail");
        $this->result = $this->cono->query($this->sql);
        while($i = $this->result->fetch_assoc()){
            if ($i["operacao"] != "3"){
                $vinicial = $vinicial + 1;
            }else{
                break;
            }
        }

        $this->sql = sprintf("SELECT * FROM `movimento_geral` LIMIT $vinicial,500 WHERE fun_email=$funemail");
        $this->result = $this->cono->query($this->sql);
        while($g = $this->result->fetch_assoc()){
            if ($g["operacao"] != "4"){
                $vfinal = $vfinal + 1;
            }else{
                break;
            }
        }
        $vfinal = $vfinal + 1;

        $this->sql = sprintf("SELECT * FROM `movimento_geral` LIMIT $vinicial,$vfinal WHERE fun_email=$funemail");
        $this->result = $this->cono->query($this->sql);
        while($h = $this->result->fetch_assoc()){
            if ($h["operacao"] == "2" || $h["operacao"] == "3" || $h["operacao"] == "5"){
                $vdocaixa = $vdocaixa + $h["valorP"];
            }
            if ($h["operacao"] == "4" || $h["operacao"] == "6"){
            $vdocaixa = $vdocaixa - $h["valorM"];
            }

        }
        echo "<br>Valor do caixa= ".$vdocaixa;
        echo "<br>Numero de linhas= ".$nlinhas;

        $totallinhas = $vinicial + $vfinal;

        echo "<br>Total das var= ".$totallinhas;
        echo "<br>";

        if ($totallinhas != $nlinhas){
            $this->getTodoCaixa($totallinhas);
        }
}
}
?>
<?php

require ("conn.php");

class DAOLogin extends Conn{
//Faz a heranca da conexao...

    public $User;
    public $Password;
    public $Cod_user;
    public $Ni_user;

    private $sql;
    private $query;
    private $result;

    //Finaliza a requisicao com o banco de dados, mandando a linha sql
    private function Finalizar()
    {
        try
        //tenta fazer os proximos comandos, caso de erro ele cancela
        {
            //define que o query privado do objeto vai receber a query do objeto conn
            $this->query = $this->conexao->query($this->sql);

            //"manda" para o banco, executa
            $this->result = $this->query;

            //retorna o resultado do banco
            return $this->result;
        }
        catch (Exception $e)
        {
            //em caso de erro:
            echo "Erro Finalizar DAOlogin.php: ".$e;
        }
    }

    //adiciona um usuario no sistema
    public function addUser() {

        $this->sql = sprintf("INSERT INTO 'login' (user, password, cod_user, ni_user) VALUES ('$this->User', '$this->Password', '$this->Cod_user', '$this->Ni_user')");
//        if (mysqli_query($conn, $this->query)) {
//            echo "Adicionado com sucesso!";
//        } else {
//            echo "Erro: ". mysqli_error($conn);
//        }

        $result = $this->Finalizar();
    }

    //consulta o nome do usuario se esta disponivel
    public function checkUserName(){

        $this->sql = sprintf("SELECT `user` FROM `login` WHERE `user` = '$this->User';");

        $result = $this->Finalizar();

        if($result->num_rows > 0) {
            return true;
        }else{
            return false;
        }
    }

    //Vamos tira o codigo de usuario, FOI MAL MOSQUEi ass: MARlon o babaca
    public function checkUserCod(){

        $this->sql =sprintf("SELECT `cod_user` FROM `login` WHERE `cod_user` = '$this->cod_user'");

        $result = $this->Finalizar();

        if($result->num_rows > 0) {
            return true;
        }else{
            return false;
        }
    }

    //Consulta se a senha do usuario esta compativel com o login
    public function checkUserPass(){

        $this->sql ="SELECT * FROM 'login' WHERE 'user'='$this->User' AND 'password'='$this->Password'";

        $result = $this->Finalizar();

//        if (!$result) {
//           echo "ERRO DOALOGIN L72 if !result ";
//            exit();
//        }

        $count = $result->num_rows  ;
        // Se o $user e $password for compativel, o número de linhas será 1
        if($count==1){
            return true;
        } else {
            return false;
        }
    }

    //retorna os dados do usuario
    public function readUser(){

        if ($this->checkUserPass()){

            $this->sql = sprintf("SELECT * FROM `login` WHERE `user` = '$this->User'");

            $result = $this->Finalizar();

            $row = $result->fetch_array(MYSQLI_ASSOC);

            return $row;
        }
        else
            {
            echo "Erro: DOAlogin.php F readUser L99 else";
            return false;
        }
    }

    //muda a senha do usuario
    public function changePass($newpassword){

        if($this->checkUserPass())
        {

        $this->sql = "UPDATE 'login' SET 'password'='$newpassword' WHERE 'user'='$this->User'";

        $result = $this->Finalizar();

        return true;
        }
        else
        {
            echo "Erro: DOAlogin.php FchengePass l114 else";
            return false;
        }

        return false;
    }

    //não vai pode mais mudar, foi mal 2
    public function changeUser($newuser){

        if ($this->checkUserPass())
        {

        $this->sql ="UPDATE 'login' SET 'user'='$newuser' WHERE 'user'='$this->User'";

        $result =$this->Finalizar();

        }
        else
        {
            echo "Erro: DAOlogin f changeUser l149 else";
            return false;
        }

    }

    //deleta o usuario...
    public function deleteUser($deletedCod_user){
        if ($this->checkUserPass())
        {
            $this->sql = sprintf("DELETE FROM `login` WHERE `cod_user` = $deletedCod_user;");

            $result =$this->Finalizar();
        }
        else
        {
            echo "Usuario e senha errados!";
            return false;
        }
    }

    //checa para ver tem registro no banco de dados
    public function checkNBD(){

        $this->sql = sprintf("SELECT * FROM 'login'");

        $result = $this->Finalizar();

        if ($result->num_rows != 0){
            return true;
        }
        return false;
    }
}
?>
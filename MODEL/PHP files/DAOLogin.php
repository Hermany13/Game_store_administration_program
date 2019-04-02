<?php

require_once("conn.php");

class DAOLogin extends Conn{
//Faz a heranca da conexao...

    private $Email;
    private $Password;
    private $Ni_user;

    private $sql;
    private $query;
    private $result;

    public $classe;


    public function carregar()
    {
        //pega os dados da classe e instancia eles.
        $this->Email = $this->classe->Email;
        $this->Password = $this->classe->Password;
        $this->Ni_user = $this->classe->Niuser;
    }

    //não pertence a essa classe

    //adiciona um usuario no sistema
    public function addUser() {

        $this->sql = sprintf("INSERT INTO `login` (user, password, ni_user) VALUES ('$this->Email', '$this->Password', '$this->Ni_user')");
        $this->result = $this->cono->query($this->sql);
    }

    //consulta o nome do usuario se esta disponivel
    public function checkUserName(){

        $his->sql = sprintf("SELECT `user` FROM `login` WHERE `user` = '$this->Email';");

        $result = $this->cono->query($this->sql);

        if($result->num_rows > 0) {
            return true;
        }else{
            return false;
        }
    }

    //Consulta se a senha do usuario esta compativel com o login

    public function checkUserPass(){

        $this->sql ="SELECT * FROM `login` WHERE `user`= '$this->Email' AND `password` = '$this->Password'";

        $result = $this->cono->query($this->sql);

        $count = $result->num_rows ;

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

            $this->sql = sprintf("SELECT * FROM `login` WHERE `user` = '$this->Email'");

            $result = $this->cono->query($this->sql);

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

            $this->sql = "UPDATE `login` SET `password` ='$newpassword' WHERE `email` ='$this->Email'";

                $result = $this->cono->query($this->sql);

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

            $this->sql ="UPDATE `login` SET `user` ='$newuser' WHERE `email` ='$this->Email'";

            $result = $this->cono->query($this->sql);

        }
        else
        {
            echo "Erro: DAOlogin f changeUser l149 else";
            return false;
        }

    }

    //deleta o usuario...
    public function deleteUser($deleted_user){
        if ($this->checkUserPass())
        {
            $this->sql = sprintf("DELETE FROM `login` WHERE `email` = $deleted_user;");

            $result = $this->cono->query($this->sql);
        }
        else
        {
            echo "Usuario e senha errados!";
            return false;
        }
    }

    //checa para ver tem registro no banco de dados
    public function checkNBD(){

        $this->sql = sprintf("SELECT * FROM `login`");

        $result = $this->cono->query($this->sql);

        if ($result->num_rows != 0){
            return true;
        }
            return false;
    }
}
?>

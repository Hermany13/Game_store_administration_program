<?php
require_once("DAOLogin.php");

class DAOCadastroGeral extends DAOLogin{
    
    private $nomeCompleto;
    private $dataNascimento;
    private $email;
    private $telefone;
    private $cpf;
    private $endereco;
    private $situacao;

    private $sql;
    private $query;
    private $result;

    public $classe;

    public function carregar()
    {
        //pega os dados da classe User e instancia eles.
        $this->Email = $this->classe->Email;
        $this->Password = $this->classe->Password;
        $this->Ni_user = $this->classe->Niuser;

        //pega os dados da classe Gerente/Funcionário/Cliente e instancia eles.
        $this->nomeCompleto = $this->classe->nomeCompleto;
        $this->dataNascimento = $this->classe->dataNascimento;
        $this->email = $this->classe->email;
        $this->telefone = $this->classe->telefone;
        $this->cpf = $this->classe->cpf;
        $this->endereco = $this->classe->endereco;
        $this->situacao = $this->classe->situacao;
    }

    public function createUser() {
        $this->sql = sprintf("INSERT INTO `usuarios` (nome, data_nasc, email, telefone, cpf, endereco, situacao) VALUES ('$this->nomeCompleto', '$this->dataNascimento', '$this->email', '$this->telefone', '$this->cpf', '$this->endereco', '$this->situacao')");

        $this->result = $this->cono->query($this->sql);
    }

    public function deleteUser(){
        $this->sql = sprintf("DELETE FROM `usuarios` WHERE `user` = $this->email;");

        if ($this->result = $this->cono->query($this->sql)){
            echo "Excluido com sucesso!";
        } else {
            echo "Erro: ".mysqli_error($this->cono);
        }
    }

    public function updateUser(){

        $this->sql = sprintf("UPDATE `usuarios` SET nome='$this->nome', data_nasc='$this->dataNascimento', telefone='$this->telefone', cpf='$this->cpf', endereco='$this->endereco', situacao='$this->situacao' WHERE email='$this->email'");

        if ($this->result = $this->cono->query($this->sql)) {
            echo "Editado com sucesso!";
        } else {
            echo "Erro: ".mysqli_error($this->cono);
        }
    }

    public function readUser(){
        $query = sprintf("SELECT * FROM `usuarios` WHERE `user` = '$this->email'");
        $result = mysqli_query($this->cono, $query);
        
        $row = mysqli_fetch_assoc($result);

        if (row == 0){
            return true;
        }
        else{
            return false;
        }
        
    }
}
?>
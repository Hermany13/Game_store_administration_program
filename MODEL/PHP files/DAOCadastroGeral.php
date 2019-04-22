<?php
require_once("DAOLogin.php");

class DAOCadastroGeral extends DAOLogin{
    
    private $nomeCompleto;
    private $dataNascimento;
    private $telefone;
    private $cpf;
    private $endereco;
    private $situacao;

    public function carregar()
    {
        //pega os dados da classe User e instancia eles.
        $this->Email = $this->classe->Email;
        $this->Password = $this->classe->Password;
        $this->Ni_user = $this->classe->Niuser;

        //pega os dados da classe Gerente/Funcionário/Cliente e instancia eles.
        $this->nomeCompleto = $this->classe->nomeCompleto;
        $this->dataNascimento = $this->classe->dataNascimento;
        $this->telefone = $this->classe->telefone;
        $this->cpf = $this->classe->cpf;
        $this->endereco = $this->classe->endereco;
        $this->situacao = $this->classe->situacao;

    }

    public function createUser() { 
        $this->addUser();

        $this->sql = sprintf("INSERT INTO `usuarios` (nome, data_nasc, email, telefone, cpf, endereco, situacao) VALUES ('$this->nomeCompleto', '$this->dataNascimento', '$this->Email', '$this->telefone', '$this->cpf', '$this->endereco', '$this->situacao')");
        echo "<br>sql".$this->sql;
        $this->result = $this->cono->query($this->sql);
        echo "final do negocio";
    }

    public function deleteUser(){
        $this->sql = sprintf("DELETE FROM `usuarios` WHERE `user` = $this->Email;");

        if ($this->result = $this->cono->query($this->sql)){
            echo "Excluido com sucesso!";
        } else {
            echo "Erro: ".mysqli_error($this->cono);
        }
    }

    public function updateUser(){

        $this->sql = sprintf("UPDATE `usuarios` SET nome='$this->nome', data_nasc='$this->dataNascimento', telefone='$this->telefone', cpf='$this->cpf', endereco='$this->endereco', situacao='$this->situacao' WHERE email='$this->Email'");

        if ($this->result = $this->cono->query($this->sql)) {
            echo "Editado com sucesso!";
        } else {
            echo "Erro: ".mysqli_error($this->cono);
        }
    }

    public function readUser(){
        $query = sprintf("SELECT * FROM `usuarios` WHERE `user` = '$this->Email'");
        $this->result = $this->cono->query($this->sql);
        return $this->result;
    }
}
?>
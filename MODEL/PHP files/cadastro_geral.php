<?php
class cadastro_geral{
    require ("conn.php");

    public function createUser($cod_user, $nome, $data_nasc, $email, $telefone, $foto, $cpf, $endereco, $situacao) {
        $query = sprintf("INSERT INTO 'usuarios' (cod_user, nome, data_nasc, email, telefone, foto, cpf, endereco, situacao) VALUES ('$cod_user', '$nome', '$data_nasc', '$email', '$telefone', '$foto', '$cpf', '$endereco', '$situacao')");

        if (mysqli_query($_conexao, $query)) {
            echo "Adicionado com sucesso!";
        } else {
            echo "Erro: " mysqli_error($_conexao);
        }
    }

    public function deleteUser($cod_user){
        $query = sprintf("DELETE FROM `usuarios` WHERE `cod_user` = $cod_user;");

        if (mysqli_query($_conexao, $query)) {
            echo "Excluido com sucesso!";
        } else {
            echo "Erro: "  mysqli_error($_conexao);
        }
    }

    public function updateUser($cod_user, $nome, $data_nasc, $email, $telefone, $foto, $cpf, $endereco, $situacao){

        $query = sprintf("UPDATE 'usuarios' SET nome='$nome', data_nasc='$data_nasc', email='$email', telefone='$telefone', foto='$foto', cpf='$cpf', endereco='$endereco', situacao='$situacao' WHERE cod_user='$cod_user'");

        if (mysqli_query($_conexao, $query)) {
            echo "Editado com sucesso!";
        } else {
            echo "Erro: " mysqli_error($_conexao);
        }
    }

    public function readUser($cod_user){
        $query = sprintf("SELECT * FROM `usuarios` WHERE `cod_user` = '$cod_user'");
        $result = mysqli_query($_conexao, $query);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        return $row;
    }
}
?>
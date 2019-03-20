<?php
class inLogin{
    require ("conn.php");

    public function addUser($user, $password, $cod_user, $ni_user) {
        $query = sprintf("INSERT INTO 'login' (user, password, cod_user, ni_user) VALUES ('$user', '$password', '$cod_user', '$ni_user')");

        if (mysqli_query($_conexao, $query)) {
            echo "Adicionado com sucesso!";
        } else {
            echo "Erro: " mysqli_error($_conexao);
        }
    }

    public function checkUserName($user){
        $query = sprintf("SELECT `user` FROM `login` WHERE `user` = '$user'");

        $result = $_conexao->query($query);
        if($result->num_rows > 0) {
            return true;
        }else{
            return false;
        }
    }
    
    public function checkUserCod($cod_user){
        $query = sprintf("SELECT `cod_user` FROM `login` WHERE `cod_user` = '$cod_user'");

        $result = $_conexao->query($query);
        if($result->num_rows > 0) {
            return true;
        }else{
            return false;
        }
    }

    public function checkUserPass($user, $password){
        $query = "SELECT * FROM 'login' WHERE 'user'='$user' AND 'password'='$password'";

        $result = mysqli_query($_conexao, $query);
        
        if (!$result) {
            printf("Error: %s\n", mysqli_error($_conexao));
            exit();
        }
        $count=mysqli_num_rows($result);
        // Se o $user e $password for compativel, o número de linhas será 1
        if($count==1){
            return true;
        } else {
            return false;
        }
    }

    public function readUser($user, $password){
        if (checkUserPass($user, $password)){
            $query = sprintf("SELECT * FROM `login` WHERE `user` = '$user'");
            $result = mysqli_query($_conexao, $query);
            $row = $result->fetch_array(MYSQLI_ASSOC);
            return $row;
        }else{
            echo "Erro: " mysqli_error($_conexao);
            return false;
        }
    }

    public function changePass($user, $oldpassword, $newpassword){
        checkUserPass($user, $password){
            $query = "UPDATE 'login' SET 'password'='$newpassword' WHERE 'user'='$user'";
        
            if (mysqli_query($_conexao, $query)) {
                echo "Alterado com sucesso!";
                return true;
            } else {
                echo "Erro: " mysqli_error($_conexao);
                return false;
            }
        }else{ 
            echo "Erro: " mysqli_error($_conexao);
            return false;
        }
    }

    public function changeUser($password, $olduser, $newuser){
        if (checkUserPass($user, $password)){
            $query = "UPDATE 'login' SET 'user'='$newuser' WHERE 'user'='$olduser'";
        
            if (mysqli_query($_conexao, $query)) {
                echo "Alterado com sucesso!";
                return true;
            } else {
                echo "Erro: " mysqli_error($_conexao);
                return false;
            }
        } else {
            echo "Erro: " mysqli_error($_conexao);
            return false;
        }

    }

    public function deleteUser($user, $password, $deleteduser){
        if (checkUserPass($user, $password)){
            $query = sprintf("DELETE FROM `login` WHERE `user` = $deleteduser;");

            if (mysqli_query($_conexao, $query)) {
                echo "Excluido com sucesso!";
            } else {
                echo "Erro: " . $sql . "<br>" . mysqli_error($_conexao);
            }
        }else{
            echo "Usuario e senha errados!";
            return false;
        }
    } 

    public function checkNBD(){
        $result = mysqli_query("SELECT * FROM 'login'");
        $rows = mysqli_num_rows($result);
        if ($rows == 0){
            return false;
        }
        return true;
    }
}
?>
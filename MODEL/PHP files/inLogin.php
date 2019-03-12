<?php
class inLogin{
    require ("conn.php");

    public function addUser($user, $password, $cod_user, $ni_user) {
        $query = sprintf("INSERT INTO 'login' (user, password, cod_user, ni_user) VALUES ('$user', '$password', '$cod_user', '$ni_user')");

        if (mysqli_query($_conexao, $query)) {
            echo "Adicionado com sucesso!";
        } else {
            echo "Erro: " . $query . "<br>" . mysqli_error($conn);
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

    //validuser

    public function changePass($user, $oldpassword, $newpassword){
        

        // VALIDAR USUARIO

        $query = "UPDATE 'login' SET 'password'='$newpassword' WHERE 'user'='$user'";
        
        if (mysqli_query($_conexao, $query)) {
            echo "Alterado com sucesso!";
            return true;
        } else {
            echo "Erro: " . $query . "<br>" . mysqli_error($conn);
            return false;
        }
    }

    public function changeUser($password, $olduser, $newuser){
        

        // VALIDAR USUARIO

        $query = "UPDATE 'login' SET 'user'='$newuser' WHERE 'user'='$olduser'";
        
        if (mysqli_query($_conexao, $query)) {
            echo "Alterado com sucesso!";
            return true;
        } else {
            echo "Erro: " . $query . "<br>" . mysqli_error($conn);
            return false;
        }
    }

    //DELETAR USER

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
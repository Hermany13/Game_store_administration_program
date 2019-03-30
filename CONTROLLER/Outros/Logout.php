<?php
session_start();
session_destroy();
header("Location: TelaDeLogin.php");

// destroi a sessão e redireciona para tela de login
?>
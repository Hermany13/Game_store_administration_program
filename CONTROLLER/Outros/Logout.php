<?php

session_start();
session_destroy();
header("Location: ../../index.php");

// destroi a sessão e redireciona para tela de Principal
?>
<?php

session_start();
session_destroy();
header("Location: ../../VIEW/login.html");

// destroi a sessão e redireciona para tela de Principal
?>
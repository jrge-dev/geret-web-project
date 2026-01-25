<?php

session_start();
require_once("../models/autenticacion.php");


$usuario = $_POST['username']; 
$password = $_POST['password'];


$auth = new Autenticar();
$userRegister = $auth->getUser($usuario, $password);


if ($userRegister) {

    $_SESSION['admin'] = $userRegister['username'];
    
    header("Location: ../../pages/antenas.php");
    exit();
} else {
    header("Location: ../../pages/login.php?error=credenciales invalidas");
    exit();
}
?>
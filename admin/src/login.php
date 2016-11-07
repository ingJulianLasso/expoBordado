<?php

session_start();

require 'dataBase.php';

$conn = conectar();

$user = filter_input(INPUT_POST, 'user');
$password = filter_input(INPUT_POST, 'password');

$rsp = validarUsuarioConPassword($conn, $user, $password);

if ($rsp === false) {
    $_SESSION['errors']['usuarioInvalido'] = true;
    header('Location: ../index.php');
    exit();
} else {
    $_SESSION['user']['id'] = $rsp['Id'];
    $_SESSION['user']['name'] = $user;
    header('Location: ../disenadores.php');
}

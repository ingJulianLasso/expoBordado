<?php

session_start();

require 'dataBase.php';

$conn = conectar();
    
    //Capturo los Datos
$user = filter_input(INPUT_POST,'user');
$pasword1 = filter_input(INPUT_POST,'pasword1');
$pasword2 = filter_input(INPUT_POST,'pasword2');

    //Realizo las Validaciones


    //Guardo la Informacion
$rsp = nuevoUsuario($conn, $user, $password1);
    //Mensaje de exito
$_SESSION['success']['nuevoUsuario'] = true;
header('Location:../index.php');

<?php

session_start();

require 'dataBase.php';

$conn = conectar();

//Capturo los Datos
$disenador = filter_input(INPUT_POST, 'disenador');
$pasword1 = filter_input(INPUT_POST, 'pasword1');
$pasword2 = filter_input(INPUT_POST, 'pasword2');

//Realizo las Validaciones
//Guardo la Informacion
$rsp = nuevoDisenador($conn, $disenador);

header('Location: ../disenadores.php');

<?php

session_start();

require 'dataBase.php';

$conn = conectar();

//Capturo los Datos
$disenador = filter_input(INPUT_POST, 'disenador');
$historia = filter_input(INPUT_POST, 'historia');

//Realizo las Validaciones
//Guardo la Informacion
$rsp = nuevoDisenador($conn, $disenador, $historia);

header('Location: ../disenadores.php');

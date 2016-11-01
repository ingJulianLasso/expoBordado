<?php
session_start();
require 'dataBase.php';
$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
$disenador = filter_input(INPUT_POST, 'disenador');
$conn = conectar();
updateDisenador($conn, $id, $disenador);
header('Location: ../disenadores.php');
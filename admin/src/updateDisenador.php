<?php
session_start();
require 'dataBase.php';
$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
$disenador = filter_input(INPUT_POST, 'disenador');
$historia = filter_input(INPUT_POST, 'historia');
$conn = conectar();
updateDisenador($conn, $id, $disenador, $historia);
header('Location: ../disenadores.php');
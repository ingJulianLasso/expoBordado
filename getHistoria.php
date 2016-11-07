<?php

session_start();
require 'admin/src/dataBase.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$conn = conectar();
$disenador = getDisenador($conn, $id);
header('Content-Type: application/json');
echo json_encode($disenador);
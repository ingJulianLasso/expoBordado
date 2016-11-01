<?php
session_start();
require 'dataBase.php';
$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
$disenador_id = filter_input(INPUT_POST, 'disenador', FILTER_VALIDATE_INT);
$descripcion = filter_input(INPUT_POST, 'descripcion');
$valor_social = filter_input(INPUT_POST, 'valor_social');
$precio = filter_input(INPUT_POST, 'precio');

$conn = conectar();
updateItem($conn, $id, $disenador_id, $descripcion, $valor_social, $precio);
header('Location: ../items.php');
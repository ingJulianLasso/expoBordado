<?php

session_start();

require 'dataBase.php';

$conn = conectar();

$descripcion = filter_input(INPUT_POST, 'descripcion');
$valor_social = filter_input(INPUT_POST, 'valor_social');
$precio = filter_input(INPUT_POST, 'precio', FILTER_VALIDATE_INT);
$id_disenador = filter_input(INPUT_POST, 'id_disenador', FILTER_VALIDATE_INT);

insertItem($conn, $descripcion, $valor_social, $precio, $id_disenador);
header('Location: ../items.php');
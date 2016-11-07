<?php

session_start();
require 'dataBase.php';
$conn = conectar();

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$img = filter_input(INPUT_GET, 'img');

unlink('../../uploads/' . $img);
deleteImagen($conn, $id);
header('Location: ../imagenes.php');
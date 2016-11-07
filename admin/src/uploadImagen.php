<?php

session_start();
require 'dataBase.php';
$conn = conectar();

$item_id = filter_input(INPUT_POST, 'item_id', FILTER_VALIDATE_INT);
$imagen = $_FILES['imagen'];

switch ($imagen['type']) {
  case 'image/jpeg':
    $ext = '.jpg';
    break;
  case 'image/gif':
    $ext = '.gif';
    break;
  case 'image/png':
    $ext = '.png';
    break;
}

try {
  $newNameImagen = md5($imagen['name'] . date('D, d M Y H:i:s')) . $ext;
  $moved = move_uploaded_file($imagen['tmp_name'], 'C:/xampp/htdocs/expoBordado/uploads/' . $newNameImagen);
  if (!$moved) {
    throw new Exception("Not uploaded because of error #" . $_FILES["file"]["error"]);
  }
  registrarImagen($conn, $item_id, $newNameImagen);
  header('Location: ../imagenes.php');
} catch (Exception $exc) {
  echo $exc->getMessage();
  exit();
}

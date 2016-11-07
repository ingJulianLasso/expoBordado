<?php
session_start();
require 'dataBase.php';
$conn = conectar();
$data = getAllImagenes($conn);
$x = 0;
foreach ($data as $imagen) {
  $newData[$imagen['item_id']]['item'] = $imagen['item_id'];
  $newData[$imagen['item_id']]['disenador'] = $imagen['nombre'];
  $newData[$imagen['item_id']]['imagen'][$x]['id'] = $imagen['id'];
  $newData[$imagen['item_id']]['imagen'][$x]['posicion'] = $imagen['posicion'];
  $newData[$imagen['item_id']]['imagen'][$x]['nombre'] = $imagen['imagen'];
  $x++;
}
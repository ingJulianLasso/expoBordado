<?php

session_start();
require 'admin/src/dataBase.php';
$conn = conectar();
$disenadores = getAllDisenadores($conn);
$items = getAllItemsForFrontEnd($conn);
$x = 0;
foreach ($items as $item) {
  $data[$item['item_id']]['descripcion'] = $item['descripcion'];
  $data[$item['item_id']]['valor_social'] = $item['valor_social'];
  $data[$item['item_id']]['precio'] = $item['precio'];
  $data[$item['item_id']]['tienda'] = $item['tienda'];
  $data[$item['item_id']]['imagen'][$x] = $item['imagen'];
  $x++;
}
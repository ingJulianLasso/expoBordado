<?php

session_start();

require 'dataBase.php';

$conn = conectar();

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
borrarItem($conn, $id);
header('Location: ../items.php');
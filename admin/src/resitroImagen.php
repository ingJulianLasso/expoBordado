<?php
session_start();
require 'dataBase.php';
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$conn = conectar();
$data = getAllItems($conn);
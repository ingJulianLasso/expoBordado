<?php
session_start();
require 'dataBase.php';
$conn = conectar();
$data = getAllDisenadores($conn);
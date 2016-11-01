<?php

function conectar()
{
    try
    {
       $dsn = 'mysql:host=localhost;dbname=expobordados';
       $username = 'root';
       $password = '';
       $conn = new PDO($dsn,$username,$password);
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       return $conn;
    } catch (Exception $exc) 
    {
        echo $exc->getTraceAsString();
    }
}

function nuevoUsuario(PDO $conn, $user, $password)
{
    try
    {
     $sql = 'INSERT INTO  usuarios (Usuario, Contrasena) VALUES (:user, :password)';
    $params = array(
        ':user' => $user,
        ':password' => md5($password)
    );
    $stmt = $conn->prepare($sql);
    $stmt->execute($params);
    return true;   
    }
    catch (PDOException $exc)
    {
        echo $exc->getTraceAsString();
    }
}

function validarUsuarioConPassword(PDO $conn, $user, $password)
{
    $sql = 'SELECT Id FROM usuarios WHERE Usuario = :user AND Contrasena = :password';
    $params = array(
        ':user' => $user,
        ':password' => md5($password)
    );
    $stmt = $conn->prepare($sql);
    $stmt->execute($params);
    $rsp = $stmt->fetch(PDO::FETCH_ASSOC);
    if(is_array($rsp) === true and count($rsp) > 0)
    {
        return $rsp;
    }
    else 
    {
        return false;
    }
}


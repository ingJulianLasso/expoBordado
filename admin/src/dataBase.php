<?php

function conectar() {
  try {
    $dsn = 'mysql:host=localhost;dbname=bdexpobordados';
    $username = 'root';
    $password = '';
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
  } catch (Exception $exc) {
    echo $exc->getTraceAsString();
  }
}

function nuevoDisenador(PDO $conn, $disenador) {
  try {
    $sql = 'INSERT INTO disenador (nombre) VALUES (:disenador)';
    $params = array(
        ':disenador' => $disenador
    );
    $stmt = $conn->prepare($sql);
    $stmt->execute($params);
    return true;
  } catch (PDOException $exc) {
    if ($exc->getCode() == 23000) {
      $sql = 'UPDATE disenador SET activo = 1 WHERE nombre = :disenador';
      $params = array(
          ':disenador' => $disenador
      );
      $stmt = $conn->prepare($sql);
      $stmt->execute($params);
      return true;
    } else {
      echo $exc->getTraceAsString();
    }
  }
}

function validarUsuarioConPassword(PDO $conn, $user, $password) {
  $sql = 'SELECT id FROM usuario WHERE usuario = :user AND contrasena = :password';
  $params = array(
      ':user' => $user,
      ':password' => md5($password)
  );
  $stmt = $conn->prepare($sql);
  $stmt->execute($params);
  $rsp = $stmt->fetch(PDO::FETCH_ASSOC);
  if (is_array($rsp) === true and count($rsp) > 0) {
    return $rsp;
  } else {
    return false;
  }
}

function getAllDisenador(PDO $conn) {
  $sql = 'SELECT id, nombre FROM disenador WHERE activo = 1';
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getAllItems(PDO $conn) {
  $sql = 'SELECT disenador.nombre AS disenador, item.id, item.descripcion, item.valor_social, item.precio, item.publicado '
          . 'FROM item, disenador WHERE item.disenador_id = disenador.id AND disenador.activo = 1 AND item.activo = 1 ORDER BY item.created_at DESC';
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getDisenador(PDO $conn, $id) {
  $sql = 'SELECT nombre FROM disenador WHERE activo = 1 AND id = :id';
  $params = array(
      ':id' => $id
  );
  $stmt = $conn->prepare($sql);
  $stmt->execute($params);
  return $stmt->fetch(PDO::FETCH_ASSOC);
}

function updateDisenador(PDO $conn, $id, $disenador) {
  try {
  $sql = 'UPDATE disenador SET nombre = :disenador WHERE id = :id';
  $params = array(
      ':id' => $id,
      ':disenador' => $disenador
  );
  $stmt = $conn->prepare($sql);
  $stmt->execute($params);
  return true;
  } catch (PDOException $exc) {
    if ($exc->getCode() == 23000) {
      echo 'El nombre del diseñador "' . $disenador . '" ya está siendo usado. Si no lo vé en el listado es porque está desactivado y tiene items registrados a su nombre. Para poderlo ver, intente crear el diseñador "' . $disenador . '" para ver la trayectoria de items a su nombre';
      exit();
    }
  }
}

function deleteDisenador(PDO $conn, $id) {
  $sql = 'UPDATE disenador SET activo = 0 WHERE id = :id';
  $params = array(
      ':id' => $id
  );
  $stmt = $conn->prepare($sql);
  $stmt->execute($params);
  return true;
}

function insertItem(PDO $conn, $descripcion, $valor_social, $precio, $id_disenador) {
  $sql = 'INSERT INTO item (descripcion, valor_social, precio, disenador_id) VALUES (:descripcion, :valor_social, :precio, :id_disenador)';
  $params = array(
      ':descripcion' => $descripcion,
      ':valor_social' => $valor_social,
      ':precio' => $precio,
      ':id_disenador' => $id_disenador
  );
  $stmt = $conn->prepare($sql);
  $stmt->execute($params);
  return true;
}

function getAllDisenadores(PDO $conn) {
  $sql = 'SELECT id, nombre FROM disenador WHERE activo = 1 ORDER BY created_at DESC';
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getItem(PDO $conn, $id) {
  $sql = 'SELECT id, disenador_id, descripcion, valor_social, precio, publicado FROM item WHERE id = :id';
  $params = array(
      ':id' => $id
  );
  $stmt = $conn->prepare($sql);
  $stmt->execute($params);
  return $stmt->fetch(PDO::FETCH_ASSOC);
}

function updateItem($conn, $id, $disenador_id, $descripcion, $valor_social, $precio) {
  $sql = 'UPDATE item SET disenador_id = :disenador_id, descripcion = :descripcion, valor_social = :valor_social, precio = :precio WHERE id = :id';
  $params = array(
      ':id' => $id,
      ':disenador_id' => $disenador_id,
      ':descripcion' => $descripcion,
      ':valor_social' => $valor_social,
      ':precio' => $precio
  );
  $stmt = $conn->prepare($sql);
  $stmt->execute($params);
  return true;
}

function publicarItem(PDO $conn, $id) {
  $sql = 'UPDATE item SET publicado = 1 WHERE id = :id';
  $params = array(
      ':id' => $id
  );
  $stmt = $conn->prepare($sql);
  $stmt->execute($params);
  return true;
}

function unPublicarItem(PDO $conn, $id) {
  $sql = 'UPDATE item SET publicado = 0 WHERE id = :id';
  $params = array(
      ':id' => $id
  );
  $stmt = $conn->prepare($sql);
  $stmt->execute($params);
  return true;
}

function borrarItem(PDO $conn, $id) {
  $sql = 'UPDATE item SET activo = 0 WHERE id = :id';
  $params = array(
      ':id' => $id
  );
  $stmt = $conn->prepare($sql);
  $stmt->execute($params);
  return true;
}
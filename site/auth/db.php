<?php

$login = function () use ($conn) {
  $usuario = htmlspecialchars(filter_input(INPUT_POST, 'usuario'), ENT_QUOTES);
  $password = htmlspecialchars(filter_input(INPUT_POST, 'password'), ENT_QUOTES);

  if (is_null($usuario) or is_null($password)) {
    return false;
  }

  $sql = 'SELECT * FROM usuarios WHERE user = ?';

  $stmt = $conn->prepare($sql);
  $stmt->bindParam(1, $usuario, PDO::PARAM_STR);
  $stmt->execute();
  $user = $stmt->fetch(PDO::FETCH_ASSOC);

  if (!$user) {
    return false;
  }

  if (password_verify($password, $user['password'])) {
    unset($user['password']);
    $_SESSION['auth'] = $user;
    return true;
  }

  return false;
};

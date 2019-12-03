<?php

function users_get_data ($redirectOnError) {
  $user = filter_input(INPUT_POST, 'usuario');
  $password = filter_input(INPUT_POST, 'password');

  if (!$user) {
    flash('Informe o campo user', 'error');
    header('location: ' . $redirectOnError);
    die();
  }

  return compact('user', 'password');
}

$users_create = function () use ($conn) {
  $data = users_get_data('/cadastro');

  $sql = "INSERT INTO usuarios (user, password) VALUES (?, ?)";

  if (!($data['password'])) {
    flash('Informe o campo password', 'error');
    header('location: /cadastro');
    die();
  }

  $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

  $stmt = $conn->prepare($sql);
  $stmt->bind_param('ss', $data['user'], $data['password']);
  
  flash('Salvo com sucesso', 'success');
  
  return $stmt->execute();
};
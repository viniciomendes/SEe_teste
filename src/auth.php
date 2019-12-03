<?php

//dados da seção do usuário
function get_user()
{
  return $_SESSION['auth'] ?? null;
}
function auth_protection()
{
  $user = get_user();
  if (!$user and !resolve('/login')) {
    header('Location: /login');
    die();
  }
}

function logout()
{
  unset($_SESSION['auth']);
  flash('Você se desconectou', 'success');
  header('location: /login');
  die();
}

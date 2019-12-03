<?php

include __DIR__ . '/db.php';

if (resolve('/C112245')) {
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $users_create();
    return header('location: /C121450');
  }
  render('site/user/cadastro', 'site');
}

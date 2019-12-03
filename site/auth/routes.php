<?php

require __DIR__ . '/db.php';

if (resolve('/login')) {
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($login()) {
      flash('Autenticado com sucesso', 'success');
      return header('Location: /inicio');
    }
    flash('Dados ivalidos', 'error');
  }
  render('site/auth/login', 'inicio_login');
} elseif (resolve('/login/logout')) {
  logout();
}

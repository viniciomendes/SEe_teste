<?php
session_start();

//Arquivo central da aplicação!
require __DIR__ . '/config.php';
require __DIR__ . '/src/error_handler.php';
require __DIR__ . '/src/resolve-routes.php';
require __DIR__ . '/src/render.php';
require __DIR__ . '/src/connection.php';
require __DIR__ . '/src/flash.php';
require __DIR__ . '/src/auth.php';
require __DIR__ . '/src/filter_rules.php';


//arquivo de controle de entrada da aplicação(a qual no atual desenvolvimento tem apenas 1 entrada(diretamente para o login))
if (resolve('/(.*)')) {
  require __DIR__ . '/site/routes.php';
}

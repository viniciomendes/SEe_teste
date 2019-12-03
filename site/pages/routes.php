<?php

if (resolve('/ficha/ficha_tecnica.*')) {
    include __DIR__ . '/ficha_tecnica/routes.php';
} elseif (resolve('/ficha/ficha_unidade.*')) {
    include __DIR__ . '/ficha_unidade/routes.php';
} else {
    render('site/pages/erro', 'site');
}

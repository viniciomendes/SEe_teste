<?php

include __DIR__ . '/db.php';

if (resolve('/ficha/ficha_tecnica')) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $ficha_create();
        flash('Enviado com sucesso', 'success');
        return header('location: /ficha/ficha_tecnica');
    }
    render('site/pages/ficha/ficha_unidade_equipamento', 'site');
} elseif (resolve('/ficha/ficha_tecnica/finalizadas')) {
    $fichas = $fichas_all();
    render('site/pages/fichas_finalizadas/index', 'site', ['fichas' => $fichas]);
} elseif ($params = resolve('/ficha/ficha_tecnica/finalizadas/(\d+)')) {
    $ficha1 = $ficha_one($params[1]);
    render('site/pages/fichas_finalizadas/view', 'site', ['ficha1' => $ficha1]);
}

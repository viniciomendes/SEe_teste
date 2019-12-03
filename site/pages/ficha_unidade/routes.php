<?php

include __DIR__ . '/db.php';

if (resolve('/ficha/ficha_unidade')) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $ficha_verifica_exist_unidade();
        $fichas_unidade_create_cod();
        $ficha_unidade_create_unidade();
        $ficha_unidade_create_localidade();
        flash('Salvo com sucesso', 'success');
        return header('location: /ficha/ficha_unidade');
    }
    render('site/pages/ficha/ficha_unidade_info', 'site');
} elseif (resolve('/ficha/ficha_unidade/finalizadas')) {
    $unidades = $unidades_infos();
    render('site/pages/unidades/index', 'site', ['unidades' => $unidades]);
} elseif ($params = resolve('/ficha/ficha_unidade/finalizadas/(\d+)')) {
    $info_unidade = $info_uma_unidade($params[1]);
    render('site/pages/unidades/view', 'site', ['info_unidade' => $info_unidade]);
} elseif ($params = resolve('/ficha/ficha_unidade/finalizadas/(\d+)/delete')) {
    $unidade_delete($params[1]);
    flash('Deletado com sucesso', 'success');
    return header('location: /ficha/ficha_unidade/finalizadas');
} elseif ($params = resolve('/ficha/ficha_unidade/finalizadas/(\d+)/editar')) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $edit_unidade($params[1]);
        flash('Salvo com sucesso', 'success');
        return header('location: /ficha/ficha_unidade/finalizadas/' . $params[1]);
    }
    $edit_unidade = $info_uma_unidade($params[1]);
    render('site/pages/unidades/edit', 'site', ['edit_unidades' => $edit_unidade]);
}
<?php

function fichas_unidade_get_data($redirectOnError)
{
    $unidade = htmlspecialchars(filter_input(INPUT_POST, 'unidade'), ENT_QUOTES);
    $cod_unidade = htmlspecialchars(filter_input(INPUT_POST, 'cod_unidade'), ENT_QUOTES);
    $localizacao = htmlspecialchars(filter_input(INPUT_POST, 'localizacao'), ENT_QUOTES);
    $municipio = htmlspecialchars(filter_input(INPUT_POST, 'municipio'), ENT_QUOTES);
    $loc_dif = htmlspecialchars(filter_input(INPUT_POST, 'loc_dif'), ENT_QUOTES);
    $endereco_indigena_rural = htmlspecialchars(filter_input(INPUT_POST, 'endereco_indigena_rural'), ENT_QUOTES);
    $endereco_rua_avenida_br = htmlspecialchars(filter_input(INPUT_POST, 'endereco_rua_avenida_br'), ENT_QUOTES);
    $endereco_bairro = htmlspecialchars(filter_input(INPUT_POST, 'endereco_bairro'), ENT_QUOTES);
    $endereco_numero = htmlspecialchars(filter_input(INPUT_POST, 'endereco_numero'), ENT_QUOTES);
    $dep_admin = htmlspecialchars(filter_input(INPUT_POST, 'dep_admin'), ENT_QUOTES);
    $responsavel_unidade = htmlspecialchars(filter_input(INPUT_POST, 'responsavel_unidade'), ENT_QUOTES);
    $cel_responsavel_unidade = htmlspecialchars(filter_input(INPUT_POST, 'cel_responsavel_unidade'), ENT_QUOTES);

    filter_rules_ficha('/ficha/ficha_unidade');

    return compact('unidade', 'cod_unidade', 'localizacao', 'municipio', 'loc_dif', 'endereco_indigena_rural', 'endereco_rua_avenida_br', 'endereco_bairro', 'endereco_numero', 'dep_admin', 'responsavel_unidade', 'cel_responsavel_unidade');
}

//Esta função verifica caso uma escola já tenha sido cadastrada no sistema
$ficha_verifica_exist_unidade = function () use ($conn) {
    $unidade = htmlspecialchars(filter_input(INPUT_POST, 'unidade'), ENT_QUOTES);
    $cod_unidade = htmlspecialchars(filter_input(INPUT_POST, 'cod_unidade'), ENT_QUOTES);

    $verifica_cod_result = $conn->query("SELECT unidades_codigos FROM codigos WHERE unidades_codigos = '$cod_unidade' ");
    $verifica_cod = $verifica_cod_result->fetch();
    // $verifica_cod = $verifica_cod_result->fetch_array()[0];


    $verifica_nome_unidade_result = $conn->query("SELECT nome_unidade FROM unidade WHERE nome_unidade = '$unidade' ");
    $verifica_nome_unidade = $verifica_nome_unidade_result->fetch(PDO::FETCH_ASSOC);
    // $verifica_nome_unidade = $verifica_nome_unidade_result->fetch_assoc();

    if ($cod_unidade != 0) {
        if (($verifica_nome_unidade > 0) || ($verifica_cod > 0)) {
            flash('Unidade já está cadastrada!', 'error');
            header('location: /ficha/ficha_unidade');
            die();
        }
    }
};

$fichas_unidade_create_cod = function () use ($conn) {
    $data = fichas_unidade_get_data('/ficha/ficha_unidade');

    $sql = 'INSERT INTO `codigos` (unidades_codigos) VALUES (?)';

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(1, $data['cod_unidade'], PDO::PARAM_INT);
    return $stmt->execute();
};

$ficha_unidade_create_unidade = function () use ($conn) {
    $data = fichas_unidade_get_data('/ficha/ficha_unidade');

    $sql_unid = "INSERT INTO unidade (nome_unidade, localizacao_unidade, dep_admin_unidade, resp_unidade, num_resp_unidade, codigo_unidade) VALUE (?, ?, ?, ?, ?, ?)";
    $stmt_unid = $conn->prepare($sql_unid);
    // $stmt_unid->bind_param('ssssii', $data['unidade'], $data['localizacao'], $data['dep_admin'], $data['responsavel_unidade'], $data['cel_responsavel_unidade'], $data['cod_unidade']);
    $stmt_unid->bindParam(1, $data['unidade'], PDO::PARAM_STR);
    $stmt_unid->bindParam(2, $data['localizacao'], PDO::PARAM_STR);
    $stmt_unid->bindParam(3, $data['dep_admin'], PDO::PARAM_STR);
    $stmt_unid->bindParam(4, $data['responsavel_unidade'], PDO::PARAM_STR);
    $stmt_unid->bindParam(5, $data['cel_responsavel_unidade'], PDO::PARAM_INT);
    $stmt_unid->bindParam(6, $data['cod_unidade'], PDO::PARAM_INT);
    return $stmt_unid->execute();
};

$ficha_unidade_create_localidade = function () use ($conn) {
    $data = fichas_unidade_get_data('/ficha/ficha_unidade');

    if ($data['localizacao'] === 'Urbana') {
        $sql_urbana = 'INSERT INTO urbana (municipio_urbana, endereco_rua_urbana, endereco_bairro_urbana, endereco_num_urbana, codigo_unidade_urbana) VALUES (?, ?, ?, ?, ?)';
        $stmt_urbana = $conn->prepare($sql_urbana);
        // $stmt_urbana->bind_param('sssii', $data['municipio'], $data['endereco_rua_avenida_br'], $data['endereco_bairro'], $data['endereco_numero'], $data['cod_unidade']);
        $stmt_urbana->bindParam(1, $data['municipio'], PDO::PARAM_STR);
        $stmt_urbana->bindParam(2, $data['endereco_rua_avenida_br'], PDO::PARAM_STR);
        $stmt_urbana->bindParam(3, $data['endereco_bairro'], PDO::PARAM_STR);
        $stmt_urbana->bindParam(4, $data['endereco_numero'], PDO::PARAM_INT);
        $stmt_urbana->bindParam(5, $data['cod_unidade'], PDO::PARAM_INT);
        return $stmt_urbana->execute();
    } elseif ($data['localizacao'] === 'Rural') {
        $sql_rural = 'INSERT INTO rural (municipio_rural, endereco_rural, localizacao_diff_rural, codigo_unidade_rural) VALUES (?, ?, ?, ?)';
        $stmt_rural = $conn->prepare($sql_rural);
        $stmt_rural->bindParam(1, $data['municipio'], PDO::PARAM_STR);
        $stmt_rural->bindParam(2, $data['endereco_indigena_rural'], PDO::PARAM_STR);
        $stmt_rural->bindParam(3, $data['loc_dif'], PDO::PARAM_STR);
        $stmt_rural->bindParam(4, $data['cod_unidade'], PDO::PARAM_INT);
        // $stmt_rural->bind_param('sssi', $data['municipio'], $data['endereco_indigena_rural'], $data['loc_dif'], $data['cod_unidade']);
        return $stmt_rural->execute();
    } elseif ($data['localizacao'] === 'Indígena') {
        $sql_indigena = 'INSERT INTO indigena (municipio_indigena, endereco_indigena, localizacao_diff_indigena, codigo_unidade_indigena) VALUES (?, ?, ?, ?)';
        $stmt_indigena = $conn->prepare($sql_indigena);
        $stmt_indigena->bindParam(1, $data['municipio'], PDO::PARAM_STR);
        $stmt_indigena->bindParam(2, $data['endereco_indigena_rural'], PDO::PARAM_STR);
        $stmt_indigena->bindParam(3, $data['loc_dif'], PDO::PARAM_STR);
        $stmt_indigena->bindParam(4, $data['cod_unidade'], PDO::PARAM_INT);
        // $stmt_indigena->bind_param('sssi', $data['municipio'], $data['endereco_indigena_rural'], $data['loc_dif'], $data['cod_unidade']);
        return $stmt_indigena->execute();
    }
};

$unidades_infos = function () use ($conn) {
    $sql = $conn->query('SELECT * FROM unidade
    RIGHT JOIN codigos ON codigos.unidades_codigos = unidade.codigo_unidade
    LEFT JOIN urbana ON codigos.unidades_codigos = urbana.codigo_unidade_urbana
    LEFT JOIN rural ON codigos.unidades_codigos = rural.codigo_unidade_rural
    LEFT JOIN indigena ON codigos.unidades_codigos = indigena.codigo_unidade_indigena;');
    return $sql->fetchAll(PDO::FETCH_ASSOC);
};

$info_uma_unidade = function ($id) use ($conn) {
    $sql = 'SELECT * FROM unidade
    RIGHT JOIN codigos ON codigos.unidades_codigos =  unidade.codigo_unidade
    LEFT JOIN urbana ON codigos.unidades_codigos = urbana.codigo_unidade_urbana
    LEFT JOIN rural ON codigos.unidades_codigos = rural.codigo_unidade_rural
    LEFT JOIN indigena ON codigos.unidades_codigos = indigena.codigo_unidade_indigena
    WHERE idunidades=?';

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(1, $id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
};

$unidade_delete = function ($id) use ($conn) {
    $sql = 'DELETE a, b, c, d, e FROM unidade AS d
    RIGHT JOIN codigos AS a ON a.unidades_codigos =  d.codigo_unidade
       LEFT JOIN urbana AS e ON a.unidades_codigos = e.codigo_unidade_urbana
       LEFT JOIN rural AS c ON a.unidades_codigos = c.codigo_unidade_rural
       LEFT JOIN indigena AS b ON a.unidades_codigos = b.codigo_unidade_indigena
       WHERE idunidades=?';

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(1, $id, PDO::PARAM_INT);
    return $stmt->execute();
};

$edit_unidade = function ($id) use ($conn) {
    $data = fichas_unidade_get_data('/ficha/ficha_unidade/finalizadas/' . $id . '/editar');

    if ($data['localizacao'] === 'Urbana') {
        $sql_edit_unid = 'UPDATE unidade as UNI 
        RIGHT JOIN codigos as COD ON COD.unidades_codigos =  UNI.codigo_unidade 
        LEFT JOIN urbana as URB ON COD.unidades_codigos = URB.codigo_unidade_urbana 
        SET URB.municipio_urbana = ?, URB.endereco_rua_urbana = ?, URB.endereco_bairro_urbana = ?, 
        URB.endereco_num_urbana = ?, UNI.nome_unidade = ?, UNI.localizacao_unidade = ?, 
        UNI.dep_admin_unidade = ?, UNI.resp_unidade = ?, 
        UNI.num_resp_unidade = ?, URB.codigo_unidade_urbana = ?, UNI.codigo_unidade = ? , COD.unidades_codigos = ? WHERE UNI.idunidades = ?';
        $stmt_edit_unid = $conn->prepare($sql_edit_unid);
        $stmt_edit_unid->bindParam(1, $data['municipio'], PDO::PARAM_STR);
        $stmt_edit_unid->bindParam(2, $data['endereco_rua_avenida_br'], PDO::PARAM_STR);
        $stmt_edit_unid->bindParam(3, $data['endereco_bairro'], PDO::PARAM_STR);
        $stmt_edit_unid->bindParam(4, $data['endereco_numero'], PDO::PARAM_INT);
        $stmt_edit_unid->bindParam(5, $data['unidade'], PDO::PARAM_STR);
        $stmt_edit_unid->bindParam(6, $data['localizacao'], PDO::PARAM_STR);
        $stmt_edit_unid->bindParam(7, $data['dep_admin'], PDO::PARAM_STR);
        $stmt_edit_unid->bindParam(8, $data['responsavel_unidade'], PDO::PARAM_STR);
        $stmt_edit_unid->bindParam(9, $data['cel_responsavel_unidade'], PDO::PARAM_INT);
        $stmt_edit_unid->bindParam(10, $data['cod_unidade'], PDO::PARAM_INT);
        $stmt_edit_unid->bindParam(11, $data['cod_unidade'], PDO::PARAM_INT);
        $stmt_edit_unid->bindParam(12, $data['cod_unidade'], PDO::PARAM_INT);
        $stmt_edit_unid->bindParam(13, $id, PDO::PARAM_INT);
        return $stmt_edit_unid->execute();
    } elseif ($data['localizacao'] === 'Rural') {
        $sql_edit_unid = "UPDATE unidade as UNI 
        RIGHT JOIN codigos as COD ON COD.unidades_codigos =  UNI.codigo_unidade 
        LEFT JOIN rural as RU ON COD.unidades_codigos = RU.codigo_unidade_rural 
        SET RU.municipio_rural = ?, RU.endereco_rural = ?, RU.endereco_bairro_rural = ?, 
        RU.endereco_num_rural = ?, UNI.nome_unidade = ?, UNI.localizacao_unidade = ?, 
        UNI.dep_admin_unidade = ?, UNI.resp_unidade = ?, 
        UNI.num_resp_unidade = ?, RU.codigo_unidade_rural = ?, UNI.codigo_unidade = ? , COD.unidades_codigos = ? WHERE UNI.idunidades = ?";
        $stmt_edit_unid = $conn->prepare($sql_edit_unid);
        $stmt_edit_unid->bindParam(1, $data['municipio'], PDO::PARAM_STR);
        $stmt_edit_unid->bindParam(2, $data['endereco_rua_avenida_br'], PDO::PARAM_STR);
        $stmt_edit_unid->bindParam(3, $data['endereco_bairro'], PDO::PARAM_STR);
        $stmt_edit_unid->bindParam(4, $data['endereco_numero'], PDO::PARAM_INT);
        $stmt_edit_unid->bindParam(5, $data['unidade'], PDO::PARAM_STR);
        $stmt_edit_unid->bindParam(6, $data['localizacao'], PDO::PARAM_STR);
        $stmt_edit_unid->bindParam(7, $data['dep_admin'], PDO::PARAM_STR);
        $stmt_edit_unid->bindParam(8, $data['responsavel_unidade'], PDO::PARAM_STR);
        $stmt_edit_unid->bindParam(9, $data['cel_responsavel_unidade'], PDO::PARAM_INT);
        $stmt_edit_unid->bindParam(10, $data['cod_unidade'], PDO::PARAM_INT);
        $stmt_edit_unid->bindParam(11, $data['cod_unidade'], PDO::PARAM_INT);
        $stmt_edit_unid->bindParam(12, $data['cod_unidade'], PDO::PARAM_INT);
        $stmt_edit_unid->bindParam(13, $id, PDO::PARAM_INT);
        return $stmt_edit_unid->execute();
    } elseif ($data['localizacao'] === 'Indígena') {
        $sql_edit_unid = "UPDATE unidade as UNI 
        RIGHT JOIN codigos as COD ON COD.unidades_codigos =  UNI.codigo_unidade 
        LEFT JOIN indigena as IND ON COD.unidades_codigos = IND.codigo_unidade_indigena 
        SET IND.municipio_indigena = ?, IND.localizacao_diff_indigena = ?, IND.endereco_indigena = ?, 
        UNI.nome_unidade = ?, UNI.localizacao_unidade = ?, 
        UNI.dep_admin_unidade = ?, UNI.resp_unidade = ?, 
        UNI.num_resp_unidade = ?, IND.codigo_unidade_indigena = ?, UNI.codigo_unidade = ? , COD.unidades_codigos = ? WHERE UNI.idunidades = ?";
        $stmt_edit_unid = $conn->prepare($sql_edit_unid);
        $stmt_edit_unid->bindParam(1, $data['municipio'], PDO::PARAM_STR);
        $stmt_edit_unid->bindParam(2, $data['loc_dif'], PDO::PARAM_STR);
        $stmt_edit_unid->bindParam(3, $data['endereco_indigena_rural'], PDO::PARAM_STR);
        $stmt_edit_unid->bindParam(4, $data['unidade'], PDO::PARAM_STR);
        $stmt_edit_unid->bindParam(5, $data['localizacao'], PDO::PARAM_STR);
        $stmt_edit_unid->bindParam(6, $data['dep_admin'], PDO::PARAM_INT);
        $stmt_edit_unid->bindParam(7, $data['responsavel_unidade'], PDO::PARAM_STR);
        $stmt_edit_unid->bindParam(8, $data['cel_responsavel_unidade'], PDO::PARAM_STR);
        $stmt_edit_unid->bindParam(9, $data['cod_unidade'], PDO::PARAM_STR);
        $stmt_edit_unid->bindParam(10, $data['cod_unidade'], PDO::PARAM_STR);
        $stmt_edit_unid->bindParam(11, $data['cod_unidade'], PDO::PARAM_INT);
        $stmt_edit_unid->bindParam(12, $id, PDO::PARAM_INT);
        return $stmt_edit_unid->execute();
    }
};

// $unidade_editar_localizacao = function ($id) use ($conn){
//     $data = fichas_unidade_get_data('/ficha/ficha_unidade/finalizadas/' . $id . '/editar');

//     if ($data['localizacao'] === 'Urbana') {
//         $sql_urbana = 'UPDATE urbana SET municipio_urbana = ?, endereco_rua_urbana = ?, endereco_bairro_urbana = ?, endereco_num_urbana = ?, codigo_unidade_urbana = ?';
//         $stmt_urbana = $conn->prepare($sql_urbana);
//         // $stmt_urbana->bind_param('sssii', $data['municipio'], $data['endereco_rua_avenida_br'], $data['endereco_bairro'], $data['endereco_numero'], $data['cod_unidade']);
//         $stmt_urbana->bindParam(1, $data['municipio'], PDO::PARAM_STR);
//         $stmt_urbana->bindParam(2, $data['endereco_rua_avenida_br'], PDO::PARAM_STR);
//         $stmt_urbana->bindParam(3, $data['endereco_bairro'], PDO::PARAM_STR);
//         $stmt_urbana->bindParam(4, $data['endereco_numero'], PDO::PARAM_INT);
//         $stmt_urbana->bindParam(5, $data['cod_unidade'], PDO::PARAM_INT);
//         return $stmt_urbana->execute();
//     } elseif ($data['localizacao'] === 'Rural') {
//         $sql_rural = 'UPDATE rural SET municipio_rural = ?, endereco_rural = ?, localizacao_diff_rural = ?, codigo_unidade_rural = ?';
//         $stmt_rural = $conn->prepare($sql_rural);
//         $stmt_rural->bindParam(1, $data['municipio'], PDO::PARAM_STR);
//         $stmt_rural->bindParam(2, $data['endereco_indigena_rural'], PDO::PARAM_STR);
//         $stmt_rural->bindParam(3, $data['loc_dif'], PDO::PARAM_STR);
//         $stmt_rural->bindParam(4, $data['cod_unidade'], PDO::PARAM_INT);
//         // $stmt_rural->bind_param('sssi', $data['municipio'], $data['endereco_indigena_rural'], $data['loc_dif'], $data['cod_unidade']);
//         return $stmt_rural->execute();
//     } elseif ($data['localizacao'] === 'Indígena') {
//         $sql_indigena = 'UPDATE indigena SET municipio_indigena = ?, endereco_indigena = ?, localizacao_diff_indigena = ?, codigo_unidade_indigena = ?';
//         $stmt_indigena = $conn->prepare($sql_indigena);
//         $stmt_indigena->bindParam(1, $data['municipio'], PDO::PARAM_STR);
//         $stmt_indigena->bindParam(2, $data['endereco_indigena_rural'], PDO::PARAM_STR);
//         $stmt_indigena->bindParam(3, $data['loc_dif'], PDO::PARAM_STR);
//         $stmt_indigena->bindParam(4, $data['cod_unidade'], PDO::PARAM_INT);
//         // $stmt_indigena->bind_param('sssi', $data['municipio'], $data['endereco_indigena_rural'], $data['loc_dif'], $data['cod_unidade']);
//         return $stmt_indigena->execute();
//     }
// };

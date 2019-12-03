<?php

function fichas_tecnica_get_data($redirectOnError)
{
    $cod_inep = htmlspecialchars(filter_input(INPUT_POST, 'cod_inep'), ENT_QUOTES);
    $internet = htmlspecialchars(filter_input(INPUT_POST, 'exist_internet'), ENT_QUOTES);
    $exist_links = htmlspecialchars(filter_input(INPUT_POST, 'exist_link'), ENT_QUOTES);
    $num_fields_quant_link = count($_POST['links']['quant_link']);
    $exist_rack = htmlspecialchars(filter_input(INPUT_POST, 'exist_racks'), ENT_QUOTES);
    $quant_rack = htmlspecialchars(filter_input(INPUT_POST, 'quant_racks'), ENT_QUOTES);
    $exist_patch_painel = htmlspecialchars(filter_input(INPUT_POST, 'exist_patch_painel'), ENT_QUOTES);
    $quant_patch = htmlspecialchars(filter_input(INPUT_POST, 'quant_patch'), ENT_QUOTES);
    $num_fields_quant_switch = count($_POST['switchs']['quant_switch']);
    $num_fields_quant_comp_func = count($_POST['comps_func']['quant_comp_func']);
    $num_fields_quant_comp_n_func = count($_POST['comps_n_func']['quant_comp_n_func']);
    $num_fields_quant_notbks_func = count($_POST['notbks_func']['quant_notbks_func']);
    $num_fields_quant_notbks_n_func = count($_POST['notbks_n_func']['quant_notbks_n_func']);
    $num_fields_quant_netbks_func = count($_POST['netbks_func']['quant_netbks_func']);
    $num_fields_quant_netbks_n_func = count($_POST['netbks_n_func']['quant_netbks_n_func']);
    $num_fields_quant_impre_func = count($_POST['impre_func']['quant_impressora_func']);
    $observacoes = htmlspecialchars(filter_input(INPUT_POST, 'observacoes'), ENT_QUOTES);
    $data_vistoria = filter_input(INPUT_POST, 'data_vistoria');

    // filter_rules_ficha_tecnica('/ficha/ficha_tecnica');

    return compact(
        'internet',
        'exist_links',
        'num_fields_quant_link',
        'exist_rack',
        'quant_rack',
        'exist_patch_painel',
        'quant_patch',
        'num_fields_quant_switch',
        'num_fields_quant_comp_func',
        'num_fields_quant_comp_n_func',
        'num_fields_quant_notbks_func',
        'num_fields_quant_notbks_n_func',
        'num_fields_quant_netbks_func',
        'num_fields_quant_netbks_n_func',
        'num_fields_quant_impre_func',
        'observacoes',
        'data_vistoria'
    );
}


$fichas_all = function () use ($conn) {
    $result = $conn->query('SELECT * FROM ficha_de_vistoria_teste ');
    return $result->fetch_all(MYSQLI_ASSOC);
};

$ficha_create = function () use ($conn) {
    //parte de teste
    $data = fichas_tecnica_get_data('/ficha/ficha_tecnica');
    var_dump($data['num_fields_quant_link']);
    var_dump($data['num_fields_quant_switch']);
    var_dump($data['num_fields_quant_comp_func']);
    var_dump($data['num_fields_quant_comp_n_func']);
    var_dump($data['num_fields_quant_netbks_func']);
    var_dump($data['num_fields_quant_notbks_n_func']);
    var_dump($data['num_fields_quant_netbks_func']);
    var_dump($data['num_fields_quant_netbks_n_func']);
    var_dump($data['num_fields_quant_impre_func']);

    // for ($i = 0; $i < $data['num_fields_quant_link']; $i++) {
    //     $links[$i] = array(
    //         'quantidade' => $_POST['links']['quant_link'][$i],
    //         'tipo' => $_POST['links']['tip_link'][$i],
    //         'operadora' => $_POST['links']['operadora_link'][$i]
    //     );

    //     //Vê qual o tipo de link e com isso faz a inserção no campo certo
    //     if ($links[$i]['tipo'] === 'ADSL') {
    //         $links_quant_adsl = $links[$i]['quantidade'];
    //         $links_tipo_adsl = $links[$i]['tipo'];
    //         $links_operadora_adsl = $links[$i]['operadora'];
    //     } elseif ($links[$i]['tipo'] === '3G') {
    //         $links_quant_3g = $links[$i]['quantidade'];
    //         $links_tipo_3g = $links[$i]['tipo'];
    //         $links_operadora_3g = $links[$i]['operadora'];
    //     } elseif ($links[$i]['tipo'] === 'Rádio') {
    //         $links_quant_radio = $links[$i]['quantidade'];
    //         $links_tipo_radio = $links[$i]['tipo'];
    //         $links_operadora_radio = $links[$i]['operadora'];
    //     } elseif ($links[$i]['tipo'] === 'Cabo') {
    //         $links_quant_cabo = $links[$i]['quantidade'];
    //         $links_tipo_cabo = $links[$i]['tipo'];
    //         $links_operadora_cabo = $links[$i]['operadora'];
    //     } elseif ($links[$i]['tipo'] === 'Satélite') {
    //         $links_quant_satelite = $links[$i]['quantidade'];
    //         $links_tipo_satelite = $links[$i]['tipo'];
    //         $links_operadora_satelite = $links[$i]['operadora'];
    //     }
    // }

    for ($i = 0; $i < $data['num_fields_quant_link']; $i++) {
        $links[$i] = array(
            'quantidade' => $_POST['links']['quant_link'][$i],
            'tipo' => $_POST['links']['tip_link'][$i],
            'operadora' => $_POST['links']['operadora_link'][$i]
        );

        //Vê qual o tipo de link e com isso faz a inserção no campo certo
        if ($links[$i]['tipo'] === 'ADSL') {
            $links_quant_adsl = $links[$i]['quantidade'];
            $links_tipo_adsl = $links[$i]['tipo'];
            $links_operadora_adsl = $links[$i]['operadora'];
        } elseif ($links[$i]['tipo'] === '3G') {
            $links_quant_3g = $links[$i]['quantidade'];
            $links_tipo_3g = $links[$i]['tipo'];
            $links_operadora_3g = $links[$i]['operadora'];
        } elseif ($links[$i]['tipo'] === 'Rádio') {
            $links_quant_radio = $links[$i]['quantidade'];
            $links_tipo_radio = $links[$i]['tipo'];
            $links_operadora_radio = $links[$i]['operadora'];
        } elseif ($links[$i]['tipo'] === 'Cabo') {
            $links_quant_cabo = $links[$i]['quantidade'];
            $links_tipo_cabo = $links[$i]['tipo'];
            $links_operadora_cabo = $links[$i]['operadora'];
        } elseif ($links[$i]['tipo'] === 'Satélite') {
            $links_quant_satelite = $links[$i]['quantidade'];
            $links_tipo_satelite = $links[$i]['tipo'];
            $links_operadora_satelite = $links[$i]['operadora'];
        }
    }

    for ($j = 0; $j < $data['num_fields_quant_switch']; $j++) {
        $switchs[$j] = array(
            'quantidade' => $_POST['switchs']['quant_switch'][$j],
            'marca' => $_POST['switchs']['marca_switch'][$j],
            'modelo' => $_POST['switchs']['modelo_switch'][$j]
        );

        if ($switchs[$j]['marca'] === 'HP') {
            $switchs_quantidade_HP = $switchs[$j]['quantidade'];
            $switchs_marca_HP = $switchs[$j]['marca'];
            $switchs_modelo_HP = $switchs[$j]['modelo'];
        } elseif ($switchs[$j]['marca'] === 'Dell') {
            $switchs_quantidade_Dell = $switchs[$j]['quantidade'];
            $switchs_marca_Dell = $switchs[$j]['marca'];
            $switchs_modelo_Dell = $switchs[$j]['modelo'];
        } elseif ($switchs[$j]['marca'] === 'Zyxel') {
            $switchs_quantidade_Zyxel = $switchs[$j]['quantidade'];
            $switchs_marca_Zyxel = $switchs[$j]['marca'];
            $switchs_modelo_Zyxel = $switchs[$j]['modelo'];
        } elseif ($switchs[$j]['marca'] === '3Com') {
            $switchs_quantidade_3Com = $switchs[$j]['quantidade'];
            $switchs_marca_3Com = $switchs[$j]['marca'];
            $switchs_modelo_3Com = $switchs[$j]['modelo'];
        }
    }


    for ($k = 0; $k < $data['num_fields_quant_comp_func']; $k++) {
        $comps_func[$k] = array(
            'quantidade' => $_POST['comps_func']['quant_comp_func'][$k],
            'marca' => $_POST['comps_func']['marca_comp_func'][$k],
            'modelo' => $_POST['comps_func']['modelo_comp_func'][$k]
        );

        if ($comps_func[$k]['marca'] === 'HP') {
            $comps_func_quantidade_hp = $comps_func[$k]['quantidade'];
            $comps_func_marca_hp = $comps_func[$k]['marca'];
            $comps_func_modelo_hp = $comps_func[$k]['modelo'];
        } elseif ($comps_func[$k]['marca'] === 'Dell') {
            $comps_func_quantidade_dell = $comps_func[$k]['quantidade'];
            $comps_func_marca_dell = $comps_func[$k]['marca'];
            $comps_func_modelo_dell = $comps_func[$k]['modelo'];
        } elseif ($comps_func[$k]['marca'] === 'Positivo') {
            $comps_func_quantidade_positivo = $comps_func[$k]['quantidade'];
            $comps_func_marca_positivo = $comps_func[$k]['marca'];
            $comps_func_modelo_positivo = $comps_func[$k]['modelo'];
        } elseif ($comps_func[$k]['marca'] === 'Lenovo') {
            $comps_func_quantidade_lenovo = $comps_func[$k]['quantidade'];
            $comps_func_marca_lenovo = $comps_func[$k]['marca'];
            $comps_func_modelo_lenovo = $comps_func[$k]['modelo'];
        } elseif ($comps_func[$k]['marca'] === 'Outra') {
            $comps_func_quantidade_outra = $comps_func[$k]['quantidade'];
            $comps_func_marca_outra = $comps_func[$k]['marca'];
            $comps_func_modelo_outra = $comps_func[$k]['modelo'];
        }
    }

    for ($l = 0; $l < $data['num_fields_quant_comp_n_func']; $l++) {
        $comps_func[$l] = array(
            'quantidade' => $_POST['comps_n_func']['quant_comp_n_func'][$l],
            'marca' => $_POST['comps_n_func']['marca_comp_n_func'][$l],
            'modelo' => $_POST['comps_n_func']['modelo_comp_n_func'][$l]
        );

        if ($comps_func[$l]['marca'] === 'HP') {
            $comps_n_func_quantidade_hp = $comps_func[$l]['quantidade'];
            $comps_n_func_marca_hp = $comps_func[$l]['marca'];
            $comps_n_func_modelo_hp = $comps_func[$l]['modelo'];
        } elseif ($comps_func[$l]['marca'] === 'Dell') {
            $comps_n_func_quantidade_dell = $comps_func[$l]['quantidade'];
            $comps_n_func_marca_dell = $comps_func[$l]['marca'];
            $comps_n_func_modelo_dell = $comps_func[$l]['modelo'];
        } elseif ($comps_func[$l]['marca'] === 'Positivo') {
            $comps_n_func_quantidade_positivo = $comps_func[$l]['quantidade'];
            $comps_n_func_marca_positivo = $comps_func[$l]['marca'];
            $comps_n_func_modelo_positivo = $comps_func[$l]['modelo'];
        } elseif ($comps_func[$l]['marca'] === 'Lenovo') {
            $comps_n_func_quantidade_lenovo = $comps_func[$l]['quantidade'];
            $comps_n_func_marca_lenovo = $comps_func[$l]['marca'];
            $comps_n_func_modelo_lenovo = $comps_func[$l]['modelo'];
        } elseif ($comps_func[$l]['marca'] === 'Outra') {
            $comps_n_func_quantidade_outra = $comps_func[$l]['quantidade'];
            $comps_n_func_marca_outra = $comps_func[$l]['marca'];
            $comps_n_func_modelo_outra = $comps_func[$l]['modelo'];
        }
    }

    for ($m = 0; $m < $data['num_fields_quant_notbks_func']; $m++) {
        $notbks_func[$m] = array(
            'quantidade' => $_POST['notbks_func']['quant_notbks_func'][$m],
            'marca' => $_POST['notbks_func']['marca_notbks_func'][$m],
            'modelo' => $_POST['notbks_func']['modelo_notbks_func'][$m]
        );

        if ($notbks_func[$m]['marca'] === 'HP') {
            $notbks_func_quantidade_hp = $notbks_func[$m]['quantidade'];
            $notbks_func_marca_hp = $notbks_func[$m]['marca'];
            $notbks_func_modelo_hp = $notbks_func[$m]['modelo'];
        } elseif ($notbks_func[$m]['marca'] === 'Dell') {
            $notbks_func_quantidade_dell = $notbks_func[$m]['quantidade'];
            $notbks_func_marca_dell = $notbks_func[$m]['marca'];
            $notbks_func_modelo_dell = $notbks_func[$m]['modelo'];
        } elseif ($notbks_func[$m]['marca'] === 'Samsung') {
            $notbks_func_quantidade_samsung = $notbks_func[$m]['quantidade'];
            $notbks_func_marca_samsung = $notbks_func[$m]['marca'];
            $notbks_func_modelo_samsung = $notbks_func[$m]['modelo'];
        } elseif ($notbks_func[$m]['marca'] === 'Acer') {
            $notbks_func_quantidade_acer = $notbks_func[$m]['quantidade'];
            $notbks_func_marca_acer = $notbks_func[$m]['marca'];
            $notbks_func_modelo_acer = $notbks_func[$m]['modelo'];
        } elseif ($notbks_func[$m]['marca'] === 'MSI') {
            $notbks_func_quantidade_msi = $notbks_func[$m]['quantidade'];
            $notbks_func_marca_msi = $notbks_func[$m]['marca'];
            $notbks_func_modelo_msi = $notbks_func[$m]['modelo'];
        } elseif ($notbks_func[$m]['marca'] === 'Positivo') {
            $notbks_func_quantidade_positivo = $notbks_func[$m]['quantidade'];
            $notbks_func_marca_positivo = $notbks_func[$m]['marca'];
            $notbks_func_modelo_positivo = $notbks_func[$m]['modelo'];
        } elseif ($notbks_func[$m]['marca'] === 'Lenovo') {
            $notbks_func_quantidade_lenovo = $notbks_func[$m]['quantidade'];
            $notbks_func_marca_lenovo = $notbks_func[$m]['marca'];
            $notbks_func_modelo_lenovo = $notbks_func[$m]['modelo'];
        }
    }

    for ($n = 0; $n < $data['num_fields_quant_notbks_n_func']; $n++) {
        $notbks_n_func[$n] = array(
            'quantidade' => $_POST['notbks_n_func']['quant_notbks_n_func'][$n],
            'marca' => $_POST['notbks_n_func']['marca_notbks_n_func'][$n],
            'modelo' => $_POST['notbks_n_func']['modelo_notbks_n_func'][$n]
        );

        if ($notbks_n_func[$n]['marca'] === 'HP') {
            $notbks_n_func_quantidade_hp = $notbks_n_func[$n]['quantidade'];
            $notbks_n_func_marca_hp = $notbks_n_func[$n]['marca'];
            $notbks_n_func_modelo_hp = $notbks_n_func[$n]['modelo'];
        } elseif ($notbks_n_func[$n]['marca'] === 'Dell') {
            $notbks_n_func_quantidade_dell = $notbks_n_func[$n]['quantidade'];
            $notbks_n_func_marca_dell = $notbks_n_func[$n]['marca'];
            $notbks_n_func_modelo_dell = $notbks_n_func[$n]['modelo'];
        } elseif ($notbks_n_func[$n]['marca'] === 'Samsung') {
            $notbks_n_func_quantidade_samsung = $notbks_n_func[$n]['quantidade'];
            $notbks_n_func_marca_samsung = $notbks_n_func[$n]['marca'];
            $notbks_n_func_modelo_samsung = $notbks_n_func[$n]['modelo'];
        } elseif ($notbks_n_func[$n]['marca'] === 'Acer') {
            $notbks_n_func_quantidade_acer = $notbks_n_func[$n]['quantidade'];
            $notbks_n_func_marca_acer = $notbks_n_func[$n]['marca'];
            $notbks_n_func_modelo_acer = $notbks_n_func[$n]['modelo'];
        } elseif ($notbks_n_func[$n]['marca'] === 'MSI') {
            $notbks_n_func_quantidade_msi = $notbks_n_func[$n]['quantidade'];
            $notbks_n_func_marca_msi = $notbks_n_func[$n]['marca'];
            $notbks_n_func_modelo_msi = $notbks_n_func[$n]['modelo'];
        } elseif ($notbks_n_func[$n]['marca'] === 'Positivo') {
            $notbks_n_func_quantidade_positivo = $notbks_n_func[$n]['quantidade'];
            $notbks_n_func_marca_positivo = $notbks_n_func[$n]['marca'];
            $notbks_n_func_modelo_positivo = $notbks_n_func[$n]['modelo'];
        } elseif ($notbks_n_func[$n]['marca'] === 'Lenovo') {
            $notbks_n_func_quantidade_lenovo = $notbks_n_func[$n]['quantidade'];
            $notbks_n_func_marca_lenovo = $notbks_n_func[$n]['marca'];
            $notbks_n_func_modelo_lenovo = $notbks_n_func[$n]['modelo'];
        }
    }

    for ($o = 0; $o < $data['num_fields_quant_netbks_func']; $o++) {
        $netbks_func[$o] = array(
            'quantidade' => $_POST['netbks_func']['quant_netbks_func'][$o],
            'marca' => $_POST['netbks_func']['marca_netbks_func'][$o],
            'modelo' => $_POST['netbks_func']['modelo_netbks_func'][$o]
        );

        if ($netbks_func[$o]['marca'] === 'Philco') {
            $netbks_func_quantidade_philco = $netbks_func[$o]['quantidade'];
            $netbks_func_marca_philco = $netbks_func[$o]['marca'];
            $netbks_func_modelo_philco = $netbks_func[$o]['modelo'];
        } elseif ($netbks_func[$o]['marca'] === 'Itautec') {
            $netbks_func_quantidade_itautec = $netbks_func[$o]['quantidade'];
            $netbks_func_marca_itautec = $netbks_func[$o]['marca'];
            $netbks_func_modelo_itautec = $netbks_func[$o]['modelo'];
        } elseif ($netbks_func[$o]['marca'] === 'Samsung') {
            $netbks_func_quantidade_samsung = $netbks_func[$o]['quantidade'];
            $netbks_func_marca_samsung = $netbks_func[$o]['marca'];
            $netbks_func_modelo_samsung = $netbks_func[$o]['modelo'];
        } elseif ($netbks_func[$o]['marca'] === 'LG') {
            $netbks_func_quantidade_lg = $netbks_func[$o]['quantidade'];
            $netbks_func_marca_lg = $netbks_func[$o]['marca'];
            $netbks_func_modelo_lg = $netbks_func[$o]['modelo'];
        } elseif ($netbks_func[$o]['marca'] === 'Semp Toshiba') {
            $netbks_func_quantidade_semp = $netbks_func[$o]['quantidade'];
            $netbks_func_marca_semp = $netbks_func[$o]['marca'];
            $netbks_func_modelo_semp = $netbks_func[$o]['modelo'];
        }
    }

    for ($p = 0; $p < $data['num_fields_quant_netbks_n_func']; $p++) {
        $netbks_n_func[$p] = array(
            'quantidade' => $_POST['netbks_n_func']['quant_netbks_n_func'][$p],
            'marca' => $_POST['netbks_n_func']['marca_netbks_n_func'][$p],
            'modelo' => $_POST['netbks_n_func']['modelo_netbks_n_func'][$p]
        );

        if ($netbks_n_func[$p]['marca'] === 'Philco') {
            $netbks_n_func_quantidade_philco = $netbks_n_func[$p]['quantidade'];
            $netbks_n_func_marca_philco = $netbks_n_func[$p]['marca'];
            $netbks_n_func_modelo_philco = $netbks_n_func[$p]['modelo'];
        } elseif ($netbks_n_func[$p]['marca'] === 'Itautec') {
            $netbks_n_func_quantidade_itautec = $netbks_n_func[$p]['quantidade'];
            $netbks_n_func_marca_itautec = $netbks_n_func[$p]['marca'];
            $netbks_n_func_modelo_itautec = $netbks_n_func[$p]['modelo'];
        } elseif ($netbks_n_func[$p]['marca'] === 'Samsung') {
            $netbks_n_func_quantidade_samsung = $netbks_n_func[$p]['quantidade'];
            $netbks_n_func_marca_samsung = $netbks_n_func[$p]['marca'];
            $netbks_n_func_modelo_samsung = $netbks_n_func[$p]['modelo'];
        } elseif ($netbks_n_func[$p]['marca'] === 'LG') {
            $netbks_n_func_quantidade_lg = $netbks_n_func[$p]['quantidade'];
            $netbks_n_func_marca_lg = $netbks_n_func[$p]['marca'];
            $netbks_n_func_modelo_lg = $netbks_n_func[$p]['modelo'];
        } elseif ($netbks_n_func[$p]['marca'] === 'Semp Toshiba') {
            $netbks_n_func_quantidade_semp = $netbks_n_func[$p]['quantidade'];
            $netbks_n_func_marca_semp = $netbks_n_func[$p]['marca'];
            $netbks_n_func_modelo_semp = $netbks_n_func[$p]['modelo'];
        }
    }

    // for ($q = 0; $q < $data['num_fields_quant_netbks_n_func']; $q++) {
    //     $netbks_n_func[$q] = array(
    //         'quantidade' => $_POST['netbks_n_func']['quant_netbks_n_func'][$q],
    //         'marca' => $_POST['netbks_n_func']['marca_netbks_n_func'][$q],
    //         'modelo' => $_POST['netbks_n_func']['modelo_netbks_n_func'][$q]
    //     );

    //     if ($netbks_n_func[$q]['marca'] === 'Philco') {
    //         $netbks_n_func_quantidade_philco = $netbks_n_func[$q]['quantidade'];
    //         $netbks_n_func_marca_philco = $netbks_n_func[$q]['marca'];
    //         $netbks_n_func_modelo_philco = $netbks_n_func[$q]['modelo'];
    //     } elseif ($netbks_n_func[$q]['marca'] === 'Itautec') {
    //         $netbks_n_func_quantidade_itautec = $netbks_n_func[$q]['quantidade'];
    //         $netbks_n_func_marca_itautec = $netbks_n_func[$q]['marca'];
    //         $netbks_n_func_modelo_itautec = $netbks_n_func[$q]['modelo'];
    //     } elseif ($netbks_n_func[$q]['marca'] === 'Samsung') {
    //         $netbks_n_func_quantidade_samsung = $netbks_n_func[$q]['quantidade'];
    //         $netbks_n_func_marca_samsung = $netbks_n_func[$q]['marca'];
    //         $netbks_n_func_modelo_samsung = $netbks_n_func[$q]['modelo'];
    //     } elseif ($netbks_n_func[$q]['marca'] === 'LG') {
    //         $netbks_n_func_quantidade_lg = $netbks_n_func[$q]['quantidade'];
    //         $netbks_n_func_marca_lg = $netbks_n_func[$q]['marca'];
    //         $netbks_n_func_modelo_lg = $netbks_n_func[$q]['modelo'];
    //     } elseif ($netbks_n_func[$q]['marca'] === 'Semp Toshiba') {
    //         $netbks_n_func_quantidade_semp = $netbks_n_func[$q]['quantidade'];
    //         $netbks_n_func_marca_semp = $netbks_n_func[$q]['marca'];
    //         $netbks_n_func_modelo_semp = $netbks_n_func[$q]['modelo'];
    //     }
    // }

    $sql = "INSERT INTO ficha_de_vistoria_teste (internet, exist_links, 
    quant_link_adsl, tip_link_adsl, operadora_link_adsl,
    quant_link_3g, tip_link_3g, operadora_link_3g,
    quant_link_radio, tip_link_radio, operadora_link_radio,
    quant_link_cabo, tip_link_cabo, operadora_link_cabo,
    quant_link_satelite, tip_link_satelite, operadora_link_satelite,
    exist_rack, quant_rack,
    exist_patch_painel, quant_patch,
    quant_switch_HP, marca_switch_HP, modelo_switch_HP,
    quant_switch_Dell, marca_switch_Dell, modelo_switch_Dell,
    quant_switch_Zyxel, marca_switch_Zyxel, modelo_switch_Zyxel,
    quant_switch_3Com, marca_switch_3Com, modelo_switch_3Com,
    quant_comp_func_hp, marca_comp_func_hp, modelo_comp_func_hp,
    quant_comp_func_dell, marca_comp_func_dell, modelo_comp_func_dell,
    quant_comp_func_positivo, marca_comp_func_positivo, modelo_comp_func_positivo,
    quant_comp_func_lenovo, marca_comp_func_lenovo, modelo_comp_func_lenovo,
    quant_comp_func_outra, marca_comp_func_outra, modelo_comp_func_outra,
    quant_comp_n_func_hp, marca_comp_n_func_hp, modelo_comp_n_func_hp,
    quant_comp_n_func_dell, marca_comp_n_func_dell, modelo_comp_n_func_dell,
    quant_comp_n_func_positivo, marca_comp_n_func_positivo, modelo_comp_n_func_positivo,
    quant_comp_n_func_lenovo, marca_comp_n_func_lenovo, modelo_comp_n_func_lenovo,
    quant_comp_n_func_outra, marca_comp_n_func_outra, modelo_comp_n_func_outra,
    quant_notbks_func_hp, marca_notbks_func_hp, modelo_notbks_func_hp,
    quant_notbks_func_dell, marca_notbks_func_dell, modelo_notbks_func_dell,
    quant_notbks_func_samsung, marca_notbks_func_samsung, modelo_notbks_func_samsung,
    quant_notbks_func_acer, marca_notbks_func_acer, modelo_notbks_func_acer,
    quant_notbks_func_msi, marca_notbks_func_msi, modelo_notbks_func_msi,
    quant_notbks_func_positivo, marca_notbks_func_positivo, modelo_notbks_func_positivo,
    quant_notbks_func_lenovo, marca_notbks_func_lenovo, modelo_notbks_func_lenovo,
    quant_notbks_n_func_hp, marca_notbks_n_func_hp, modelo_notbks_n_func_hp,
    quant_notbks_n_func_dell, marca_notbks_n_func_dell, modelo_notbks_n_func_dell,
    quant_notbks_n_func_samsung, marca_notbks_n_func_samsung, modelo_notbks_n_func_samsung,
    quant_notbks_n_func_acer, marca_notbks_n_func_acer, modelo_notbks_n_func_acer,
    quant_notbks_n_func_msi, marca_notbks_n_func_msi, modelo_notbks_n_func_msi,
    quant_notbks_n_func_positivo, marca_notbks_n_func_positivo, modelo_notbks_n_func_positivo,
    quant_notbks_n_func_lenovo, marca_notbks_n_func_lenovo, modelo_notbks_n_func_lenovo,
    quant_netbks_func_philco, marca_netbks_func_philco, modelo_netbks_func_philco,
    quant_netbks_func_itautec, marca_netbks_func_itautec, modelo_netbks_func_itautec,
    quant_netbks_func_samsung, marca_netbks_func_samsung, modelo_netbks_func_samsung,
    quant_netbks_func_lg, marca_netbks_func_lg, modelo_netbks_func_lg,
    quant_netbks_func_semp, marca_netbks_func_semp, modelo_netbks_func_semp,
    quant_netbks_n_func_philco, marca_netbks_n_func_philco, modelo_netbks_n_func_philco,
    quant_netbks_n_func_itautec, marca_netbks_n_func_itautec, modelo_netbks_n_func_itautec,
    quant_netbks_n_func_samsung, marca_netbks_n_func_samsung, modelo_netbks_n_func_samsung,
    quant_netbks_n_func_lg, marca_netbks_n_func_lg, modelo_netbks_n_func_lg,
    quant_netbks_n_func_semp, marca_netbks_n_func_semp, modelo_netbks_n_func_semp,
    observacoes) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
    ?, ? ,? ,? , ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 
    ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 
    ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        'ssissississississsisiississississississississississississississississississississississississississississississississississississississs',
        $data['internet'],
        $data['exist_links'],
        $links_quant_adsl,
        $links_tipo_adsl,
        $links_operadora_adsl,
        $links_quant_3g,
        $links_tipo_3g,
        $links_operadora_3g,
        $links_quant_radio,
        $links_tipo_radio,
        $links_operadora_radio,
        $links_quant_cabo,
        $links_tipo_cabo,
        $links_operadora_cabo,
        $links_quant_satelite,
        $links_tipo_satelite,
        $links_operadora_satelite,
        $data['exist_rack'],
        $data['quant_rack'],
        $data['exist_patch_painel'],
        $data['quant_patch'],
        $switchs_quantidade_HP,
        $switchs_marca_HP,
        $switchs_modelo_HP,
        $switchs_quantidade_Dell,
        $switchs_marca_Dell,
        $switchs_modelo_Dell,
        $switchs_quantidade_Zyxel,
        $switchs_marca_Zyxel,
        $switchs_modelo_Zyxel,
        $switchs_quantidade_3Com,
        $switchs_marca_3Com,
        $switchs_modelo_3Com,
        $comps_func_quantidade_hp,
        $comps_func_marca_hp,
        $comps_func_modelo_hp,
        $comps_func_quantidade_dell,
        $comps_func_marca_dell,
        $comps_func_modelo_dell,
        $comps_func_quantidade_positivo,
        $comps_func_marca_positivo,
        $comps_func_modelo_positivo,
        $comps_func_quantidade_lenovo,
        $comps_func_marca_lenovo,
        $comps_func_modelo_lenovo,
        $comps_func_quantidade_outra,
        $comps_func_marca_outra,
        $comps_func_modelo_outra,
        $comps_n_func_quantidade_hp,
        $comps_n_func_marca_hp,
        $comps_n_func_modelo_hp,
        $comps_n_func_quantidade_dell,
        $comps_n_func_marca_dell,
        $comps_n_func_modelo_dell,
        $comps_n_func_quantidade_positivo,
        $comps_n_func_marca_positivo,
        $comps_n_func_modelo_positivo,
        $comps_n_func_quantidade_lenovo,
        $comps_n_func_marca_lenovo,
        $comps_n_func_modelo_lenovo,
        $comps_n_func_quantidade_outra,
        $comps_n_func_marca_outra,
        $comps_n_func_modelo_outra,
        $notbks_func_quantidade_hp,
        $notbks_func_marca_hp,
        $notbks_func_modelo_hp,
        $notbks_func_quantidade_dell,
        $notbks_func_marca_dell,
        $notbks_func_modelo_dell,
        $notbks_func_quantidade_samsung,
        $notbks_func_marca_samsung,
        $notbks_func_modelo_samsung,
        $notbks_func_quantidade_acer,
        $notbks_func_marca_acer,
        $notbks_func_modelo_acer,
        $notbks_func_quantidade_msi,
        $notbks_func_marca_msi,
        $notbks_func_modelo_msi,
        $notbks_func_quantidade_positivo,
        $notbks_func_marca_positivo,
        $notbks_func_modelo_positivo,
        $notbks_func_quantidade_lenovo,
        $notbks_func_marca_lenovo,
        $notbks_func_modelo_lenovo,
        $notbks_n_func_quantidade_hp,
        $notbks_n_func_marca_hp,
        $notbks_n_func_modelo_hp,
        $notbks_n_func_quantidade_dell,
        $notbks_n_func_marca_dell,
        $notbks_n_func_modelo_dell,
        $notbks_n_func_quantidade_samsung,
        $notbks_n_func_marca_samsung,
        $notbks_n_func_modelo_samsung,
        $notbks_n_func_quantidade_acer,
        $notbks_n_func_marca_acer,
        $notbks_n_func_modelo_acer,
        $notbks_n_func_quantidade_msi,
        $notbks_n_func_marca_msi,
        $notbks_n_func_modelo_msi,
        $notbks_n_func_quantidade_positivo,
        $notbks_n_func_marca_positivo,
        $notbks_n_func_modelo_positivo,
        $notbks_n_func_quantidade_lenovo,
        $notbks_n_func_marca_lenovo,
        $notbks_n_func_modelo_lenovo,
        $netbks_func_quantidade_philco,
        $netbks_func_marca_philco,
        $netbks_func_modelo_philco,
        $netbks_func_quantidade_itautec,
        $netbks_func_marca_itautec,
        $netbks_func_modelo_itautec,
        $netbks_func_quantidade_samsung,
        $netbks_func_marca_samsung,
        $netbks_func_modelo_samsung,
        $netbks_func_quantidade_lg,
        $netbks_func_marca_lg,
        $netbks_func_modelo_lg,
        $netbks_func_quantidade_semp,
        $netbks_func_marca_semp,
        $netbks_func_modelo_semp,
        $netbks_n_func_quantidade_philco,
        $netbks_n_func_marca_philco,
        $netbks_n_func_modelo_philco,
        $netbks_n_func_quantidade_itautec,
        $netbks_n_func_marca_itautec,
        $netbks_n_func_modelo_itautec,
        $netbks_n_func_quantidade_samsung,
        $netbks_n_func_marca_samsung,
        $netbks_n_func_modelo_samsung,
        $netbks_n_func_quantidade_lg,
        $netbks_n_func_marca_lg,
        $netbks_n_func_modelo_lg,
        $netbks_n_func_quantidade_semp,
        $netbks_n_func_marca_semp,
        $netbks_n_func_modelo_semp,
        $data['observacoes']
    );

    flash('Salvo com sucesso', 'success');

    return $stmt->execute();
};

$ficha_one = function ($id) use ($conn) {
    $sql = 'SELECT * FROM ficha_de_vistoria_teste WHERE id=?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
};

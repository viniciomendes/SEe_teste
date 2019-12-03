<?php

function filter_rules_ficha($redirectOnError)
{
    $filter_rules = [
        'exist_internet' => FILTER_SANITIZE_STRING,
        'data_vistoria' => FILTER_SANITIZE_STRING,
        'unidade' => FILTER_SANITIZE_STRING,
        'cod_unidade' => FILTER_SANITIZE_STRING,
        'localizacao' => FILTER_SANITIZE_STRING,
        'municipio' => FILTER_SANITIZE_STRING,
        'responsavel_unidade' => FILTER_SANITIZE_STRING,
        'cel_responsavel_unidade' => FILTER_SANITIZE_STRING,
        'dep_admin' => FILTER_SANITIZE_STRING
    ];

    $data = filter_input_array(INPUT_POST, $filter_rules);

    $validation_ficha_técnica = [
        'exist_internet' => [
            'is_null' => 'Informe se no local há internet!',
            'is_false' => 'Campo com valor inválido!'
        ],
        'data_vistoria' => [
            'is_null' => 'Informe a data da vistoria técnica!',
            'is_false' => 'Data com valor inválido!'
        ],
    ];

    $validation_ficha_escolas = [
        'unidade' => [
            'is_null' => 'Informe o nome da unidade!',
            'is_false' => 'Informe um nome válido!'
        ],
        'cod_unidade' => [
            'is_null' => 'Informe o código da unidade'
        ],
        'localizacao' => [
            'is_null' => 'Informe a localização da escola!',
            'is_false' => 'Informe uma localização válida!'
        ],
        'municipio' => [
            'is_null' => 'Informe o município da escola!',
            'is_false' => 'Informe um município válido!'
        ],
        'responsavel_unidade' => [
            'is_null' => 'Informe o nome do responsável por esta unidade!',
            'is_false' => 'Informe o nome correto da pessoa!'
        ],
        'cel_responsavel_unidade' => [
            'is_null' => 'Informe o número de telefone do responsável pela unidade!',
            'is_false' => 'Informe um número válido!!'
        ],
        'dep_admin' => [
            'is_null' => 'Informe a dependência administrativa da escola!',
            'is_false' => 'Informe um valor válido!'
        ]
    ];

    foreach ($data as $field => $value) {
        if (resolve('/ficha/ficha_tecnica')) {
            if (empty($validation_ficha_técnica[$field])) {
                continue;
            }
            if ($value === null or $value === '') {
                flash($validation_ficha_técnica[$field]['is_null'], 'error');
                header('location: ' . $redirectOnError);
                die();
            } elseif ($value === false) {
                flash($validation_ficha_técnica[$field]['is_false'], 'error');
                header('location: ' . $redirectOnError);
                die();
            }
        } elseif (resolve('/ficha/ficha_unidade')) {
            if (empty($validation_ficha_escolas[$field])) {
                continue;
            }
            if ($value === null or $value === '') {
                flash($validation_ficha_escolas[$field]['is_null'], 'error');
                header('location: ' . $redirectOnError);
                die();
            } elseif ($value === false) {
                flash($validation_ficha_escolas[$field]['is_false'], 'error');
                header('location: ' . $redirectOnError);
                die();
            }
        }
    }
}

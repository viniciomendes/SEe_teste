    <?php foreach ($data['info_unidade'] as $informacao) : ?>
        <?php $script = "<script> var idunidade =" . $informacao['idunidades'] . "</script>";
            echo $script;
            ?>
        <h3 class="mt-5 pt-4 justify-content-left">Informações sobre a unidade <?php echo $informacao['nome_unidade'] ?></h3>
        <hr>
        <div class="row">
            <div class="col-12">
                <dl class="row">
                    <dt class="col-sm-4">Município</dt>
                    <dd class="col-sm-8"><?php if (!empty($informacao['municipio_urbana'])) {
                                                    echo $informacao['municipio_urbana'];
                                                } elseif (!empty($informacao['municipio_rural'])) {
                                                    echo $informacao['municipio_rural'];
                                                } elseif (!empty($informacao['municipio_indigena'])) {
                                                    echo $informacao['municipio_indigena'];
                                                }; ?></dd>

                    <dt class="col-sm-4">Localização / Localização diferenciada</dt>
                    <dd class="col-sm-8"><?php echo $informacao['localizacao_unidade']; ?> / <?php if (!empty($informacao['localizacao_diff_indigena'])) {
                                                                                                        echo $informacao['localizacao_diff_indigena'];
                                                                                                    } elseif (!empty($informacao['localizacao_diff_rural'])) {
                                                                                                        echo $informacao['localizacao_diff_rural'];
                                                                                                    } else {
                                                                                                        echo 'Não se aplica!';
                                                                                                    }; ?></dd>

                    <dt class="col-sm-4">Código da unidade</dt>
                    <dd class="col-sm-8"><?php echo $informacao['codigo_unidade']; ?></dd>

                    <dt class="col-sm-4">Endereço</dt>
                    <dd class="col-sm-8"><?php if (!empty($informacao['endereco_rua_urbana']) || !empty($informacao['endereco_bairro_urbana']) || !empty($informacao['endereco_num_urbana'])) {
                                                    echo 'Rua: ' . $informacao['endereco_rua_urbana'] . ', Bairro: ' . $informacao['endereco_bairro_urbana'] . ', N° ' . $informacao['endereco_num_urbana'];
                                                } elseif (!empty($informacao['endereco_indigena'])) {
                                                    echo $informacao['endereco_indigena'];
                                                } elseif (!empty($informacao['endereco_rural'])) {
                                                    echo $informacao['endereco_rural'];
                                                }; ?></dd>

                    <dt class="col-sm-4">Dependência administrativa</dt>
                    <dd class="col-sm-8"><?php echo $informacao['dep_admin_unidade']; ?></dd>

                    <dt class="col-sm-4">Responsável pela unidade</dt>
                    <dd class="col-sm-8"><?php echo $informacao['resp_unidade']; ?></dd>

                    <dt class="col-sm-4">Telefone para contato</dt>
                    <dd class="col-sm-8"><?php echo $informacao['num_resp_unidade']; ?></dd>
                </dl>
                <button type="button" id="button_delete" class="btn btn-danger col-12 col-lg-2 mb-2">Deletar</button>
                <a href="/ficha/ficha_unidade/finalizadas/<?php echo $informacao['idunidades']; ?>/editar" class="col-12 col-lg-2 mb-2 btn btn-primary">Editar</a>
                <a href="" class="col-12 col-lg-2 mb-2 btn btn-success">Imprimir</a>
            </div>
        </div>
        <script src="/js/app.js"></script>
    <?php endforeach ?>
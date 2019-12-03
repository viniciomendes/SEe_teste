    <?php foreach ($data['edit_unidades'] as $unidade) : ?>
        <?php if ($unidade['municipio_urbana']) {
                $municipio_selecionado = '<script> var municipio = "' . $unidade['municipio_urbana'] . '"</script>';
                echo $municipio_selecionado;
            } elseif ($unidade['municipio_rural']) {
                $municipio_selecionado = '<script> var municipio = "' . $unidade['municipio_rural'] . '"</script>';
                echo $municipio_selecionado;
            } elseif ($unidade['municipio_indigena']) {
                $municipio_selecionado = '<script> var municipio = "' . $unidade['municipio_indigena'] . '"</script>';
                echo $municipio_selecionado;
            }
            ?>
        <div class="py-5 mt-4 text-center">
            <div class="container">
                <div class="mx-auto col-lg-8 col-12">
                    <h1 class="mb-4">Edição das informações da unidade <?php echo $unidade['nome_unidade'] ?> </h1>
                    <form method="POST" id="ficha">
                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="form-group">
                                    <label for="escola">Nome da unidade:</label>
                                    <input id="escola" name="unidade" maxlength="99" type="text" class="form-control" placeholder="Digite o nome da unidade..." value="<?php echo $unidade['nome_unidade'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="form-group">
                                    <label for="cod_inep">Código da unidade:</label>
                                    <input type="text" id="cod_unidade" name="cod_unidade" maxlength="14" class="form-control" placeholder="COD..." value="<?php echo $unidade['codigo_unidade'] ?>" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
                                    <small>Código INEP para escolas e CNPJ para núcleos!</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="localizacao">Localização:</label>
                                    <select name="localizacao" id="localizacao" onchange="locali_select(this)" class="form-control">
                                        <?php if ($unidade['localizacao_unidade'] === 'Urbana') : ?>
                                            <option class="remove_campo_urb" value="Urbana">Urbana</option>
                                            <option class="remove_campo_in" value="Indígena">Indígena</option>
                                            <option class="remove_campo_ru" value="Rural">Rural</option>
                                        <?php elseif ($unidade['localizacao_unidade'] === 'Rural') : ?>
                                            <option class="remove_campo_ru" value="Rural">Rural</option>
                                            <option class="remove_campo_urb" value="Urbana">Urbana</option>
                                            <option class="remove_campo_in" value="Indígena">Indígena</option>
                                        <?php elseif ($unidade['localizacao_unidade'] === 'Indígena') : ?>
                                            <option class="remove_campo_in" value="Indígena">Indígena</option>
                                            <option class="remove_campo_ru" value="Rural">Rural</option>
                                            <option class="remove_campo_urb" value="Urbana">Urbana</option>
                                        <?php endif ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 text-center">
                                <div class="form-group">
                                    <label for="municipio">Município:</label>
                                    <select name="municipio" id="municipio" class="form-control">
                                        <option value="" id="">--</option>
                                        <option selected value=" <?php if ($unidade['municipio_urbana']) {
                                                                            echo $unidade['municipio_urbana'];
                                                                        } elseif ($unidade['municipio_rural']) {
                                                                            echo $unidade['municipio_rural'];
                                                                        } elseif ($unidade['municipio_indigena']) {
                                                                            echo $unidade['municipio_indigena'];
                                                                        }
                                                                        ?> "> <?php if ($unidade['municipio_urbana']) {
                                                                                        echo $unidade['municipio_urbana'];
                                                                                    } elseif ($unidade['municipio_rural']) {
                                                                                        echo $unidade['municipio_rural'];
                                                                                    } elseif ($unidade['municipio_indigena']) {
                                                                                        echo $unidade['municipio_indigena'];
                                                                                    }
                                                                                    ?> </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <span id="endereco">
                        </span>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="dep_admin">Dependência Administrativa:</label>
                                    <select name="dep_admin" id="dep_admin" class="form-control">
                                        <option value="Não se aplica">--</option>
                                        <option value="Municipal">Municipal</option>
                                        <option value="Estadual">Estadual</option>
                                        <option value="Federal">Federal</option>
                                    </select>
                                    <small>Deixe em branco caso seja um núcleo!</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-7">
                                <div class="form-group">
                                    <label for="responsavel_unidade">Responsável pela unidade:</label>
                                    <input type="text" name="responsavel_unidade" id="responsavel_unidade" maxlength="99" class="form-control" placeholder="Nome do responsável pela unidade..." value="<?php echo $unidade['resp_unidade'] ?>">
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="form-group">
                                    <label for="cel_responsavel_unidade">Número para contato:</label>
                                    <input type="text" name="cel_responsavel_unidade" maxlength="11" id="cel_responsavel_unidade" class="form-control" placeholder="Número para contato..." value="<?php echo $unidade['num_resp_unidade'] ?>" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
                                    <small>Formato(Apenas Números):DDD + número</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="text-center">
                                    <input type="submit" id="send" value="Salvar" class="btn btn-success">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="/js/select_ficha_escola_edit.js"></script>
    <?php endforeach ?>
<div class="py-5 mt-4 text-center">
    <div class="container">
        <div class="mx-auto col-lg-8 col-12">
            <h1 class="mb-4">Cadastro de informações das unidade</h1>
            <form method="POST" id="ficha">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="form-group">
                            <label for="escola">Nome da unidade:</label>
                            <input id="escola" name="unidade" maxlength="99" type="text" class="form-control" placeholder="Digite o nome da unidade...">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="form-group">
                            <label for="cod_inep">Código da unidade:</label>
                            <input type="text" id="cod_unidade" name="cod_unidade" maxlength="14" class="form-control" placeholder="COD..." onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
                            <small>Código INEP para escolas e CNPJ para núcleos!</small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="localizacao">Localização:</label>
                            <select name="localizacao" id="localizacao" class="form-control select_localizacao">
                                <option value="">--</option>
                                <option class="remove_campo_in" value="Indígena">Indígena</option>
                                <option class="remove_campo_ru" value="Rural">Rural</option>
                                <option class="remove_campo_urb" value="Urbana">Urbana</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6 text-center ">
                        <div class="form-group">
                            <label for="municipio">Município:</label>
                            <select name="municipio" id="municipio" class="form-control">
                                <option value="">--</option>
                                <option value="Acrelândia">Acrelândia</option>
                                <option value="Assis Brasil">Assis Brasil</option>
                                <option value="Brasileia">Brasileia</option>
                                <option value="Bujari">Bujari</option>
                                <option value="Capixaba">Capixaba</option>
                                <option value="Cruzeiro do Sul">Cruzeiro do Sul</option>
                                <option value="Epitaciolândia">Epitaciolândia</option>
                                <option value="Feijó">Feijó</option>
                                <option value="Jordão">Jordão</option>
                                <option value="Manoel Urbano">Manoel Urbano</option>
                                <option value="Marechal Thaumaturgo">Marechal Thaumaturgo</option>
                                <option value="Mâncio Lima">Mâncio Lima</option>
                                <option value="Plácido de Castro">Plácido de Castro</option>
                                <option value="Porto Acre">Porto Acre</option>
                                <option value="Porto Walter">Porto Walter</option>
                                <option value="Rio Branco">Rio Branco</option>
                                <option value="Rodrigues Alves">Rodrigues Alves</option>
                                <option value="Santa Rosa do Purus">Santa Rosa do Purus</option>
                                <option value="Sena Madureira">Sena Madureira</option>
                                <option value="Senador Guiomard">Senador Guiomard</option>
                                <option value="Tarauacá">Tarauacá</option>
                                <option value="Xapuri">Xapuri</option>
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
                            <input type="text" name="responsavel_unidade" id="responsavel_unidade" maxlength="99" class="form-control" placeholder="Nome do responsável pela unidade...">
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="form-group">
                            <label for="cel_responsavel_unidade">Número para contato:</label>
                            <input type="text" name="cel_responsavel_unidade" maxlength="11" id="cel_responsavel_unidade" class="form-control" placeholder="Número para contato..." onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
                            <small>Formato(Apenas Números):DDD + número</small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <input type="submit" id="send" value="Enviar" class="btn btn-success">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
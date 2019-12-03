<div class="py-5 mt-5 text-center">
    <div class="container">
        <div class="mx-auto col-lg-8 col-12">
            <h1 class="mb-4">Ficha de Vistoria Técnica nas Unidades</h1>
            <form method="POST" id="ficha">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="form-group">
                            <label for="cod_inep">Código INEP:</label>
                            <input type="text" id="cod_inep" name="cod_inep" class="form-control" placeholder="Código INEP..." onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="form-group">
                            <label for="internet">Essa unidade possui internet?</label>
                            <select name="exist_internet" id="internet" class="form-control">
                                <option value="Não informado">--</option>
                                <option value="Sim">Sim</option>
                                <option value="Não">Não</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="links">Essa unidade possui links?</label>
                            <select name="exist_link" id="links" class="form-control">
                                <option value="Não Informado">--</option>
                                <option value="Sim">Sim</option>
                                <option value="Não">Não</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row btn-add" id="campos_adicionais_links">
                    <div class="col-12 pb-3">
                        <button type="button" class="btn btn-block btn-success" id="addField_links">Adicionar Campo</button>
                    </div>
                    <div class="col-12 equip_link">
                    </div>
                </div>
                <div class="row align-items-end">
                    <div class="col-12 text-center" id="select_racks">
                        <div class="form-group">
                            <label>Essa unidade possui racks?</label>
                            <select name="exist_racks" id="racks" class="form-control">
                                <option value="Não Informado">--</option>
                                <option value="Sim">Sim</option>
                                <option value="Não">Não</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6 text-center" id="quantidade_racks">
                        <div class="form-group">
                            <label for="quant_racks">Quantidade:</label>
                            <input type="text" name="quant_racks" id="quant_racks" class="form-control" placeholder="Quantidade de racks..." onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
                        </div>
                    </div>
                </div>
                <div class="row align-items-end">
                    <div class="col-12 text-center" id="select_patch">
                        <div class="form-group">
                            <label for="patch_painel">Essa unidade possui patch painel:</label>
                            <select name="exist_patch_painel" id="patch_painel" class="form-control" onclick="exist_patch(this)">
                                <option value="Não Informado">--</option>
                                <option value="Sim">Sim</option>
                                <option value="Não">Não</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6 text-center" id="quantidade_patch">
                        <div class="form-group">
                            <label for="quant_patch">Quantidade:</label>
                            <input type="text" name="quant_patch" id="quant_patch" class="form-control" placeholder="Quantidade de patchs..." onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label>Essa unidade possui switch?</label>
                            <select class="form-control">
                                <option value="Não Informado">--</option>
                                <option value="Sim">Sim</option>
                                <option value="Não">Não</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row" id="campos_adicionais_switch">
                    <div class="col-12 pb-3">
                        <button type="button" class="btn btn-block btn-success" id="addField_switchs">Adicionar Campo</button>
                    </div>
                    <div class="col-12 pb-3">
                        <div id="infos_switch">
                            <div class="row justify-content-center" id="input-0">
                                <div class="col-12 col-lg-3 text-center">
                                    <div class="form-group">
                                        <label>Quantidade:</label>
                                        <input type="text" name="switchs[quant_switch][]" class="form-control" placeholder="Quantidade de switch's..." onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3 text-center">
                                    <div class="form-group">
                                        <label>Marca:</label>
                                        <select name="switchs[marca_switch][]" class="form-control">
                                            <option value="Não Informado">--</option>
                                            <option value="HP">HP</option>
                                            <option value="Dell">Dell</option>
                                            <option value="Zyxel">Zyxel</option>
                                            <option value="3Com">3Com</option>
                                            <option value="Outra">Outra</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3 text-center">
                                    <div class="form-group">
                                        <label>Modelo:</label>
                                        <input type="text" name="switchs[modelo_switch][]" class="form-control" placeholder="Modelo do switch...">
                                    </div>
                                </div>
                                <div class="pt-4 col-12 col-lg-2">
                                    <button type="button" class="btn btn-danger btn-block remove" data-id="input-0">X</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="form-group">
                            <label for="computadores_func">Essa unidade possui computadores que estão funcioanndo?</label>
                            <select name="computadores_func" id="computadores_func" class="form-control" onclick="exist_computadores_func(this)">
                                <option value="Não Informado">--</option>
                                <option value="Sim">Sim</option>
                                <option value="Não">Não</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row" id="campos_adicionais_comp_func">
                    <div class="col-12 pb-3">
                        <button type="button" class="btn btn-success btn-block" id="addField_comp_func">Adicionar Campo</button>
                    </div>
                    <div class="col-12 pb-3">
                        <div id="infos_comp_func">
                            <div class="row justify-content-center" id="input-0">
                                <div class="col-12 col-lg-3 text-center">
                                    <div class="form-group">
                                        <label for="quant_comp">Quantidade:</label>
                                        <input type="text" name="comps_func[quant_comp_func][]" class="form-control" placeholder="Quantidade de computadores funcionando..." onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3 text-center">
                                    <div class="form-group">
                                        <label for="marca_comp_func">Marca:</label>
                                        <select name="comps_func[marca_comp_func][]" class="form-control">
                                            <option value="Não Informado">--</option>
                                            <option value="HP">HP</option>
                                            <option value="Dell">Dell</option>
                                            <option value="Positivo">Positivo</option>
                                            <option value="Lenovo">Lenovo</option>
                                            <option value="Outra">Outra</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3 text-center">
                                    <div class="form-group">
                                        <label for="modelo_comp_func">Modelo:</label>
                                        <input type="text" name="comps_func[modelo_comp_func][]" class="form-control" placeholder="Modelo computador...">
                                    </div>
                                </div>
                                <div class="pt-4 col-12 col-lg-2">
                                    <button type="button" class="btn btn-danger btn-block remove" data-id="input-0">X</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="form-group">
                            <label for="computadores_n_func">Existem computadores que não estão funcionando?</label>
                            <select name="computadores_n_func" id="computadores_n_func" class="form-control">
                                <option value="Não Informado">--</option>
                                <option value="Sim">Sim</option>
                                <option value="Não">Não</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row" id="campos_adicionais_comp_n_func">
                    <div class="col-12 pb-3">
                        <button type="button" class="btn btn-block btn-success" id="addField_comp_n_func">Adicionar Campo</button>
                    </div>
                    <div class="col-12 pb-3">
                        <div id="infos_comp_n_func">
                            <div class="row justify-content-center" id="input-0">
                                <div class="col-12 col-lg-3 text-center">
                                    <div class="form-group">
                                        <label for="quant_comp_n_func">Quantidade:</label>
                                        <input type="text" name="comps_n_func[quant_comp_n_func][]" class="form-control" placeholder="Quantidade de computadores não funcionando..." onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3 text-center">
                                    <div class="form-group">
                                        <label for="marca_comp_n_func">Marca:</label>
                                        <select name="comps_n_func[marca_comp_n_func][]" class="form-control">
                                            <option value="Não Informado">--</option>
                                            <option value="HP">HP</option>
                                            <option value="Dell">Dell</option>
                                            <option value="Positivo">Positivo</option>
                                            <option value="Lenovo">Lenovo</option>
                                            <option value="Outra">Outra</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3 text-center">
                                    <div class="form-group">
                                        <label for="modelo_comp_n_func">Modelo:</label>
                                        <input type="text" name="comps_n_func[modelo_comp_n_func][]" class="form-control" placeholder="Modelo computador...">
                                    </div>
                                </div>
                                <div class="pt-4 col-12 col-lg-2">
                                    <button type="button" class="btn btn-block btn-danger remove" data-id="input-0">X</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="form-group">
                            <label for="notebook">Essa unidade possui notebooks funcionando?</label>
                            <select name="notebook" class="form-control">
                                <option value="Não Informado">--</option>
                                <option value="Sim">Sim</option>
                                <option value="Não">Não</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row" id="campos_adicionais_notebook_func">
                    <div class="col-12 pb-3">
                        <button type="button" class="btn btn-success btn-block" id="addField_notebook_func">Adicionar Campo</button>
                    </div>
                    <div class="col-12 pb-3">
                        <div id="infos_notebook_func">
                            <div class="row justify-content-center" id="input-0">
                                <div class="col-12 col-lg-3">
                                    <div class="form-group">
                                        <label for="quant_notebook">Quantidade:</label>
                                        <input type="text" name="notbks_func[quant_notbks_func][]" class="form-control" placeholder="Quantidade de notebooks..." onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <div class="form-group">
                                        <label for="marca_notebook">Marca:</label>
                                        <select name="notbks_func[marca_notbks_func][]" class="form-control">
                                            <option value="Não Informado">--</option>
                                            <option value="Lenovo">Lenovo</option>
                                            <option value="HP">HP</option>
                                            <option value="Dell">Dell</option>
                                            <option value="Samsung">Samsung</option>
                                            <option value="Acer">Acer</option>
                                            <option value="MSI">MSI</option>
                                            <option value="Positivo">Positivo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <div class="form-group">
                                        <label for="modelo_notebook">Modelo:</label>
                                        <input type="text" name="notbks_func[modelo_notbks_func][]" class="form-control" placeholder="Modelo do notebook...">
                                    </div>
                                </div>
                                <div class="pt-4 col-12 col-lg-2">
                                    <button type="button" class="btn btn-danger btn-block remove" data-id="input-0">X</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="form-group">
                            <label for="notebook">Essa unidade possui notebooks que não estão funcionando?</label>
                            <select name="notebook" id="notebook" class="form-control">
                                <option value="Não Informado">--</option>
                                <option value="Sim">Sim</option>
                                <option value="Não">Não</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row" id="campos_adicionais_notebook_n_func">
                    <div class="col-12 pb-3">
                        <button type="button" class="btn btn-success btn-block" id="addField_notebook_n_func">Adicionar Campo</button>
                    </div>
                    <div class="col-12 pb-3">
                        <div id="infos_notebook_n_func">
                            <div class="row justify-content-center" id="input-0">
                                <div class="col-12 col-lg-3">
                                    <div class="form-group">
                                        <label for="quant_notebook">Quantidade:</label>
                                        <input type="text" name="notbks_n_func[quant_notbks_n_func][]" class="form-control" placeholder="Quantidade de notebooks..." onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <div class="form-group">
                                        <label for="marca_notebook">Marca:</label>
                                        <select name="notbks_n_func[marca_notbks_n_func][]" class="form-control">
                                            <option value="Não Informado">--</option>
                                            <option value="Lenovo">Lenovo</option>
                                            <option value="HP">HP</option>
                                            <option value="Dell">Dell</option>
                                            <option value="Samsung">Samsung</option>
                                            <option value="Acer">Acer</option>
                                            <option value="MSI">MSI</option>
                                            <option value="Positivo">Positivo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <div class="form-group">
                                        <label for="modelo_notebook">Modelo:</label>
                                        <input type="text" name="notbks_n_func[modelo_notbks_n_func][]" class="form-control" placeholder="Modelo do notebook...">
                                    </div>
                                </div>
                                <div class="pt-4 col-12 col-lg-2">
                                    <button type="button" class="btn btn-danger btn-block remove" data-id="input-0">X</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="form-group">
                            <label for="netbook">Essa unidade possui netbooks que estão funcionando?</label>
                            <select name="netbook" id="netbook" class="form-control">
                                <option value="Não Informado">--</option>
                                <option value="Sim">Sim</option>
                                <option value="Não">Não</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row" id="campos_adicionais_netbook_func">
                    <div class="col-12 pb-3">
                        <button type="button" class="btn btn-success btn-block" id="addField_netbook_func">Adicionar Campo</button>
                    </div>
                    <div class="col-12 pb-3">
                        <div id="info_netbook_func">
                            <div class="row justify-content-center" id="input-0">
                                <div class="col-12 col-lg-3">
                                    <div class="form-group">
                                        <label for="quant_netbook">Quantidade:</label>
                                        <input type="text" name="netbks_func[quant_netbks_func][]" class="form-control" placeholder="Quantidade de netbooks..." onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <div class="form-group">
                                        <label for="marca_netbook">Marca:</label>
                                        <select name="netbks_func[marca_netbks_func][]" class="form-control">
                                            <option value="Não Informado">--</option>
                                            <option value="Philco">Philco</option>
                                            <option value="Itautec">Itautec</option>
                                            <option value="Samsung">Samsung</option>
                                            <option value="LG">LG</option>
                                            <option value="Semp Toshiba">Semp Toshiba</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <div class="form-group">
                                        <label for="modelo_netbook">Modelo:</label>
                                        <input type="text" name="netbks_func[modelo_netbks_func][]" class="form-control" placeholder="Modelo do netbook...">
                                    </div>
                                </div>
                                <div class="pt-4 col-12 col-lg-2">
                                    <button type="button" class="btn btn-danger btn-block remove" data-id="input-0">X</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="form-group">
                            <label for="netbook">Essa unidade possui netbooks que não estão funcionando?</label>
                            <select name="netbook" id="netbook" class="form-control">
                                <option value="Não Informado">--</option>
                                <option value="Sim">Sim</option>
                                <option value="Não">Não</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row" id="campos_adicionais_netbook_n_func">
                    <div class="col-12 pb-3">
                        <button type="button" class="btn btn-success btn-block" id="addField_netbook_n_func">Adicionar Campo</button>
                    </div>
                    <div class="col-12 pb-3">
                        <div id="info_netbook_n_func">
                            <div class="row justify-content-center" id="input-0">
                                <div class="col-12 col-lg-3">
                                    <div class="form-group">
                                        <label for="quant_netbook">Quantidade:</label>
                                        <input type="text" name="netbks_n_func[quant_netbks_n_func][]" id="quant_netbook" class="form-control" placeholder="Quantidade de netbooks..." onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <div class="form-group">
                                        <label for="marca_netbook">Marca:</label>
                                        <select name="netbks_n_func[marca_netbks_n_func][]" id="marca_netbook" class="form-control">
                                            <option value="Não Informado">--</option>
                                            <option value="Philco">Philco</option>
                                            <option value="Itautec">Itautec</option>
                                            <option value="Samsung">Samsung</option>
                                            <option value="LG">LG</option>
                                            <option value="Semp Toshiba">Semp Toshiba</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <div class="form-group">
                                        <label for="modelo_netbook">Modelo:</label>
                                        <input type="text" name="netbks_n_func[modelo_netbks_n_func][]" class="form-control" placeholder="Modelo de netbook...">
                                    </div>
                                </div>
                                <div class="pt-4 col-12 col-lg-2">
                                    <button type="button" class="btn btn-danger btn-block remove" data-id="input-0">X</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="form-group">
                            <label for="impressora_func">Existem impressoras funcionando?</label>
                            <select name="impressora_func" id="impressora_func" class="form-control">
                                <option value="Não Informado">--</option>
                                <option value="Sim">Sim</option>
                                <option value="Não">Não</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row" id="campos_adicionais_impressora_func">
                    <div class="col-12 pb-3">
                        <button type="button" class="btn btn-success btn-block" id="addField_impressora_func">Adicionar Campo</button>
                    </div>
                    <div class="col-12 pb-3">
                        <div id="info_impressora_func">
                            <div class="row justify-content-center" id="input-0">
                                <div class="col-12 col-lg-3">
                                    <div class="form-group">
                                        <label for="quant_impressora_func">Quantidade:</label>
                                        <input type="text" name="impre_func[quant_impressora_func][]" class="form-control" placeholder="Quantidade de impressoras funcionando..." onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <div class="form-group">
                                        <label for="marca_impressora_func">Marca:</label>
                                        <select name="impre_func[marca_impressora_func][]" class="form-control">
                                            <option value="Não Informado">--</option>
                                            <option value="HP">HP</option>
                                            <option value="Lexmark">Lexmark</option>
                                            <option value="Epson">Epson</option>
                                            <option value="Brother">Brother</option>
                                            <option value="Outra">Outra</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <div class="form-group">
                                        <label for="modelo_impressora_func">Modelo:</label>
                                        <input type="text" name="impre_func[modelo_impressora_func][]" class="form-control" placeholder="Modelo de impressora...">
                                    </div>
                                </div>
                                <div class="pt-4 col-12 col-lg-2">
                                    <button type="button" class="btn btn-danger btn-block remove" data-id="input-0">X</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="form-group">
                            <label for="impressora_n_func">Existem impressoras que não estão funcionando?</label>
                            <select name="impressora_n_func" id="impressora_n_func" class="form-control">
                                <option value="Não Informado">--</option>
                                <option value="Sim">Sim</option>
                                <option value="Não">Não</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row" id="campos_adicionais_impressoras_n_func">
                    <div class="col-12 pb-3">
                        <button type="button" class="btn btn-success btn-block" id="addField_impressora_n_func">Adicionar Campo</button>
                    </div>
                    <div class="col-12 pb-3">
                        <div id="infos_impressora_n_func">
                            <div class="row justify-content-center" id="input-0">
                                <div class="col-12 col-lg-3">
                                    <div class="form-group">
                                        <label for="quant_impressora_n_func">Quantidade:</label>
                                        <input type="text" name="quant_impressora_n_func" class="form-control" placeholder="Quantidade de impressoras não funcionando..." onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <div class="form-group">
                                        <label for="marca_impressora_n_func">Marca:</label>
                                        <select name="marca_impressora_n_func" class="form-control">
                                            <option value="Não Informado">--</option>
                                            <option value="HP">HP</option>
                                            <option value="Lexmark">Lexmark</option>
                                            <option value="Epson">Epson</option>
                                            <option value="Brother">Brother</option>
                                            <option value="Outra">Outra</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <div class="form-group">
                                        <label for="modelo_impressora_n_func">Modelo:</label>
                                        <select name="modelo_impressora_n_func" class="form-control">
                                            <option value="Não Informado">--</option>
                                            <option value="Samsung">Samsung</option>
                                            <option value="Xerox">Xerox</option>
                                            <option value="Outra">Outra</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="pt-4 col-12 col-lg-2">
                                    <button type="button" class="btn btn-danger btn-block remove" data-id="input-0">X</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-end">
                    <div class="col-12 text-center" id="exist_nobreak">
                        <div class="form-group">
                            <label for="nobreak">Possui nobreak?</label>
                            <select name="nobreak" id="nobreak" class="form-control">
                                <option value="Não Informado">--</option>
                                <option value="Sim">Sim</option>
                                <option value="Não">Não</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6" id="quantidade_nobreak">
                        <div class="form-group">
                            <label for="quant_nobreak">Quantidade:</label>
                            <input type="text" name="quant_nobreak" id="quant_nobreak" class="form-control" placeholder="Quantidade de nobreaks..." onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="form-group">
                            <label for="servidor">Essa unidade possui um (ou mais) servidor(es)?</label>
                            <select name="servidor" id="servidor" class="form-control">
                                <option value="Não Informado">--</option>
                                <option value="Sim">Sim</option>
                                <option value="Não">Não</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row" id="campos_adicionais_servidores">
                    <div class="col-12 pb-3">
                        <button type="button" class="btn btn-success btn-block" id="addField_servidor">Adicionar Campo</button>
                    </div>
                    <div class="col-12 pb-3">
                        <div id="infos_servidor">
                            <div class="row justify-content-center" id="input-0">
                                <div class="col-12 col-lg-5">
                                    <div class="form-group">
                                        <label for="quant_servidor">Quantidade:</label>
                                        <input type="text" name="quant_servidor" class="form-control" placeholder="Quantidade de servidor(es)..." onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="form-group">
                                        <label for="modelo_servidor">Modelo:</label>
                                        <select name="modelo_servidor" class="form-control">
                                            <option value="Não Informado">--</option>
                                            <option value="Aker">Aker</option>
                                            <option value="PFSense">PFSense</option>
                                            <option value="Outro">Outro</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="pt-4 col-12 col-lg-2">
                                    <button type="button" class="btn btn-danger btn-block remove" data-id="input-0">X</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="form-group">
                            <label for="obs">Observações:</label>
                            <textarea class="form-control" name="observacoes" id="obs" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="data_vistoria" class="form-check-label">Data da vistoria:</label>
                            <input type="date" min="2001-01-01" max="9999-12-30" class="form-control" name="data_vistoria" id="data_vistoria">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <input type="submit" value="Enviar" class="btn btn-primary botaoHover">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="/js/select_ficha_tecnica.js"></script>
<!-- <script src="/js/dinamic_inputs_form_tecnico.js"></script> -->
$(function() {
    // contagem de campos adicionados, para servir de ID
    let count = 0;

    //   cria inputs, de acordo com a template string
    // name = nome do campo
    // type = tipo
    // parent = id de onde será inserido
    function createField_links(name, name2, name3, name4, type, parent_link) {
        count++;
        let template_links = `
        <div class="pl-5 row" id="input-${count}">
            <div class="col-3 text-center">
              <div class="form-group">
                <label for="quant_link">Quantidade:</label>
                <input type="${type}" name="${name}[${name2}][]" class="form-control" placeholder="Quantidade de links..." onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
              </div>
            </div>
            <div class="col-3 text-center">
              <div class="form-group">
                <label for="tip_link">Tipo:</label>
                <select name="${name}[${name3}][]" class="form-control">
                  <option value="Não informado">--</option>
                  <option value="ADSL">ADSL</option>
                  <option value="3G">3G</option>
                  <option value="Rádio">Rádio</option>
                  <option value="Cabo">Cabo</option>
                  <option value="Satélite">Satélite</option>
                </select>
              </div>
            </div>
            <div class="col-3 text-center">
              <div class="form-group">
                <label for="operadora">Operadora:</label>
                <select name="${name}[${name4}][]" class="form-control">
                  <option value="Não informado">--</option>
                  <option value="Oi">Oi</option>
                  <option value="Embratel">Embratel</option>
                  <option value="Claro">Claro</option>
                  <option value="Vivo">Vivo</option>
                  <option value="Outra">Outra</option>
                </select>
              </div>
            </div>
            <div class="pt-4 col-2">
                <button type="button" class="btn btn-danger btn-block remove" data-id="input-${count}">X</button>
            </div>
          </div>
      `;
        let container_links = document.querySelector(parent_link);
        container_links.insertAdjacentHTML("beforeend", template_links);
    }

    function createField_switch(
        name_generic,
        name_especific1,
        name_especific2,
        name_especific3,
        type_input,
        parent_switch
    ) {
        count++;
        let template_switches = `
        <div class="pl-5 row" id="input-${count}">
            <div class="col-3 text-center">
                <div class="form-group">
                    <label>Quantidade:</label>
                    <input type="${type_input}" name="${name_generic}[${name_especific1}][]" class="form-control" placeholder="Quantidade de switch's..." onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
                </div>
            </div>
            <div class="col-3 text-center">
                <div class="form-group">
                    <label>Marca:</label>
                    <select name="${name_generic}[${name_especific2}][]" class="form-control">
                        <option value="Não Informado">--</option>
                        <option value="HP">HP</option>
                        <option value="Dell">Dell</option>
                        <option value="Zyxel">Zyxel</option>
                        <option value="3Com">3Com</option>
                        <option value="Outra">Outra</option>
                    </select>
                </div>
            </div>
            <div class="col-3 text-center">
                <div class="form-group">
                    <label>Modelo:</label>
                    <input type="text" name="${name_generic}[${name_especific3}][]" class="form-control" placeholder="Modelo do switch...">
                </div>
            </div>
            <div class="pt-4 col-2">
                <button type="button" class="btn btn-danger btn-block remove" data-id="input-${count}">X</button>
            </div>
        </div>
      `;
        let container_switch = document.querySelector(parent_switch);
        container_switch.insertAdjacentHTML("beforeend", template_switches);
    }

    function createField_computador_func(
        name,
        name2,
        name3,
        name4,
        type,
        parent_computador_func
    ) {
        count++;
        let template_computador_func = `
        <div class="pl-5 row" id="input-${count}">
            <div class="col-3 text-center">
                <div class="form-group">
                    <label for="quant_comp">Quantidade:</label>
                    <input type="${type}" name="${name}[${name2}][]" class="form-control" placeholder="Quantidade de computadores funcionando..." onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
                </div>
            </div>
            <div class="col-3 text-center">
                <div class="form-group">
                    <label for="marca_comp_func">Marca:</label>
                    <select name="${name}[${name3}][]" class="form-control">
                        <option value="Não Informado">--</option>
                        <option value="HP">HP</option>
                        <option value="Dell">Dell</option>
                        <option value="Positivo">Positivo</option>
                        <option value="Lenovo">Lenovo</option>
                        <option value="Outra">Outra</option>
                    </select>
                </div>
            </div>
            <div class="col-3 text-center">
                <div class="form-group">
                    <label for="modelo_comp_func">Modelo:</label>
                    <input type="text" name="${name}[${name4}][]" class="form-control" placeholder="Modelo computador...">
                </div>
            </div>
            <div class="pt-4 col-2">
                <button type="button" class="btn btn-danger btn-block remove" data-id="input-${count}">X</button>
            </div>
        </div>
      `;
        let container_computador_func = document.querySelector(
            parent_computador_func
        );
        container_computador_func.insertAdjacentHTML(
            "beforeend",
            template_computador_func
        );
    }

    function createField_computador_n_func(
        name,
        name2,
        name3,
        name4,
        type,
        parent_computador_n_func
    ) {
        count++;
        let template_computador_n_func = `
        <div class="row pl-5" id="input-${count}">
            <div class="col-3 text-center">
                <div class="form-group">
                    <label for="quant_comp_n_func">Quantidade:</label>
                    <input type="${type}" name="${name}[${name2}][]" class="form-control" placeholder="Quantidade de computadores não funcionando..." onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
                </div>
            </div>
            <div class="col-3 text-center">
                <div class="form-group">
                    <label for="marca_comp_n_func">Marca:</label>
                    <select name="${name}[${name3}][]" class="form-control">
                        <option value="Não Informado">--</option>
                        <option value="HP">HP</option>
                        <option value="Dell">Dell</option>
                        <option value="Positivo">Positivo</option>
                        <option value="Lenovo">Lenovo</option>
                        <option value="Outra">Outra</option>
                    </select>
                </div>
            </div>
            <div class="col-3 text-center">
                <div class="form-group">
                    <label for="modelo_comp_n_func">Modelo:</label>
                    <input type="text" name="${name}[${name4}][]" class="form-control" placeholder="Modelo computador...">
                </div>
            </div>
            <div class="col-2 pt-4">
                <button type="button" class="btn btn-block btn-danger remove" data-id="input-${count}">X</button>
            </div>
        </div>
      `;
        let container_computador_n_func = document.querySelector(
            parent_computador_n_func
        );
        container_computador_n_func.insertAdjacentHTML(
            "beforeend",
            template_computador_n_func
        );
    }

    function createField_notebook_func(
        name_generic,
        name_especific1,
        name_especific2,
        name_especific3,
        type_input,
        parent_notebook_func
    ) {
        count++;
        let template_notebook_func = `
        <div class="row pl-5" id="input-${count}">
            <div class="col-3">
                <div class="form-group">
                    <label for="quant_notebook">Quantidade:</label>
                    <input type="${type_input}" name="${name_generic}[${name_especific1}][]" class="form-control" placeholder="Quantidade de notebooks..." onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="marca_notebook">Marca:</label>
                    <select name="${name_generic}[${name_especific2}][]" class="form-control">
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
            <div class="col-3">
                <div class="form-group">
                    <label for="modelo_notebook">Modelo:</label>
                    <input type="${type_input}" name="${name_generic}[${name_especific3}][]" class="form-control" placeholder="Modelo do notebook...">
                </div>
            </div>
            <div class="col-2 pt-4">
                <button type="button" class="btn btn-danger btn-block remove" data-id="input-${count}">X</button>
            </div>
        </div>
      `;
        let container_notebook_func = document.querySelector(
            parent_notebook_func
        );
        container_notebook_func.insertAdjacentHTML(
            "beforeend",
            template_notebook_func
        );
    }

    function createField_notebook_n_func(
        name_generic,
        name_especific1,
        name_especific2,
        name_especific3,
        type_input,
        parent_notebook_n_func
    ) {
        count++;
        let template_notebook_n_func = `
        <div class="row pl-5" id="input-${count}">
            <div class="col-3">
                <div class="form-group">
                    <label for="quant_notebook">Quantidade:</label>
                    <input type="${type_input}" name="${name_generic}[${name_especific1}][]" class="form-control" placeholder="Quantidade de notebooks..." onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="marca_notebook">Marca:</label>
                    <select name="${name_generic}[${name_especific2}][]" class="form-control">
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
            <div class="col-3">
                <div class="form-group">
                    <label for="modelo_notebook">Modelo:</label>
                    <input type="${type_input}" name="${name_generic}[${name_especific3}][]" class="form-control" placeholder="Modelo do notebook...">
                </div>
            </div>
            <div class="col-2 pt-4">
                <button type="button" class="btn btn-danger btn-block remove" data-id="input-${count}">X</button>
            </div>
        </div>
      `;
        let container_notebook_n_func = document.querySelector(
            parent_notebook_n_func
        );
        container_notebook_n_func.insertAdjacentHTML(
            "beforeend",
            template_notebook_n_func
        );
    }

    function createField_netbook_func(
        name_generic,
        name_especific1,
        name_especific2,
        name_especific3,
        type_input,
        parent_netbook_func
    ) {
        count++;
        let template_netbook_func = `
        <div class="row pl-5" id="input-${count}">
            <div class="col-3">
                <div class="form-group">
                    <label for="quant_netbook">Quantidade:</label>
                    <input type="${type_input}" name="${name_generic}[${name_especific1}][]" class="form-control" placeholder="Quantidade de netbooks..." onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="marca_netbook">Marca:</label>
                    <select name="${name_generic}[${name_especific2}][]" class="form-control">
                        <option value="Não Informado">--</option>
                        <option value="Philco">Philco</option>
                        <option value="Itautec">Itautec</option>
                        <option value="Samsung">Samsung</option>
                        <option value="LG">LG</option>
                        <option value="Semp Toshiba">Semp Toshiba</option>
                    </select>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="modelo_netbook">Modelo:</label>
                    <input type="text" name="${name_generic}[${name_especific3}][]" class="form-control" placeholder="Modelo do netbook...">
                </div>
            </div>
            <div class="col-2 pt-4">
                <button type="button" class="btn btn-danger btn-block remove" data-id="input-${count}">X</button>
            </div>
        </div>
      `;
        let container_netbook_func = document.querySelector(
            parent_netbook_func
        );
        container_netbook_func.insertAdjacentHTML(
            "beforeend",
            template_netbook_func
        );
    }
    //aqui
    function createField_netbook_n_func(
        name_generic,
        name_especific1,
        name_especific2,
        name_especific3,
        type_input,
        parent_netbook_n_func
    ) {
        count++;
        let template_netbook_n_func = `
        <div class="row pl-5" id="input-${count}">
            <div class="col-3">
                <div class="form-group">
                    <label for="quant_netbook">Quantidade:</label>
                    <input type="${type}" name="${name_equip}[${name_equip}_quantidade][]" class="form-control" placeholder="Quantidade de netbooks..." onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="marca_netbook">Marca:</label>
                    <select name="${name_generic}[${name_especific2}][]" id="marca_netbook" class="form-control">
                        <option value="Não Informado">--</option>
                        <option value="Philco">Philco</option>
                        <option value="Itautec">Itautec</option>
                        <option value="Samsung">Samsung</option>
                        <option value="LG">LG</option>
                        <option value="Semp Toshiba">Semp Toshiba</option>
                    </select>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="modelo_netbook">Modelo:</label>
                    <input type="text" name="${name_generic}[${name_especific3}][]" class="form-control" placeholder="Modelo do netbook...">
                </div>
            </div>
            <div class="col-2 pt-4">
                <button type="button" class="btn btn-danger btn-block remove" data-id="input-${count}">X</button>
            </div>
        </div>
      `;
        let container_netbook_n_func = document.querySelector(
            parent_netbook_n_func
        );
        container_netbook_n_func.insertAdjacentHTML(
            "beforeend",
            template_netbook_n_func
        );
    }

    function createField_impressora_func(
        name_generic,
        name_especific1,
        name_especific2,
        name_especific3,
        type_input,
        parent_impressora_func
    ) {
        count++;
        let template_impressora_func = `
        <div class="row pl-5" id="input-${count}">
            <div class="col-3">
                <div class="form-group">
                    <label for="quant_impressora_func">Quantidade:</label>
                    <input type="${type_input}" name="${name_generic}[${name_especific1}][]" class="form-control" placeholder="Quantidade de impressoras funcionando..." onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="marca_impressora_func">Marca:</label>
                    <select name="${name_generic}[${name_especific2}][]" class="form-control">
                        <option value="Não Informado">--</option>
                        <option value="HP">HP</option>
                        <option value="Lexmark">Lexmark</option>
                        <option value="Epson">Epson</option>
                        <option value="Brother">Brother</option>
                        <option value="Outra">Outra</option>
                    </select>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="modelo_impressora_func">Modelo:</label>
                    <input type="text" name="${name_generic}[${name_especific3}][]" class="form-control" placeholder="Modelo de impressora...">
                </div>
            </div>
            <div class="col-2 pt-4">
                <button type="button" class="btn btn-danger btn-block remove" data-id="input-${count}">X</button>
            </div>
        </div>
      `;
        let container_impressora_func = document.querySelector(
            parent_impressora_func
        );
        container_impressora_func.insertAdjacentHTML(
            "beforeend",
            template_impressora_func
        );
        console.log(template_impressora_func);
    }

    function createField_impressora_n_func(
        name,
        type,
        parent_impressora_n_func
    ) {
        count++;
        let template_impressora_n_func = `
        <div class="row pl-5" id="input-${count}">
            <div class="col-3">
                <div class="form-group">
                    <label for="quant_impressora_n_func">Quantidade:</label>
                    <input type="${type}" name="${name}" class="form-control" placeholder="Quantidade de impressoras não funcionando..." onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="marca_impressora_n_func">Marca:</label>
                    <select name="${name}" class="form-control">
                        <option value="Não Informado">--</option>
                        <option value="HP">HP</option>
                        <option value="Lexmark">Lexmark</option>
                        <option value="Epson">Epson</option>
                        <option value="Brother">Brother</option>
                        <option value="Outra">Outra</option>
                    </select>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="modelo_impressora_n_func">Modelo:</label>
                    <select name="${name}" class="form-control">
                        <option value="Não Informado">--</option>
                        <option value="Samsung">Samsung</option>
                        <option value="Xerox">Xerox</option>
                        <option value="Outra">Outra</option>
                    </select>
                </div>
            </div>
            <div class="col-2 pt-4">
                <button type="button" class="btn btn-danger btn-block remove" data-id="input-${count}">X</button>
            </div>
        </div>
      `;
        let container_impressora_n_func = document.querySelector(
            parent_impressora_n_func
        );
        container_impressora_n_func.insertAdjacentHTML(
            "beforeend",
            template_impressora_n_func
        );
    }

    function createField_servidor(name, type, parent_servidor) {
        count++;
        let template_servidor = `
        <div class="row pl-5" id="input-${count}">
            <div class="col-5">
                <div class="form-group">
                    <label for="quant_servidor">Quantidade:</label>
                    <input type="${type}" name="${name}" class="form-control" placeholder="Quantidade de servidor(es)..." onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="modelo_servidor">Modelo:</label>
                    <select name="${name}" class="form-control">
                        <option value="Não Informado">--</option>
                        <option value="Aker">Aker</option>
                        <option value="PFSense">PFSense</option>
                        <option value="Outro">Outro</option>
                    </select>
                </div>
            </div>
            <div class="col-2 pt-4">
                <button type="button" class="btn btn-danger btn-block remove" data-id="input-${count}">X</button>
            </div>
        </div>
      `;
        let container_servidor = document.querySelector(parent_servidor);
        container_servidor.insertAdjacentHTML("beforeend", template_servidor);
    }

    // destroi um campo e seu entorno
    // recebe o id do elemento parent e o evento de clique do botão que gerou a ação de exclusao
    function destroyField(parent, event) {
        const parentEl = document.querySelector(parent);
        const idToRemove = `#${event.target.getAttribute("data-id")}`;
        const elToRemove = parentEl.querySelector(idToRemove);
        parentEl.removeChild(elToRemove);
    }

    //   detecta evento de clique no botão responsavel por adicionar novos campos

    document
        .querySelector("#addField_links")
        .addEventListener("click", function(e) {
            createField_links(
                "links",
                "quant_link",
                "tip_link",
                "operadora_link",
                "text",
                "#infos_link"
            );
        });

    document
        .querySelector("#addField_switchs")
        .addEventListener("click", function(e) {
            createField_switch(
                "switchs",
                "quant_switch",
                "marca_switch",
                "modelo_switch",
                "text",
                "#infos_switch"
            );
        });

    document
        .querySelector("#addField_comp_func")
        .addEventListener("click", function(e) {
            createField_computador_func(
                "comps_func",
                "quant_comp_func",
                "marca_comp_func",
                "modelo_comp_func",
                "text",
                "#infos_comp_func"
            );
        });

    document
        .querySelector("#addField_comp_n_func")
        .addEventListener("click", function(e) {
            createField_computador_n_func(
                "comps_n_func",
                "quant_comp_n_func",
                "marca_comp_n_func",
                "modelo_comp_n_func",
                "text",
                "#infos_comp_n_func"
            );
        });

    document
        .querySelector("#addField_notebook_func")
        .addEventListener("click", function(e) {
            createField_notebook_func(
                "notbks_func",
                "quant_notbks_func",
                "marca_notbks_func",
                "modelo_notbks_func",
                "text",
                "#infos_notebook_func"
            );
        });

    document
        .querySelector("#addField_notebook_n_func")
        .addEventListener("click", function(e) {
            createField_notebook_n_func(
                "notbks_n_func",
                "quant_notbks_n_func",
                "marca_notbks_n_func",
                "modelo_notbks_n_func",
                "text",
                "#infos_notebook_n_func"
            );
        });

    document
        .querySelector("#addField_netbook_func")
        .addEventListener("click", function(e) {
            createField_netbook_func(
                "netbks_func",
                "quant_netbks_func",
                "marca_netbks_func",
                "modelo_netbks_func",
                "text",
                "#info_netbook_func"
            );
        });

    document
        .querySelector("#addField_netbook_n_func")
        .addEventListener("click", function(e) {
            createField_netbook_n_func(
                "netbks_n_func",
                "quant_netbks_n_func",
                "marca_netbks_n_func",
                "modelo_netbks_n_func",
                "text",
                "#info_netbook_n_func"
            );
        });

    document
        .querySelector("#addField_impressora_func")
        .addEventListener("click", function(e) {
            createField_impressora_func(
                "impre_func",
                "quant_impressora_func",
                "marca_impressora_func",
                "modelo_impressora_func",
                "text",
                "#info_impressora_func"
            );
        });

    document
        .querySelector("#addField_impressora_n_func")
        .addEventListener("click", function(e) {
            createField_impressora_n_func(
                "custom",
                "text",
                "#infos_impressora_n_func"
            );
        });

    document
        .querySelector("#addField_servidor")
        .addEventListener("click", function(e) {
            createField_servidor("custom", "text", "#infos_servidor");
        });

    // ############### IMPORTANTE LER ###############

    //   detecta cliques feitos dentro do container dos inputs, COMO OS ELEMENTOS SÃO ADICIONADOS DINAMICAMENTE
    //   OS EVENTOS NÃO SÃO ATRIBUIDOS(POIS EVENTOS SÃO ATRIBUIDOS NO LOADING DA PAGINA),
    //   POR ISSO É NECESSÁRIO TESTAR O TARGET E VER SE CORRESPONDE COM O BOTÃO DE REMOVER

    document
        .querySelector("#infos_link")
        .addEventListener("click", function(e) {
            if (e.target.classList.contains("remove")) {
                destroyField("#infos_link", e);
            }
        });

    document
        .querySelector("#infos_switch")
        .addEventListener("click", function(e) {
            if (e.target.classList.contains("remove")) {
                destroyField("#infos_switch", e);
            }
        });

    document
        .querySelector("#infos_comp_func")
        .addEventListener("click", function(e) {
            if (e.target.classList.contains("remove")) {
                destroyField("#infos_comp_func", e);
            }
        });

    document
        .querySelector("#infos_comp_n_func")
        .addEventListener("click", function(e) {
            if (e.target.classList.contains("remove")) {
                destroyField("#infos_comp_n_func", e);
            }
        });

    document
        .querySelector("#infos_notebook_func")
        .addEventListener("click", function(e) {
            if (e.target.classList.contains("remove")) {
                destroyField("#infos_notebook_func", e);
            }
        });

    document
        .querySelector("#infos_notebook_n_func")
        .addEventListener("click", function(e) {
            if (e.target.classList.contains("remove")) {
                destroyField("#infos_notebook_n_func", e);
            }
        });

    document
        .querySelector("#info_netbook_func")
        .addEventListener("click", function(e) {
            if (e.target.classList.contains("remove")) {
                destroyField("#info_netbook_func", e);
            }
        });

    document
        .querySelector("#info_netbook_n_func")
        .addEventListener("click", function(e) {
            if (e.target.classList.contains("remove")) {
                destroyField("#info_netbook_n_func", e);
            }
        });

    document
        .querySelector("#info_impressora_func")
        .addEventListener("click", function(e) {
            if (e.target.classList.contains("remove")) {
                destroyField("#info_impressora_func", e);
            }
        });

    document
        .querySelector("#infos_impressora_n_func")
        .addEventListener("click", function(e) {
            if (e.target.classList.contains("remove")) {
                destroyField("#infos_impressora_n_func", e);
            }
        });

    document
        .querySelector("#infos_servidor")
        .addEventListener("click", function(e) {
            if (e.target.classList.contains("remove")) {
                destroyField("#infos_servidor", e);
            }
        });
});

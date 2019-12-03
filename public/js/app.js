$(function() {
    /**
     * ====================================================================
     * TEMPLATES DOS CAMPOS PARA SEREM ADICIONADOS DINAMICAMENTE (ENDEREÇO)
     * ====================================================================
     */
    /**
     * ==================================================================================================================================================
     * @function endereco_indigena_rural - Adiciona dinâmicamente quando selecionado o tipo de localização Rural/Indígena campos para informar o endereço
     * @param {string} parent - Pai do nó que será adicionado dinamicamente
     * @param {string} name_input1 - Nome do campo que será adicionado
     * @param {string} title_input1 - Titulo do campo que será adicionado(Dê preferência em utilizar o name_input e title_input iguais!)
     * @param {string} name_input2 - Nome do campo que será adicionado
     * @param {string} title_input2 - Titulo do campo que será adicionado(Dê preferência em utilizar o name_input e title_input iguais!)
     * @param {string} type - Tipo do input
     * @param {string} placeholder - Descrição do que se deve colocar no campo
     * ==================================================================================================================================================
     */
    function endereco_indigena_rural(
        parent,
        name_input1,
        title_input1,
        name_input2,
        title_input2,
        type,
        placeholder
    ) {
        let template_endereco_rural_indigena = `
    <div class="row">
        <div class="col-12 text-center">
            <div class="form-group">
                <label for="${name_input1}">${title_input1}</label>
                <select name="${name_input1}" class="form-control">
                    <option value="">--</option>
                    <option value="Terra indígena">Terra indígena</option>
                    <option value="Unidade de uso sustentável">Unidade de uso sustentável</option>
                    <option value="Unidade de uso sustentável em terra indígena">Unidade de uso sustentável em terra indígena</option>
                    <option value="Área de assentamento">Área de assentamento</option>
                </select>
            </div>
        </div>
        <div class="col-12 text-center">
            <div class="form-group">
                <label for="${name_input2}">${title_input2}</label>
                <input type="${type}" name="${name_input2}" maxlength="145" class="form-control" placeholder="${placeholder}">
            </div>
        </div>
    </div>
    `;
        let container_endereco_rural_indigena = document.querySelector(parent);
        container_endereco_rural_indigena.insertAdjacentHTML(
            "beforeend",
            template_endereco_rural_indigena
        );
    }

    /**
     * =================================================================================================================================
     * @function endereco_rural - Adiciona dinâmicamente quando selecionado o tipo de localização Urbana campos para informar o endereço
     * @param {string} parent - Pai do nó que será adicionado dinamicamente
     * @param {string} title_input1 - Titulo do campo que será adicionado(Dê preferência em utilizar o name_input e title_input iguais!)
     * @param {string} type - Tipo do input
     * @param {string} name_input1 - Nome do campo que será adicionado
     * @param {string} name_input2 - Nome do campo que será adicionado
     * @param {string} name_input3 - Nome do campo que será adicionado
     * @param {string} placeholder_rua - Descrição do que se deve colocar no campo
     * @param {string} placeholder_bairro - Descrição do que se deve colocar no campo
     * @param {string} placeholder_numero - Descrição do que se deve colocar no campo
     * =================================================================================================================================
     */
    function endereco_urbana(
        parent,
        title_input1,
        type,
        name_input1,
        name_input2,
        name_input3,
        placeholder_rua,
        placeholder_bairro,
        placeholder_numero
    ) {
        let template_endereco_urbano = `
        <div class="row">
            <div class="col-12 text-center">
                <div class="form-group">
                    <label>${title_input1}</label>
                    <input type="${type}" name="${name_input1}" maxlength="120" class="form-control" placeholder="${placeholder_rua}">
                </div>
            </div>
            <div class="col-8 text-center">
                <div class="form-group">
                    <input type="${type}" name="${name_input2}" maxlength="99" class="form-control" placeholder="${placeholder_bairro}">
                </div>
            </div>
            <div class="col-4 text-center">
                <div class="form-group">
                    <input type="${type}" name="${name_input3}" maxlength="5"class="form-control" placeholder="${placeholder_numero}" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
                </div>
            </div>
        </div>
        `;
        let container_endereco_urbana = document.querySelector(parent);
        container_endereco_urbana.insertAdjacentHTML(
            "beforeend",
            template_endereco_urbano
        );
    }
    //------------------------------------------=-=-=-=-============-----------------
    /**
     * =================
     * TEMPLATES
     * =================
     */
    // let template_quantidade_col_lg_3 = `
    // <div class="col-12 col-lg-3 text-center">
    //     <div class="form-group">
    //       <label for="${name_equip = ""}">Quantidade:</label>
    //       <input type="${type_input = ""}" name="${name_equip = ""}[${name_equip = ""}_quantidade][]" class="form-control" placeholder="${placeholder_quantidade = ""}" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
    //     </div>
    // </div>
    // `;

    // let template_tipo_col_lg_3 = `
    // <div class="col-12 col-lg-3 text-center">
    //     <div class="form-group">
    //       <label for="${name_equip = ""}">Tipo:</label>
    //       <select name="${name_equip = ""}[${name_equip = ""}_tipo][]" id="${id_select_equip_tipo = ""}" class="form-control">
    //         <option value="Não informado">--</option> //for para gerar o array
    //       </select>
    //     </div>
    // </div>
    // `;

    // let template_operadora = `
    // <div class="col-12 col-lg-${coluna_equip_lg} text-center">
    //     <div class="form-group">
    //       <label for="${name_equip}">Operadora:</label>
    //       <select name="${name_equip}[${name_equip}_operadora][]" id="${id_select_equip_operadora}" class="form-control">
    //         <option value="Não informado">--</option> //for para gerar o array
    //       </select>
    //     </div>
    // </div>
    // `;

    // let template_botao_delete = `
    // <div class="row justify-content-center" id="input-${count}">
    //     <div class="pt-4 col-12 col-lg-${coluna_equip_lg}">
    //         <button type="button" class="btn btn-danger btn-block remove" data-id="input-${count}">X</button>
    //     </div>
    // </div>
    // `;

    /**
     * =============
     * FUNÇÕES
     * ==============
     */
    //================================================================================================================================================================
    let count = 0;

    function equipamentos_adicionais(
        parent_link,
        tamanho_colunalg_quantidade,
        tamanho_colunalg_tipo = null,
        tamanho_colunalg_operadora = null,
        tamanho_colunalg_removebtn,
        name_equip,
        type_input,
        placeholder_quantidade = null,
        id_select_equip_tipo = null,
        id_select_equip_operadora = null
    ) {
        count++;
        let template = `
        <div class="row justify-content-center" id="input-${count}">
            <div class="col-12 col-lg-${tamanho_colunalg_quantidade} text-center">
                <div class="form-group">
                  <label for="${name_equip}">Quantidade:</label>
                  <input type="${type_input}" name="${name_equip}[${name_equip}_quantidade][]" class="form-control" placeholder="${placeholder_quantidade}" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
                </div>
            </div>
            <div class="col-12 col-lg-${tamanho_colunalg_tipo} text-center">
                <div class="form-group">
                  <label for="${name_equip}">Tipo:</label>
                  <select name="${name_equip}[${name_equip}_tipo][]" id="${id_select_equip_tipo}" class="form-control">
                    <option value="Não informado">--</option> //for para gerar o array
                  </select>
                </div>
            </div>
            <div class="col-12 col-lg-${tamanho_colunalg_operadora} text-center">
                <div class="form-group">
                  <label for="${name_equip}">Operadora:</label>
                  <select name="${name_equip}[${name_equip}_operadora][]" id="${id_select_equip_operadora}" class="form-control">
                    <option value="Não informado">--</option> //for para gerar o array
                  </select>
                </div>
            </div>
            <div class="pt-4 col-12 col-lg-${tamanho_colunalg_removebtn}">
                <button type="button" class="btn btn-danger btn-block remove" data-id="input-${count}">X</button>
            </div>
        </div>
        `;
        let container_links = document.querySelector(parent_link);
        container_links.insertAdjacentHTML("beforeend", template);
    }

    var select_locali = document.querySelector("#links");
    select_locali.addEventListener("change", function() {
        exist_equip(this);
    });
    function exist_equip(obj) {
        var selectBox = obj;
        var selected = selectBox.options[selectBox.selectedIndex].value;
        var select_campos_adicionais = document.getElementById(
            "campos_adicionais_links"
        );

        if (selected === "Sim") {
            select_campos_adicionais.classList.remove("btn-add");
            document
                .querySelector("#addField_links")
                .addEventListener("click", function(e) {
                    equipamentos_adicionais(
                        ".equip_link",
                        "3",
                        "3",
                        "3",
                        "2",
                        "links",
                        "text",
                        "Quantidade...",
                        "select_link_tipo",
                        "select_link_operadora"
                    );
                });
        } else if (selected === "Não") {
            select_campos_adicionais.classList.add("btn-add");
        } else {
            select_campos_adicionais.classList.add("btn-add");
        }
    }

    function destroyField(parent, event) {
        const parentEl = document.querySelector(parent);
        const idToRemove = `#${event.target.getAttribute("data-id")}`;
        const elToRemove = parentEl.querySelector(idToRemove);
        parentEl.removeChild(elToRemove);
    }

    document
        .querySelector(".equip_link")
        .addEventListener("click", function(e) {
            if (e.target.classList.contains("remove")) {
                destroyField(".equip_link", e);
            }
        });

    //================================================================================================================================================================
    //--------------------------------------------------------------=-=-=-=-=-=--=
    /**
     * ===============================================
     * IDENTIFICADOR DO TIPO DE LOCALIZAÇÃO DA UNIDADE
     * ===============================================
     */
    /**
     * ============================================================
     * Identifica mudanças no select com classe .select_localizacao
     * ============================================================
     */
    var select_locali = document.querySelector(".select_localizacao");
    select_locali.addEventListener("change", function() {
        locali_select(this);
    });

    /**
     * =======================================================================================================================
     * @function locali_select - Identifica o tipo de localização selecionado no input de select com classe .selet_localizacao
     * @param {string} obj - Opção selecionada no select. Urbana/Rural/Indígena
     * =======================================================================================================================
     */
    function locali_select(obj) {
        let selectBox = obj;
        let selected = selectBox.options[selectBox.selectedIndex].value;

        if (selected === "Rural") {
            if (document.querySelector("#endereco").childNodes.length > 2) {
                destroyElement("#endereco");
            }
            endereco_indigena_rural(
                "#endereco",
                "localiza_diff_rural",
                "Localização diferente",
                "endereco_rural",
                "Endereço",
                "text",
                "Endereço..."
            );
        } else if (selected === "Indígena") {
            if (document.querySelector("#endereco").childNodes.length > 2) {
                destroyElement("#endereco");
            }
            endereco_indigena_rural(
                "#endereco",
                "localiza_diff_indigena",
                "Localização diferente",
                "endereco_indigena",
                "Endereço",
                "text",
                "Endereço..."
            );
        } else if (selected === "Urbana") {
            if (document.querySelector("#endereco").childNodes.length > 2) {
                destroyElement("#endereco");
            }
            endereco_urbana(
                "#endereco",
                "Endereço:",
                "text",
                "endereco_urbana_rua",
                "endereco_urbana_bairro",
                "endereco_urbana_numero",
                "Rua, avenida...",
                "Bairro...",
                "N°..."
            );
        }
    }
    /**
     * ======================================================================
     * DESTRUIÇÃO DE CAMPOS ADICIONADOS DIAMICAMENTE PARA INFORMAR O ENDEREÇO
     * ======================================================================
     */
    function destroyElement(parent) {
        const pai = document.querySelector(parent);
        pai.removeChild(pai.lastElementChild);
    }
});

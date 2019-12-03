function exist_links(obj) {
    var selectBox = obj;
    var selected = selectBox.options[selectBox.selectedIndex].value;
    var select_campos_adicionais = document.getElementById("campos_adicionais_links");

    if (selected === 'Sim') {
        select_campos_adicionais.style.display = "block";
    } else {
        select_campos_adicionais.style.display = "none";
    }
}

function trocaClasse(elemento, antiga, nova) {
    elemento.classList.remove(antiga);
    elemento.classList.add(nova);
}

function exist_rack(obj) {
    var selectBox = obj;
    var selected = selectBox.options[selectBox.selectedIndex].value;
    var select_quantidade_rack = document.getElementById("quantidade_racks");

    if (selected === 'Sim') {
        var div = document.querySelector('div[id="select_racks"]');
        select_quantidade_rack.style.display = "block";
        trocaClasse(div, 'col-12', 'col-6');
    } else {
        var div = document.querySelector('div[id="select_racks"]');
        select_quantidade_rack.style.display = "none";
        trocaClasse(div, 'col-6', 'col-12');
    }
}

function exist_patch(obj) {
    var selectBox = obj;
    var selected = selectBox.options[selectBox.selectedIndex].value;
    var select_quantidade_patch = document.getElementById("quantidade_patch");

    if (selected === 'Sim') {
        var div = document.querySelector('div[id="select_patch"]');
        select_quantidade_patch.style.display = "block";
        trocaClasse(div, 'col-12', 'col-6');
    } else {
        var div = document.querySelector('div[id="select_patch"]');
        select_quantidade_patch.style.display = "none";
        trocaClasse(div, 'col-6', 'col-12');
    }
}

function exist_switch(obj) {
    var selectBox = obj;
    var selected = selectBox.options[selectBox.selectedIndex].value;
    var select_campos_adicionais_switch = document.getElementById("campos_adicionais_switch");

    if (selected === 'Sim') {
        select_campos_adicionais_switch.style.display = "block";
    } else {
        select_campos_adicionais_switch.style.display = "none";
    }
}

function exist_computadores_func(obj) {
    var selectBox = obj;
    var selected = selectBox.options[selectBox.selectedIndex].value;
    var select_campos_adicionais_comp_func = document.getElementById("campos_adicionais_comp_func");

    if (selected === 'Sim') {
        select_campos_adicionais_comp_func.style.display = "block";
    } else {
        select_campos_adicionais_comp_func.style.display = "none";
    }
}

function exist_computadores_n_func(obj) {
    var selectBox = obj;
    var selected = selectBox.options[selectBox.selectedIndex].value;
    var select_campos_adicionais_comp_n_func = document.getElementById("campos_adicionais_comp_n_func");

    if (selected === 'Sim') {
        select_campos_adicionais_comp_n_func.style.display = "block";
    } else {
        select_campos_adicionais_comp_n_func.style.display = "none";
    }
}

function exist_notebook_func(obj) {
    var selectBox = obj;
    var selected = selectBox.options[selectBox.selectedIndex].value;
    var select_campos_adicionais_notebook_func = document.getElementById("campos_adicionais_notebook_func");

    if (selected === 'Sim') {
        select_campos_adicionais_notebook_func.style.display = "block";;
    } else {
        select_campos_adicionais_notebook_func.style.display = "none";
    }
}

function exist_notebook_n_func(obj) {
    var selectBox = obj;
    var selected = selectBox.options[selectBox.selectedIndex].value;
    var select_campos_adicionais_notebook_n_func = document.getElementById("campos_adicionais_notebook_n_func");

    if (selected === 'Sim') {
        select_campos_adicionais_notebook_n_func.style.display = "block";;
    } else {
        select_campos_adicionais_notebook_n_func.style.display = "none";
    }
}

function exist_netbook_func(obj) {
    var selectBox = obj;
    var selected = selectBox.options[selectBox.selectedIndex].value;
    var select_campos_adicionais_netbook_func = document.getElementById("campos_adicionais_netbook_func");

    if (selected === 'Sim') {
        select_campos_adicionais_netbook_func.style.display = "block";
    } else {
        select_campos_adicionais_netbook_func.style.display = "none";
    }
}

function exist_netbook_n_func(obj) {
    var selectBox = obj;
    var selected = selectBox.options[selectBox.selectedIndex].value;
    var select_campos_adicionais_netbook_n_func = document.getElementById("campos_adicionais_netbook_n_func");

    if (selected === 'Sim') {
        select_campos_adicionais_netbook_n_func.style.display = "block";
    } else {
        select_campos_adicionais_netbook_n_func.style.display = "none";
    }
}

function exist_impressora_func(obj) {
    var selectBox = obj;
    var selected = selectBox.options[selectBox.selectedIndex].value;
    var select_campos_adicionais_impressora_func = document.getElementById("campos_adicionais_impressora_func");

    if (selected === "Sim") {
        select_campos_adicionais_impressora_func.style.display = "block";
    } else {
        select_campos_adicionais_impressora_func.style.display = "none";
    }
}

function exist_impressora_n_func(obj) {
    var selectBox = obj;
    var selected = selectBox.options[selectBox.selectedIndex].value;
    var select_campos_adicionais_impressoras_n_func = document.getElementById("campos_adicionais_impressoras_n_func");

    if (selected === "Sim") {
        select_campos_adicionais_impressoras_n_func.style.display = "block";
    } else {
        select_campos_adicionais_impressoras_n_func.style.display = "none";
    }
}

function exist_nobreak(obj) {
    var selectBox = obj;
    var selected = selectBox.options[selectBox.selectedIndex].value;
    var select_quantidade_nobreak = document.getElementById("quantidade_nobreak");

    if (selected === 'Sim') {
        var div = document.querySelector('div[id="exist_nobreak"]');
        select_quantidade_nobreak.style.display = "block";
        trocaClasse(div, 'col-12', 'col-6');
    } else {
        var div = document.querySelector('div[id="exist_nobreak"]');
        select_quantidade_nobreak.style.display = "none";
        trocaClasse(div, 'col-6', 'col-12');
    }
}

function exist_servidor(obj) {
    var selectBox = obj;
    var selected = selectBox.options[selectBox.selectedIndex].value;
    var slect_campos_adicionais_servidores = document.getElementById("campos_adicionais_servidores");

    if (selected === 'Sim') {
        slect_campos_adicionais_servidores.style.display = "block";
    } else {
        slect_campos_adicionais_servidores.style.display = "none";
    }
}
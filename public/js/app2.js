/**
 * -----------------------------------------------------------------------
 MODAL
 * -----------------------------------------------------------------------
 */

let editValueButton = document.querySelector("#button_delete");
let mainContent = document.getElementsByTagName("main");
let backdrop;
let modal;

function openModal() {
    mainContent[0].classList.add("modal_delete");
    let demoContainer = document.getElementsByClassName("modal_delete[0]");
    function closeModal() {
        if (backdrop) {
            backdrop.remove();
        }

        if (modal) {
            modal.remove();
        }
    }
    backdrop = document.createElement("div");
    backdrop.classList.add("backdrop");
    backdrop.addEventListener("click", closeModal);
    document.body.insertBefore(backdrop, demoContainer);

    modal = document.createElement("div");
    modal.classList.add("modal");

    const modalHeading = document.createElement("h1");
    modalHeading.textContent =
        "Deseja realmente deletar as informações desta unidade?";
    modal.appendChild(modalHeading);

    const modalActionsContainer = document.createElement("div");
    modalActionsContainer.classList.add("modal-actions");
    modal.appendChild(modalActionsContainer);

    const cancelButton = document.createElement("button");
    cancelButton.setAttribute("type", "button");
    cancelButton.classList.add("btn");
    cancelButton.classList.add("btn-secondary");
    cancelButton.classList.add("m-2");
    cancelButton.textContent = "Cancelar";
    cancelButton.addEventListener("click", closeModal);
    modalActionsContainer.appendChild(cancelButton);

    const confirmButton = document.createElement("a");
    confirmButton.setAttribute(
        "href",
        "/ficha/ficha_unidade/finalizadas/" + idunidade + "/delete"
    );
    confirmButton.classList.add("btn");
    confirmButton.classList.add("btn-danger");
    confirmButton.classList.add("m-2");
    confirmButton.textContent = "Deletar";
    confirmButton.addEventListener("click", function() {
        closeModal();
    });
    modalActionsContainer.appendChild(confirmButton);

    document.body.insertBefore(modal, demoContainer);
}

editValueButton.addEventListener("click", openModal);
// =---------------------------
// var divEnderecos = document.getElementById("#enderecos");
var info_rural;

function add_endereco(parent) {
    var endereco = document.getElementById(parent);
    info_rural = document.createElement("div");
    info_rural.classList.add("row");

    let qualquercoisa = document.createElement("h1");
    qualquercoisa.textContent = "asjds";
    info_rural.appendChild(qualquercoisa);

    endereco.insertAdjacentHTML.apply("beforeend", info_rural);
}

function locali_slelect(obj) {
    let selectBox = obj;
    let selected = selectBox.options[selectBox.selectedIndex].value;

    if (selected === "Rural") {
        add_endereco("#enderecos");
    } else if (selected === "Indígena") {
        select_options_endereco.style.display = "none";
        select_options_titulo_endereco.style.display = "block";
        select_options_bairro.style.display = "none";
        select_options_numero.style.display = "none";
        select_options_rural_indigena.style.display = "block";
        localizacao_diferenciada.style.display = "block";
    } else if (selected === "Urbana") {
        select_options_endereco.style.display = "block";
        select_options_titulo_endereco.style.display = "block";
        select_options_bairro.style.display = "block";
        select_options_numero.style.display = "block";
        select_options_rural_indigena.style.display = "none";
        localizacao_diferenciada.style.display = "none";
    } else {
        select_options_endereco.style.display = "none";
        select_options_titulo_endereco.style.display = "none";
        select_options_bairro.style.display = "none";
        select_options_numero.style.display = "none";
        select_options_rural_indigena.style.display = "none";
        localizacao_diferenciada.style.display = "none";
    }
}

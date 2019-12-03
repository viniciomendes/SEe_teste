let municipios = ["Acrelândia",
    "Assis Brasil",
    "Brasiléia",
    "Bujari",
    "Capixaba",
    "Cruzeiro do Sul",
    "Epitaciolândia",
    "Feijó",
    "Jordão",
    "Mâncio Lima",
    "Manoel Urbano",
    "Marechal Thaumaturgo",
    "Plácido de Castro",
    "Porto Acre",
    "Porto Walter",
    "Rio Branco",
    "Rodrigues Alves",
    "Santa Rosa do Purus",
    "Sena Madureira",
    "Senador Guiomard",
    "Tarauacá",
    "Xapuri"
];
let first_option_municipio = document.querySelector('#municipio');
    
for (i = 0; i < municipios.length; i++) {
    if (municipio === municipios[i]){
        municipios.splice(i, 1);
    }
}  

for (j = 0; j < municipios.length; j++){
    var novo_array_municipios = document.createElement('option');
    novo_array_municipios.textContent = municipios[j];
    novo_array_municipios.setAttribute('value', municipios[j]);
    first_option_municipio.appendChild(novo_array_municipios);
    first_option_municipio.insertAdjacentHTML('beforeend', novo_array_municipios);
}

console.log(novo_array_municipios);




// function municipio_selected(obj) {
//     let selectBox = obj;
//     let select_municipio = selectBox.options[selectBox.selectedIndex].value;
// }

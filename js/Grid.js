'use strict'
import { API, config } from './Variables.js';
var Base_url = "http://localhost/HoyosLuqueWEB";
var urlinfo = window.location;
var AuxgridData = {
    currentPage: 0,
    LastPage: 0,
    From: 0,
    To: 0,
    Total: 0
}
var auxobject;
var gridData = {
    currentPage: 0,
    LastPage: 0,
    From: 0,
    To: 0,
    Total: 0
}
var Inmuebles;
var Barrios = [];
var loader = `          
    <div id="Loader" class="col-12 pt-3">
        <div class="d-flex justify-content-center">
        <div class="text-primary spinner-border my-5" style="width: 5rem;height: 5rem;border: 10px solid currentColor;border-right-color: transparent;" role="status">
        </div>
        </div>
    </div>
    `;
document.addEventListener('DOMContentLoaded', () => {
    var FormBusqueda = document.getElementById('Busqueda');

    function ImprimeBarrios() {
        var idBarrio = document.getElementById('Barrio');

        Barrios.forEach(element => {
            if (idBarrio) {
                idBarrio.innerHTML += '<option value="' + element + '">' + element + '</option>'
            }
        });
    }

    function llenaBarrios(Barrio) {
        if (!Barrios.includes(Barrio)) {
            Barrios.push(Barrio);
        }
    }

    function getBarrios(page) {
        const configBarrios = {
            headers: {
                Authorization: "APP_USR_8316764ad98748b457e02c2bc870a2ad",
                perpage: "50",
                inmobiliaria: "1"
            },
            params: {
                page: page
            }
        }
        axios.get(API.Api_Url + API.ProGrid_Ep, configBarrios)
            .then(response => {
                auxobject = response.data.data;
                AuxgridData.currentPage = response.data.current_page;
                AuxgridData.LastPage = response.data.last_page;
                AuxgridData.From = response.data.from;
                AuxgridData.To = response.data.to;
                AuxgridData.Total = response.data.total;
                auxobject.forEach(element => {
                    llenaBarrios(element.neighborhood);
                });
                if (AuxgridData.currentPage < AuxgridData.LastPage) {
                    return getBarrios(AuxgridData.currentPage + 1);
                }
                else {
                    ImprimeBarrios();
                }
            })
            .catch(error => {
                console.log(error);
            })
    }

    function Dameimage(path, alt, precio, modalidad, type, codigo) {
        var typeImage;
        if (type === 'APARTAMENTO') {
            typeImage = '<img class="tipo position-absolute" src="' + Base_url + '/assets/AptoIcon.png" alt="Type"/>'
        }
        else if (type === 'CASA') {
            typeImage = '<img class="tipo position-absolute" src="' + Base_url + '/assets/CasaIcon.png" alt="Type"/>'
        }
        else {
            typeImage = '<img class="tipo position-absolute" src="' + Base_url + '/assets/CasaIcon.png" alt="Type"/>'
        }
        var image = '<img class="card-img-top h-100" src="' + path + '" alt="' + alt + '">';
        var ancla1 = '<a href="' + Base_url + '/detalle/' + "?cod=" + codigo + '" class="btn btn-secundary rounded-0 w-100 h-100 text-uppercase text-left text-white"><p>' + precio + '</p></a>';
        var ancla2 = '<a href="' + Base_url + '/detalle/' + "?cod=" + codigo + '" class="btn btn-primary rounded-0 w-100 h-100 text-uppercase text-right"><p>' + modalidad + '</p></a>';
        return typeImage + image + ancla1 + ancla2;
    }

    function DameCardbody(titulo, ciudad, barrio, cuartos, baños, parqueaderos, area, codigo) {
        var CardBody = `
        <div class="card-body px-3 row">
            <div class="col-12 color-primary">
                <h2>`+ titulo + `</h2>
            </div>
            <hr class="Barra w-100 mx-0 mt-0 mb-3">
            <div class="col-5 color-primary">
                <h3>`+ ciudad + `</h3>
                <h3>`+ barrio + `</h3>
            </div>
            <div class="col-7 text-right customtext">
                <div>
                    <p class="Icons"><i class="icon-Dormitorios"></i> `+ cuartos + ` <span class="font-weight-bold"> | </span> <i class="icon-Banos"></i> ` + baños + ` <span class="font-weight-bold"> | </span> <i class="icon-Parqueaderos"></i> ` + parqueaderos + ` </p>
                </div>
                <div>
                    <p><span class="font-weight-bold">Area:</span> `+ area + `m<sup>2</sup> <span class="font-weight-bold">| Cód.</span> ` + codigo + `</p>
                </div>
            </div>
            <hr class="Barra w-100 m-0">
        </div>
        `;
        return CardBody;
    }

    function loadCounter() {
        var ElementContador = document.getElementById('contador');
        if (ElementContador) {
            ElementContador.innerHTML = '<p class="m-0">' + gridData.From + '-' + gridData.To + ' de <span class="font-weight-bold">' + gridData.Total + '</span></p>';
        }
    }

    function loadGrid() {
        var ElementGrid = document.getElementById('Grid');
        Inmuebles.forEach(Inmueble => {
            //console.log(Inmueble);
            var Imagenes = Dameimage(Inmueble.image, Inmueble.real_state_name, Inmueble.price_format, Inmueble.biz, Inmueble.type, Inmueble.codpro);
            var titulo = Inmueble.type + " En " + Inmueble.biz + " En " + Inmueble.city;
            var cardbody = DameCardbody(titulo, Inmueble.city, Inmueble.neighborhood, Inmueble.bedrooms, Inmueble.bathrooms, Inmueble.parking, Inmueble.area_cons, Inmueble.codpro);
            if (ElementGrid) {
                ElementGrid.innerHTML +=
                    '<div class="col-12 col-lg-4 pt-3"><div class="card mb-2">' + Imagenes + cardbody + '</div></div>';
            }

        });
    }

    function getGrid(pagina, modalidad, ciudad, barrio, estrato, codigo, tipo, habitaciones, baños, parqueaderos, minprecio, maxprecio) {
        if (codigo === "") { codigo = undefined; };
        if (ciudad === "") { ciudad = undefined; };
        if (barrio === "") { barrio = undefined; };
        if (estrato === "") { estrato = undefined; };
        if (modalidad === "") { modalidad = undefined; };
        if (tipo === "") { tipo = undefined; };
        if (habitaciones === "") { habitaciones = undefined; };
        if (baños === "") { baños = undefined; };
        if (parqueaderos === "") { parqueaderos = undefined; };
        if (minprecio === "") { minprecio = undefined; };
        if (maxprecio === "") { maxprecio = undefined; };
        config.params = {
            page: pagina,
            codpro: codigo,
            city: ciudad,
            neighborhood: barrio,
            stratum: estrato,
            biz: modalidad,
            type: tipo,
            bedrooms: habitaciones,
            bathrooms: baños,
            minparking: parqueaderos,
            maxparking: parqueaderos,
            pvmin: minprecio,
            pvmax: maxprecio
        };
        //console.log(config.params);
        var ElementLoad = document.getElementById('Loader');
        if (ElementLoad) {
            ElementLoad.classList.add('d-block');
            ElementLoad.classList.remove('d-none');
        }
        axios.get(API.Api_Url + API.ProGrid_Ep, config)
            .then(response => {
                Inmuebles = response.data.data;
                gridData.currentPage = response.data.current_page;
                gridData.LastPage = response.data.last_page;
                gridData.From = response.data.from;
                gridData.To = response.data.to;
                gridData.Total = response.data.total;
                if (ElementLoad) {
                    ElementLoad.classList.remove('d-block');
                    ElementLoad.classList.add('d-none');
                }
                loadCounter();
                loadGrid();
            })
            .catch(error => {
                console.log(error);
            })
    }

    FormBusqueda.addEventListener("submit", (event) => {
        event.preventDefault();
        var ElementGrid = document.getElementById('Grid');
        var FormInputs = {
            ciudad: document.querySelector('[name="ciudad"]'),
            barrio: document.querySelector('[name="barrio"]'),
            estrato: document.querySelector('[name="estrato"]'),
            minprecio: document.querySelector('[name="minprecio"]'),
            maxprecio: document.querySelector('[name="maxprecio"]'),
            codigo: document.querySelector('[name="codigo"]'),
            modalidad: document.querySelector('[name="modalidad"]'),
            tipo: document.querySelector('[name="tipo"]'),
            habitaciones: document.querySelector('[name="habitaciones"]'),
            baños: document.querySelector('[name="baños"]'),
            parqueaderos: document.querySelector('[name="parqueaderos"]')
        }
        ElementGrid.innerHTML = "";
        ElementGrid.innerHTML = loader;
        getGrid(1, FormInputs.modalidad.value, FormInputs.ciudad.value, FormInputs.barrio.value, FormInputs.estrato.value,
            FormInputs.codigo.value, FormInputs.tipo.value, FormInputs.habitaciones.value, FormInputs.baños.value,
            FormInputs.parqueaderos.value, FormInputs.minprecio.value, FormInputs.maxprecio.value);
    })
    if (urlinfo.pathname === "/HoyosLuqueWEB/busqueda/") {
        getBarrios(1);
        getGrid(1);
    }
    else if (urlinfo.pathname === "/HoyosLuqueWEB/busqueda/ventas/") {
        getBarrios(1);
        getGrid(1, 2);
    }
    else if (urlinfo.pathname === "/HoyosLuqueWEB/busqueda/arriendo/") {
        getBarrios(1);
        getGrid(1, 1);
    }
})

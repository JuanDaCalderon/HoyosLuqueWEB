'use strict'
import { API, config } from './Variables.js';

var paths = "/HoyosLuqueWEB/busqueda/";
//var paths = "/HoyosLuque/busqueda/";

//var Base_url = "http://localhost/HoyosLuqueWEB/";
var Base_url = "https://www.proyectodomus.com/HoyosLuque/";
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

var HomeParams = {
    codigo: "",
    tipo: ""
}


document.addEventListener('DOMContentLoaded', () => {
    var FormBusqueda = document.getElementById('Busqueda');
    var ContainerPag = document.getElementById('paginacion');
    var PageSubmit = document.getElementById('PageSubmit');
    function Paginacion() {
        ContainerPag.innerHTML = "";
        var First = `
        <li class="page-item px-1">
            <button value="`+ ((gridData.currentPage) - 1) + `" type="submit" name="pagina" class="page-link" tabindex="-1">Anterior</button>
        </li>
        <li class="page-item px-1">
            <button value="`+ ((gridData.currentPage) - 1) + `" type="submit" name="pagina" class="page-link">` + ((gridData.currentPage) - 1) + `</button>
        </li>
        `;
        var Current = `
        <li class="page-item px-1 active disabled">
            <button class="page-link">`+ gridData.currentPage + `</button>
        </li>`;
        var Second = `
        <li class="page-item px-1">
            <button value="`+ ((gridData.currentPage) + 1) + `" type="submit" name="pagina" class="page-link">` + ((gridData.currentPage) + 1) + `</button>
        </li>
        <li class="page-item px-1">
            <button value="`+ ((gridData.currentPage) + 1) + `" type="submit" name="pagina" class="page-link">Siguiente</button>
        </li>
        `;

        if (ContainerPag) {
            if (gridData.currentPage !== 1) {
                ContainerPag.innerHTML += First;
            }
            ContainerPag.innerHTML += Current;
            if (gridData.currentPage !== gridData.LastPage) {
                ContainerPag.innerHTML += Second;
            }
        }

    }

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

    function getGrid(pagina, modalidad, codigo, tipo, estrato, ciudad, barrio, habitaciones, baños, parqueaderos, minprecio, maxprecio) {
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
        config.headers = {
            ...config.headers,
            perpage: 9,
        };
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
                gridData = {
                    ...gridData,
                    currentPage: response.data.current_page,
                    LastPage: response.data.last_page,
                    From: response.data.from,
                    To: response.data.to,
                    Total: response.data.total
                }
                /*                 gridData.currentPage = response.data.current_page;
                                gridData.LastPage = response.data.last_page;
                                gridData.From = response.data.from;
                                gridData.To = response.data.to;
                                gridData.Total = response.data.total; */
                if (ElementLoad) {
                    ElementLoad.classList.remove('d-block');
                    ElementLoad.classList.add('d-none');
                }
                loadCounter();
                loadGrid();
                Paginacion();
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
        if (ElementGrid) {
            ElementGrid.innerHTML = "";
            ElementGrid.innerHTML = loader;
            getGrid(1, FormInputs.modalidad.value, FormInputs.codigo.value, FormInputs.tipo.value, FormInputs.estrato.value,
                FormInputs.ciudad.value, FormInputs.barrio.value, FormInputs.habitaciones.value, FormInputs.baños.value,
                FormInputs.parqueaderos.value, FormInputs.minprecio.value, FormInputs.maxprecio.value);
        }
    })


    function cambiarPagina(newPage, modalidad) {
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
        if (ElementGrid) {
            ElementGrid.innerHTML = "";
            ElementGrid.innerHTML = loader;
            getGrid(newPage, modalidad, FormInputs.codigo.value, FormInputs.tipo.value, FormInputs.estrato.value,
                FormInputs.ciudad.value, FormInputs.barrio.value, FormInputs.habitaciones.value, FormInputs.baños.value,
                FormInputs.parqueaderos.value, FormInputs.minprecio.value, FormInputs.maxprecio.value);
        }
    }


    /* START APPP */
    if (urlinfo.pathname === paths) {
        getBarrios(1);
        if (document.referrer === Base_url) {
            var URLParams = window.location.search;
            var parametros = new URLSearchParams(URLParams);
            HomeParams = {
                codigo: parametros.get("cod"),
                tipo: parametros.get("tipo")
            }
            if (HomeParams.codigo === null && HomeParams.tipo === null) {
                getGrid(1);
            }
            else {
                getGrid(1, "", HomeParams.codigo, HomeParams.tipo);
            }
        }
        else {
            var URLParams = window.location.search;
            var parametros = new URLSearchParams(URLParams);
            if (parametros.has("pagina")) {
                cambiarPagina(parametros.get("pagina"));
            }
            else {
                getGrid(1);
            }
        }
    }
    else if (urlinfo.pathname === paths + "ventas/") {
        getBarrios(1);
        if (document.referrer === Base_url) {
            var URLParams = window.location.search;
            var parametros = new URLSearchParams(URLParams);
            HomeParams = {
                codigo: parametros.get("cod"),
                tipo: parametros.get("tipo")
            }
            if (HomeParams.codigo === null && HomeParams.tipo === null) {
                getGrid(1, 2);
            }
            else {
                getGrid(1, 2, HomeParams.codigo, HomeParams.tipo);
            }
        }
        else {
            var URLParams = window.location.search;
            var parametros = new URLSearchParams(URLParams);
            if (parametros.has("pagina")) {
                cambiarPagina(parametros.get("pagina"), 2);
            }
            else {
                getGrid(1, 2);
            }
        }
    }
    else if (urlinfo.pathname === paths + "arriendo/") {
        getBarrios(1);
        if (document.referrer === Base_url) {
            var URLParams = window.location.search;
            var parametros = new URLSearchParams(URLParams);
            HomeParams = {
                codigo: parametros.get("cod"),
                tipo: parametros.get("tipo")
            }
            if (HomeParams.codigo === null && HomeParams.tipo === null) {
                getGrid(1, 1);
            }
            else {
                getGrid(1, 1, HomeParams.codigo, HomeParams.tipo);
            }
        }
        else {
            var URLParams = window.location.search;
            var parametros = new URLSearchParams(URLParams);
            if (parametros.has("pagina")) {
                cambiarPagina(parametros.get("pagina"), 1);
            }
            else {
                getGrid(1, 1);
            }

        }
    }
})

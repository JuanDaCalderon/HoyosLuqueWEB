'use strict'
import { API, config } from './Variables.js';
var paths = "/HoyosLuqueWEB/busqueda/";
//var paths = "/HoyosLuque/busqueda/";

var Base_url = "http://localhost/HoyosLuqueWEB/";
//var Base_url = "https://www.proyectodomus.com/HoyosLuque/";
var gridData = {
    currentPage: 0,
    LastPage: 0,
    From: 0,
    To: 0,
    Total: 0
}
var Inmuebles;


document.addEventListener('DOMContentLoaded', () => {
    var ContainerBullets = document.getElementById('Bullets');
    var ContainerDestacados = document.getElementById('DestacadoContainer');
    var FormBusqueda = document.getElementById('Busqueda');

    function PostBullets() {
        if (ContainerBullets) {
            for (let index = 0; index < gridData.LastPage; index++) {
                if (index === 0) {
                    ContainerBullets.innerHTML += '<li data-target="#multi-item-example" data-slide-to="' + index + '" class="active"></li>';
                }
                else {
                    ContainerBullets.innerHTML += '<li data-target="#multi-item-example" data-slide-to="' + index + '"></li>';
                }
            }
        }
    }

    function Dameimage(path, alt, precio, modalidad, codigo) {
        var image = '<img class="card-img-top h-100" src="' + path + '" alt="' + alt + '">';
        var ancla1 = '<a href="' + Base_url + 'detalle/' + "?cod=" + codigo + '" class="btn btn-secundary rounded-0 w-100 h-100 text-uppercase text-left text-white"><p>' + precio + '</p></a>';
        var ancla2 = '<a href="' + Base_url + 'detalle/' + "?cod=" + codigo + '" class="btn btn-primary rounded-0 w-100 h-100 text-uppercase text-right"><p>' + modalidad + '</p></a>';
        return image + ancla1 + ancla2;
    }

    function DameCardbody(ciudad, barrio, cuartos, baños, parqueaderos, area, codigo) {
        var CardBody = `
            <div class="card-body px-3 row">
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


    function postDestacado(Inmueble, index) {
        var id = "rowContainer" + index;
        var ContainerRow = document.getElementById(id);
        var Imagenes = Dameimage(Inmueble.image, Inmueble.real_state_name, Inmueble.price_format, Inmueble.biz, Inmueble.codpro);
        var cardbody = DameCardbody(Inmueble.city, Inmueble.neighborhood, Inmueble.bedrooms, Inmueble.bathrooms, Inmueble.parking, Inmueble.area_cons, Inmueble.codpro);
        if (ContainerRow) {
            ContainerRow.innerHTML += '<div class="col-12 col-xl-4"><div class="card mb-2">' + Imagenes + cardbody + '</div></div>';
        }
    }

    function ContainerDestacado(Inmuebles, index) {
        if (ContainerDestacados) {
            if (index === 1) {
                ContainerDestacados.innerHTML += '<div class="carousel-item active"><div id="rowContainer' + index + '" class="row"></div></div>';
            }
            else {
                ContainerDestacados.innerHTML += '<div class="carousel-item"><div id="rowContainer' + index + '" class="row"></div></div>';
            }

            Inmuebles.forEach(element => {
                postDestacado(element, index);
            });
        }
    }

    function getGrid(pagina) {
        config.headers = {
            ...config.headers,
            perpage: 3,
        };
        config.params = {
            page: pagina,
            great: "on"
        };
        axios.get(API.Api_Url + API.ProGrid_Ep, config)
            .then(response => {
                Inmuebles = response.data.data;
                gridData.currentPage = response.data.current_page;
                gridData.LastPage = response.data.last_page;
                gridData.From = response.data.from;
                gridData.To = response.data.to;
                gridData.Total = response.data.total;
                ContainerDestacado(Inmuebles, gridData.currentPage);
                if (gridData.currentPage < gridData.LastPage) {
                    return getGrid(gridData.currentPage + 1);
                }
                else {
                    PostBullets();
                }
            })
            .catch(error => {
                console.log(error);
            })
    }

    FormBusqueda.addEventListener("submit", (event) => {
        event.preventDefault();
        var FormInputs = {
            codigo: document.querySelector('[name="codigo"]'),
            modalidad: document.querySelector('[name="modalidad"]'),
            tipo: document.querySelector('[name="tipo"]')
        }
        if (FormInputs.modalidad.value === "1") {
            window.location.href = Base_url + "busqueda/arriendo/" + "?cod=" + FormInputs.codigo.value + "&tipo=" + FormInputs.tipo.value;
        }
        else if (FormInputs.modalidad.value === "2") {
            window.location.href = Base_url + "busqueda/ventas/" + "?cod=" + FormInputs.codigo.value + "&tipo=" + FormInputs.tipo.value;
        }
        else {
            window.location.href = Base_url + "busqueda/" + "?cod=" + FormInputs.codigo.value + "&tipo=" + FormInputs.tipo.value;
        }
    })

    getGrid(1);
})
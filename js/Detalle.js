'use strict'
import { API, config } from './Variables.js';
var paths = "/HoyosLuqueWEB/busqueda/";
//var paths = "/HoyosLuque/busqueda/";

//var Base_url = "http://localhost/HoyosLuqueWEB/";
var Base_url = "https://www.proyectodomus.com/HoyosLuque/";
var code = "";
var bandera = true;
var gridData = {
    currentPage: 0,
    LastPage: 0,
    From: 0,
    To: 0,
    Total: 0
}
var Inmuebles;
var ProDetail = {
    titulo: "",
    ciudad: "",
    barrio: "",
    precio: "",
    administracion: "",
    habitaciones: "",
    baños: "",
    parqueaderos: "",
    area: "",
    codigo: "",
    modalidad: "",
    tipo: "",
    zona: "",
    direccion: "",
    descripcion: "",
    parqueaderoCubiertos: "",
    estrato: "",
    año_construccion: "",
    latitud: "",
    longitud: "",
    images: [],
    asesor: {},
    amenities: [],
    caracteristicas: []
}

var imagepro = {
    currentPage: 0,
    LastPage: 0,
    Total: 0
}

var amenitiespro = {
    from: 0,
    to: 0,
    currentPage: 0,
    LastPage: 0,
    Total: 0
}

document.addEventListener('DOMContentLoaded', () => {
    var ProdetailContainer = document.getElementById('ProDetailMain');
    var SimilaresContainer = document.getElementById('SimilaresContainer');
    var ContainerDestacados = document.getElementById('DestacadoContainer');
    var ContainerInfo1 = document.getElementById('InfoProperty1');
    var ContainerInfo2 = document.getElementById('InfoProperty2');
    var ContainerInfo3 = document.getElementById('InfoProperty3');
    var InfoPropertyAsesor = document.getElementById('InfoPropertyAsesor');
    var InfoPropertyLlamada = document.getElementById('InfoPropertyLlamada');
    var InfoPropertycaracteristicas = document.getElementById('InfoPropertycaracteristicas');
    var ContainerBullets = document.getElementById('Bullets');
    var MapContainer = document.getElementById('map');

    function Map() {
        var map = '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d835.9443634785328!2d' + ProDetail.longitud + '!3d' + ProDetail.latitud + '!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sco!4v1624373665419!5m2!1ses-419!2sco" width="100%" height="700" style="border:0;" allowfullscreen loading="lazy"></iframe>';
        MapContainer.innerHTML = map;
    }

    function loadMainDettale(titulo, ciudad, modalidad, habitaciones, baños, parqueaderos, area, codigo, precio, administracion) {
        var col1 = `        
        <div class="detail col-12 col-lg-5 pl-0 pl-sm-3 pl-lg-5 pr-0 pr-lg-3">
            <h1 class="text-left m-0">`+ titulo + `</h1>
            <h2 class="m-0">`+ ciudad + `</h2>
            <h2 class="m-0">`+ modalidad + `</h2>
            <div class="separador d-none d-lg-block"></div>
        </div>`;
        var col2 = `
        <div class="d-none detail col-6 col-lg-3 d-sm-flex flex-column justify-content-center align-items-center pt-3 pl-0 pl-lg-3">
            <div class="w-100">
                <p class="Icons mb-1 d-flex justify-content-around"><i class="icon-Dormitorios"></i> `+ habitaciones + ` <span> | </span> <i class="icon-Banos"></i> ` + baños + ` <span> | </span> <i class="icon-Parqueaderos"></i> ` + parqueaderos + `</p>
            </div>
            <div class="w-100">
                <p class="text d-flex justify-content-around"><span class="font-weight-bold">Area:</span> <span>`+ area + `m<sup>2</sup></span> |<span class="font-weight-bold"> Cód.</span> ` + codigo + `</p>
            </div>
            <div class="separador"></div>
        </div>
        <hr class="d-block d-sm-none w-100 Barra my-1">`;
        var col3 = `
        <div class="detail col-12 col-sm-6 col-lg-4 pl-0 pr-0 pr-lg-5">
            <h1 class="text-right m-0 price">`+ precio + `</h1>
            <h2 class="text-right m-0">AD $`+ administracion + `</h2>
        </div>`;
        return col1 + col2 + col3;
    }

    function postImage(path, index) {
        var id = "rowContainer" + index;
        var ContainerRow = document.getElementById(id);
        ContainerRow.innerHTML += '<div class="col-12 col-md-4 px-1"><div class="card"> <img class="card-img-top h-100" src="' + path + '" alt="img01"> </div></div>';
    }

    function loadGaleria(images, index, page) {
        var ContainerRow;
        if (page === 1) {
            ContainerRow = '<div class="carousel-item active"><div id="rowContainer' + page + '" class="row"></div></div>';
        }
        else {
            ContainerRow = '<div class="carousel-item"><div id="rowContainer' + page + '" class="row"></div></div>';
        }
        ContainerDestacados.innerHTML += ContainerRow;
        var perpage = 3;
        for (; index < images.length; index++) {
            if (index < perpage * page) {
                postImage(images[index].imageurl, page);
            }
            else {
                if (bandera) {
                    return loadGaleria(images, index, page += 1)
                }
            }
        }
        bandera = false;
        return null;
    }

    function loadListAmenitieItem(amenitie, index) {
        var id = "ulListAmenities" + index;
        var ContainerLi = document.getElementById(id);
        ContainerLi.innerHTML += '<li>' + amenitie + '</li>';
    }

    function loadAmenities(index, page) {
        var ContainerAmenitie = document.getElementById('RowAmenities');
        ContainerAmenitie.innerHTML += '<div class="col-12 col-sm-3"><ul class="m-0" id="ulListAmenities' + page + '"></div></ul>';
        var perpage = 4;
        for (; index < ProDetail.amenities.length; index++) {
            if (index < perpage * page) {
                loadListAmenitieItem(ProDetail.amenities[index].name, page);
            }
            else {
                if (bandera) {
                    return loadAmenities(index, page += 1)
                }
            }
        }
        bandera = false;
        return null;
    }

    function LoadInfo(tipo, barrio, estrato, descripcion) {
        amenitiespro = {
            ...amenitiespro,
            currentPage: 1,
            LastPage: Math.ceil(ProDetail.amenities.length / 4),
            Total: ProDetail.amenities.length
        }
        var row1;
        if (tipo === "CASA") {
            row1 = `      
                <div class="col-6 d-flex align-items-end">
                    <span class="icon d-inline-block position-absolute">
                    <img class="img-fluid" src="`+ Base_url + `/assets/CasaIcon.png" alt="apto">
                    </span>
                    <h3 class="mb-0 ml-4 pl-5"> `+ barrio + ` </h3>
                </div>
                <div class="col-6 d-flex justify-content-end align-items-end">
                    <h4 class="d-inline-block m-0"> ESTRATO `+ estrato + ` </h4>
                </div>
                <div class="col-12">
                    <hr class="Barra w-100">
                </div>`;
        }
        else if (tipo === "APARTAMENTO") {
            row1 =
                `<div class="col-6 d-flex align-items-end">
                    <span class="icon d-inline-block position-absolute">
                    <img class="img-fluid" src="`+ Base_url + `/assets/AptoIcon.png" alt="apto">
                    </span>
                    <h3 class="mb-0 ml-4 pl-5"> `+ barrio + ` </h3>
                </div>
                <div class="col-6 d-flex justify-content-end align-items-end">
                    <h4 class="d-inline-block m-0"> ESTRATO `+ estrato + ` </h4>
                </div>
                <div class="col-12">
                    <hr class="Barra w-100">
                </div>`;
        }
        else {
            row1 =
                `<div class="col-6 d-flex align-items-end">
                    <span class="icon d-inline-block position-absolute">
                    <img class="img-fluid" src="`+ Base_url + `/assets/CasaIcon.png" alt="apto">
                    </span>
                    <h3 class="mb-0 ml-4 pl-5"> `+ barrio + ` </h3>
                </div>
                <div class="col-6 d-flex justify-content-end align-items-end">
                    <h4 class="d-inline-block m-0"> ESTRATO `+ estrato + ` </h4>
                </div>
                <div class="col-12">
                    <hr class="Barra w-100">
                </div>`;
        }
        var row2 = `
            <div class="col-12">
                <p class="text-justify">`+ descripcion + `</p>
            </div>`;

        var col1 = `        
        <div class="col-12">
        <div class="row p-0 pb-4">
          <div class="col-auto">
            <h2 class="d-inline-block m-0"> CARACTERÍSTICAS ESPECIALES </h2>
          </div>  
          <div class="col d-flex align-items-center">
            <hr class="Barra caracteristica w-100">
          </div>
        </div>
      </div>
      <div class="col-12">
        <div id="RowAmenities" class="row">
        </div>
      </div>`;

        ContainerInfo1.innerHTML = row1;
        ContainerInfo2.innerHTML = row2;
        ContainerInfo3.innerHTML = col1;
        loadAmenities(0, amenitiespro.currentPage);
    }

    function loadBarraAsesor() {
        var ele1 = `
        <div class="col-12 col-sm-3">
            <img class="img-fluid" src="`+ ProDetail.asesor.picture + `" alt="asesor">
        </div>
        <div class="col-12 col-sm-9">
            <h4 class="asesor">ASESOR COMERCIAL</h4>
            <h5 class="py-2">`+ ProDetail.asesor.name + ` ` + ProDetail.asesor.last_name + `</h5>
            <p class="py-0 pr-1 m-0 asesor text-justify">`+ ProDetail.asesor.email + `<br>` + ProDetail.asesor.movil_phone + `<br>` + ProDetail.asesor.telephone + `</p>
        </div>`;
        var ele2 = `
        <div class="col-12 px-0 pb-2">
            <a href="tel:` + ProDetail.asesor.movil_phone + `" class="btn btn-primary w-100 rounded-0 font-weight-bold">SOLICITAR VISITA</a>
        </div>`;
        var ele3;
        InfoPropertyAsesor.innerHTML = ele1;
        InfoPropertyLlamada.innerHTML = ele2;
        ProDetail.caracteristicas.forEach(element => {
            ele3 = `        
            <div class="col-12 px-0">
                <div class="features pt-1">
                    <p class="mb-0">`+ element.name + `</p>
                    <span class="font-weight-bold float-right">`+ element.ele + `</span>
                </div>
                <hr class="Barra w-100 my-2 my-md-3">
            </div>`;
            InfoPropertycaracteristicas.innerHTML += ele3;
        });
    }

    function getDetail(codigo) {
        axios.get(API.Api_Url + API.ProDetail_Ep + codigo, config)
            .then(response => {
                return response.data.data[0];
            })
            .then(property => {
                ProDetail = {
                    ...ProDetail,
                    titulo: (property.type + " EN " + property.biz).toUpperCase(),
                    ciudad: property.city,
                    barrio: property.neighborhood,
                    precio: property.price_format,
                    administracion: property.administration,
                    habitaciones: property.bedrooms,
                    baños: property.bathrooms,
                    parqueaderos: property.parking,
                    area: property.area_cons,
                    codigo: property.codpro,
                    modalidad: property.biz,
                    tipo: property.type,
                    zona: property.zone,
                    direccion: property.address,
                    descripcion: property.description,
                    parqueaderoCubiertos: property.parking_covered,
                    estrato: property.stratum,
                    año_construccion: property.build_year,
                    images: property.images,
                    latitud: parseFloat(property.latitude),
                    longitud: parseFloat(property.longitude),
                    asesor: property.broker[0],
                    amenities: property.amenities,
                    caracteristicas: [{ ele: property.bedrooms, name: 'Habitaciones' }, { ele: property.bathrooms, name: 'Baños' }, { ele: property.parking, name: 'Parqueaderos' }, { ele: property.area_cons, name: 'Area m2' }, { ele: property.build_year, name: 'Año de construcción' }, { ele: property.zone, name: 'Zona' }]
                }
                imagepro = {
                    ...imagepro,
                    currentPage: 1,
                    LastPage: Math.ceil(property.images.length / 3),
                    Total: property.images.length

                }
                ProdetailContainer.innerHTML = loadMainDettale(ProDetail.titulo, ProDetail.ciudad, ProDetail.modalidad, ProDetail.habitaciones, ProDetail.baños, ProDetail.parqueaderos, ProDetail.area, ProDetail.codigo, ProDetail.precio, ProDetail.administracion);
                loadGaleria(ProDetail.images, 0, imagepro.currentPage);
                bandera = true;
                LoadInfo(ProDetail.tipo, ProDetail.barrio, ProDetail.estrato, ProDetail.descripcion);
                bandera = true;
                loadBarraAsesor();
                getSimilares(1, 3, property.biz_code, property.city_code, property.type_code, ProDetail.habitaciones, ProDetail.baños, property.price - 300000000, property.price + 300000000);
                Map();
            })
            .catch(error => {
                console.log(error);
            })
    }

    function PostBullets() {
        if (ContainerBullets) {
            for (let index = 0; index < gridData.LastPage; index++) {
                if (index === 0) {
                    ContainerBullets.innerHTML += '<li data-target="#multi-item-similares" data-slide-to="' + index + '" class="active"></li>';
                }
                else {
                    ContainerBullets.innerHTML += '<li data-target="#multi-item-similares" data-slide-to="' + index + '"></li>';
                }
            }
        }
    }

    function Dameimage(path, alt, precio, modalidad, codigo) {
        var image = '<img class="card-img-top h-100" src="' + path + '" alt="' + alt + '">';
        var ancla1 = '<a href="' + Base_url + '/detalle/' + "?cod=" + codigo + '" class="btn btn-secundary rounded-0 w-100 h-100 text-uppercase text-left text-white"><p>' + precio + '</p></a>';
        var ancla2 = '<a href="' + Base_url + '/detalle/' + "?cod=" + codigo + '" class="btn btn-primary rounded-0 w-100 h-100 text-uppercase text-right"><p>' + modalidad + '</p></a>';
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
        var id = "rowContainersimilares" + index;
        var ContainerRow = document.getElementById(id);
        var Imagenes = Dameimage(Inmueble.image, Inmueble.real_state_name, Inmueble.price_format, Inmueble.biz, Inmueble.codpro);
        var cardbody = DameCardbody(Inmueble.city, Inmueble.neighborhood, Inmueble.bedrooms, Inmueble.bathrooms, Inmueble.parking, Inmueble.area_cons, Inmueble.codpro);
        if (ContainerRow) {
            ContainerRow.innerHTML += '<div class="col-12 col-xl-4"><div class="card mb-2">' + Imagenes + cardbody + '</div></div>';
        }
    }
    function ContainerDestacado(Inmuebles, index) {
        if (SimilaresContainer) {
            if (index === 1) {
                SimilaresContainer.innerHTML += '<div class="carousel-item active"><div id="rowContainersimilares' + index + '" class="row"></div></div>';
            }
            else {
                SimilaresContainer.innerHTML += '<div class="carousel-item"><div id="rowContainersimilares' + index + '" class="row"></div></div>';
            }

            Inmuebles.forEach(element => {
                postDestacado(element, index);
            });
        }
    }

    function getSimilares(pagina, perpageparam, modalidad, ciudad, tipo, habitaciones, baños, pvmin, pvmax) {
        if (modalidad === "") { modalidad = undefined; };
        if (ciudad === "") { ciudad = undefined; };
        if (tipo === "") { tipo = undefined; };
        if (habitaciones === "") { habitaciones = undefined; };
        if (baños === "") { baños = undefined; };
        if (pvmin < 0) { pvmin = 0; };
        if (pvmax === "") { pvmax = undefined; };
        config.headers = {
            ...config.headers,
            perpage: perpageparam,
        };
        config.params = {
            page: pagina,
            biz: modalidad,
            city: ciudad,
            type: tipo,
            bedrooms: habitaciones,
            bathrooms: baños,
            pvmin: pvmin,
            pvmax: pvmax
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
                    return getSimilares(gridData.currentPage += 1, 3, modalidad, ciudad, tipo, habitaciones, baños, pvmin, pvmax);
                }
                else {
                    PostBullets();
                }
            })
            .catch(error => {
                console.log(error);
            })

    }

    var URLParams = window.location.search;
    var parametros = new URLSearchParams(URLParams);
    code = parametros.get("cod");
    getDetail(code);
})
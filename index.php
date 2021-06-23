<?php 
    require_once 'includes/header.php';
?>

<section class="main cover p-5" id="main-banner">
    <form class="HomeBuscador bg-white p-4">
        <div class="row justify-content-between px-4">
          <div class="col-lg-3 p-0">
            <label class="mb-0" for="Modalidad">MODALIDAD</label>
            <select class="form-control rounded-0" id="Modalidad">
                <option selected disabled>Todos</option>
                <option>Venta</option>
                <option>Arriendo</option>
            </select>
          </div>
          <div class="col-lg-3 p-0">
            <label class="mb-0" for="TipoInmueble">TIPO DE INMUEBLE</label>
            <select class="form-control rounded-0" id="TipoInmueble">
                <option selected disabled>Todos</option>
                <option>Apartamento</option>
                <option>Casa</option>
                <option>Local</option>
            </select>
          </div>
          <div class="col-lg-2 p-0">
            <label class="mb-0" for="Codigo">CÓDIGO</label>
            <input type="text" class="form-control rounded-0" id="Codigo" placeholder="# De código">
          </div>
          <div class="col-lg-3 d-flex flex-row justify-content-start align-items-end mt-4 mt-lg-0 p-0">
            <button type="submit" class="btn btn-primary w-100 rounded-0 font-weight-bold">BUSCAR</button>
          </div>
        </div>
    </form>
    <h1 class="text-white">BUSCA EL INMUEBLE <br> <span>DE TUS SUEÑOS</span></h1>
</section>

<section class="container-fluid py-5 px-6 destacados">
  <div class="row p-0 pb-4">
    <div class="col-auto">
      <h2 class="d-inline-block m-0"> INMUEBLE DESTACADO </h2>
    </div>
    <div class="col d-flex align-items-center">
      <hr class="Barra w-100">
    </div>
  </div>

  <!-- CAROUSEL -->
  <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
    <!--Controls-->
    <div class="controls-top">
      <a class="btn-floating prev" href="#multi-item-example" data-slide="prev"><</a>
      <a class="btn-floating next" href="#multi-item-example" data-slide="next">></a>
    </div>
    <!--/.Controls-->
    <!-- Bullets -->
    <ol class="carousel-indicators destacados">
      <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
      <li data-target="#multi-item-example" data-slide-to="1"></li>
      <li data-target="#multi-item-example" data-slide-to="2"></li>
    </ol>
    <!-- /Bullets -->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
      <!--First slide-->
      <div class="carousel-item active">
        <div class="row">
          <div class="col-12 col-md-4">
            <div class="card mb-2">
              <img class="card-img-top h-100" src="<?php echo $base_url ?>/assets/Carrusel/img01.jpg" alt="img01">
              <a href="<?php echo $base_url ?>/apartamentos/tipo-1/" class="btn btn-secundary rounded-0 w-100 h-100 text-uppercase text-left text-white"><p>$5.000.000</p></a>
              <a href="<?php echo $base_url ?>/apartamentos/tipo-1/" class="btn btn-primary rounded-0 w-100 h-100 text-uppercase text-right"><p>ARRIENDO</p></a>
              <div class="card-body px-3 row">
                <div class="col-12 col-lg-5 color-primary">
                  <h3>BOGOTÁ D.C</h3>
                  <h3>CHICÓ NAVARRA</h3>
                </div>
                <div class="col-12 col-lg-7 text-right customtext">
                  <div>
                    <p class="Icons"><i class="icon-Dormitorios"></i> 3 <span class="font-weight-bold"> | </span> <i class="icon-Banos"></i> 2 <span class="font-weight-bold"> | </span> <i class="icon-Parqueaderos"></i> 1 </p>
                  </div>
                  <div>
                    <p><span class="font-weight-bold">Area:</span> 68.38m<sup>2</sup> <span class="font-weight-bold">| Cód.</span> 565</p>
                  </div>
                </div>
                <hr class="Barra w-100 m-0">
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="card mb-2">
              <img class="card-img-top h-100" src="<?php echo $base_url ?>/assets/Carrusel/img02.png" alt="img02">
              <a href="<?php echo $base_url ?>/apartamentos/tipo-1/" class="btn btn-secundary rounded-0 w-100 h-100 text-uppercase text-left text-white"><p>$5.000.000</p></a>
              <a href="<?php echo $base_url ?>/apartamentos/tipo-2/" class="btn btn-primary rounded-0 w-100 h-100 text-uppercase text-right"><p>VENTA</p></a>
              <div class="card-body px-3 row">
                <div class="col-12 col-lg-5 color-primary">
                  <h3>BOGOTÁ D.C</h3>
                  <h3>CHICÓ NAVARRA</h3>
                </div>
                <div class="col-12 col-lg-7 text-right customtext">
                  <div>
                    <p class="Icons"><i class="icon-Dormitorios"></i> 3 <span class="font-weight-bold"> | </span> <i class="icon-Banos"></i> 2 <span class="font-weight-bold"> | </span> <i class="icon-Parqueaderos"></i> 1 </p>
                  </div>
                  <div>
                    <p><span class="font-weight-bold">Area:</span> 68.38m<sup>2</sup> <span class="font-weight-bold">| Cód.</span> 565</p>
                  </div>
                </div>
                <hr class="Barra w-100 m-0">
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="card mb-2">
              <img class="card-img-top h-100" src="<?php echo $base_url ?>/assets/Carrusel/img03.png" alt="img03">
              <a href="<?php echo $base_url ?>/apartamentos/tipo-1/" class="btn btn-secundary rounded-0 w-100 h-100 text-uppercase text-left text-white"><p>$5.000.000</p></a>
              <a href="<?php echo $base_url ?>/apartamentos/tipo-3/" class="btn btn-primary rounded-0 w-100 h-100 text-uppercase text-right"><p>ARRIENDO</p></a>
              <div class="card-body px-3 row">
                <div class="col-12 col-lg-5 color-primary">
                  <h3>BOGOTÁ D.C</h3>
                  <h3>CHICÓ NAVARRA</h3>
                </div>
                <div class="col-12 col-lg-7 text-right customtext">
                  <div>
                    <p class="Icons"><i class="icon-Dormitorios"></i> 3 <span class="font-weight-bold"> | </span> <i class="icon-Banos"></i> 2 <span class="font-weight-bold"> | </span> <i class="icon-Parqueaderos"></i> 1 </p>
                  </div>
                  <div>
                    <p><span class="font-weight-bold">Area:</span> 68.38m<sup>2</sup> <span class="font-weight-bold">| Cód.</span> 565</p>
                  </div>
                </div>
                <hr class="Barra w-100 m-0">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/.First slide-->

      <!--Second slide-->
      <div class="carousel-item">
        <div class="row">
          <div class="col-12 col-md-4">
            <div class="card mb-2">
              <img class="card-img-top h-100" src="<?php echo $base_url ?>/assets/Carrusel/img04.png" alt="img01">
              <a href="<?php echo $base_url ?>/apartamentos/tipo-1/" class="btn btn-secundary rounded-0 w-100 h-100 text-uppercase text-left text-white"><p>$5.000.000</p></a>
              <a href="<?php echo $base_url ?>/apartamentos/tipo-1/" class="btn btn-primary rounded-0 w-100 h-100 text-uppercase text-right"><p>ARRIENDO</p></a>
              <div class="card-body px-3 row">
                <div class="col-12 col-lg-5 color-primary">
                  <h3>BOGOTÁ D.C</h3>
                  <h3>CHICÓ NAVARRA</h3>
                </div>
                <div class="col-12 col-lg-7 text-right customtext">
                  <div>
                    <p class="Icons"><i class="icon-Dormitorios"></i> 3 <span class="font-weight-bold"> | </span> <i class="icon-Banos"></i> 2 <span class="font-weight-bold"> | </span> <i class="icon-Parqueaderos"></i> 1 </p>
                  </div>
                  <div>
                    <p><span class="font-weight-bold">Area:</span> 68.38m<sup>2</sup> <span class="font-weight-bold">| Cód.</span> 565</p>
                  </div>
                </div>
                <hr class="Barra w-100 m-0">
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="card mb-2">
              <img class="card-img-top h-100" src="<?php echo $base_url ?>/assets/Carrusel/img05.png" alt="img02">
              <a href="<?php echo $base_url ?>/apartamentos/tipo-1/" class="btn btn-secundary rounded-0 w-100 h-100 text-uppercase text-left text-white"><p>$120.000.000</p></a>
              <a href="<?php echo $base_url ?>/apartamentos/tipo-2/" class="btn btn-primary rounded-0 w-100 h-100 text-uppercase text-right"><p>VENTA</p></a>
              <div class="card-body px-3 row">
                <div class="col-12 col-lg-5 color-primary">
                  <h3>BOGOTÁ D.C</h3>
                  <h3>CHICÓ NAVARRA</h3>
                </div>
                <div class="col-12 col-lg-7 text-right customtext">
                  <div>
                    <p class="Icons"><i class="icon-Dormitorios"></i> 3 <span class="font-weight-bold"> | </span> <i class="icon-Banos"></i> 2 <span class="font-weight-bold"> | </span> <i class="icon-Parqueaderos"></i> 1 </p>
                  </div>
                  <div>
                    <p><span class="font-weight-bold">Area:</span> 68.38m<sup>2</sup> <span class="font-weight-bold">| Cód.</span> 565</p>
                  </div>
                </div>
                <hr class="Barra w-100 m-0">
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="card mb-2">
              <img class="card-img-top h-100" src="<?php echo $base_url ?>/assets/Carrusel/img06.png" alt="img03">
              <a href="<?php echo $base_url ?>/apartamentos/tipo-1/" class="btn btn-secundary rounded-0 w-100 h-100 text-uppercase text-left text-white"><p>$5.000.000</p></a>
              <a href="<?php echo $base_url ?>/apartamentos/tipo-3/" class="btn btn-primary rounded-0 w-100 h-100 text-uppercase text-right"><p>VENTA</p></a>
              <div class="card-body px-3 row">
                <div class="col-12 col-lg-5 color-primary">
                  <h3>BOGOTÁ D.C</h3>
                  <h3>CHICÓ NAVARRA</h3>
                </div>
                <div class="col-12 col-lg-7 text-right customtext">
                  <div>
                    <p class="Icons"><i class="icon-Dormitorios"></i> 4 <span class="font-weight-bold"> | </span> <i class="icon-Banos"></i> 3 <span class="font-weight-bold"> | </span> <i class="icon-Parqueaderos"></i> 1 </p>
                  </div>
                  <div>
                    <p><span class="font-weight-bold">Area:</span> 68.38m<sup>2</sup> <span class="font-weight-bold">| Cód.</span> 565</p>
                  </div>
                </div>
                <hr class="Barra w-100 m-0">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/.Second slide-->
      <!--Third slide-->
      <div class="carousel-item">
        <div class="row">
          <div class="col-12 col-md-4">
            <div class="card mb-2">
              <img class="card-img-top h-100" src="<?php echo $base_url ?>/assets/Carrusel/img07.png" alt="img01">
              <a href="<?php echo $base_url ?>/apartamentos/tipo-1/" class="btn btn-secundary rounded-0 w-100 h-100 text-uppercase text-left text-white"><p>$130.000.000</p></a>
              <a href="<?php echo $base_url ?>/apartamentos/tipo-1/" class="btn btn-primary rounded-0 w-100 h-100 text-uppercase text-right"><p>ARRIENDO</p></a>
              <div class="card-body px-3 row">
                <div class="col-12 col-lg-5 color-primary">
                  <h3>BOGOTÁ D.C</h3>
                  <h3>CHICÓ NAVARRA</h3>
                </div>
                <div class="col-12 col-lg-7 text-right customtext">
                  <div>
                    <p class="Icons"><i class="icon-Dormitorios"></i> 3 <span class="font-weight-bold"> | </span> <i class="icon-Banos"></i> 2 <span class="font-weight-bold"> | </span> <i class="icon-Parqueaderos"></i> 1 </p>
                  </div>
                  <div>
                    <p><span class="font-weight-bold">Area:</span> 68.38m<sup>2</sup> <span class="font-weight-bold">| Cód.</span> 565</p>
                  </div>
                </div>
                <hr class="Barra w-100 m-0">
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="card mb-2">
              <img class="card-img-top h-100" src="<?php echo $base_url ?>/assets/Carrusel/img08.png" alt="img02">
              <a href="<?php echo $base_url ?>/apartamentos/tipo-1/" class="btn btn-secundary rounded-0 w-100 h-100 text-uppercase text-left text-white"><p>$525.000.000</p></a>
              <a href="<?php echo $base_url ?>/apartamentos/tipo-2/" class="btn btn-primary rounded-0 w-100 h-100 text-uppercase text-right"><p>VENTA</p></a>
              <div class="card-body px-3 row">
                <div class="col-12 col-lg-5 color-primary">
                  <h3>BOGOTÁ D.C</h3>
                  <h3>CHICÓ NAVARRA</h3>
                </div>
                <div class="col-12 col-lg-7 text-right customtext">
                  <div>
                    <p class="Icons"><i class="icon-Dormitorios"></i> 3 <span class="font-weight-bold"> | </span> <i class="icon-Banos"></i> 2 <span class="font-weight-bold"> | </span> <i class="icon-Parqueaderos"></i> 1 </p>
                  </div>
                  <div>
                    <p><span class="font-weight-bold">Area:</span> 68.38m<sup>2</sup> <span class="font-weight-bold">| Cód.</span> 565</p>
                  </div>
                </div>
                <hr class="Barra w-100 m-0">
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="card mb-2">
              <img class="card-img-top h-100" src="<?php echo $base_url ?>/assets/Carrusel/img09.png" alt="img03">
              <a href="<?php echo $base_url ?>/apartamentos/tipo-1/" class="btn btn-secundary rounded-0 w-100 h-100 text-uppercase text-left text-white"><p>$600.000.000</p></a>
              <a href="<?php echo $base_url ?>/apartamentos/tipo-3/" class="btn btn-primary rounded-0 w-100 h-100 text-uppercase text-right"><p>VENTA</p></a>
              <div class="card-body px-3 row">
                <div class="col-12 col-lg-5 color-primary">
                  <h3>BOGOTÁ D.C</h3>
                  <h3>CHICÓ NAVARRA</h3>
                </div>
                <div class="col-12 col-lg-7 text-right customtext">
                  <div>
                    <p class="Icons"><i class="icon-Dormitorios"></i> 4 <span class="font-weight-bold"> | </span> <i class="icon-Banos"></i> 3 <span class="font-weight-bold"> | </span> <i class="icon-Parqueaderos"></i> 1 </p>
                  </div>
                  <div>
                    <p><span class="font-weight-bold">Area:</span> 68.38m<sup>2</sup> <span class="font-weight-bold">| Cód.</span> 565</p>
                  </div>
                </div>
                <hr class="Barra w-100 m-0">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/Third slide-->
    </div>
    <!--/.Slides-->
  </div>
</section>

<section class="container-fluid py-5 px-6 destacados">
  <div class="row p-0 pb-4">
    <div class="col d-flex align-items-center">
      <hr class="Barra w-100">
    </div>
    <div class="col-auto">
      <h2 class="d-inline-block m-0"> NUESTROS PROYECTOS </h2>
    </div>
  </div>

  <!-- CAROUSEL -->
  <div class="carousel slide carousel-multi-item">
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <div class="row">
          <div class="col-12 col-md-4">
            <div class="card mb-2">
              <img class="card-img-top h-100" src="<?php echo $base_url ?>/assets/Carrusel/DomusSanPatricio.jpg" alt="Domus San patricio">
              <a href="<?php echo $base_url ?>/apartamentos/tipo-1/" class="btn btn-primary rounded-0 w-100 h-100 text-uppercase text-left"><p>DOMUS SAN PATRICIO</p></a>
              <div class="card-body px-3 row">
                <div class="col-12 col-lg-5 color-primary">
                  <h3>BOGOTÁ D.C</h3>
                  <h3>SAN PATRICIO</h3>
                </div>
                <div class="col-12 col-lg-7 text-right customtext">
                  <div>
                    <p><span class="font-weight-bold">APTOS DESDE:</span> $369.662.000</p>
                  </div>
                  <div>
                    <p>CARRERA 17 A #106 - 73/85</p>
                  </div>
                </div>
                <div class="col-12 text-justify p-0 h-7em">
                  <div>
                    <p>El proyecto de vivienda DOMUS San Patricio es un espacio para compartir y disfrutar. Contarás con una variedad de complementos para que disfrutes con tu familia, amigos y equipo de trabajo.</p>
                  </div>
                </div>
                <hr class="Barra w-100 m-0">
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="card mb-2">
              <img class="card-img-top h-100" src="<?php echo $base_url ?>/assets/Carrusel/Domus104.jpg" alt="Domus 104">
              <a href="<?php echo $base_url ?>/apartamentos/tipo-2/" class="btn btn-primary rounded-0 w-100 h-100 text-uppercase text-right"><p>Domus 104</p></a>
              <div class="card-body px-3 row">
                <div class="col-12 col-lg-5 color-primary">
                  <h3>BOGOTÁ D.C</h3>
                  <h3>CHICÓ NAVARRA</h3>
                </div>
                <div class="col-12 col-lg-7 text-right customtext">
                  <div>
                    <p><span class="font-weight-bold">APTOS DESDE:</span> $580.902.000</p>
                  </div>
                  <div>
                    <p>CALLE 104 A #19 A - 63</p>
                  </div>
                </div>
                <div class="col-12 text-justify p-0 h-7em">
                  <div>
                    <p>Edificio con cuatro armoniosas fachadas que iluminan y ventilan naturalmente los apartamentos. Original distribución interior con tendencia a reinventar espacios funcionales y acogedores para su disfrute.</p>
                  </div>
                </div>
                <hr class="Barra w-100 m-0">
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="card mb-2">
              <img class="card-img-top h-100" src="<?php echo $base_url ?>/assets/Carrusel/DomusOriginal.jpg" alt="Domus Original">
              <a href="<?php echo $base_url ?>/apartamentos/tipo-3/" class="btn btn-primary rounded-0 w-100 h-100 text-uppercase text-left"><p>DOMUS 106</p></a>
              <div class="card-body px-3 row">
                <div class="col-12 col-lg-5 color-primary">
                  <h3>BOGOTÁ D.C</h3>
                  <h3>CHICÓ NAVARRA</h3>
                </div>
                <div class="col-12 col-lg-7 text-right customtext">
                  <div>
                    <p><span class="font-weight-bold">APTOS DESDE:</span> $789.253.000</p>
                  </div>
                  <div>
                    <p>CARRERA 19 A #106 A - 42</p>
                  </div>
                </div>
                <div class="col-12 text-justify p-0 h-7em">
                  <div>
                    <p>Edificio de lujo con los mejores apartamentos de la zona, distribución original con espacios abiertos, cómodos y acogedores.</p>
                  </div>
                </div>
                <hr class="Barra w-100 m-0">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="m-0 mt-lg-3">
  <img class="img-fluid w-100" src="<?php echo $base_url ?>/assets/Home/LasBoxes.jpg" alt="Banner Las Boxes">
</section>

<section id="Contacto" class="Formulario m-0">
  <div class="row m-0">
    <div class="col-12 col-xl-auto px-0 pl-xl-0 pr-xl-0">
      <div class="Caption position-absolute pt-4 pt-xl-0">
        <h3 class="text-white m-0">CONSIGNA TU INMUEBLE</h3>
        <p class="h4 text-white">Llena este corto formulario <br>y un asesor comercial te <br>contactará pronto.</p>
      </div>
      <img class="img-fluid w-100" src="<?php echo $base_url ?>/assets/Home/Chica.png" alt="Chica">
    </div>
    <div class="col-12 col-xl">
      <div class="jumbotron contactoForm px-5 pb-5 pt-4 rounded-0">
        <form>
          <h2 class="color-FormBlue m-0 pt-2">CONTACTO</h2>
          <hr class="FormLine mt-0 mb-3">
          <div class="form-group">
            <label class="m-0" for="Name">NOMBRE*</label>
            <input type="text" class="form-control rounded-0" id="Name" placeholder="Escribe tu nombre" required>
          </div>
          <div class="form-group">
            <label class="m-0" for="Email">EMAIL*</label>
            <input type="email" class="form-control rounded-0" id="Email" placeholder="Escribe tu email" required>
          </div>
          <div class="form-group">
            <label class="m-0" for="Phone">TELÉFONO*</label>
            <input type="text" class="form-control rounded-0" id="Phone" placeholder="Escribe tu teléfono" required>
          </div>
          <div class="form-group">
            <label class="m-0" for="Mensaje">MENSAJE</label>
            <textarea class="form-control rounded-0" id="Mensaje" rows="3" placeholder="Deja aquí tu mensaje"></textarea>
          </div>
          <button type="submit" class="btn btn-primary w-100 rounded-0 py-2">ENVIAR</button>
        </form>
      </div>
    </div>
  </div>
</section>

<section class="Map mx-0 mb-0 mb-xl-5 pb-3 pb-md-5">
  <div class="row m-0">
    <div class="col-12 col-lg-6 px-0 px-lg-2">
      <div class="texthash jumbotron my-0 my-xl-5 mr-auto ml-auto p-0 px-xl-5 py-xl-5 bg-white w-50">
        <div class="caption">
          <h2 class="mb-3 pt-4">#SOMOSHOYOSLUQUE</h2>
          <p class="text-justify">Empresa inmobiliaria, dedicada a la gerencia de proyectos de construcción, administrar contratos de arriendo y comercialización de inmubles.</p>
        </div>
        <div class="row">
          <div class="col-auto pr-0">
            <img src="<?php echo $base_url ?>/assets/Home/Ubicacion.png" alt="Pin">
          </div>
          <div class="col direccion">
            <h3 class="m-0 h5">Estamos ubicados en:</h3>
            <p>Calle 119 #14-42 Oficina 302</p>
          </div>
        </div>
          <button class="btn btn-primary w-100 rounded-0 font-weight-bold">VER UBICACIÓN</button>
        <div class="row pt-4 px-2">
          <div class="col-2 px-2">
            <a class="redIcon" href="#">
              <img class="img-fluid" src="<?php echo $base_url ?>/assets/Home/FacebookIcon.png" alt="Facebook">
            </a>
          </div>
          <div class="col-2 px-2">
            <a class="redIcon" href="#">
              <img class="img-fluid" src="<?php echo $base_url ?>/assets/Home/InstagramIcon.png" alt="Instagram">
            </a>
          </div>
          <div class="col-2 px-2">
            <a class="redIcon" href="#">
              <img class="img-fluid" src="<?php echo $base_url ?>/assets/Home/TwitterIcon.png" alt="Twitter">
            </a>
          </div>
          <div class="col-2 px-2">
            <a class="redIcon" href="#">
              <img class="img-fluid" src="<?php echo $base_url ?>/assets/Home/WhatsappIcon.png" alt="Whatsapp">
            </a>
          </div>
          <div class="col-2 px-2">
            <a class="redIcon" href="#">
              <img class="img-fluid" src="<?php echo $base_url ?>/assets/Home/LinkedinIcons.png" alt="Linkedin">
            </a>
          </div>
          <div class="col-2 px-2">
            <a class="redIcon" href="#">
              <img class="img-fluid" src="<?php echo $base_url ?>/assets/Home/YoutubeIcon.png" alt="Youtube">
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-6 px-0 px-lg-2">
      <img class="img-fluid mapa" src="<?php echo $base_url ?>/assets/Home/Mapa.png" alt="Youtube">
    </div>
  </div>
</section>

<script>
    var $item = $('#main-banner'); 
    var $wHeight = window.innerHeight-30;
    $item.height($wHeight);
</script>

<?php 
    require_once 'includes/footer.php';
?>


<?php 
    require_once '../includes/header.php';
?>

<section class="MainDetalle pt-5 pb-0 py-lg-0 m-0">
    <div class="row w-100 h-100 px-3 px-sm-5 pt-5 pb-3 pb-lg-4 mt-2 mt-sm-4 m-lg-0 d-flex align-items-end  mx-0">
        <div class="detail col-12 col-lg-5 pl-0 pl-sm-3 pl-lg-5 pr-0 pr-lg-3">
            <h1 class="text-left m-0">APARTAMENTO EN ARRIENDO</h1>
            <h2 class="m-0">BOGOTÁ D.C</h2>
            <h2 class="m-0">ARRIENDO</h2>
            <div class="separador d-none d-lg-block"></div>
        </div>
        
        <div class="d-none detail col-6 col-lg-3 d-sm-flex flex-column justify-content-center align-items-center pt-3 pl-0 pl-lg-3">
            <div class="w-100">
                <p class="Icons mb-1 d-flex justify-content-around"><i class="icon-Dormitorios"></i> 3 <span> | </span> <i class="icon-Banos"></i> 2 <span> | </span> <i class="icon-Parqueaderos"></i> 1 </p>
            </div>
            <div class="w-100">
                <p class="text d-flex justify-content-around"><span class="font-weight-bold">Area:</span> <span>68.38m<sup>2</sup></span> |<span class="font-weight-bold"> Cód.</span> 565</p>
            </div>
            <div class="separador"></div>
        </div>
        <hr class="d-block d-sm-none w-100 Barra my-1">
        <div class="detail col-12 col-sm-6 col-lg-4 pl-0 pr-0 pr-lg-5">
            <h1 class="text-right m-0 price">$1.100.962.000</h1>
            <h2 class="text-right m-0">AD $398.000</h2>
        </div>
    </div>
</section>

<section class="d-block d-md-none pt-0 pb-4 pb-sm-5">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <!-- Bullets -->
    <ol class="carousel-indicators galeria">
      <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
      <li data-target="#multi-item-example" data-slide-to="1"></li>
      <li data-target="#multi-item-example" data-slide-to="2"></li>
    </ol>
    <!-- /Bullets -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php echo $base_url ?>/assets/detalle/img01.jpg" class="d-block w-100" alt="img01">
      </div>
      <div class="carousel-item">
        <img src="<?php echo $base_url ?>/assets/detalle/img02.jpg" class="d-block w-100" alt="img02">
      </div>
      <div class="carousel-item">
        <img src="<?php echo $base_url ?>/assets/detalle/img03.jpg" class="d-block w-100" alt="img03">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>


<section class="d-none d-md-block container-fluid pt-2 pb-2 px-0 galeria">
  <!-- CAROUSEL -->
  <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
      <!--First slide-->
      <div class="carousel-item active">
        <div class="row">
          <div class="col-12 col-md-4 px-1">
            <div class="card">
              <img class="card-img-top h-100" src="<?php echo $base_url ?>/assets/detalle/img01.jpg" alt="img01">
            </div>
          </div>
          <div class="col-12 col-md-4 px-1">
            <div class="card">
              <img class="card-img-top h-100" src="<?php echo $base_url ?>/assets/detalle/img02.jpg" alt="img02">
            </div>
          </div>
          <div class="col-12 col-md-4 px-1">
            <div class="card">
              <img class="card-img-top h-100" src="<?php echo $base_url ?>/assets/detalle/img03.jpg" alt="img03">
            </div>
          </div>
        </div>
      </div>
      <!--/.First slide-->

      <!--Second slide-->
      <div class="carousel-item">
        <div class="row">
          <div class="col-12 col-md-4 px-1">
            <div class="card">
              <img class="card-img-top h-100" src="<?php echo $base_url ?>/assets/detalle/img02.jpg" alt="img01">
            </div>
          </div>
          <div class="col-12 col-md-4 px-1">
            <div class="card">
              <img class="card-img-top h-100" src="<?php echo $base_url ?>/assets/detalle/img03.jpg" alt="img02">
            </div>
          </div>
          <div class="col-12 col-md-4 px-1">
            <div class="card">
              <img class="card-img-top h-100" src="<?php echo $base_url ?>/assets/detalle/img01.jpg" alt="img03">
            </div>
          </div>
        </div>
      </div>
      <!--/.Second slide-->
      <!--Third slide-->
      <div class="carousel-item">
        <div class="row">
          <div class="col-12 col-md-4 px-1">
            <div class="card">
              <img class="card-img-top h-100" src="<?php echo $base_url ?>/assets/detalle/img03.jpg" alt="img01">
            </div>
          </div>
          <div class="col-12 col-md-4 px-1">
            <div class="card">
              <img class="card-img-top h-100" src="<?php echo $base_url ?>/assets/detalle/img01.jpg" alt="img02">
            </div>
          </div>
          <div class="col-12 col-md-4 px-1">
            <div class="card">
              <img class="card-img-top h-100" src="<?php echo $base_url ?>/assets/detalle/img02.jpg" alt="img03">
            </div>
          </div>
        </div>
      </div>
      <!--/Third slide-->
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <div class="controls-top pt-3 px-5 mx-5 d-flex align-items-center justify-content-end">
      <!-- <div> -->
        <a class="btn-floating prev mx-1" href="#multi-item-example" data-slide="prev"><</a>
        <a class="btn-floating next mx-1" href="#multi-item-example" data-slide="next">></a>
      <!-- </div> -->
    </div>
    <!--/.Controls-->
  </div>
</section>

<section class="container-fluid pt-1 px-6 Detalle">
  <div class="row p-0 pb-4">
    <div class="col-12 col-lg-8 pr-0 pr-md-5">
      <div class="row py-2">
        <div class="col-6 d-flex align-items-end">
            <span class="icon d-inline-block position-absolute">
              <img class="img-fluid" src="<?php echo $base_url ?>/assets/AptoIcon.png" alt="apto">
            </span>
            <h3 class="mb-0 ml-4 pl-5"> CHICÓ NAVARRA </h3>
        </div>
        <div class="col-6 d-flex justify-content-end align-items-end">
          <h4 class="d-inline-block m-0"> ESTRATO 6 </h4>
        </div>
        <div class="col-12">
          <hr class="Barra w-100">
        </div>
      </div>
      <div class="row py-2">
        <div class="col-12">
        <p class="text-justify">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
          Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
        </div>
      </div>
      <div class="row py-2">
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
          <div class="row">
          <div class="col-12 col-sm-4">
            <ul>
              <li>Lorem ipsum dolor sit amet.</li>
              <li>Lorem ipsum dolor sit amet.</li>
              <li>Lorem ipsum dolor sit amet.</li>
              <li>Lorem ipsum dolor sit amet.</li>
              <li>Lorem ipsum dolor sit amet.</li>
            </ul>
          </div>
          <div class="col-12 col-sm-4">
            <ul>
              <li>Lorem ipsum dolor sit amet.</li>
              <li>Lorem ipsum dolor sit amet.</li>
              <li>Lorem ipsum dolor sit amet.</li>
              <li>Lorem ipsum dolor sit amet.</li>
              <li>Lorem ipsum dolor sit amet.</li>
            </ul>
          </div>
          <div class="col-12 col-sm-4">
            <ul>
              <li>Lorem ipsum dolor sit amet.</li>
              <li>Lorem ipsum dolor sit amet.</li>
              <li>Lorem ipsum dolor sit amet.</li>
              <li>Lorem ipsum dolor sit amet.</li>
              <li>Lorem ipsum dolor sit amet.</li>
            </ul>
          </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-4 pt-0 pt-md-4">
      <div class="row jumbotron px-1 py-3  rounded-0 mb-2">
        <div class="col-12 col-sm-4">
          <img class="img-fluid" src="<?php echo $base_url ?>/assets/Asesor.jpg" alt="asesor">
        </div>
        <div class="col-12 col-sm-8">
          <h4 class="asesor">ASESOR COMERCIAL</h4>
          <h5 class="py-2">MARCELA ARIAS</h5>
          <p class="py-0 pr-1 m-0 asesor text-justify">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 px-0 pb-2">
          <button type="submit" class="btn btn-primary w-100 rounded-0 font-weight-bold">SOLICITAR VISITA</button>
        </div>
        <div class="col-12 px-0 pb-2">
          <button type="submit" class="btn btn-primary w-100 rounded-0 font-weight-bold">LAS BOXES</button>
        </div>
      </div>
      <div class="row ListaCaracteristicas">
        <div class="col-12 px-0">
          <div class="pt-3">
            <p class="mb-0">Amoblamiento</p>
            <span class="font-weight-bold float-right">Sin amoblar</span>
          </div>
          <hr class="Barra w-100">
        </div>
        <div class="col-12 px-0">
          <div>
            <p class="mb-0">Habitaciones</p>
            <span class="font-weight-bold float-right">3</span>
          </div>
          <hr class="Barra w-100">
        </div>
        <div class="col-12 px-0">
          <div>
            <p class="mb-0">Baños</p>
            <span class="font-weight-bold float-right">3</span>
          </div>
          <hr class="Barra w-100">
        </div>
        <div class="col-12 px-0">
          <div>
            <p class="mb-0">Parqueaderos</p>
            <span class="font-weight-bold float-right">2</span>
          </div>
          <hr class="Barra w-100">
        </div>
        <div class="col-12 px-0">
          <div>
            <p class="mb-0">Area m2</p>
            <span class="font-weight-bold float-right">109</span>
          </div>
          <hr class="Barra w-100">
        </div>
        <div class="col-12 px-0">
          <div>
            <p class="mb-0">Año de construcción</p>
            <span class="font-weight-bold float-right">1997</span>
          </div>
          <hr class="Barra w-100">
        </div>
        <div class="col-12 px-0">
          <div>
            <p class="mb-0">Administración</p>
            <span class="font-weight-bold float-right">No incluido</span>
          </div>
          <hr class="Barra w-100">
        </div>
      </div>
    </div>
  </div>
</section>

<section class="container-fluid px-6 ubicacion">
  <div class="row p-0 pb-4">
    <div class="col-12 col-sm-auto">
      <h2 class="d-inline-block m-0"> UBICACIÓN </h2>
    </div>  
    <div class="col d-none d-sm-flex align-items-center">
      <hr class="Barra w-100">
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d835.9443634785328!2d-74.04782602843186!3d4.692662390842111!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sco!4v1624373665419!5m2!1ses-419!2sco" width="100%" height="700" style="border:0;" allowfullscreen loading="lazy"></iframe>
    </div>
  </div>
</section>

<section class="container-fluid py-5 px-6 destacados mb-5">
  <div class="row p-0 pb-5 pb-lg-4">
    <div class="col-12 col-sm-auto">
      <h2 class="d-inline-block m-0"> INMUEBLE DESTACADO </h2>
    </div>
    <div class="col d-none d-sm-flex align-items-center">
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
          <div class="col-12 col-xl-4">
            <div class="card mb-2">
              <img class="card-img-top h-100" src="<?php echo $base_url ?>/assets/Carrusel/img01.jpg" alt="img01">
              <a href="<?php echo $base_url ?>/detalle/" class="btn btn-secundary rounded-0 w-100 h-100 text-uppercase text-left text-white"><p>$5.000.000</p></a>
              <a href="<?php echo $base_url ?>/detalle/" class="btn btn-primary rounded-0 w-100 h-100 text-uppercase text-right"><p>ARRIENDO</p></a>
              <div class="card-body px-3 row">
                <div class="col-5 color-primary">
                  <h3>BOGOTÁ D.C</h3>
                  <h3>CHICÓ NAVARRA</h3>
                </div>
                <div class="col-7 text-right customtext">
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
          <div class="col-12 col-xl-4">
            <div class="card mb-2">
              <img class="card-img-top h-100" src="<?php echo $base_url ?>/assets/Carrusel/img02.png" alt="img02">
              <a href="<?php echo $base_url ?>/detalle/" class="btn btn-secundary rounded-0 w-100 h-100 text-uppercase text-left text-white"><p>$5.000.000</p></a>
              <a href="<?php echo $base_url ?>/detalle/" class="btn btn-primary rounded-0 w-100 h-100 text-uppercase text-right"><p>VENTA</p></a>
              <div class="card-body px-3 row">
                <div class="col-5 color-primary">
                  <h3>BOGOTÁ D.C</h3>
                  <h3>CHICÓ NAVARRA</h3>
                </div>
                <div class="col-7 text-right customtext">
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
          <div class="col-12 col-xl-4">
            <div class="card mb-2">
              <img class="card-img-top h-100" src="<?php echo $base_url ?>/assets/Carrusel/img03.png" alt="img03">
              <a href="<?php echo $base_url ?>/detalle/" class="btn btn-secundary rounded-0 w-100 h-100 text-uppercase text-left text-white"><p>$5.000.000</p></a>
              <a href="<?php echo $base_url ?>/detalle/" class="btn btn-primary rounded-0 w-100 h-100 text-uppercase text-right"><p>ARRIENDO</p></a>
              <div class="card-body px-3 row">
                <div class="col-5 color-primary">
                  <h3>BOGOTÁ D.C</h3>
                  <h3>CHICÓ NAVARRA</h3>
                </div>
                <div class="col-7 text-right customtext">
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
          <div class="col-12 col-xl-4">
            <div class="card mb-2">
              <img class="card-img-top h-100" src="<?php echo $base_url ?>/assets/Carrusel/img04.png" alt="img01">
              <a href="<?php echo $base_url ?>/detalle/" class="btn btn-secundary rounded-0 w-100 h-100 text-uppercase text-left text-white"><p>$5.000.000</p></a>
              <a href="<?php echo $base_url ?>/detalle/" class="btn btn-primary rounded-0 w-100 h-100 text-uppercase text-right"><p>ARRIENDO</p></a>
              <div class="card-body px-3 row">
                <div class="col-5 color-primary">
                  <h3>BOGOTÁ D.C</h3>
                  <h3>CHICÓ NAVARRA</h3>
                </div>
                <div class="col-7 text-right customtext">
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
          <div class="col-12 col-xl-4">
            <div class="card mb-2">
              <img class="card-img-top h-100" src="<?php echo $base_url ?>/assets/Carrusel/img05.png" alt="img02">
              <a href="<?php echo $base_url ?>/detalle/" class="btn btn-secundary rounded-0 w-100 h-100 text-uppercase text-left text-white"><p>$120.000.000</p></a>
              <a href="<?php echo $base_url ?>/detalle/" class="btn btn-primary rounded-0 w-100 h-100 text-uppercase text-right"><p>VENTA</p></a>
              <div class="card-body px-3 row">
                <div class="col-5 color-primary">
                  <h3>BOGOTÁ D.C</h3>
                  <h3>CHICÓ NAVARRA</h3>
                </div>
                <div class="col-7 text-right customtext">
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
          <div class="col-12 col-xl-4">
            <div class="card mb-2">
              <img class="card-img-top h-100" src="<?php echo $base_url ?>/assets/Carrusel/img06.png" alt="img03">
              <a href="<?php echo $base_url ?>/detalle/" class="btn btn-secundary rounded-0 w-100 h-100 text-uppercase text-left text-white"><p>$5.000.000</p></a>
              <a href="<?php echo $base_url ?>/detalle/" class="btn btn-primary rounded-0 w-100 h-100 text-uppercase text-right"><p>VENTA</p></a>
              <div class="card-body px-3 row">
                <div class="col-5 color-primary">
                  <h3>BOGOTÁ D.C</h3>
                  <h3>CHICÓ NAVARRA</h3>
                </div>
                <div class="col-7 text-right customtext">
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
          <div class="col-12 col-xl-4">
            <div class="card mb-2">
              <img class="card-img-top h-100" src="<?php echo $base_url ?>/assets/Carrusel/img07.png" alt="img01">
              <a href="<?php echo $base_url ?>/detalle/" class="btn btn-secundary rounded-0 w-100 h-100 text-uppercase text-left text-white"><p>$130.000.000</p></a>
              <a href="<?php echo $base_url ?>/detalle/" class="btn btn-primary rounded-0 w-100 h-100 text-uppercase text-right"><p>ARRIENDO</p></a>
              <div class="card-body px-3 row">
                <div class="col-5 color-primary">
                  <h3>BOGOTÁ D.C</h3>
                  <h3>CHICÓ NAVARRA</h3>
                </div>
                <div class="col-7 text-right customtext">
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
          <div class="col-12 col-xl-4">
            <div class="card mb-2">
              <img class="card-img-top h-100" src="<?php echo $base_url ?>/assets/Carrusel/img08.png" alt="img02">
              <a href="<?php echo $base_url ?>/detalle/" class="btn btn-secundary rounded-0 w-100 h-100 text-uppercase text-left text-white"><p>$525.000.000</p></a>
              <a href="<?php echo $base_url ?>/detalle/" class="btn btn-primary rounded-0 w-100 h-100 text-uppercase text-right"><p>VENTA</p></a>
              <div class="card-body px-3 row">
                <div class="col-5 color-primary">
                  <h3>BOGOTÁ D.C</h3>
                  <h3>CHICÓ NAVARRA</h3>
                </div>
                <div class="col-7 text-right customtext">
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
          <div class="col-12 col-xl-4">
            <div class="card mb-2">
              <img class="card-img-top h-100" src="<?php echo $base_url ?>/assets/Carrusel/img09.png" alt="img03">
              <a href="<?php echo $base_url ?>/detalle/" class="btn btn-secundary rounded-0 w-100 h-100 text-uppercase text-left text-white"><p>$600.000.000</p></a>
              <a href="<?php echo $base_url ?>/detalle/" class="btn btn-primary rounded-0 w-100 h-100 text-uppercase text-right"><p>VENTA</p></a>
              <div class="card-body px-3 row">
                <div class="col-5 color-primary">
                  <h3>BOGOTÁ D.C</h3>
                  <h3>CHICÓ NAVARRA</h3>
                </div>
                <div class="col-7 text-right customtext">
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

<?php 
    require_once '../includes/footer.php';
?>
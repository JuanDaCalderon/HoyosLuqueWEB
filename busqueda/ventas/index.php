<?php 
    require_once '../../includes/header.php';
?>
<section class="coverInternas">
    <div class="wrap w-100 h-100 p-5 d-flex flex-column justify-content-end align-items-center">
        <h1 class="text-white text-center m-0 pt-5">BUSQUEDA</h1>
        <p class="text-white text-center">En <span class="font-weight-bold">HOYOS LUQUE</span> tenemos los <br>mejores inmuelbles para ti.</p>
    </div>
</section>

<section class="busqueda main">
    <div class="container-fluid">
        <div class="row buscador">
            <div class="col-12 col-md-10">
                <form class="Buscador bg-white p-4">
                    <div class="row justify-content-between px-4">
                    <div class="col-md-3 p-0">
                        <label class="mb-0" for="Modalidad">MODALIDAD</label>
                        <select class="form-control rounded-0" id="Modalidad">
                            <option selected disabled>Todos</option>
                            <option>Venta</option>
                            <option>Arriendo</option>
                        </select>
                    </div>
                    <div class="col-md-3 p-0">
                        <label class="mb-0" for="TipoInmueble">TIPO DE INMUEBLE</label>
                        <select class="form-control rounded-0" id="TipoInmueble">
                            <option selected disabled>Todos</option>
                            <option>Apartamento</option>
                            <option>Casa</option>
                            <option>Local</option>
                        </select>
                    </div>
                    <div class="col-md-3 col-lg-2 p-0">
                        <label class="mb-0" for="Codigo">CÓDIGO</label>
                        <input type="text" class="form-control rounded-0" id="Codigo" placeholder="# De código">
                    </div>
                    <div class="col-md-3 d-flex flex-row justify-content-start align-items-end mt-4 mt-md-0 p-0">
                        <button type="submit" class="btn btn-primary w-100 rounded-0 font-weight-bold">BUSCAR</button>
                    </div>
                    </div>
                </form>
            </div>
            <div class="col-12 col-md-2 d-flex justify-content-end align-items-end">
                <p>1-9 de <span class="font-weight-bold">120</span></p>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid py-5 px-6 resultados">
        <div class="row">
          <div class="col-12 col-md-4 pt-3">
            <div class="card mb-2">
              <img class="card-img-top h-100" src="<?php echo $base_url ?>/assets/Carrusel/img01.jpg" alt="img01">
              <a href="<?php echo $base_url ?>/apartamentos/tipo-1/" class="btn btn-secundary rounded-0 w-100 h-100 text-uppercase text-left text-white"><p>$5.000.000</p></a>
              <a href="<?php echo $base_url ?>/apartamentos/tipo-1/" class="btn btn-primary rounded-0 w-100 h-100 text-uppercase text-right"><p>ARRIENDO</p></a>
              <div class="card-body px-3 row">
                <div class="col-12 color-primary">
                  <h2>Apartamento En EXCLUSIVO SECTOR DE BOGOTÁ</h2>
                </div>
                <hr class="Barra w-100 m-0 mb-md-3">
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
          <div class="col-12 col-md-4 pt-3">
            <div class="card mb-2">
              <img class="card-img-top h-100" src="<?php echo $base_url ?>/assets/Carrusel/img02.png" alt="img02">
              <a href="<?php echo $base_url ?>/apartamentos/tipo-1/" class="btn btn-secundary rounded-0 w-100 h-100 text-uppercase text-left text-white"><p>$5.000.000</p></a>
              <a href="<?php echo $base_url ?>/apartamentos/tipo-2/" class="btn btn-primary rounded-0 w-100 h-100 text-uppercase text-right"><p>VENTA</p></a>
              <div class="card-body px-3 row">
                <div class="col-12 color-primary">
                  <h2>CASA En sector norte DE BOGOTÁ</h2>
                </div>
                <hr class="Barra w-100 m-0 mb-md-3">
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
          <div class="col-12 col-md-4 pt-3">
            <div class="card mb-2">
              <img class="card-img-top h-100" src="<?php echo $base_url ?>/assets/Carrusel/img03.png" alt="img03">
              <a href="<?php echo $base_url ?>/apartamentos/tipo-1/" class="btn btn-secundary rounded-0 w-100 h-100 text-uppercase text-left text-white"><p>$5.000.000</p></a>
              <a href="<?php echo $base_url ?>/apartamentos/tipo-3/" class="btn btn-primary rounded-0 w-100 h-100 text-uppercase text-right"><p>ARRIENDO</p></a>
              <div class="card-body px-3 row">
                <div class="col-12 color-primary">
                  <h2>Apartamento En EXCLUSIVO SECTOR DE BOGOTÁ</h2>
                </div>
                <hr class="Barra w-100 m-0 mb-md-3">
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
          <div class="col-12 col-md-4 pt-3">
            <div class="card mb-2">
              <img class="card-img-top h-100" src="<?php echo $base_url ?>/assets/Carrusel/img01.jpg" alt="img01">
              <a href="<?php echo $base_url ?>/apartamentos/tipo-1/" class="btn btn-secundary rounded-0 w-100 h-100 text-uppercase text-left text-white"><p>$5.000.000</p></a>
              <a href="<?php echo $base_url ?>/apartamentos/tipo-1/" class="btn btn-primary rounded-0 w-100 h-100 text-uppercase text-right"><p>ARRIENDO</p></a>
              <div class="card-body px-3 row">
                <div class="col-12 color-primary">
                  <h2>Apartamento En EXCLUSIVO SECTOR DE BOGOTÁ</h2>
                </div>
                <hr class="Barra w-100 m-0 mb-md-3">
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
          <div class="col-12 col-md-4 pt-3">
            <div class="card mb-2">
              <img class="card-img-top h-100" src="<?php echo $base_url ?>/assets/Carrusel/img02.png" alt="img02">
              <a href="<?php echo $base_url ?>/apartamentos/tipo-1/" class="btn btn-secundary rounded-0 w-100 h-100 text-uppercase text-left text-white"><p>$5.000.000</p></a>
              <a href="<?php echo $base_url ?>/apartamentos/tipo-2/" class="btn btn-primary rounded-0 w-100 h-100 text-uppercase text-right"><p>VENTA</p></a>
              <div class="card-body px-3 row">
                <div class="col-12 color-primary">
                  <h2>CASA En sector norte DE BOGOTÁ</h2>
                </div>
                <hr class="Barra w-100 m-0 mb-md-3">
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
          <div class="col-12 col-md-4 pt-3">
            <div class="card mb-2">
              <img class="card-img-top h-100" src="<?php echo $base_url ?>/assets/Carrusel/img03.png" alt="img03">
              <a href="<?php echo $base_url ?>/apartamentos/tipo-1/" class="btn btn-secundary rounded-0 w-100 h-100 text-uppercase text-left text-white"><p>$5.000.000</p></a>
              <a href="<?php echo $base_url ?>/apartamentos/tipo-3/" class="btn btn-primary rounded-0 w-100 h-100 text-uppercase text-right"><p>ARRIENDO</p></a>
              <div class="card-body px-3 row">
                <div class="col-12 color-primary">
                  <h2>Apartamento En EXCLUSIVO SECTOR DE BOGOTÁ</h2>
                </div>
                <hr class="Barra w-100 m-0 mb-md-3">
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
          <div class="col-12 col-md-4 pt-3">
            <div class="card mb-2">
              <img class="card-img-top h-100" src="<?php echo $base_url ?>/assets/Carrusel/img01.jpg" alt="img01">
              <a href="<?php echo $base_url ?>/apartamentos/tipo-1/" class="btn btn-secundary rounded-0 w-100 h-100 text-uppercase text-left text-white"><p>$5.000.000</p></a>
              <a href="<?php echo $base_url ?>/apartamentos/tipo-1/" class="btn btn-primary rounded-0 w-100 h-100 text-uppercase text-right"><p>ARRIENDO</p></a>
              <div class="card-body px-3 row">
                <div class="col-12 color-primary">
                  <h2>Apartamento En EXCLUSIVO SECTOR DE BOGOTÁ</h2>
                </div>
                <hr class="Barra w-100 m-0 mb-md-3">
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
          <div class="col-12 col-md-4 pt-3">
            <div class="card mb-2">
              <img class="card-img-top h-100" src="<?php echo $base_url ?>/assets/Carrusel/img02.png" alt="img02">
              <a href="<?php echo $base_url ?>/apartamentos/tipo-1/" class="btn btn-secundary rounded-0 w-100 h-100 text-uppercase text-left text-white"><p>$5.000.000</p></a>
              <a href="<?php echo $base_url ?>/apartamentos/tipo-2/" class="btn btn-primary rounded-0 w-100 h-100 text-uppercase text-right"><p>VENTA</p></a>
              <div class="card-body px-3 row">
                <div class="col-12 color-primary">
                  <h2>CASA En sector norte DE BOGOTÁ</h2>
                </div>
                <hr class="Barra w-100 m-0 mb-md-3">
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
          <div class="col-12 col-md-4 pt-3">
            <div class="card mb-2">
              <img class="card-img-top h-100" src="<?php echo $base_url ?>/assets/Carrusel/img03.png" alt="img03">
              <a href="<?php echo $base_url ?>/apartamentos/tipo-1/" class="btn btn-secundary rounded-0 w-100 h-100 text-uppercase text-left text-white"><p>$5.000.000</p></a>
              <a href="<?php echo $base_url ?>/apartamentos/tipo-3/" class="btn btn-primary rounded-0 w-100 h-100 text-uppercase text-right"><p>ARRIENDO</p></a>
              <div class="card-body px-3 row">
                <div class="col-12 color-primary">
                  <h2>Apartamento En EXCLUSIVO SECTOR DE BOGOTÁ</h2>
                </div>
                <hr class="Barra w-100 m-0 mb-md-3">
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
</section>

<?php 
    require_once '../../includes/footer.php';
?>
<?php 
    require_once '../includes/header.php';
?>

<section class="coverInternas">
    <div class="wrap w-100 h-100 p-5 d-flex flex-column justify-content-end align-items-center">
        <h1 class="text-white text-center m-0 pt-5">BUSQUEDA</h1>
        <p class="text-white text-center">En <span class="font-weight-bold">HOYOS LUQUE</span> tenemos los <br>mejores inmuelbles para ti.</p>
    </div>
</section>

<section class="busqueda main pt-5 mt-3 px-6">
    <div class="container-fluid">
        <div class="row buscador">
            <div class="col-12 col-md-11 pl-0">
                <form class="Buscador bg-white p-4">
                  <div class="row justify-content-between px-4">
                    <div class="col-md-2 px-0 pr-md-2 pl-md-0">
                        <label class="mb-0" for="Ciudad">CIUDAD</label>
                        <select class="form-control rounded-0" id="Ciudad">
                            <option selected disabled>Todos</option>
                            <option>Bogota</option>
                            <option>Medellin</option>
                        </select>
                    </div>
                    <div class="col-md-2 px-0 px-md-2">
                        <label class="mb-0" for="Barrio">BARRIO</label>
                        <select class="form-control rounded-0" id="Barrio">
                            <option selected disabled>Todos</option>
                            <option>Chicó Navarra</option>
                            <option>San Patricio</option>
                            <option>Santa Barbara</option>
                        </select>
                    </div>
                    <div class="col-md-2 px-0 px-md-2">
                        <label class="mb-0" for="Estrato">ESTRATO</label>
                        <select class="form-control rounded-0" id="Estrato">
                            <option selected disabled>Todos</option>
                            <option>6</option>
                            <option>5</option>
                            <option>4</option>
                        </select>
                    </div>
                    <div class="col-md-2 px-0 px-md-2">
                        <label class="mb-0" for="PrecioDesde">PRECIO DESDE</label>
                        <select class="form-control rounded-0" id="PrecioDesde">
                            <option selected disabled>Todos</option>
                            <option>100.000.000</option>
                            <option>250.000.000</option>
                            <option>500.000.000</option>
                        </select>
                    </div>
                    <div class="col-md-2 px-0 px-md-2">
                        <label class="mb-0" for="PrecioHasta">PRECIO HASTA</label>
                        <select class="form-control rounded-0" id="PrecioHasta">
                            <option selected disabled>Todos</option>
                            <option>800.000.000</option>
                            <option>950.000.000</option>
                            <option>1.000.000.000</option>
                        </select>
                    </div>
                    <div class="col-md-3 col-lg-2 px-0 pl-md-2 pr-md-0">
                        <label class="mb-0" for="Codigo">CÓDIGO</label>
                        <input type="text" class="form-control rounded-0" id="Codigo" placeholder="# De código">
                    </div>
                    <hr class="w-100 my-0 my-md-2 bg-white border-white">
                    <div class="col-md-2 px-0 pr-md-2 pl-md-0 d-none d-md-block">
                        <label class="mb-0" for="Modalidad">MODALIDAD</label>
                        <select class="form-control rounded-0" id="Modalidad">
                            <option selected disabled>Todos</option>
                            <option>Venta</option>
                            <option>Arriendo</option>
                        </select>
                    </div>
                    <div class="col-md-2 px-0 px-md-2">
                        <label class="mb-0" for="TipoInmueble">TIPO DE INMUEBLE</label>
                        <select class="form-control rounded-0" id="TipoInmueble">
                            <option selected disabled>Todos</option>
                            <option>Casa</option>
                            <option>Apartamento</option>
                            <option>Local</option>
                        </select>
                    </div>
                    <div class="col-md-2 px-0 px-md-2">
                        <label class="mb-0" for="NumHabitaciones">Numero de habitaciones</label>
                        <select class="form-control rounded-0" id="NumHabitaciones">
                            <option selected disabled>3</option>
                            <option>2</option>
                            <option>1</option>
                        </select>
                    </div>
                    <div class="col-md-2 px-0 px-md-2">
                        <label class="mb-0" for="NumBaños">Numero de Baños</label>
                        <select class="form-control rounded-0" id="NumBaños">
                            <option selected disabled>3</option>
                            <option>2</option>
                            <option>1</option>
                        </select>
                    </div>
                    <div class="col-md-2 px-0 px-md-2">
                        <label class="mb-0" for="NumParqueaderos">Numero de Parqueaderos</label>
                        <select class="form-control rounded-0" id="NumParqueaderos">
                            <option selected disabled>3</option>
                            <option>2</option>
                            <option>1</option>
                        </select>
                    </div>
                    <div class="col-md-2 d-flex flex-row justify-content-start align-items-end mt-4 mt-md-0 px-0 pl-md-2 pr-md-0">
                        <button type="submit" class="btn btn-primary w-100 rounded-0 font-weight-bold">BUSCAR</button>
                    </div>
                  </div>
                </form>
            </div>
            <div class="col-12 col-md-1 d-flex justify-content-end align-items-end">
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
              <a href="<?php echo $base_url ?>/detalle/" class="btn btn-secundary rounded-0 w-100 h-100 text-uppercase text-left text-white"><p>$5.000.000</p></a>
              <a href="<?php echo $base_url ?>/detalle/" class="btn btn-primary rounded-0 w-100 h-100 text-uppercase text-right"><p>ARRIENDO</p></a>
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
              <a href="<?php echo $base_url ?>/detalle/" class="btn btn-secundary rounded-0 w-100 h-100 text-uppercase text-left text-white"><p>$5.000.000</p></a>
              <a href="<?php echo $base_url ?>/detalle/" class="btn btn-primary rounded-0 w-100 h-100 text-uppercase text-right"><p>VENTA</p></a>
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
              <a href="<?php echo $base_url ?>/detalle/" class="btn btn-secundary rounded-0 w-100 h-100 text-uppercase text-left text-white"><p>$5.000.000</p></a>
              <a href="<?php echo $base_url ?>/detalle/" class="btn btn-primary rounded-0 w-100 h-100 text-uppercase text-right"><p>ARRIENDO</p></a>
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
              <a href="<?php echo $base_url ?>/detalle/" class="btn btn-secundary rounded-0 w-100 h-100 text-uppercase text-left text-white"><p>$5.000.000</p></a>
              <a href="<?php echo $base_url ?>/detalle/" class="btn btn-primary rounded-0 w-100 h-100 text-uppercase text-right"><p>ARRIENDO</p></a>
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
              <a href="<?php echo $base_url ?>/detalle/" class="btn btn-secundary rounded-0 w-100 h-100 text-uppercase text-left text-white"><p>$5.000.000</p></a>
              <a href="<?php echo $base_url ?>/detalle/" class="btn btn-primary rounded-0 w-100 h-100 text-uppercase text-right"><p>VENTA</p></a>
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
              <a href="<?php echo $base_url ?>/detalle/" class="btn btn-secundary rounded-0 w-100 h-100 text-uppercase text-left text-white"><p>$5.000.000</p></a>
              <a href="<?php echo $base_url ?>/detalle/" class="btn btn-primary rounded-0 w-100 h-100 text-uppercase text-right"><p>ARRIENDO</p></a>
              <div class="card-body px-3 row"></div>
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
              <a href="<?php echo $base_url ?>/detalle/" class="btn btn-secundary rounded-0 w-100 h-100 text-uppercase text-left text-white"><p>$5.000.000</p></a>
              <a href="<?php echo $base_url ?>/detalle/" class="btn btn-primary rounded-0 w-100 h-100 text-uppercase text-right"><p>ARRIENDO</p></a>
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
              <a href="<?php echo $base_url ?>/detalle/" class="btn btn-secundary rounded-0 w-100 h-100 text-uppercase text-left text-white"><p>$5.000.000</p></a>
              <a href="<?php echo $base_url ?>/detalle/" class="btn btn-primary rounded-0 w-100 h-100 text-uppercase text-right"><p>VENTA</p></a>
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
              <a href="<?php echo $base_url ?>/detalle/" class="btn btn-secundary rounded-0 w-100 h-100 text-uppercase text-left text-white"><p>$5.000.000</p></a>
              <a href="<?php echo $base_url ?>/detalle/" class="btn btn-primary rounded-0 w-100 h-100 text-uppercase text-right"><p>ARRIENDO</p></a>
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
        <nav aria-label="Page navigation resultados">
          <ul class="pagination justify-content-center mt-4">
            <li class="page-item px-1 disabled">
              <a class="page-link " href="#" tabindex="-1">Anterior</a>
            </li>
            <li class="page-item px-1 active"><a class="page-link" href="#">1</a></li>
            <li class="page-item px-1"><a class="page-link" href="#">2</a></li>
            <li class="page-item px-1"><a class="page-link" href="#">3</a></li>
            <li class="page-item px-1">
              <a class="page-link" href="#">Siguiente</a>
            </li>
          </ul>
        </nav>
</section>

<?php 
    require_once '../includes/footer.php';
?>
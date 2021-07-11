<?php 
    require_once '../../includes/header.php';
?>

<section class="coverInternas">
    <div class="wrap w-100 h-100 p-5 d-flex flex-column justify-content-end align-items-center">
        <h1 class="text-white text-center m-0 pt-5">BUSQUEDA</h1>
        <p class="text-white text-center">En <span class="font-weight-bold">HOYOS LUQUE</span> tenemos los <br>mejores inmuelbles para ti.</p>
    </div>
</section>

<section class="busqueda main pt-5 mt-0 mt-lg-3 px-6">
    <div class="container-fluid">
        <div class="row buscador">
            <div class="col-12 col-xl-11 pl-0">
                <form id="Busqueda" class="Buscador bg-white p-4">
                  <div class="row justify-content-between px-4">
                    <div class="col-12 col-lg-2 px-0 pr-lg-2 pl-md-0">
                        <label class="mb-0" for="Ciudad">CIUDAD</label>
                        <select name="ciudad" class="form-control rounded-0" id="Ciudad">
                            <option value="" selected disabled>Todos</option>
                            <option value="11001">Bogotá</option>
                            <option value="76001">Cali</option>
                            <option value="13001">Cartagena</option>
                        </select>
                    </div>
                    <div class="col-12 col-lg-2 px-0 px-lg-2">
                        <label class="mb-0" for="Barrio">BARRIO</label>
                        <select name="barrio" class="form-control rounded-0" id="Barrio">
                            <option value="" selected disabled>Todos</option>
                        </select>
                    </div>
                    <div class="col-12 col-lg-2 px-0 px-lg-2">
                        <label class="mb-0" for="Estrato">ESTRATO</label>
                        <select name="estrato" class="form-control rounded-0" id="Estrato">
                            <option value="" selected disabled>Todos</option>
                            <option value="6">6</option>
                            <option value="5">5</option>
                            <option value="4">4</option>
                            <option value="3">3</option>
                            <option value="2">2</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-12 col-lg-2 px-0 px-lg-2">
                        <label class="mb-0" for="PrecioDesde">PRECIO DESDE</label>
                        <select name="minprecio" class="form-control rounded-0" id="PrecioDesde">
                            <option value="0" selected>0</option>
                            <option value="100000">100000</option>
                            <option value="100000000">100.000.000</option>
                            <option value="250000000">250.000.000</option>
                            <option value="500000000">500.000.000</option>
                        </select>
                    </div>
                    <div class="col-12 col-lg-2 px-0 px-lg-2">
                        <label class="mb-0" for="PrecioHasta">PRECIO HASTA</label>
                        <select name="maxprecio" class="form-control rounded-0" id="PrecioHasta">
                            <option value="" selected disabled>0</option>
                            <option value="500000000">500.000.000</option>
                            <option value="1000000000">1.000.000.000</option>
                            <option value="1500000000">1.500.000.000</option>
                            <option value="2000000000">2.000.000.000</option>
                        </select>
                    </div>
                    <div class="col-12 col-lg-2 px-0 pl-lg-2 pr-md-0">
                        <label class="mb-0" for="Codigo">CÓDIGO</label>
                        <input name="codigo" value="" type="text" class="form-control rounded-0" id="Codigo" placeholder="# De código">
                    </div>
                    <hr class="w-100 my-0 my-md-2 bg-white border-white d-none d-lg-block">
                    <div class="col-12 col-lg-2 px-0 pr-lg-2 pl-md-0 d-none d-md-block">
                        <label class="mb-0" for="Modalidad">MODALIDAD</label>
                        <select name="modalidad" class="form-control rounded-0" id="Modalidad">
                            <option value="" disabled>Todos</option>
                            <option value="2">Venta</option>
                            <option value="1" selected>Arriendo</option>
                        </select>
                    </div>
                    <div class="col-12 col-lg-2 px-0 px-lg-2">
                        <label class="mb-0" for="TipoInmueble">TIPO DE INMUEBLE</label>
                        <select name="tipo" class="form-control rounded-0" id="TipoInmueble">
                            <option value="" selected disabled>Todos</option>
                            <option value="1">Apartamento</option>
                            <option value="2">Casa</option>
                            <option value="3">Apartaestudio</option>
                            <option value="4">Local</option>
                            <option value="5">Bodega</option>
                            <option value="6">Oficina</option>
                            <option value="9">Edificio</option>
                            <option value="15">Consultorio</option>
                        </select>
                    </div>
                    <div class="col-12 col-lg-2 px-0 px-lg-2">
                        <label class="mb-0" for="NumHabitaciones">Numero de habitaciones</label>
                        <select name="habitaciones" class="form-control rounded-0" id="NumHabitaciones">
                            <option value="" selected disabled>Seleccionar</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="col-12 col-lg-2 px-0 px-lg-2">
                        <label class="mb-0" for="NumBaños">Numero de Baños</label>
                        <select name="baños" class="form-control rounded-0" id="NumBaños">
                            <option value="" selected disabled>Seleccionar</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                    </div>
                    <div class="col-12 col-lg-2 px-0 px-lg-2">
                        <label class="mb-0" for="NumParqueaderos">Numero de Parqueaderos</label>
                        <select name="parqueaderos" class="form-control rounded-0" id="NumParqueaderos">
                            <option value="" selected disabled>Seleccionar</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="col-12 col-lg-2 d-flex flex-row justify-content-start align-items-end mt-4 mt-md-0 px-0 pl-lg-2 pr-md-0 pt-3 pt-lg-0">
                        <button type="submit" class="btn btn-primary w-100 rounded-0 font-weight-bold">BUSCAR</button>
                    </div>
                  </div>
                </form>
            </div>
            <div id="contador" class="col-12 col-xl-1 d-flex justify-content-end align-items-end pt-3 pt-xl-0">
                <p class="m-0">1-9 de <span class="font-weight-bold">121</span></p>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid py-2 py-lg-3 py-xl-5 px-6 resultados">
        <div id="Grid" class="row">
          <div id="Loader" class="col-12 pt-3">
            <div class="d-flex justify-content-center">
              <div class="text-primary spinner-border my-5" style="width: 5rem;height: 5rem;border: 10px solid currentColor;border-right-color: transparent;" role="status">
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
    require_once '../../includes/footer.php';
?>
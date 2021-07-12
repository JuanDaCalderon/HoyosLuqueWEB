<?php 
    require_once '../includes/header.php';
?>

<section class="MainDetalle pt-5 pb-0 py-lg-0 m-0">
    <div id="ProDetailMain" class="row w-100 h-100 px-3 px-sm-5 pt-5 pb-3 pb-lg-4 mt-2 mt-sm-4 m-lg-0 d-flex align-items-end  mx-0">
        <div id="Loader" class="col-12 pt-3">
          <div class="d-flex justify-content-center">
            <div class="text-primary spinner-border my-5" style="width: 5rem;height: 5rem;border: 10px solid currentColor;border-right-color: transparent;" role="status">
            </div>
          </div>
        </div>
    </div>
</section>

<section id="detalleimages" class="d-none d-md-block container-fluid pt-2 pb-2 px-0 galeria">
  <!-- CAROUSEL -->
  <div id="multi-item-galery" class="carousel slide carousel-multi-item" data-ride="carousel">
    <!--Slides-->
    <div id="DestacadoContainer" class="carousel-inner" role="listbox">

    </div>
    <!--/.Slides-->
    <!--Controls-->
    <div class="controls-top pt-3 px-5 mx-5 d-flex align-items-center justify-content-end">
      <!-- <div> -->
        <a class="btn-floating prev mx-1" href="#multi-item-galery" data-slide="prev"><</a>
        <a class="btn-floating next mx-1" href="#multi-item-galery" data-slide="next">></a>
      <!-- </div> -->
    </div>
    <!--/.Controls-->
  </div>
</section>

<section class="container-fluid pt-1 px-6 Detalle">
  <div class="row p-0 pb-4">
    <div class="col-12 col-lg-8 pr-0 pr-md-5">
      <div id="InfoProperty1" class="row py-2">
      </div>
      <div id="InfoProperty2" class="row py-2">
        <div id="Loader" class="col-12 pt-3">
          <div class="d-flex justify-content-center">
            <div class="text-primary spinner-border my-5" style="width: 5rem;height: 5rem;border: 10px solid currentColor;border-right-color: transparent;" role="status">
            </div>
          </div>
        </div>
      </div>
      <div id="InfoProperty3" class="row py-2">
      </div>
    </div>
    <div class="col-12 col-lg-4 pt-0 pt-md-4">
      <div id="InfoPropertyAsesor" class="row jumbotron px-1 py-3  rounded-0 mb-2">
      </div>
      <div id="InfoPropertyLlamada" class="row">
        <div class="col-12 px-0 pb-2">
          <a href="tel:3124066540" class="btn btn-primary w-100 rounded-0 font-weight-bold">SOLICITAR VISITA</a>
        </div>
      </div>
      <div id="InfoPropertycaracteristicas" class="row ListaCaracteristicas">
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

<section id="detalleimages" class="container-fluid py-5 px-6 destacados mb-5">
  <div class="row p-0 pb-5 pb-lg-4">
    <div class="col-12 col-sm-auto">
      <h2 class="d-inline-block m-0"> INMUEBLES SIMILARES </h2>
    </div>
    <div class="col d-none d-sm-flex align-items-center">
      <hr class="Barra w-100">
    </div>
  </div>

  <!-- CAROUSEL -->
  <div id="multi-item-similares" class="carousel slide carousel-multi-item" data-ride="carousel">
    <!--Controls-->
    <div class="controls-top">
      <a class="btn-floating prev" href="#multi-item-similares" data-slide="prev"><</a>
      <a class="btn-floating next" href="#multi-item-similares" data-slide="next">></a>
    </div>
    <!--/.Controls-->
    <!-- Bullets -->
    <ol id="Bullets" class="carousel-indicators destacados">
    </ol>
    <!-- /Bullets -->
    <!--Slides-->
    <div id="SimilaresContainer" class="carousel-inner" role="listbox">
    </div>
    <!--/.Slides-->
  </div>
</section>


<script type="module" src="<?php echo $base_url ?>/js/Detalle.js"></script>
<?php 
    require_once '../includes/footer.php';
?>
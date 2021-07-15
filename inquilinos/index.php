<?php 
    require_once '../includes/header.php';
?>
<section class="coverInternasI">
    <div class="wrap w-100 h-100 p-2 p-lg-5 d-flex flex-column justify-content-end">
        <h1 class="text-white text-left m-0 pt-5 px-4 px-sm-5">INQUILINOS</h1>
        <p class="text-white text-left px-4 px-sm-5 ">Botones habilitados a partir <br> del <span class="font-weight-bold">segundo día</span> hábil de <br>cada mes.</p>
    </div>
</section>


<section id="SectionHeight" class="container-fluid py-5 px-6 inquilinos">
  <div class="row p-0 pb-4">
    <div class="col-12 col-lg-auto">
      <h2 class="d-block d-lg-inline-block m-0"> A TENER EN CUENTA </h2>
    </div>
    <div class="col d-flex align-items-center">
      <hr class="Barra w-100">
    </div>
  </div>
 <div class="container-fluid mt-2 mb-0 ">
    <div class="row text-justify ">
        <div class="col-12 col-lg-5 p-0">
          <p class="textTenerEnCuenta">Nos permitimos informar que la factura y su desprendible de pago, se encuentra disponible en el botón código de barras. Por favor ingresar el número de documento o Nit sin dígito de verificación y la clave son 4 ceros (ØØØØ). Recuerde que si cambio la clave debe ingresar su clave asignada.</p>
        </div>
     <div class="container col-12 col-lg-5 mr-0 p-0">
        <div class=" ml-auto p-0">
          <p class= "font-italic mb-4" >1. Si usted no ha cancelado el canon de arriendo del mes anterior en las fechas establecidas (Fecha Máx. día 25), no podrá hacer uso del botón PSE.</p>
        </div>    
        <div class=" ml-auto p-0">
          <p class= "font-italic">2. Si va a realizar el pago por PSE y no conoce el código de su inmueble, por favor solicitarlo a servicioalcliente@hoyosluque.com.</p>
        </div>
     </div>
    </div>
    <div class="row mt-4 mt-lg-5 mb-1 mb-lg-3">
        <div class="col-12 col-lg-6 d-flex justify-content-center mb-3 mb-lg-0">
            <a target="_blank" href="https://www.avalpaycenter.com/wps/portal/portal-de-pagos/web/banco-de-occidente/resultado-busqueda/realizar-pago-facturadores?idConv=00003315&origen=buscar"><img class="img-fluid" src="../assets/pse.png" alt="Pse"></a>
        </div>
        <div class="col-12 col-lg-6 d-flex justify-content-center">
            <a target="_blank" href="https://simidocs.siminmobiliarias.com/base/simired/simidocsapi1.0/index.php?inmo=441&tipo=2"><img class="img-fluid" src="../assets/BarCode.png" alt="Codigo de barras"></a>
        </div>
    </div>

 </div> 
</section>

<script>
    var $item2 = $('#SectionHeight');
    var $wHeight2 = window.innerHeight;
    $item2.height($wHeight2);
</script>

<?php 
    require_once '../includes/footer.php';
?>
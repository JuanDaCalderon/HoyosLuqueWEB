<?php 
    require_once '../includes/header.php';
?>
<section id="sectionBannerHeader" class="coverInternasPro">
    <div class="wrap w-100 h-100 px-0 px-lg-5 py-5 d-flex flex-column justify-content-end">
        <h1 class="text-white text-left mb-5 px-5">PROPIETARIOS</h1>        
    </div>
</section>


<section id="SectionHeight" class="container-fluid py-5 pb-lg-3 px-6 propietarios">
  <div class="row p-0 pb-4">
    <div class="col-12 col-lg-auto">
      <h2 class="d-block d-lg-inline-block m-0"> A TENER EN CUENTA </h2>
    </div>
    <div class="col d-flex align-items-center">
      <hr class="Barra w-100">
    </div>
 </div>
 <div class="container-fluid mt-2 mb-4 px-0">
    <div class="col-12 text-justify pb-1">
        <div class="text d-flex justify-content-center">
         <p>Señores Propietarios, le recordamos, que su estado de cuenta está disponible el día 5 del siguiente mes a consultar.</p>
        </div>
        <div class="container d-flex flex-row justify-content-center align-items-center mt-5">
         <a target="_blank" href="https://simidocs.siminmobiliarias.com/base/simired/simidocsapi1.0/index.php?inmo=441&tipo=1"><img src="../assets/Propietarios-toDo.png" alt="Propietarios"></a>
        </div>
    </div>
 </div> 
</section>

<script>
  var body = document.getElementById('main-content');
  var heightWindow = window.innerHeight;
  body.setAttribute("style",'height:'+heightWindow+'px; display: flex!important;flex-direction: column!important;');
</script>

<?php 
    require_once '../includes/footer.php';
?>
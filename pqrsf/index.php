<?php 
    require_once '../includes/header.php';
?>
<section class="coverInternasP">
    <div class="wrap w-100 h-100 p-5 d-flex flex-column justify-content-end align-items-center">
        <h1 class="text-white text-center m-0 pt-5">PQRSF</h1>  
        <p id="pqrsffont" class="text-uppercase font-weight-light text-white text-center m-0 pb-4"> <span>P</span>reguntas - <span>Q</span>uejas- <span>R</span>eclamos - <span>S</span>ugerencias - <span>F</span>elicitaciones</p>      
    </div>
</section>

<section id="SectionHeight" class="container-fluid py-5 px-6 pqrsf">
    <div class="mb-6">
     <div class="col d-flex align-items-center mb-2 mb-lg-5">
         <hr class="Barra w-100">
     </div>
     <div class="container col-lg-6 text-justify ">
        <div>
         <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam efficitur risus imperdiet nisi suscipit consequat. Nullam augue quam, condimentum vel mollis sed, hendrerit quis ipsum. Proin sagittis, ipsum sit amet placerat eleifend, urna libero egestas neque, nec auctor lorem est nec lorem. Sed elit erat, volutpat sed imperdiet vel, elementum ac ante.</p>
        </div>
        <div class="container col-md-7 d-flex flex-row justify-content-center align-items-center mt-5 px-0">
         <a target="_blank" href="http://199.189.87.44/hoyosluque/pqr_adicionar.cfm" class="btn btn-primary w-100 rounded-0 font-weight-bold ">SOLICITUD</a>
        </div>
     </div>  
    </div>  
</section>

<script>
    var $item2 = $('#SectionHeight');
    var $wHeight2 = window.innerHeight - 630;
    $item2.height($wHeight2);
</script>

<?php 
    require_once '../includes/footer.php';
?>
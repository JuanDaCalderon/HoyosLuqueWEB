<?php 
    require_once 'includes/header.php';
?>

<section class="main cover p-5" id="main-banner">
    <a href="<?php echo $base_url?>" type="button" class="btn btn-primary btn-lg customThank">VOLVER A EXPLORAR LOS INMUEBLES</a>
    <h1 class="text-white">MUY PRONTO NOS PONDREMOS EN CONTACTO <br> <span>CONTIGO, MUCHAS GRACIAS</span></h1>
    
</section>





<section class="m-0 my-lg-3">
  <img class="img-fluid w-100" src="<?php echo $base_url ?>/assets/Home/LasBoxes.jpg" alt="Banner Las Boxes">
</section>

<script>
    var $item = $('#main-banner'); 
    var $wHeight = window.innerHeight-30;
    $item.height($wHeight);
</script>

<script type="module" src="<?php echo $base_url ?>/js/Home.js"></script>

<?php 
    require_once 'includes/footer.php';
?>
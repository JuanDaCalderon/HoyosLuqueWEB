<?php 
    require_once 'includes/header.php';
?>

<section class="main cover p-5" id="main-banner">
    <a href="<?php echo $base_url?>" type="button" class="btn btn-primary btn-lg customThank">VOLVER A EXPLORAR LOS INMUEBLES</a>
    <h1 class="text-white">MUY PRONTO NOS PONDREMOS EN CONTACTO <br> <span>CONTIGO, MUCHAS GRACIAS</span></h1>
    
</section>

<script>
    var $item = $('#main-banner'); 
    var $wHeight = window.innerHeight-30;
    $item.height($wHeight);
</script>

<?php 
    require_once 'includes/footer.php';
?>
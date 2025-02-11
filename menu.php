<?php
    require_once 'header.php';
    require_once 'templates/nav.php';
?>
<h1 class="gold spaceTitleMenu text-center mb-5"><img src="assets/img/LOGO M-128.png" rel="icon" alt="Logo restaurant" loading="lazy">enus</h1>

<section class="menuCard">
    <?php
        require_once 'templates/planches.php';
    ?>
</section>
<section class="menuCard">
    <?php
        require_once 'templates/pizzas.php';
    ?>
</section>
<section class="menuCard">
    <?php
        require_once 'templates/pasta.php';
    ?>
</section>
<section class="menuCard">
    <?php
        require_once 'templates/meatFish.php';
    ?>
</section>
<section class="menuCard">
    <?php
        require_once 'templates/salade.php';
    ?>
</section>
<section class="menuCard">
    <?php
        require_once 'templates/dolci.php';
    ?>
</section>

<!--test-->
<!--<div class="d-flex justify-content-center  gap-5 mt-3">
    <img src="/assets/img/platPopart.JPG" style="border-radius: 50%; width: 10%" class="img-fluid" alt="">
    <img src="/assets/img/pizzaPopart.JPG" style="border-radius: 50%; width: 10%" class="img-fluid" alt="">
    <img src="/assets/img/platPopart.JPG" style="border-radius: 50%; width: 10%" class="img-fluid" alt="">
    <img src="/assets/img/platPopart.JPG" style="border-radius: 50%; width: 10%" class="img-fluid" alt="">
    <img src="/assets/img/platPopart.JPG" style="border-radius: 50%; width: 10%" class="img-fluid" alt="">
</div>
-->
<!--FIn test-->

<!--     <section class="bgMenu text-center mt-2">
        <h1 class="gold pt-5">MAMMA MIA <img src="assets/icones/MammamiaBrown.svg" class="mt-3 me-5"></h1>
        <h2 class="goldH2 pb-5 pt-5">RESTAURANT & AFTERWORK</h2>
        <h3 class="pb-5">Page en cours de construction<span class="dots"><span>.</span><span>.</span><span>.</span></span></h3>
    </section>
 --><?php
    require_once 'templates/footer.php';
<?php
$title ='Village Green : Accueil';
?>

<?php ob_start(); ?>

<!--  Pub gitare & livraison prix  -->
<section class="row" id="blanco">
    <div class=" col-12 d-flex justify-content-around">
        <div class="row">
            <div class="col-lg-9 d-lg-block">
                <img class="img-fluid mt-2 h-100 w-100" src="<?= base_url('assets/images/BODY/pub_guitare.png'); ?>" alt="Pub Guitare">
            </div>
            <div class="col-lg-3 d-lg-block d-none  pl-5">
                <img class="img-fluid mt-2" src="<?= base_url('assets/images/BODY/banniere_droite_prix.png'); ?>" alt="Bannière droite">
            </div>
        </div>
    </div>


    <!-- bande centrale -->
    <div class="row">
        <img id="guitmobile" class="col-lg-12 d-lg-block d-none mt-5" src="<?= base_url('assets/images/BODY/banniere_centre_4_pictos.png'); ?>" alt="">
    </div>





    <!-- Catégorie d'instruments -->
    <section>
        <div class="row m-3">
            <div class="col">
                <h3 id="navy" class="text-center"><strong>Nos catégories</strong></h3>
            </div>
        </div>

        <div class="row-cols-lg-4 row-cols-md-2 d-flex flex-wrap">


            <!-- Guitare -->
            <a href="#">
                <div id="img1" class="col p-0"></div>
            </a>

            <!-- Batterie -->
            <a href="#">
                <div id="img2" class="col p-0"></div>
            </a>

            <!-- Piano -->
            <a href="#">
                <div id="img3" class="col p-0"></div>
            </a>

            <!-- Micro -->
            <a href="#">
                <div id="img4" class="col p-0"></div>
            </a>

        </div>

        <div class="row-cols-lg-4 row-cols-md-2 d-flex flex-wrap">
            <!-- Sono -->
            <a href="#">
                <div id="img5" class="col pr-0"></div>
            </a>
            <!-- Cases -->
            <a href="#">
                <div id="img6" class="col p-0"></div>
            </a>
            <!-- Cable -->
            <a href="#">
                <div id="img7" class="col p-0"></div>
            </a>
            <!-- saxo -->
            <a href="#">
                <div id="img8" class="col p-0"></div>
            </a>

        </div>
    </section>



    <!-- Meilleures ventes / Partenaires -->
    <section>
        <div class="row pl-3 pb-3">
            <div class="col-lg-7">
                <h3 id="navy" class="text-center mt-5"><strong>Nos meilleurs ventes</strong></h3>
                <div class="row d-flex justify-content-around">
                    <a id="img9" href=""></a>
                    <a id="img10" href=""></a>
                    <a id="img11" href=""></a>
                </div>
            </div>
            <div class="col-lg-5 col-md-12">
                <h3 id="navy" class=" text-center mt-5"><strong>Nos partenaires</strong></h3>

                <img id="img12" class="img-fluid" id="reglage" src="<?= base_url('assets/images/BODY/partenaires_4_logos.png'); ?>" alt="4 logo partenaires">
            </div>
        </div>
    </section>
</section>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>


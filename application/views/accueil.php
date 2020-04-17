<?php
include("header.php");
?>

    <div class="row d-flex justify-content-around">
            <div class="col-9 pr-5">
                <img class="img-fluid mt-2 h-100" src="../public/images/BODY/pub_guitare.png" alt="Pub Guitare">
            </div>
            <div class="col-3 pl-5">
                <img class="img-fluid mt-2" src="../public/images/BODY/banniere_droite_prix.png" alt="Bannière droite">
            </div>
    </div>


    <!-- bande centrale -->
    <div class="row">
        <img class="col-12 mt-5" src="../public/images/BODY/banniere_centre_4_pictos.png" alt="">
    </div>


    <!-- Catégorie d'instruments -->
    <section>
        <div class="row m-3">
            <h3 id="navy"><strong>Nos catégories</strong></h3>
        </div>

        <div class="row row-cols-4 d-flex flex-wrap pl-3">
            <!-- Guitare -->
            <a href="">
                <div id="img1" class="col p-0"></div>
            </a>

            <!-- Batterie -->
            <a href="">
                <div id="img2" class="col p-0"></div>
            </a>

            <!-- Piano -->
            <a href="">
                <div id="img3" class="col p-0"></div>
            </a>

            <!-- Micro -->
            <a id="img4" href="">
                <div class="col p-0"></div>
            </a>
        </div>

        <div class="row row-cols-4  d-flex flex-wrap pl-3">
            <!-- Sono -->
            <a id="img5" href="">
                <div class="col pr-0"></div>
            </a>
            <!-- Cases -->
            <a id="img6" href="">
                <div class="col p-0"></div>
            </a>
            <!-- Cable -->
            <a id="img7" href="">
                <div class="col p-0"></div>
            </a>
            <!-- saxo -->
            <a id="img8" href="">
                <div class="col p-0"></div>
            </a>
        </div>

    </section>


    <!-- Meilleures ventes / Partenaires -->
        <div class="row pl-3 pb-3">
            <div class="col-7">
                <h3 id="navy" class="mt-5"><strong>Nos meilleurs ventes</strong></h3>
                <div class="row d-flex justify-content-around">
                    <a id="img9" href=""></a>
                    <a id="img10" href=""></a>
                    <a id="img11" href=""></a>
                </div>
            </div>
            <div class="col-5">
                <h3 id="navy" class="mt-5"><strong>Nos partenaires</strong></h3>
                <img id="img12" class="img-fluid" id="reglage" src="../public/images/BODY/partenaires_4_logos.png" alt="4 logo partenaires">
            </div>
        </div>
    



<?php
include("footer.php");
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



    <!-- CSS liée -->
    <!--  <link href="../public/css/style.css" rel="stylesheet"> -->
    <link href="../public/css/test.css" rel="stylesheet">
    <link href="../public/css/mobile.css" rel="stylesheet">

    <title>Bienvenue sur notre site</title>
</head>


<body class="container p-0">

    <header id="blanco" class="row">
        <div class="col-12">
            <div id="bande3" class="row">
                <!-- ============== -->
                <div class="col-3 p-0">
                    <img id="logo" class="img-fluid" src="../public/images/HEADER/logo_village_green.png" alt="LOGO Village green">
                </div>
                <div class="col-9 p-0 justify-content-end">
                    <!-- Nav1 -->
                    <nav id="nav1" class="nav justify-content-end pt-1">
                        <a class="nav-link active" href="#!">Infos</a>
                        <a class="nav-link active" href="#!">Espace client</a>
                        <a class="nav-link" href="#!"><img src="../public/images/HEADER/picto_panier.png" alt="logo panier"></a>
                        <a class="nav-link" href="#!"><img src="../public/images/HEADER/picto_pays.png" alt="logo pays"></a>
                    </nav>
                    <!-- nav2 -->
                    <nav id="nav2" class="nav justify-content-end pt-1">
                        <a class="nav-link active" href="#!">Produits</a>
                        <a class="nav-link active" href="#!">Service</a>
                        <a class="nav-link active" href="#!">Aide</a>
                        <a class="nav-link active" href="#!">A propos</a>
                    </nav>

                    <!-- nav3 -->
                    <div class="row justify-content-end pr-5">
                        <nav id="nav3">
                        <a href="#" role="button" title="" class="popovers  text-light" data-toggle="popover" data-html="true" 
                        data-content='
                        <a href="" title="test add link">Guitares Electriques</a><br>
                        <a href="" title="test add link">Guitares Classiques</a><br>
                        <a href="" title="test add link">Guitares Acoustiques & Electro-Acoustiques</a><br>
                        <a href="" title="test add link">Basses Electriques</a><br>
                        <a href="" title="test add link">Basses Acoustiques</a><br>
                        <a href="" title="test add link">Basses Semi-Acoustiques</a><br>
                        <a href="" title="test add link">Ukulélés</a><br>
                        <a href="" title="test add link">Autres Instruments à cordes pincées</a>' data-original-title="">Guit/Bass</a>

                        <a href="#" role="button" title="" class="popovers  text-light" data-toggle="popover" data-html="true" data-content='<a href="" class="text-dark" title="test add link"></a>' data-original-title="">Batteries</a>
                        <a href="#" role="button" title="" class="popovers  text-light" data-toggle="popover" data-html="true" data-content='<a href="" title="test add link"></a>' data-original-title="">Clavier</a>
                        <a href="#" role="button" title="" class="popovers  text-light" data-toggle="popover" data-html="true" data-content='<a href="" title="test add link"></a>' data-original-title="">Studio</a>
                        <a href="#" role="button" title="" class="popovers  text-light" data-toggle="popover" data-html="true" data-content='<a href="" title="test add link"></a>' data-original-title="">Sono</a>
                        <a href="#" role="button" title="" class="popovers  text-light" data-toggle="popover" data-html="true" data-content='<a href="" title="test add link"></a>' data-original-title="">Eclairage</a>
                        <a href="#" role="button" title="" class="popovers  text-light" data-toggle="popover" data-html="true" data-content='<a href="" title="test add link"></a>' data-original-title="">DJ</a>
                        <a href="#" role="button" title="" class="popovers  text-light" data-toggle="popover" data-html="true" data-content='<a href="" title="test add link"></a>' data-original-title="">Cases</a>
                        <a href="#" role="button" title="" class="popovers  text-light" data-toggle="popover" data-html="true" data-content='<a href="" title="test add link"></a>' data-original-title="">Accessoires</a>
                        <!-- <a class="nav-link active" href="#!">Guit/Bass</a> -->

                        </nav>
                    </div>
                    <!-- ============= -->
                </div>
            </div>
    </header>
    <!-- Fin header -->

<!-- Script pour les popovers -->
    <script>
        $(document).ready(function() {
            $('[data-toggle="popover"]').popover({
                placement: 'bottom'
            });
        });
    </script>
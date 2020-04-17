<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- -- Lien pour font -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSS liée -->
    <link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/mobile.css'); ?>" rel="stylesheet">


    <title>Bienvenue sur notre site</title>
</head>



<body>
    <div class="container" id="blanco">
        <header>
            <div id="bande3" class="row">
                <!-- logo Village green -->
                <div class="col-3 p-0">
                    <img id ="logo" src="<?= base_url('assets/images/HEADER/logo_village_green.png'); ?>" alt="Logo Village Green">
                </div>

                <!-- les barres de navigation -->
                <div class="col-9 p-0 justify-content-end">

                    <!--- 1ere bandes --->
                    <nav id="nav1" class="nav justify-content-end pt-1">
                        <a class="nav-link active" href="#!">Infos</a>
                        <a href="#" role="button" title="" class="popovers mt-2 pr-3" 
                        data-toggle="popover" data-html="true"
                        data-trigger="focus" data-content='
                            <p class="text-dark">Etes-vous déjà clients chez nous ?</p>
                            <label>E-mail :</label><input type="text" class="" id="email" name="mail" placeholder="exemple@mail.fr">' 
                        data-original-title="">Espace client</a>
                        <a class="nav-link" href="#!"><img src="<?= base_url('assets/images/HEADER/picto_panier.png'); ?>" alt="logo panier"></a>
                        <a class="nav-link pr-3 pl-5" href="#!"><img src="<?= base_url('assets/images/HEADER/picto_pays.png'); ?>" alt="logo pays"></a>
                    </nav>

                    <!--- 2nde bandes --->
                    <nav id="nav2" class="nav justify-content-end p-0 pt-1">
                        <a class="nav-link active " href="#!">Produits</a>
                        <a class="nav-link active " href="#!">Service</a>
                        <a class="nav-link active " href="#!">Aide</a>
                        <a class="nav-link active " href="#!">A propos</a>
                    </nav>

                    <!--- 3eme bandes --->
                    <nav id="nav3" class="nav justify-content-end p-0 pt-12 pr-4">
                        <a href="#" role="button" title="" class="popovers  text-light " data-toggle="popover" 
                        data-html="true" data-trigger="focus" data-content='
                            <a href="" class="text-dark" title="">Guitares Electriques</a><br>
                            <a href="" class="text-dark" title="">Guitares Classiques</a><br>
                            <a href="" class="text-dark" title="">Guitares Acoustiques & Electro-Acoustiques</a><br>
                            <a href="" class="text-dark" title="">Basses Electriques</a><br>
                            <a href="" class="text-dark" title="">Basses Acoustiques</a><br>
                            <a href="" class="text-dark" title="">Basses Semi-Acoustiques</a><br>
                            <a href="" class="text-dark" title="">Ukulélés</a><br>
                            <a href="" class="text-dark" title="">Autres Instruments à cordes pincées</a>' data-original-title="">Guit/Bass</a>
                        <a class="nav-link active" href="#!">Batteries</a>
                        <a class="nav-link active" href="#!">Clavier</a>
                        <a class="nav-link active" href="#!">Studio</a>
                        <a class="nav-link active" href="#!">Sono</a>
                        <a class="nav-link active" href="#!">Eclairage</a>
                        <a class="nav-link active" href="#!">DJ</a>
                        <a class="nav-link active" href="#!">Cases</a>
                        <a class="nav-link active" href="#!">Accessoires</a>
                    </nav>
                </div>
            </div>
        </header>

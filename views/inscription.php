<?php
require("header.php");
?>


<section id="blanc" class="row pt-5 ">
    <form action="#" method="POST" id="form">

        <!------- Création des identifiant de connexion-------->
        <fieldset class="mb-5">
            <legend class="text-center h1 mb-5">Créez vos identifiants</legend>

            <div class="form-group row">
                <label for="email" class="col-lg-2 col-md-2 text-right">E-mail</label>
                <div class="col-lg-3 col-md-3">
                    <input type="email" class="form-control" id="email">
                    <span id="errorEmail"></span>
                </div>
            </div>

            <div class="form-group row">
                <label for="password1" class="col-lg-2 col-md-2 text-right">Créez votre<br>mot de passe</label>
                <div class="col-lg-3 col-md-3">
                    <input type="password" class="form-control" id="password1">
                    <span id="errorPassword1"></span>
                </div>

                <label for="passeword2" class="col-lg-2 col-md-2 text-right">Confirmation<br>mot de passe</label>
                <div class="col-lg-3 col-md-3">
                    <input type="password" class="form-control" id="password2">
                    <span id="errorPassword2"></span>
                </div>
            </div>

        </fieldset>


        <!------- Saisies des données personnelles-------->
        <fieldset class="mt-5 mb-5">
            <legend class="text-center h1 mb-5">Vos Coordonnées</legend>

            <div class="row">
                <div class="col-lg-6 col-md-6 mt-5">
                    <div class="form-group row">
                        <label for="prenom" class="col-lg-4 col-md-4 text-right">Prénom</label>
                        <div class="col-lg-6 col-sm-6">
                            <input type="text" class="form-control" id="prenom">
                            <span id="errorPrenom"></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nom" class="col-lg-4 col-md-4 text-right">Nom</label>
                        <div class="col-lg-6 col-md-6">
                            <input type="text" class="form-control" id="nom">
                            <span id="errorNom"></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="adresse1" class="col-lg-4 col-md-4 mb-0 text-right">Adresse</label>
                        <div class="col-lg-6 col-md-6">
                            <input type="text" class="form-control" id="adresse">
                            <span id="errorAdresse"></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="complement" class="col-lg-4 col-md-4 mb-0 text-right">Complément<br>d'adresse</label>
                        <div class="col-lg-6 col-md-6">
                            <input type="text" class="form-control" id="complement">
                            <span id="errorComplement"></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="codepostal" class="col-lg-4 col-md-4 text-right">Code postal</label>
                        <div class="col-lg-6 col-md-6">
                            <input type="text" class="form-control" id="codepostal">
                            <span id="errorCode"></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="ville" class="col-lg-4 col-md-4 text-right">Ville</label>
                        <div class="col-lg-6 col-md-6">
                            <input type="text" class="form-control" id="ville">
                            <span id="errorVille"></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="pays" class="col-lg-4 col-md-4 text-right">Pays</label>
                        <div class="col-lg-6 col-md-6">
                            <input type="text" class="form-control" id="pays">
                            <span id="errorPays"></span>
                        </div>
                    </div>
                </div>


                <!--------------- Cadre Numero --------------------->
                <div class="span border border-secondary" id="cadre_numero">
                    <h3 id="orange" class="text-center mb-5 mt-2">Vos numéros de téléphone</h3>

                    <div class="form-group row">
                        <label for="portable" class="col-lg-4 col-md-4 text-right">Numéro de Portable</label>
                        <div class="col-lg-6 col-md-6">
                            <input type="text" class="form-control " id="portable">
                            <span id="errorPortable"></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="telephone" class="col-lg-4 col-md-4 mb-0 text-right">Numéro de téléphone fixe</label>
                        <div class="col-lg-6 col-md-6">
                            <input type="text" class="form-control" id="telephone">
                            <span id="errorTelephone"></span>
                        </div>
                    </div>
                    <img class="img-fluid" src="../public/images/BODY/ESPACE CLIENT/CADRE numero1.png">
                </div>

        </fieldset>

        <div class="row justify-content-center img-fluid">
            <button class="btn btn-sm " type="submit" value="Valider"><img class="img-fluid" src="../public/images/BODY/ESPACE CLIENT/bouton valider.png" alt="bouton valider"></button>
        </div>
    </form>


        <!---------------photos bas de page avec pictogramme-------------------->
        <div class="row p-3">
            <img class="img-fluid" src="../public/images/BODY/ESPACE CLIENT/bas de page pictos.png" alt="pictos partenaires">
        </div>
</section>
    <?php
    require("footer.php");
    ?>
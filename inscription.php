<?php
require("header.php");
?>


<section id="blanco">
    <form action="#" method="POST" >

    <!------- Création des identifiant de connexion-------->
    <fieldset>
        <legend class="text-center">Créez vos identifiants</legend>
        <div class="form-group row">
            <label for="email" class="col-lg-2 col-md-2 text-right">E-mail</label>
            <div class="col-lg-3 col-md-3">
            <input type="email" class="form-control" id="email" placeholder="dupont.pierre@mail.com">
            </div>
        </div>

        <div class="form-group row">
            <label for="password1" class="col-lg-2 col-md-2 text-right" >Créez votre mot de passe</label>
            <div class="col-lg-3 col-md-3">
            <input type="password" class="form-control" id="password1">
            </div>

            <label for="passeword2" class="col-lg-2 col-md-2 text-right">Confirmation du mot de passe</label>
            <div class="col-lg-3 col-md-3">
            <input type="password" class="form-control" id="password2">
            </div>
        </div>
    </fieldset>
</div>



    <!------- Saisies des données personnelles-------->
    <fieldset>
        <legend class="text-center">Vos Coordonnées</legend>
    <div class="row">
        <div class="col-6">
            <div class="form-group row">
                <label for="nom" class="col-lg-2 col-md-2 text-right">Nom</label>
                <div class="col-lg-6 col-md-6">
                <input type="text" class="form-control" id="nom">
                </div>
            </div>
    
            <div class="form-group row">
                <label for="prenom" class="col-lg-2 col-md-2 text-right">Prénom</label>
                <div class="col-lg-6 col-md-6">
                <input type="text" class="form-control" id="prenom">
                </div>
            </div>
    
            <div class="form-group row">
                <label for="adresse1" class="col-lg-2 col-md-2 text-right">Adresse</label>
                <div class="col-lg-6 col-md-6">
                <input type="text" class="form-control" id="adresse1">
                </div>
            </div>
    
            <div class="form-group row">
                <label for="adresse2" class="col-lg-2 col-md-2 text-right">Complément d'adresse</label>
                <div class="col-lg-6 col-md-6">
                <input type="text" class="form-control" id="adresse2">
                </div>
            </div>
    
            <div class="form-group row">
                <label for="codepostal" class="col-lg-2 col-md-2 text-right">Code postal</label>
                <div class="col-lg-6 col-md-6">
                <input type="number" class="form-control" id="codepostal">
                </div>
            </div>
    
            <div class="form-group row">
                <label for="ville" class="col-lg-2 col-md-2 text-right">Ville</label>
                <div class="col-lg-6 col-md-6">
                <input type="text" class="form-control" id="ville">
                </div>
            </div>
    
            <div class="form-group row">
                <label for="pays" class="col-lg-2 col-md-2 text-right">Pays</label>
                <div class="col-lg-6 col-md-6">
                <input type="text" class="form-control" id="pays">
                </div>
            </div>
        </div>
        
        <!------- Saisies des numéro de contacts-------->
        <div class="col-6">
        <div class="form-group row">
            <label for="portable" class="col-lg-2 col-md-2 text-right">Numéro de Portable</label>
            <div class="col-lg-3 col-md-3">
            <input type="number" class="form-control" id="portable">
            </div>
        </div>

        <div class="form-group row">
            <label for="fixe" class="col-lg-2 col-md-2 text-right">Numéro de téléphone fixe</label>
            <div class="col-lg-3 col-md-3">
            <input type="number" class="form-control" id="fixe">
            </div>
        </div>
        </div>
    </div>
    </fieldset>
    <div class="row justify-content-center">
        <button class="btn btn-sm col-lg-6" type="submit" value="Valider"><img src="assets/images/BODY/ESPACE CLIENT/bouton valider.png"></button>
    </div>
    </form>
    
</section>



<?php
require("footer.php");
?>
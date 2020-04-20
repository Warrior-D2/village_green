<?php
$title ='Village Green : Inscription';
?>

<?php ob_start(); ?>


<!-- <section id="blanco" class=" pt-5 "> -->
<?php echo form_open(); ?>
    <!------- Création des identifiant de connexion-------->
    <fieldset class="mb-5">
        <legend class="text-center h1 mb-5">Créez vos identifiants</legend>

        <div class="form-group row">
            <label for="email" class="col-lg-2 col-md-2 text-right">E-mail</label>
            <div class="col-lg-3 col-md-3">
                <input type="email" class="form-control" name="cli_email">
                <span id="errorEmail"></span>
            </div>
        </div>

        <div class="form-group row">
            <label for="password1" class="col-lg-2 col-md-2 text-right" >Créez votre<br>mot de passe</label>
            <div class="col-lg-3 col-md-3">
                <input type="password" class="form-control" name="cli_password1">
                <span id="errorPassword1"></span>
            </div>

            <label for="password2" class="col-lg-2 col-md-2 text-right">Confirmation<br>mot de passe</label>
            <div class="col-lg-3 col-md-3">
                <input type="password" class="form-control" name="cli_password2">
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
                        <input type="text" class="form-control" name="cli_prenom">
                        <span id="errorPrenom"></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nom" class="col-lg-4 col-md-4 text-right">Nom</label>
                    <div class="col-lg-6 col-md-6">
                        <input type="text" class="form-control" name="cli_nom">
                        <span id="errorNom"></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="adresse1" class="col-lg-4 col-md-4 mb-0 text-right">Adresse</label>
                    <div class="col-lg-6 col-md-6">
                        <input type="text" class="form-control" name="cli_adresse">
                        <span id="errorAdresse"></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="complement" class="col-lg-4 col-md-4 mb-0 text-right">Complément<br>d'adresse</label>
                    <div class="col-lg-6 col-md-6">
                        <input type="text" class="form-control" name="cli_complement">
                        <span id="errorComplement"></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="codepostal" class="col-lg-4 col-md-4 text-right">Code postal</label>
                    <div class="col-lg-6 col-md-6">
                        <input type="text" class="form-control" name="cli_code">
                        <span id="errorCode"></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="ville" class="col-lg-4 col-md-4 text-right">Ville</label>
                    <div class="col-lg-6 col-md-6">
                        <input type="text" class="form-control" name="cli_ville">
                        <span id="errorVille"></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="pays" class="col-lg-4 col-md-4 text-right">Pays</label>
                    <div class="col-lg-6 col-md-6">
                        <input type="text" class="form-control" name="cli_pays">
                        <span id="errorPays"></span>
                    </div>
                </div>
            </div>

            <div class="span border border-secondary" id="cadre_numero">
            <h3 class="text-center mb-5 mt-2">Vos numéros de téléphone</h3>

                <div class="form-group row">
                    <label for="portable" class="col-lg-4 col-md-4 text-right">Numéro de Portable</label>
                    <div class="col-lg-6 col-md-6">
                        <input type="text" class="form-control " name="cli_portable">
                        <span id="errorPortable"></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="telephone" class="col-lg-4 col-md-4 mb-0 text-right">Numéro de téléphone fixe</label>
                    <div class="col-lg-6 col-md-6">
                        <input type="text" class="form-control" name="cli_fixe">
                        <span id="errorTelephone"></span>
                    </div>
                </div>
                <img class="img-fluid" src="<?= base_url('assets/images/BODY/ESPACE CLIENT/CADRE numero1.png'); ?>">
            </div>
        </div>
    </fieldset>
    <!------Bouton valider----------->
    <div class="row justify-content-center img-fluid">
        <button class="btn btn-sm" type="submit" value="Valider"><img class="img-fluid" src="<?= base_url('assets/images/BODY/ESPACE CLIENT/bouton valider.png'); ?>" alt="bouton valider"></button>
    </div>
</form>

<!---------------photos bas de page avec pictogramme-------------------->
<div class="row pt-5 pb-5">
    <img class="img-fluid" src="<?= base_url('assets/images/BODY/ESPACE CLIENT/bas de page pictos.png'); ?>" alt="pictos partenaires">
</div>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>



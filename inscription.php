<?php
require("header.php");
?>


<div id="blanco">
    <!------- Création des identifiant de connexion-------->
    <h1>Créez vos identifiants</h1>
    <form action="#" method="POST">
        <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" class="form-control" id="email" placeholder="dupont.pierre@mail.com">
        </div>

        <div class="form-group">
        <label for="password1">Créez votre mot de passe</label>
        <input type="password" class="form-control" id="password1">
        </div>

        <div class="form-group">
        <label for="passeword2">Confirmation du mot de passe</label>
        <input type="password" class="form-control" id="password2">
        </div>
    <!------- Saisies des données personnelles-------->
    <h1>Vos Coordonnées</h1>
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom">
        </div>

        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" class="form-control" id="prenom">
        </div>

        <div class="form-group">
            <label for="adresse1">Adresse</label>
            <input type="text" class="form-control" id="adresse1">
        </div>

        <div class="form-group">
            <label for="adresse2">Complément d'adresse</label>
            <input type="text" class="form-control" id="adresse2">
        </div>

        <div class="form-group">
            <label for="codepostal">Code postal</label>
            <input type="number" class="form-control" id="codepostal">
        </div>

        <div class="form-group">
            <label for="ville">Ville</label>
            <input type="text" class="form-control" id="ville">
        </div>

        <div class="form-group">
            <label for="pays">Pays</label>
            <input type="text" class="form-control" id="pays">
        </div>

        <!------- Saisies des numéro de contacts-------->
        <div class="form-group">
            <label for="portable">Numéro de Portable</label>
            <input type="number" class="form-control" id="portable">
        </div>

        <div class="form-group">
            <label for="fixe">Numéro de téléphone fixe</label>
            <input type="number" class="form-control" id="fixe">
        </div>
    </form>
</div>



<?php
require("footer.php");
?>
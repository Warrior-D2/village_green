/* -------------------Page de vérification du formulaire -------------------------*/


// fonction qui suppr: -espace -antislash -caractères spéciaux des input
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


// déclaration du formulaire
var form = document.getElementById("form");

form.addEventListener("submit", function (event) {
    event.preventDefault();
    // récupération des valeurs des champs input avec l'ID
    var email = document.getElementById("email");
    var errorEmail = document.getElementById("errorEmail");
    var regexEmail = /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/;

    var password1 = document.getElementById("password1");
    var errorPassword1 = document.getElementById("errorPassword1");
    var regexPassword1 = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$/;

    var password2 = document.getElementById("password2");
    var errorPassword2 = document.getElementById("errorPassword2");
    var regexPassword2 = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$/;

    var prenom = document.getElementById("prenom");
    var errorPrenom = document.getElementById("errorPrenom");
    var regexPrenom = /[a-zA-Z\é\è\-\ï\ë\î]$/;

    var nom = document.getElementById("nom");
    var errorNom = document.getElementById("errorNom");
    var regexNom = /[a-zA-Z\é\è\-\ï\ë\î]$/;

    var adresse = document.getElementById("adresse");
    var errorAdresse = document.getElementById("errorAdresse");
    var regexAdresse = /^[0-9]{1,3}(?:(?:[,. ]){1}[-a-zA-Zàâäéèêëïîôöùûüç]+)*$/;

    var complement = document.getElementById("complement");
    var errorComplement = document.getElementById("errorComplement");
    var regexComplement = /^[0-9]{1,3}(?:(?:[,. ]){1}[-a-zA-Zàâäéèêëïîôöùûüç]+)*$/;

    var code_postal = document.getElementById("codepostal");
    var errorCode = document.getElementById("errorCode");
    var regexCode = /^[0-9]{5,5}$/;

    var ville = document.getElementById("ville");
    var errorVille = document.getElementById("errorVille");
    var regexVille = /[a-zA-Z\é\è\-\ï\ë\î]$/

    var pays = document.getElementById("pays");
    var errorPays = document.getElementById("errorPays");
    var regexPays = /[a-zA-Z\é\è\-\ï\ë\î]$/

    var portable = document.getElementById("portable");
    var errorPortable = document.getElementById("errorPortable");
    var regexPortable = /^(?:(?:\+|00)33|0)\s*[1-9](?:[\s.-]*\d{2}){4}$/;

    var telephone = document.getElementById("telephone");
    var errorTelephone = document.getElementById("errorTelephone");
    var regexTelephone = /^(?:(?:\+|00)33|0)\s*[1-9](?:[\s.-]*\d{2}){4}$/;



    //Vérification de l'email

    if (email.value == "") //champs vide
    {
        errorEmail.innerHTML = "Ce champs est requis";
        errorEmail.style.color = "red";
        event.preventDefault(); // bloque l'envoye du formulaire
    } else if (regexEmail.test(email.value) == false) // si la saisie du champs ne corespond pas avec la regex
    {
        errorEmail.innerHTML = "Veuilllez saisir une adresse email valide";
        errorEmail.style.color = "orange";
        event.preventDefault();
    } else {
        errorEmail.innerHTML = "ok !";
        errorEmail.style.color = "green";
    }


    //Vérification du mot de passe

    if (password1.value == "") {
        errorPassword1.innerHTML = "Ce champs est requis";
        errorPassword1.style.color = "red";
        event.preventDefault();
    } else if (regexPassword1.test(password1.value) == false) {
        errorPassword1.innerHTML = "Le mot de passe doit comporter au minimum 8 caractères dont une majuscule, une minuscule, un chiffre et un caractères spécial";
        errorPassword1.style.color = "orange";
        event.preventDefault();
    } else {
        errorPassword1.innerHTML = "ok !";
        errorPassword1.style.color = "green";
    }


    //Vérification de la confirmation du mot de passe

    if (password2.value == "") {
        errorPassword2.innerHTML = "Ce champs est requis";
        errorPassword2.style.color = "red";
        event.preventDefault();
    } else if (regexPassword2.test(password2.value) == false) {
        errorPassword2.innerHTML = "Le mot de passe doit comporter au minimum 8 caractères dont une majuscule, une minuscule, un chiffre et un caractères spécial";
        errorPassword2.style.color = "orange";
        event.preventDefault();
    } else {
        errorPassword2.innerHTML = "ok !";
        errorPassword2.style.color = "green";
    }


    //Vérification du Prénom

    if (prenom.value == "") {
        errorPrenom.innerHTML = "Ce champs est requis";
        errorPrenom.style.color = "red";
        event.preventDefault();
    } else if (regexPrenom.test(prenom.value) == false) {
        errorPrenom.innerHTML = "Ce champs ne peut contenir que des lettres ou des accents";
        errorPrenom.style.color = "orange";
        event.preventDefault();
    } else {
        errorPrenom.innerHTML = "ok !";


        errorPrenom.style.color = "green";
    }




    //Vérification du Nom

    if (nom.value == "") {
        errorNom.innerHTML = "Ce champs est requis";
        errorNom.style.color = "red";
        event.preventDefault();
    } else if (regexNom.test(nom.value) == false) {
        errorNom.innerHTML = "Ce champs ne peut contenir que des lettres ou des accents";
        errorNom.style.color = "orange";
        event.preventDefault();
    } else {
        errorNom.innerHTML = "ok !";
        errorNom.style.color = "green";
    }


    //Vérification de l'adresse

    if (adresse.value == "") {
        errorAdresse.innerHTML = "Ce champs est requis";
        errorAdresse.style.color = "red";
        event.preventDefault();
    } else if (regexAdresse.test(adresse.value) == false) {
        errorAdresse.innerHTML = "Veuilllez saisir une adresse valide";
        errorAdresse.style.color = "orange";
        event.preventDefault();
    } else {
        errorAdresse.innerHTML = "ok !";
        errorAdresse.style.color = "green";
    }


    //Vérification du complément d'adresse

    if (complement.value == "") {
        errorComplement.innerHTML = "Ce champs est requis";
        errorComplement.style.color = "red";
        event.preventDefault();
    } else if (regexComplement.test(complement.value) == false) {
        errorComplement.innerHTML = "Ce champs n'est pas valide";
        errorComplement.style.color = "orange";
        event.preventDefault();
    } else {
        errorComplement.innerHTML = "ok !";
        errorComplement.style.color = "green";
    }



    //Vérification du code postal

    if (code_postal.value == "") {
        errorCode.innerHTML = "Ce champs est requis";
        errorCode.style.color = "red";
        event.preventDefault();
    } else if (regexCode.test(code_postal.value) == false) {
        errorCode.innerHTML = "Ce champs ne peut contenir que des chiffres";
        errorCode.style.color = "orange";
        event.preventDefault();
    } else {
        errorCode.innerHTML = "ok !";
        errorCode.style.color = "green";
    }

    //Vérification de la ville

    if (ville.value == "") {
        errorVille.innerHTML = "Ce champs est requis";
        errorVille.style.color = "red";
        event.preventDefault();
    } else if (regexVille.test(ville.value) == false) {
        errorVille.innerHTML = "Ce champs ne peut comporter que des lettres";
        errorVille.style.color = "orange";
        event.preventDefault();
    } else {
        errorVille.innerHTML = "ok !";
        errorVille.style.color = "green";
    }


    //Vérification du Pays

    if (pays.value == "") {
        errorPays.innerHTML = "Ce champs est requis";
        errorPays.style.color = "red";
        event.preventDefault();
    } else if (regexPays.test(pays.value) == false) {
        errorPays.innerHTML = "Ce champs n'est pas valide";
        errorPays.style.color = "orange";
        event.preventDefault();
    } else {
        errorPays.innerHTML = "ok !";
        errorPays.style.color = "green";
    }



    //Vérification du numéro de Portable

    if (portable.value == "") {
        errorPortable.innerHTML = "Ce champs est requis";
        errorPortable.style.color = "red";
        event.preventDefault();
    } else if (regexPortable.test(portable.value) == false) {
        errorPortable.innerHTML = "Veuilllez saisir une adresse Portable valide";
        errorPortable.style.color = "orange";
        event.preventDefault();
    } else {
        errorPortable.innerHTML = "ok !";
        errorPortable.style.color = "green";
    }



    //Vérification du numéro de téléphone fixe

    if (telephone.value == "") {
        errorTelephone.innerHTML = "Ce champs est requis";
        errorTelephone.style.color = "red";
        event.preventDefault();
    } else if (regexTelephone.test(telephone.value) == false) {
        errorTelephone.innerHTML = "Veuilllez saisir une adresse Telephone valide";
        errorTelephone.style.color = "orange";
        event.preventDefault();
    } else {
        errorTelephone.innerHTML = "ok !";
        errorTelephone.style.color = "green";
    }

});


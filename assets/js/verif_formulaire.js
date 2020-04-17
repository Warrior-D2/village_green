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


form.addEventListener("submit", function(event)
{

    var email = document.getElementById("email");
    var errorEmail = document.getElementById("errorEmail");
    var regexEmail = /^[A-Za-z]+$/;

    var password1 = document.getElementById("password1");
    var regexPassword1 = /^[A-Za-z]+$/;

    var password2 = document.getElementById("password2");
    var regexPassword2 = /^[A-Za-z]+$/;

    var prenom = document.getElementById("prenom");
    var regexPrenom = ??????;

    var nom = document.getElementById("nom");
    var regexNom = ??????;

    var adresse = document.getElementById("adresse");
    var regexAdresse = ??????;

    var complement = document.getElementById("complement");
    var regexComplment = ??????;

    var code_postal = document.getElementById("codepostal");
    var regexCode = ??????;

    var ville = document.getElementById("ville");
    var regexVille = ??????;

    var pays = document.getElementById("pays");
    var regexPays = ??????;

    var potable = document.getElementById("portable");
    var regexPortable = ??????;

    var telephone = document.getElementById("telephone");
    var regexTelephone = ??????;



    // Vérification du nom

    if (name.value.trim() == "")  // le champs est vide
    {
        var errorName = document.getElementById("errorName");
        errorName.innerHTML = "Ce champs est requis";
        errorName.style.color = "red";
        event.preventDefault(); // permet de bloquer l'envoye du formulaire
    }else if (RegExpName.test (name.value) == false) // la regex n'est respecté
    {
        errorName = document.getElementById("errorName");
        errorName.innerHTML = "Ce champs doit comporter des lettres uniquement";
        errorName.style.color = "orange";
        event.preventDefault();
    }else                       // la saisie est accepté
    {
        errorName = document.getElementById("errorName");
        errorName.innerHTML = "C'est bon !";
        errorName.style.color = "green";
    }




    // Vérification du prénom

    if (prenom.value.trim() == "")  // trim retire les espaces au debut et entre les mots
    {
        var errorPrenom = document.getElementById("errorPrenom");
        errorPrenom.innerHTML = "Ce champs est requis";  //inner html permet d'afficher du texte dans la page html
        errorPrenom.style.color = "red";
        event.preventDefault(); 
    }else if (RegExpName.test (prenom.value) == false) // .test permet de vérifier la valeur de la variable par rapport au regex 
    {
        errorPrenom = document.getElementById("errorPrenom");
        errorPrenom.innerHTML = "Ce champs doit comporter des lettres uniquement";
        errorPrenom.style.color = "orange";
        event.preventDefault();
    }else
    {
        errorPrenom = document.getElementById("errorPrenom");
        errorPrenom.innerHTML = "C'est bon !";
        errorPrenom.style.color = "green";
    }



    // Vérification du sexe (radio)

    if ((!male ) && (!female))
    {
        var error = document.getElementById("error");
        error.innerHTML = "Ce champs est requis";
        error.style.color = "red";
        event.preventDefault();
    }else
    {
        error = document.getElementById("error");
        error.innerHTML = "C'est bon !";
        error.style.color = "green"; 
    }
    


    //Vérification de la date

    if (date.value.trim() == "")
    {
        var errorDate = document.getElementById("errorDate");
        errorDate.innerHTML = "Ce champs est requis";
        errorDate.style.color = "red";
        event.preventDefault();
    }else if (RegExpDate.test (date.value) == false)
    {
        errorDate = document.getElementById("errorDate");
        errorDate.innerHTML = "Ce champs doit être de la forme jj/mm/aa";
        errorDate.style.color = "orange";
        event.preventDefault();
    }else
    {
        errorDate = document.getElementById("errorDate");
        errorDate.innerHTML = "C'est bon !";
        errorDate.style.color = "green"; 
    }


    /*//Vérification du code postal

    if (cp.value.trim() == "")  
    {
        var errorCode = document.getElementById("errorCode");
        errorCode.innerHTML = "Ce champs est requis";
        errorCode.style.color = "red";
        event.preventDefault();
    }else if (RegExpCp.test (cp.value) == false)
    {
        errorCode = document.getElementById("errorCode");
        errorCode.innerHTML = "Ce champs peut comporter 5 chiffres uniquement";
        errorCode.style.color = "orange";
        event.preventDefault();
    }else
    {
        errorCode = document.getElementById("errorCode");
        errorCode.innerHTML = "C'est bon !";
        errorCode.style.color = "green"; 
    }
    

    //Vérification de l'adresse

    if (adresse.value.trim() == "")  
    {
        var errorAdresse = document.getElementById("errorAdresse");
        errorAdresse.innerHTML = "Ce champs est requis";
        errorAdresse.style.color = "red";
        event.preventDefault();
    }else if (RegExpAdresse.test (adresse.value) == false)
    {
    errorAdresse = document.getElementById("errorAdresse");
    errorAdresse.innerHTML = "Ce champs peut comporter des lettres et des chiffres";
    errorAdresse.style.color = "orange";
    event.preventDefault();
    }else
    {
        errorAdresse = document.getElementById("errorAdresse");
        errorAdresse.innerHTML = "C'est bon !";
        errorAdresse.style.color = "green"; 
    }*/


    // Vérification de l'email

    if (email.value.trim() == "")  
    {
        var errorEmail = document.getElementById("errorEmail");
        errorEmail.innerHTML = "Ce champs est requis";
        errorEmail.style.color = "red";
        event.preventDefault();
    }else if (RegExpMail.test (email.value) == false)
    {
    errorEmail = document.getElementById("errorEmail");
    errorEmail.innerHTML = "Entrez une adresse email valide";
    errorEmail.style.color = "orange";
    event.preventDefault();
    }else
    {
        errorEmail = document.getElementById("errorEmail");
        errorEmail.innerHTML = "C'est bon !";
        errorEmail.style.color = "green"; 
    }


    // Vérification du sujet selectionner
    if (demande.value == "Sélectionnez une option")
    {
        var errorDemande = document.getElementById("errorDemande");
        errorDemande.innerHTML = "Vous devez sélectionner une option!";
        errorDemande.style.color = "red";
        event.preventDefault();
    }else
    {
        errorDemande = document.getElementById("errorDemande");
        errorDemande.innerHTML = "ok!";
        errorDemande.style.color = "green";

    }

    //Vérification du message
    if (message.value.trim() == "") { 
        var errorMessage = document.getElementById("errorMessage");
        errorMessage.innerHTML = "Ce champs est requis.";
        errorMessage.style.color = "red";
        e.preventDefault(); 
    }else{
        var errorMessage = document.getElementById("errorMessage");
        errorMessage.innerHTML = "ok!";
        errorMessage.style.color = "green";
    }

    // Vérification du checkbox (traitement informatique)

    if (checkbox.checked == false )
    {
        var errorCheckbox = document.getElementById("errorCheckbox");
        errorCheckbox.innerHTML = "Vous devez cocher cette case !";
        errorCheckbox.style.color = "red";
        event.preventDefault();
    } 
} );



<?php
    // application/controllers/Inscription.php

defined('BASEPATH') OR exit('No direct script access allowed');
    
class Inscription extends CI_Controller 
{
    public function index()
    {// cette fontion va permettre d'afficher le formulaire d'incription
        $this->load->view('inscription');
    }

    public function inscription()
    {// cette fonction va permettre de traiter le formulaire
        if ($this->input->post())
        {// si les champs sont remplis
            $data = $this->input->post();// on recupére la saisie dans un tableau
            //pour l'affichage du msg d'erreur
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger" style="width: 315px;font-size: 14px;">', '</div>');  
            //on traite tous les données rentrées dans le formulaire.
            $this->form_validation->set_rules("cli_email", "E-mail", "required|valid_email|is_unique[clients.cli_email]", 
            /**TODO salma
             * attention revoir les msg d'erreur
             */
            array("required" => "Veuillez renseigner votre %s."));
            $this->form_validation->set_rules("cli_password1", "Mot de passe", "required", 
            array("required" => "Veuillez renseigner votre %s."));                  
            $this->form_validation->set_rules("cli_password2", "Mots du passe", "required|matches[cli_password2]", 
            array("required" => "Veuillez confirmer votre %s.", 'matches' => 'Les %s ne sont pas identiques.'));                  
            $this->form_validation->set_rules("cli_prenom", "Prenom", "required", 
            array("required" => "Veuillez renseigner votre %s."));                  
            $this->form_validation->set_rules("cli_nom", "Nom", "required", 
            array("required" => "Veuillez renseigner votre %s."));                  
            $this->form_validation->set_rules("cli_adresse", "Adresse", "required", 
            array("required" => "Veuillez renseigner votre %s."));                  
            $this->form_validation->set_rules("cli_complement", "Complément d'adresse", "required", 
            array("required" => "Veuillez renseigner votre %s."));                  
            $this->form_validation->set_rules("cli_code", "Code postal", "required", 
            array("required" => "Veuillez renseigner votre %s."));                  
            $this->form_validation->set_rules("cli_ville", "Ville", "required", 
            array("required" => "Veuillez renseigner votre %s."));                  
            $this->form_validation->set_rules("cli_pays", "Pays", "required", 
            array("required" => "Veuillez renseigner votre %s."));                  
            $this->form_validation->set_rules("cli_portable", "Téléphone Portable", "required", 
            array("required" => "Veuillez renseigner votre %s."));                  
            $this->form_validation->set_rules("cli_fixe", "Téléphone fixe", "required", 
            array("required" => "Veuillez renseigner votre %s."));   

            /**
            * La méthode run() permet d'exécuter la vérification des filtres.
            * Elle retourne TRUE si la valeur est correct, sinon FALSE
            */ 
            if ($this->form_validation->run() == FALSE) 
            { // Echec de la validation, on réaffiche la vue formulaire d'inscription
                $this->load->view('inscription');
            }
            else 
            { // validation réussi
                // on crypte le mot de passe
                $cli_password = $this->input->post("cli_password"); 
                $data["cli_password"] = password_hash($cli_password, PASSWORD_BCRYPT); 
                // On supprime le champ "cli_password2" pour la requête
                unset($data["cli_password2"]);
                // On appel le modèle Inscription_model
                $this->load->model('Inscription_model');
                // On appel la méthode dans le modèle
                $this->Inscription_model->inscription($data);
                redirect("accueil"); //redirige le navigateur vers l'acceuil via le helper url.
            }     
        } 
    }
    

}
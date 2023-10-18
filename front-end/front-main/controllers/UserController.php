<?php

namespace controllers;

use controllers\base\WebController;
use models\EmprunterModel;
use models\EmprunteurModel;
use utils\SessionHelpers;
use utils\Template;

class UserController extends WebController
{
    // On déclare les modèles utilisés par le contrôleur.
    private EmprunteurModel $emprunteur; // Modèle permettant d'interagir avec la table emprunteur
    private EmprunterModel $emprunter; // Modèle permettant l'emprunt

    function __construct()
    {
        $this->emprunteur = new EmprunteurModel();
        $this->emprunter = new EmprunterModel();
    }

    /**
     * Déconnecte l'utilisateur.
     * @return string
     */
    function logout(): string
    {
        SessionHelpers::logout();
        return $this->redirect("/");
    }

    /**
     * Affiche la page de connexion.
     * Si l'utilisateur est déjà connecté, il est redirigé vers sa page de profil.
     * Si la connexion échoue, un message d'erreur est affiché.
     * @return string
     */
    function login(): string
    {
        $data = array();

        // Si l'utilisateur est déjà connecté, on le redirige vers sa page de profil
        if (SessionHelpers::isConnected()) {
            return $this->redirect("/me");
        }


        // Gestion de la connexion
        if (isset($_POST["email"]) && isset($_POST["password"])) {
            $result = $this->emprunteur->connexion($_POST["email"], $_POST["password"]);

            // Si la connexion est réussie, on redirige l'utilisateur vers sa page de profil
            if ($result) {
                $this->redirect("/me");
            } else {
                // Sinon, on affiche un message d'erreur
                $data["error"] = "Email ou mot de passe incorrect";
            }
        }

        // Affichage de la page de connexion
        return Template::render("views/user/login.php", $data);
    }

    /**
     * Affiche la page d'inscription.
     * Si l'utilisateur est déjà connecté, il est redirigé vers sa page de profil.
     * Si l'inscription échoue, un message d'erreur est affiché.
     * @return string
     */
    function signup(): string
    {
        $data = array();

        // Si l'utilisateur est déjà connecté, on le redirige vers sa page de profil
        if (SessionHelpers::isConnected()) {
            return $this->redirect("/me");
        }


        // Gestion de l'inscription
        if (isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["nom"]) && isset($_POST["prenom"])) {
            $result = $this->emprunteur->creerEmprenteur($_POST["email"], $_POST["password"], $_POST["nom"], $_POST["prenom"]);

            // Si l'inscription est réussie, on affiche un message de succès
            if ($result) {
                return Template::render("views/user/signup-success.php");
            } else {
                // Sinon, on affiche un message d'erreur
                $data["error"] = "La création du compte a échoué";
            }
        }

        // Affichage de la page d'inscription
        return Template::render("views/user/signup.php", $data);
    }

    function signupValidate($uuid){
        $result = $this->emprunteur->validateAccount($uuid);

        if($result){
            // Affichage de la page de finalisation de l'inscription
            return Template::render("views/user/signup-validate-success.php");
        }else{
            // Gestion d'erreur à améliorer
            return parent::redirect("/");
        }
    }

    /**
     * Affiche la page de profil de l'utilisateur connecté.
     * Si l'utilisateur n'est pas connecté, il est redirigé vers la page de connexion.
     * @return string
     */
    function me(): string
    {
        // Récupération de l'utilisateur connecté en SESSION.
        // La variable contient les informations de l'utilisateur présent en base de données.
        $user = SessionHelpers::getConnected();

        // Récupération des emprunts de l'utilisateur
        $emprunts = $this->emprunter->getEmprunts($user->idemprunteur);

        return Template::render("views/user/me.php", array("user" => $user, "emprunts" => $emprunts));
    }

    /**
     * Affiche la page de profil d'un utilisateur.
     * Si l'utilisateur n'est pas connecté, il est redirigé vers la page de connexion.
     * Pour accéder à la page il faut également l'id de la ressource et l'id de l'exemplaire.
     * @return string
     */
    function emprunter(): string
    {
        // Id à emprunter
        $idRessource = $_POST["idRessource"];
        $idExemplaire = $_POST["idExemplaire"];

        // Récupération de l'utilisateur connecté en SESSION.
        $user = SessionHelpers::getConnected();

        if (!$user || !$idRessource || !$idExemplaire) {
            // Gestion d'erreur à améliorer
            die ("Erreur: utilisateur non connecté ou ids non renseignés");
        }

        // On déclare l'emprunt, et on redirige l'utilisateur vers sa page de profil
        $result = $this->emprunter->declarerEmprunt($idRessource, $idExemplaire, $user->idemprunteur);

        if ($result) {
            $this->redirect("/me");
        } else {
            // Gestion d'erreur à améliorer
            die("Erreur lors de l'emprunt");
        }
    }

}
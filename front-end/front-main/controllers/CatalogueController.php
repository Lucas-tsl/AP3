<?php

namespace controllers;

use controllers\base\WebController;
use models\ExemplaireModel;
use models\RessourceModel;
use utils\Template;

class CatalogueController extends WebController
{

    private RessourceModel $ressourceModel;
    private ExemplaireModel $exemplaireModel;

    function __construct()
    {
        $this->ressourceModel = new RessourceModel();
        $this->exemplaireModel = new ExemplaireModel();
    }

    /**
     * Affiche la liste des ressources.
     * @param string $type
     * @return string
     */
    function liste(string $type): string
    {
        if ($type == "all") {
            // Récupération de l'ensemble du catalogue
            $catalogue = $this->ressourceModel->getAll();

            // Affichage de la page à l'utilisateur
            return Template::render("views/catalogue/liste.php", array("titre" => "Ensemble du catalogue", "catalogue" => $catalogue));
        } else {
            // Les autres types de ressources ne sont pas encore implémentés.
            return $this->redirect("/");
        }
    }

    /**
     * Affiche le détail d'une ressource.
     * @param int $id
     * @return string
     */
    function detail(int $id): string
    {
        // Récupération de la ressource
        $ressource = $this->ressourceModel->getOne($id);

        if ($ressource == null) {
            $this->redirect("/");
        }

        // Récupération des exemplaires de la ressource
        $exemplaires = $this->exemplaireModel->getByRessource($id);
        $exemplaire = null;

        // Pour l'instant, on ne gère qu'un exemplaire par ressource.
        // Si on en trouve plusieurs, on prend le premier.
        if ($exemplaires && sizeof($exemplaires) > 0) {
            $exemplaire = $exemplaires[0];
        }


        return Template::render("views/catalogue/detail.php", array("ressource" => $ressource, "exemplaire" => $exemplaire));
    }
}
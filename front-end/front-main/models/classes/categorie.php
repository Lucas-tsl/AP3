<?php

namespace models\classes;
use models\CategorieModel;

class Categorie
{
    private  int $idCategorie;
    
    private string $libelleCategorie;

    private CategorieModel $categorieModel;

    public function _construct()
    {
        $this->categorieModel = new CategorieModel;
    }
}
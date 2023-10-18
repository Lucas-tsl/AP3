<?php

namespace routes;

use controllers\ApiDocController;
use controllers\CatalogueController;
use controllers\MainController;
use controllers\UserController;
use routes\base\Route;
use utils\SessionHelpers;
use utils\Template;

class Web
{
    function __construct()
    {
        $main = new MainController();
        $apidoc = new ApiDocController();
        $user = new UserController();
        $catalogue = new CatalogueController();

        // Appel la méthode « home » dans le contrôleur $main.
        Route::Add('/', [$main, 'home']);
        Route::Add('/exemple', [$main, 'exemple']);
        Route::Add('/exemple2/{parametre}', [$main, 'exemple']);



        // Appel la fonction inline dans le routeur.
        // Utile pour du code très simple, où un test, l'utilisation d'un contrôleur est préférable.
        // Si le code accède à la base de données, la création d'un contrôleur est requis.
        Route::Add('/horaires', fn() => Template::render('views/global/horaires.php'));

        // Routes permettant l'accès à la documentation de l'API.
        Route::Add('/api', [$apidoc, 'liste']);

        // Routes permettant la gestion de l'authentification.
        Route::Add('/login', [$user, 'login']);
        Route::Add('/signup', [$user, 'signup']);

        // Validation de l'inscription.
        Route::Add('/valider-compte/{uuid}', [$user, 'signupValidate']);

        if (SessionHelpers::isLogin()) {
            // Page de profil utilisateur.
            Route::Add('/me', [$user, 'me']);

            // Action de déconnexion.
            Route::Add('/logout', [$user, 'logout']);

            // Action d'emprunt d'une ressource.
            Route::Add('/catalogue/emprunter', [$user, 'emprunter']);
        }

        // Route permettant l'accès au catalogue.
        Route::Add('/catalogue/detail/{id}', [$catalogue, 'detail']);
        Route::Add('/catalogue/{type}', [$catalogue, 'liste']);
    }
}


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médiathèque</title>

    <!-- Javascript -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/public/style/main.css">
    <script src="/public/js/sweetalert2.all.min.js"></script>
    <script src="/public/js/vue.global.prod.js"></script>
    <script src="/public/js/masqueTel.js"></script>

    <!-- Accès css bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- fin accès css Bootstrap -->

</head>

<body class="bg-[#F2F4F7]">

<!-- En-tête -->
<header class="bg-white">
    
    <nav class="container mx-auto px-4 py-6 flex items-center justify-between">
        <span>
        <a href="/" class="text-2xl font-semibold text-gray-800">
            <img src="../../public/images/logo-book.png" width="90px" alt="">Médiathèque
        </a>
        </span>
        
        <ul class="space-x-4 flex">
            <li><a href="/catalogue/all" class="text-gray-600 hover:text-gray-800">Parcourir les ressources</a></li>
            <li><a href="/horaires" class="text-gray-600 hover:text-gray-800">Horaires</a></li>
            <li><a href="/about" class="text-gray-600 hover:text-gray-800">À propos</a></li>
            <li><a href="/contact" class="text-gray-600 hover:text-gray-800">Contact</a></li>
            <li>
                <!-- Example Code -->
    
                <button class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Mes informations </button>
                    
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header">
                            
                            <h5 class="offcanvas-title" id="offcanvasRightLabel">Mes Accès : </h5>
                            
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                        <?php
                                
                                if (\utils\SessionHelpers::isLogin()) { ?>
                                    <ul>
                                        
                                        <li><a href="/me" class="bg-indigo-600 text-white hover:bg-indigo-900 font-bold py-3 px-6 rounded-full">
                                                Mon compte
                                            </a>
                                        </li><br><br><br>
                                        <!-- <li>
                                            <a href="" class="bg-indigo-600 text-white hover:bg-indigo-900 font-bold py-3 px-6 rounded-full">Mes Emprunts</a>
                                        </li>
                                        <li> -->
                                            <div class="p-5 text-right">
                                                <a class="bg-red-600 text-white hover:bg-red-900 font-bold py-3 px-6 rounded-full" href="/logout">Déconnexion</a>
                                            </div>
                                        </li>
                                    </ul>
                                    
                                    
                            <?php } else { ?>
                                <a href="/login" class="bg-indigo-600 text-white hover:bg-indigo-900 font-bold py-3 px-6 rounded-full">
                                    Se connecter
                                </a>
                            
                            <?php } ?>
                        </div>
                    </div>
                    
                    
                    <!-- End Example Code -->
                
            </li>
        </ul>
    </nav>
</header>
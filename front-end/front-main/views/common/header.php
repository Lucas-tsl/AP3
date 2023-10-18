<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médiathèque</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/public/style/main.css">
    <script src="/public/js/sweetalert2.all.min.js"></script>
    <script src="/public/js/vue.global.prod.js"></script>
</head>

<body class="bg-[#F2F4F7]">

<!-- En-tête -->
<header class="bg-white">
    <nav class="container mx-auto px-4 py-6 flex items-center justify-between">
        <a href="/" class="text-2xl font-semibold text-gray-800">Médiathèque</a>
        <ul class="space-x-4 flex">
            <li><a href="/catalogue/all" class="text-gray-600 hover:text-gray-800">Parcourir les ressources</a></li>
            <li><a href="/horaires" class="text-gray-600 hover:text-gray-800">Horaires</a></li>
            <li>
                <?php if (\utils\SessionHelpers::isLogin()) { ?>
                    <a href="/me" class="bg-indigo-600 text-white hover:bg-indigo-900 font-bold py-3 px-6 rounded-full">
                        Mon compte
                    </a>
                <?php } else { ?>
                    <a href="/login" class="bg-indigo-600 text-white hover:bg-indigo-900 font-bold py-3 px-6 rounded-full">
                        Se connecter
                    </a>
                <?php } ?>
            </li>
        </ul>
    </nav>
</header>
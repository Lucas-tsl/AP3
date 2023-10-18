<div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-[calc(100vh-136px)] lg:py-0 container">

    <div class="flex flex-wrap">
        <!-- Colonne de gauche -->
        <div class="w-full md:w-1/2 px-4">
            <h1 class="text-3xl font-bold text-gray-900 mb-4">Créer un compte</h1>
            <p class="text-gray-600 mb-6">Remplissez les informations ci-dessous pour créer votre compte.</p>
            <ul class="list-disc mb-6 pl-6 space-y-2">
                <li>Emprunter des médias</li>
                <li>Accédez à votre historique</li>
                <li>Demander plus de temps avec votre médias</li>
                <li>Accédez à vos emprunts</li>
                <li>Voir vos points de fidélités</li>
            </ul>
        </div>

        <!-- Colonne de droite -->
        <div class="w-full md:w-1/2 px-4 mt-6 md:mt-0">
            <div class="bg-white shadow-lg rounded-lg px-6 py-4">

                <!-- Message d'erreur -->

                <?php if (isset($error)) { ?>
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                        <strong class="font-bold">Oups ! </strong>
                        <span class="block sm:inline"><?= $error ?></span>
                    </div>
                <?php } ?>

                <h2 class="text-xl font-semibold text-gray-800 mb-4">Informations personnelles</h2>

                <!-- Formulaire -->
                <form class="max-w-sm" method="post" action="/signup">
                    <div class="mb-4">
                        <label for="nom" class="block text-gray-800 font-semibold mb-2">Nom</label>
                        <input type="text" id="nom" name="nom"
                               class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div class="mb-4">
                        <label for="prenom" class="block text-gray-800 font-semibold mb-2">Prénom</label>
                        <input type="text" id="prenom" name="prenom"
                               class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-gray-800 font-semibold mb-2">Email</label>
                        <input type="email" id="email" name="email"
                               class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div class="mb-4">
                        <label for="password" class="block text-gray-800 font-semibold mb-2">Mot de passe</label>
                        <input type="password" id="password" name="password"
                               class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div class="text-center">
                        <button type="submit"
                                class="bg-indigo-600 text-white hover:bg-indigo-900 font-bold py-3 px-6 rounded-full">
                            Créer un compte
                        </button>
                        <hr class="m-5">
                        <p class="text-sm font-light text-gray-500">
                            Vous avez déjà un compte ?
                            <a href="/login"
                               class="font-medium text-primary-600 hover:underline">
                                Connectez-vous
                            </a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
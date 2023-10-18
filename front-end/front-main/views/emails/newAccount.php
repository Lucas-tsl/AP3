<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Votre nouveau compte</title>
</head>
<body>
    <h1>Bienvenue sur le site de la mediathèque</h1>
    <p>
        Votre compte a bien été créé. Voici vos identifiants de connexion :
    </p>
    <ul>
        <li><strong>Identifiant : </strong> <?= $email ?></li>
        <li><strong>Mot de passe : </strong> <?= $password ?></li>
    </ul>

    <p>
        <a href="<?= $url ?>">Pour finaliser votre inscription, merci de cliquer sur le lien.</a>
    </p>

    <p>
        A bientôt sur notre site !
    </p>
</body>
</html>
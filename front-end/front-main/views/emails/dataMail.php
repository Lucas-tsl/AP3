
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        strong {
            font-weight: bold;
        }

        p {
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Confirmation d'emprunt</h1>
        <p>Merci d'avoir effectué un emprunt avec succès à la médiathèque. Voici les détails de votre emprunt :</p>
        
        <ul>
            <li><strong>Titre de la ressource :</strong></li>
            <li><strong>Date d'emprunt :</strong></li>
            <li><strong>Date d'échéance :</strong><?= $ressource->idRessource?> </li>
            <li><strong>Informations de contact de la médiathèque :</strong> </li>
        </ul>
        
        <p>Si vous avez des questions ou avez besoin d'assistance, n'hésitez pas à nous contacter.</p>
        
        <p>Merci de faire confiance à notre médiathèque !</p>
    </div>

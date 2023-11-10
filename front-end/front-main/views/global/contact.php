<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliothèque XYZ</title>
    <!-- Remplacez 'VOTRE_CLE_API' par votre clé API Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=VOTRE_CLE_API"></script>
    <style>
        /* Style pour définir la taille de la carte */
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
</head>
<body>
    <h1>Bibliothèque XYZ</h1>

    <!-- Informations de contact -->
    <h2>Contact</h2>
    <p>Adresse : 123 Rue de la Bibliothèque, Ville</p>
    <p>Téléphone : +1 234-567-8901</p>
    <p>Email : contact@bibliothequexyz.com</p>

    <!-- Carte Google Maps -->
    <h2>Emplacement</h2>
    <div id="map"></div>

    <script>
        // Fonction pour initialiser la carte
        function initMap() {
            // Coordonnées GPS de la bibliothèque (remplacez par les coordonnées de votre bibliothèque)
            var bibliothèqueLatLng = {lat: 48.8588443, lng: 2.2943506};
            
            // Création de la carte
            var map = new google.maps.Map(document.getElementById('map'), {
                center: bibliothèqueLatLng,
                zoom: 15 // Zoom par défaut
            });
            
            // Marqueur pour la bibliothèque
            var marker = new google.maps.Marker({
                position: bibliothèqueLatLng,
                map: map,
                title: 'Bibliothèque XYZ'
            });
        }
        
        // Appel de la fonction d'initialisation de la carte lorsque la page est chargée
        google.maps.event.addDomListener(window, 'load', initMap);
    </script>
</body>
</html>

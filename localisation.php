<?php
// localisation.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>StudentFest 2024 - Localisation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.min.js"></script>
    <script>
        // Script JavaScript pour intégrer une carte (exemple avec Google Maps)
        function initMap() {
            var festivalLocation = {lat: 45.123456, lng: 1.234567}; // Remplacez par les coordonnées réelles
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12,
                center: festivalLocation
            });
            var marker = new google.maps.Marker({
                position: festivalLocation,
                map: map,
                title: 'StudentFest 2024'
            });
        }

        document.addEventListener('DOMContentLoaded', () => {
            console.log('Page de localisation chargée.');
        });
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
    </script>
</head>
<body>
    <header class="bg-dark text-white text-center py-3">
        <h1>StudentFest 2024</h1>
        <nav>
            <ul class="nav justify-content-center">
                <li class="nav-item"><a class="nav-link text-white" href="index.php">Accueil</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="organisateurs.php">Organisateurs</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="valeurs.php">Nos Valeurs</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="identité_visuelle.php">Identité Visuelle</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="programmation.php">Programmation</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="village_partners.php">Le Village</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="infos_hebergement.php">Infos Pratiques</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="billetterie.php">Billetterie</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="avis.php">Avis</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="phototheque.php">Photothèque</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="reseaux_sociaux.php">Réseaux Sociaux</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="newsletter.php">Newsletter</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="localisation.php">Localisation</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="multilingue.php">Multilingue</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="mentions_legales.php">Mentions Légales</a></li>
            </ul>
        </nav>
    </header>

    <main class="container my-4">
        <section id="localisation">
            <h2>Localisation du Festival</h2>
            <p>Le StudentFest se déroule dans le magnifique Périgord, offrant un cadre idéal pour profiter de la musique et des activités proposées.</p>
            <div id="map" class="border"></div>
        </section>
    </main>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 StudentFest. Tous droits réservés.</p>
    </footer>
</body>
</html>

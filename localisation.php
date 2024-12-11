<?php
// localisation.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>StudentFest 2024 - Localisation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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

</head>
<body>
    <?php include 'header.html'; ?>

    <main class="container my-4">
        <section id="localisation">
            <h2>Localisation du Festival</h2>
            <p>Le StudentFest se déroule dans le magnifique Périgord, offrant un cadre idéal pour profiter de la musique et des activités proposées.</p>
            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1uSI33E17fxjHmSAoGGZd-2D2uFiGbYo&ehbc=2E312F" width="1200" height="480"></iframe>
        </section>
    </main>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 StudentFest. Tous droits réservés.</p>
    </footer>
</body>
</html>

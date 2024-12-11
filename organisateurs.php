<?php
// organisateurs.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>StudentFest 2024 - Organisateurs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Script JavaScript de base
        document.addEventListener('DOMContentLoaded', () => {
            console.log('Page des organisateurs chargée.');
        });
    </script>
</head>
<body>
    <?php include 'header.html'; ?>

    <main class="container my-4">
        <section id="organisateurs">
            <h2>Nos Organisateurs</h2>
            <p>Le StudentFest est organisé par une équipe passionnée d'étudiants du Périgord, en collaboration avec divers partenaires locaux.</p>
            <h3>Équipe</h3>
            <ul class="list-group">
                <li class="list-group-item"><strong>Jean Dupont</strong> - Président</li>
                <li class="list-group-item"><strong>Marie Martin</strong> - Responsable Communication</li>
                <li class="list-group-item"><strong>Lucie Durand</strong> - Coordinatrice Logistique</li>
                <li class="list-group-item"><strong>Thomas Bernard</strong> - Responsable Technique</li>
                <li class="list-group-item"><strong>Camille Leroy</strong> - Responsable Relations Partenaires</li>
                <!-- Ajoutez d'autres membres de l'équipe si nécessaire -->
            </ul>
        </section>
    </main>

    <?php include 'footer.html'; ?>

</body>
</html>

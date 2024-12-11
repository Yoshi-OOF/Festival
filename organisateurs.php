<?php
// organisateurs.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>StudentFest 2024 - Organisateurs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Script JavaScript de base
        document.addEventListener('DOMContentLoaded', () => {
            console.log('Page des organisateurs chargée.');
        });
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
                <!-- <li class="nav-item"><a class="nav-link text-white" href="identité_visuelle.php">Identité Visuelle</a></li> -->
                <li class="nav-item"><a class="nav-link text-white" href="programmation.php">Programmation</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="billetterie.php">Billetterie</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="localisation.php">Localisation</a></li>
            </ul>
        </nav>
    </header>

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

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 StudentFest. Tous droits réservés.</p>
    </footer>
</body>
</html>

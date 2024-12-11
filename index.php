<?php
// index.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>StudentFest 2024 - Accueil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Script JavaScript de base
        document.addEventListener('DOMContentLoaded', () => {
            console.log('Site StudentFest prêt.');
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
        <section id="presentation" class="mb-4">
            <h2>Bienvenue au StudentFest 2024</h2>
            <p>Le festival de musique étudiant le plus attendu du Périgord ! Découvrez les lieux, les scènes et une programmation exceptionnelle sur 3 jours.</p>
        </section>

        <section id="synthese_programmation" class="mb-4">
            <h3>Programmation en Bref</h3>
            <p>Profitez de concerts variés avec des artistes locaux et internationaux répartis sur 4 scènes thématiques.</p>
        </section>

        <section id="accessibilite" class="mb-4">
            <h3>Accessibilité</h3>
            <p>Accès facile en transport collectif, hébergement disponible, restauration variée et plus encore.</p>
        </section>
    </main>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 StudentFest. Tous droits réservés.</p>
    </footer>
</body>
</html>

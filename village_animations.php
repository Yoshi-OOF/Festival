<?php
// village_animations.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>StudentFest 2024 - Animations en Journée</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.min.js"></script>
    <script>
        // Script JavaScript de base
        document.addEventListener('DOMContentLoaded', () => {
            console.log('Page des animations chargée.');
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
        <section id="animations">
            <h2>Les Animations en Journée</h2>

            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card mb-4">
                        <img src="animation1.jpg" class="card-img-top" alt="Animation 1">
                        <div class="card-body">
                            <h3 class="card-title">Atelier de Danse</h3>
                            <p class="card-text">Participez à nos ateliers de danse animés par des professionnels et découvrez de nouveaux styles.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card mb-4">
                        <img src="animation2.jpg" class="card-img-top" alt="Animation 2">
                        <div class="card-body">
                            <h3 class="card-title">Zone de Jeux</h3>
                            <p class="card-text">Une zone dédiée aux jeux pour petits et grands, avec des jeux interactifs et des compétitions amicales.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card mb-4">
                        <img src="animation3.jpg" class="card-img-top" alt="Animation 3">
                        <div class="card-body">
                            <h3 class="card-title">Atelier de Création</h3>
                            <p class="card-text">Exprimez votre créativité lors de nos ateliers de peinture, de sculpture et d'artisanat.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card mb-4">
                        <img src="animation4.jpg" class="card-img-top" alt="Animation 4">
                        <div class="card-body">
                            <h3 class="card-title">Concours de Déguisements</h3>
                            <p class="card-text">Venez déguisés et participez à notre concours pour gagner de superbes prix.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 StudentFest. Tous droits réservés.</p>
    </footer>
</body>
</html>

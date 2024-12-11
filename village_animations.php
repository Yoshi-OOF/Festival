<?php
// village_animations.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>StudentFest 2024 - Animations en Journée</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Styles CSS pour la page des animations */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 10px 0 0 0;
        }

        nav li {
            display: inline-block;
            margin: 0 15px;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        main {
            padding: 20px;
        }

        section {
            margin-bottom: 40px;
        }

        .animation {
            border: 1px solid #ccc;
            padding: 15px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        .animation img {
            max-width: 150px;
            margin-right: 20px;
        }

        .animation-details {
            flex: 1;
        }

        .animation-details h3 {
            margin-top: 0;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        /* Responsive */
        @media (max-width: 768px) {
            nav li {
                display: block;
                margin: 10px 0;
            }

            .animation {
                flex-direction: column;
                align-items: flex-start;
            }

            .animation img {
                margin-bottom: 10px;
                margin-right: 0;
            }
        }
    </style>
    <script>
        // Script JavaScript de base
        document.addEventListener('DOMContentLoaded', () => {
            console.log('Page des animations chargée.');
        });
    </script>
</head>
<body>
    <header>
        <h1>StudentFest 2024</h1>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="organisateurs.php">Organisateurs</a></li>
                <li><a href="valeurs.php">Nos Valeurs</a></li>
                <li><a href="identité_visuelle.php">Identité Visuelle</a></li>
                <li><a href="programmation.php">Programmation</a></li>
                <li><a href="village_partners.php">Le Village</a></li>
                <li><a href="infos_hebergement.php">Infos Pratiques</a></li>
                <li><a href="billetterie.php">Billetterie</a></li>
                <li><a href="avis.php">Avis</a></li>
                <li><a href="phototheque.php">Photothèque</a></li>
                <li><a href="reseaux_sociaux.php">Réseaux Sociaux</a></li>
                <li><a href="newsletter.php">Newsletter</a></li>
                <li><a href="localisation.php">Localisation</a></li>
                <li><a href="multilingue.php">Multilingue</a></li>
                <li><a href="mentions_legales.php">Mentions Légales</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="animations">
            <h2>Les Animations en Journée</h2>

            <div class="animation">
                <img src="animation1.jpg" alt="Animation 1">
                <div class="animation-details">
                    <h3>Atelier de Danse</h3>
                    <p>Participez à nos ateliers de danse animés par des professionnels et découvrez de nouveaux styles.</p>
                </div>
            </div>

            <div class="animation">
                <img src="animation2.jpg" alt="Animation 2">
                <div class="animation-details">
                    <h3>Zone de Jeux</h3>
                    <p>Une zone dédiée aux jeux pour petits et grands, avec des jeux interactifs et des compétitions amicales.</p>
                </div>
            </div>

            <div class="animation">
                <img src="animation3.jpg" alt="Animation 3">
                <div class="animation-details">
                    <h3>Atelier de Création</h3>
                    <p>Exprimez votre créativité lors de nos ateliers de peinture, de sculpture et d'artisanat.</p>
                </div>
            </div>

            <div class="animation">
                <img src="animation4.jpg" alt="Animation 4">
                <div class="animation-details">
                    <h3>Concours de Déguisements</h3>
                    <p>Venez déguisés et participez à notre concours pour gagner de superbes prix.</p>
                </div>
            </div>

            <!-- Ajoutez d'autres animations selon vos besoins -->
        </section>
    </main>

    <footer>
        <p>&copy; 2024 StudentFest. Tous droits réservés.</p>
    </footer>
</body>
</html>

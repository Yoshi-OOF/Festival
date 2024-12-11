<?php
// reseaux_sociaux.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>StudentFest 2024 - Réseaux Sociaux</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Styles CSS pour la page des réseaux sociaux */
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
            text-align: center;
        }

        section {
            margin-bottom: 40px;
        }

        .social-icon {
            display: inline-block;
            margin: 0 10px;
            text-decoration: none;
            color: #333;
        }

        .social-icon img {
            width: 50px;
            height: 50px;
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

            .social-icon img {
                width: 40px;
                height: 40px;
            }
        }
    </style>
    <script>
        // Script JavaScript de base
        document.addEventListener('DOMContentLoaded', () => {
            console.log('Page des réseaux sociaux chargée.');
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
        <section id="reseaux">
            <h2>Suivez-nous sur les Réseaux Sociaux</h2>
            <p>Restez informés des dernières actualités, annonces et coulisses du festival en nous suivant sur les réseaux sociaux.</p>
            <a href="https://www.facebook.com/studentfest" class="social-icon" target="_blank">
                <img src="facebook_icon.png" alt="Facebook">
            </a>
            <a href="https://www.twitter.com/studentfest" class="social-icon" target="_blank">
                <img src="twitter_icon.png" alt="Twitter">
            </a>
            <a href="https://www.instagram.com/studentfest" class="social-icon" target="_blank">
                <img src="instagram_icon.png" alt="Instagram">
            </a>
            <a href="https://www.youtube.com/studentfest" class="social-icon" target="_blank">
                <img src="youtube_icon.png" alt="YouTube">
            </a>
            <!-- Ajoutez d'autres réseaux sociaux si nécessaire -->
        </section>
    </main>

    <footer>
        <p>&copy; 2024 StudentFest. Tous droits réservés.</p>
    </footer>
</body>
</html>

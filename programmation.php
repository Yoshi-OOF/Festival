<?php
// programmation.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>StudentFest 2024 - Programmation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Styles CSS pour la page de programmation */
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

        .scene {
            border: 1px solid #ccc;
            padding: 15px;
            margin-bottom: 20px;
        }

        .scene h3 {
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
        }
    </style>
    <script>
        // Script JavaScript de base
        document.addEventListener('DOMContentLoaded', () => {
            console.log('Page de programmation chargée.');
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
        <section id="scenes">
            <h2>Présentation des 4 Scènes et leurs Thématiques</h2>

            <div class="scene">
                <h3>Scène Principale</h3>
                <p>La scène principale accueille les têtes d'affiche du festival avec des artistes internationaux et des groupes renommés.</p>
            </div>

            <div class="scene">
                <h3>Scène Acoustique</h3>
                <p>Un espace dédié aux performances acoustiques et aux artistes émergents, offrant une ambiance intimiste.</p>
            </div>

            <div class="scene">
                <h3>Scène Électronique</h3>
                <p>Pour les amateurs de musique électronique, avec des DJs et des performances visuelles impressionnantes.</p>
            </div>

            <div class="scene">
                <h3>Scène Alternative</h3>
                <p>Un espace pour les genres alternatifs, incluant rock, indie et autres styles innovants.</p>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 StudentFest. Tous droits réservés.</p>
    </footer>
</body>
</html>

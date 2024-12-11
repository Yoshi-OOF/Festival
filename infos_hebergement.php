<?php
// infos_hebergement.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>StudentFest 2024 - Hébergement</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Styles CSS pour la page d'hébergement */
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

        .hebergement-option {
            border: 1px solid #ccc;
            padding: 15px;
            margin-bottom: 20px;
        }

        .hebergement-option h3 {
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
            console.log('Page d\'hébergement chargée.');
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
        <section id="hebergement">
            <h2>Hébergement</h2>

            <div class="hebergement-option">
                <h3>Hébergement Spectateurs</h3>
                <p>Nous avons sélectionné plusieurs hôtels et auberges de jeunesse à proximité du festival pour vous loger confortablement. Réservez tôt pour garantir votre place !</p>
                <ul>
                    <li><strong>Hôtel A</strong> - 100 km du festival</li>
                    <li><strong>Auberge de Jeunesse B</strong> - 120 km du festival</li>
                    <li><strong>Hôtel C</strong> - 90 km du festival</li>
                </ul>
            </div>

            <div class="hebergement-option">
                <h3>Hébergement VIP</h3>
                <p>Pour une expérience exclusive, optez pour notre hébergement VIP incluant des services premium, des zones réservées et des cadeaux spéciaux.</p>
                <ul>
                    <li><strong>Suite VIP 1</strong> - Inclus dîner et accès prioritaire aux scènes</li>
                    <li><strong>Suite VIP 2</strong> - Inclus dîner, accès prioritaire et rencontres avec les artistes</li>
                </ul>
            </div>

            <div class="hebergement-option">
                <h3>Camping</h3>
                <p>Profitez de notre zone de camping aménagée avec toutes les commodités nécessaires. Idéal pour une expérience proche de la nature.</p>
                <ul>
                    <li><strong>Emplacement Standard</strong> - Espace pour tente ou camping-car</li>
                    <li><strong>Emplacement Premium</strong> - Espace avec électricité et eau potable</li>
                </ul>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 StudentFest. Tous droits réservés.</p>
    </footer>
</body>
</html>

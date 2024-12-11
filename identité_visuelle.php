<?php
// identité_visuelle.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>StudentFest 2024 - Identité Visuelle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Styles CSS pour la page d'identité visuelle */
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

        .logo {
            max-width: 200px;
            margin-bottom: 20px;
        }

        .palette {
            display: flex;
            flex-wrap: wrap;
        }

        .color {
            width: 100px;
            height: 100px;
            margin: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
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

            .palette {
                justify-content: center;
            }
        }
    </style>
    <script>
        // Script JavaScript de base
        document.addEventListener('DOMContentLoaded', () => {
            console.log('Page d\'identité visuelle chargée.');
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
        <section id="logo">
            <h2>Notre Logo</h2>
            <img src="logo_studentfest.png" alt="Logo StudentFest" class="logo">
            <p>Le logo du StudentFest représente l'énergie et la diversité musicale du festival. Il est conçu pour être reconnaissable et refléter les valeurs du festival.</p>
        </section>

        <section id="palette_couleurs">
            <h2>Palette de Couleurs</h2>
            <div class="palette">
                <div class="color" style="background-color: #FF5733;">#FF5733</div>
                <div class="color" style="background-color: #33FF57;">#33FF57</div>
                <div class="color" style="background-color: #3357FF;">#3357FF</div>
                <div class="color" style="background-color: #F1C40F;">#F1C40F</div>
            </div>
            <p>Notre palette de couleurs est vibrante et dynamique, reflétant l'ambiance festive et énergique du festival.</p>
        </section>

        <section id="typographie">
            <h2>Typographie</h2>
            <p>Nous utilisons deux polices principales :</p>
            <ul>
                <li><strong>Titre :</strong> "Montserrat", sans-serif.</li>
                <li><strong>Corps de texte :</strong> "Open Sans", sans-serif.</li>
            </ul>
            <p>Ces polices assurent une lecture claire et une esthétique moderne.</p>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 StudentFest. Tous droits réservés.</p>
    </footer>
</body>
</html>

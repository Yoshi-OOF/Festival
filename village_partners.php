<?php
// village_partners.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>StudentFest 2024 - Les Stands des Partenaires</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Styles CSS pour la page des stands des partenaires */
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

        .partner {
            border: 1px solid #ccc;
            padding: 15px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        .partner img {
            max-width: 150px;
            margin-right: 20px;
        }

        .partner-details {
            flex: 1;
        }

        .partner-details h3 {
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

            .partner {
                flex-direction: column;
                align-items: flex-start;
            }

            .partner img {
                margin-bottom: 10px;
                margin-right: 0;
            }
        }
    </style>
    <script>
        // Script JavaScript de base
        document.addEventListener('DOMContentLoaded', () => {
            console.log('Page des stands des partenaires chargée.');
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
        <section id="partenaires">
            <h2>Les Stands des Partenaires</h2>

            <div class="partner">
                <img src="partner1_logo.png" alt="Partenaire 1">
                <div class="partner-details">
                    <h3>Partenaire 1</h3>
                    <p>Description du partenaire 1. Ce partenaire offre des services/produits en lien avec le festival.</p>
                </div>
            </div>

            <div class="partner">
                <img src="partner2_logo.png" alt="Partenaire 2">
                <div class="partner-details">
                    <h3>Partenaire 2</h3>
                    <p>Description du partenaire 2. Ce partenaire contribue au succès du festival par son soutien.</p>
                </div>
            </div>

            <div class="partner">
                <img src="partner3_logo.png" alt="Partenaire 3">
                <div class="partner-details">
                    <h3>Partenaire 3</h3>
                    <p>Description du partenaire 3. Ce partenaire propose des animations et des activités sur le village.</p>
                </div>
            </div>

            <!-- Ajoutez d'autres partenaires selon vos besoins -->
        </section>
    </main>

    <footer>
        <p>&copy; 2024 StudentFest. Tous droits réservés.</p>
    </footer>
</body>
</html>

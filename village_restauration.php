<?php
// village_restauration.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>StudentFest 2024 - Restauration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Styles CSS pour la page de restauration */
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

        .food-stand {
            border: 1px solid #ccc;
            padding: 15px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        .food-stand img {
            max-width: 150px;
            margin-right: 20px;
        }

        .food-stand-details {
            flex: 1;
        }

        .food-stand-details h3 {
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

            .food-stand {
                flex-direction: column;
                align-items: flex-start;
            }

            .food-stand img {
                margin-bottom: 10px;
                margin-right: 0;
            }
        }
    </style>
    <script>
        // Script JavaScript de base
        document.addEventListener('DOMContentLoaded', () => {
            console.log('Page de restauration chargée.');
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
        <section id="restauration">
            <h2>La Restauration</h2>

            <div class="food-stand">
                <img src="food1.jpg" alt="Food Stand 1">
                <div class="food-stand-details">
                    <h3>Stand de Burgers</h3>
                    <p>Découvrez nos délicieux burgers faits avec des ingrédients locaux et bio.</p>
                </div>
            </div>

            <div class="food-stand">
                <img src="food2.jpg" alt="Food Stand 2">
                <div class="food-stand-details">
                    <h3>Stand Végétarien</h3>
                    <p>Options végétariennes variées pour tous les goûts, incluant des salades et des wraps.</p>
                </div>
            </div>

            <div class="food-stand">
                <img src="food3.jpg" alt="Food Stand 3">
                <div class="food-stand-details">
                    <h3>Stand de Desserts</h3>
                    <p>Gâtez-vous avec nos sucreries artisanales, glaces et autres délices.</p>
                </div>
            </div>

            <div class="food-stand">
                <img src="food4.jpg" alt="Food Stand 4">
                <div class="food-stand-details">
                    <h3>Stand de Boissons</h3>
                    <p>Large choix de boissons rafraîchissantes, cocktails et jus naturels.</p>
                </div>
            </div>

            <!-- Ajoutez d'autres stands de restauration selon vos besoins -->
        </section>
    </main>

    <footer>
        <p>&copy; 2024 StudentFest. Tous droits réservés.</p>
    </footer>
</body>
</html>

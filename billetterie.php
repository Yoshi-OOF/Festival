<?php
// billetterie.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>StudentFest 2024 - Billetterie</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Styles CSS pour la page de billetterie */
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

        .ticket-option {
            border: 1px solid #ccc;
            padding: 15px;
            margin-bottom: 20px;
        }

        .ticket-option h3 {
            margin-top: 0;
        }

        .ticket-option ul {
            list-style-type: none;
            padding: 0;
        }

        .ticket-option li {
            margin-bottom: 10px;
        }

        .buy-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #FF5733;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .buy-button:hover {
            background-color: #C70039;
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
            console.log('Page de billetterie chargée.');
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
        <section id="billetterie">
            <h2>Billetterie</h2>

            <div class="ticket-option">
                <h3>Billet Journée</h3>
                <p>Accès à toutes les scènes pour une journée.</p>
                <ul>
                    <li><strong>Vendredi</strong> - 30€</li>
                    <li><strong>Samedi</strong> - 35€</li>
                    <li><strong>Dimanche</strong> - 25€</li>
                </ul>
                <a href="#" class="buy-button">Acheter Maintenant</a>
            </div>

            <div class="ticket-option">
                <h3>Forfait 2 Jours</h3>
                <p>Accès à toutes les scènes pendant deux jours consécutifs.</p>
                <ul>
                    <li><strong>Vendredi et Samedi</strong> - 60€</li>
                    <li><strong>Samedi et Dimanche</strong> - 55€</li>
                </ul>
                <a href="#" class="buy-button">Acheter Maintenant</a>
            </div>

            <div class="ticket-option">
                <h3>Forfait 3 Jours</h3>
                <p>Accès complet à toutes les scènes pendant les trois jours du festival.</p>
                <ul>
                    <li><strong>Vendredi, Samedi et Dimanche</strong> - 80€</li>
                </ul>
                <a href="#" class="buy-button">Acheter Maintenant</a>
            </div>

            <div class="ticket-option">
                <h3>Billet VIP</h3>
                <p>Accès privilégié avec des avantages exclusifs.</p>
                <ul>
                    <li><strong>Prix</strong> - 150€</li>
                    <li>Accès prioritaire aux scènes</li>
                    <li>Zone VIP réservée</li>
                    <li>Cadeaux exclusifs</li>
                </ul>
                <a href="#" class="buy-button">Acheter Maintenant</a>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 StudentFest. Tous droits réservés.</p>
    </footer>
</body>
</html>

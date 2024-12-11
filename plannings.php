<?php
// plannings.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>StudentFest 2024 - Plannings Détaillés</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Styles CSS pour la page des plannings détaillés */
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
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

            table, th, td {
                font-size: 14px;
            }
        }
    </style>
    <script>
        // Script JavaScript de base
        document.addEventListener('DOMContentLoaded', () => {
            console.log('Page des plannings détaillés chargée.');
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
        <section id="plannings">
            <h2>Plannings Détaillés</h2>
            <h3>Jour 1 - Vendredi</h3>
            <table>
                <tr>
                    <th>Heure</th>
                    <th>Scène</th>
                    <th>Artiste</th>
                    <th>Genre</th>
                </tr>
                <tr>
                    <td>18:00</td>
                    <td>Scène Principale</td>
                    <td>Artiste A</td>
                    <td>Rock</td>
                </tr>
                <tr>
                    <td>20:00</td>
                    <td>Scène Acoustique</td>
                    <td>Artiste B</td>
                    <td>Acoustic</td>
                </tr>
                <!-- Ajoutez d'autres événements -->
            </table>

            <h3>Jour 2 - Samedi</h3>
            <table>
                <tr>
                    <th>Heure</th>
                    <th>Scène</th>
                    <th>Artiste</th>
                    <th>Genre</th>
                </tr>
                <tr>
                    <td>16:00</td>
                    <td>Scène Électronique</td>
                    <td>DJ C</td>
                    <td>EDM</td>
                </tr>
                <tr>
                    <td>19:00</td>
                    <td>Scène Alternative</td>
                    <td>Artiste D</td>
                    <td>Indie</td>
                </tr>
                <!-- Ajoutez d'autres événements -->
            </table>

            <h3>Jour 3 - Dimanche</h3>
            <table>
                <tr>
                    <th>Heure</th>
                    <th>Scène</th>
                    <th>Artiste</th>
                    <th>Genre</th>
                </tr>
                <tr>
                    <td>14:00</td>
                    <td>Scène Acoustique</td>
                    <td>Artiste E</td>
                    <td>Folk</td>
                </tr>
                <tr>
                    <td>17:00</td>
                    <td>Scène Principale</td>
                    <td>Artiste F</td>
                    <td>Pop</td>
                </tr>
                <!-- Ajoutez d'autres événements -->
            </table>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 StudentFest. Tous droits réservés.</p>
    </footer>
</body>
</html>

<?php
// artistes.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>StudentFest 2024 - Artistes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Styles CSS pour la page des artistes */
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

        .artiste {
            border: 1px solid #ccc;
            padding: 15px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        .artiste img {
            max-width: 150px;
            margin-right: 20px;
        }

        .artiste-details {
            flex: 1;
        }

        .artiste-details h3 {
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

            .artiste {
                flex-direction: column;
                align-items: flex-start;
            }

            .artiste img {
                margin-bottom: 10px;
                margin-right: 0;
            }
        }
    </style>
    <script>
        // Script JavaScript de base
        document.addEventListener('DOMContentLoaded', () => {
            console.log('Page des artistes chargée.');
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
        <section id="artistes">
            <h2>Présentation des Artistes</h2>

            <div class="artiste">
                <img src="artiste_a.jpg" alt="Artiste A">
                <div class="artiste-details">
                    <h3>Artiste A</h3>
                    <p>Genre : Rock</p>
                    <p>Artiste international reconnu, Artiste A apporte une énergie incroyable sur scène.</p>
                </div>
            </div>

            <div class="artiste">
                <img src="artiste_b.jpg" alt="Artiste B">
                <div class="artiste-details">
                    <h3>Artiste B</h3>
                    <p>Genre : Acoustique</p>
                    <p>Artiste B est un talent émergent dans la scène acoustique, offrant des performances intimes.</p>
                </div>
            </div>

            <div class="artiste">
                <img src="artiste_c.jpg" alt="Artiste C">
                <div class="artiste-details">
                    <h3>Artiste C</h3>
                    <p>Genre : Alternative</p>
                    <p>Avec un style unique, Artiste C fusionne différents genres pour créer une expérience musicale innovante.</p>
                </div>
            </div>

            <div class="artiste">
                <img src="artiste_d.jpg" alt="Artiste D">
                <div class="artiste-details">
                    <h3>Artiste D</h3>
                    <p>Genre : Indie</p>
                    <p>Artiste D est connu pour ses compositions mélodiques et ses performances captivantes.</p>
                </div>
            </div>

            <!-- Ajoutez d'autres artistes selon vos besoins -->
        </section>
    </main>

    <footer>
        <p>&copy; 2024 StudentFest. Tous droits réservés.</p>
    </footer>
</body>
</html>

<?php
// infos_transport.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>StudentFest 2024 - Transport Collectif</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Styles CSS pour la page de transport collectif */
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

        .transport-option {
            border: 1px solid #ccc;
            padding: 15px;
            margin-bottom: 20px;
        }

        .transport-option h3 {
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
            console.log('Page de transport collectif chargée.');
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
        <section id="transport">
            <h2>Transport Collectif</h2>

            <div class="transport-option">
                <h3>Navettes Festival</h3>
                <p>Des navettes gratuites sont mises à disposition depuis les principales gares et points stratégiques de la région pour faciliter votre arrivée au festival.</p>
                <ul>
                    <li><strong>Départ :</strong> Gare de Périgord</li>
                    <li><strong>Fréquence :</strong> Toutes les 30 minutes</li>
                    <li><strong>Heures :</strong> 10:00 - 23:00</li>
                </ul>
            </div>

            <div class="transport-option">
                <h3>Bus Régional</h3>
                <p>Les bus régionaux assurent des liaisons vers le site du festival depuis les principales villes du Périgord.</p>
                <ul>
                    <li><strong>Lignes Disponibles :</strong> Lignes A, B, C</li>
                    <li><strong>Billets :</strong> Disponibles en ligne et à bord</li>
                    <li><strong>Horaires :</strong> Consultez le site des transports locaux</li>
                </ul>
            </div>

            <div class="transport-option">
                <h3>Location de Vélos</h3>
                <p>Profitez de la location de vélos pour vous déplacer facilement dans le village du festival. Des vélos sont disponibles à tarif réduit pour les participants.</p>
                <ul>
                    <li><strong>Emplacement :</strong> Stand de location près de l'entrée principale</li>
                    <li><strong>Tarifs :</strong> 5€ par jour</li>
                </ul>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 StudentFest. Tous droits réservés.</p>
    </footer>
</body>
</html>

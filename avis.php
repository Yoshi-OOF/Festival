<?php
// avis.php

// Chemin vers le fichier où les avis seront stockés
$avis_file = 'avis.txt';

// Traitement du formulaire
$message = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars(trim($_POST['nom']));
    $commentaire = htmlspecialchars(trim($_POST['commentaire']));

    if (!empty($nom) && !empty($commentaire)) {
        $avis = $nom . " | " . date("d/m/Y H:i") . " | " . $commentaire . "\n";
        file_put_contents($avis_file, $avis, FILE_APPEND);
        $message = "Votre avis a été soumis avec succès.";
    } else {
        $message = "Veuillez remplir tous les champs.";
    }
}

// Lecture des avis
$avis_list = [];
if (file_exists($avis_file)) {
    $avis_content = file($avis_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($avis_content as $line) {
        list($nom, $date, $commentaire) = explode(" | ", $line);
        $avis_list[] = ['nom' => $nom, 'date' => $date, 'commentaire' => $commentaire];
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>StudentFest 2024 - Avis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Styles CSS pour la page des avis */
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

        form {
            border: 1px solid #ccc;
            padding: 15px;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"], textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #FF5733;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #C70039;
        }

        .message {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid green;
            background-color: #D4EDDA;
            color: #155724;
            border-radius: 4px;
        }

        .avis-list {
            list-style-type: none;
            padding: 0;
        }

        .avis-list li {
            border-bottom: 1px solid #ccc;
            padding: 10px 0;
        }

        .avis-list li:last-child {
            border-bottom: none;
        }

        .avis-nom {
            font-weight: bold;
        }

        .avis-date {
            font-size: 0.9em;
            color: #555;
        }

        .avis-commentaire {
            margin-top: 5px;
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
            console.log('Page des avis chargée.');
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
        <section id="avis_form">
            <h2>Laissez Votre Avis</h2>
            <?php if (!empty($message)): ?>
                <div class="message"><?php echo $message; ?></div>
            <?php endif; ?>
            <form method="POST" action="avis.php">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" required>

                <label for="commentaire">Commentaire :</label>
                <textarea id="commentaire" name="commentaire" rows="4" required></textarea>

                <input type="submit" value="Soumettre">
            </form>
        </section>

        <section id="avis_list">
            <h2>Avis Récents</h2>
            <?php if (!empty($avis_list)): ?>
                <ul class="avis-list">
                    <?php foreach ($avis_list as $avis): ?>
                        <li>
                            <span class="avis-nom"><?php echo $avis['nom']; ?></span>
                            <span class="avis-date">[<?php echo $avis['date']; ?>]</span>
                            <p class="avis-commentaire"><?php echo $avis['commentaire']; ?></p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p>Aucun avis pour le moment.</p>
            <?php endif; ?>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 StudentFest. Tous droits réservés.</p>
    </footer>
</body>
</html>

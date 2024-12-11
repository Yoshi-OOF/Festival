<?php
// plannings.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>StudentFest 2024 - Plannings Détaillés</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Script JavaScript de base
        document.addEventListener('DOMContentLoaded', () => {
            console.log('Page des plannings détaillés chargée.');
        });
    </script>
</head>
<body>
    <header class="bg-dark text-white text-center py-3">
        <h1>StudentFest 2024</h1>
        <nav>
            <ul class="nav justify-content-center">
            <li class="nav-item"><a class="nav-link text-white" href="index.php">Accueil</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="organisateurs.php">Organisateurs</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="valeurs.php">Nos Valeurs</a></li>
                <!-- <li class="nav-item"><a class="nav-link text-white" href="identité_visuelle.php">Identité Visuelle</a></li> -->
                <li class="nav-item"><a class="nav-link text-white" href="programmation.php">Programmation</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="billetterie.php">Billetterie</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="localisation.php">Localisation</a></li>
            </ul>
        </nav>
    </header>

    <main class="container my-4">
        <section id="plannings">
            <h2>Plannings Détaillés</h2>
            <h3>Jour 1 - Vendredi</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Heure</th>
                        <th>Scène</th>
                        <th>Artiste</th>
                        <th>Genre</th>
                    </tr>
                </thead>
                <tbody>
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
                </tbody>
            </table>

            <h3>Jour 2 - Samedi</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Heure</th>
                        <th>Scène</th>
                        <th>Artiste</th>
                        <th>Genre</th>
                    </tr>
                </thead>
                <tbody>
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
                </tbody>
            </table>

            <h3>Jour 3 - Dimanche</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Heure</th>
                        <th>Scène</th>
                        <th>Artiste</th>
                        <th>Genre</th>
                    </tr>
                </thead>
                <tbody>
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
                </tbody>
            </table>
        </section>
    </main>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 StudentFest. Tous droits réservés.</p>
    </footer>
</body>
</html>

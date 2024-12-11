<?php
// plannings.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>StudentFest 2024 - Plannings Détaillés</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Script JavaScript de base
        document.addEventListener('DOMContentLoaded', () => {
            console.log('Page des plannings détaillés chargée.');
        });
    </script>
</head>
<body>
<?php include 'header.html'; ?>

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

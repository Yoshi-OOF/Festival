<?php
// programmation.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>StudentFest 2024 - Programmation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Script JavaScript de base
        document.addEventListener('DOMContentLoaded', () => {
            console.log('Page de programmation chargée.');
        });
    </script>
</head>
<body>
<?php include 'header.html'; ?>

    <main class="container my-4">
        <section id="scenes">
            <h2>Présentation des 4 Scènes et leurs Thématiques</h2>

            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="scene">
                        <h3>Scène Principale</h3>
                        <p>La scène principale accueille les têtes d'affiche du festival avec des artistes internationaux et des groupes renommés.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="scene">
                        <h3>Scène Acoustique</h3>
                        <p>Un espace dédié aux performances acoustiques et aux artistes émergents, offrant une ambiance intimiste.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="scene">
                        <h3>Scène Électronique</h3>
                        <p>Pour les amateurs de musique électronique, avec des DJs et des performances visuelles impressionnantes.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="scene">
                        <h3>Scène Alternative</h3>
                        <p>Un espace pour les genres alternatifs, incluant rock, indie et autres styles innovants.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 StudentFest. Tous droits réservés.</p>
    </footer>
</body>
</html>

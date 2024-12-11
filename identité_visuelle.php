<?php
// identité_visuelle.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>StudentFest 2024 - Identité Visuelle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Script JavaScript de base
        document.addEventListener('DOMContentLoaded', () => {
            console.log('Page d\'identité visuelle chargée.');
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
        <section id="logo">
            <h2>Notre Logo</h2>
            <img src="logo_studentfest.png" alt="Logo StudentFest" class="img-fluid mb-3">
            <p>Le logo du StudentFest représente l'énergie et la diversité musicale du festival. Il est conçu pour être reconnaissable et refléter les valeurs du festival.</p>
        </section>

        <section id="palette_couleurs">
            <h2>Palette de Couleurs</h2>
            <div class="row">
                <div class="col-6 col-md-3">
                    <div class="color bg-danger text-white d-flex align-items-center justify-content-center">#FF5733</div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="color bg-success text-white d-flex align-items-center justify-content-center">#33FF57</div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="color bg-primary text-white d-flex align-items-center justify-content-center">#3357FF</div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="color bg-warning text-white d-flex align-items-center justify-content-center">#F1C40F</div>
                </div>
            </div>
            <p>Notre palette de couleurs est vibrante et dynamique, reflétant l'ambiance festive et énergique du festival.</p>
        </section>

        <section id="typographie">
            <h2>Typographie</h2>
            <p>Nous utilisons deux polices principales :</p>
            <ul class="list-unstyled">
                <li><strong>Titre :</strong> "Montserrat", sans-serif.</li>
                <li><strong>Corps de texte :</strong> "Open Sans", sans-serif.</li>
            </ul>
            <p>Ces polices assurent une lecture claire et une esthétique moderne.</p>
        </section>
    </main>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 StudentFest. Tous droits réservés.</p>
    </footer>
</body>
</html>

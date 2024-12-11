<?php
// village_animations.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>StudentFest 2024 - Animations en Journée</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Script JavaScript de base
        document.addEventListener('DOMContentLoaded', () => {
            console.log('Page des animations chargée.');
        });
    </script>
</head>
<body>
<?php include 'header.html'; ?>

    <main class="container my-4">
        <section id="animations">
            <h2>Les Animations en Journée</h2>

            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card mb-4">
                        <img src="animation1.jpg" class="card-img-top" alt="Animation 1">
                        <div class="card-body">
                            <h3 class="card-title">Atelier de Danse</h3>
                            <p class="card-text">Participez à nos ateliers de danse animés par des professionnels et découvrez de nouveaux styles.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card mb-4">
                        <img src="animation2.jpg" class="card-img-top" alt="Animation 2">
                        <div class="card-body">
                            <h3 class="card-title">Zone de Jeux</h3>
                            <p class="card-text">Une zone dédiée aux jeux pour petits et grands, avec des jeux interactifs et des compétitions amicales.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card mb-4">
                        <img src="animation3.jpg" class="card-img-top" alt="Animation 3">
                        <div class="card-body">
                            <h3 class="card-title">Atelier de Création</h3>
                            <p class="card-text">Exprimez votre créativité lors de nos ateliers de peinture, de sculpture et d'artisanat.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card mb-4">
                        <img src="animation4.jpg" class="card-img-top" alt="Animation 4">
                        <div class="card-body">
                            <h3 class="card-title">Concours de Déguisements</h3>
                            <p class="card-text">Venez déguisés et participez à notre concours pour gagner de superbes prix.</p>
                        </div>
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

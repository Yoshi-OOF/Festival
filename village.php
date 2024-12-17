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
        <!-- Section Animations -->
        <section id="animations">
            <h2>Les Animations en Journée</h2>

            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card mb-4">
                        <img src="assets/Atelier de danse.jpg" class="card-img-top" alt="Animation 1">
                        <div class="card-body">
                            <h3 class="card-title">Atelier de Danse</h3>
                            <p class="card-text">Participez à nos ateliers de danse animés par des professionnels et découvrez de nouveaux styles.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card mb-4">
                        <img src="assets/Aire de jeux.jpg" class="card-img-top" alt="Animation 2">
                        <div class="card-body">
                            <h3 class="card-title">Aire de Jeux</h3>
                            <p class="card-text">Une zone dédiée aux jeux pour petits avec des infrastructures solides et sécurisées.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card mb-4">
                        <img src="assets/Atelier de cirque.jpg" class="card-img-top" alt="Animation 3">
                        <div class="card-body">
                            <h3 class="card-title">Atelier de Cirque</h3>
                            <p class="card-text">Participez à nos ateliers de cirque animés par des professionnels et découvrez de nouveaux horizons.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card mb-4">
                        <img src="assets/Atelier de magie.jpg" class="card-img-top" alt="Animation 4">
                        <div class="card-body">
                            <h3 class="card-title">Atelier de Magie</h3>
                            <p class="card-text">Participez à nos ateliers de magie animés par des professionnels et découvrez de nouvelles réalités.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Restauration -->
        <section id="restauration" class="my-5">
            <h2>Restauration</h2>
            <p>Pour satisfaire toutes vos envies culinaires pendant le StudentFest, plusieurs stands de restauration seront disponibles :</p>
            
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card mb-4">
                    <img src="assets/standSucree.jpg" class="card-img-top" alt="Stand de Spécialités Sucrées">
                        <div class="card-body">
                            <h3 class="card-title">Stand de Spécialités Sucrées</h3>
                            <p class="card-text">Crêpes, gaufres, et autres délices sucrés pour régaler petits et grands gourmands.</p>
                            <ul>
                                <li><strong>Horaires :</strong> 11h00 - 20h00</li>
                                <li><strong>Localisation :</strong> Zone centrale, près de l'entrée principale</li>
                                <li><strong>Prix :</strong> À partir de 3€</li>
                                <li><strong>Options :</strong> Sans gluten, végétariennes disponibles</li>
                                <li><strong>Paiements :</strong> Espèces et cartes acceptés</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card mb-4">
                    <img src="assets/foodTruckGourmet.jpg" class="card-img-top" alt="Food Truck Gourmet">
                        <div class="card-body">
                            <h3 class="card-title">Food Truck Gourmet</h3>
                            <p class="card-text">Burgers, tacos et plats chauds préparés avec des ingrédients frais et locaux.</p>
                            <ul>
                                <li><strong>Horaires :</strong> 12h00 - 22h00</li>
                                <li><strong>Localisation :</strong> Près de la scène principale</li>
                                <li><strong>Prix :</strong> Menus à partir de 8€</li>
                                <li><strong>Options :</strong> Végétariennes disponibles</li>
                                <li><strong>Paiements :</strong> Espèces, cartes et paiements mobiles</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card mb-4">
                        <img src="assets/barAsmoothie.jpg" class="card-img-top" alt="Bar à Smoothies">
                        <div class="card-body">
                            <h3 class="card-title">Bar à Smoothies</h3>
                            <p class="card-text">Smoothies frais et vitaminés pour une pause désalterante et énergétique.</p>
                            <ul>
                                <li><strong>Horaires :</strong> 10h00 - 18h00</li>
                                <li><strong>Localisation :</strong> Espace détente, zone ombragée</li>
                                <li><strong>Prix :</strong> À partir de 4€</li>
                                <li><strong>Options :</strong> Sans lactose, options véganes disponibles</li>
                                <li><strong>Paiements :</strong> Espèces et cartes acceptés</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.html'; ?>

</body>
</html>

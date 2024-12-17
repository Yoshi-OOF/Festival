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

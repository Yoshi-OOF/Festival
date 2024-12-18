<?php
// programmation.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>StudentFest 2024 - Programmation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTTX6VstJ+gqpK6mk1fJyZrZQZrF7T+p+V6bk7e3HznS+hWjwq3jrnlwrW27sn6EReF4bz4R3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .scene-card {
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .scene-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }
        .hero-section {
            background: url('images/festival-hero.jpg') center center / cover no-repeat;
            height: 60vh;
            position: relative;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
        }
        .hero-content {
            position: relative;
            text-align: center;
        }
        .testimonial {
            background-color: #f8f9fa;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .testimonial img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 1rem;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            console.log('Page de programmation stylée chargée.');
        });
    </script>
</head>
<body>
    <?php include 'header.html'; ?>

    <section id="gallery" class="bg-light py-5">
        <div class="container">
            <h2 class="mb-4 text-center">Artistes principaux</h2>
            <div class="row g-3">
                <div class="col-md-4">
                    <img src="./assets/imagine dragons.jpg" class="img-fluid rounded" alt="Galerie 1">
                    <h4>Imagine Dragons</h4>
                </div>
                <div class="col-md-4">
                    <img src="./assets/queen.jpg" class="img-fluid rounded" alt="Galerie 2">
                    <h4>Queen</h4>
                </div>
                <div class="col-md-4">
                    <img src="./assets/twenty one pilots.jpg" class="img-fluid rounded" alt="Galerie 3">
                    <h4>Twenty One Pilots</h4>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <img src="./assets/angele.jpg" class="img-fluid rounded" alt="Galerie 1">
                    <h4>Angèle</h4>
                </div>
                <div class="col-md-4">
                    <img src="./assets/muse.jpg" class="img-fluid rounded" alt="Galerie 2">
                    <h4>Muse</h4>
                </div>
                <div class="col-md-4">
                    <img src="./assets/gazo.jpg" class="img-fluid rounded" alt="Galerie 3">
                    <h4>Gazo</h4>
                </div>
            </div>
        </div>
    </section>

    <main class="container my-5">
        <section id="scenes" class="mb-5">
            <h2 class="mb-4 text-center">Présentation des 4 Scènes et leurs Thématiques</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card scene-card h-100">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-music"></i> Scène Principale</h5>
                            <p class="card-text">Accueille les têtes d'affiche du festival avec des artistes internationaux et des groupes renommés.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card scene-card h-100">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-guitar"></i> Scène Acoustique</h5>
                            <p class="card-text">Espace dédié aux performances acoustiques et aux artistes émergents, offrant une ambiance intimiste.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card scene-card h-100">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-headphones"></i> Scène Nouveaux Talents 1</h5>
                            <p class="card-text">Nous voulons profiter de cette événement pour donner la chance à des amateurs de pouvoir performer et se faire connaître.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card scene-card h-100">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-microphone-alt"></i> Scène Nouveaux Talents 2</h5>
                            <p class="card-text">Rap, Hip-hop, Rock, Métal, Classique, Electro... Une deuxième scène pour les nouveaux talents n'est pas de trop !</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="schedule">
            <h2 class="mb-4 text-center">Horaires des Performances</h2>
            <div class="accordion" id="scheduleAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Scène Principale
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#scheduleAccordion">
                        <div class="accordion-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><strong>Vendredi</strong></li>
                                <li class="list-group-item"><strong>20:00</strong> Imagine Dragons</li>
                                <li class="list-group-item"><strong>22:00</strong> Angèle</li>
                                <li class="list-group-item"><strong>Samedi</strong></li>
                                <li class="list-group-item"><strong>20:00</strong> Muse</li>
                                <li class="list-group-item"><strong>22:00</strong> Gazo</li>
                                <li class="list-group-item"><strong>Dimanche</strong></li>
                                <li class="list-group-item"><strong>20:00</strong> Twenty One Pilots</li>
                                <li class="list-group-item"><strong>22:00</strong> Queen</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="schedule">
            <div class="accordion" id="scheduleAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            Scène Acoustique
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#scheduleAccordion">
                        <div class="accordion-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><strong>Vendredi</strong></li>
                                <li class="list-group-item"><strong>19:00</strong> Skillet</li>
                                <li class="list-group-item"><strong>22:30</strong> Ed Sheeran</li>
                                <li class="list-group-item"><strong>00:30</strong> Jack Johnson</li>
                                <li class="list-group-item"><strong>Samedi</strong></li>
                                <li class="list-group-item"><strong>17:00</strong> City and Colour</li>
                                <li class="list-group-item"><strong>19:30</strong> José González</li>
                                <li class="list-group-item"><strong>21:30</strong> Never Shout Never</li>
                                <li class="list-group-item"><strong>23:30</strong> Boyce Avenue</li>
                                <li class="list-group-item"><strong>Dimanche</strong></li>
                                <li class="list-group-item"><strong>17:00</strong> Joshua Radin</li>
                                <li class="list-group-item"><strong>19:30</strong> Gabrielle Aplin</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="schedule">
            <div class="accordion" id="scheduleAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                            Scène Nouveaux Talents 1
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#scheduleAccordion">
                        <div class="accordion-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><strong>Vendredi</strong></li>
                                <li class="list-group-item"><strong>21:00</strong> Luther</li>
                                <li class="list-group-item"><strong>22:30</strong> Tiakola</li>
                                <li class="list-group-item"><strong>00:00</strong> Ruminant</li>
                                <li class="list-group-item"><strong>Samedi</strong></li>
                                <li class="list-group-item"><strong>17:00</strong> Bekar</li>
                                <li class="list-group-item"><strong>18:30</strong> Joseph Kamel</li>
                                <li class="list-group-item"><strong>21:00</strong> Pierre Garnier</li>
                                <li class="list-group-item"><strong>Dimanche</strong></li>
                                <li class="list-group-item"><strong>17:00</strong> Charlotte Cardin</li>
                                <li class="list-group-item"><strong>18:30</strong> ELOI</li>
                                <li class="list-group-item"><strong>21:00</strong> Aliocha Schneider</li>.
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="schedule">
            <div class="accordion" id="scheduleAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                            Scène Nouveaux Talents 2
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#scheduleAccordion">
                        <div class="accordion-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><strong>Vendredi</strong></li>
                                <li class="list-group-item"><strong>20:00</strong> Clara Ysé</li>
                                <li class="list-group-item"><strong>21:30</strong> Yamê</li>
                                <li class="list-group-item"><strong>23:00</strong> La Fève</li>
                                <li class="list-group-item"><strong>Samedi</strong></li>
                                <li class="list-group-item"><strong>18:00</strong> Trinix</li>
                                <li class="list-group-item"><strong>20:30</strong> Irène Drésel</li>
                                <li class="list-group-item"><strong>22:00</strong> Ben Mazué</li>
                                <li class="list-group-item"><strong>Dimanche</strong></li>
                                <li class="list-group-item"><strong>17:00</strong> Corsu Mezu Mezu</li>
                                <li class="list-group-item"><strong>19:30</strong> Therapie Taxi</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <section id="gallery" class="bg-light py-5">
        <div class="container">
            <h2 class="mb-4 text-center">Galerie Photos</h2>
            <div class="row g-3">
                <div class="col-md-4">
                    <img src="./assets/Carnival-YasuyoshiChiba-01.jpg" class="img-fluid rounded" alt="Galerie 1">
                </div>
                <div class="col-md-4">
                    <img src="./assets/dXAx-FJ3.jpg" class="img-fluid rounded" alt="Galerie 2">
                </div>
                <div class="col-md-4">
                    <img src="./assets/panagbenga.jpg" class="img-fluid rounded" alt="Galerie 3">
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.html'; ?>

</body>
</html>

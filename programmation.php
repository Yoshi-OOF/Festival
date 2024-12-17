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
                            <h5 class="card-title"><i class="fas fa-headphones"></i> Scène Électronique</h5>
                            <p class="card-text">Pour les amateurs de musique électronique, avec des DJs et des performances visuelles impressionnantes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card scene-card h-100">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-microphone-alt"></i> Scène Alternative</h5>
                            <p class="card-text">Espace pour les genres alternatifs, incluant rock, indie et autres styles innovants.</p>
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
                            Scène Principale - Vendredi
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#scheduleAccordion">
                        <div class="accordion-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><strong>20:00</strong> Ouverture des portes</li>
                                <li class="list-group-item"><strong>21:00</strong> Artiste A</li>
                                <li class="list-group-item"><strong>22:30</strong> Artiste B</li>
                                <li class="list-group-item"><strong>00:00</strong> DJ Set</li>
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

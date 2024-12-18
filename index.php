<h?php
// index.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>StudentFest 2024 - Accueil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Script JavaScript de base
        document.addEventListener('DOMContentLoaded', () => {
            console.log('Site StudentFest prêt.');
        });
    </script>
    <style>
        /* Styles personnalisés */
        .carousel-item img {
            height: 500px;
            object-fit: cover;
        }
        .music-style img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .music-style {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <?php include 'header.html'; ?>

    <main class="container my-4">
        <!-- Carrousel d'images -->
        <section id="carousel" class="mb-4">
            <div id="festivalCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#festivalCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#festivalCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#festivalCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./assets/concert.jpg" class="d-block w-100 rounded" alt="Concert En Direct">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Concert en Direct</h5>
                            <p>Des performances live inoubliables.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./assets/scene.jpg" class="d-block w-100 rounded" alt="Scène Principal">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Scène Principal</h5>
                            <p>La meilleure ambiance sur notre scène principale.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./assets/atelier.jpg" class="d-block w-100 rounded" alt="Ateliers Musique">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Ateliers Musique</h5>
                            <p>Participez à des ateliers interactifs.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#festivalCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Précédent</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#festivalCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Suivant</span>
                </button>
            </div>
        </section>

        <!-- Présentation du Festival -->
        <section id="presentation" class="mb-5">
            <div class="container">
                <div class="text-center mb-4">
                    <h1 class="text-primary">🎶 LE RENDEZ-VOUS MUSICAL INCONTOURNABLE DU PÉRIGORD : STUDENTFEST 2024 🎶</h1>
                    <p class="fs-5 text-muted">
                        Préparez-vous pour <strong>trois jours inoubliables</strong> de musique, de partage et de fête au cœur des lieux les plus emblématiques de la région !
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="text-danger">✨ Pourquoi ne pas manquer cet événement ?</h2>
                        <ul class="list-unstyled">
                            <li><strong>🌟 Un programme exceptionnel</strong> : Découvrez des talents émergents et vibrez sur les dernières tendances musicales.</li>
                            <li><strong>🏛 Des cadres enchanteurs</strong> : Concerts et animations dans des lieux uniques qui sublimeront chaque instant.</li>
                            <li><strong>🎉 Ambiance étudiante et festive</strong> : Partagez votre passion pour la musique avec des gens du monde entier.</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <img src="./assets/studentfest_promo.jpg" alt="StudentFest" class="img-fluid rounded shadow">
                    </div>
                </div>
                <div class="text-center mt-4">
                    <h3 class="text-success">📅 Quand ? 📍 Où ?</h3>
                    <p class="fs-5">
                        Notez bien les dates, car STUDENTFEST 2024 est <em>le</em> festival à ne pas manquer cette année.  
                        <br>Au cœur du Périgord, une région riche en culture, en histoire et en paysages à couper le souffle.
                    </p>
                    <a href="#reservations" class="btn btn-danger btn-lg mt-2">👉 Réservez vite vos places</a>
                </div>
            </div>
        </section>

        <!-- Valeurs du Festival -->
        <section id="valeurs" class="mb-4">
            <h3>Nos Valeurs</h3>
            <div class="row">
                <!-- Inclusivité -->
                <div class="col-md-2 mb-3">
                    <div class="card h-100">
                        <img src="assets/inclusivite.png" class="card-img-top" alt="Inclusivité">
                        <div class="card-body">
                            <h5 class="card-title">Inclusivité</h5>
                            <p class="card-text">Un festival ouvert à tous, sans discrimination, pour une expérience partagée et accueillante.</p>
                        </div>
                    </div>
                </div>

                <!-- Durabilité -->
                <div class="col-md-2 mb-3">
                    <div class="card h-100">
                        <img src="assets/durabilite.jpg" class="card-img-top" alt="Durabilité">
                        <div class="card-body">
                            <h5 class="card-title">Durabilité</h5>
                            <p class="card-text">Des initiatives écoresponsables pour réduire notre impact environnemental et préserver la beauté du Périgord.</p>
                        </div>
                    </div>
                </div>

                <!-- Innovation -->
                <div class="col-md-2 mb-3">
                    <div class="card h-100">
                        <img src="assets/innovation.png" class="card-img-top" alt="Innovation">
                        <div class="card-body">
                            <h5 class="card-title">Innovation</h5>
                            <p class="card-text">Soutenir les artistes émergents et promouvoir les nouvelles tendances musicales à travers des performances inédites.</p>
                        </div>
                    </div>
                </div>

                <!-- Communauté -->
                <div class="col-md-2 mb-3">
                    <div class="card h-100">
                        <img src="assets/communauté.jpg" class="card-img-top" alt="Communauté">
                        <div class="card-body">
                            <h5 class="card-title">Communauté</h5>
                            <p class="card-text">Renforcer les liens entre les étudiants et les habitants du Périgord pour un festival qui unit.</p>
                        </div>
                    </div>
                </div>

                <!-- Qualité -->
                <div class="col-md-2 mb-3">
                    <div class="card h-100">
                        <img src="assets/qualité.jpg" class="card-img-top" alt="Qualité">
                        <div class="card-body">
                            <h5 class="card-title">Qualité</h5>
                            <p class="card-text">Offrir une expérience mémorable avec des prestations de haut niveau, pour un festival inoubliable.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Styles de Musique -->
        <section id="styles-musique" class="mb-4">
            <h3>Nos Styles de Musique</h3>
            <div class="row">
                <!-- Rock -->
                <div class="col-md-4 music-style">
                    <img class="rounded" src="./assets/rock.jpg" alt="Rock">
                    <h4>Rock</h4>
                    <p>Des groupes énergétiques et des performances électrisantes pour les amateurs de rock.</p>
                </div>
                <!-- Electro -->
                <div class="col-md-4 music-style">
                    <img class="rounded" src="./assets/electro.jpg" alt="Électro">
                    <h4>Électro</h4>
                    <p>Plongez dans des beats vibrants et des sons innovants avec nos artistes électro.</p>
                </div>
                <!-- Jazz -->
                <div class="col-md-4 music-style">
                    <img class="rounded" src="./assets/jazz.jpg" alt="Jazz">
                    <h4>Jazz</h4>
                    <p>Laissez-vous emporter par les mélodies sophistiquées et les improvisations captivantes.</p>
                </div>
            </div>
            <div class="row mt-4">
                <!-- Pop -->
                <div class="col-md-4 music-style">
                    <img class="rounded" src="./assets/pop.jpg" alt="Pop">
                    <h4>Pop</h4>
                    <p>Des hits entraînants et des performances scintillantes pour danser toute la nuit.</p>
                </div>
                <!-- Hip-Hop -->
                <div class="col-md-4 music-style">
                    <img class="rounded" src="./assets/hip-hop.png" alt="Hip-Hop">
                    <h4>Hip-Hop</h4>
                    <p>Des rythmes percutants et des flows innovants des meilleurs talents hip-hop.</p>
                </div>
                <!-- Musiques du Monde -->
                <div class="col-md-4 music-style">
                    <img class="rounded" src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxMTc1OTl8MHwxfHNlYXJjaHwxfHxtdXNpYXF1ZXN8ZW58MHx8fHwxNjg5NzE0MDU1&ixlib=rb-4.0.3&q=80&w=400" alt="Musiques du Monde">
                    <h4>Musiques du Monde</h4>
                    <p>Découvrez une diversité de sons et de rythmes venus des quatre coins du globe.</p>
                </div>
            </div>
        </section>

        <!-- Synthèse de la Programmation -->
        <section id="synthese_programmation" class="mb-4">
            <h3>Programmation en Bref</h3>
            <p>Profitez de concerts variés avec des artistes locaux et internationaux répartis sur 4 scènes thématiques :</p>
            <ul>
                <li>Scène Principale</li>
                <li>Scène Électro</li>
                <li>Scène Acoustique</li>
                <li>Scène Alternative</li>
            </ul>
            <p>Chaque scène offre une expérience unique pour satisfaire tous les goûts musicaux.</p>
        </section>

        <!-- Accessibilité -->
        <section id="accessibilite" class="mb-4">
            <h3>Accessibilité</h3>
            <p>Le StudentFest 2024 met un point d'honneur à être inclusif et accessible pour tous les participants :</p>
            <div class="row">
                <!-- Transports -->
                <div class="col-md-6 mb-3">
                    <div class="border p-3 rounded">
                        <h4>🚍 Transports</h4>
                        <p>Arrêts de bus et stations de tramway situés à moins de 200 mètres du site.</p>
                    </div>
                </div>
                <!-- Stationnement -->
                <div class="col-md-6 mb-3">
                    <div class="border p-3 rounded">
                        <h4>🅿️ Stationnement</h4>
                        <p>Parking gratuit avec des places prioritaires réservées aux personnes à mobilité réduite.</p>
                    </div>
                </div>
                <!-- Mobilité -->
                <div class="col-md-6 mb-3">
                    <div class="border p-3 rounded">
                        <h4>♿ Mobilité sur le site</h4>
                        <p>Chemins pavés et rampes d'accès pour faciliter les déplacements en fauteuil roulant.</p>
                    </div>
                </div>
                <!-- Services Adaptés -->
                <div class="col-md-6 mb-3">
                    <div class="border p-3 rounded">
                        <h4>🛠️ Services Adaptés</h4>
                        <p>Toilettes accessibles, zones de repos adaptées et signalétique claire pour une orientation facile.</p>
                    </div>
                </div>
                <!-- Assistance -->
                <div class="col-md-12 mb-3">
                    <div class="border p-3 rounded">
                        <h4>🤝 Assistance</h4>
                        <p>Points d'accueil avec un personnel formé pour accompagner les personnes ayant des besoins spécifiques.</p>
                    </div>
                </div>
            </div>
        </section>


        <!-- Galerie Photos -->
        <section id="galerie" class="mb-4">
            <h3>Galerie Photos</h3>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <img src="./assets/panagbenga.jpg" class="img-fluid rounded" alt="Photo 1">
                </div>
                <div class="col-md-3 mb-3">
                    <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxMTc1OTl8MHwxfHNlYXJjaHwxfHxjb25jZXJ0JTIwZmVzdGl2YWx8ZW58MHx8fHwxNjg5NzE0MDY4&ixlib=rb-4.0.3&q=80&w=300" class="img-fluid rounded" alt="Photo 2">
                </div>
                <div class="col-md-3 mb-3">
                    <img src="https://images.unsplash.com/photo-1507874457470-272b3c8d8ee2?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxMTc1OTl8MHwxfHNlYXJjaHwxfHxqdWF6fGVufDB8fHx8MTY4OTcxNDA3MQ&ixlib=rb-4.0.3&q=80&w=300" class="img-fluid rounded" alt="Photo 3">
                </div>
                <div class="col-md-3 mb-3">
                    <img src="https://images.unsplash.com/photo-1511376777868-611b54f68947?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxMTc1OTl8MHwxfHNlYXJjaHwxfHxldGVjZHJvfGVufDB8fHx8MTY4OTcxNDA3Ng&ixlib=rb-4.0.3&q=80&w=300" class="img-fluid rounded" alt="Photo 4">
                </div>
            </div>
            <p class="text-center"><a href="galerie.php" class="btn btn-primary">Voir plus de photos</a></p>
        </section>
    </main>

    <?php include 'footer.html'; ?>

</body>
</html>

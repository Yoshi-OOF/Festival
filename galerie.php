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

            /* Présentation du Festival */
            #presentation {
                margin-top: 2rem;
                margin-bottom: 3rem;
                padding: 1.5rem;
                font-family: 'Montserrat', sans-serif;
                color: white;
            }

            #presentation h1,
            #presentation h2 {
                color: white;
                font-family: 'Montserrat', sans-serif;
                font-weight: 700;
                text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3);
                letter-spacing: 1px;
            }

            #presentation p {
                font-size: 1rem;
                line-height: 1.6;
                color: white;
            }

            #presentation ul {
                list-style: none;
                padding-left: 0;
            }

            #presentation ul li {
                margin-bottom: 0.8rem;
                font-size: 1rem;
                font-weight: 600;
                position: relative;
                padding-left: 1.5rem;
            }

            #presentation ul li::before {
                content: '•';
                color: #94E9A8;
                font-size: 1.2rem;
                position: absolute;
                left: 0;
                top: 0;
            }

            #presentation a {
                color: white;
                text-decoration: underline;
                transition: color 0.3s ease;
            }

            #presentation a:hover {
                color: #C9F06D;
            }

            #presentation img {
                max-width: 100%;
                height: auto;
                border-radius: 5px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            #presentation img:hover {
                transform: scale(1.02);
                box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            }
        </style>
    </head>

    <body>
        <?php include 'header.html'; ?>

        <main class="container my-4">

            <section id="galerie" class="mb-4">
                <br>
                <br>
                <br>
                <br>
            </section>

            <!-- Carrousel d'images -->
            <section id="carousel" class="mb-4">
                <div id="festivalCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#festivalCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#festivalCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#festivalCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#festivalCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#festivalCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#festivalCarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./assets/concert.jpg" class="d-block w-100 rounded" alt="Concert En Direct">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Concert en Direct</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/scene.jpg" class="d-block w-100 rounded" alt="Scène Principal">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Gospel en scène principale</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/atelier.jpg" class="d-block w-100 rounded" alt="Ateliers Musique">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Ateliers Musique</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxMTc1OTl8MHwxfHNlYXJjaHwxfHxjb25jZXJ0JTIwZmVzdGl2YWx8ZW58MHx8fHwxNjg5NzE0MDY4&ixlib=rb-4.0.3&q=80&w=300" class="d-block w-100 rounded" alt="Photo 2">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Ateliers Musique</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1507874457470-272b3c8d8ee2?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxMTc1OTl8MHwxfHNlYXJjaHwxfHxqdWF6fGVufDB8fHx8MTY4OTcxNDA3MQ&ixlib=rb-4.0.3&q=80&w=300" class="d-block w-100 rounded" alt="Photo 3">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Ateliers Musique</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1511376777868-611b54f68947?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxMTc1OTl8MHwxfHNlYXJjaHwxfHxldGVjZHJvfGVufDB8fHx8MTY4OTcxNDA3Ng&ixlib=rb-4.0.3&q=80&w=300" class="d-block w-100 rounded" alt="Photo 4">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Ateliers Musique</h5>
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

            <!-- Galerie Photos -->
            <section id="galerie" class="mb-4">
                <br>
                <br>
                <br>
                <br>
            </section>
        </main>
            <br>

        <?php include 'footer.html'; ?>

    </body>

    </html>
<?php
// billetterie.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>StudentFest 2024 - Billetterie</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        /* Custom styles for the page */
        .ticket-option {
            border: 1px solid #ccc;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
            transition: box-shadow 0.3s;
        }

        .ticket-option:hover {
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .ticket-option h3 {
            margin-top: 0;
        }

        .ticket-option ul {
            list-style-type: none;
            padding: 0;
        }

        .ticket-option li {
            margin-bottom: 10px;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
    <script>
        // Script JavaScript de base
        document.addEventListener('DOMContentLoaded', () => {
            console.log('Page de billetterie chargée.');
        });
    </script>
</head>
<body>
<?php include 'header.html'; ?>

    <main class="container my-4">
        <section id="billetterie">
            <h2 class="mb-4">Billetterie</h2>

            <div class="row">
                <!-- Billet Journée -->
                <div class="col-md-6 col-lg-4">
                    <div class="ticket-option">
                        <h3>Billet Journée</h3>
                        <p>Accès à toutes les scènes pour une journée.</p>
                        <ul>
                            <li><strong>Vendredi</strong> - 30€</li>
                            <li><strong>Samedi</strong> - 35€</li>
                            <li><strong>Dimanche</strong> - 25€</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Acheter Maintenant</a>
                    </div>
                </div>

                <!-- Forfait 2 Jours -->
                <div class="col-md-6 col-lg-4">
                    <div class="ticket-option">
                        <h3>Forfait 2 Jours</h3>
                        <p>Accès à toutes les scènes pendant deux jours consécutifs.</p>
                        <ul>
                            <li><strong>Vendredi et Samedi</strong> - 60€</li>
                            <li><strong>Samedi et Dimanche</strong> - 55€</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Acheter Maintenant</a>
                    </div>
                </div>

                <!-- Forfait 3 Jours -->
                <div class="col-md-6 col-lg-4">
                    <div class="ticket-option">
                        <h3>Forfait 3 Jours</h3>
                        <p>Accès complet à toutes les scènes pendant les trois jours du festival.</p>
                        <ul>
                            <li><strong>Vendredi, Samedi et Dimanche</strong> - 80€</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Acheter Maintenant</a>
                    </div>
                </div>

                <!-- Billet VIP -->
                <div class="col-md-6 col-lg-4">
                    <div class="ticket-option">
                        <h3>Billet VIP</h3>
                        <p>Accès privilégié avec des avantages exclusifs.</p>
                        <ul>
                            <li><strong>Prix</strong> - 150€</li>
                            <li>Accès prioritaire aux scènes</li>
                            <li>Zone VIP réservée</li>
                            <li>Cadeaux exclusifs</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Acheter Maintenant</a>
                    </div>
                </div>

                <!-- Billet Mineur -->
                <div class="col-md-6 col-lg-4">
                    <div class="ticket-option">
                        <h3>Billet Mineur</h3>
                        <p>Accès adapté pour les participants de moins de 18 ans.</p>
                        <ul>
                            <li><strong>Prix</strong> - 20€</li>
                            <li>Accès restreint aux scènes adultes</li>
                            <li>Zone dédiée aux jeunes</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Acheter Maintenant</a>
                    </div>
                </div>

                <!-- Billet Famille -->
                <div class="col-md-6 col-lg-4">
                    <div class="ticket-option">
                        <h3>Billet Famille</h3>
                        <p>Pack familial pour profiter du festival en groupe.</p>
                        <ul>
                            <li><strong>2 Adultes + 2 Enfants</strong> - 100€</li>
                            <li><strong>3 Adultes + 2 Enfants</strong> - 130€</li>
                            <li>Accès à toutes les scènes</li>
                            <li>Zones familiales dédiées</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Acheter Maintenant</a>
                    </div>
                </div>

                <!-- Billet Logement -->
                <div class="col-md-6 col-lg-4">
                    <div class="ticket-option">
                        <h3>Billet Logement</h3>
                        <p>Options d'hébergement pour le festival.</p>
                        <ul>
                            <li><strong>Tente Individuelle</strong> - 50€ par nuit</li>
                            <li><strong>Tente Familiale</strong> - 80€ par nuit</li>
                            <li><strong>Camping Car</strong> - 70€ par nuit</li>
                            <li><strong>Hébergement Hôtel</strong> - À partir de 100€ par nuit</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Réserver Maintenant</a>
                    </div>
                </div>

                <!-- Pack Complet -->
                <div class="col-md-6 col-lg-4">
                    <div class="ticket-option">
                        <h3>Pack Complet</h3>
                        <p>Billet + Hébergement pour une expérience sans souci.</p>
                        <ul>
                            <li><strong>3 Jours + Logement</strong> - 200€</li>
                            <li>Accès à toutes les scènes</li>
                            <li>Hébergement inclus</li>
                            <li>Accès VIP</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Acheter Maintenant</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.html'; ?>

</body>
</html>

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
            <h2>Billetterie</h2>

            <div class="row">
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
            </div>
        </section>
    </main>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 StudentFest. Tous droits réservés.</p>
    </footer>
</body>
</html>

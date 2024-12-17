<?php
// contact.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>StudentFest 2024 - Contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Inclusion de Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Scripts JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            console.log('Page de contact chargée.');
        });
    </script>
</head>
<body>
    <?php include 'header.html'; ?>

    <main class="container my-4">
        <section id="contact">
            <h2>Contactez-nous</h2>
            <p>Vous avez des questions ou des suggestions ? Remplissez le formulaire ci-dessous, nous vous répondrons au plus vite.</p>
            <form action="contact.php" method="post">
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom :</label>
                    <input type="text" class="form-control" id="nom" name="nom" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email :</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="sujet" class="form-label">Sujet :</label>
                    <input type="text" class="form-control" id="sujet" name="sujet" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message :</label>
                    <textarea class="form-control" id="message" name="message" rows="6" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
            <?php
            // Traitement du formulaire
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Récupération et sécurisation des données du formulaire
                $nom = htmlspecialchars($_POST['nom']);
                $email = htmlspecialchars($_POST['email']);
                $sujet = htmlspecialchars($_POST['sujet']);
                $message = htmlspecialchars($_POST['message']);

                // TODO: Ajouter le code pour envoyer l'email ou stocker les informations

                echo '<div class="alert alert-success mt-4">Merci ' . $nom . ', votre message a été envoyé avec succès !</div>';
            }
            ?>
        </section>
    </main>

    <?php include 'footer.html'; ?>
</body>
</html>
<?php
// valeurs.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>StudentFest 2024 - Nos Valeurs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Script JavaScript de base
        document.addEventListener('DOMContentLoaded', () => {
            console.log('Page des valeurs chargée.');
        });
    </script>
</head>
<body>
<?php include 'header.html'; ?>

    <main class="container my-4">
        <section id="valeurs">
            <h2>Nos Valeurs</h2>
            <p>Au StudentFest, nous valorisons :</p>
            <ul class="list-group">
                <li class="list-group-item"><strong>Inclusivité :</strong> Un festival ouvert à tous, sans discrimination.</li>
                <li class="list-group-item"><strong>Durabilité :</strong> Des initiatives écoresponsables pour réduire notre impact environnemental.</li>
                <li class="list-group-item"><strong>Innovation :</strong> Soutenir les artistes émergents et les nouvelles tendances musicales.</li>
                <li class="list-group-item"><strong>Communauté :</strong> Renforcer les liens entre les étudiants et les habitants du Périgord.</li>
                <li class="list-group-item"><strong>Qualité :</strong> Offrir une expérience mémorable avec des prestations de haut niveau.</li>
            </ul>
        </section>
    </main>

    <?php include 'footer.html'; ?>

</body>
</html>

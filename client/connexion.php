<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/connexion.css">
</head>

<body>
    <!-- Header -->
    <?php include('includes/header.php'); ?>

    <!-- Coprs de la page -->
    <section id="hero">
        <form action="submit/submit_connexion.php" method="post">
            <h1>Mon TTP</h1>
            <div class="div_form">
                <p>Identifiant</p>
                <input type="text" name = "identifiant" id="input_identifiant" class="border_input">
            </div>

            <div class="div_form">
                <p>Mot de passe</p>
                <input type="password" name = "password_connexion" id="input_password" class="border_input">
            </div>

            <input type="submit" value="Connexion" class="bouton">

            <p>Pas encore inscrit ? <a href="inscription.php">Je crée mon compte</a> </p>
        </form>
    </section>

    <!-- Footer -->
    <?php include('includes/footer.php'); ?>
</body>
</html>
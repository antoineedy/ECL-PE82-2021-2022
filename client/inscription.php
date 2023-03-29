<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/inscription.css">
</head>

<body>

    <!-- Header -->
    <?php include('includes/header.php'); ?>

    <!-- Coprs de la page -->
    <section id="hero">
        <form action="submit/submit_inscription.php" method="post">
            <h1>Inscription</h1>
            <div id="Identité">
                <div class="div_form">
                    <p>Nom</p>
                    <input type="text" name = "nom_inscription" id="input_nom" class="border_input">
                </div>

                <div class="div_form">
                    <p>Prenom</p>
                    <input type="text" name = "prenom_inscription" id="input_prenom" class="border_input">
                </div>
            </div>

            <div id="information">
                <div class="div_form">
                    <p>Pseudo</p>
                    <input type="text" name = "pseudo" id="input_email" class="border_input">
                </div>

                <div class="div_form">
                    <p>Mot de passse</p>
                    <input type="text" name = "password_inscription" id="input_password" class="border_input">
                </div>
            </div>


            <input type="submit" value="S'inscrire" class="bouton">

            <p>Pas encore inscrit ? <a href="">Je crée mon compte</a> </p>
        </form>
    </section>

    <!-- Footer -->
    <?php include('includes/footer.php'); ?>
</body>
</html>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/contact.css">
</head>

<body>

    <!-- Header -->
    <?php include('includes/header.php'); ?>

    <!-- Corps de la page -->
    <section id="hero">
        <form action="submit/submit_form.php" method="post">
            <h1>Contactez nous</h1>
            <div id="Indentité">
                <div class="div_form">
                    <p>Votre nom</p>
                    <input type="text" name = "nom_message" id="input_nom" class="border_input">
                </div>

                <div class="div_form">
                    <p>Votre prénom</p>
                    <input type="text" name = "prenom_message" id="input_prenom" class="border_input">
                </div>
            </div>
        
            <div class="div_form">
                <p>Votre message</p>
                <textarea name="message" id="input_message" class="border_input" cols="30" rows="10"></textarea>
            </div>

            <input type="submit" value="Envoyer" class="bouton">
        </form>
    </section>

    <!-- Footer -->
    <?php include('includes/footer.php'); ?>
</body>
</html>
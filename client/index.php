<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TrouveTaPlace</title>
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/index.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    

</head>

<body>

    <!-- Header -->
    <?php include('includes/header.php'); ?>
    <!-- Barre de recherche -->
    <section class="recherche">
        <form action="/algorithme.php" class="form-container">
            <input id="barre" class="barre" type="text" placeholder="Entrez votre destination" name="lieu" size="20px" maxlength=100 required> </br>

            <div class="menu-option">
            </br>
            <button id="togg1" class="bouton" type="button">Options</button>

            <!-- Popup options -->
            <div id="box" class="visuallyhidden hidden">
                <div class="form-popup" id="popupForm">
                    <div id="options">
                        <label>
                            <input type="hidden" name="pmr" value="0" />
                            <input class="custom-checkbox-input" name="pmr" value="1" type="checkbox">
                            <span class="custom-checkbox-text">Place handicapée</span>
                        </label>
                        <label>
                            <input type="hidden" name="moto" value="0" />
                            <input class="custom-checkbox-input" name="moto" value="1" type="checkbox">
                            <span class="custom-checkbox-text">Place moto</span>
                        </label>
                        <label>
                            <input type="hidden" name="velo" value="0" />
                            <input class="custom-checkbox-input" name="velo" value="1" type="checkbox">
                            <span class="custom-checkbox-text">Place vélo</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <input id="button" class="bouton3" type="submit" value="Valider">
    </form>

</section>

<!-- ensemble gris avec Favoris, Map, Traffic -->

<section class="gris">
    <a href="#fin" id="arrow"><img src="images/icones/arrow-down.svg" class="direction" href="#fin"></a>
    <div class="info">
        <div class="info_item">
            <div><a href=""><img src="images/icones/iconmonstr-star-3.svg"></a></div>
            <a href="" class="mot">Favoris</a>
        </div>
        <div class="info_item">
            <div><a href="map.php"><img src="images/icones/iconmonstr-map-10.svg"></a></div>
            <a href="map.php" class="mot">Carte</a>
        </div>
        <div class="info_item">
            <div><a href=""><img src="images/icones/iconmonstr-construction-15.svg"></a></div>
            <a href="" class="mot">Trafic</a>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include('includes/footer.php'); ?>

<script src="script/index.js"></script>
</body>
</html>

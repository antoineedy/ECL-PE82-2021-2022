<style>
    /* Header */

nav{
    background-color: #1D3557;
    color: white;
    min-height: 80px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

nav ul{
    display: flex;
    flex: 20 1 40rem;
    justify-content: space-around;
    align-items: center;
    font-size: 20px;
}

nav ul li{
    padding: 10px;
    margin-left: 50px;
    margin-right: 50px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}

a:hover{
    color: #CECECE;
}

.logo{
    display: flex;
    align-items: center;
    flex: 1 1 40rem;
    font-size: 20px;
    margin-left: 5px;
    background-color: white;
    max-width:150px;
    padding:5px;
    border-radius:10px;
    margin: 10px;
}

.logo img{
    height: 60px;
    border-radius: 10px;
}

.connexion {
    display: flex;

    justify-content: center;
    align-items: center;
    background-color: white;
    border-radius: 10px;
    height: 55px;
    width: 170px;
    font-size: 20px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}

.connexion:hover{
    background-color: #CECECE;
    cursor: pointer;
}

.connexion a{
    color : #1D3557;
    font-weight: bold;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}



</style>

<header class="head">
    <nav>

        <!-- Logo -->
        <div class="logo">
            <img src="images/logo2.png" id="Logo">
        </div>

        <!-- Menu de tête -->
        <ul>
            <li><a href="../index.php">Accueil</a></li>

            <li><a href="../contact.php">Contact</a></li>

            <!-- Le client n'est pas connecté -->
            <?php if(!isset($_SESSION['pseudo'])): ?>
                <li><a href="../resultat_recherche.php">Favoris</a></li>
                <li class="connexion"><a href="../connexion.php">Mon TTP</a></li>

            <!-- Le client est connecté -->
            <?php else: ?>
                <li><a href="../resultat_recherche.php">Favoris</a></li>
                <li class="connexion"><a href="../submit/deconnexion.php">Déconnexion</a></li>
            <?php endif; ?>



        </ul>
    </nav>
</header>
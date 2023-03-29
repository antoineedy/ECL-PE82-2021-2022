<?php session_start();

if (!isset($_POST['identifiant']) || !isset($_POST['password_connexion']))
{
    echo('Vos identifiants semblent incorrects');
    return;
}


$identifiant = $_POST['identifiant'];
$password_connexion = $_POST['password_connexion'];


$pdo = new PDO('sqlite:../../datas/base.db');

$statement = $pdo->query("SELECT * FROM Users");

$rows = $statement->fetchALL(PDO::FETCH_ASSOC);
$Is_user = FALSE;

foreach ($rows as $elt) {
    if($elt['pseudo']==$identifiant && $elt['password']==$password_connexion){
        
        $Is_user = TRUE;
        break;
    }
}

if($Is_user == TRUE){
    $_SESSION['pseudo'] = $identifiant;
    header('Location: ../index.php');
}

else{
    echo("Vous n'êtes pas membre");
}



?>

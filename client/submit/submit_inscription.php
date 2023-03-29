<?php 

if (!isset($_POST['nom_inscription']) || !isset($_POST['prenom_inscription']) || !isset($_POST['pseudo']) || !isset($_POST['password_inscription']))
{
    echo('Des informations ne sont pas bonnes');
    return;
}

$pseudo = $_POST['pseudo'];
$password_inscription = $_POST['password_inscription'];

$pdo = new PDO('sqlite:../../datas/base.db');

$statement = $pdo->query("INSERT INTO Users (pseudo, password) VALUES ('$pseudo', '$password_inscription')");

header('LOCATION:../connexion.php')

?>

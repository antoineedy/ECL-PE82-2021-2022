
<?php 

if (!isset($_POST['nom_message']) || !isset($_POST['prenom_message']))
{
    echo('Veuillez renseigner votre nom et prénom');
    return;
}

if (!isset($_POST['message']))
{
    echo('veuillez entrer un message');
    return;
}

$nom_message = $_POST['nom_message'];
$prenom_message = $_POST['prenom_message'];
$message = $_POST['message'];

?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Confirmation envoie message</title>
</head>

<body>
    
    <p>Message envoyé par <?php echo($nom_message); ?> <?php echo($prenom_message); ?></p>
    <p><?php echo(strip_tags($message)); ?></p>

</body>
</html>


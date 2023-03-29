<<<<<<< Updated upstream
<?php

echo 'oui';

$username='gabin.calmet@ecl21.ec-lyon.fr';
$password='P@rking82';
$URL='https://download.data.grandlyon.com/ws/rdata/pvo_patrimoine_voirie.pvoparkingtr/all.json?maxfeatures=-1&start=1';

// instantiate a new cUrl object
$ch = curl_init();

// Everything is an option with PHPCurl !
curl_setopt($ch, CURLOPT_URL,$URL);

// set RETURNTRANSFER to true to be able to handle the result
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);

// set this option for enabling Basic Auth HTTP rules
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

// the previous setting will help here to encode the username/password into the correct format
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");

// and lift off...
$result=curl_exec ($ch);

echo ($result);

?>
=======
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/resultat_recherche.css">
    <title>Recherche</title>
</head>

<body>
    <!--  Header  -->
    <?php include('includes/header.php'); ?>

    <!-- Corps de la page -->
    <div class = "page">
        <?php

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "https://distanceto.p.rapidapi.com/get?route=%20%5B%7B%5C%22t%5C%22%3A%5C%22TXL%5C%22%7D%2C%7B%5C%22t%5C%22%3A%5C%22Hamburg%5C%22%7D%5D&car=true",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => [
        "x-rapidapi-host: distanceto.p.rapidapi.com",
        "x-rapidapi-key: 7336b43fcbmshb58a0d528c47eb5p17abbdjsn475d0f747644"
    ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
}

print($response);

?>
</div>


<!-- Footer --> 
<?php include('includes/footer.php'); ?>

</body>
</html>
>>>>>>> Stashed changes

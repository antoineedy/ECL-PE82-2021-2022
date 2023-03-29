<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Algorithme</title>
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/algorithme.css">
</head>

<body>

<?php

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

// then handle the result the way you like

$key ='AIzaSyAfCqIGtxkkRB6Vk74E0KmXUQm0Wla31EM';

$parsed_json = json_decode($result);

$all_p=[];

foreach($parsed_json->{'values'} as $p) : 
    $nom = $p->{'nom'};
    $gestionnaire = $p->{'gestionnaire'};
    $capa_moto = $p->{'capacitemoto'};
    $capa_velo = $p->{'capacitevelo'};
    $capa_pmr = $p->{'capacitepmr'};
    $capa_voiture = $p->{'capacitevoiture'};
    $etat = $p->{'etat'};

    $json2 = file_get_contents('../datas/Parkings.json');
    $parsed_json2 = json_decode($json2);
    foreach($parsed_json2 as $p2) :
        if ($p2->nom == $nom)
        {
            $longitude = $p2->{'long'};
            $latitude = $p2->{'lat'};
        }
    endforeach;

    $lieu = str_replace(" ", "%", $_GET['lieu']);

    $lien ='https://maps.googleapis.com/maps/api/distancematrix/json?departure_time=' . 'now' . '&destinations=' . $lieu . '&origins=' . $latitude . '%2C' . $longitude . '&mode=walking' . '&key=' . $key;
    $json1 = file_get_contents($lien);
    $parsed_json1 = json_decode($json1);
    foreach($parsed_json1->{'rows'} as $p1) : 
        $duration = $p1->{'elements'}[0]->{'duration'}->{'value'};
        $distance = $p1->{'elements'}[0]->{'distance'}->{'text'};
        $_SESSION['duration']=$duration;
        $_SESSION['distance']=$distance;
    endforeach;


    if ($_GET['pmr'] == 1 and $capa_pmr == 0)
    {
    }
    elseif ($_GET['moto'] == 1 and $capa_moto == 0)
    {
    }
    elseif ($_GET['velo'] == 1 and $capa_velo == 0)
    {
    }
    elseif ($etat == 'DONNEES INDISPONIBLES' or $etat==null)
    {
    }
    else
    {
        $nb = explode(' ', $etat, 2);
        $nb=(int) $nb[0]; 
        $score_places = (1-((10000-$nb)/10000) + (1-((100-$capa_pmr)/100))*$_GET['pmr'] + (1-((100-$capa_moto)/100))*$_GET['moto'] + (1-((100-$capa_velo)/100))*$_GET['velo'])/(1+$_GET['pmr']+$_GET['moto']+$_GET['velo']);
        $score_duration = (15000-$duration)/15000;
        $score = ($score_places + 7*$score_duration)*100-600;
        $one_p = [$nom,$gestionnaire,$nb, $capa_voiture, $capa_pmr, $capa_moto, $capa_velo, $score, $distance, $duration, $longitude, $latitude];
        $L[] = $one_p;
    }

endforeach;
$taille = count($L);
for($i = 0; $i < $taille; $i++)
{
    for($j = $taille-1; $j >= $i; $j--)
    {
      if($L[$j+1][7]> $L[$j][7])
      {
          $temp = $L[$j+1];
          $L[$j+1] = $L[$j];
          $L[$j] = $temp;
      }
  }
}

$lien2 = 'https://maps.googleapis.com/maps/api/geocode/json?address=' . $lieu . '&key=AIzaSyAfCqIGtxkkRB6Vk74E0KmXUQm0Wla31EM';

$json3 = file_get_contents($lien2);
$parsed_json3 = json_decode($json3);
foreach($parsed_json3->{'results'} as $p3) : 
$lat_d = $p3->{'geometry'}->{'location'}->{'lat'};
$long_d = $p3->{'geometry'}->{'location'}->{'lng'};
$_SESSION['lat_d']=$lat_d;
$_SESSION['long_d']=$long_d;
endforeach;

$_SESSION['L']=$L;

echo "<script type='text/javascript'>document.location.replace('resultat_recherche.php');</script>"; // 

?>


</body>
</html>
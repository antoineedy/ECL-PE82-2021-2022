<?php session_start(); ?>

<html lang="en">
<head>
<<<<<<< Updated upstream
  <meta charset="UTF-8">
  <link rel="stylesheet" href="styles/main.css">
  <link rel="stylesheet" href="styles/resultat_recherche.css">
  <title>Recherche</title>
=======
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/resultat_recherche.css">
    <title>Recherche</title>
>>>>>>> Stashed changes
</head>

<body>
  <!--  Header  -->
  <?php include('includes/header.php'); ?>

<<<<<<< Updated upstream
  <!-- Corps de la page -->
  <div class = "page">
    <!-- Présentation des parking -->
    <div class="allp">
      <?php 
=======
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

    <!-- Corps de la page -->
    <div class = "page">
        <!-- Présentation des parking -->
        <div class="allp">
            <?php 
>>>>>>> Stashed changes

      $L=$_SESSION['L'];
      $max = 10;
      if (count($L) < 10){
        $max = count($L)-1;
      }
      ?>
      <!-- Il faudra ajouter des conditions pour afficher les parkings qui conviennent à la recherche -->
      <?php for ($i = 0; $i <= $max; $i++) {
        $minute = floor(intval($L[$i][9])/60);
        $seconde = $L[$i][9] % 60;
        ?>

<<<<<<< Updated upstream
        <div class = "parking">
          <div class="tete">
            <div id="texte">
              <p id="name"><?php echo($L[$i][0])?></p>
              <p id="name2"><?php echo ('situé à '); echo($L[$i][8]); echo(' et accessible en '); echo($minute); echo('min'); echo($seconde); echo('s à pied');?></p>
            </div>
            <div>
              <a href=<?php echo("'https://www.google.fr/maps/dir//" . $L[$i][11] . ',' . $L[$i][10] . "'" ) ?> target="_blank">
                <img id="destination" src="images/auto.png"></a>
              </div>
            </div>
            <div  id="info">
            </br>
          </br>
          <p>Capacité : <?php echo($L[$i][3])?> places</br>
            Places libres: <?php echo($L[$i][2])?> places <i>(<?php echo(intval(($L[$i][2]/$L[$i][3])*100)) ?>% de sa capacité)</i></br>
            Places PMR : <?php echo($L[$i][4])?> places</br>
            Places moto : <?php echo($L[$i][5])?> places</br>
            Places velo : <?php echo($L[$i][6])?> places 
            <div id='score'> <i> (score : <?php echo(floor($L[$i][7]))?>)</i>
            </div></p>
          </div>
        </div>
=======
                <div class = "parking">
                    <div class="tete">
                        <p id="name"><?php echo($L[$i][0])?></p>
                        <p>à 1km</p>
                    </div>
                    <div  id="info">
                    </br>
                </br>
                <p>Capacité : <?php echo($L[$i][3])?> places</br>
                    Places libres: <?php echo($L[$i][2])?> places <i>(<?php echo(intval(($L[$i][2]/$L[$i][3])*100)) ?>% de sa capacité)</i></br>
                    Places PMR : <?php echo($L[$i][4])?> places</br>
                    Places moto : <?php echo($L[$i][5])?> places</br>
                    Places velo : <?php echo($L[$i][6])?> places
                    <div id='score'> <i> (score : <?php echo($L[$i][7])?>)</i></div></p>
                </div>
            </div>

        <?php } ?>
    </div>

    <!-- Carte avec les parkings les mieux notés --> 
    <section id="section_map">
                <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d89076.98064171837!2d4.765090126953182!3d45.758049072833806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea516ae88797%3A0x408ab2ae4bb21f0!2sLyon!5e0!3m2!1sfr!2sfr!4v1645655204511!5m2!1sfr!2sfr" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>
</div>
>>>>>>> Stashed changes

      <?php } ?>
    </div>

<<<<<<< Updated upstream
    <script type="module">
      let map;

      function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
          center: new google.maps.LatLng('<?php echo $_SESSION['lat_d'];?>', '<?php echo $_SESSION['long_d'];?>'),
          zoom: 15,
        });

        const icon = {
    url: "images/parking2.png", // url
    scaledSize: new google.maps.Size(30, 30), // scaled size
  };

  const icon2 = {
    url: "images/pin.png", // url
    scaledSize: new google.maps.Size(40, 40), // scaled size
  };



  const features = [
  {
    position: new google.maps.LatLng('<?php echo $L[0][11];?>', '<?php echo $L[0][10];?>'),
    type: "parking",
  },
  {
    position: new google.maps.LatLng('<?php echo $L[1][11];?>', '<?php echo $L[1][10];?>'),
    type: "parking",
  },
  {
    position: new google.maps.LatLng('<?php echo $L[2][11];?>', '<?php echo $L[2][10];?>'),
    type: "parking",
  },
  {
    position: new google.maps.LatLng('<?php echo $L[3][11];?>', '<?php echo $L[3][10];?>'),
    type: "parking",
  },
  {
    position: new google.maps.LatLng('<?php echo $L[4][11];?>', '<?php echo $L[4][10];?>'),
    type: "parking",
  },
  {
    position: new google.maps.LatLng('<?php echo $L[5][11];?>', '<?php echo $L[5][10];?>'),
    type: "parking",
  },
  {
    position: new google.maps.LatLng('<?php echo $L[6][11];?>', '<?php echo $L[6][10];?>'),
    type: "parking",
  },
  {
    position: new google.maps.LatLng('<?php echo $L[7][11];?>', '<?php echo $L[7][10];?>'),
    type: "parking",
  },
  {
    position: new google.maps.LatLng('<?php echo $L[8][11];?>', '<?php echo $L[8][10];?>'),
    type: "parking",
  },
  {
    position: new google.maps.LatLng('<?php echo $L[9][11];?>', '<?php echo $L[9][10];?>'),
    type: "parking",
  },
  {
    position: new google.maps.LatLng('<?php echo $_SESSION['lat_d'];?>', '<?php echo $_SESSION['long_d'];?>'),
    type: "parking"
  },
  ];

  const data = ['<?php echo $L[0][0];?>','<?php echo $L[1][0];?>','<?php echo $L[2][0];?>','<?php echo $L[3][0];?>','<?php echo $L[4][0];?>','<?php echo $L[5][0];?>', '<?php echo $L[6][0];?>', '<?php echo $L[7][0];?>', '<?php echo $L[8][0];?>', '<?php echo $L[9][0];?>'];

  var infowindow = [
  {
    vaar: new google.maps.InfoWindow({content: data[0]})
  },
  {
    vaar: new google.maps.InfoWindow({content: data[1]})
  },
  {
    vaar: new google.maps.InfoWindow({content: data[2]})
  },
  {
    vaar: new google.maps.InfoWindow({content: data[3]})
  },
  {
    vaar: new google.maps.InfoWindow({content: data[4]})
  },
  {
    vaar: new google.maps.InfoWindow({content: data[5]})
  },
  {
    vaar: new google.maps.InfoWindow({content: data[6]})
  },
  {
    vaar: new google.maps.InfoWindow({content: data[7]})
  },
  {
    vaar: new google.maps.InfoWindow({content: data[8]})
  },
  {
    vaar: new google.maps.InfoWindow({content: data[9]})
  },
  {
    vaar: new google.maps.InfoWindow({content: "Votre destination"})
  },
  ];

  const marker = new google.maps.Marker({
    position: features[10].position,
    icon: icon2,
    map: map,
  });
  google.maps.event.addListener(marker, 'click', function() {
    infowindow[10].vaar.open(map,marker);
  });

  // Create markers.
  for (let i = 0; i < features.length-1; i++) {
    const marker = new google.maps.Marker({
      position: features[i].position,
      icon: icon,
      map: map,
    });
    google.maps.event.addListener(marker, 'click', function() {
      infowindow[i].vaar.open(map,marker);
    });
  }
}

window.initMap = initMap;
</script>
<div id="map"></div>

    <!-- 
     The `defer` attribute causes the callback to execute after the full HTML
     document has been parsed. For non-blocking uses, avoiding race conditions,
     and consistent behavior across browsers, consider loading using Promises
     with https://www.npmjs.com/package/@googlemaps/js-api-loader.
   -->
   <script
   src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAfCqIGtxkkRB6Vk74E0KmXUQm0Wla31EM&callback=initMap&v=weekly"
   defer
   ></script>
 </div>


 <!-- Footer --> 
 <?php include('includes/footer.php'); ?>

=======
<!-- Footer --> 
<?php include('includes/footer.php'); ?>

>>>>>>> Stashed changes
</body>
</html>
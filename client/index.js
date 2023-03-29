var msg='<?php echo $message;?>';
alert(msg);

let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: new google.maps.LatLng(-33.91722, 151.23064),
    zoom: 16,
  });

  const icon = {
    url: "images/parking2.png", // url
    scaledSize: new google.maps.Size(50, 50), // scaled size
    };

  const features = [
    {
      position: new google.maps.LatLng(-33.91721, 151.2263),
      type: "parking",
      title: "salut"
    },
  ];

  // Create markers.
  for (let i = 0; i < features.length; i++) {
    var data = "ahlalala";
    var infowindow = new google.maps.InfoWindow({
      content: data,
    });
    const marker = new google.maps.Marker({
      position: features[i].position,
      icon: icon,
      map: map,
    });
    google.maps.event.addListener(marker, 'click', function() {
      infowindow.open(map,marker);
    });
  }
}

window.initMap = initMap;
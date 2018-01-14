<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Map</title>

        <!-- Styles -->
        <style>
          /* Always set the map height explicitly to define the size of the div
           * element that contains the map. */
          #map {
            height: 100%;
          }
          #hover {
            z-index: 10;
            position: absolute;
            top: 50px;
            left: 50px;
            width: 100px;
            height: 100px;
            border: 1px solid red;
            background: orange;
          }
          /* Optional: Makes the sample page fill the window. */
          html, body {
            height: 100%;
            margin: 0;
            padding: 0;
          }
        </style>
    </head>
    <body>
        <div id="app"></div>
        <div id="map"></div>
        <div id="hover"></div>
        <script>
          var map;
          var cities = [
            {
                title: "Феодосия",
                center: {lat: 45.0472, lng: 35.3929},
                area: 42.29
            },
            {
                title: "Троицк (Москва)",
                center: {lat: 55.467, lng: 37.3},
                area: 16.3
            },
            {
                title: "Москва",
                center: {lat: 55.75583, lng: 37.61778},
                area: 2561.5
            },
            {
                title: "Байкал",
                center: {lat: 53.2167, lng: 107.75},
                area: 31722
            },
            {
                title: "Охотское море",
                center: {lat: 54.26861, lng: 148.55722},
                area: 1603000
            },
            {
                title: "Симферополь",
                center: {lat: 44.95719, lng: 34.11079},
                area: 107.41
            },
            {
                title: "Берингово море",
                center: {lat: 60.04278, lng: -178.8575},
                area: 2315000
            },
            {
                title: "Остров Врангеля",
                center: {lat: 71.233, lng: -179.4},
                area: 7670
            },
            {
                title: "Азовское море",
                center: {lat: 46.085, lng: 36.529},
                area: 39000
            },
            {
                title: "Новосибирск",
                center: {lat: 55.01667, lng: 82.91667},
                area: 506
            },
          ];

          function initMap() {

            map = new google.maps.Map(document.getElementById('map'), {
              center: {lat: 45, lng: 34.00},
              zoom: 9,
              mapTypeId: 'terrain',
              styles: [
                {
                    elementType: 'labels',
                    stylers: [{visibility: 'off'}]
                }
              ]
            });

for (var i = 0; i < cities.length; i++) {
    cities[i].radius = 1100 * Math.sqrt(cities[i].area / Math.PI);
            var circle = new google.maps.Circle({
                center: cities[i].center,
                radius: cities[i].radius,
                strokeColor: "#E16D65",
                strokeOpacity: 1,
                strokeWeight: 0,
                map: map,
                fillColor: "#E16D65",
                fillOpacity: 0.25
            });
}

            circle.addListener('click', function() {
                map.setCenter({lat: 59.5617, lng: 150.855});
            });

    var rMin = 0, rMax = cities[i - 1].radius;
    setInterval(function() {
        var radius = circle.getRadius();

        if (radius > rMax) {
            radius = 0;
        }
        var opacity = (cities[i - 1].radius - radius) / cities[i - 1].radius;
        circle.setRadius(radius + cities[i - 1].radius / 100);
        circle.setOptions({fillOpacity: opacity});
    }, 50);
          }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDmDu68DUYLotbkCF62wDTIJy-d8QgccDQ&callback=initMap"
        async defer></script>
        <script src="js/app.js"></script>
    </body>
</html>

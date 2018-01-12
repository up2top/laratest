<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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
        <div id="map"></div>
        <div id="hover"></div>
        <script>
          var map;
          var cities = [
            @foreach ($locations as $location)
                {
                    title: "{{ $location->title }}",
                    center: {lat: {{ $location->lat }}, lng: {{ $location->lon }}},
                    area: {{ $location->area }}
                },
            @endforeach
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
    </body>
</html>
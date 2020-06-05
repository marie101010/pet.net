<?php
session_start();

require "../src/bootstrap.php";
require "../views/dropdownlist.php";

render('header',['title' => 'Où est-il?']);
//render ('dropdownlist',['url'=> '../public/geoloc.php<?isset($url);
?>
<nav>
    <div class="container">
        <a href="../public/home.php"><img src="../public/Pictures/logoO.png" width="64px" height="69px" alt="logo pattes"></a>
    </div>
</nav>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Add a GeoJSON line</title>
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />
<script src="https://api.mapbox.com/mapbox-gl-js/v1.10.1/mapbox-gl.js"></script>
<link href="https://api.mapbox.com/mapbox-gl-js/v1.10.1/mapbox-gl.css" rel="stylesheet" />
<style>
	body { margin: 0; padding: 0; }
    #map { position: absolute; top: 0; bottom: 0; width: 100%; 
    margin: auto;
    display:block;}
</style>
</head>
<body>
<div id="map" style='width: 400px; height: 300px;' ></div>
<script>
	mapboxgl.accessToken = 'pk.eyJ1IjoiZGVkZTQyIiwiYSI6ImNrYjB4OWd3OTBjZWszMHFqeTJkMWttdG8ifQ.00oebBb95AZLge0RJnnWeg';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [6.187410, 49.086275],
        zoom: 15
    });

    map.on('load', function() {
        map.addSource('route', {
            'type': 'geojson',
            'data': {
                'type': 'Feature',
                'properties': {},
                'geometry': {
                    'type': 'LineString',
                    'coordinates': [
                        [6.184345, 49.088638],
                        [6.186153, 49.087240],
                        [6.186178, 49.090275,]
                    ]
                }
            }
        });
        map.addLayer({
            'id': 'route',
            'type': 'line',
            'source': 'route',
            'layout': {
                'line-join': 'round',
                'line-cap': 'round'
            },
            'paint': {
                'line-color': '#888',
                'line-width': 8
            }
        });
    });
</script>


<?php render('footer'); ?>
<?php
session_start();

require "../src/bootstrap.php";
//require "../views/dropdownlist.php";
require '../manager/PetManager.php';
require '../src/class/pet.php';

render('header',['title' => 'Où est-il?']);
//render ('dropdownlist',['url'=> '../public/geoloc.php<?isset($url);



$pet=new PetManager();
$pets=$pet->selectAllName($_SESSION['id_user']); 

$nom_p=$_GET['nom'];

$animal=new PetManager();
$animaux=$animal->selectOnePet($nom_p);

?>


<script src="https://api.mapbox.com/mapbox-gl-js/v1.10.1/mapbox-gl.js"></script>
<link href="https://api.mapbox.com/mapbox-gl-js/v1.10.1/mapbox-gl.css" rel="stylesheet" />
<style>
    #map { 
    margin: auto;
    display:block;}
</style>
</head>
<body>
<div class="container" >
    <div class="row">
        <div class="col-sm-6">
            <a href="../public/home.php"><img src="../public/Pictures/logoO.png" width="64px" height="69px" alt="logo pattes"></a></div>
        <div class="col-sm-6">    
            <?php foreach ($pets as $key=>$value){?>
            <a class="dropdown-item" href="../public/geoloc.php?nom=<?=implode($value) ?>" > <?= $value=implode($value) ?> </a>
            <?php } ?>
        </div>
    </div>
</div>
<div id="map" style='width: 400px; height: 300px;' >
</div>
<script>
	mapboxgl.accessToken = 'pk.eyJ1IjoiZGVkZTQyIiwiYSI6ImNrYjB4OWd3OTBjZWszMHFqeTJkMWttdG8ifQ.00oebBb95AZLge0RJnnWeg';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [6.190703, 49.082816],
        zoom: 14
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
                        [6.190703, 49.082816],
                        [6.187284, 49.086284],
                        [6.187010, 49.087647],
                        [6.186018, 49.089158],
                        [6.187558, 49.089046],
                        [6.188937, 49.089713],
                        [6.190949, 49.089790],
                        [6.191942, 49.090752],
                        [6.192684, 49.090244],
                        [6.191967, 49.089439],
                        [6.191299, 49.088595],
                        [6.189786, 49.088430],
                        [6.188711, 49.087988],
                        [6.187600, 49.087107],
                        [6.190703, 49.082816]
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
                'line-color': '#138496',
                'line-width': 6
            }
        });
    });
</script>

<div class="container" style="text-align: center;">
    <?php
/*  
    if($animaux['espece'] == 'chat'){
        echo $animaux['nom_p'].  ' se situe dans sa chambre';
    }elseif{ */
        echo 'Voici la dernière balade de  '. $animaux['nom_p'].' à 17h11';
    //}
    ?>
</div>

<?php render('footer'); ?>
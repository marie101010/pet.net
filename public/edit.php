<?php
require "../src/bootstrap.php";


$pdo = get_pdo();
$errors = [];

render('header',['title' => 'Modifier ses informations']);?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- couleur orange/violet-->
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/united/bootstrap.min.css" rel="stylesheet" integrity="sha384-bzjLLgZOhgXbSvSc5A9LWWo/mSIYf7U7nFbmYIB2Lgmuiw3vKGJuu+abKoaTx4W6" crossorigin="anonymous">
    <link rel="stylesheet" href="./pet_net/public/css/style.css">
    <title><?= isset($title) ? h($title): 'Pet.net!'; ?></title>
</head>
<body>

<h1>Modifier les informations</h1>

    <?php render('footer'); ?>




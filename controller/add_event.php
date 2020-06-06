<?php

session_start();

require ('../manager/EventsManager.php');

$nom_p=($_POST['nom_p']);
$debut_rdv=($_POST['debut_rdv']);
$start_h=($_POST['start_h']);

$event = new EventsManager();
$fin_rdv = $event->finRdv($start_h);
$events=$event->addEvent($nom_p, $debut_rdv, $start_h,$fin_rdv);
header ('Location: ../public/home.php?success=1');


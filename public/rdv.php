<?php
require "../src/bootstrap.php";

$pdo = get_pdo();
$errors = [];

render('header',['title' => 'Rendez-vous']);

?>

<div class="container">
    <style>
        .button_validate{
            width: 82px;
            height: 38px;            
            display: flex;
            justify-content: flex-end;
            align-content: flex-end;
            padding: 0px 5px;
            border: 1px solid #c8c8c8;
            border-radius: 4px;
            background-color: #17a2b8;

            font-family: Roboto;
            font-size: 16px;
            color: #ffffff;
            text-decoration: none solid rgb(255, 255, 255);
            text-align: center;


        }
    </style>
<div class="container">
    <form action="../controller/add_event.php" method="post">
        <p><strong>Je souhaite prendre un rendez-vous de:</strong></p>
            <div>
                <input type="radio" id="15" name="fin_rdv" value="15"><label for="15">15 minutes</label>
            </div>
            <div>
                <input type="radio" id="30" name="fin_rdv" value="30"><label for="30">30 minutes</label>
            </div>
            <br>
        <p><strong>Avec:</strong></p>
            <div>
                <input type="checkbox" id="" name="id_p" value="id_p"><label for="2"> Bosco</label>
            </div>
            <div>
                <input type="checkbox" id="" name="id_p" value="id_p"><label for="1"> Monsieur Moustache</label>
            </div>
            <br>
            <label for="date"><strong>Date:</strong></label>
                <input id="debut_rdv" type="date" required class="form-control" name="debut_rdv" value="">
            <br>
            <label for="start"><strong>Heure de début:</strong></label>
                <input id="start" type="time" required class="form-control" name="start" placeholder="HH:mm" value="">
                <br>
            <button class="button_validate" type="submit" id="envoi">Valider</button>
            <br>

    </form>
</div>



<?php render('footer'); ?>
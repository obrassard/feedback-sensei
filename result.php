<?php
/**
 * result.php
 * Created by Olivier Brassard on 06-03-18.
 * Copyright © 2018 Olivier Brassard. All rights reserved.
 */
require_once "dbfunctions.php";
$result = validateGet("r");

if(!$result){
    header('Location: index.php');
    die();
}

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Feedback Sensei</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- FontAwesome -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
        <!-- Custom styles  -->
        <link href="style.css" rel="stylesheet">

    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="text-center mb-4" id="result">
                        <?php

                            if($result == "failed"){ ?>
                                <i class="far fa-times-circle result-icon red"></i>
                                <h1 class="">Oh non !</h1>
                                <h3>Une erreur est survenue lors de l'envoi de vos commentaire.</h3>
                                <br>
                                <a class="btn btn-primary btn-lg" href="index.php">Réésayer</a>
                            <?php } else { ?>
                                <i class="far fa-check-circle result-icon green"></i>
                                <h1 class="">Merci !</h1>
                                <h3>Vos commentaires ont été envoyés avec succès.</h3>
                                <br>
                                <a class="btn btn-primary btn-lg" href="index.php"><i class="fas fa-bug"></i>&nbsp; Envoyer un autre commentaire</a>
                            <?php } ?>
                        <br>

                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>

    </body>

</html>



<?php $appname = 'Netplay'?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Feedback Sensei</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- FontAwesome -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
        <!-- Custom styles  -->
        <link href="style/global-theme.css" rel="stylesheet">

    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="jumbotron text-center">
                        <i class="fas fa-bug icon-app"></i>
                        <h1 class="display-5">Feedback Sensei</h1>
                        <div id="pan-1">
                            <div class="row">
                                <div class="col-md-8 offset-md-2">
                                    <p class="lead">Feedback Sensei vous permet de signaler des problèmes et de nous faire part de
                                        vos commentaires dans le but d'améliorer nos applications.</p>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col-md-8 offset-md-2">
                                    <button id="btn-start" class="btn btn-primary btn-lg">Commencer</button>
                                </div>
                            </div>
                        </div>
                        <div id="pan-2" style="display: none">
                            <div class="row text-center">
                                <div class="col-md-8 offset-md-2">
                                    <p class="lead">Veuillez choisir l'application avec laquelle vous rencontrez un problème ou sur laquelle vous souhaitez partager vos commentaire </p>
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>Applications gérées par Feedback Sensei</strong>
                                        </div>
                                        <ul class="list-group list-group-flush clickable">
                                            <li id="netplay" class="list-group-item">Netplay by SpriEsport</li>
                                            <li id="" class="list-group-item">Roberto : votre assistant culinaire</li>
                                            <li id="" class="list-group-item">PainlessADO</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-muted text-center">&copy; 2018 - Olivier Brassard<br></p>
                    <br>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"   integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   crossorigin="anonymous"></script>
        <script src="js/home.js"></script>
    </body>
</html>

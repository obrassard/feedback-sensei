<?php $appname = 'Netplay'?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Feedback Sensei : <?echo $appname?></title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- FontAwesome -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
        <!-- Custom styles  -->
        <link href="style.css" rel="stylesheet">

    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="text-center mb-4">
                        <i class="fas fa-bug icon-app"></i>
                        <h1 class="h3 mb-3 font-weight-normal">Feedback Sensei</h1>
                        <p class="lead">Merci de nous aider à améliorer <?echo $appname?>,<br>vos commentaires sont importants pour nous!  </p>
                        <h5><span class="badge badge-warning">Application : <?echo $appname?></span></h5>
                    </div>
                    <hr>
                    <form class="form-signin" action="feedback.php" method="post">
                        <input type="hidden" name="app" value="<?echo $appname?>">
                        <div class="form-label-group">
                            <label for="subject">S'il vous plait décrivez-nous votre problème</label>
                            <textarea id="subject" name="subject" class="form-control" placeholder="Description du problème" required autofocus></textarea>
                        </div>
                        <div class="form-label-group">
                            <label for="type">De quel genre de problème s'agit-il ?</label>
                            <select id="type" name="type" class="form-control" required>
                                <option value="">Choisir un type de problème</option>
                                <option value="Display / UI">Problème d'affichage</option>
                                <option value="Exception / Crash">L'application à planté</option>
                                <option value="Freeze">L'application gèle ou est plus lente que prévu</option>
                                <option value="Server connexion error / sql">L'application ne démarre pas correctement</option>
                                <option value="App logic problem">L'application ne fonctionne pas comme elle le devrait</option>
                                <option value="Other">Autre</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-label-group">
                            <label for="steps">Décrivez-nous du mieux possible les étapes nécéssaire à la reproduction du problème</label>
                            <textarea id="steps" name="steps" class="form-control" placeholder="Étapes pour reproduire le problème" required></textarea>
                        </div>

                        <div class="form-label-group">
                            <label for="version">Dans quelle version de l'application avez-vous rencontré ce problème&nbsp;?</label>
                            <select id="version" name="version" class="form-control" required>
                                <option value="v1.0.0-rc.4">Version 1.0.0 Release Candidate</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-label-group">
                            <label for="form">Dans quel formulaire de l'application avez-vous rencontré le problème&nbsp;?</label>
                            <select id="form" name="form" class="form-control" required>
                                <option value="">Choisir une option</option>
                                <option value="FrmAdmin">Formulaire d'administration principal</option>
                                <option value="FrmAdminModifierMotDePasse">Modification de mot de passe</option>
                                <option value="FrmAjouterCompte">Ajout de nouveau compte de jeu</option>
                                <option value="FrmAjouterJeu">Ajout de nouveau jeu</option>
                                <option value="FrmAjouterTypeAbonnement">Ajout de nouveau type d'abonnement</option>
                                <option value="FrmConnexion">Formulaire de connexion</option>
                                <option value="FrmGestionDemandeJeu">Gestion des demandes de jeux</option>
                                <option value="FrmDetailDemandeJeu">Détail des demandes de jeux</option>
                                <option value="FrmDetailJeuAdmin">Détail d'un jeu (admin) </option>
                                <option value="FrmDetailJeuUser">Fromulaire de détail d'un jeu et de location (joueur)</option>
                                <option value="FrmGestionJeux">Gestion et liste des jeux (admin)</option>
                                <option value="FrmJeuParTypeAbo">Selection des jeux inclus dans un type d'abonnement</option>
                                <option value="FrmModifierCompte">Modification de compte de jeu</option>
                                <option value="FrmModifierJeu">Modification des détails d'un jeu</option>
                                <option value="FrmModifierSettings">Modification des paramètre de l'app</option>
                                <option value="FrmModifierTypesAbonnement">Modification des type d'abonnement</option>
                                <option value="FrmModifierUtilisateur">Modification des détails d'un utilisateur</option>
                                <option value="FrmReinitialiserMDP">Réinitialisation d'un mot de passe utilisateur</option>
                                <option value="FrmTypeAbonnement">Gestion et liste des type d'abonnement</option>
                                <option value="FrmUtilisateur">Gestion et liste des utilisateurs</option>
                                <option value="FrmUtilisateurConnecte">Liste des utilisateurs connectés</option>
                                <option value="FrmVoirMotDePasse">Affichage des identifiants de connexion durant une location</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-label-group">
                            <label for="os">Quelle est la version de votre système d'exploitation</label>
                            <select id="os" name="os" class="form-control" required>
                                <option value="">Choisir une option</option>
                                <option value="Windows 10">Windows 10</option>
                                <option value="Windows 8.1">Windows 8.1</option>
                                <option value="Windows 8">Windows 8</option>
                                <option value="Windows 7">Windows 7</option>
                                <option value="Windows Vista">Windows Vista</option>
                                <option value="Windows XP">Windows XP</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-label-group">
                            <label for="first-time">Est-ce la première fois que vous rencontrez ce problème ?</label>
                            <select id="first-time" name="first-time" class="form-control" required>
                                <option value="">Choisir une option</option>
                                <option value="Oui">Oui</option>
                                <option value="Non">Non</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-label-group">
                            <label for="expected-action">Si applicable, quel est selon vous le comportement attendu?</label>
                            <textarea id="expected-action" name="expected-action" class="form-control" placeholder="Comportement attendu de l'application"></textarea>
                        </div>
                        <div class="form-label-group">
                            <label for="protractor">Il serait apprécié, si vous le désirez, de joindre votre adresse email
                                à ce commentaire afin que nous puissions vous recontacter si nécéssaire.</label>
                            <input type="email" id="protractor" name="protractor" class="form-control" placeholder="email@internet.com">
                        </div>
                        <button class="btn btn-primary btn-block" type="submit">Soumettre mon commentaire</button>
                        <p class="mt-4 mb-3 text-muted text-center">&copy; 2018 - Olivier Brassard<br></p>
                        <br>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>

    </body>
</html>


<?php
/**
* feedback.php
* Created by Olivier Brassard on 21-12-17.
* Copyright © 2017 Olivier Brassard. All rights reserved.
*/

require_once "dbfunctions.php";

$from = 'feedbacksensei@obrassard.ca';


$app = validatePost('app');
$subject = validatePost('subject');
$type = validatePost('type');
$steps = validatePost('steps');
$version = validatePost('version');
$form = validatePost('form');
$os = validatePost('os');
$first = validatePost('first-time');
$expect = validatePost('expected-action');
$prtr = validatePost('protractor');

if ( !$app || !$subject || !$type || !$steps || !$version || !$form || !$os || !$first){
    header('Location: result.php?r=failed');
    die();
}

$subject = 'Nouveau commentaire : '.validatePost('app');

$messageBody = "<h4>Nouveau commentaire pour l'app $app</h4>
<h5>Details techniques</h5>
<strong>Envoyé le : </strong>".date('Y-m-d \à h:i:s').
"<br><strong>Application :</strong> $app
<br><strong>Version : </strong> $version
<br><strong>Système d'exploitation :</strong> $os
<br><strong>Formulaire :</strong> $form


<h5>Type de problème</h5>
<p>$type</p>

<h5>Details du problème</h5>
<p>$subject</p>

<h5>Étapes de reproduction du problème</h5>
<p>$steps</p>

<h5>Est-ce la première fois ?</h5>
<p>$steps</p>";

if ($expect){
    $messageBody = $messageBody."<h5>Comportement attendu</h5><p>$expect</p>";
}

if ($prtr){
    $messageBody = $messageBody."<h5>Rapporteur du problème</h5><p><a href='mailto:$expect'>$expect</a></p>";
}

$headers = "From: ".$from."\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

mail('brassard.oli@gmail.com',$subject,$messageBody,$headers);

header('Location: result.php?r=success');

?>
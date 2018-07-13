<?php
/**
* feedback.php
* Created by Olivier Brassard on 21-12-17.
* Copyright © 2017 Olivier Brassard. All rights reserved.
*/

require_once "dbfunctions.php";

$from = 'feedbacksensei@obrassard.ca';


$app = validatePost('app');
$sub = validatePost('subject');
$type = validatePost('type');
$steps = validatePost('steps');
$version = validatePost('version');
$form = validatePost('form');
$os = validatePost('os');
$first = validatePost('first-time');
$expect = validatePost('expected-action');
$prtr = validatePost('protractor');

if ( !$app || !$sub || !$type || !$steps || !$version || !$form || !$os || !$first){
    header('Location: result.php?r=failed');
    die();
}

$subject = 'Nouveau commentaire : '.validatePost('app');

$messageBody = "<strong>Nouveau commentaire pour l'app $app</strong><br><br>
<strong>Details techniques</strong><br>
<strong>Envoyé le : </strong>".date('Y-m-d \à h:i:s').
"<br><strong>Application :</strong> $app
<br><strong>Version : </strong> $version
<br><strong>Système d'exploitation :</strong> $os
<br><strong>Formulaire :</strong> $form
<br><strong>Type de problème :</strong> $type<br><br>


<strong>Details du problème</strong><br>
$sub<br><br>

<strong>Étapes de reproduction du problème</strong><br>
$steps
<br><br>

<strong>Est-ce la première fois ?</strong><br>
$first<br><br>";

if ($expect){
    $messageBody = $messageBody."<strong>Comportement attendu</strong><br>$expect<br><br>";
}

if ($prtr){
    $messageBody = $messageBody."<strong>Rapporteur du problème : </strong><a href='mailto:$prtr'>$prtr</a>";
}
$messageBody = $messageBody."<br><br>Envoyé par Feedback Sensei";
$headers = "From: ".$from."\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

mail('brassard.oli@gmail.com',$subject,$messageBody,$headers);
mail('christopher_st-pierre@outlook.com',$subject,$messageBody,$headers);

header('Location: result.php?r=success');

?>

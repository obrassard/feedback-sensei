<?php
/**
 * dbfunctions.php
 * Created by Olivier Brassard on 06-03-18.
 * Copyright © 2018 Olivier Brassard. All rights reserved.
 */

function connectDB(){
    try
    {
        //Modify thisr connection string for your database
        //You need the table "Emails" -> see 'model.sql'
        $bdd = new PDO('mysql:host=localhost;dbname=feedbacksensei;charset=utf8', 'root', 'root');
        $bdd -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $bdd;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}

function validatePost($field){
    if (isset($_POST[$field]) and $_POST[$field] != ""){
        $data = $_POST[$field];
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    else {
        return false;
    }
}

function validateGet($field)
{
    if (isset($_GET[$field]) and $_GET[$field] != "") {
        $data = $_GET[$field];
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    } else {
        return false;
    }
}

?>
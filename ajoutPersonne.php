<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 13/08/2018
 * Time: 10:18
 */
require 'Personne.php';
session_start();

// récupere les données mel form
$nom = htmlentities($_POST['nom']);
$mail = htmlentities($_POST['mail']);

// je crée l'objet

$personne = new Personne();
$personne->setEmail($mail);
$personne->setNom($nom);

// je l'ajoute dans la session

if (!isset($_SESSION['personnes'])) {
    $_SESSION['personnes'] = array();
}
if (!isset($_SESSION['personnes'][$personne->getEmail()])) {
    $_SESSION['personnes'][$personne->getEmail()] = $personne;
} else {
    $_SESSION['message'] = 'Vous etes déjà inscrit';
}

header('location:listeInscrits.php');
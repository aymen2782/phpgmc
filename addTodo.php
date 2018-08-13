<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 07/08/2018
 * Time: 10:41
 */


session_start();

$titre = $_POST['titre'];
$contenu = $_POST['contenu'];

// je teste l existance de la session

// si innexistante : message dd erreur et redirection vers index.php
if (!isset($_SESSION['todoListe'])) {

    $_SESSION['message']="Session innexistante !!!";
    $_SESSION['messageType']="alert alert-danger";
} else {
//sinon si existe
// si cle existe maj et message de maj et redirection vers index.php
    if (isset($_SESSION['todoListe'][$titre])) {
        $_SESSION['message']="$titre a été mis à jour avec succès :D";
        $_SESSION['messageType']="alert alert-success";
    } else {
        $_SESSION['message']="$titre a été ajouté avec succès :D";
        $_SESSION['messageType']="alert alert-success";
    }
    $_SESSION['todoListe'][$titre]=$contenu;

// sinon ajout et message d'ajout et redirection vers index.php
}

header("location:index.php");





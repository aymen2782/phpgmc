<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 13/08/2018
 * Time: 11:12
 */
require 'Personne.php';

session_start();
$personne = new Personne();
$personne->setEmail('as@as.as');
$personne->setNom('abc');

$personne1 = new Personne();
$personne1->setEmail('test@test.tes');
$personne1->setNom('test');

$tabs = array($personne,$personne1);

$_SESSION['tabs'] = $tabs;

foreach ($tabs as $obj) {
    echo $obj->showPersonne();
}
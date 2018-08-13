<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 08/08/2018
 * Time: 10:50
 */

include 'Personnage.php';

function tester($mesPersonnes) {
    foreach ($mesPersonnes as $personne) {
       echo get_class($personne);
        $personne->test();
    }
}

$tab = array(new Personnage(),new Personnage(),1);
tester($tab);
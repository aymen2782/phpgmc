<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 13/08/2018
 * Time: 10:36
 */
require 'Personne.php';
session_start();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
  if (isset($_SESSION['personnes']) ) {
      if(isset($_SESSION['message'])){
      ?>

      <div>
          <?=$_SESSION['message']  ?>
      </div>
          <?php
      }
     ?>
      Liste des inscrits :
      <ol>
          <?php foreach ($_SESSION['personnes'] as $personne) {
             // $myPersonne = unserialize($personne);
              ?>
              <li><?= $personne->showPersonne() ?></li>
          <?php } ?>
      </ol>
      <?php
  } else {
     ?>

      <h2> Aucune personne n'est inscrite à cet événement</h2>

      <?php
  }
?>
</body>
</html>

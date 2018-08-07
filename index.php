<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 07/08/2018
 * Time: 10:15
 */
//permet d ouvrir une sesion
session_start();

//je verifie si la session contient ma liste

if (!isset($_SESSION['todoListe'])) {
    $_SESSION['nom']="sellaouti";
    $_SESSION['prenom']="aymen";
    $_SESSION['todoListe'] = array(
        'lundi'=>'checkpoint',
        'mardi'=>'assessment',
        'mercredi'=>'sport',
    );
}
?>

<html>
<head>
    <title>Todo Liste</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body>

<?php if (isset($_SESSION['message'])) {?>
<div class="<?=$_SESSION['messageType'] ?>"><?=$_SESSION['message'] ?></div>
<?php
    unset($_SESSION['message']);
  }
?>


<ol class="list-group">
<!--    debut de la boucle-->
    <?php foreach ($_SESSION['todoListe'] as $titre=>$contenu) { ?>
    <li class="list-group-item">
        <!--    contenu de chaque iteration-->
         <?= $titre?> : <?= $contenu?>
    </li>
    <?php } ?>
</ol>
</body>
</html>

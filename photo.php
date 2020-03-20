<!DOCTYPE html>
<?php
session_start();
include_once("php/code.php");

$user = new Users;
$work = new Works;

$infos = $user->get_infos();
$allworks = $work->get_photoworks();

?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Hugo Pichard - Photo</title>
    <link rel="stylesheet" href="allprojects.css">
</head>
<body>


        <div class="projets">
        <?php foreach($infos as $w){?> 
            <a href="index.php">
                <div class="titre"><?php echo($w["prenom"]);?><br /><br/><?php echo($w["nom"]);?></div>
            </a>  
        <?php }
            ?>


                <?php foreach($allworks as $w){?>

                    <div class="photoproj"><?php $image = ($w["img"]); 
                        echo '<img src=' . $image . '>';?> 
                    </div>
                    <div class="titreproj"> <?php echo($w["title"]);?> </div>
                    <div class="descproj"> <?php echo($w["description"]);?> </div>

                <?php }
                ?>
        </div>
</html>
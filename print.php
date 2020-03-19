<!DOCTYPE html>
<?php
session_start();
include_once("php/code.php");

$work = new Works;

$allworks = $work->get_printworks();


?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Hugo Pichard - Print</title>
    <link rel="stylesheet" href="allprojects.css">
</head>
<body>
        <div class="projets">
            <a href="index.php">
                <div class="titre">Hugo<br />Pichard</div>
            </a> 

                <?php foreach($allworks as $w){?>

                    <div class="photoproj"></div>
                    <div class="titreproj"> <?php echo($w["title"]);?> </div>
                    <div class="descproj"> <?php echo($w["description"]);?> </div>

                <?php }
                ?>
        </div>
</html>
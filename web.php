<!DOCTYPE html>
<?php
session_start();
include_once("php/code.php");

$work = new Works;
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Hugo Pichard - Web</title>
    <link rel="stylesheet" href="allprojects.css">
</head>
<body>
        <div class="projets">
            <a href="index.php">
                <div class="titre">Hugo<br />Pichard</div>
            </a> 
                <br>
                <?php
                    $allworks = $work->get_webworks();
                    foreach($allworks as $w)
                    {
                        echo($w["title"]);
                        echo("|");
                        echo($w["description"]);
                    }

                ?>
        </div>
</html>
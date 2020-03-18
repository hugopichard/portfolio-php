<!DOCTYPE html>
<?php
session_start();
include_once("php/code.php");

$user = new Users;
$work = new Works;
?>
    <html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Hugo Pichard</title>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>


  <p>Bonjour <?php if(isset($_SESSION["account"]["username"]))
    {
        echo($_SESSION["account"]["username"]);
    }
    else
    {
        echo "NOT CONNECTED";
    }
        ?></p>

    <br>
        <div class="index">        
                <div class="titre">Hugo<br />Pichard</div>
            <a href="login.php">
                <div class="connexion">Connexion</div>
            </a>
            <a href="video.php">
                <div class="videocouv"></div>
                <div class="video">VIDEO</div>
            </a>
            <a href="web.php">
                <div class="webcouv"></div>
                <div class="web">WEB</div>
            </a>        
            <a href="print.php">
                <div class="printcouv"></div>
                <div class="print">PRINT</div>
            </a>
            <a href="photo.php">
                <div class="photocouv"></div>
                <div class="photo">PHOTO</div>
            </a>
                <div class="soustitre">Etudiant en deuxième année d’un Dut Multimédia et Internet (MMI, anciennement SRC) à l’IUT Bordeaux Montaigne.</div>
                <div data-layer="677ab2ee-2419-4154-9fb8-c35a54466ed1" class="downArrow"></div>
        </div>


    
    </body>
    </html>
            
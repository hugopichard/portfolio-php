<!DOCTYPE html>
<?php
session_start();
include_once("php/code.php");

$user = new Users;
if(isset($_SESSION["account"]["id"]))
{
    header('Location: /');
}
if(isset($_POST["submit"]))
{
    if($_POST["submit"] === "Connection")
{
    if($_POST['uname'] != NULL && $_POST['psw'] != NULL)
    {
        $user->connect($_POST["uname"], $_POST["psw"]);
    }
    else
    {
        echo("Remplis le formulaire");
    }
}
}
?>
    <html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Hugo Pichard - login</title>
        
        <link rel="stylesheet" href="login.css">
    </head>

    <body>
        <div class="login">
            <a href="index.php">
                <div class="titre">Hugo<br />Pichard</div>
            </a> 


            <div class="rectangle1">
                <div class="admin">ADMIN</div>
                <form action="login.php" method="post">
                    <div class="identifiantdiv">
                        <input type="text" name="uname" class="identifiant" placeholder="Identifiant" required>
                    </div>
                    <div class="motDePassediv">
                        <input type="password" name="psw" class="motDePasse" placeholder="Mot de passe" required>
                    </div>
                    <div class="connectiondiv">
                        <input type="submit" value="Connection" class="connection">
                    </div>
                </form>
            </div>


        </div>


    
    </body>
    </html>
            
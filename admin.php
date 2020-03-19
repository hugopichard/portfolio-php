<!DOCTYPE html>


<?php
include_once("php/code.php");

$work = new Works;


?>


    <html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Hugo Pichard - Admin</title>
        <link rel="stylesheet" href="admin.css">
    </head>

    <body>
        <div class="admin">

            <a href="index.php">
                <div class="titre"><br/></div>
            </a> 

            <a href="disconnect.php">
                <div class="deco">Deconnection</div>
            </a>


            <form method="post" action="admin.php">

                <label for="cat">Categorie</label><br />
                <select name="cat">
                       <option value="photo">Photo</option>
                       <option value="web">Web</option>
                       <option value="print">Print</option>
                       <option value="video">Video</option>             
                </select>
                <label for="titr"></label>
                    <input type="text" placeholder="Titre" class="addtitre" name="titr" required>
                <label for="desc"></label>
                    <input type="text" placeholder="Description" class="adddesc" name="desc" required>
                <label for="img"></label>
                    <input type="text" placeholder="Image link" class="addimg" name="img" required>
                    <button type="submit" name="submit" class="ajouter" value="ADD">Ajouter</button>
            </form>



    <?php 
    if(isset($_POST['submit'])){
        if($_POST['cat'] != NULL && $_POST['titr'] != NULL && $_POST['desc'] != NULL && $_POST['img'] != NULL)
        {
            $cat = ($_POST['cat']);
            $title = ($_POST['titr']);
            $description = ($_POST['desc']);
            $img = ($_POST['img']);

            $work->create($cat, $title, $description);
        }
    }   
    ?>

    </body>
    </html>
<?php
require("database.php");

class Users {
    function get_user($id)
    {
        global $db;

        $request = "SELECT * FROM Users WHERE id=$id";
        $resultat = $db->query($request);
        $user = $resultat->fetch();

        return($user);
    }

    function connect($username, $password)
    {
        global $db;
        echo($username);
        $request = "SELECT * FROM Users WHERE username=\"$username\"";
        $resultat = $db->query($request);
        $user = $resultat->fetch();

        if(password_verify($password, $user["password"]))
        {
            session_start();
            $_SESSION["account"] = [
                'id' => $user["id"],
                'username' => $user["username"]
            ];

            header('Location: admin.php');
        }
        else
        {
            echo("Impossible de se connecter");
        }
    }
}

class Works {
    function get_videoworks()
    {
        global $db;

        $request = "SELECT * FROM works WHERE cat='video'";
        $resultat = $db->query($request);
        $user = $resultat->fetchAll();

        return($user);
    }

        function get_printworks()
    {
        global $db;

        $request = "SELECT * FROM works WHERE cat='print'";
        $resultat = $db->query($request);
        $user = $resultat->fetchAll();

        return($user);
    }

        function get_webworks()
    {
        global $db;

        $request = "SELECT * FROM works WHERE cat='web'";
        $resultat = $db->query($request);
        $user = $resultat->fetchAll();

        return($user);
    }

        function get_photoworks()
    {
        global $db;

        $request = "SELECT * FROM works WHERE cat='photo'";
        $resultat = $db->query($request);
        $user = $resultat->fetchAll();

        return($user);
    }

    function create($title, $description)
    {
        global $db;

        $request = $db->prepare('INSERT INTO works (title, description) VALUES (?, ?)');
        $request->execute([$title, $description]);
    }

    function update($title, $description, $id)
    {
        global $db;

        $request = $db->prepare('UPDATE works SET title=?, description=? WHERE id=?');
        $request->execute([$title, $description, $id]);
    }

}
?>
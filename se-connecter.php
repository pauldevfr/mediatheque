<?php

session_start();
if (isset($_SESSION["habitant"])) {
    header("location: catalogue.php");
    exit;
}

if (!empty($_POST)) {
    if (
        isset($_POST["email"], $_POST["password"])
        && !empty($_POST["email"] && !empty($_POST["password"]))
    ) {
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            die("ce n'est pas un e-mail");
        }

        require_once "includes/connect.php";

        $sql = "SELECT * FROM `habitants` WHERE  `hab_email` = :email";

        $query = $db->prepare($sql);
        $query->bindValue(":email", $_POST["email"], PDO::PARAM_STR);
        $query->execute();

        $habitant = $query->fetch();

        if (!$habitant) {
            die("l'utilisateur et/ou le mot de passe n'existe pas");
        }

        if (!password_verify($_POST["password"], $habitant["hab_password"])) {
            die("l'utilisateur et/ou le mot de passe n'existe pas");
        }


        $_SESSION["habitant"] = [
            "id" => $habitant["id"],
            "prénom" => $habitant["hab_Fname"],
            "nom" => $habitant["hab_Lname"],
            "mail" => $habitant["hab_email"]
        ];

        header("location: catalogue.php");
    }
}


$title = "Se connecter";

include_once "includes/header.php";
include_once "includes/nav.php";
?>

<div class="container">
    <div class="row">
        <h1>Se connecter</h1>
    </div>
</div>
<div class="container">
    <form method="post">
        <div class="mb-3">
            <label for="inputEmailconnexion" class="form-label">Adresse E-mail</label>
            <input type="email" class="form-control" id="inputEmailconnexion" name="email">
        </div>
        <div class="mb-3">
            <label for="inputPasswordconnexion" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="inputPasswordconnexion" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Se connecter</button>
    </form>
</div>


<?php
include_once "includes/footer.php";

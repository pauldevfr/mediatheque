<?php

//on verifie sir le formulaire a etais envoyer

if (!empty($_POST)) {
    if (
        isset($_POST["Lname"], $_POST["Fname"], $_POST["E-mail"], $_POST["BirthDate"], $_POST["Adresse"], $_POST["CodePostal"], $_POST["Ville"], $_POST["password"])
        && !empty($_POST["Lname"]) && !empty($_POST["Fname"]) && !empty($_POST["E-mail"]) && !empty($_POST["BirthDate"]) && !empty($_POST["Adresse"]) && !empty($_POST["CodePostal"]) && !empty($_POST["Ville"]) && !empty($_POST["password"])
    ) {
        //le formulaire est complet, on recupere les données en les protegeant
        $Lname = strip_tags($_POST["Lname"]);
        $Fname = strip_tags($_POST["Fname"]);
        if (!filter_var($_POST["E-mail"], FILTER_VALIDATE_EMAIL)) {
            die("L'adresse e-mail est incorrecte");
        }
        $BirthDate = $_POST["BirthDate"];
        $Adresse = strip_tags($_POST["Adresse"]);
        $CompAdresse = strip_tags($_POST["CompAdresse"]);
        $CodePostal = $_POST["CodePostal"];
        $Ville = strip_tags($_POST["Ville"]);
        $password = password_hash($_POST["password"], PASSWORD_ARGON2I);
        //on enregistre en bdd
        require_once "includes/connect.php";

        $sql = "INSERT INTO `habitants`(`hab_Lname`, `hab_Fname`, `hab_email`, `hab_birthDate`, `hab_adresse`, `hab_compAdresse`, `hab_codePostal`, `hab_ville`, `hab_password`)
        VALUES(:lname, :fname, :mail, :birthdate, :adresse, :compadresse, :codepostal, :ville, '$password')";

        $query = $db->prepare($sql);

        $query->bindValue(":lname", $Lname, PDO::PARAM_STR);
        $query->bindValue(":fname", $Fname, PDO::PARAM_STR);
        $query->bindValue(":mail", $_POST["E-mail"], PDO::PARAM_STR);
        $query->bindValue(":birthdate", $BirthDate, PDO::PARAM_STR);
        $query->bindValue(":adresse", $Adresse, PDO::PARAM_STR);
        $query->bindValue(":compadresse", $CompAdresse, PDO::PARAM_STR);
        $query->bindValue(":codepostal", $CodePostal, PDO::PARAM_STR);
        $query->bindValue(":ville", $Ville, PDO::PARAM_STR);

        $query->execute();

        // on recupere l'id du nouvel utilisateur
        $id = $db->lastInsertId();

        session_start();

        $_SESSION["habitant"] = [
            "id" => $id,
            "prénom" => $Fname,
            "nom" => $Lname,
            "mail" => $_POST["E-mail"]
        ];

        header("location: catalogue.php");
    } else {
        die("le formulaire est incomplet");
    }
}


$title = "Créer un Compte";

include_once "includes/header.php";
include_once "includes/nav.php";
?>
<div class="container">
    <div class="row">
        <h1>Créer un compte</h1>
    </div>
</div>
<div class="container">
    <form method="post">
        <div class="mb-3">
            <label for="inputLastname" class="form-label">Votre nom</label>
            <input type="text" class="form-control" id="inputLastname" name="Lname">
        </div>
        <div class="mb-3">
            <label for="inputFirstName" class="form-label">Votre prénom</label>
            <input type="text" class="form-control" id="inputFirstName" name="Fname">
        </div>
        <div class="mb-3">
            <label for="inputEmail" class="form-label">Votre E-mail</label>
            <input type="email" class="form-control" id="inputEmail" name="E-mail">
        </div>
        <div class="mb-3">
            <label for="inputBirthDate" class="form-label">Votre date de naissance</label>
            <input type="date" class="form-control" id="inputBirthDate" name="BirthDate">
        </div>
        <div class="mb-3">
            <label for="inputAdress" class="form-label">Votre adresse</label>
            <input type="text" class="form-control" id="inputAdress" name="Adresse">
        </div>
        <div class="mb-3">
            <label for="inputCompAdress" class="form-label">Votre complément d'adresse</label>
            <input type="text" class="form-control" id="inputCompAdress" name="CompAdresse">
        </div>
        <div class="mb-3">
            <label for="inputPostalCode" class="form-label">Votre code postal</label>
            <input type="number" class="form-control" id="inputPostalCode" name="CodePostal">
        </div>
        <div class="mb-3">
            <label for="inputVille" class="form-label">Votre ville</label>
            <input type="text" class="form-control" id="inputVille" name="Ville">
        </div>
        <div class="mb-3">
            <label for="inputPassword" class="form-label">Votre mot de passe</label>
            <input type="password" class="form-control" id="inputPassword" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Créer mon compte</button>
    </form>
</div>

<?php

include_once "includes/footer.php";

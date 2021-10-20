<?php

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
    <form>
        <div class="mb-3">
            <label for="inputEmailconnexion" class="form-label">Adresse E-mail</label>
            <input type="email" class="form-control" id="inputEmailconnexion">
        </div>
        <div class="mb-3">
            <label for="inputPasswordconnexion" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="inputPasswordconnexion">
        </div>
        <button type="submit" class="btn btn-primary">Se connecter</button>
    </form>
</div>


<?php
include_once "includes/footer.php";

<?php

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
    <form>
        <div class="mb-3">
            <label for="inputLastname" class="form-label">Votre nom</label>
            <input type="text" class="form-control" id="inputLastname">
        </div>
        <div class="mb-3">
            <label for="inputFirstName" class="form-label">Votre prénom</label>
            <input type="text" class="form-control" id="inputFirstName">
        </div>
        <div class="mb-3">
            <label for="inputEmail" class="form-label">Votre E-mail</label>
            <input type="email" class="form-control" id="inputEmail">
        </div>
        <div class="mb-3">
            <label for="inputBirthDate" class="form-label">Votre date de naissance</label>
            <input type="date" class="form-control" id="inputBirthDate">
        </div>
        <div class="mb-3">
            <label for="inputAdress" class="form-label">Votre adresse</label>
            <input type="text" class="form-control" id="inputAdress">
        </div>
        <div class="mb-3">
            <label for="inputPassword" class="form-label">Votre mot de passe</label>
            <input type="password" class="form-control" id="inputPassword">
        </div>
        <button type="submit" class="btn btn-primary">Créer mon compte</button>
    </form>
</div>

<?php

include_once "includes/footer.php";

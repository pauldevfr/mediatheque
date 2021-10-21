<?php

session_start();
if (!isset($_SESSION["habitant"])) {
    header("location: index.php");
    exit;
}

$title = "Ajouter un livre";

include_once "includes/header.php";
include_once "includes/nav.php";
?>
<div class="container">
    <div class="row">
        <h1>Ajouter un livre</h1>
    </div>
</div>
<div class="container">
    <form>
        <div class="mb-3">
            <label for="inputBookTitle" class="form-label">Titre du livre</label>
            <input type="text" class="form-control" id="inputBookTitle">
        </div>
        <div class="mb-3">
            <label for="inputBookImage" class="form-label">Photo de la couverture</label>
            <input type="text" class="form-control" id="inputBookImage" placeholder="Une URL est attendu">
        </div>
        <div class="mb-3">
            <label for="inputBookDescription" class="form-label">Description du livre</label>
            <input type="text" class="form-control" id="inputBookDescription">
        </div>
        <div class="mb-3">
            <label for="inputBookBirthDate" class="form-label">Date de parution du livre</label>
            <input type="date" class="form-control" id="inputBookBirthDate">
        </div>
        <div class="mb-3">
            <label for="inputBookAuthor" class="form-label">Auteur du livre</label>
            <input type="text" class="form-control" id="inputBookAuthor">
        </div>
        <div class="mb-3">
            <label for="inputBookGenre" class="form-label">Genre</label>
            <input type="text" class="form-control" id="inputBookGenre">
        </div>
        <button type="submit" class="btn btn-primary">Ajouter un livre</button>
    </form>
</div>

<?php

include_once "includes/footer.php";

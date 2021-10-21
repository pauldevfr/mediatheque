<?php

session_start();
if (!isset($_SESSION["habitant"])) {
    header("location: index.php");
    exit;
}

$title = "catalogue";

include_once "includes/header.php";

include_once "includes/nav.php";
?>

<div class="container">
    <div class="row">
        <h1>Découvrir le catalogue</h1>
    </div>
</div>
<div class="container">
    <div class="row justify-content-around">
        <?php include_once "includes/bookList.php"; ?>
    </div>
</div>

<?php

include_once "includes/footer.php";

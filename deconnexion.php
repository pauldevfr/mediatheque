<?php

use phpDocumentor\Reflection\Location;

session_start();
if (!isset($_SESSION["habitant"])) {
    header("location: se-connecter.php");
    exit;
}

unset($_SESSION["habitant"]);

header("Location: index.php");

<?php

use phpDocumentor\Reflection\Location;

session_start();

unset($_SESSION["habitant"]);

header("Location: index.php");

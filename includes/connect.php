<?php

define("DBHOST", "localhost");
define("DBUSER", "root");
define("DBPASS", "");
define("DBNAME", "mediatheque");

$dsn = "mysql:dbname=" . DBNAME . ";host=" . DBHOST;

try {
    $db = new PDO($dsn, DBUSER, DBPASS);

    $db->exec("SET NAMES utf8");

    $db->setAttribute(
        PDO::ATTR_DEFAULT_FETCH_MODE,
        PDO::FETCH_ASSOC
    );
} catch (PDOException $e) {
    die($e->getMessage());
}

////////////// CRUD ///////////

// // on recupere les données de `books`
// $sql = "SELECT * FROM `books`";

// // On execute la requete
// $request = $db->query($sql);

// // On recupere les données fetch ou fetchAll
// $books = $request->fetchAll();

// // Ajout d'un book
// $sql = "INSERT INTO `books`(`book_title`, `book_image`, `book_birthDate`, `book_description`, `book_author`, `book_genre`) VALUES ('Robinson crusoé', 'http://placehold.it/450x250', '0000-00-00', \"Robinson rencontre un homme qu'il apelle vendredi car il le rencontre vendredi\",  'Daniel defoé', 'roman')";

// // requete qui ajoute le livre
// $request = $db->query($sql);


// // modifier un utilisateur 
// $sql = "UPDATE `books` SET `book_title` = \"Le titre a changer\" WHERE `id` = 27";

// $request = $db->query($sql);

// // supprimer des books

// $sql = "DELETE FROM `books` WHERE `id` = 117";

// $request = $db->query($sql);

// // combien de ligne on étais supprimer

// echo $request->rowCount();

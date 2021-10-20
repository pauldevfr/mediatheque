<?php
include_once("connect.php");

$sql = "SELECT * FROM `books`";

$request = $db->query($sql);

$books = $request->fetchAll();

foreach ($books as $book) :
?>
    <div class="col-4">
        <div class="card mt-3 mb-3">
            <img src="<?php echo $book['book_image']; ?>" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $book['book_title']; ?></h5>
                <p class="card-text"><?php echo $book['book_description']; ?></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><?php echo $book['book_author']; ?></li>
                <li class="list-group-item"><?php echo $book['book_birthDate']; ?></li>
                <li class="list-group-item"><?php echo $book['book_genre']; ?></li>
            </ul>
            <div class="card-body">
                <a href="#" class="btn btn-primary">Emprunter</a>
            </div>
        </div>
    </div>
<?php
endforeach;
?>
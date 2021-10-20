<?php

$title = "Accueil";

include_once "includes/header.php";

include_once "includes/nav.php";

?>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="http://placehold.it/1800x465" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="http://placehold.it/1800x465" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="http://placehold.it/1800x465" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<div class="container">
    <h1>Bienvenue sur le site de la super médiatheque</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, quisquam tempora. Repudiandae rerum officia
        quaerat ut rem quod voluptatum, magni, voluptatem, natus itaque fugit ullam. Commodi possimus quas
        repudiandae perspiciatis! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident blanditiis sapiente eaque esse iusto alias, modi temporibus saepe? Ratione labore vel dolores aliquid, maiores facere quidem voluptatem dolor rem tempore? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit laudantium ullam, aspernatur cumque sapiente a incidunt labore architecto iure fugit porro, eos qui. Non eius blanditiis, magnam tenetur consectetur ipsum?</p>
</div>
<div class="container">
    <div class="row justify-content-around align-items-center">
        <div class="col-4">
            <img class="img-fluid" src="http://placehold.it/750x450" alt="...">
        </div>
        <div class="col-4">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt labore, ipsum odio cum officiis totam atque beatae quos, iusto est aliquam accusantium aliquid placeat eaque deleniti impedit quia! Minus, cum.</p>
        </div>
    </div>
</div>

<?php

echo "<h1>youpi ca marche !</h1>";

include_once "includes/footer.php";

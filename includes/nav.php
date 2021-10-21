    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">Médiatheque</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.php">Accueil</a>
                    </li>
                    <?php if (!isset($_SESSION["habitant"])) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="../creer-un-compte.php">Créer un compte</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../se-connecter.php">Se connecter</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="../catalogue.php">Découvrir le catalogue</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../ajouter-un-livre.php">Ajouter un livre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../deconnexion.php">Deconnexion</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
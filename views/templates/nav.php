<nav class="navbar navbar-expand-lg fixed-top bg-danger bg-gradient">
    <div class="container-fluid">


        <a class="navbar-brand" href="?page=home">
            <img src="assets/img/brand/A.svg" alt="Bootstrap" width="" height="50">
        </a>

        <a class="navbar-brand mb-0 h1" href="?page=home"> THE "A" BOOK</a>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="?page=home">Accueil</a>
                </li>

                <?php if (isset($_SESSION['email'])) {

                    echo '<li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="?page=profil">Profil</a>
                    </li>';

                    echo '<li class="nav-item"><a class="nav-link active" aria-current="page" href="?page=contactlist">Liste de contacts</a></li>';

                    echo '<li class="nav-item"><a class="nav-link active" aria-current="page" href="?page=logout">Log out</a></li>';
                } else {

                    echo '<li class="nav-item"><a class="nav-link active" aria-current="page" href="?page=login">Log in</a></li>';

                    echo '<li class="nav-item"><a class="nav-link active" aria-current="page" href="?page=signup">Sign up</a></li>';
                } ?>

        </div>
    </div>
    </ul>
</nav>
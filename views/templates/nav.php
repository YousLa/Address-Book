<nav class="navbar navbar-expand-lg fixed-top bg-light fw-medium fs-4 mb-auto ">
    <div class="container-fluid">

        <?php if (isset($_SESSION['email'])) {
            echo  "<a class='navbar-brand' href='?page=contactlist'>";
        } else {
            echo  "<a class='navbar-brand' href='?page=login'>";
        } ?>


        <img src="assets/img/brand/A.svg" alt="Bootstrap" width="" height="50">
        </a>

        <div class="ml-5">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-3 d-flex flex-row align-items-center ">


                <?php if (isset($_SESSION['email'])) {

                    echo '<li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="?page=profil">Profil</a>
                    </li>';

                    echo '<li class="nav-item"><a class="nav-link active" aria-current="page" href="?page=contactlist">Liste de contacts</a></li>';

                    echo '<li class="nav-item btn btn-primary "><a class="nav-link active text-light fs-5" aria-current="page" href="?page=logout">Log out</a></li>';
                } else {

                    // echo '<li class="nav-item"><a class="nav-link active" aria-current="page" href="?page=login">Log in</a></li>';

                    if (isset($_GET['page'])) {

                        switch ($_GET['page']) {

                            case 'login':
                                echo '<li class="nav-item "><a class="nav-link active btn btn-primary text-light " aria-current="page" href="?page=signup">S\'enregistrer</a></li>';
                                break;

                            case 'signup':
                                echo '<li class="nav-item "><a class="nav-link active btn btn-primary text-light " aria-current="page" href="?page=login">Se connecter</a></li>';
                                break;
                        }
                    } else {

                        echo '<li class="nav-item "><a class="nav-link active btn btn-primary text-light " aria-current="page" href="?page=signup">S\'enregistrer</a></li>';
                    }
                } ?>

            </ul>
        </div>

    </div>
</nav>
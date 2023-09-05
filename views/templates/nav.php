<nav>
    <ul>
        <li><a href="?page=home">Accueil</a></li>
        <?php if (isset($_SESSION['email'])) {
            echo '<li><a href="?page=profil">Profil</a></li>';
            echo '<li><a href="?page=contactlist">Liste de contacte</a></li>';
            echo '<li><a href="?page=logout">Log out</a></li>';
        } else {
            echo '<li><a href="?page=login">Log in</a></li>';
            echo '<li><a href="?page=signup">Sign up</a></li>';
        } ?>

    </ul>
</nav>
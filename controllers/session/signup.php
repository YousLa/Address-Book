<!-- SIGN UP - INSCRIPTION -->
<?php



if (isset($_POST['register'], $_POST['email'], $_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])) {

    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // ! Chemin a partir du fucking fichier "index.php"
    include_once "models/database.php";

    $query = "INSERT INTO user (email, password) VALUES (:email, sha2(:password, 256))
    ";

    $objet = $database->prepare($query);

    $options = array(

        ":email" => $email,
        ":password" => $password,

    );

    if ($objet->execute($options)) {

        header("Location: ?page=login&successRegister");
        // TODO Créer un GET pour afficher un message lorsque la creation de compte à bien été effectué
    }
} else if (isset($_POST['register'])) {
    $error_message = "<p class='alert' > Veuillez complèter tous les champs.</p>";
}

require_once('views/session/signup.php');

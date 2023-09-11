<!-- LOG IN - SE CONNECTER -->

<?php


//var_dump($_POST);

if (isset($_POST['login'])) {

    if (empty($_POST['email']) || empty($_POST['password'])) {

        $message = "<span>All fields are required</span>";
    } else {
        // Connexion à la base de données
        include_once "models/database.php";

        // Création de la requête
        $query = "SELECT * FROM user WHERE email = :email AND password = sha2(:password, 256)";

        $objet = $database->prepare($query);

        $objet->execute(
            array(
                ":email" => $_POST['email'],
                ":password" => $_POST['password']
            )
        );

        $count = $objet->rowCount();
        $arrayResult = $objet->fetchAll(PDO::FETCH_ASSOC);

        if ($count > 0) {

            // Ajouter des variables session 

            $_SESSION['id'] = $arrayResult[0]['id'];
            $_SESSION['email'] = $arrayResult[0]['email'];
            $_SESSION['last_name'] = $arrayResult[0]['last_name'];
            $_SESSION['first_name'] = $arrayResult[0]['first_name'];
            $_SESSION['birthdate'] = $arrayResult[0]['birthdate'];
            $_SESSION['role'] = $arrayResult[0]['role'];
            $_SESSION['created_at'] = $arrayResult[0]['created_at'];
            $_SESSION['updated_at'] = $arrayResult[0]['updated_at'];
            header('Location: ?page=home');
        }
    }
}

require_once 'views/session/login.php';

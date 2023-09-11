<?php
$id = "";
$last_name = "";
$first_name = "";
$pseudo = "";
$phone_number = "";
$email = "";
$street_address = "";
$number_address = "";
$zip_address = "";
$city_address = "";



# Modification des données
if (isset($_POST['update'], $_POST['last_name'], $_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['first_name'])) {

    # Récupération de l'id dans l'URL
    $id = $_GET['id'];
    $last_name = trim($_POST['last_name']);
    $first_name = trim($_POST['first_name']);
    $pseudo = trim($_POST['pseudo']);
    $phone_number = trim($_POST['phone_number']);
    $email = trim($_POST['email']);
    $street_address = trim($_POST['street_address']);
    $number_address = trim($_POST['number_address']);
    $zip_address = trim($_POST['zip_address']);
    $city_address = trim($_POST['city_address']);

    # Connexion à la base de données
    include_once "models/database.php";

    $query = "
        UPDATE contact
        SET
            last_name = :last_name
            , first_name = :first_name
            , pseudo = :pseudo
            , phone_number = :phone_number
            , email = :email
            , street_address = :street_address
            , number_address = :number_address
            , zip_address = :zip_address
            , city_address = :city_address
        WHERE id = :id
        ";

    $objet = $database->prepare($query);

    $options = array(
        ":id" => $id,
        ":last_name" => $last_name,
        ":first_name" => $first_name,
        ":pseudo" => $pseudo,
        ":phone_number" => $phone_number,
        ":email" => $email,
        ":street_address" => $street_address,
        ":number_address" => $number_address,
        ":zip_address" => $zip_address,
        ":city_address" => $city_address
    );

    if ($objet->execute($options)) {
        echo "ok";
        header("Location: ?page=contactcard&id=" . $id);
    } else {
        echo "ko";
    }
}

# Récupération des données (transformées)
if (isset($_GET['id'])) {

    $id = $_GET['id'];

    # Connexion à la base de données
    include_once "models/database.php";

    # Création de la requête
    $query = "SELECT * FROM contact WHERE id = :id";
    $options = array(
        ":id" => $id
    );
    $objet = $database->prepare($query);

    if ($objet->execute($options)) {

        $contact = $objet->fetchAll()[0];

        # Extraction des données d'une personne dans une variable
        list(
            $id, $last_name, $first_name, $pseudo,,, $phone_number, $email, $street_address, $number_address, $zip_address, $city_address
        ) = $contact;
    }
}

require_once 'views/contact/update_contact.php';

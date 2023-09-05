<?php

if (isset($_POST['create'], $_POST['last_name'], $_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['first_name'])) {

    $last_name = trim($_POST['last_name']);
    $first_name = trim($_POST['first_name']);
    $pseudo = trim($_POST['pseudo']);
    $phone_number = trim($_POST['phone_number']);
    $email = trim($_POST['email']);
    $rue = trim($_POST['rue']);
    $number_address = trim($_POST['number_address']);
    $zip_address = trim($_POST['zip_address']);
    $city_address = trim($_POST['city_address']);

    include_once "models/database.php";

    $query = "
INSERT INTO contact
VALUES (NULL, :last_name, :first_name, :pseudo, :phone_number, :email, :rue, :number_address, :zip_address, :city_address, DEFAULT, DEFAULT, DEFAULT)
";

    $objet = $database->prepare($query);

    $options = array(
        ":last_name" => $last_name,
        ":pseudo" => $pseudo,
        ":first_name" => $first_name,
        ":phone_number" => $phone_number,
        ":email" => $email,
        ":rue" => $rue,
        ":number_address" => $number_address,
        ":zip_address" => $zip_address,
        ":city_address" => $city_address
    );

    if ($objet->execute($options)) {
        header("Location: ?page=contactlist");
    } else {
    }
}

require_once 'views/contact/create_contact.php';

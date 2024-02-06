<?php

if (isset($_POST['create'], $_POST['last_name'], $_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['first_name'])) {

    $last_name = trim($_POST['last_name']);
    $first_name = trim($_POST['first_name']);
    $pseudo = trim($_POST['pseudo']);
    $phone_number = trim($_POST['phone_number']);
    $email = trim($_POST['email']);
    $street_address = trim($_POST['street_address']);
    $number_address = trim($_POST['number_address']);
    $zip_address = trim($_POST['zip_address']);
    $city_address = trim($_POST['city_address']);


    // Vous devez implémenter cette fonction pour récupérer l'index du contact à partir de la base de données
    $contactFolder = "assets/img/upload/" . $_SESSION['id'] . '/contacts/';

    if (!file_exists($contactFolder)) {
        mkdir($contactFolder, 0777, true);
        // Créez le dossier s'il n'existe pas déjà
    }

    $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION); // Obtenez l'extension du fichier téléchargé
    $newFileName = time() . '-' . rand(10000, 99999) . '.' . $extension; // Générez un nom de fichier unique
    $uploadFile = $contactFolder . $newFileName; // Chemin complet du fichier

    if (move_uploaded_file($_FILES['image']['tmp_name'], getcwd() . DIRECTORY_SEPARATOR . $uploadFile)) {
        // Le téléchargement de l'image a réussi
        // Enregistrez le chemin relatif de $newFileName dans la base de données


        include_once "models/database.php";

        $query = " INSERT INTO contact VALUES (NULL, :last_name, :first_name, :pseudo, :pic_name, :pic_url, :phone_number, :email, :street_address, :number_address, :zip_address, :city_address, :user_id, DEFAULT, DEFAULT)";

        $objet = $database->prepare($query);

        $options = array(
            ":last_name" => $last_name,
            ":first_name" => $first_name,
            ":pseudo" => $pseudo,
            ":pic_name" => $newFileName, // Utilisez le nom de fichier unique
            ":pic_url" => $uploadFile, // Utilisez le chemin complet du fichier
            ":phone_number" => $phone_number,
            ":email" => $email,
            ":street_address" => $street_address,
            ":number_address" => $number_address,
            ":zip_address" => $zip_address,
            ":city_address" => $city_address,
            ":user_id" => $_SESSION['id']

        );

        if ($objet->execute($options)) {
            header("Location: ?page=contactlist");
        } else {
            echo "Erreur lors de l'insertion dans la base de données.";
        }
    } else {
        echo "Une erreur s'est produite lors du téléchargement de l'image.";
    }
}
require_once 'views/contact/create_contact.php';

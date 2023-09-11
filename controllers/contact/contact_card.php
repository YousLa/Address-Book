<!-- Afficher tous les contactes -->
<?php

$info_contact = "";
$message_info_contact = "";

if (isset($_GET['id'])) {

    # Connexion à la base de données
    include_once "models/database.php";

    # Création de la requête de récupération de tous les users
    $query = "SELECT * FROM contact WHERE id = :id";

    $options = [":id" => $_GET['id']];

    # Extraction des données de la requête
    $objet = $database->prepare($query);
    if ($objet->execute($options)) {

        # Transforme l'objet de requête en tableau
        $contact = $objet->fetch(PDO::FETCH_NUM);

        # Extraction des données d'une personne dans une variable
        list(
            $id, $last_name, $first_name, $pseudo, $pic_name, $pic_url, $phone_number, $email, $street_address, $number_address, $zip_address, $city_address,, $created_at, $updated_at
        ) = $contact;
    }
} else {
    $message_info_contact = "Contact n'as pas été trouvé";
}

require_once 'views/contact/contact_card.php';

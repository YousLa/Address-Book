<!-- Afficher tous les contactes -->
<?php

$info_contact = "";
$message_info_contact = "";

if (isset($_GET['id'])) {



    # Connexion à la base de données
    include_once "models/database.php";

    # Création de la requête de récupération de tous les users
    $query = "SELECT * FROM contact WHERE id = :id";

    # Extraction des données de la requête
    $objet = $database->query($query);

    # Transforme l'objet de requête en tableau
    $contacts = $objet->fetchAll();

    # Parcourir les personnes dans le tableau
    foreach ($infos as $info) {

        # Extraction des données d'une personne dans une variable
        list(
            $id, $last_name, $first_name, $pseudo, $phone_number, $email, $street_address, $number_address, $zip_address, $city_address,, $created_at, $updated_at
        ) = $contact;

        # Création des lignes du tableau HTML

        $info_contact .= "<tr>";


        $info_contact .= "<td>$id</td>";
        $info_contact .= "<td>$lastname</td>";
        $info_contact .= "<td>$firstname</td>";
        $info_contact .= "<td>$pseudo</td>";
        $info_contact .= "<td>$phone_number</td>";
        $info_contact .= "<td>$email</td>";
        $info_contact .= "<td>$street_address</td>";
        $info_contact .= "<td>$number_address</td>";
        $info_contact .= "<td>$zip_address</td>";
        $info_contact .= "<td>$city_address</td>";
        $info_contact .= "<td>$created_at</td>";
        $info_contact .= "<td>$updated_at</td>";


        $info_contact .= "</tr>";


        $info_contact .= "<a href='?page=update&id=$id'><button>🖍️</button></a>";
    }
} else {
    $message_info_contact = "Contact n'as pas été trouvé";
}

require_once 'views/contact/contact_card.php';

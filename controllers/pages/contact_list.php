<!-- Afficher tous les contactes -->
<?php

$contact_row = "";

# Connexion à la base de données
include_once "models/database.php";

# Création de la requête de récupération de tous les users
$query = "SELECT * FROM contact";

# Extraction des données de la requête
$objet = $database->query($query);

# Transforme l'objet de requête en tableau
$contacts = $objet->fetchAll();

# Parcourir les personnes dans le tableau
foreach ($contacts as $contact) {

    # Extraction des données d'une personne dans une variable
    list(
        $id, $last_name, $first_name, $pseudo, $pic_name,  $pic_url, $phone_number, $email, $street_address, $number_address, $zip_address, $city_address, $user_id, $created_at, $updated_at
    ) = $contact;
}

// Parcourir les contes dans le tableau
foreach ($contacts as $cle => $contact) {

    // Extraction des données d'un conte dans une variable

    $contact_row .= "<div class='card mb-3' style='max-width: 540px;'>";

    $contact_row .= "<div class='row g-0'>";

    $contact_row .= "<div class='col-md-4 card-img-left ' ' style='object-fit: cover;'>";

    $contact_row .= "<img class='img-fluid rounded-start height='100%  src='" . $contact['pic_url'] . "'>";

    $contact_row .= "</div>";

    $contact_row .= "<div class='col-md-8'>";

    $contact_row .= "<div class='card-body'>";

    $contact_row .= "<h5><a class='card-title' href='?page=contactcard&id=" . htmlspecialchars($contact['id']) . "'>" . $contact['last_name'] . " " . $contact['first_name'] . "</a></h5>";

    $contact_row .= " <p class='card-text'>Aperçu des infos</p>";

    $contact_row .= " <p class='card-text'><small class='text-body-secondary'>Last updated 3 mins ago</small></p>";

    $contact_row .= " <a href='?page=contactcard' class='btn btn-primary'>Afficher le contact</a>";

    $contact_row .= " </div>";

    $contact_row .= " </div>";

    $contact_row .= " </div>";

    $contact_row .= " </div>";
}


require_once 'views/pages/contact_list.php';

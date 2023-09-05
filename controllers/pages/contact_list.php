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
        $id, $last_name, $first_name, $pseudo, $phone_number, $email, $street_address, $number_address, $zip_address, $city_address, $user_id, $created_at, $updated_at
    ) = $contact;
}

require_once 'views/pages/contact_list.php';

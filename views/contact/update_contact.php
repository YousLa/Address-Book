<h1>Modification</h1>

<!-- Ne pas oublier de rajouter l'id dans la destination du formulaire -->
<form action="?page=update&id=<?= $id ?>" method="post" enctype="multipart/form-data">

    <input type="file" name="image" accept="image/jpeg, image/jpg, image/png">

    <label for="last_name">Nom :</label>
    <input type="text" name="last_name" id="last_name" value="<?= $last_name ?>" required>

    <label for="first_name">Prénom :</label>
    <input type="text" name="first_name" id="first_name" value="<?= $first_name ?>" required>

    <label for="pseudo">Pseudo :</label>
    <input type="text" name="pseudo" id="pseudo" value="<?= $pseudo ?>">

    <label for="phone_number"> Numéro de téléphone :</label>
    <input type="text" name="phone_number" id="phone_number" value="<?= $phone_number ?>">

    <label for="email">Adresse Email* :</label>
    <input type="email" name="email" id="email" value="<?= $email ?>">

    <label for="street_address">Rue :</label>
    <input type="text" name="street_address" id="street_address" value="<?= $street_address ?>">

    <label for="number_address">Numéro :</label>
    <input type="text" name="number_address" id="number_address" value="<?= $number_address ?>">

    <label for="zip_address">Code Postal :</label>
    <input type="text" name="zip_address" id="zip_address" value="<?= $zip_address ?>">

    <label for="city_address">Localité :</label>
    <input type="text" name="city_address" id="city_address" value="<?= $city_address ?>">

    <button type="submit" name="update">Modifier</button>
</form>
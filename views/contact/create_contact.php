<h1>Créer un contacte</h1>

<form action="?page=createcontact" method="POST">

    <label for="last_name">Nom :</label>
    <input type="text" name="last_name" id="last_name" required>

    <label for="first_name">Prénom :</label required>
    <input type="text" name="first_name" id="first_name">

    <label for="pseudo">Pseudo :</label>
    <input type="text" name="pseudo" id="pseudo">

    <label for="phone_number"> Numéro de téléphone :</label>
    <input type="date" name="phone_number" id="phone_number">

    <label for="email">Adresse Email* :</label>
    <input type="email" name="email" id="email">

    <label for="rue">Rue :</label>
    <input type="text" name="rue" id="rue">

    <label for="number_address">Numéro :</label>
    <input type="text" name="number_address" id="number_address">

    <label for="zip_address">Code Postal :</label>
    <input type="text" name="zip_address" id="zip_address">

    <label for="city_address">Localité :</label>
    <input type="text" name="city_address" id="city_address">

    <button type="submit" name="create">Créer</button>
</form>
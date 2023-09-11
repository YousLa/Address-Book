<div class="container d-flex flex-column align-items-center gap-5">


    <h1>Créer un contacte</h1>

    <form class="col-md-6 " action="?page=createcontact" method="POST" enctype="multipart/form-data">

        <div class="mb-4 d-flex flex-row">
            <label class="form-label me-4 col-4" for="image">Image :</label>
            <input class="form-control" type="file" id="image" name="image" accept="image/jpeg, image/jpg, image/png">
        </div>

        <div class="mb-4 d-flex flex-row">
            <label class="form-label me-4 col-4" for="last_name">Nom :</label>
            <input class="form-control" type="text" name="last_name" id="last_name" required>
        </div>

        <div class="mb-4 d-flex flex-row">
            <label class="form-label me-4 col-4" for="first_name">Prénom :</label required>
            <input class="form-control" type="text" name="first_name" id="first_name">
        </div>

        <div class="mb-4 d-flex flex-row">
            <label class="form-label me-4 col-4" for="pseudo">Pseudo :</label>
            <input class="form-control" type="text" name="pseudo" id="pseudo">
        </div>

        <div class="mb-4 d-flex flex-row">
            <label class="form-label me-4 col-4" for="phone_number"> Numéro de téléphone :</label>
            <input class="form-control" type="text" name="phone_number" id="phone_number">
        </div>

        <div class="mb-4 d-flex flex-row">
            <label class="form-label me-4 col-4" for="email">Adresse Email* :</label>
            <input class="form-control" type="email" name="email" id="email">
        </div>

        <div class="mb-4 d-flex flex-row">
            <label class="form-label me-4 col-4" for="street_address">Rue :</label>
            <input class="form-control" type="text" name="street_address" id="street_address">
        </div>

        <div class="mb-4 d-flex flex-row">
            <label class="form-label me-4 col-4" for="number_address">Numéro :</label>
            <input class="form-control" type="text" name="number_address" id="number_address">
        </div>

        <div class="mb-4 d-flex flex-row">
            <label class="form-label me-4 col-4" for="zip_address">Code Postal :</label>
            <input class="form-control" type="text" name="zip_address" id="zip_address">
        </div>

        <div class="mb-4 d-flex flex-row">
            <label class="form-label me-4 col-4" for="city_address">Localité :</label>
            <input class="form-control" type="text" name="city_address" id="city_address">
        </div>

        <button class="btn btn-primary w-100" type="submit" name="create">Créer</button>
    </form>

</div>
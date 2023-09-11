<div class="container d-flex flex-column align-items-center">
    <h1>S'enregistrer</h1>

    <?php if (!empty($error_message)) echo $error_message;  ?>

    <form action="?page=signup" method="POST" class="col-5 mt-4">
        <div class="mb-3">
            <label for="email" class="form-label">Adresse Email</label>

            <input class="form-control" type="email" name="email" id="email" aria-describedby="email" required aria-required="Champ obligatoire">

            <div id="emailHelp" class="form-text">Nous ne partagerons jamais votre adresse email.</div>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>

            <input type="password" class="form-control" name="password" id="password">
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="check" name="check">

            <!-- TODO Se souvenir de moi -->

            <label class="form-check-label" for="check">Conditions d'utilisation</label>
        </div>

        <div class="container d-flex flex-column align-items-center">
            <button type="submit" name="login" class="btn btn-primary w-100">S'enregister</button>

            <span class="form-text ">Déjà un compte ? Clique <a class="fw-semibold" href="?page=signup">ici</a></span>
        </div>
    </form>
</div>
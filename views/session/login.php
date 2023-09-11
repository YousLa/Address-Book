<div class="container d-flex flex-column align-items-center gap-5">
    <h1>Se connecter</h1>

    <form action="?page=login" method="POST" class="col-5 ">
        <div class="mb-4">
            <label for="email" class="form-label">Adresse Email</label>

            <input class="form-control" type="email" name="email" id="email" aria-describedby="email" required aria-required="Champ obligatoire">
        </div>

        <div class="mb-4">
            <label for="password" class="form-label">Mot de passe</label>

            <input type="password" class="form-control" name="password" id="password">
        </div>

        <div class="mb-4 form-check">
            <input type="checkbox" class="form-check-input" id="check" name="check">

            <!-- TODO Se souvenir de moi -->

            <label class="form-check-label" for="check">Se souvenir de moi</label>
        </div>

        <div class="container d-flex flex-column align-items-center">
            <button type="submit" name="login" class="btn btn-primary w-100">Se connecter</button>

            <span class="form-text ">Pas encore inscrit ? Clique <a class="fw-semibold" href="?page=signup">ici</a></span>
        </div>
    </form>
</div>
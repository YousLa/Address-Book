<h1>PROFIL</h1>

<h2><?= $_SESSION['role']; ?></h2>

<p>Prénom : <?= $_SESSION['first_name']; ?></p>
<p>Nom de famille : <?= $_SESSION['last_name']; ?></p>
<p>Adresse Email : <?= $_SESSION['email']; ?></p>
<p>Date de Naissance : <?= $_SESSION['birthdate']; ?></p>
<p>Compte crée le : <?= $_SESSION['created_at']; ?></p>
<p>Dernière modification : <?= $_SESSION['updated_at']; ?></p>
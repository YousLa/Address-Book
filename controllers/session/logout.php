<!-- BOUTON SE DECONNECTER -->

<?php


unset($_SESSION['email']);
unset($_SESSION['last_name']);
unset($_SESSION['first_name']);
unset($_SESSION['birthdate']);
unset($_SESSION['role']);
unset($_SESSION['created_at']);
unset($_SESSION['updated_at']);


session_destroy();

header('Location: ?page=home');

?>

<!-- LOG OUT - SE DECONNECTER -->
<?php

$id = "";


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    include_once "models/database.php";

    $query = "DELETE FROM contact WHERE id = :id";
    $options = array(
        ":id" => $id
    );

    $objet = $database->prepare($query);

    if ($objet->execute($options)) {
        header("Location: ?page=contactlist");
    }
}

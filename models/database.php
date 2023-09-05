<?php

// ! Ne pas oublier - changer le nom de la base de données

// Connexion à une base de données

// 1. data source name dsn - SQL
// 2. Hôte - localhost
// 3. Nom de la base de données
// 4.Charset - UTF8
$dsn = "mysql:host=localhost;dbname=mycontacts;charset=utf8";
$user = "root";
$pwd = "";

try {
    // Instancier un objet PDO - PHP Data Object
    $database = new PDO($dsn, $user, $pwd);
} catch (PDOException $e) {
    // -> pour aller chercher une methode
    echo $e->getMessage();
}

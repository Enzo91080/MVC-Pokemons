<?php
require 'config/database.php';
require 'controllers/PokemonController.php';

// Connexion à la base de données
$db = getDatabaseConnection();

// Créer le contrôleur et afficher la liste des pokémons
$controller = new PokemonController($db);
$controller->list();
?>

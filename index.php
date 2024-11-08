<?php
require 'config/database.php';
require 'controllers/PokemonController.php';

$db = getDatabaseConnection();
$controller = new PokemonController($db);

$action = $_GET['action'] ?? 'list';
$id = $_GET['id'] ?? null;

switch ($action) {
    case 'list':
        $controller->list();
        break;
    case 'view':
        $controller->view($id);
        break;
    case 'create':
        $controller->create();
        break;
    case 'edit':
        $controller->edit($id);
        break;
    case 'delete':
        $controller->delete($id);
        break;
    default:
        $controller->list();
        break;
}

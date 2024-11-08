<?php
require_once 'models/Pokemon.php';

class PokemonController {
    private $model;

    public function __construct($db) {
        $this->model = new Pokemon($db);
    }

    public function list() {
        $pokemons = $this->model->getAllPokemons();
        require __DIR__ . '/../views/list.php';
    }

    public function view($id) {
        $pokemon = $this->model->getPokemonById($id);
        require __DIR__ . '/../views/view_pokemon.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $type = $_POST['type'];
            $this->model->createPokemon($name, $type);
            header('Location: index.php?action=list');
            exit(); // Ajoutez exit() pour arrêter l'exécution du script après une redirection
        } else {
            require __DIR__ . '/../views/create_pokemon.php';
        }
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $type = $_POST['type'];
            $this->model->updatePokemon($id, $name, $type);
            header('Location: index.php?action=list');
            exit();
        } else {
            $pokemon = $this->model->getPokemonById($id);
            require __DIR__ . '/../views/edit_pokemon.php';
        }
    }

    public function delete($id) {
        $this->model->deletePokemon($id);
        header('Location: index.php?action=list');
        exit();
    }
}

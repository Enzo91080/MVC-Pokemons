<?php
require_once 'models/Pokemon.php';

class PokemonController {
    private $model;

    public function __construct($db) {
        $this->model = new Pokemon($db);
    }

    public function list() {
        $pokemons = $this->model->getAllPokemons();
        require 'views/pokemons.php';
    }
}
?>

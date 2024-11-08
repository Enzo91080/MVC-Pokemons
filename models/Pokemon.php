<?php
class Pokemon {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllPokemons() {
        $query = "SELECT * FROM pokemons";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getPokemonById($id) {
        $query = "SELECT * FROM pokemons WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createPokemon($name, $type) {
        $query = "INSERT INTO pokemons (name, type) VALUES (:name, :type)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':type', $type);
        return $stmt->execute();
    }

    public function updatePokemon($id, $name, $type) {
        $query = "UPDATE pokemons SET name = :name, type = :type WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':type', $type);
        return $stmt->execute();
    }

    public function deletePokemon($id) {
        $query = "DELETE FROM pokemons WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}

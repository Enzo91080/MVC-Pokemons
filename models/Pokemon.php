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
}
?>

<?php
require_once "config/database.php";

class Livre {
    private $conn;
    private $table = "livre";

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function addLivre($isbn, $titre, $auteur, $status) {
        $query = "INSERT INTO " . $this->table . " (isbn, titre, auteur, status) VALUES (:isbn, :titre, :auteur, :status)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":isbn", $isbn);
        $stmt->bindParam(":titre", $titre);
        $stmt->bindParam(":auteur", $auteur);
        $stmt->bindParam(":status", $status);
        return $stmt->execute();
    }

    public function getAllLivres() {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteLivre($id) {
        $query = "DELETE FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }
}
?>

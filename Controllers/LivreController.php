<?php
require_once "config/database.php";
require_once " Models/Livre.php";

class LivreController {
private $livre;

public function __construct($db) {
$this->livre = new Livres($db);
}

public function showAddLivreForm() {
include 'views/addlivre.php'; // Inclure la vue
}

public function addLivre() {
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$isbn = $_POST['isbn'];
$titre = $_POST['titre'];
$auteur = $_POST['auteur'];
$status = $_POST['status'];

// Ajouter le livre
if ($this->livre->addLivre($isbn, $titre, $auteur, $status)) {
echo "<h2>Livre ajouté avec succès !</h2>";
} else {
echo "<h2>Erreur lors de l'ajout du livre.</h2>";
}
}
}
}
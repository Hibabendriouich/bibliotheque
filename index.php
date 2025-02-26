<?php
require_once "controllers/LivreController.php";

$controller = new LivreController($db);
$action = $_GET["action"] ?? "showForm";

switch ($action) {
    case "addLivre":
        $controller->addLivre();
        break;
    default:
        require "Views/addlivre.php";
        break;
}
?>

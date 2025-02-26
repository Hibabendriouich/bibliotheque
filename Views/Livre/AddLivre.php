<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Livre</title>
</head>
<body>
    <h2>Ajouter un Livre</h2>
    <form method="POST" action="http://localhost/MVP/index.php?action=addLivre">
        <label for="isbm">ISBN :</label>
        <input type="text" id="isbm" name="isbm" required>

        <label for="titre">Titre :</label>
        <input type="text" id="titre" name="titre" required>

        <label for="auteur">Auteur :</label>
        <input type="text" id="auteur" name="auteur" required>

        <label for="status">Statut :</label>
        <input type="text" id="status" name="status" required>

        <button type="submit">Ajouter</button>
    </form>
</body>
</html>

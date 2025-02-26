<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Livres</title>
</head>
<body>
    <h2>Liste des Livres</h2>
    <table border="1">
        <tr>
            <th>ISBN</th>
            <th>Titre</th>
            <th>Auteur</th>
            <th>Statut</th>
            <th>Action</th>
        </tr>
        <?php foreach ($livres as $livre): ?>
            <tr>
                <td><?= $livre['isbm'] ?></td>
                <td><?= $livre['titre'] ?></td>
                <td><?= $livre['auteur'] ?></td>
                <td><?= $livre['status'] ?></td>
                <td><a href="index.php?action=deleteLivre&id=<?= $livre['id'] ?>">Supprimer</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

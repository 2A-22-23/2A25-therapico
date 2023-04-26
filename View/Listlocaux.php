<?php
include '../Controller/localC.php';
$localC = new localC();
$list = $localC->listlocaux();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des locaux</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            text-align: center;
        }
css
Copy code
    th,
    td {
        padding: 10px;
        border: 1px solid black;
    }

    th {
        background-color: #444;
        color: white;
    }

    tr:nth-child(even) {
        background-color: #eee;
    }

    a {
        text-decoration: none;
        color: blue;
    }

    a:hover {
        color: red;
    }
</style>
</head>
<body>
    <h1 style="text-align: center;">Liste des locaux</h1>
    <div style="text-align: center;">
        <a href="addLocal.php" style="background-color: #008CBA; color: white; padding: 10px 20px; border-radius: 5px; font-size: 18px;">Ajouter un local</a>
    </div>
    <br>
    <table>
        <tr>
            <th>Id local</th>
            <th>Adresse</th>
            <th>Description</th>
            <th>Capacité</th>
            <th>Modifier</th>
            <th>Supprimer</th>
            <th>ADD maladie</th>

        </tr>
        <?php foreach ($list as $local) { ?>
            <tr>
                <td><?= $local['id_local']; ?></td>
                <td><?= $local['adresse_local']; ?></td>
                <td><?= $local['description_local']; ?></td>
                <td><?= $local['capacite_local']; ?></td>
                <td>
                    <form method="POST" action="updatelocal.php">
                        <input type="hidden" value="<?= $local['id_local']; ?>" name="id_local">
                        <button type="submit" name="update" style="background-color: #008CBA; color: white; padding: 5px 10px; border-radius: 3px;">Modifier</button>
                    </form>
                </td>
                <td>
                    <a href="deletelocal.php?id_local=<?= $local['id_local']; ?>" style="background-color: red; color: white; padding: 5px 10px; border-radius: 3px;" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce local ?')">Supprimer</a>
                </td>
                <td>

<form method="POST" action="addmaladie.php"> 
<input type="submit" style="background-color: #008CBA; color: white; padding: 5px 10px; border-radius: 3px;" name="add" value="add"> 
<input type="hidden" value=<?PHP echo $local['id_local']; ?> name="id_local"> 
  </form>   </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
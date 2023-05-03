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
        <a href="service.html" style="background-color: #008CBA; color: white; padding: 10px 20px; border-radius: 5px; font-size: 18px;">back</a>
    </div>
    <br>
    <table>
        <tr>
            <th>Id local</th>
            <th>Adresse</th>
            <th>Description</th>
            <th>Capacité</th>
            <th>pdf</th>
       
        </tr>
        <?php foreach ($list as $local) { ?>
            <tr>
                <td><?= $local['id_local']; ?></td>
                <td><?= $local['adresse_local']; ?></td>
                <td><?= $local['description_local']; ?></td>
                <td><?= $local['capacite_local']; ?></td>
                <td> voir le pdf</td>
                
              
            </tr>
        <?php } ?>
    </table>
</body>
</html>
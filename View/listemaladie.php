<?php
include '../Controller/maladieC.php';
$maladieC= new maladieC();
$list = $maladieC->listmaladie();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des maladies</title>
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
    <h1 style="text-align: center;">Liste des maladies</h1>

    <br>
    <table>
        <tr>
            <th>Id maladie</th>
            <th>Id local</th>
            <th>type_maladie</th>
            <th>nbre_locaux_possibles</th>
       
        </tr>
        <?php foreach ($list as $maladie) { ?>
            <tr>
                <td><?= $maladie['id_maladie']; ?></td>
                <td><?= $maladie['id_local']; ?></td>
                <td><?= $maladie['type_maladie']; ?></td>
                <td><?= $maladie['nbre_locaux_possibles']; ?></td>
                
               
            </tr>
        <?php } ?>
    </table>
</body>
</html>
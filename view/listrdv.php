<?php
include '../Controller/rendez.php';
$rendez = new rendez();
$list = $rendez->listrdv();
?>
<html>

<head>
    <style>
        .appointment-form .btn-submit {
            background-color: #00ccbb;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 100px;
        }
        </style>
</head>

<body>

    <center>
    <h1>
        List of Appointements
  
    </h1>
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>ID rendez-vous</th>
            <th>Nom</th>
            <th>Prenom </th>
            <th>Age</th>
            <th>sexe</th>
            <th>Profession </th>
            <th>Type_RDV</th>
            <th>Email </th>
            <th>Téléphone</th>
            <th>Date_RDV</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
        foreach ($list as $vous) {
        ?>
            <tr>
                <td><?= $vous['ID_rdv']; ?></td>
                <td><?= $vous['Nom']; ?></td>
                <td><?= $vous['Prenom']; ?></td>
                <td><?= $vous['age']; ?></td>
                <td><?= $vous['Sexe']; ?></td>
                <td><?= $vous['Profession']; ?></td>
                <td><?= $vous['Type_RDV']; ?></td>
                <td><?= $vous['email_r']; ?></td>
                <td><?= $vous['telephone']; ?></td>
                <td><?= $vous['Date_RDV']; ?></td>
               
                <td align="center">
                    <form method="POST" action="updaterdv.php">
                        <input type="submit" name="update" value="Update">
                        <input type="hidden" value=<?PHP echo $vous['ID_rdv']; ?> name="ID_rdv">
                    </form>
                </td>
                <td>
                    <a href="deleterdv.php?ID_rdv=<?php echo $vous['ID_rdv']; ?>">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>
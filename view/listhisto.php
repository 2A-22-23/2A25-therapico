<?php
include '../controller/histoC.php';
$histo = new histo();
$list = $histo->listhisto();
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
        history of Appointements
  
    </h1>
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>ID rendez-vous</th>
            <th>appointement canceled</th>
            <th>appointement done </th>
            <th>future appointement</th>
            <th>appointement in progress</th>
            
        </tr>
        <?php
        foreach ($list as $rique) {
        ?>
            <tr>
                <td><?= $rique['ID_rdv']; ?></td>
                <td><?= $rique['rdv_annulee']; ?></td>
                <td><?= $rique['rdv_passee']; ?></td>
                <td><?= $rique['rdv_future']; ?></td>
                <td><?= $rique['rdv_courant']; ?></td>
                
               
                <td align="center">
                    <form method="POST" action="updatehisto.php">
                        <input type="submit" name="update" value="Update">
                        <input type="hidden" value=<?PHP echo $rique['ID_rdv']; ?> name="ID_rdv">
                    </form>
                </td>
                <td>
                    <a href="deletehisto.php?ID_rdv=<?php echo $rique['ID_rdv']; ?>">Delete</a>
                </td>
        <?php
        }
        ?>
    </table>
</body>

</html>
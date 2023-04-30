<?php

include '../Controller/localC.php';

$error = "";

// create local
$local = null;

// create an instance of the controller
$localC = new localC();
if (
    isset($_POST["id_local"]) &&
    isset($_POST["adresse_local"]) &&
    isset($_POST["description_local"]) &&
    isset($_POST["capacite_local"]) 
   
) {
    if (
        !empty($_POST["id_local"]) &&
        !empty($_POST['adresse_local']) &&
        !empty($_POST["description_local"]) &&
        !empty($_POST["capacite_local"]) 
        
    ) {
        $local = new local(
            $_POST['id_local'],
            $_POST['adresse_local'],
            $_POST['description_local'],
            $_POST['capacite_local'],
            null // Ajout du 5ème argument, la valeur de l'attribut image est nulle
        );
        $localC->updatelocal($local, $_POST["id_local"]);
        header('Location:Listlocaux.php');
    } else
        $error = "Missing information";
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>

<body>
    <button><a href="Listlocaux.php">Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['id_local'])) {
        $local = $localC->showlocal($_POST['id_local']);

    ?>

        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="id_local">Id local:
                        </label>
                    </td>
                    <td><input type="text" name="id_local" id="id_local" value="<?php echo $local['id_local']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="adresse_local">Adresse Local:
                        </label>
                    </td>
                    <td><input type="text" name="adresse_local" id="adresse_local" value="<?php echo $local['adresse_local']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="description_local">Description local:
                        </label>
                    </td>
                    <td><input type="text" name="description_local" id="description_local" value="<?php echo $local['description_local']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="capacite_local">capacite local:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="capacite_local" value="<?php echo $local['capacite_local']; ?>" id="capacite_local">
                    </td>
                </tr>
              
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Update">
                    </td>
                    <td>
                        <input type="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>
</body>

</html>
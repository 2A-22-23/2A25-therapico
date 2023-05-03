<?php
include '../Controller/localC.php';

$error = "";

// create local
$local = null;

// create an instance of the controller
$localC = new localC();

// check if form was submitted
if (isset($_POST['submit'])) {
    // check if all fields were filled out
    if (
        !empty($_POST['id_local']) &&
        !empty($_POST['adresse_local']) &&
        !empty($_POST['description_local']) &&
        !empty($_POST['capacite_local'])
    ) {
        // create a new local object
        $local = new local(
            $_POST['id_local'],
            $_POST['adresse_local'],
            $_POST['description_local'],
            $_POST['capacite_local'],
            null
        );

        // update the local in the database
        $localC->updatelocal($local, $_POST['id_local']);

        // redirect to list of locals
        header('Location: Listlocaux.php');
    } else {
        $error = "Missing information";
    }
}

// check if an ID was provided
if (isset($_POST['id_local'])) {
    $local = $localC->showlocal($_POST['id_local']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Local</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center mb-5">Mise à jour Local</h1>

        <!-- display error message if there is one -->
        <?php if ($error !== ""): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>

        <!-- display confirmation message if local was updated -->
        <?php if ($local !== null): ?>
            <div class="alert alert-success">Local updated successfully!</div>
        <?php endif; ?>

        <!-- display form to update local -->
        <?php if ($local !== null): ?>
            <form method="POST">
                <div class="form-group row">
                    <label for="id_local" class="col-sm-2 col-form-label">ID:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="id_local" name="id_local" value="<?php echo $local['id_local']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="adresse_local" class="col-sm-2 col-form-label">Address:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="adresse_local" name="adresse_local" value="<?php echo $local['adresse_local']; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description_local" class="col-sm-2 col-form-label">Description:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="description_local" name="description_local" value="<?php echo $local['description_local']; ?>" required>
</div>
</div>
<div class="form-group row">
<label for="capacite_local" class="col-sm-2 col-form-label">Capacity:</label>
<div class="col-sm-10">
<input type="number" class="form-control" id="capacite_local" name="capacite_local" value="<?php echo $local['capacite_local']; ?>" required>
</div>
</div>
<div class="form-group row">
<div class="col-sm-10 offset-sm-2">
<button type="submit" class="btn btn-primary" name="submit">Update Local</button>
</div>
</div>
</form>
<?php endif; ?>
</div>

</body>
</html>

<?php
include '../Controller/maladieC.php';

$error = "";

// create maladie
$maladie = null;

// create an instance of the controller
$maladieC = new maladieC();

// check if form was submitted
if (isset($_POST['submit'])) {
    // check if all fields were filled out
    if (
        !empty($_POST['id_maladie']) &&
        !empty($_POST['id_local']) &&
        !empty($_POST['type_maladie']) &&
        !empty($_POST['nbre_locaux_possibles'])
    ) {
        // create a new local object
        $maladie = new maladie(
            $_POST['id_maladie'],
            $_POST['id_local'],
            $_POST['type_maladie'],
            $_POST['nbre_locaux_possibles']
            
        );
        echo 'gyhyhuu';
        // update the local in the database
        $maladieC->updatemaladie($maladie, $_POST['id_maladie']);

        // redirect to list of locals
        header('Location: Listmaladie.php');
    } else {
        $error = "Missing information";
    }
}

// check if an ID was provided
if (isset($_POST['id_maladie'])) {
    $maladie = $maladieC->showmaladie($_POST['id_maladie']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update maladie</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center mb-5">Mise à jour maladie</h1>

        <!-- display error message if there is one -->
        <?php if ($error !== ""): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>

        <!-- display confirmation message if local was updated -->
        <?php if ($maladie !== null): ?>
            <div class="alert alert-success">maladie updated successfully!</div>
        <?php endif; ?>

        <!-- display form to update local -->
        <?php if ($maladie !== null): ?>
            <form method="POST">
                <div class="form-group row">
                    <label for="id_maladie" class="col-sm-2 col-form-label">ID:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="id_maladie" name="id_maladie" value="<?php echo $maladie['id_maladie']; ?>" readonly>
                    </div>
                </div>
  <div class="form-group row">
                    <label for="id_local" class="col-sm-2 col-form-label">Id local:</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="id_local" name="id_local" value="<?php echo $maladie['id_local']; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="type_maladie" class="col-sm-2 col-form-label">Type maladie:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="type_maladie" name="type_maladie" value="<?php echo $maladie['type_maladie']; ?>" required>
</div>
</div>
<div class="form-group row">
<label for="nbre_locaux_possibles" class="col-sm-2 col-form-label">Nombre de local possibles:</label>
<div class="col-sm-10">
<input type="number" class="form-control" id="nbre_locaux_possibles" name="nbre_locaux_possibles" value="<?php echo $maladie['nbre_locaux_possibles']; ?>" required>
</div>
</div>
<div class="form-group row">
<div class="col-sm-10 offset-sm-2">
<button type="submit" class="btn btn-primary" name="submit">Update maladie</button>
</div>
</div>
</form>
<?php endif; ?>
</div>

</body>
</html>

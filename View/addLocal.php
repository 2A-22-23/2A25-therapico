<?php
include '../Controller/localC.php';

$error = "";
$local = null;
$localC = new localC();

if (isset($_POST["adresse_local"]) && isset($_POST["description_local"]) && isset($_POST["capacite_local"])) {
    if (!empty($_POST['adresse_local']) && !empty($_POST["description_local"]) && !empty($_POST["capacite_local"])) {
        $local = new local(
            null,
            $_POST['adresse_local'],
            $_POST['description_local'],
            $_POST['capacite_local'],
            null
        );
        $localC->addlocal($local);
        header('Location:Listlocaux.php');
    } else {
        $error = "Missing information";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gestion des locaux du centre de psychiatrie</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
</head>
<body>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-header">
                    <h3 class="font-weight-light my-4">Ajouter un local</h3>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-group">
                            <label class="small mb-1" for="adresse_local">Adresse du local</label>
                            <input class="form-control py-4" id="adresse_local" name="adresse_local" type="text"
                                   placeholder="Entrez l'adresse du local" required/>
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="description_local">Description du local</label>
                            <textarea class="form-control py-4" id="description_local" name="description_local"
                                      placeholder="Entrez la description du local" required></textarea>
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="capacite_local">Capacité du local</label>
                            <input class="form-control py-4" id="capacite_local" name="capacite_local" type="number"
                                   placeholder="Entrez la capacité du local" required/>
                        </div>
                        <div class="form-group mt-4 mb-0">
                            <button class="btn btn-primary btn-block" type="submit">Ajouter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>

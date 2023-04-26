<?php
include '../Controller/maladieC.php';
include '../Controller/localC.php';

$error = "";
$local = null;
$localC = new localC();


$maladie = null;
$maladieC = new maladieC();

if (isset($_POST["id_local"]) &&
 isset($_POST["type_maladie"]) &&
 isset($_POST["nbre_locaux_possibles"])
 ) {
    if (!empty($_POST['id_local']) && 
    !empty($_POST["type_maladie"]) &&
     !empty($_POST["nbre_locaux_possibles"])) {
        $maladie = new maladie(
            null,
            $_POST['id_local'],
            $_POST['type_maladie'],
            $_POST['nbre_locaux_possibles']
            
        );
        $maladieC->addmaladie1($maladie,$id_local);
        header('Location:Listmaladie.php');
    } else {
        $error = "Missing information";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gestion des maladies du centre de psychiatrie</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
</head>
<body>
<?php 
    if (isset($_POST['id_local'])) {
        $local=$localC->showlocal($_POST['id_local']);
    }
    ?>
   
    
 
    <div id="error">
        <?php echo $error; ?>
    </div>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-header">
                    <h3 class="font-weight-light my-4">Ajouter une maladie</h3>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-group">
                            <label class="small mb-1" for="id_local">ID local</label>
                            <input type="number" name="id_local"  value="<?php echo $local['id_local']; ?>" id="id_local" placeholder="ID Local" pattern="[0-9]+" minlength="8" maxlength="8" required />

                            
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="type_maladie">Type de maladie</label>
                            <textarea class="form-control py-4" id="type_maladie" name="type_maladie"
                                      placeholder="Entrez le type de maladie" required></textarea>
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="nbre_locaux_possibles">Nombre des locaux possiles</label>
                            <input class="form-control py-4" id="nbre_locaux_possibles" name="nbre_locaux_possibles" type="number"
                                   placeholder="Entrez le nombre possible du local" required/>
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

<?php

include '../controller/histoC.php';

$error = "";

// create vous
$rique = null;

// create an instance of the controller
$histo = new histo();
if ( 
    isset($_POST["ID_rdv"]) &&
    isset($_POST["rdv_annulee"])&&
    isset($_POST["rdv_passee"])&&
    isset($_POST["rdv_future"])&&
    isset($_POST["rdv_courant"])
    

) {
    if (
        !empty($_POST['ID_rdv']) &&
        !empty($_POST['rdv_annulee'])&&
        !empty($_POST['rdv_passee'])&&
        !empty($_POST['rdv_future'])&&
        !empty($_POST['rdv_courant'])
        
    ) {
        $rique = new rique(
            null,
            new DateTime($_POST['rdv_annulee']),
            new DateTime($_POST['rdv_passee']),
            new DateTime($_POST['rdv_future']),
            new DateTime($_POST['rdv_courant']),
            $_POST['stats']

        );
        $histo->updatehisto($rique, $_POST["ID_rdv"]);
        header('Location:listhisto.php');
    } else
        $error = "Missing information";
}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>User Display</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <style>
        .appointment-form {
            max-width: 500px;
            margin: 0 auto;
            text-align: center;
        }

        .appointment-form h2 {
            font-size: 24px;
            margin-bottom: 30px;
        }

        .appointment-form label {
            display: block;
            margin-bottom: 10px;
            text-align: left;
        }

        .appointment-form input,
        .appointment-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .appointment-form textarea {
            height: 120px;
        }

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
    <button>
        <a href="listhisto.php">Back to list</a></button>
    <hr>
   <div class="appointment-form">
        <h2 style="color:rgb(6, 255, 226);">update history</h2>
        <div id="error">
    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['ID_rdv'])) {
        $rique = $histo->showhisto($_POST['ID_rdv']);

    ?>
 <form  action="" method="POST">

 
 <label for="ID_rdv">Canceled Appointement :</label>
            <input type="number" id="ID_rdv" name="ID_rdv" value="<?php echo $rique['ID_rdv']; ?>">


            <label for="rdv_annulee">Canceled Appointement :</label>
            <input type="datetime-local" id="rdv_annulee" name="rdv_annulee" value="<?php echo $rique['rdv_annulee']; ?>">

            <label for="rdv_passee">Appointement Done :</label>
            <input type="datetime-local" id="rdv_passee" name="rdv_passee" value="<?php echo $rique['rdv_passee']; ?>">

            <label for="rdv_future">Future Appointement :</label>
            <input type="datetime-local" id="rdv_future" name="rdv_future" value="<?php echo $rique['rdv_future']; ?>">
             
            <label for="rdv_courant">Appointement In Progress :</label>
            <input type="datetime-local" id="rdv_courant" name="rdv_courant" value="<?php echo $rique['rdv_courant']; ?>">

        
                     
          
            <input type="submit" value="Save" class="btn">
        </button>  

    </form>
    <?php
    }
    ?>




               
             
               </button>
               <button type="submit" class="btn-submit">Annulée
               </button>
</body>

</html>

<?php
include '../controller/histoC.php';


$error = "";

// create rique
$rique = null;

// create an instance of the controller
$histo = new histo();
if ( 
    isset($_POST["rdv_annulee"])&&
    isset($_POST["rdv_passee"])&&
    isset($_POST["rdv_future"])&&
    isset($_POST["rdv_courant"])


) {
    if (
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
        $histo->addhitso($rique);
        header('Location:listhisto.php');
    } else {
        $error = "Missing information";
    }
}

?>
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">

   
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


    <div class="appointment-form">
        <h2 style="color:rgb(6, 255, 226);">Add   history </h2>
        <div id="error">
        <?php echo $error; ?>
    </div>
        <form  action="" method="POST">
      
       

            <label for="rdv_annulee">Canceled Appointement :</label>
            <input type="datetime-local" id="rdv_annulee" name="rdv_annulee">

            <label for="rdv_passee">Appointement Done :</label>
            <input type="datetime-local" id="rdv_passee" name="rdv_passee">

            <label for="rdv_future">Future Appointement :</label>
            <input type="datetime-local" id="rdv_future" name="rdv_future">
             
            <label for="rdv_courant">Appointement In Progress :</label>
            <input type="datetime-local" id="rdv_courant" name="rdv_courant">

            <button type="submit" class="btn-submit" data-wow-delay="0.39s" value="save">Save

            
               
               
               
        </form>
        
    </div>


</body>

</html>
<?php
include '../Controller/rendez.php';


$error = "";

// create vous
$vous = null;

// create an instance of the controller
$rendez = new rendez();
if ( 
    isset($_POST["Nom"]) &&
    isset($_POST["Prenom"]) &&
    isset($_POST["Sexe"])&&
    isset($_POST["Profession"])&&
    isset($_POST["Date_RDV"])&&
    isset($_POST["Type_RDV"])&&
    isset($_POST["telephone"])&&
    isset($_POST["email_r"])&&
    isset($_POST["age"])

) {
    if (
        !empty($_POST['Nom']) &&
        !empty($_POST['Prenom']) &&
        !empty($_POST['Sexe']) &&
        !empty($_POST['Profession']) &&
        !empty($_POST['Date_RDV']) &&
        !empty($_POST['Type_RDV']) &&
        !empty($_POST['telephone']) &&
        !empty($_POST['email_r']) &&
        !empty($_POST['age'])
    ) {
        $vous = new vous(
            null,
            $_POST['Nom'],
            $_POST['Prenom'],
            $_POST['Sexe'],
            $_POST['Profession'],
            new DateTime($_POST['Date_RDV']),
            $_POST['Type_RDV'],
            $_POST['telephone'],
            $_POST['email_r'],
            $_POST['age']
            
        );
        $rendez->addrdv($vous);
        require_once('sendd.php');

      header('Location:index.html');
    } else {
        $error = "Missing information";
    }
}


?>
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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


    <div class="appointment-form">
        
  
        <h2 style="color:rgb(6, 255, 226);">Prendre un rendez-vous en ligne</h2>
        <div id="error">
        <?php echo $error; ?>
    </div>
        <form  action="" method="POST">
            <label for="Nom">Nom :</label>
            <input type="text" id="Nom" name="Nom">
            <label for="Prenom">Prenom:</label>
            <input type="text" id="Prenom" name="Prenom">
            
            <label for="age">Age:</label>
            <input type="number" id="age" name="age">
            <label for="Sexe">Sexe:</label><br>
             <select id="Sexe" name="Sexe">
              <option value="Feminin">Masculin</option>
              <option value="Masculin">Feminin</option>
             </select>
            <label for="Profession">Profession:</label>
            <input type="text" id="Profession" name="Profession">

            <label for="Type_RDV">Type de rendez-vous :</label>
            <input type="text" id="Type_RDV" name="Type_RDV">

            <label for="email_r">Email :</label>
            <input type="text" id="email_r" name="email_r">

            <label for="telephone">Téléphone :</label>
            <input type="number" id="telephone" name="telephone">

            <label for="Date_RDV">Date :</label>
            <input type="date" id="Date_RDV" name="Date_RDV">
            <input type="time" id="dt" name="dt">

            

           


  


               <button type="submit"  name ="sendd" class="btn-submit" >Validé
             
               </button>
               <button type="submit" class="btn-submit">Annulée
               </button>
               
        </form>
        <script>
         
            function aa() {


                alert ("appointment set !");   
  


            }
        </script>
    </div>


</body>

</html>


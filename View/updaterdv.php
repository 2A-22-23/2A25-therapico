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
        $rendez->updaterdv($vous, $_POST["ID_rdv"]);
        header('Location:listrdv.php');
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
        <a href="listrdv.php">Back to list</a></button>
    <hr>
   <div class="appointment-form">
        <h2 style="color:rgb(6, 255, 226);">Get an appointmeent Online</h2>
        <div id="error">
    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['ID_rdv'])) {
        $vous = $rendez->showrdv($_POST['ID_rdv']);

    ?>
 <form  action="" method="POST">
 <label for="ID_rdv">ID_rdv :</label> 
            <input type="text" id="ID_rdv" name="ID_rdv" value="<?php echo $vous['ID_rdv']; ?>">
            <label for="Nom">Nom :</label> 
            <input type="text" id="Nom" name="Nom" value="<?php echo $vous['Nom']; ?>">
            <label for="Prenom">Prenom:</label>
            <input type="text" id="Prenom" name="Prenom"  value="<?php echo $vous['Prenom']; ?>">
            
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" value="<?php echo $vous['age']; ?>">
            <label for="Sexe">sexe:</label>
            <input type="text" id="Sexe" name="Sexe"value="<?php echo $vous['Sexe']; ?>" >
             <label for="Sexe">Sexe:</label><br>
             <select id="Sexe" name="Sexe">
              <option value="Feminin">Masculin</option>
              <option value="Masculin">Feminin</option>
             </select>

            <label for="Profession">Profession:</label>
            <input type="text" id="Profession" name="Profession"value="<?php echo $vous['Profession']; ?>" >

            <label for="Type_RDV">Type de rendez-vous :</label>
            <input type="text" id="Type_RDV" name="Type_RDV"value="<?php echo $vous['Type_RDV']; ?>" >

            <label for="email_r">Email :</label>
            <input type="text" id="email_r" name="email_r" value="<?php echo $vous['email_r']; ?>">

            <label for="telephone">Téléphone :</label>
            <input type="number" id="telephone" name="telephone" value="<?php echo $vous['telephone']; ?>" >

            <label for="Date_RDV">Date :</label>
            <input type="date" id="Date_RDV" name="Date_RDV" value="<?php echo $vous['Date_RDV']; ?>">
                
               <button type="submit" class="btn-submit" onclick="appset()">Update
             
             </button>
             <button type="submit" class="btn-submit">Annulée
             </button>     
            

    </form>
    <?php
    }
    ?>

<script>
                // Get the input fields
                
                function appset(){
                    alert ("appointment set !");
                }
                </script>
                



</body>

</html>

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
      header('Location:emailrdv.php');
    } else {
        header('location:service.html');
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
        .btn-link {
           text-decoration: none;
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
            <input type="varchar" id="Nom" name="Nom" placeholder="name" pattern="[A-Za-z\- ]+" minlength="3" maxlength="25" required>
            <label for="Prenom">Prenom:</label>
            <input type="varchar" id="Prenom" name="Prenom" placeholder="Last name" pattern="[A-Za-z\- ]+" minlength="3" maxlength="25" required>
            
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" pattren="[0-100] {3}" minlength="00" maxlength="2" required>
            <label for="Sexe">Sexe:</label><br>
             <select id="Sexe" name="Sexe">
              <option value="Feminin">Masculin</option>
              <option value="Masculin">Feminin</option>
             </select>
            <label for="Profession">Profession:</label>
            <input type="text" id="Profession" name="Profession"  pattern="[A-Za-z\- ]+" placeholder="Professsion" maxlength="255" required>

            <label for="Type_RDV">Type de rendez-vous :</label>
            <input type="text" id="Type_RDV" name="Type_RDV"  pattern="[A-Za-z\- ]+" placeholder="appointement type" maxlength="255" required>

            <label for="email_r">Email :</label>
            <input type="email" id="email_r" name="email_r" placeholder="exemple@gmail.com" minlength="8"maxlength="25" required>

            <label for="telephone">Téléphone :</label>
            <input type="number" id="telephone" name="telephone"   pattern="[0-9]{8}" placeholder="12345678" maxlength="8" required>

            <label for="Date_RDV">Date :</label>
            <input type="date" id="Date_RDV" name="Date_RDV" required>
            <input type="time" id="dt" name="dt">
            

           





            
               
        </form>
        <script>
         
            function aa() {


                alert ("redirecting to email confirmation !");   
  


            }
            function bb()
            {
                alert ("appointement canceled ! returning to services");
            }
        </script>
    </div>
<style> .btn-email{background-color: #00ccbb;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 100px;
            background-color: darkcyan;
          transition: all 0.3s ease;
          margin-right: 10px;

}  .btn-email:hover {
    background-color: grey;
  color: black;
  border-color: black;
}
</style>
    <div >
            <a href="emailrdv.php">
              <button type="submit" class="btn-email" onclick="aa()">Confirm appointment using Email</button>
            </a>
            <div style="padding: 30px 0;">
            <a href="http://localhost/therapico/View/service.html" class="btn-link">
             <button type="submit" class="btn-email"  onclick="bb()">Cancel</button>
           </a>

           
</body>

</html>



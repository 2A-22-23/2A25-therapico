<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Suivi</title>
    <style>
      body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
      }

      section {
        background-color: #92cc70;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .wrapper {
        background-color: white;
        max-width: 400px;
        padding: 30px;
        border-radius: 5px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
      }

      .signup header,
      .form header {
        font-size: 20px;
        font-weight: 600;
        padding-bottom: 20px;
        color: #555;
        border-bottom: 1px solid #ccc;
        cursor: pointer;
      }

      .form header {
        color: #fff;
        border-bottom: none;
      }

      .signup header.signup-active {
        color: #92cc70;
        border-bottom: 2px solid #92cc70;
      }

      .form header.suivi-active {
        color: #92cc70;
        border-bottom: 2px solid #92cc70;
      }

      .form-group {
        margin-bottom: 20px;
      }

      .form-group label {
        display: block;
        margin-bottom: 5px;
        color: #555;
        font-weight: 600;
      }

      .form-group input,
      .form-group textarea {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        font-size: 16px;
        color: #555;
      }

      .form-group input:focus,
      .form-group textarea:focus {
        outline: none;
        border-color: #92cc70;
      }

      .checkbox {
        margin-top: 20px;
        margin-bottom: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .checkbox label {
        font-weight: 600;
        margin-left: 10px;
      }

      button[type="submit"] {
        background-color: #92cc70;
        color: white;
        font-size: 16px;
        font-weight: 600;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        cursor: pointer;
        transition: background-color 0.3s ease;
      }

      button[type="submit"]:hover {
        background-color: #78ad4b;
      }

      #error {
        color: red;
        font-weight: 600;
        text-align: center;
        margin-bottom: 20px;
      }
    </style>
  </head>
  <body>
<?php

include '../Controller/suiviC.php';
include '../Controller/docteurC.php';

$error = "";

// create docteur
$docteur = null;

// create an instance of the controller
$docteurC = new docteurC(); 
$error = "";

// create suivi
$suivi = null;

// create an instance of the controller
$suiviC = new suiviC();

if (
  isset($_POST["cin_s"]) &&
  isset($_POST["cin_d"]) &&
  isset($_POST["cin_p"]) &&
  isset($_POST["date_consultation"]) &&
  isset($_POST["symptomes"]) &&
  isset($_POST["diagnostic"])
) {
  if (
      !empty($_POST['cin_s']) &&
      !empty($_POST["cin_d"]) &&
      !empty($_POST["cin_p"]) &&
      !empty($_POST["date_consultation"]) &&
      !empty($_POST["symptomes"]) &&
      !empty($_POST["diagnostic"]) &&
      in_array($_POST["diagnostic"], array("A", "B", "C"))
  ) {
      // create a new suivi object
      $suivi = new suivi(
          $_POST['cin_s'],
          $_POST['cin_d'],
          $_POST['cin_p'],
          $_POST['date_consultation'],
          $_POST['symptomes'],
          $_POST['diagnostic']
      );
    
      // add the suivi to the database
      $suiviC->addsuivi1($suivi,$cin_d);
      header('Location: Listesuivis.php');
  } else {
      $error = "Missing information";
  }
}
?>
<section>

<?php 
    if (isset($_POST['cin_d'])) {
        $docteur=$docteurC->showdocteur($_POST['cin_d']);
    }
    ?>
   
    
 
    <div id="error">
        <?php echo $error; ?>
    </div>
  <div class="wrapper">
    <div class="form">
      <header>Suivi</header>
      <form action="" method="POST">
        <div class="form-group">
          <label for="cin_s">Doctor's ID</label>
          <input type="number" name="cin_s" id="cin_s" pattern="[0-9]+" minlength="8" maxlength="8" required/>
        </div>
    
        <div class="form-group">
          <label for="cin_d">ID Card</label>
          <input type="number" name="cin_d"  value="<?php echo $docteur['cin_d']; ?>" id="cin_d" placeholder="ID Card" pattern="[0-9]+" minlength="8" maxlength="8" readonly/>


        </div>
        <div class="form-group">
          <label for="cin_p">Patient's ID</label>
          <input type="text" name="cin_p" id="cin_p" pattern="[0-9]+" minlength="8" maxlength="8" required/>
        </div>
        <div class="form-group">
          <label for="date_consultation">Date of Consultation</label>
          <input type="date" name="date_consultation" id="date_consultation" required/>
        </div>
        <div class="form-group">
  <label for="symptomes">Symptoms</label>
  <select name="symptomes" id="symptomes" required>
    <option value="">Select a symptom</option>
    
    <option value="Dépression">Dépression</option>
    <option value="Trouble bipolaire">Trouble bipolaire</option>
    <option value="Trouble anxieux">Trouble anxieux</option>
    <option value="Schizophrénie">Schizophrénie</option>
    <option value="Trouble de la personnalité">Trouble de la personnalité</option>
  </select>
</div>
        <div class="form-group">
  <label for="diagnostic">Diagnostic</label>
  <select name="diagnostic" id="diagnostic" required>
    <option value="">Sélectionnez un niveau d'état</option>
    <option value="A">A</option>
    <option value="B">B</option>
    <option value="C">C</option>
  </select>
</div>
        
        <div class="checkbox">
        <input type="checkbox" id="signupCheck" required />
        <label for="signupCheck">I accept all terms & conditions</label>
      </div>
        
      <button type="submit" name="submit" value="Suivi" onclick="passValidation()">add</button>
    </form>
  </div>
  <script>
    const wrapper = document.querySelector(".wrapper"),
      signupHeader = document.querySelector(".signup header"),
        suiviHeader = document.querySelector(".form header");

      suiviHeader.addEventListener("click", () => {
        wrapper.classList.add("suivi-active");
signupHeader.classList.remove("signup-active");
});
signupHeader.addEventListener("click", () => {
    wrapper.classList.remove("suivi-active");
    signupHeader.classList.add("signup-active");
  });

  
  
</script>
</div>
</section>


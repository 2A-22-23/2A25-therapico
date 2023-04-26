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
        !empty($_POST["diagnostic"])
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
          <input type="number" name="cin_d"  value="<?php echo $docteur['cin_d']; ?>" id="cin_d" placeholder="ID Card" pattern="[0-9]+" minlength="8" maxlength="8" required />


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
          <textarea name="symptomes" id="symptomes" minlength="10" maxlength="200" required></textarea>
        </div>
        <div class="form-group">
          <label for="diagnostic">Diagnostic</label>
          <textarea name="diagnostic" id="diagnostic" minlength="10" maxlength="200" required></textarea>
          
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


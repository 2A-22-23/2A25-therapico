<?php

include '../Controller/suiviC.php';

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
        !empty($_POST["cin_s"]) &&
        !empty($_POST['cin_d']) &&
        !empty($_POST["cin_p"]) &&
        !empty($_POST["date_consultation"]) &&
        !empty($_POST["symptomes"]) &&
        !empty($_POST["diagnostic"]) 
    ) {
        $suivi = new suivi(
            $_POST['cin_s'],
            $_POST['cin_d'],
            $_POST['cin_p'],
            $_POST['date_consultation'],
            $_POST['symptomes'],
            $_POST['diagnostic']
        );
        $suiviC->updatesuivi($suivi, $_POST["cin_s"]);
        header('Location:Listesuivis.php');
    } else
        $error = "Missing information";
}
?>
<hr>

<div id="error">
    <?php echo $error; ?>
</div>

<?php
if (isset($_POST['cin_s'])) {
    $suivi=$suiviC->showsuivi($_POST['cin_s']);
}
?>

<a href="Listsuivis.php" style="text-decoration:none" target="_blank" >Back to list </a>


<div id="error">
    <?php echo $error; ?>
</div>

<form action="" method="POST">
    
    <input type="number" name="cin_s"  value="<?php echo $suivi['cin_s']; ?>" id="cin_s" placeholder="ID Card" pattern="[0-9]+" minlength="8" maxlength="8" required />
    <input type="number" name="cin_d" id="cin_d" value="<?php echo $suivi['cin_d']; ?>" placeholder="Doctor ID Card" pattern="[0-9]+" minlength="8" maxlength="8" required />
    <input type="number" name="cin_p" id="cin_p" value="<?php echo $suivi['cin_p']; ?>" placeholder="Patient ID Card" pattern="[0-9]+" minlength="8" maxlength="8" required />
    <input type="date" name="date_consultation" id="date_consultation" value="<?php echo $suivi['date_consultation']; ?>" placeholder="Consultation date" required />
    <input type="text" name="symptomes" id="symptomes" value="<?php echo $suivi['symptomes']; ?>" placeholder="Symptoms" minlength="3" maxlength="50" required />
    <input type="text" name="diagnostic" id="diagnostic"  value="<?php echo $suivi['diagnostic']; ?>" placeholder="Diagnostic" minlength="3" maxlength="50" required />
          
    <input type="submit" value="Update" /> 
</form>
</div>
  

<script>
  const wrapper = document.querySelector(".wrapper"),
  signupHeader = document.querySelector(".signup header"),
  loginHeader = document.querySelector(".login header");

  loginHeader.addEventListener("click", () => {
    wrapper.classList.add("active");
  });
  signupHeader.addEventListener("click", () => {
    wrapper.classList.remove("active");
});
      </script>
    </section>
  </body>
</html>
 

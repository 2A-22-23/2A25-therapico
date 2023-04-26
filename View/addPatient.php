<?php

include '../Controller/PatientP.php';

$error = "";

// create patient
$patient = null;

// create an instance of the controller
$patientP = new patientP();
if (
    
    isset($_POST["cin_p"]) &&
    isset($_POST["nom_prenom_p"]) &&
    isset($_POST["date_n_p"]) &&
    isset($_POST["tel_p"]) &&
    isset($_POST["email_p"]) &&
    isset($_POST["sexe_p"]) &&
    isset($_POST["pass_p"])
) {
    if (
        !empty($_POST["cin_p"]) &&
        !empty($_POST["nom_prenom_p"]) &&
        !empty($_POST["date_n_p"]) &&
        !empty($_POST["tel_p"]) &&
        !empty($_POST["email_p"]) &&
        !empty($_POST["sexe_p"]) &&
        !empty($_POST["pass_p"])
    ) {
        $patient = new patient(
            
            $_POST['cin_p'],
            $_POST['nom_prenom_p'],
            new DateTime($_POST['date_n_p']),
            $_POST['tel_p'],
            $_POST['email_p'],
            $_POST['sexe_p'],
            $_POST['pass_p']
           
           // new DateTime($_POST['date_n_p'])
        );
        $patientP->addPatient($patient);
        header('Location:sign.html');
    } else
        $error = "Missing information";
}


?>



<html>


  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/mylogo.png">
    <title>Patient Registration</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
  </head>
  <body>
  
  <div class="form signup">
  <!--<a href="ListPatient.php">
   <input type="Submit" value="Back To List" style="text-decoration:none" target="_blank"/>
</a>-->
<!--<form action="signin.html">-->
<form action="index.html">
  <button class="button button2"> Back to List </button>
</form>
          
        
      </div>
    <!--<a href="ListPatient.php">Back to list </a>-->
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>
    <style>

/* SKANDER BEGIN */

/* Import Google font - Poppins */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins",
    sans-serif;
}
body {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #f0faff;
}
.wrapper {
  position: relative;
  max-width: 470px;
  width: 100%;
  border-radius: 12px;
  padding: 20px
    30px
    120px;
  background: #447cdd;
  box-shadow: 0
    5px
    10px
    rgba(
      0,
      0,
      0,
      0.1
    );
  overflow: hidden;
}
.form.login {
  position: absolute;
  left: 50%;
  bottom: -86%;
  transform: translateX(
    -50%
  );
  width: calc(
    100% +
      220px
  );
  padding: 20px
    140px;
  border-radius: 50%;
  height: 100%;
  background: #fff;
  transition: all
    0.6s
    ease;
}
.wrapper.active
  .form.login {
  bottom: -15%;
  border-radius: 35%;
  box-shadow: 0 -5px
    10px rgba(0, 0, 0, 0.1);
}
.form
  header {
  font-size: 30px;
  text-align: center;
  color: #fff;
  font-weight: 600;
  cursor: pointer;
}
.form.login
  header {
  color: #333;
  opacity: 0.6;
}
.wrapper.active
  .form.login
  header {
  opacity: 1;
}
.wrapper.active
  .signup
  header {
  opacity: 0.6;
}
.wrapper
  form {
  display: flex;
  flex-direction: column;
  gap: 20px;
  margin-top: 40px;
}
form
  input {
  height: 35px;
  outline: none;
  border: none;
  padding: 0
    15px;
  font-size: 16px;
  font-weight: 400;
  color: #333;
  border-radius: 8px;
  background: #fff;
}
.form.login
  input {
  border: 1px
    solid
    #aaa;
}
.form.login
  input:focus {
  box-shadow: 0
    1px 0
    #ddd;
}
form
  .checkbox {
  display: flex;
  align-items: center;
  gap: 10px;
}
.checkbox
  input[type="checkbox"] {
  accent-color: #fff;
  cursor: pointer;
}
form
  .checkbox
  label {
  cursor: pointer;
  color: #fff;
}
form a {
  color: #333;
  text-decoration: none;
}
form
  a:hover {
  text-decoration: underline;
}
form
  input[type="submit"] {
  margin-top: 15px;
  padding: none;
  font-size: 18px;
  font-weight: 500;
  cursor: pointer;
}
.form.login
  input[type="submit"] {
  background: #447cdd;
  color: #fff;
  border: none;
}


body {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 20px;
  background: rgb(255, 255, 255);
}
.container {
  position: relative;
  max-width: 700px;
  width: 100%;
  background: #fff;
  padding: 25px;
  border-radius: 8px;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}
.container header {
  font-size: 1.5rem;
  color: #333;
  font-weight: 500;
  text-align: center;
}
.container .form {
  margin-top: 30px;
}
.form .input-box {
  width: 100%;
  margin-top: 20px;
}
.input-box label {
  color: #333;
}
.form :where(.input-box input, .select-box) {
  position: relative;
  height: 50px;
  width: 100%;
  outline: none;
  font-size: 1rem;
  color: #707070;
  margin-top: 8px;
  border: 1px solid #ddd;
  border-radius: 6px;
  padding: 0 15px;
}
.input-box input:focus {
  box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
}
.form .column {
  display: flex;
  column-gap: 15px;
}

.form .gender-box {

  margin-top: 20px;
}
.gender-box h3 {

  color: #333;
  font-size: 1rem;
  font-weight: 20;
  margin-bottom: 8px;
}
.form :where(.gender-option, .gender) {


  display: flex;
  align-items: center;
  column-gap: 50px;
  flex-wrap: wrap;
}
.form .gender {

  column-gap: 5px;
}
.gender input {

  accent-color: rgb(255, 255, 255);
}
.form :where(.gender input, .gender label) {
  cursor: pointer;
}
.gender label {
  color: #707070;
}
.address :where(input, .select-box) {
  margin-top: 15px;
}
 
/* Dark Mode */
body{
    margin: 0%;
    padding: 0%;
    font-family: "Arial", Helvetica, sans-serif;
}
i{
    font-size: 25px;
    cursor: pointer;
    position: absolute;
    top: 5%;
    left: 85%;
    transform: translate(-50%, -50%);
}
h1{
    text-align: center;
    font-size: 3em;
}

a:link, a:visited {
  background-color: #447cdd;
  color: white;
  padding: 15px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: #3C99DC;
}
.button {
background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button2 {background-color: #447cdd;} /* Blue */

/* SKANDER END */


    </style>
    <section class="wrapper">
      <div class="form signup">
        <header>Signup</header>
        <i class="bi bi-brightness-high-fill" id="toggleDark"></i>
        
        <script>


function passValidation ()
{
var p1=document.getElementById("pass_p").value;
var Cp2=document.getElementById("Cpass_p").value;

const cinInput = document.getElementById("cin_p");
  const nomInput = document.getElementById("nom_prenom_p");
  const emailInput = document.getElementById("email_p");
  const telInput = document.getElementById("tel_p");
  

  const cinRegex = /^[0-9]{8}$/;
  const emailRegex = /^\S+@\S+\.\S+$/;

  if (!cinRegex.test(cinInput.value)) {
    alert("Please enter a valid ID card number.");
    return false;
  }

  if (nomInput.value === "") {
    alert("Please enter your fullname.");
    return false;
  }

  if (!emailRegex.test(emailInput.value)) {
    alert("Please enter a valid email address.");
    return false;
  }

  if (telInput.value === "") {
    alert("Please enter your phone number.");
    return false;
  }

if(p1===Cp2)
{
    alert("Added Successfully !! Thank you for being a Therapico member !!!! ");
}
else
{
alert("Les mots de passe ne sont pas identiques");
}

}


const toggle = document.getElementById('toggleDark');
const body = document.querySelector('body');

toggle.addEventListener('click', function(){
    this.classList.toggle('bi-moon');
    if(this.classList.toggle('bi-brightness-high-fill')){
        body.style.background = 'white';
        body.style.color = 'black';
        body.style.transition = '2s';
    }else{
        body.style.background = 'black';
        body.style.color = 'white';
        body.style.transition = '2s';
    }
});

        </script>

    
        <form action="" method="POST"  onsubmit="return passValidation()" >
         <input type="number" name="cin_p" id="cin_p" placeholder="ID Card" pattern="[0-9]+" minlength="8" maxlength="8" required/>
         <input type="text" name="nom_prenom_p" id="nom_prenom_p" placeholder="Fullname" pattern="[A-Za-z\- ]+" minlength="3" maxlength="25" required />
         <input type="date" name="date_n_p" id="date_n_p" placeholder="Birth date" min="1900-01-01" max="2005-12-31" required />
         <input type="number" name="tel_p" id="tel_p" placeholder="Phone number" pattern="[0-9]{8}" minlength="8" maxlength="8" required />
         <input type="text" name="email_p" id="email_p" placeholder="Email address" minlength="12" maxlength="25" required />

         <select id="sexe_p" name="sexe_p">
                                                
 <option id="Male" name="Male" value="Male">Male</option>
          <option id="Female" name="Female" value="Female">Female</option>
        </select>
        
         <input type="password" name="pass_p" id="pass_p" placeholder="Password" minlength="8" maxlength="30" required />
          <input type="password" name="Cpass_p" id="Cpass_p" placeholder="Confirm password"  minlength="8" maxlength="30" required />
              
          <div class="checkbox">
            <input type="checkbox" id="signupCheck" />
            <label for="signupCheck">I accept all terms & conditions</label>
          </div>
          
          <button type="submit" value="Signup" onclick="passValidation ()">Signup</button>
         <!-- <input type="submit" value="Signup"onclick="passValidation ()" /> -->
        </form>
      </div>
      
      <div class="form login">
        <header>Login</header>
        <form action="#">
          <input type="text" placeholder="Email address" required />
          <input type="password" placeholder="Password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" minlength="8" maxlength="30" required />
          <a href="#">Forgot password?</a>
          <input type="submit" value="Login" />
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

<?php

include '../Controller/traitementT.php';

$error = "";

// create patient
$traitementT = null;

// create an instance of the controller
$traitementT = new traitementT();
if (
    isset($_POST["id_T"]) &&
    isset($_POST["cin_p"]) &&
    isset($_POST["type_T"]) &&
    isset($_POST["duree_T"]) 
) {
    if (
        !empty($_POST["id_T"]) &&
        !empty($_POST["cin_p"]) &&
        !empty($_POST["type_T"]) &&
        !empty($_POST["duree_T"]) 
        
    ) {
      
        $traitement = new traitement(
            $_POST['id_T'],
            $_POST['cin_p'],
            $_POST['type_T'],

            $_POST['duree_T']
        );
       
        $traitementT->update_traitement($traitement, $_POST["id_T"]);
        header('Location:check_traitement.php');
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
    <title>Treatment Update</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
  </head>
  <body>
  
  <!--<button><a href="ListPatient.php">Back to list</a></button>-->
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_GET['id_T'])) {
        $traitement=$traitementT->show_traitement($_GET['id_T']);
        
        
    }
    ?>
   
    
    
 
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

.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #f44336;} /* Red */ 
.button4 {background-color: #e7e7e7; color: black;} /* Gray */ 
.button5 {background-color: #555555;} /* Black */

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

.pos-button {
  top: 100px;
  right: 110px;
}

/* SKANDER END */


    </style>
    <section class="wrapper">
      <div class="form signup">
        <header>Update</header>
        <i class="bi bi-brightness-high-fill" id="toggleDark"></i>

        <script>

function passValidation ()
{


  const typeTInput = document.getElementById('type_T');

// écouteur d'événement pour la saisie du clavier
typeTInput.addEventListener('input', () => {
  const value = typeTInput.value;
  // utiliser une expression régulière pour valider les caractères acceptables
  const validCharacters = /^[A-Za-z\- ]+$/;
  if (!validCharacters.test(value)) {
    // si la valeur entrée n'est pas valide, afficher un message d'erreur
    typeTInput.setCustomValidity('Le champ doit contenir uniquement des caractères alphabétiques, des espaces ou des tirets.');
  } else {
    // sinon, supprimer le message d'erreur
    typeTInput.setCustomValidity('');
  }
});

const duree_T = document.getElementById("duree_T");

duree_T.addEventListener("input", function() {
  const regex = /[^a-zA-Z0-9]/gi;
  duree_T.value = duree_T.value.replace(regex, "");
});

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

    
        <form action="" method="POST">
          
        <input type="number" name="id_T"  value="<?php echo $traitement['id_T']; ?>" id="id_T" />
        
        <input type="number" name="cin_p"  value="<?php echo $traitement['cin_p']; ?>" id="cin_p" />
        <input type="text" name="type_T" id="type_T" value="<?php echo $traitement['type_T']; ?>" placeholder="Treatment Type"  />
        <input type="text" name="duree_T" id="duree_T" value="<?php echo $traitement['duree_T']; ?>" placeholder="Treatment Duration"  />
          <input type="submit" value="Update"  onclick="passValidation ()" /> 

          <a href="check_traitement.php"  style="text-decoration:none" target="_blank" >Back to list </a>
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
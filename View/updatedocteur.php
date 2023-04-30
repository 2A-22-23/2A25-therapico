<?php

include '../Controller/docteurC.php';

$error = "";

// create docteur
$docteur = null;

// create an instance of the controller
$docteurC = new docteurC();

if (
    isset($_POST["cin_d"]) &&
    isset($_POST["firstName_d"]) &&
    isset($_POST["lastName_d"]) &&
    isset($_POST["email_d"]) &&
    isset($_POST["passwd_d"]) &&
    isset($_POST["confirmPassword_d"]) 
   
) {
    if (
        !empty($_POST["cin_d"]) &&
        !empty($_POST['firstName_d']) &&
        !empty($_POST["lastName_d"]) &&
        !empty($_POST["email_d"]) &&
        !empty($_POST["passwd_d"]) &&
        !empty($_POST["confirmPassword_d"]) 
    ) {
        $docteur = new docteur(
            $_POST['cin_d'],
            $_POST['firstName_d'],
            $_POST['lastName_d'],
            $_POST['email_d'],
            $_POST['passwd_d'],
            $_POST['confirmPassword_d']
        );
        $docteurC->updatedocteur($docteur, $_POST["cin_d"]);
        header('Location:Listdocteurs.php');
    } else
        $error = "Missing information";
}
?>





  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/mylogo.png">
    <title>Patient Update</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
  </head>
  <body>
  
 
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['cin_d'])) {
        $docteur=$docteurC->showdocteur($_POST['cin_d']);
    }
    ?>
   
    <a href="Listdocteurs.php" style="text-decoration:none" target="_blank" >Back to list </a>
    
 
    <div id="error">
        <?php echo $error; ?>
    </div>
    <style>



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
  background: #00FF00;
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
  background: #00FF00;
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

.button2 {background-color: #00FF00;} /* Blue */
.button3 {background-color: #f44336;} /* Red */ 
.button4 {background-color: #e7e7e7; color: black;} /* Gray */ 
.button5 {background-color: #555555;} /* Black */

a:link, a:visited {
  background-color: #00FF00;
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
    
    <input type="number" name="cin_d"  value="<?php echo $docteur['cin_d']; ?>" id="cin_d" placeholder="ID Card" pattern="[0-9]+" minlength="8" maxlength="8" required />
    <input type="text" name="firstName_d" id="firstName_d" value="<?php echo $docteur['firstName_d']; ?>" placeholder="First Name" pattern="[A-Za-z\- ]+" minlength="3" maxlength="25" required />
    <input type="text" name="lastName_d" id="lastName_d" value="<?php echo $docteur['lastName_d']; ?>" placeholder="Last Name" pattern="[A-Za-z\- ]+" minlength="3" maxlength="25" required />
    <input type="email" name="email_d" id="email_d" value="<?php echo $docteur['email_d']; ?>" placeholder="Email address" minlength="12" maxlength="25"  required />
    <input type="password" name="passwd_d" id="passwd_d" value="<?php echo $docteur['passwd_d']; ?>" placeholder="Password" minlength="8" maxlength="30" required />
    <input type="password" name="confirmPassword_d" id="confirmPassword_d"  placeholder="Confirm Password" minlength="8" maxlength="30"  required />
          
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
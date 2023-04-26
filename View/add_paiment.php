<?php

include '../Controller/paimentC.php';
include '../Controller/card_infoC.php';

$error = "";
// create paiment and card_info variables
$paiment = null;
$card_info = null;

// create an instance of the controller for paiment and card_info tables
$paimentC = new paimentC();
$card_infoC = new card_infoC();

// check if all required fields are set in the POST request
if (
  isset($_POST["cin_p"]) &&
  isset($_POST["nom_prenom_p"]) &&
  isset($_POST["email_p"]) &&
  isset($_POST["adr"]) &&
  isset($_POST["city"]) &&
  isset($_POST["cname"]) &&
  isset($_POST["ccnum"]) &&
  isset($_POST["expmonth"]) &&
  isset($_POST["expyear"]) &&
  isset($_POST["cvv"])
) {
  // check if all required fields are non-empty
  if (
    !empty($_POST['cin_p']) &&
    !empty($_POST['nom_prenom_p']) &&
    !empty($_POST["email_p"]) &&
    !empty($_POST["adr"]) &&
    !empty($_POST["city"]) &&
    !empty($_POST["cname"]) &&
    !empty($_POST["ccnum"]) &&
    !empty($_POST["expmonth"]) &&
    !empty($_POST["expyear"]) &&
    !empty($_POST["cvv"])
  ) {
    // create a new payment object with the input values
    $paiment = new paiment(
      $_POST['cin_p'],
      $_POST['nom_prenom_p'],
      $_POST['email_p'],
      $_POST['adr'],
      $_POST['city']
    );

    // create a new card_info object with the input values
    $card_info = new card_info(
      $_POST['cin_p'],
      $_POST['cname'],
      $_POST['ccnum'],
      $_POST['expmonth'],
      $_POST['expyear'],
      $_POST['cvv']
    );

    // add the payment and card info to the database
    $paimentC->add_paiment($paiment);
    $card_infoC->add_paiment1($card_info); // use the payment's CIN as a foreign key in card_info table
    $paimentC->generatePDF($paiment) ;
    require_once('send.php');

  //  $paimentC->send_payment_email();
    header('Location:index.html');
  } else {
    $error = "Missing information";
  }
}


?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/mylogo.png">
<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="css/responsive.css">
		<link rel="stylesheet" type="text/css" href="css/stylep.css">
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <meta name="color-scheme" content="Light">
<style>
 
</style>
</head>
<body>
  <h2 style="color:DodgerBlue;"> Pay for your consultation </h2>
<div class="row">
  <div class="col-75">
    <div class="container">
    <div id="error">
        <?php echo $error; ?>
    </div>
  
    <form action="" method="POST" onsubmit="return passValidation()" >
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="cin_p"><i class="fa fa-user"></i> ID Card</label>
            <input type="text" id="cin_p" name="cin_p" placeholder="12345678" maxlength="8">

            <label for="nom_prenom_p"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="nom_prenom_p" name="nom_prenom_p" placeholder="John M. Doe">

            <label for="email_p"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email_p" name="email_p" placeholder="john@example.com">

            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="adr" placeholder="542 W. 15th Street">

            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York">

           
          </div>
   
           <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            
            
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cname" placeholder="John More Doe">

            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="ccnum" placeholder="1111-2222-3333-4444">

            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>

        </div>
        <input type="submit" value="Payer" name ="send" class="btn">

     
       
    </div>
  </div> 
          

  <div class="col-25">
    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>1</b></span></h4>
      <p> 1 session</a> <span class="price">120TND</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>120TND</b></span></p>
    </div>
  </div>
    
 
  <script>
				let docTitle = document.title;
window.addEventListener("blur",() => {document.title = "Come back :("; })
window.addEventListener("focus",() => {document.title = "Payment"; })





function passValidation() {

  const cinInput = document.getElementById("cin_p");
  const nomInput = document.getElementById("nom_prenom_p");
  const emailInput = document.getElementById("email_p");
  const adrInput = document.getElementById("adr");
  const cityInput = document.getElementById("city");

  const cinRegex = /^[0-9]{8}$/;
  const emailRegex = /^\S+@\S+\.\S+$/;

  if (!cinRegex.test(cinInput.value)) {
    alert("Please enter a valid ID card number.");
    return false;
  }

  if (nomInput.value === "") {
    alert("Please enter your full name.");
    return false;
  }

  if (!emailRegex.test(emailInput.value)) {
    alert("Please enter a valid email address.");
    return false;
  }

  if (adrInput.value === "") {
    alert("Please enter your address.");
    return false;
  }

  if (cityInput.value === "") {
    alert("Please enter your city.");
    return false;
  }
  alert("Payed Successfully !! Thank you for being a Therapico member !!!! ");

  return true;

}

			</script>
</div>

</body>
</html>

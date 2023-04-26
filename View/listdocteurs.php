<?php
include '../Controller/docteurC.php';
$docteurC = new docteurC();
$list = $docteurC->listdocteurs();
include '../Controller/suiviC.php'; 
$suiviC = new suiviC(); 
?>




<html>
    <body>
    
<div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                  <img src="mylogo.png" height="80" width="80" >  
                   

<html>

<head>


<meta name="color-scheme" content="Light">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/mylogo.png">
<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="css/responsive.css">
		<link rel="stylesheet" type="text/css" href="css/cssback.css">
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"

</head>

<body>

    <center>
        <h1>List Docteurs</h1>
        <h2>
            <a href="adddocteur.php">Add docteur</a>
        </h2>
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>CIN</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Confirm Password</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
        foreach ($list as $docteur) {
        ?>
            <tr>
                <td><?= $docteur['cin_d']; ?></td>
                <td><?= $docteur['firstName_d']; ?></td>
                <td><?= $docteur['lastName_d']; ?></td>
                <td><?= $docteur['email_d']; ?></td>
                <td><?= $docteur['passwd_d']; ?></td>
                <td><?= $docteur['confirmPassword_d']; ?></td>
                <td align="center">
                    <form method="POST" action="updatedocteur.php">
                        <input type="submit" name="update" value="Update">
                        <input type="hidden" value=<?PHP echo $docteur['cin_d']; ?> name="cin_d">
                    </form>
                </td>
                <td>
                    <a href="deletedocteur.php?cin_d=<?php echo $docteur['cin_d']; ?>">Delete</a>
                </td>
                 <td>

          <form method="POST" action="addsuivi.php"> 
        <input type="submit" name="add" value="add"> 
        <input type="hidden" value=<?PHP echo $docteur['cin_d']; ?> name="cin_d"> 
            </form>   </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>














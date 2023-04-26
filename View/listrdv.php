<?php
include '../Controller/rendez.php';
$rendez = new rendez();
$list = $rendez->listrdv();
?>
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                  <img src="images/fav-icon/mylogo.png" height="80" width="80" >  
                    <center>
                        <title>   List  Appointements</title>
                        
                         
                        
                         <h1>   List of Appointements</h1>
                         </center>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                          <th>ID rendez-vous</th>
            <th>Nom</th>
            <th>Prenom </th>
            <th>Age</th>
            <th>sexe</th>
            <th>Profession </th>
            <th>Type RDV</th>
            <th>Email </th>
            <th>Téléphone</th>
            <th>date RDV</th>
            <th></th>

            <th>Update</th>
            <th>Delete</th>
        </tr>
                        </thead>
                    <tbody>
                                

        <?php
   foreach ($list as $vous) {        ?>
            <tr>
            <td><?= $vous['ID_rdv']; ?></td>
                <td><?= $vous['Nom']; ?></td>
                <td><?= $vous['Prenom']; ?></td>
                <td><?= $vous['age']; ?></td>
                <td><?= $vous['Sexe']; ?></td>
                <td><?= $vous['Profession']; ?></td>
                <td><?= $vous['Type_RDV']; ?></td>
                <td><?= $vous['email_r']; ?></td>
                <td><?= $vous['telephone']; ?></td>
                <td><?= $vous['Date_RDV']; ?></td>
                <td align="center">
                       
                <td >


    
<form method="POST" action="updaterdv.php">
<input type="submit" name="update" value="Update">
   <input type="hidden" value=<?PHP echo $vous['ID_rdv']; ?> name="ID_rdv">
</form>
</td>
<td > 
  
<a href="deleterdv.php?ID_rdv=<?php echo $vous['ID_rdv']; ?>">Delete</a>
           
                </td>
            </tr>
        <?php
        }
        ?>
    </table>

   
</body>

 

</html>
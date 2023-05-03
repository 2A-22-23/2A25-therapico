<?php
include '../Controller/paimentC.php';
$paimentC = new paimentC();
$list = $paimentC->ListpaimentC();
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
                        <title>List Payments</title>
                        
                         
                        
                         <h1>List of Payments</h1>
                         <br>
                         </center>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                           
                          <th>Id Card</th>
            <th> Full Name </th>
            <th>Email </th>
            <th>Address</th>
            <th>City</th>
            <th>Prix</th>
            <th>     </th>
            <th>Update</th>
            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                                

        <?php
        foreach ($list as $paiment) {
        ?>
            <tr>
                <td><span class="ps-2"><?= $paiment['cin_p']; ?></td>
                <td><?= $paiment['nom_prenom_p']; ?></td>
                <td><?= $paiment['email_p']; ?></td>
                <td><?= $paiment['adr']; ?></td>
                <td><?= $paiment['city']; ?></td> 
                <td>120 DT</td> 
                <td align="center">
                       
                <td >

                   
<form method="POST" action="updatepaiment.php">
<input type="submit" name="update" value="Update">
   <input type="hidden" value=<?PHP echo $paiment['cin_p']; ?> name="cin_p">
</form>
</td>
<td > 
<a href="deletepaiment.php?cin_p=<?php echo $paiment['cin_p']; ?>">Delete</a>
              <!--<a href="deletepaiment.php?cin_p=<?php echo $patient['cin_p']; ?>" style="text-decoration:none" target="_blank">Delete</a> -->  
                </td>
            </tr>
        <?php
        }
        ?>
    </table>

   
</body>

 

</html>
<?php

include '../Controller/contactC.php';
$contactC = new contactC();
$list = $contactC->Listcontact();


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
                        <title>List Contacts</title>
                        
                         
                        
                         <h1>List of Contacts</h1>
                         <br>
                         </center>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                           
                          <th>id </th>
            <th>  name </th>
            <th>phone</th>
            <th>Email </th>
            <th>service</th>
            <th>message</th>
         
                          </tr>
                        </thead>
                        <tbody>
                                

        <?php
        foreach ($list as $contact) {
        ?>
            <tr>
                <td><span class="ps-2"><?= $contact['id_contact']; ?></td>
                <td><?= $contact['name_contact']; ?></td>
                <td><?= $contact['phone_contact']; ?></td>
                <td><?= $contact['email_contact']; ?></td>
                <td><?= $contact['service_contact']; ?></td> 
                <td><?= $contact['message_contact']; ?></td> 

                <td align="center">
                       
                <td >

  
</td>

            </tr>
        <?php
        }
        ?>
    </table>

   
</body>

 

</html>
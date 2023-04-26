<?php
include '../Controller/patientP.php';
$patientP = new patientP();
$list = $patientP->listPatients();
?>


<html>
  
<head>
<meta name="color-scheme" content="Light">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/mylogo.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/mylogo.png">

		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="css/responsive.css">
		<link rel="stylesheet" type="text/css" href="css/cssback.css">
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
    <body>
         

            </style>
<div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                  <img src="images/fav-icon/mylogo.png" height="80" width="80" >  
                    <center>
                        <title>List Patients</title>
                        
                         
                        
                         <h1>List of Patients</h1>
                         <br>
     <!--   <h2>
            <a href="addPatient.php">Add Patient</a>
        </h2>-->
                    </center>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                           
                            <th> ID Card </th>
                            <th> Fullname </th>
                            <th> Date Of Birth </th>
                            <th> Phone Number </th>
                            <th> Email Address </th>
                            <th> Gender </th>
                            <th> Password </th>
                            <th> Update </th>
                            <th> Delete </th>
                          </tr>
                        </thead>
                        <tbody>
                          
                              <div class="form-check form-check-muted m-0">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">
                                </label>
                              </div>

<?php
        foreach ($list as $patient) {
        ?>
            <tr>
                <td><span class="ps-2"> <?= $patient['cin_p']; ?> </span></td>
                <td><?= $patient['nom_prenom_p']; ?></td>
                <td><?= $patient['date_n_p']; ?></td>
                <td><?= $patient['tel_p']; ?></td>
                <td><?= $patient['email_p']; ?></td>
                <td><?= $patient['sexe_p']; ?></td>
                <td><?= $patient['pass_p']; ?></td>

                
                <td >

                   
                     <form method="POST" action="updatePatient.php">
                    <input type="submit" name="update" value="Update">
                        <input type="hidden" value=<?PHP echo $patient['cin_p']; ?> name="cin_p">
                    </form>
                </td>
      
        
                              
                <td >
                <a href="deletePatient.php?cin_p=<?php echo $patient['cin_p']; ?>" style="text-decoration:none" target="_blank">Delete</a>
                </td>
        
            </tr>
        <?php
        }
        ?>
    </body>
              </html>
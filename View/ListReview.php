<?php
include '../Controller/reviewR.php';
$reviewR= new reviewR();
$list = $reviewR->Listreview();
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
                           
                        
                            <th> Fullname </th>
                           
                        
                          
                       
                            <th> Review </th>
                           
                        </thead>
                        <tbody>
                          
                             

<?php
        foreach ($list as $review) {
        ?>
            <tr>
               
                <td><?= $review['fullname']; ?></td>
                <td><?= $review['review']; ?></td>
                
                
             
      
        
                              
               
        
            </tr>
        <?php
        }
        ?>
    </body>
              </html>
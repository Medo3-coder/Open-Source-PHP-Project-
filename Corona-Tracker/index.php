<?php 

include "logic.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid 19 Tracker</title>


    <!-- Bootstrap Css -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

    <!-- Bootstrap Js -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


     <!-- Google Fonts  -->

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

      <!-- FontAwesome kit  -->
    <script src="https://kit.fontawesome.com/ea9ba3061e.js" crossorigin="anonymous"></script>


     <!-- My Stylesheet  -->
     <link rel="stylesheet" href="style.css">



</head>
<body>

<div class="container-fluid bg-light p-5 text-center my-3">

<h1>Covid-19 Tracker</h1>
<h5 class="text-muted">An open Source Project to keep Track of all The Covid-19 Cases Around The World.</h5>

</div>


<div class="container my-5">

     <div class="row text-center">

         <div class="col-4 text-warning">
           <h5>Confirmed</h5>   
            <?php echo number_format($total_confirmed); ?>
        </div>
        <div class="col-4 text-success">
           <h5>Recovered</h5>   
           <?php echo number_format($total_recoverd) ;?>
        </div>
        <div class="col-4 text-danger">
           <h5>Deceased</h5>   
           <?php echo number_format($total_deaths) ;?>
        </div>



     </div>

</div>


<div class="container bg-light p-3 my-3 text-center">
  <h5 class="text-info"> Prevention Is The Cure. </h5>

  <p class="text-muted"> Stay Indoors Stay Safe.</p>


</div>


<div class="container-fluid">

<div class="table-responsive">

<table class="table">
    <thead class="thead-dark">
    <tr>

    <th scope="col">Countries</th>
    <th scope="col">Confirmed</th>
    <th scope="col">Recovered</th>
    <th scope="col">Deceased</th>
    
    </tr>
    </thead>

    <tbody>

      <?php 
           foreach($data as $key => $value){  
             $increase = $value[$Days_count]['confirmed'] - $value[$Days_count_prev]['confirmed'];
      ?>

          <tr>
               <th><?php echo $key ?></th>
               <td>
                 <?php echo number_format($value[$Days_count]['confirmed']); ?>
                 <?php if($increase > 0) { ?>

                  <small class="text-danger"><i class="fas fa-arrow-up"></i><?php echo number_format($increase) ?></small>

                  <?php } ?>
                     
                 
               </td>

               <td>
                 <?php echo number_format($value[$Days_count]['recovered']); ?>
               </td>
               
               <td>
                 <?php echo number_format($value[$Days_count]['deaths']); ?>
               </td>

               
          </tr>

      <?php
           }
      ?>

    </tbody>
</table>

</div>


</div>


<footer class="footer mt-auto py-3">
  <div class="container text-center">
    <span class="text-muted">
      My first open Source Project in PHP for Check 
       <a href="https://github.com/Medo3-coder/Open-Source-PHP-Project-">  Source Code </a>
    </span>
  </div>
</footer>
    
</body>
</html>
<?php
session_start();
if(!(isset($_SESSION['user']))){
  header("Location: loginForm.php");
}

require_once('config.php');
?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Fuel Quote History</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="SitePoint">
  <link rel="stylesheet" href="css/styles.css?v=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/fuelQuoteHistory.css">
</head>
<body bgcolor={{color}}>

 <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

                
                <li class="nav-item">
                <a class="nav-link active" href="fuelQuoteHistory.php">Quote History</a>
                </li>
                
                <li class="nav-item">
                <a class="nav-link active" href="edit.php">Edit profile</a>
                </li>
                
                 <li class="nav-item">
                <a class="nav-link active" href="fuelQuoteForm.php">Fuel quote form</a>
                </li>
                
                
                
                 <li class="nav-item">
                <a class="nav-link active" href="logout.php">Logout</a>
                </li>


            </ul>
            </div>
        </div>
        </nav>
	</div>
  <h1 class="text-center">Fuel Quote History </h1>
  <hr size="3">
  <div class="container">
      <div class="w-75 mx-auto">
        <form class="form-group centered" action="register" method="POST" style="align-items:center;">
          <h2 class="pull-left"></h2>
          <table align="center" cellspacing="5" cellpadding="8" class="table table-bordered table-striped">
              <tr><td align="left"><b>Gallons requested</b></td>
                  <td align="left"><b>Delivery Address</b></td>
                  <td align="left"><b>Order Date</b></td>
                  <td align="left"><b>Delivery Date</b></td>
                  <td align="left"><b>Suggested Price/Gallon</b></td>
                  <td align="left"><b>Total Amount</b></td>
   </form><br><br>
   </div>
  </div>
  <script src="js/scripts.js"></script>
</body>
</html>

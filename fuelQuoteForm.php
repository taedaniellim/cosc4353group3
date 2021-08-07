<?php
require_once('config.php');
session_start();
if(!(isset($_SESSION['user']))){
  header("Location: loginForm.php");
}


?>

<!DOCTYPE html>
<html>
<head>
<title>Fuel Quote</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="SitePoint">
  <link rel="stylesheet" href="css/styles.css?v=1.0">
  <link rel="stylesheet" href="../css/clientRegistration.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- For state Dropdown -->
  <link rel="stylesheet" href="https://www.solodev.com/assets/selectize/css/normalize.css">
  <link rel="stylesheet" href="https://www.solodev.com/assets/selectize/css/selectize.default.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

</head>
<body>

<?php
$username = $_SESSION['user']['username'];
$sql = "SELECT firstName FROM client WHERE username = '$username'";

$result = $db->query($sql);
$row = $result->fetch();

$firstName= $row["firstName"];

if($firstName == NULL){
  header("Location: clientProfile.php");
}

?>


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
    </div>
    <body bgcolor={{color}}>

<h1 class="text-center">Fuel Quote Form</h1>
<hr size="3">
<div class="container">
    <div class="w-75 mx-auto">

 <form class="form-group centered" action="register" method="POST" style="align-items:center;">
      <input class="form-control" type="number" name="gallons" id="gallons" placeholder="Gallons Requested" required></input><br><br>
      <input class="form-control" type="text" name="Address" id="Address" placeholder="Non-editable Delivery Address" readonly></input><br><br>
      <input class="form-control centered mx-auto" type="date" name="delieverydate" id="delieverydate" placeholder="DOB" ></input><br><br>
      <input class="form-control" type="numeric" name="text" id="gallons" placeholder="Non-Editable Suggested Price" readonly></input><br><br>
      <input class="form-control" type="numeric" name="text" id="amount" placeholder="Non-Editable Total Amount Due" readonly></input><br><br>
      <input class="form-control centered mx-auto" type="submit" name="submit" id="submit" value="SUBMIT"></input><br>


 </form><br><br>
 </div>
</div>
<script src="js/scripts.js"></script> 


</body>
</html
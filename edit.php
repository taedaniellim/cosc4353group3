<?php
session_start();
if(!(isset($_SESSION['user']))){
  header("Location: loginForm.php");
}
?>

<?php
require_once('config.php');
?>

<!DOCTYPE html>
<html>
<head>
<title>Client Profile Management</title>
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

    <div>
        <?php

        $username = $_SESSION['user']['username'];        
        $sql = "SELECT * FROM client WHERE username = '$username'";
        $result = $db->query($sql);
        $row = $result->fetch();

        if(isset($_POST['submit'])){
            $firstname = $_POST['firstName'];
            $lastname = $_POST['lastName'];
            $address_1 = $_POST['address_1'];
            $address_2 = $_POST['address_2'];
            $state = $_POST['state'];
            $city = $_POST['city'];
            $zipcode = $_POST['zipcode'];

            $sql = "UPDATE client 
            SET 
              firstName = ?, 
              lastName = ?,
              address_1 = ?,
              address_2 = ?, 
              state = ?,
              city = ?, 
              zipcode = ?
            WHERE
              username = '$username'";

            $stmtinsert = $db->prepare($sql);
            $result = $stmtinsert->execute([$firstname, $lastname, $address_1, $address_2, $state, $city, $zipcode, $username]);
            # check if successfully inserted
            if($result) {
                echo 'Successfully Imported!';
                header("Location: fuelQuoteForm.php");
            }
            else {
                echo 'Error';
            }
        }
        ?>
    </div>
  <h1 class="text-center"> <b> <?php ECHO $row['username']?> profile </b></h1>
  <hr size="3">
  <div class="container">
      <div class="w-75 mx-auto">

        <form class="form-group centered" method="POST" style="align-items:center;">
          <input class="form-control" type="text" name="firstName" id="firstName" maxlength = "50" placeholder="First Name" value ="<?php echo $row['firstName']?>"></input><br><br>
          <input class="form-control" type="text" name="lastName" id="lastName" maxlength = "50" placeholder="Last Name" value ="<?php echo $row['lastName']?>"></input><br><br>
          <input class="form-control" type="text" name="address_1" id="address_1" maxlength = "100" placeholder="Address 1" value ="<?php echo $row['address_1']?>"></input><br><br>
          <input class="form-control" type="text" name="address_2" id="address_2" maxlength = "100" placeholder="Address 2"value ="<?php echo $row['address_2']?>"></input><br><br>
          <select name="state" class="form-control" id="state">
            <option value="0" label="Select a state ... " selected="selected">Select a state ... </option>
            <option value="AL">AL</option>
            <option value="AK">AK</option>
            <option value="AZ">AZ</option>
            <option value="AR">AZ</option>
            <option value="CA">CA</option>
            <option value="CO">CO</option>
            <option value="CT">CT</option>
            <option value="DE">DE</option>
            <option value="FL">FL</option>
            <option value="GA">GA</option>
            <option value="HI">HI</option>
            <option value="ID">ID</option>
            <option value="IL">IL</option>
            <option value="IN">IN</option>
            <option value="IA">IA</option>
            <option value="KS">KS</option>
            <option value="KY">KY</option>
            <option value="LA">LA</option>
            <option value="ME">ME</option>
            <option value="MD">MD</option>
            <option value="MA">MA</option>
            <option value="MI">MI</option>
            <option value="MN">MN</option>
            <option value="MS">MS</option>
            <option value="MO">MO</option>
            <option value="MT">MT</option>
            <option value="NE">NE</option>
            <option value="NV">NV</option>
            <option value="NH">NH</option>
            <option value="NJ">NJ</option>
            <option value="NM">NM</option>
            <option value="NY">NY</option>
            <option value="NC">NC</option>
            <option value="ND">ND</option>
            <option value="OH">OH</option>
            <option value="OK">OK</option>
            <option value="OR">OR</option>
            <option value="PA">PA</option>
            <option value="RI">RI</option>
            <option value="SC">SC</option>
            <option value="SD">SD</option>
            <option value="TN">TN</option>
            <option value="TX">TX</option>
            <option value="UT">UT</option>
            <option value="VT">VT</option>
            <option value="VA">VA</option>
            <option value="WA">WA</option>
            <option value="WV">WV</option>
            <option value="WI">WI</option>
            <option value="WY">WY</option>
          </select><br><br>
          <input class="form-control" type="text" name="city" id="city" maxlength = "100" placeholder="City"value =" <?php echo $row['city']?>"></input><br><br>
          <input class="form-control" type="text" name="zipcode" id="zipcode" minlength = "5" maxlength = "9" placeholder="Zipcode" value ="<?php echo $row['zipcode']?>"></input><br><br>
          <input class="form-control centered mx-auto" type="submit" name="submit" id="submit" value="COMPLETE"></input><br>
   </form><br><br>
   </div>
  </div>
  <script src="js/scripts.js"></script>

</body>
</html
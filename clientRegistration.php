<?php
session_start();
require_once('config.php');

if(!(isset($_SESSION['user']))){
  header("Location: loginForm.php");
}
?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>REGISTRATION FORM</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="SitePoint">
  <link rel="stylesheet" href="css/styles.css?v=1.0">
  <link rel="stylesheet" href="../css/profileCompletion.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body bgcolor={{color}}>

<div>
<?php
$msg = '';

if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $password = sha1($_POST['password']);

  $sql = "INSERT INTO usercredentials (password) VALUES(?);
  INSERT INTO client (id, username) VALUES(LAST_INSERT_ID(), ?)";

  $stmtinsert = $db->prepare($sql);
  $result = $stmtinsert->execute([$password, $username]);

  # check if successfully created user
  if($result) {
      echo 'Successfully Registered! Please try logging in now!';
      header("Location: loginForm.php");
  }
  else {
      echo 'Error';
  }
}
?>

</div>


  <h1 class="text-center">Registration</h1>
  <hr size="3">
  <div class="container">
      <div class="w-75 mx-auto">

   <form class="form-group centered" action="clientRegistration.php" method="POST" style="align-items:center;">
        <input type="text" class="form-control" name="username" placeholder="Enter username" value="<?php if(!empty($_POST["username"])) { echo $_POST["username"]; } ?>" required>
        <input class="form-control" type="password" name="password" id="password" placeholder="Enter Password" required></input><br><br>

        <input class="btn btn-primary" type="submit" name="submit" id="submit" value="submit"></input><br><br>
        <span>Already have an Account ? <a href="loginForm.php">LOGIN HERE </a></span>

   </form><br><br>
   </div>
  </div>
  <script src="js/scripts.js"></script>

</body>
</html
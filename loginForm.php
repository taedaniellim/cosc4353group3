<?php
//require_once('connection.php');

session_start();

$msg = '';
            
if (isset($_POST['login']) && !empty($_POST['email']) && !empty($_POST['password'])) {

   if ($_POST['email'] == 'm@gmail.com' && $_POST['password'] == '1234') {
        $_SESSION['valid'] = true;
        $_SESSION['timeout'] = time();
        $_SESSION['email'] = 'm@gmail.com';
      
      header("Location: profile.php");
   }else {
      $msg = 'Wrong username or password';
      echo $msg;
   }
}

?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>LOGIN</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <link rel="stylesheet" href="css1/styles.css?v=1.0">
  <link rel="stylesheet" href="../css1/loginForm.css">
</head>

<body>
  <h1>Log In</h1>
   <hr size="3">
   <form  method="POST">


        <input type="email" name="email" id="email" placeholder="Email Address" required></input><br><br>
        <input type="password" name="password" id="password" placeholder="Enter Password" required></input><br><br>

        <input type="submit" class = "btn btn-primary" name="login" id="login" value="login"></input><br><br>
        <span>New Here?<br>Get yourself registered <a href="../php/clientRegistration.php">Here</a></span>

   </form><br><br>
   
 

</body>
</html
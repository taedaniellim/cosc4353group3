<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Login</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <link rel="stylesheet" href="css/styles.css?v=1.0">
  <link rel="stylesheet" href="../css/loginForm.css">
</head>

<body>
  <h1 class="text-center">Log In</h1>
   <hr size="3">
   <form action="login" method="POST">
        <input type="email" name="email" id="email" placeholder="Email Address" required> </input>
        <br><br>
        <input type="password" name="password" id="password" placeholder="Enter Password" required> </input>
        <br><br>
        <input type="submit" name="submit" id="submit" value="LOGIN"> </input>
        <br><br>
        <span>New Here?<br>Get yourself registered! <a href="clientRegistration.php">Here</a></span>
   </form><br><br>
</body>
</html>
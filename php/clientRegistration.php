<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Client Registration</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="SitePoint">
  <link rel="stylesheet" href="css/styles.css?v=1.0">
  <link rel="stylesheet" href="../css/clientRegistration.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body bgcolor={{color}}>
  <h1 class="text-center">Registration</h1>
  <hr size="3">
  <div class="container">
      <div class="w-75 mx-auto">
   <form class="form-group centered" action="register" method="POST" style="align-items:center;">
        <input class="form-control" type="text" name="Username" id="Username" placeholder="Username" required></input><br><br>
        <input class="form-control" type="password" name="password" id="password" placeholder="Enter Password" required></input><br><br>
        <input class="form-control centered mx-auto" type="submit" name="submit" id="submit" value="REGISTER"></input><br>
        <span>Already have an Account ? <a href="loginForm.php">LOGIN HERE </a></span>
   </form><br><br>
   </div>
  </div>
  <script src="js/scripts.js"></script>
</body> 
</html>
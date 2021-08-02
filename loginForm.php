<?php
session_start();
require_once('config.php');

$username = $_POST['username'];
$password = sha1($_POST['password']);

$sql = "SELECT * FROM UserCredentials WHERE username = ? AND password = ? LIMIT 1";
$stmtselect  = $db->prepare($sql);
$result = $stmtselect->execute([$username, $password]);

if($result){
	$user = $stmtselect->fetch(PDO::FETCH_ASSOC);
	if($stmtselect->rowCount() > 0){
		$_SESSION['userlogin'] = $user;
		header('Location: clientProfile.php');
	}else{
		echo 'Invalid Username or Password, please try again!';		
	}
}else{
	echo 'There were errors while connecting to database.';
}
?>

<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <title> Login </title>
   <meta name="description" content="The HTML5 Herald">
   <meta name="author" content="SitePoint">
   <link rel="stylesheet" href="css/styles.css?v=1.0">
   <link rel="stylesheet" href="../css/loginForm.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <form action="loginForm.php" onsubmit = "return validation()" method="post">
    <h1 class="text-center"> Client Login </h1>
    <hr size="3">
    <div class="container">
    <div class="w-75 mx-auto">
    <form class="form-group centered" action="register" method="POST" style="align-items:center;">
        <input class="form-control" type="text" name="username" id="username" placeholder="Username" required></input><br><br>
        <input class="form-control" type="password" name="password" id="password" placeholder="Enter Password" required></input><br><br>
        <input class="form-control centered mx-auto" type="submit" name="submit" id="submit" value="LOGIN"></input><br>
        <span> If you haven't created an account, register here! <a href="clientRegistration.php"> REGISTER HERE </a></span>
    </form><br><br>
    </div>
    </div>
    <script src="js/scripts.js"></script>
    </form>
</body> 
</html> 

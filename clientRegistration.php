<?php
require_once('config.php');
?>
<html>
<head>
    <title> Client Registration </title>
    <link rel="stylesheet" href="css1/styles.css?v=1.0">
    <link rel="stylesheet" href="../css1/clientRegistration.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
<div>
    <?php
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = sha1($_POST['password']);

        $sql = "INSERT INTO UserCredentials (username, password ) VALUES(?,?)";
        $stmtinsert = $db->prepare($sql);
        $result = $stmtinsert->execute([$username, $password]);
        # check if successfully created user
        if($result) {
            echo 'Successfully Registered! Please try logging in now!';
        }
        else {
            echo 'Error';
        }
    }
    ?>
</div>

<body bgcolor={{color}}>
    <form action="clientRegistration.php" method="post">
    <h1 class="text-center">Registration</h1>
    <hr size="3">
    <div class="container">
    <div class="w-75 mx-auto">
    <form class="form-group centered" action="register" method="POST" style="align-items:center;">
        <input class="form-control" type="text" name="username" id="username" placeholder="Username" required></input><br><br>
        <input class="form-control" type="password" name="password" id="password" placeholder="Enter Password" required></input><br><br>
        <input class="form-control centered mx-auto" type="submit" name="submit" id="submit" value="REGISTER"></input><br>
        <span> After creating an account, login here! <a href="loginForm.php"> LOGIN HERE </a></span>
    </form><br><br>
    </div>
    </div>
    <script src="js/scripts.js"></script>
    </form>
</body> 
</html>
<?php
require_once('config.php');

session_start();
?>

<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS file -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<div>
<?php
$msg = '';

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $username = $_POST["username"];
    $password = sha1($_POST["password"]);
    
    if($username == NULL || $password == NULL)
    {
        echo "Please enter both your username and password.";
    }
    else
    {
        if(isset($_POST["submit"]))
        {
            $sql = "SELECT username, password FROM client,usercredentials 
            WHERE username = ? AND password = ? AND client.id = usercredentials.id";
            $stmtselect = $db->prepare($sql);
            $result = $stmtselect->execute([$username, $password]);
            if($result){
                $username = $stmtselect->fetch(PDO::FETCH_ASSOC);
                if($stmtselect->rowCount() > 0){
                    $_SESSION['user'] = $username;
                    ECHO "good login";
                    
                    header('Location: fuelQuoteForm.php');
                    
                }
                else{
                    echo "Wrong username or password.";
                }
            }
        }

    }
}
?>

</div>


<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <h1 class="text-center my-3 mt-5"> Client Login </h1>
    <div class="container mt-5">
        <div class="row justify-content-around">
            <div class="col-3 p-2 bg-light border ">
                <p class="fs-4" fw-bold>Member Login</p>
                <form class="form-group centered"  method="POST" style="align-items:left;">
                <input class="form-control" type="text" name="username" id="username" placeholder="Enter Username" required></input><br><br>
                <input class="form-control" type="password" name="password" id="password" placeholder="Enter Password" required></input><br><br>
                <input class="form-control centered mx-auto" type="submit" name="submit" id="submit" value="login"></input><br>
                <span> If you haven't created an account, register here! <a href="clientRegistration.php"> REGISTER HERE </a></span>
                </form><br><br>
            </div>
        </div>
    </div>
    <script src="js/scripts.js"></script>
    
</body> 
</html> 
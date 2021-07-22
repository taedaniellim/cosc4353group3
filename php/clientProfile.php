<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
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

<body bgcolor={{color}}>
  <h1 class="text-center">Profile Management</h1>
  <hr size="3">
  <div class="container">
      <div class="w-75 mx-auto">
        <form class="form-group centered" action="register" method="POST" style="align-items:center;">
          <input class="form-control" type="text" name="Full Name" id="Full Name" maxlength = "50" placeholder="Full Name" required></input><br><br>
          <input class="form-control" type="text" name="address" id="address" maxlength = "100" placeholder="Address 1" required></input><br><br>
          <input class="form-control" type="text" name="address" id="address" maxlength = "100" placeholder="Address 2" optional></input><br><br>
          <select name="state" class="form-control" id="state" required>
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
          </select>
          <br><br>
          <input class="form-control" type="text" name="city" id="city" maxlength = "100" placeholder="City" required></input><br><br>
          <input class="form-control" type="text" name="zipcode" id="zipcode" minlength = "5" maxlength = "9" placeholder="Zipcode" required></input><br><br>
          <input class="form-control centered mx-auto" type="submit" name="submit" id="submit" value="COMPLETE"></input><br>
   </form><br><br>
   </div>
  </div>
  <script src="js/scripts.js"></script>
</body>
</html
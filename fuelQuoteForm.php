<!doctype html>
        <html lang="en">
        
        <head>
        <meta charset="utf-8">
        <title>Fuel Quote Form</title>
        <meta name="description" content="The HTML5 Herald">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="SitePoint">
        <link rel="stylesheet" href="css/styles.css?v=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../css/fuelQuoteForm.css">
        </head>
        
        <body bgcolor={{color}}>
        <h1 class="text-center">Fuel Quote Form</h1>
        <hr size="3">
        <div class="container">
        <div class="w-75 mx-auto">
        <form method="POST" action="/register" class="form-group centered" style="align-items:center;">
        <input class="form-control" type="number" name="gallons" id="gallons" placeholder="Gallons Requested" required></input><br><br>
        <input class="form-control" type="text" value="USA" name="Address" id="Address" placeholder="Non-editable Delivery Address" readonly></input><br><br>
        <input class="form-control centered mx-auto" type="date" name="delieverydate" id="delieverydate" placeholder="DOB" ></input><br><br>
        <input class="form-control" type="text" value="100" name="price" id="price" placeholder="Non-Editable Suggested Price" readonly></input><br><br>
        <input class="form-control" type="text" value="200" name="amount" id="amount" placeholder="Non-Editable Total Amount Due" readonly></input><br><br>
        <input class="form-control centered mx-auto" type="submit" name="submit" id="submit" value="SUBMIT"></input><br>
        </form><br><br>
        </div>
        </div>
        <script src="js/scripts.js"></script>
        </body>
        </html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="contacts.css">
        
      </head>
      <body>
        
      
      <?php
      include_once("template/nav.php");
      require_once("includes/dbconnect.php");

      if(isset($POST["submit"])){
      $em = $_POST["email"];
      $pass =  $_POST["password"];

$insert = "INSERT INTO customer (email,password)
VALUES ('$em', '$pass')";

if ($conn->query($insert) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $insert . "<br>" . $conn->error;
}
      }

$conn->close();
      ?>
    
        </nav>
        <h1 style="text-align: center; margin-top: 50px; color: rgb(114, 18, 18);">GET FIRST HAND INFO!</h1>
        <div class="container-fluid">
            <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]);?>"
             method="post">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>

                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>

                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        </div>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
        
      </body>
    </html>
</head>
<body>
    
</body>
</html>
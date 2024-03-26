<?php 
include 'connection.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    

  </head>
  <body>
    
  

<div class="card m-auto mt-5" style="width: 30rem;">
      <div class="card-header text-center">
        Register
      </div>
      <div class="card-body">


        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
          
      <div class="mb-3">
        <label for="name" class="form-label">Username</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Username...">
      </div>

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="xxxxx">
      </div>

      <div><label> <input type="radio" name="gender" value="make"> Male </label></div>
      <div><label> <input type="radio" name="gender" value="female"> Female </label></div> 

        <div class="form-check">
          <input class="form-check-input" name="agreement" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">
              Agree to terms and conditions
            </label>
          
          <div class="invalid-feedback">
            You must agree before submitting.
          </div>
        </div>

      <div class="col-12">
        <input type="submit" name="submit" class="btn btn-primary " value="Submit">

        <a href="login.php"> login </a>
      </div>
    </form>
  </div>
</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
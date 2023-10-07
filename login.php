<?php
@include 'config.php';
session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);


   $select = " SELECT * FROM users WHERE email = '$email' && password = '$pass';";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['type'] == 'superadmin'){

         $_SESSION['super_admin_email'] = $row['email'];
         header('location:superadmin.php');

      }elseif($row['type'] == 'admin'){

         $_SESSION['admin_email'] = $row['email'];
         header('location:admin.php');

      }elseif($row['type'] == 'user'){

         $_SESSION['user_email'] = $row['email'];
         header('location:user.php');

      }
     
   }else{
      $error[] = 'Incorrect email or password!';
   }

};
?>

<!doctype html>

<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>

  <body>
  
  <?php include "headercopy.php"?>

  <div class="position-absolute top-50 start-50 translate-middle w-50">
  <form method="POST">
  <label for="exampleInputEmail1" class="form-label"><h1>Login</h1></label>
  <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
  <label for="inputPassword5" class="form-label">Password</label>
<input type="password" name="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
  </div>
  <div class="mb-3">
  <a href="signup.php">Haven't you signed up yet?</a>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
  
  <?php include "footer.php"?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>

</html>
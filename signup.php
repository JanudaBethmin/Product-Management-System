<?php
@include 'config.php';

if(isset($_POST['submit'])){
    

   $fname = mysqli_real_escape_string($conn, $_POST['fname']);
   $lname = mysqli_real_escape_string($conn, $_POST['lname']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $phone = $_POST['phone'];
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);

   $select = " SELECT * FROM users WHERE email = '$email' || phone = '$phone';";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'User already exists!';

   }else{

      if($pass != $cpass){
         $error[] = 'Password does not match!';
      }else{
         $insert = "INSERT INTO users (fname, lname, email, password, phone, type) VALUES('$fname', '$lname', '$email','$pass','$phone','user');";
         mysqli_query($conn, $insert);
         header('location:login.php');
      }
   }

};


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

  <?php include "headercopy.php" ?>
 
  <div class="position-absolute top-50 start-50 translate-middle w-50">  
  <form class="row g-3" method="POST">
  <label for="exampleInputEmail1" class="form-label"><h1>Sign Up</h1></label>
  <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg"">'.$error.'</span>';
         };
      };
      ?>

  <div class="col-md-6">
    <label for="validationServer01" class="form-label">First name</label>
    <input type="text" name="fname" class="form-control" id="validationServer01" required>
  </div>
  <div class="col-md-6">
    <label for="validationServer02" class="form-label">Last name</label>
    <input type="text" name="lname" class="form-control" id="validationServer02" required>
  </div>
  <div class="col-md-12">
    <label for="validationServerUsername" class="form-label">Email</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend3">@</span>
      <input type="email" name="email" class="form-control" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationServer03" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="validationServer03" aria-describedby="validationServer03Feedback" required>
  </div>
  <div class="col-md-6">
    <label for="validationServer03" class="form-label">Confirm Password</label>
    <input type="password" name="cpassword" class="form-control" id="validationServer03" aria-describedby="validationServer03Feedback" required>
  </div>
  <div class="col-md-12">
    <label for="validationServerUsername" class="form-label">Phone Number</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend3">+94</span>
      <input type="tel" name="phone" class="form-control" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
    </div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
      <label class="form-check-label" for="invalidCheck3">
        Agree to terms and conditions
      </label>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit" name="submit">Sign Up</button>
  </div>
</form>
</div>   
<?php include "footer.php"?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
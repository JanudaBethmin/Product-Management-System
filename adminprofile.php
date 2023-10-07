<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_email'])){
   header('location:login.php');
}

?> 

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

  <?php include "header.php" ?>
 
  <div class="position-absolute top-50 start-50 translate-middle w-50">  
  <form class="row g-3" method="POST">
  <label for="exampleInputEmail1" class="form-label"><h1>Admin Profile</h1></label>
  <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>

<?php
$email = $_SESSION['admin_email'];
$sql = "SELECT fname,lname,email,phone FROM users WHERE email = '$email';";
$result = mysqli_query($conn, $sql);
$details = mysqli_fetch_assoc($result);
?>

<div class="col-md-6">
    <label for="validationServer01" class="form-label">First name</label>
    <input type="text" name="fname" class="form-control" id="validationServer01" value="<?php echo $details['fname'] ?>" required disabled>
  </div>
  <div class="col-md-6">
    <label for="validationServer02" class="form-label">Last name</label>
    <input type="text" name="lname" class="form-control" id="validationServer02" value="<?php echo $details['lname'] ?>" required disabled>
  </div>
  <div class="col-md-6">
    <label for="validationServerUsername" class="form-label">Email</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend3">@</span>
      <input type="email" name="email" class="form-control" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" value="<?php echo $details['email'] ?>" required disabled>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationServerUsername" class="form-label">Phone Number</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend3">+94</span>
      <input type="tel" name="phone" class="form-control" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" value="<?php echo $details['phone'] ?>" required disabled>
    </div>
  </div>
    </form>
</div>   
    <?php include "footer.php"?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
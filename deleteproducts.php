<?php
session_start();

require_once ('config.php');

if(isset($_POST['submit'])){

    $name = $_POST['name'];

    $select = "DELETE FROM products WHERE name = '$name' ;";
    mysqli_query($conn, $select);
    
    header('location:mngproducts.php');

}

if(isset($_POST['back'])){
    echo ("location:../mngproducts.php");
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Delete Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

  <?php include "header.php" ?>
 
  <div class="position-absolute top-50 start-50 translate-middle w-50">  
  <form class="row g-3" method="POST">
  <label for="exampleInputEmail1" class="form-label"><h1>Delete Products</h1></label>
  <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>

<div class="col-md-12">
    <label for="validationServer01" class="form-label">Product name</label>
    <input type="text" name="name" class="form-control" id="validationServer01" required>
  </div>

  <div class="col-12">
    <button class="btn btn-primary" type="submit" name="submit">Delete product</button>
  </div>

</form>
</div>   
<?php include "footer.php"?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>